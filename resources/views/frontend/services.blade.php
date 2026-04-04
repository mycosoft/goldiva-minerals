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
        <div class="grid md:grid-cols-2 gap-12">
            <!-- Buying & Selling -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden card-hover">
                <div class="h-2 gradient-gold"></div>
                <div class="p-8">
                    <div class="w-20 h-20 bg-gold-100 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-coins text-4xl text-gold-600"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Buying & Selling</h3>
                    <p class="text-gray-600 mb-6">
                        We facilitate the buying and selling of minerals through structured and professional processes. Our established networks ensure fair valuations and secure transactions for all parties involved.
                    </p>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center"><i class="fas fa-check text-gold-500 mr-3"></i> Fair market valuations</li>
                        <li class="flex items-center"><i class="fas fa-check text-gold-500 mr-3"></i> Secure transactions</li>
                        <li class="flex items-center"><i class="fas fa-check text-gold-500 mr-3"></i> Trusted partnerships</li>
                    </ul>
                </div>
            </div>

            <!-- Smelting -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden card-hover">
                <div class="h-2 gradient-gold"></div>
                <div class="p-8">
                    <div class="w-20 h-20 bg-gold-100 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-fire text-4xl text-gold-600"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Smelting</h3>
                    <p class="text-gray-600 mb-6">
                        We provide smelting services to process gold and other mineral materials into refined form. Our facilities ensure efficient processing while maintaining the highest standards of safety and quality.
                    </p>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center"><i class="fas fa-check text-gold-500 mr-3"></i> Professional processing</li>
                        <li class="flex items-center"><i class="fas fa-check text-gold-500 mr-3"></i> Quality assurance</li>
                        <li class="flex items-center"><i class="fas fa-check text-gold-500 mr-3"></i> Safe operations</li>
                    </ul>
                </div>
            </div>

            <!-- Documentation -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden card-hover">
                <div class="h-2 gradient-gold"></div>
                <div class="p-8">
                    <div class="w-20 h-20 bg-gold-100 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-file-alt text-4xl text-gold-600"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Documentation</h3>
                    <p class="text-gray-600 mb-6">
                        We assist with preparation and handling of necessary mineral documentation and compliance requirements. We ensure all paperwork meets regulatory standards.
                    </p>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center"><i class="fas fa-check text-gold-500 mr-3"></i> Regulatory compliance</li>
                        <li class="flex items-center"><i class="fas fa-check text-gold-500 mr-3"></i> Complete paperwork</li>
                        <li class="flex items-center"><i class="fas fa-check text-gold-500 mr-3"></i> Expert guidance</li>
                    </ul>
                </div>
            </div>

            <!-- Mineral Consultancy -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden card-hover">
                <div class="h-2 gradient-gold"></div>
                <div class="p-8">
                    <div class="w-20 h-20 bg-gold-100 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-chart-line text-4xl text-gold-600"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Mineral Consultancy</h3>
                    <p class="text-gray-600 mb-6">
                        We offer guidance and advisory services in mineral handling, processes, and industry practices. Our experts help you make informed decisions.
                    </p>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center"><i class="fas fa-check text-gold-500 mr-3"></i> Industry expertise</li>
                        <li class="flex items-center"><i class="fas fa-check text-gold-500 mr-3"></i> Strategic advice</li>
                        <li class="flex items-center"><i class="fas fa-check text-gold-500 mr-3"></i> Process optimization</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold text-gray-900 mb-6">Need Expert Guidance?</h2>
        <p class="text-xl text-gray-600 mb-8">Contact our team for professional mineral services or to request a consultation.</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('frontend.contact') }}" class="btn-gold text-white px-8 py-4 rounded-full font-bold shadow-lg">
                Contact Us
            </a>
            <a href="{{ route('frontend.consulting') }}" class="bg-gray-900 text-white px-8 py-4 rounded-full font-bold hover:bg-gray-800 transition-all">
                Get Consulting
            </a>
        </div>
    </div>
</section>
@endsection
