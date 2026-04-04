@extends('frontend.layouts.master')

@section('title', 'About Us - Goldiva Minerals')

@section('content')
<!-- Hero Section -->
<section class="pt-32 pb-20 hero-bg">
    <div class="max-w-7xl mx-auto px-4 text-center text-white fade-in">
        <h1 class="text-5xl md:text-6xl font-bold mb-6">About <span class="text-gradient">Goldiva Minerals</span></h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto">Professional mineral services built on trust, efficiency, and strong industry connections.</p>
    </div>
</section>

<!-- About Content -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-4xl font-bold text-gray-900 mb-6">Who We Are</h2>
                <p class="text-lg text-gray-600 mb-6">
                    Goldiva Minerals is a mineral services company based in Uganda, providing solutions in gold handling, processing, documentation, and consultancy.
                </p>
                <p class="text-lg text-gray-600 mb-6">
                    We work with miners, businesses, and individuals to ensure smooth and professional handling of mineral-related activities.
                </p>
                <div class="bg-gold-50 border-l-4 border-gold-500 p-6 rounded-r-lg">
                    <p class="text-gray-700 italic">"Our operations are built on trust, efficiency, and strong industry connections across Uganda and the region."</p>
                </div>
            </div>
            <div class="relative">
                <div class="bg-gradient-to-br from-gold-400 to-gold-600 rounded-2xl p-8 text-white">
                    <div class="w-24 h-24 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-gem text-5xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-center mb-4">Trusted Partner in Minerals</h3>
                    <p class="text-center text-gold-100">Serving Uganda and the African region with professional mineral services.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Focus -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Focus</h2>
            <p class="text-lg text-gray-600">What drives us every day</p>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="bg-white p-8 rounded-2xl shadow-lg card-hover text-center">
                <div class="w-16 h-16 bg-gold-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-handshake text-2xl text-gold-600"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Reliable Service</h3>
                <p class="text-gray-600">Consistent, dependable service delivery you can count on.</p>
            </div>
            <div class="bg-white p-8 rounded-2xl shadow-lg card-hover text-center">
                <div class="w-16 h-16 bg-gold-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-award text-2xl text-gold-600"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Professional Handling</h3>
                <p class="text-gray-600">Expert management of all mineral-related activities.</p>
            </div>
            <div class="bg-white p-8 rounded-2xl shadow-lg card-hover text-center">
                <div class="w-16 h-16 bg-gold-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-clipboard-check text-2xl text-gold-600"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Industry Compliance</h3>
                <p class="text-gray-600">Full adherence to regulations and best practices.</p>
            </div>
            <div class="bg-white p-8 rounded-2xl shadow-lg card-hover text-center">
                <div class="w-16 h-16 bg-gold-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-users text-2xl text-gold-600"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Long-term Partnerships</h3>
                <p class="text-gray-600">Building lasting relationships with clients and partners.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 gradient-gold">
    <div class="max-w-4xl mx-auto px-4 text-center text-white">
        <h2 class="text-4xl font-bold mb-6">Ready to Work With Us?</h2>
        <p class="text-xl mb-8 text-white/90">Get in touch to discuss your mineral services needs.</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('frontend.contact') }}" class="bg-white text-gold-600 px-8 py-4 rounded-full font-bold hover:bg-gray-100 transition-all shadow-lg">
                Contact Us
            </a>
            <a href="{{ route('frontend.consulting') }}" class="border-2 border-white text-white px-8 py-4 rounded-full font-bold hover:bg-white/10 transition-all">
                Get Consulting
            </a>
        </div>
    </div>
</section>
@endsection
