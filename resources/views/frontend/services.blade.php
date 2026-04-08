@extends('frontend.layouts.master')

@section('title', 'Our Services - Gold Trading, Smelting & Mineral Consultancy | Goldiva Minerals')
@section('meta_title', 'Gold Trading, Smelting, Documentation & Mineral Consultancy Services | Goldiva Minerals')
@section('meta_description', 'Goldiva Minerals offers comprehensive mineral services: gold buying & selling, smelting, documentation, and mineral consultancy. Professional services for miners and investors in Uganda and Africa.')
@section('meta_keywords', 'gold trading services, gold smelting services, mineral documentation, mineral consultancy Uganda, gold buying selling Africa, mineral services')
@section('og_title', 'Our Services - Comprehensive Mineral Services | Goldiva Minerals')
@section('og_description', 'Expert gold trading, smelting, documentation, and mineral consultancy services tailored to meet your needs.')
@section('og_image', asset('images/goldprocess.webp'))

@section('schema_markup')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "serviceType": "Mineral Services",
    "provider": {
        "@type": "Organization",
        "name": "Goldiva Minerals"
    },
    "areaServed": {
        "@type": "Place",
        "name": "Africa"
    },
    "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Mineral Services",
        "itemListElement": [
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "Gold Buying & Selling"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "Gold Smelting"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "Mineral Documentation"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "Mineral Consultancy"
                }
            }
        ]
    }
}
</script>
@endsection

@section('content')
<!-- Hero Section -->
<section class="pt-32 pb-20 hero-bg">
    <div class="max-w-7xl mx-auto px-4 text-center text-white">
        <h1 class="text-5xl md:text-6xl font-bold mb-6" data-aos="fade-up">Our <span class="text-gradient">Services</span></h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto" data-aos="fade-up">Comprehensive mineral services tailored to meet your needs.</p>
    </div>
</section>

<!-- Services Grid -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Buying & Selling -->
            <div class="bg-white rounded-2xl shadow-lg p-8 text-center border border-gray-100 card-hover" data-aos="fade-up">
                <div class="w-16 h-16 rounded-full border-2 border-gold-500 flex items-center justify-center mx-auto mb-6 shadow-lg">
                    <i class="fas fa-coins text-gold-500 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Buying & Selling</h3>
                <p class="text-gray-600">We facilitate the buying and selling of minerals through structured and professional processes. Our established networks ensure fair valuations and secure transactions for all parties involved.</p>
            </div>

            <!-- Smelting -->
            <div class="bg-white rounded-2xl shadow-lg p-8 text-center border border-gray-100 card-hover" data-aos="fade-up">
                <div class="w-16 h-16 rounded-full border-2 border-gold-500 flex items-center justify-center mx-auto mb-6 shadow-lg">
                    <i class="fas fa-fire text-gold-500 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Smelting Services</h3>
                <p class="text-gray-600">We provide smelting services to process gold and other mineral materials into refined form. Our facilities ensure efficient processing while maintaining the highest standards of safety and quality.</p>
            </div>

            <!-- Documentation -->
            <div class="bg-white rounded-2xl shadow-lg p-8 text-center border border-gray-100 card-hover" data-aos="fade-up">
                <div class="w-16 h-16 rounded-full border-2 border-gold-500 flex items-center justify-center mx-auto mb-6 shadow-lg">
                    <i class="fas fa-file-alt text-gold-500 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Documentation</h3>
                <p class="text-gray-600">We assist with preparation and handling of necessary mineral documentation and compliance requirements. We ensure all paperwork meets regulatory standards.</p>
            </div>

            <!-- Mineral Consultancy -->
            <div class="bg-white rounded-2xl shadow-lg p-8 text-center border border-gray-100 card-hover" data-aos="fade-up">
                <div class="w-16 h-16 rounded-full border-2 border-gold-500 flex items-center justify-center mx-auto mb-6 shadow-lg">
                    <i class="fas fa-headset text-gold-500 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Mineral Consultancy</h3>
                <p class="text-gray-600">We offer guidance and advisory services in mineral handling, processes, and industry practices. Our experts help you make informed decisions.</p>
            </div>
        </div>
    </div>
</section>
@endsection
