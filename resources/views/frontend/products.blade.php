@extends('frontend.layouts.master')

@section('title', 'Gold Products - Gold Doré, Nuggets, Dust & Processed Gold | Goldiva Minerals')
@section('meta_title', 'Premium Gold Products - Doré, Nuggets, Dust & Processed Gold | Goldiva Minerals')
@section('meta_description', 'Explore our premium gold products: Gold Doré, Processed Gold (99.9% purity), Gold Dust, Gold Nuggets, and Gold-bearing Materials. Sourced through trusted channels in Uganda and Africa.')
@section('meta_keywords', 'gold doré for sale, processed gold, gold nuggets, gold dust, gold bearing materials, buy gold Uganda, gold products Africa, mineral products')
@section('og_title', 'Our Products - Premium Gold Products | Goldiva Minerals')
@section('og_description', 'Premium mineral products: Gold Doré, Processed Gold, Gold Dust, Gold Nuggets, and Gold-bearing Materials sourced through trusted channels.')
@section('og_image', asset('images/gold11.webp'))

@section('schema_markup')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "ItemList",
    "name": "Gold Products",
    "itemListElement": [
        {
            "@type": "Product",
            "position": 1,
            "name": "Gold Doré",
            "description": "Raw gold in doré bar form, processed from ore to a semi-pure state",
            "brand": {
                "@type": "Brand",
                "name": "Goldiva Minerals"
            }
        },
        {
            "@type": "Product",
            "position": 2,
            "name": "Processed Gold",
            "description": "Refined gold of 99.9% purity for investment and industrial applications"
        },
        {
            "@type": "Product",
            "position": 3,
            "name": "Gold Dust",
            "description": "Fine gold particles recovered during mining operations"
        },
        {
            "@type": "Product",
            "position": 4,
            "name": "Gold Nuggets",
            "description": "Natural gold nuggets from alluvial deposits"
        },
        {
            "@type": "Product",
            "position": 5,
            "name": "Gold-bearing Materials",
            "description": "Mineral concentrates and ore materials containing gold"
        }
    ]
}
</script>
@endsection

@section('content')
<!-- Hero Section -->
<section class="pt-32 pb-20 hero-bg">
    <div class="max-w-7xl mx-auto px-4 text-center text-white">
        <h1 class="text-5xl md:text-6xl font-bold mb-6" data-aos="fade-up">Our <span class="text-gradient">Products</span></h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto" data-aos="fade-up">Premium mineral products sourced through trusted channels and partnerships.</p>
    </div>
</section>

<!-- Products Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Gold Doré -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden card-hover border border-gray-100" data-aos="fade-up">
                <img src="{{ asset('images/gold11.webp') }}" alt="Gold Dore" class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="w-16 h-16 gradient-gold rounded-full flex items-center justify-center mx-auto mb-4 -mt-12 relative z-10 border-4 border-white shadow-lg">
                        <i class="fas fa-coins text-2xl text-white"></i>
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
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden card-hover border border-gray-100" data-aos="fade-up">
                <img src="{{ asset('images/soil-gold.webp') }}" alt="Processed Gold" class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="w-16 h-16 gradient-gold rounded-full flex items-center justify-center mx-auto mb-4 -mt-12 relative z-10 border-4 border-white shadow-lg">
                        <i class="fas fa-gem text-2xl text-white"></i>
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

            <!-- Gold Dust -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden card-hover border border-gray-100" data-aos="fade-up">
                <img src="{{ asset('images/goldprocess.webp') }}" alt="Gold Dust" class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="w-16 h-16 gradient-gold rounded-full flex items-center justify-center mx-auto mb-4 -mt-12 relative z-10 border-4 border-white shadow-lg">
                        <i class="fas fa-sparkles text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Gold Dust</h3>
                    <p class="text-gray-600 text-center mb-4">
                        Fine gold particles recovered during mining and processing operations, ideal for further refinement.
                    </p>
                    <div class="bg-gold-50 rounded-lg p-3 text-center">
                        <span class="text-gold-600 font-semibold">Form: Fine particles</span>
                    </div>
                </div>
            </div>

            <!-- Gold Nuggets -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden card-hover border border-gray-100" data-aos="fade-up">
                <img src="{{ asset('images/diamond.png') }}" alt="Gold Nuggets" class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="w-16 h-16 gradient-gold rounded-full flex items-center justify-center mx-auto mb-4 -mt-12 relative z-10 border-4 border-white shadow-lg">
                        <i class="fas fa-star text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Gold Nuggets</h3>
                    <p class="text-gray-600 text-center mb-4">
                        Natural gold nuggets found in alluvial deposits, prized by collectors and investors for their natural beauty.
                    </p>
                    <div class="bg-gold-50 rounded-lg p-3 text-center">
                        <span class="text-gold-600 font-semibold">Form: Natural nuggets</span>
                    </div>
                </div>
            </div>

            <!-- Gold-bearing Materials -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden card-hover border border-gray-100" data-aos="fade-up">
                <img src="{{ asset('images/process1.jpg') }}" alt="Gold-bearing Materials" class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="w-16 h-16 gradient-gold rounded-full flex items-center justify-center mx-auto mb-4 -mt-12 relative z-10 border-4 border-white shadow-lg">
                        <i class="fas fa-mountain text-2xl text-white"></i>
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
    <div class="max-w-7xl mx-auto px-4">
        <div class="bg-white rounded-2xl shadow-lg p-8 border-l-4 border-gold-500">
            <div class="flex items-start">
                <div class="w-12 h-12 gradient-gold rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                    <i class="fas fa-info-circle text-2xl text-white"></i>
                </div>
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Important Note</h3>
                    <p class="text-gray-600">
                        All products are handled in accordance with applicable regulations and industry practices. We maintain full compliance with mineral trading laws and standards for responsible sourcing.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
