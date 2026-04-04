@extends('frontend.layouts.master')

@section('title', 'Goldiva Minerals - Reliable Mineral Services in Uganda & Africa')

@section('content')
<section class="hero-bg min-h-[70vh] flex items-center relative overflow-hidden border-b-4 border-gold-500">
    <div class="absolute inset-0 bg-gradient-to-r from-gray-900/90 to-transparent" style="background-image: url('https://images.unsplash.com/photo-1610375461246-83df859d849d?w=1920'); background-size: cover; background-position: center;"></div>
    <div class="absolute inset-0 bg-gradient-to-r from-gray-900/90 to-transparent"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 relative z-10">
        <div class="max-w-3xl fade-in">
            <h1 class="text-4xl md:text-6xl font-bold text-white leading-tight mb-6">
                Reliable Mineral Services in <span class="text-gradient">Uganda & Africa</span>
            </h1>
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
                <img src="https://images.unsplash.com/photo-1610375461246-83df859d849d?w=600&h=400&fit=crop" alt="Mining Operations" class="rounded-3xl shadow-2xl w-full h-80 object-cover">
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="text-gold-600 font-semibold text-sm uppercase tracking-wider">Why Choose Us</span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2">The Goldiva Advantage</h2>
            <p class="text-gray-600 mt-4 max-w-2xl mx-auto">What sets us apart in the mineral services industry</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="card-hover bg-white rounded-2xl p-8 shadow-lg border border-gray-100 text-center">
                <div class="w-16 h-16 gradient-gold rounded-full flex items-center justify-center mb-6 shadow-lg mx-auto">
                    <i class="fas fa-gem text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Industry Expertise</h3>
                <p class="text-gray-600">Deep knowledge and years of experience in gold and mineral services across Africa.</p>
            </div>

            <div class="card-hover bg-white rounded-2xl p-8 shadow-lg border border-gray-100 text-center">
                <div class="w-16 h-16 gradient-gold rounded-full flex items-center justify-center mb-6 shadow-lg mx-auto">
                    <i class="fas fa-handshake text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Trusted Partner</h3>
                <p class="text-gray-600">Building lasting relationships with transparent and reliable mineral transactions.</p>
            </div>

            <div class="card-hover bg-white rounded-2xl p-8 shadow-lg border border-gray-100 text-center">
                <div class="w-16 h-16 gradient-gold rounded-full flex items-center justify-center mb-6 shadow-lg mx-auto">
                    <i class="fas fa-shield-alt text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Compliance First</h3>
                <p class="text-gray-600">Full adherence to regulations with proper documentation and regulatory compliance.</p>
            </div>

            <div class="card-hover bg-white rounded-2xl p-8 shadow-lg border border-gray-100 text-center">
                <div class="w-16 h-16 gradient-gold rounded-full flex items-center justify-center mb-6 shadow-lg mx-auto">
                    <i class="fas fa-headset text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Customer Support</h3>
                <p class="text-gray-600">Dedicated support team available to assist you at every step of your journey.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-white">
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

