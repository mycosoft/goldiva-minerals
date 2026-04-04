@extends('frontend.layouts.master')

@section('title', 'Goldiva Minerals - Reliable Mineral Services in Uganda & Africa')

@section('content')
<section class="hero-bg min-h-screen flex items-center relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-r from-gray-900/90 to-transparent"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32 relative z-10">
        <div class="max-w-3xl fade-in">
            <div class="inline-flex items-center bg-gold-500/20 border border-gold-500/30 rounded-full px-4 py-2 mb-6">
                <i class="fas fa-star text-gold-400 mr-2"></i>
                <span class="text-gold-300 text-sm font-medium">Trusted Mineral Services Since 2010</span>
            </div>
            <h1 class="text-4xl md:text-6xl font-bold text-white leading-tight mb-6">
                Reliable Mineral Services in <span class="text-gradient">Uganda & Africa</span>
            </h1>
            <p class="text-xl text-gray-300 mb-8 leading-relaxed">
                Goldiva Minerals is your trusted partner for gold buying and selling, professional smelting services, comprehensive documentation, and expert mineral consultancy across Uganda and the African continent.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="{{ route('frontend.contact') }}" class="bg-white text-gray-900 px-8 py-4 rounded-full font-semibold hover:bg-gray-100 transition-all shadow-lg flex items-center space-x-2">
                    <span>Contact Us</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
                <a href="{{ route('frontend.consulting') }}" class="btn-gold text-white px-8 py-4 rounded-full font-semibold shadow-lg flex items-center space-x-2">
                    <i class="fas fa-chart-line"></i>
                    <span>Get Consulting</span>
                </a>
            </div>
        </div>
    </div>
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <i class="fas fa-chevron-down text-gold-400 text-2xl"></i>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div>
                <span class="text-gold-600 font-semibold text-sm uppercase tracking-wider">About Goldiva Minerals</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2 mb-6">Excellence in Mineral Services</h2>
                <p class="text-gray-600 leading-relaxed mb-6">
                    Goldiva Minerals is a premier mineral services company based in Uganda, serving clients across Africa. With years of experience in the industry, we have built a reputation for reliability, professionalism, and exceptional service delivery.
                </p>
                <p class="text-gray-600 leading-relaxed mb-8">
                    Our team of experts ensures that every transaction, from gold buying and selling to smelting and documentation, is handled with the utmost care and compliance with industry standards.
                </p>
                <div class="grid grid-cols-2 gap-6">
                    <div class="text-center p-6 bg-gold-50 rounded-xl">
                        <h3 class="text-3xl font-bold text-gold-600">500+</h3>
                        <p class="text-gray-600 text-sm">Happy Clients</p>
                    </div>
                    <div class="text-center p-6 bg-gold-50 rounded-xl">
                        <h3 class="text-3xl font-bold text-gold-600">10+</h3>
                        <p class="text-gray-600 text-sm">Years Experience</p>
                    </div>
                </div>
            </div>
            <div class="relative">
                <div class="absolute -top-4 -left-4 w-72 h-72 bg-gold-200 rounded-full opacity-20 blur-3xl"></div>
                <div class="absolute -bottom-4 -right-4 w-72 h-72 bg-gold-400 rounded-full opacity-20 blur-3xl"></div>
                <div class="relative bg-gradient-to-br from-gold-400 to-gold-600 rounded-3xl p-8 shadow-2xl">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-white/20 backdrop-blur rounded-2xl p-6 text-center">
                            <i class="fas fa-handshake text-white text-3xl mb-3"></i>
                            <p class="text-white font-semibold">Trusted Partner</p>
                        </div>
                        <div class="bg-white/20 backdrop-blur rounded-2xl p-6 text-center">
                            <i class="fas fa-certificate text-white text-3xl mb-3"></i>
                            <p class="text-white font-semibold">Certified</p>
                        </div>
                        <div class="bg-white/20 backdrop-blur rounded-2xl p-6 text-center">
                            <i class="fas fa-shield-alt text-white text-3xl mb-3"></i>
                            <p class="text-white font-semibold">Secure</p>
                        </div>
                        <div class="bg-white/20 backdrop-blur rounded-2xl p-6 text-center">
                            <i class="fas fa-globe-africa text-white text-3xl mb-3"></i>
                            <p class="text-white font-semibold">Pan-Africa</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="text-gold-600 font-semibold text-sm uppercase tracking-wider">What We Offer</span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2">Our Services</h2>
            <p class="text-gray-600 mt-4 max-w-2xl mx-auto">Comprehensive mineral services tailored to meet your needs</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="card-hover bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                <div class="w-16 h-16 gradient-gold rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                    <i class="fas fa-coins text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Buying & Selling</h3>
                <p class="text-gray-600">Expert gold trading services with competitive rates and secure transactions across Uganda and Africa.</p>
            </div>

            <div class="card-hover bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                <div class="w-16 h-16 gradient-gold rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                    <i class="fas fa-fire text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Smelting</h3>
                <p class="text-gray-600">Professional smelting services ensuring the highest purity levels for your gold and mineral products.</p>
            </div>

            <div class="card-hover bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                <div class="w-16 h-16 gradient-gold rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                    <i class="fas fa-file-alt text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Documentation</h3>
                <p class="text-gray-600">Complete documentation services including export/import permits, assays, and regulatory compliance.</p>
            </div>

            <div class="card-hover bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                <div class="w-16 h-16 gradient-gold rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                    <i class="fas fa-headset text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Mineral Consultancy</h3>
                <p class="text-gray-600">Expert advisory services for mining operations, investment decisions, and industry best practices.</p>
            </div>
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('frontend.services') }}" class="inline-flex items-center text-gold-600 font-semibold hover:text-gold-700 transition-colors">
                <span>View All Services</span>
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>

<section class="py-20 bg-gradient-to-br from-gray-900 to-gray-800 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-96 h-96 bg-gold-500 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-gold-500 rounded-full blur-3xl"></div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Ready to Get Started?</h2>
            <p class="text-gray-300 max-w-2xl mx-auto">Whether you need to buy or sell gold, require smelting services, or need expert consultancy, we're here to help you every step of the way.</p>
        </div>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="{{ route('frontend.contact') }}" class="bg-white text-gray-900 px-8 py-4 rounded-full font-semibold hover:bg-gray-100 transition-all shadow-lg flex items-center space-x-2">
                <span>Contact Us Today</span>
                <i class="fas fa-arrow-right"></i>
            </a>
            <a href="{{ route('frontend.consulting') }}" class="btn-gold text-white px-8 py-4 rounded-full font-semibold shadow-lg flex items-center space-x-2">
                <i class="fas fa-chart-line"></i>
                <span>Request Consulting</span>
            </a>
        </div>
    </div>
</section>
@endsection