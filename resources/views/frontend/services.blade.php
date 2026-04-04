@extends('frontend.layouts.master')

@section('title', 'Our Services - Goldiva Minerals')

@section('content')
<!-- Hero Section -->
<section class="pt-32 pb-20 hero-bg">
    <div class="max-w-7xl mx-auto px-4 text-center text-white fade-in">
        <h1 class="text-5xl md:text-6xl font-bold mb-6">Our <span class="text-gradient">Services</span></h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto">Comprehensive mineral services tailored to meet your needs.</p>
    </div>
</section>

<!-- Services Grid -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Buying & Selling -->
            <div class="text-center">
                <img src="https://images.unsplash.com/photo-1610375461246-83df859d849d?w=600&h=400&fit=crop" alt="Buying & Selling" class="w-full h-56 object-cover rounded-2xl mb-6 shadow-lg">
                <div class="w-16 h-16 bg-gold-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-coins text-2xl text-gold-600"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Buying & Selling</h3>
                <p class="text-gray-600">
                    We facilitate the buying and selling of minerals through structured and professional processes. Our established networks ensure fair valuations and secure transactions for all parties involved.
                </p>
            </div>

            <!-- Smelting -->
            <div class="text-center">
                <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=600&h=400&fit=crop" alt="Smelting" class="w-full h-56 object-cover rounded-2xl mb-6 shadow-lg">
                <div class="w-16 h-16 bg-gold-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-fire text-2xl text-gold-600"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Smelting</h3>
                <p class="text-gray-600">
                    We provide smelting services to process gold and other mineral materials into refined form. Our facilities ensure efficient processing while maintaining the highest standards of safety and quality.
                </p>
            </div>

            <!-- Documentation -->
            <div class="text-center">
                <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?w=600&h=400&fit=crop" alt="Documentation" class="w-full h-56 object-cover rounded-2xl mb-6 shadow-lg">
                <div class="w-16 h-16 bg-gold-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-file-alt text-2xl text-gold-600"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Documentation</h3>
                <p class="text-gray-600">
                    We assist with preparation and handling of necessary mineral documentation and compliance requirements. We ensure all paperwork meets regulatory standards.
                </p>
            </div>

            <!-- Mineral Consultancy -->
            <div class="text-center">
                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&h=400&fit=crop" alt="Mineral Consultancy" class="w-full h-56 object-cover rounded-2xl mb-6 shadow-lg">
                <div class="w-16 h-16 bg-gold-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-chart-line text-2xl text-gold-600"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Mineral Consultancy</h3>
                <p class="text-gray-600">
                    We offer guidance and advisory services in mineral handling, processes, and industry practices. Our experts help you make informed decisions.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
