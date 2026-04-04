@extends('frontend.layouts.master')

@section('title', 'Our Products - Goldiva Minerals')

@section('content')
<!-- Hero Section -->
<section class="pt-32 pb-20 hero-bg">
    <div class="max-w-7xl mx-auto px-4 text-center text-white fade-in">
        <h1 class="text-5xl md:text-6xl font-bold mb-6">Our <span class="text-gradient">Products</span></h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto">Premium mineral products sourced through trusted channels and partnerships.</p>
    </div>
</section>

<!-- Products Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Available Products</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Goldiva Minerals deals in gold and related mineral materials sourced through trusted channels and partnerships.
            </p>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Gold Doré -->
            <div class="bg-gradient-to-br from-gold-50 to-gold-100 rounded-2xl p-8 text-center card-hover border-2 border-gold-200">
                <div class="w-24 h-24 bg-gradient-to-br from-gold-400 to-gold-600 rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                    <i class="fas fa-coins text-4xl text-white"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Gold (Doré)</h3>
                <p class="text-gray-600 mb-6">
                    Raw gold in doré bar form, processed from ore to a semi-pure state, ready for further refinement.
                </p>
                <div class="bg-white rounded-lg p-4 mb-4">
                    <span class="text-gold-600 font-semibold">Purity: Variable (typically 60-90%)</span>
                </div>
                <a href="{{ route('frontend.contact') }}" class="btn-gold text-white px-6 py-3 rounded-full font-bold inline-block">
                    Inquire Now
                </a>
            </div>

            <!-- Processed Gold -->
            <div class="bg-gradient-to-br from-gold-50 to-gold-100 rounded-2xl p-8 text-center card-hover border-2 border-gold-200">
                <div class="w-24 h-24 bg-gradient-to-br from-gold-400 to-gold-600 rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                    <i class="fas fa-gem text-4xl text-white"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Processed Gold</h3>
                <p class="text-gray-600 mb-6">
                    Refined gold of high purity, suitable for investment, jewelry manufacturing, and industrial applications.
                </p>
                <div class="bg-white rounded-lg p-4 mb-4">
                    <span class="text-gold-600 font-semibold">Purity: 99.9% (999.9)</span>
                </div>
                <a href="{{ route('frontend.contact') }}" class="btn-gold text-white px-6 py-3 rounded-full font-bold inline-block">
                    Inquire Now
                </a>
            </div>

            <!-- Gold-bearing Materials -->
            <div class="bg-gradient-to-br from-gold-50 to-gold-100 rounded-2xl p-8 text-center card-hover border-2 border-gold-200">
                <div class="w-24 h-24 bg-gradient-to-br from-gold-400 to-gold-600 rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                    <i class="fas fa-mountain text-4xl text-white"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Gold-bearing Materials</h3>
                <p class="text-gray-600 mb-6">
                    Various mineral concentrates and ore materials containing gold, sourced from reputable mining operations.
                </p>
                <div class="bg-white rounded-lg p-4 mb-4">
                    <span class="text-gold-600 font-semibold">Content: Variable by source</span>
                </div>
                <a href="{{ route('frontend.contact') }}" class="btn-gold text-white px-6 py-3 rounded-full font-bold inline-block">
                    Inquire Now
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Note Section -->
<section class="py-12 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4">
        <div class="bg-white rounded-2xl shadow-lg p-8 border-l-4 border-gold-500">
            <div class="flex items-start">
                <div class="w-12 h-12 bg-gold-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                    <i class="fas fa-info-circle text-2xl text-gold-600"></i>
                </div>
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Important Note</h3>
                    <p class="text-gray-600">
                        All products are handled in accordance with applicable regulations and industry practices. We maintain full compliance with Uganda's mineral trading laws and international standards for responsible sourcing.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 gradient-gold">
    <div class="max-w-4xl mx-auto px-4 text-center text-white">
        <h2 class="text-4xl font-bold mb-6">Interested in Our Products?</h2>
        <p class="text-xl mb-8 text-white/90">Contact us to discuss your requirements or to place an order.</p>
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
