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
        <div class="grid grid-cols-3 gap-8">
            <!-- Gold Doré -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden card-hover border border-gray-100">
                <img src="https://images.unsplash.com/photo-1610375461246-83df859d849d?w=600&h=400&fit=crop" alt="Gold Doré" class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="w-16 h-16 bg-gold-100 rounded-full flex items-center justify-center mx-auto mb-4 -mt-12 relative z-10 border-4 border-white shadow-lg">
                        <i class="fas fa-coins text-2xl text-gold-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Gold (Doré)</h3>
                    <p class="text-gray-600 text-center mb-4">
                        Raw gold in doré bar form, processed from ore to a semi-pure state, ready for further refinement.
                    </p>
                    <div class="bg-gold-50 rounded-lg p-3 text-center">
                        <span class="text-gold-600 font-semibold">Purity: Variable (typically 60-90%)</span>
                    </div>
                </div>
            </div>

            <!-- Processed Gold -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden card-hover border border-gray-100">
                <img src="https://images.unsplash.com/photo-1605100804763-247f67b3557e?w=600&h=400&fit=crop" alt="Processed Gold" class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="w-16 h-16 bg-gold-100 rounded-full flex items-center justify-center mx-auto mb-4 -mt-12 relative z-10 border-4 border-white shadow-lg">
                        <i class="fas fa-gem text-2xl text-gold-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Processed Gold</h3>
                    <p class="text-gray-600 text-center mb-4">
                        Refined gold of high purity, suitable for investment, jewelry manufacturing, and industrial applications.
                    </p>
                    <div class="bg-gold-50 rounded-lg p-3 text-center">
                        <span class="text-gold-600 font-semibold">Purity: 99.9% (999.9)</span>
                    </div>
                </div>
            </div>

            <!-- Gold-bearing Materials -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden card-hover border border-gray-100">
                <img src="https://images.unsplash.com/photo-1518173946687-a4c8892bbd9f?w=600&h=400&fit=crop" alt="Gold-bearing Materials" class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="w-16 h-16 bg-gold-100 rounded-full flex items-center justify-center mx-auto mb-4 -mt-12 relative z-10 border-4 border-white shadow-lg">
                        <i class="fas fa-mountain text-2xl text-gold-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Gold-bearing Materials</h3>
                    <p class="text-gray-600 text-center mb-4">
                        Various mineral concentrates and ore materials containing gold, sourced from reputable mining operations.
                    </p>
                    <div class="bg-gold-50 rounded-lg p-3 text-center">
                        <span class="text-gold-600 font-semibold">Content: Variable by source</span>
                    </div>
                </div>
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

@endsection
