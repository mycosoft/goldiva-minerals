<?php

namespace App\Http\Middleware;

use App\Models\PageVisit;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TrackPageVisits
{
    public function handle(Request $request, Closure $next)
    {
        // Only track frontend pages (skip admin, api, debug, horizon, etc.)
        $path = $request->path();
        $skipPrefixes = ['admin', 'api', 'debug', 'horizon', 'telescope', '_debugbar', 'sanctum', 'oauth'];

        foreach ($skipPrefixes as $prefix) {
            if (str_starts_with($path, $prefix)) {
                return $next($request);
            }
        }

        $geoData = $this->getGeoData($request->ip());

        PageVisit::create([
            'page' => $path,
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'user_id' => auth()->id(),
            'visited_at' => now(),
            'country' => $geoData['country'] ?? null,
            'city' => $geoData['city'] ?? null,
            'device' => $this->getDevice($request->userAgent()),
            'browser' => $this->getBrowser($request->userAgent()),
            'os' => $this->getOS($request->userAgent()),
            'referer' => $request->header('referer'),
        ]);

        return $next($request);
    }

    protected function getGeoData(string $ip): array
    {
        if (in_array($ip, ['127.0.0.1', '::1', 'localhost', '0.0.0.0'])) {
            return ['country' => 'Local', 'city' => 'Local'];
        }

        try {
            $response = Http::timeout(2)->get("http://ip-api.com/json/{$ip}");
            if ($response->successful()) {
                $data = $response->json();
                return [
                    'country' => $data['country'] ?? null,
                    'city' => $data['city'] ?? null,
                ];
            }
        } catch (\Exception $e) {
            // Silently fail
        }

        return ['country' => null, 'city' => null];
    }

    protected function getDevice(string $userAgent): string
    {
        if (str_contains($userAgent, 'Mobile') || str_contains($userAgent, 'Android') || str_contains($userAgent, 'iPhone')) {
            return 'Mobile';
        }
        return 'Desktop';
    }

    protected function getBrowser(string $userAgent): string
    {
        if (str_contains($userAgent, 'Chrome')) return 'Chrome';
        if (str_contains($userAgent, 'Firefox')) return 'Firefox';
        if (str_contains($userAgent, 'Safari')) return 'Safari';
        if (str_contains($userAgent, 'Edge')) return 'Edge';
        if (str_contains($userAgent, 'Opera') || str_contains($userAgent, 'OPR')) return 'Opera';
        return 'Other';
    }

    protected function getOS(string $userAgent): string
    {
        if (str_contains($userAgent, 'Windows')) return 'Windows';
        if (str_contains($userAgent, 'Mac')) return 'macOS';
        if (str_contains($userAgent, 'Linux') && !str_contains($userAgent, 'Android')) return 'Linux';
        if (str_contains($userAgent, 'Android')) return 'Android';
        if (str_contains($userAgent, 'iOS') || str_contains($userAgent, 'iPhone') || str_contains($userAgent, 'iPad')) return 'iOS';
        return 'Other';
    }
}
