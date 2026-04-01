<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\PageVisit;
use App\Models\Service;
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
            'unread_contacts' => Contact::where('is_read', false)->count(),
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
        ];

        // Recent contacts
        $recentContacts = Contact::latest()->take(5)->get();

        return view('admin.home', compact(
            'stats',
            'visitorLabels',
            'visitorData',
            'contentDistribution',
            'recentContacts'
        ));
    }
}
