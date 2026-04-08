@extends('frontend.layouts.master')

@section('title', 'About Goldiva Minerals - Trusted Mineral Services Company in Uganda')
@section('meta_title', 'About Goldiva Minerals - Trusted Mineral Services Company in Uganda')
@section('meta_description', 'Learn about Goldiva Minerals, a premier mineral services company based in Uganda. We provide gold trading, smelting, documentation, and consultancy services across Africa with professionalism and integrity.')
@section('meta_keywords', 'about Goldiva Minerals, mineral company Uganda, gold services Africa, mineral services provider, Uganda mining company, mineral consultancy Africa')
@section('og_title', 'About Goldiva Minerals - Your Trusted Mineral Partner')
@section('og_description', 'Goldiva Minerals is a mineral services company based in Uganda, providing solutions in gold handling, processing, documentation, and consultancy.')
@section('og_image', asset('images/Text-image-Tz.jpg'))

@section('schema_markup')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "AboutPage",
    "mainEntity": {
        "@type": "Organization",
        "name": "Goldiva Minerals",
        "description": "Premier mineral services company based in Uganda",
        "url": "https://www.goldivaminerals.com"
    }
}
</script>
@endsection

@section('content')
<!-- Hero Section -->
<section class="pt-32 pb-20 hero-bg">
    <div class="max-w-7xl mx-auto px-4 text-center text-white">
        <h1 class="text-5xl md:text-6xl font-bold mb-6" data-aos="fade-up">About <span class="text-gradient">Goldiva Minerals</span></h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto" data-aos="fade-up">Professional mineral services built on trust, efficiency, and strong industry connections.</p>
    </div>
</section>

<!-- About Content -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div data-aos="fade-right">
                <span class="text-gold-600 font-semibold text-sm uppercase tracking-wider">Who We Are</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gold-600 mt-3 mb-6">Your Trusted Mineral Partner</h2>
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
            <div class="relative" data-aos="fade-left">
                <div class="absolute -top-4 -left-4 w-72 h-72 bg-gold-200 rounded-full opacity-20 blur-3xl"></div>
                <div class="absolute -bottom-4 -right-4 w-72 h-72 bg-gold-400 rounded-full opacity-20 blur-3xl"></div>
                <div class="relative rounded-2xl overflow-hidden shadow-[0_0_30px_rgba(217,167,83,0.3)] hover:shadow-[0_0_40px_rgba(217,167,83,0.5)] transition-all duration-300">
                    <img src="{{ asset('images/Text-image-Tz.jpg') }}" alt="Mining Operations" class="w-full h-80 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-gold-900/20 via-transparent to-transparent"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Focus -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <span class="text-gold-600 font-semibold text-sm uppercase tracking-wider">Our Focus</span>
            <h2 class="text-3xl md:text-4xl font-bold text-gold-600 mt-3">What Drives Us</h2>
            <p class="text-lg text-gray-600 mt-4 max-w-2xl mx-auto">Our core values guide everything we do</p>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="bg-white p-8 rounded-2xl shadow-lg card-hover text-center" data-aos="fade-up">
                <div class="w-16 h-16 gradient-gold rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                    <i class="fas fa-handshake text-2xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Reliable Service</h3>
                <p class="text-gray-600">Consistent, dependable service delivery you can count on.</p>
            </div>
            <div class="bg-white p-8 rounded-2xl shadow-lg card-hover text-center" data-aos="fade-up">
                <div class="w-16 h-16 gradient-gold rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                    <i class="fas fa-award text-2xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Professional Handling</h3>
                <p class="text-gray-600">Expert management of all mineral-related activities.</p>
            </div>
            <div class="bg-white p-8 rounded-2xl shadow-lg card-hover text-center" data-aos="fade-up">
                <div class="w-16 h-16 gradient-gold rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                    <i class="fas fa-clipboard-check text-2xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Industry Compliance</h3>
                <p class="text-gray-600">Full adherence to regulations and best practices.</p>
            </div>
            <div class="bg-white p-8 rounded-2xl shadow-lg card-hover text-center" data-aos="fade-up">
                <div class="w-16 h-16 gradient-gold rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                    <i class="fas fa-users text-2xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Long-term Partnerships</h3>
                <p class="text-gray-600">Building lasting relationships with clients and partners.</p>
            </div>
        </div>
    </div>
</section>

@endsection
