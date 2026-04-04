@extends('frontend.layouts.master')

@section('title', 'Mineral Consulting - Goldiva Minerals')

@section('content')
<!-- Hero Section -->
<section class="pt-32 pb-20 hero-bg">
    <div class="max-w-7xl mx-auto px-4 text-center text-white fade-in">
        <h1 class="text-5xl md:text-6xl font-bold mb-6">Mineral <span class="text-gradient">Consulting</span></h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto">Expert guidance and advisory services for your mineral operations.</p>
    </div>
</section>

<!-- Consulting Content -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="text-4xl font-bold text-gray-900 mb-6">Expert Guidance for Your Mineral Operations</h2>
                <p class="text-lg text-gray-600 mb-6">
                    Goldiva Minerals provides consulting services to guide clients in mineral processes, handling, and industry practices. Our experienced team helps you navigate the complexities of the mineral industry.
                </p>
                <p class="text-lg text-gray-600 mb-8">
                    Whether you're a small-scale miner, an established business, or an investor looking to enter the mineral sector, we provide tailored advice to meet your specific needs.
                </p>
                <a href="{{ route('frontend.contact') }}" class="btn-gold text-white px-8 py-4 rounded-full font-bold inline-block shadow-lg">
                    Schedule a Consultation
                </a>
            </div>
            <div>
                <img src="https://images.unsplash.com/photo-1610375461246-83df859d849d?w=600&h=400&fit=crop" alt="Mineral Consulting" class="rounded-2xl shadow-2xl">
            </div>
        </div>
    </div>
</section>

<!-- What We Offer -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">What We Offer</h2>
            <p class="text-lg text-gray-600">Comprehensive consulting services tailored to your needs</p>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="bg-white p-8 rounded-2xl shadow-lg card-hover text-center">
                <div class="w-16 h-16 gradient-gold rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-compass text-2xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Process Guidance</h3>
                <p class="text-gray-600">Step-by-step guidance through mineral processing and handling procedures.</p>
            </div>
            <div class="bg-white p-8 rounded-2xl shadow-lg card-hover text-center">
                <div class="w-16 h-16 gradient-gold rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-lightbulb text-2xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Industry Advice</h3>
                <p class="text-gray-600">Expert insights on market trends, regulations, and best practices.</p>
            </div>
            <div class="bg-white p-8 rounded-2xl shadow-lg card-hover text-center">
                <div class="w-16 h-16 gradient-gold rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-cogs text-2xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Operational Support</h3>
                <p class="text-gray-600">Hands-on support to optimize your mineral operations.</p>
            </div>
            <div class="bg-white p-8 rounded-2xl shadow-lg card-hover text-center">
                <div class="w-16 h-16 gradient-gold rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-file-signature text-2xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Compliance Assistance</h3>
                <p class="text-gray-600">Help navigating regulatory requirements and documentation.</p>
            </div>
        </div>
    </div>
</section>

<!-- Who We Help -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Who We Help</h2>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="text-center">
                <div class="w-20 h-20 bg-gold-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-pickaxe text-3xl text-gold-600"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Small-Scale Miners</h3>
                <p class="text-gray-600">Get professional guidance to improve your operations and market access.</p>
            </div>
            <div class="text-center">
                <div class="w-20 h-20 bg-gold-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-building text-3xl text-gold-600"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Businesses</h3>
                <p class="text-gray-600">Strategic advice for companies involved in mineral trading and processing.</p>
            </div>
            <div class="text-center">
                <div class="w-20 h-20 bg-gold-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-user-tie text-3xl text-gold-600"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Investors</h3>
                <p class="text-gray-600">Due diligence and market entry guidance for mineral sector investments.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 gradient-gold">
    <div class="max-w-4xl mx-auto px-4 text-center text-white">
        <h2 class="text-4xl font-bold mb-6">Ready to Get Started?</h2>
        <p class="text-xl mb-8 text-white/90">Contact us for consulting services and let our experts guide your mineral operations.</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('frontend.contact') }}" class="bg-white text-gold-600 px-8 py-4 rounded-full font-bold hover:bg-gray-100 transition-all shadow-lg">
                Contact Us
            </a>
            <a href="{{ route('frontend.home') }}" class="border-2 border-white text-white px-8 py-4 rounded-full font-bold hover:bg-white/10 transition-all">
                Learn More
            </a>
        </div>
    </div>
</section>
@endsection
