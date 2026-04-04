<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\PageVisit;
use App\Models\Product;
use App\Models\Service;
use App\Models\User;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        $stats = [
            'blogs' => Blog::count(),
            'services' => Service::count(),
            'galleries' => Gallery::count(),
            'contacts' => Contact::count(),
            'products' => Product::count(),
            'users' => User::count(),
            'unread_contacts' => Contact::where('is_read', false)->count(),
            'total_visits' => PageVisit::count(),
            'today_visits' => PageVisit::whereDate('visited_at', Carbon::today())->count(),
        ];

        // Visitors data for last 7 days
        $visitors = PageVisit::selectRaw('DATE(visited_at) as date, COUNT(*) as count')
            ->where('visited_at', '>=', Carbon::now()->subDays(7))
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        $visitorLabels = [];
        $visitorData = [];
        for ($i = 6; $i >= 0; $i--) {
            $date = Carbon::now()->subDays($i)->format('Y-m-d');
            $visitorLabels[] = Carbon::now()->subDays($i)->format('M d');
            $visitorData[] = $visitors->where('date', $date)->first()?->count ?? 0;
        }

        // Content distribution for pie chart
        $contentDistribution = [
            'Blogs' => Blog::count(),
            'Services' => Service::count(),
            'Gallery' => Gallery::count(),
            'Products' => Product::count(),
        ];

        // Recent contacts
        $recentContacts = Contact::latest()->take(5)->get();

        // Top pages
        $topPages = PageVisit::selectRaw('page, COUNT(*) as count')
            ->groupBy('page')
            ->orderByDesc('count')
            ->take(5)
            ->get();

        // Top countries
        $topCountries = PageVisit::selectRaw('country, COUNT(*) as count')
            ->whereNotNull('country')
            ->groupBy('country')
            ->orderByDesc('count')
            ->take(5)
            ->get();

        // Recent visits (detailed)
        $recentVisits = PageVisit::with('user')
            ->latest('visited_at')
            ->take(10)
            ->get();

        // Device distribution
        $deviceDistribution = PageVisit::selectRaw('device, COUNT(*) as count')
            ->whereNotNull('device')
            ->groupBy('device')
            ->get()
            ->pluck('count', 'device')
            ->toArray();

        // Browser distribution
        $browserDistribution = PageVisit::selectRaw('browser, COUNT(*) as count')
            ->whereNotNull('browser')
            ->groupBy('browser')
            ->orderByDesc('count')
            ->take(5)
            ->get();

        return view('admin.home', compact(
            'stats',
            'visitorLabels',
            'visitorData',
            'contentDistribution',
            'recentContacts',
            'topPages',
            'topCountries',
            'recentVisits',
            'deviceDistribution',
            'browserDistribution',
        ));
    }
}