<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="text-gold-600 font-semibold text-sm uppercase tracking-wider">Our Process</span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2">From Mine to Market</h2>
            <p class="text-gray-600 mt-4 max-w-2xl mx-auto">Our streamlined process ensures quality and transparency at every step</p>
        </div>

        <div class="relative">
            <div class="hidden lg:block absolute top-1/2 left-0 right-0 h-1 bg-gradient-to-r from-gold-200 via-gold-400 to-gold-600 transform -translate-y-1/2 z-0"></div>
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-8 relative z-10">
                <div class="text-center">
                    <div class="w-20 h-20 gradient-gold rounded-full flex items-center justify-center mb-6 shadow-lg mx-auto">
                        <i class="fas fa-search text-white text-2xl"></i>
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100">
                        <span class="inline-block bg-gold-100 text-gold-600 text-sm font-bold px-3 py-1 rounded-full mb-3">Step 1</span>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Exploration</h3>
                        <p class="text-gray-600 text-sm">Identifying and evaluating mineral deposits</p>
                    </div>
                </div>

                <div class="text-center">
                    <div class="w-20 h-20 gradient-gold rounded-full flex items-center justify-center mb-6 shadow-lg mx-auto">
                        <i class="fas fa-mountain text-white text-2xl"></i>
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100">
                        <span class="inline-block bg-gold-100 text-gold-600 text-sm font-bold px-3 py-1 rounded-full mb-3">Step 2</span>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Mining</h3>
                        <p class="text-gray-600 text-sm">Professional extraction operations</p>
                    </div>
                </div>

                <div class="text-center">
                    <div class="w-20 h-20 gradient-gold rounded-full flex items-center justify-center mb-6 shadow-lg mx-auto">
                        <i class="fas fa-cogs text-white text-2xl"></i>
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100">
                        <span class="inline-block bg-gold-100 text-gold-600 text-sm font-bold px-3 py-1 rounded-full mb-3">Step 3</span>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Processing</h3>
                        <p class="text-gray-600 text-sm">Crushing, grinding, and concentration</p>
                    </div>
                </div>

                <div class="text-center">
                    <div class="w-20 h-20 gradient-gold rounded-full flex items-center justify-center mb-6 shadow-lg mx-auto">
                        <i class="fas fa-fire-alt text-white text-2xl"></i>
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100">
                        <span class="inline-block bg-gold-100 text-gold-600 text-sm font-bold px-3 py-1 rounded-full mb-3">Step 4</span>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Smelting</h3>
                        <p class="text-gray-600 text-sm">Refining to pure gold bullion</p>
                    </div>
                </div>

                <div class="text-center">
                    <div class="w-20 h-20 gradient-gold rounded-full flex items-center justify-center mb-6 shadow-lg mx-auto">
                        <i class="fas fa-chart-line text-white text-2xl"></i>
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100">
                        <span class="inline-block bg-gold-100 text-gold-600 text-sm font-bold px-3 py-1 rounded-full mb-3">Step 5</span>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Market</h3>
                        <p class="text-gray-600 text-sm">Global trading and distribution</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="text-gold-600 font-semibold text-sm uppercase tracking-wider">Testimonials</span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2">What Our Clients Say</h2>
            <p class="text-gray-600 mt-4 max-w-2xl mx-auto">Hear from our satisfied clients about their experience with Goldiva Minerals</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-gradient-to-br from-gold-50 to-white rounded-2xl p-8 shadow-lg border border-gold-100">
                <div class="flex items-center mb-4">
                    <div class="text-gold-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <p class="text-gray-600 mb-6 italic">"Goldiva Minerals transformed our mining operations with their expert consultancy. Their professional approach to documentation and compliance saved us countless hours and potential legal issues."</p>
                <div class="flex items-center">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&h=100&fit=crop&crop=face" alt="Avatar" class="w-12 h-12 rounded-full mr-4 object-cover">
                    <div>
                        <h4 class="font-bold text-gray-900">James Okello</h4>
                        <p class="text-gold-600 text-sm">Mining Director, Karamoja Region</p>
                    </div>
                </div>
            </div>

            <div class="bg-gradient-to-br from-gold-50 to-white rounded-2xl p-8 shadow-lg border border-gold-100">
                <div class="flex items-center mb-4">
                    <div class="text-gold-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <p class="text-gray-600 mb-6 italic">"Their smelting services are second to none. We received our gold with guaranteed purity and complete documentation. The transparency and professionalism at every step is remarkable."</p>
                <div class="flex items-center">
                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=100&h=100&fit=crop&crop=face" alt="Avatar" class="w-12 h-12 rounded-full mr-4 object-cover">
                    <div>
                        <h4 class="font-bold text-gray-900">Sarah Namutebi</h4>
                        <p class="text-gold-600 text-sm">Gold Trader, Kampala</p>
                    </div>
                </div>
            </div>

            <div class="bg-gradient-to-br from-gold-50 to-white rounded-2xl p-8 shadow-lg border border-gold-100">
                <div class="flex items-center mb-4">
                    <div class="text-gold-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <p class="text-gray-600 mb-6 italic">"As an international investor, I needed a reliable partner in Africa. Goldiva Minerals exceeded all expectations with their compliance-first approach and consistent communication."</p>
                <div class="flex items-center">
                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=100&h=100&fit=crop&crop=face" alt="Avatar" class="w-12 h-12 rounded-full mr-4 object-cover">
                    <div>
                        <h4 class="font-bold text-gray-900">Michael Roth</h4>
                        <p class="text-gold-600 text-sm">Investment Consultant, Dubai</p>
                    </div>
                </div>
            </div>
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