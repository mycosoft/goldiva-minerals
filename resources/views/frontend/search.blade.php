@extends('frontend.layouts.master')

@section('title', 'Search Results - Find Mineral Services & Products | Goldiva Minerals')
@section('meta_title', 'Search Results - Goldiva Minerals')
@section('meta_description', 'Search for mineral services, gold products, and consultancy services at Goldiva Minerals. Find what you need for your mining and investment needs.')
@section('meta_keywords', 'search mineral services, find gold products, mineral search, Goldiva search')
@section('robots', 'noindex, follow')

@section('content')
<!-- Hero Section -->
<section class="pt-32 pb-20 hero-bg">
    <div class="max-w-7xl mx-auto px-4 text-center text-white">
        <h1 class="text-5xl md:text-6xl font-bold mb-6" data-aos="fade-up">Search <span class="text-gradient">Results</span></h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto" data-aos="fade-up">Find what you're looking for</p>
    </div>
</section>

<!-- Search Form -->
<section class="py-12 bg-white border-b">
    <div class="max-w-3xl mx-auto px-4">
        <form action="{{ route('frontend.search') }}" method="GET" class="relative">
            <input type="text" name="q" placeholder="Search for services, products, articles..." class="w-full pl-14 pr-6 py-4 text-lg border-2 border-gray-200 rounded-2xl focus:outline-none focus:border-gold-500 focus:ring-4 focus:ring-gold-500/20 transition-all" value="{{ $query }}">
            <button type="submit" class="absolute left-5 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gold-500 transition-colors">
                <i class="fas fa-search text-xl"></i>
            </button>
        </form>
    </div>
</section>

<!-- Results Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        @if($query)
            <div class="mb-8">
                <p class="text-gray-600">
                    @if($results->count() > 0)
                        Found <span class="font-bold text-gold-600">{{ $results->count() }}</span> results for "<span class="font-semibold">{{ $query }}</span>"
                    @else
                        No results found for "<span class="font-semibold">{{ $query }}</span>"
                    @endif
                </p>
            </div>

            @if($results->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($results as $result)
                        <div class="bg-white rounded-2xl shadow-lg p-6 border border-gray-100 card-hover" data-aos="fade-up">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-10 h-10 gradient-gold rounded-full flex items-center justify-center">
                                    @if($result->type === 'Service')
                                        <i class="fas fa-cogs text-white"></i>
                                    @elseif($result->type === 'Product')
                                        <i class="fas fa-gem text-white"></i>
                                    @else
                                        <i class="fas fa-newspaper text-white"></i>
                                    @endif
                                </div>
                                <span class="text-xs font-semibold text-gold-600 uppercase tracking-wider">{{ $result->type }}</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">
                                {{ $result->title ?? $result->name ?? 'Untitled' }}
                            </h3>
                            <p class="text-gray-600 mb-4 line-clamp-3">
                                {{ Str::limit(strip_tags($result->description ?? $result->content ?? ''), 150) }}
                            </p>
                            <a href="{{ $result->url }}" class="inline-flex items-center text-gold-600 font-semibold hover:text-gold-700 transition-colors">
                                <span>View Details</span>
                                <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-16">
                    <div class="w-24 h-24 bg-gray-200 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-search text-4xl text-gray-400"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">No Results Found</h3>
                    <p class="text-gray-600 mb-6">We couldn't find anything matching your search. Try different keywords.</p>
                    <div class="flex flex-wrap justify-center gap-4">
                        <a href="{{ route('frontend.services') }}" class="text-gold-600 font-semibold hover:text-gold-700 transition-colors">
                            <i class="fas fa-cogs mr-2"></i>Browse Services
                        </a>
                        <a href="{{ route('frontend.products') }}" class="text-gold-600 font-semibold hover:text-gold-700 transition-colors">
                            <i class="fas fa-gem mr-2"></i>Browse Products
                        </a>
                        <a href="{{ route('frontend.contact') }}" class="text-gold-600 font-semibold hover:text-gold-700 transition-colors">
                            <i class="fas fa-envelope mr-2"></i>Contact Us
                        </a>
                    </div>
                </div>
            @endif
        @else
            <div class="text-center py-16">
                <div class="w-24 h-24 bg-gold-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-search text-4xl text-gold-500"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Start Your Search</h3>
                <p class="text-gray-600 max-w-md mx-auto">Enter a keyword above to search our services, products, and articles.</p>
            </div>
        @endif
    </div>
</section>
@endsection
