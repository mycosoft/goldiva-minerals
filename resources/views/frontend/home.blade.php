@extends('frontend.layouts.master')

@section('title', 'Goldiva Minerals - Reliable Mineral Services in Uganda & Africa')

@section('content')
<section class="hero-bg min-h-screen flex items-center justify-center relative overflow-hidden">
    <div class="absolute inset-0" style="background-image: url('https://images.unsplash.com/photo-1610375461246-83df859d849d?w=1920'); background-size: cover; background-position: center;"></div>
    <div class="absolute inset-0 bg-gray-900/75"></div>
    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-gray-900/50"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-gold-500/5 rounded-full blur-3xl"></div>
    
    <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="flex flex-col items-center" data-aos="fade-up">
            <div class="inline-flex items-center gap-3 mb-8">
                <div class="w-12 h-px bg-gradient-to-r from-transparent to-gold-500"></div>
                <span class="text-gold-400 text-sm font-semibold uppercase tracking-[0.2em]">Welcome to</span>
                <div class="w-12 h-px bg-gradient-to-l from-transparent to-gold-500"></div>
            </div>
            
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold text-white leading-tight mb-6">
                <span class="text-gradient">Goldiva</span> Minerals
            </h1>
            
            <p class="text-gray-300 text-lg md:text-xl max-w-2xl mb-10">
                Your trusted partner for gold trading, smelting, and mineral consultancy across Uganda & Africa
            </p>
            
            <div class="flex flex-wrap justify-center gap-4 mb-20">
                <a href="{{ route('frontend.contact') }}" class="bg-white text-gray-900 px-8 py-4 rounded-full font-semibold hover:bg-gray-100 transition-all shadow-lg shadow-white/10 flex items-center gap-2">
                    <span>Contact Us</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
                <a href="{{ route('frontend.consulting') }}" class="btn-gold text-white px-8 py-4 rounded-full font-semibold shadow-lg shadow-gold-500/20 flex items-center gap-2">
                    <i class="fas fa-chart-line"></i>
                    <span>Get Consulting</span>
                </a>
            </div>
            
            <div class="absolute bottom-8 left-1/2 -translate-x-1/2" data-aos="fade-up" data-aos-delay="200">
                <a href="#about" class="text-gold-400 animate-bounce inline-block">
                    <i class="fas fa-chevron-down text-2xl"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div data-aos="fade-right">
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
            <div class="relative" data-aos="fade-left">
                <div class="absolute -top-4 -left-4 w-72 h-72 bg-gold-200 rounded-full opacity-20 blur-3xl"></div>
                <div class="absolute -bottom-4 -right-4 w-72 h-72 bg-gold-400 rounded-full opacity-20 blur-3xl"></div>
                <img src="https://images.unsplash.com/photo-1610375461246-83df859d849d?w=600&h=400&fit=crop" alt="Mining Operations" class="rounded-3xl shadow-2xl w-full h-80 object-cover">
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-gold-600 font-semibold text-sm uppercase tracking-wider">What We Offer</span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2">Our Services</h2>
            <p class="text-gray-600 mt-4 max-w-2xl mx-auto">Comprehensive mineral services tailored to meet your needs</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="card-hover bg-white rounded-2xl p-8 shadow-lg border border-gray-100" data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 gradient-gold rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                    <i class="fas fa-coins text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Buying & Selling</h3>
                <p class="text-gray-600">Expert gold trading services with competitive rates and secure transactions across Uganda and Africa.</p>
            </div>

            <div class="card-hover bg-white rounded-2xl p-8 shadow-lg border border-gray-100" data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 gradient-gold rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                    <i class="fas fa-fire text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Smelting</h3>
                <p class="text-gray-600">Professional smelting services ensuring the highest purity levels for your gold and mineral products.</p>
            </div>

            <div class="card-hover bg-white rounded-2xl p-8 shadow-lg border border-gray-100" data-aos="fade-up" data-aos-delay="300">
                <div class="w-16 h-16 gradient-gold rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                    <i class="fas fa-file-alt text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Documentation</h3>
                <p class="text-gray-600">Complete documentation services including export/import permits, assays, and regulatory compliance.</p>
            </div>

            <div class="card-hover bg-white rounded-2xl p-8 shadow-lg border border-gray-100" data-aos="fade-up" data-aos-delay="400">
                <div class="w-16 h-16 gradient-gold rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                    <i class="fas fa-headset text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Mineral Consultancy</h3>
                <p class="text-gray-600">Expert advisory services for mining operations, investment decisions, and industry best practices.</p>
            </div>
        </div>

        <div class="text-center mt-12" data-aos="fade-up">
            <a href="{{ route('frontend.services') }}" class="inline-flex items-center text-gold-600 font-semibold hover:text-gold-700 transition-colors">
                <span>View All Services</span>
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>

<section class="py-16 bg-gradient-to-br from-gray-900 to-gray-800 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-96 h-96 bg-gold-500 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-gold-500 rounded-full blur-3xl"></div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-8" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-3">Ready to Get Started?</h2>
            <p class="text-gray-300 max-w-xl mx-auto">Whether you need to buy or sell gold, require smelting services, or need expert consultancy, we're here to help.</p>
        </div>
        <div class="flex flex-wrap justify-center gap-4" data-aos="fade-up" data-aos-delay="200">
            <a href="{{ route('frontend.contact') }}" class="bg-white text-gray-900 px-6 py-3 rounded-full font-semibold hover:bg-gray-100 transition-all shadow-lg flex items-center space-x-2">
                <span>Contact Us</span>
                <i class="fas fa-arrow-right"></i>
            </a>
            <a href="{{ route('frontend.consulting') }}" class="btn-gold text-white px-6 py-3 rounded-full font-semibold shadow-lg flex items-center space-x-2">
                <i class="fas fa-chart-line"></i>
                <span>Request Consulting</span>
            </a>
        </div>
    </div>
</section>

<section class="py-16 bg-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12" data-aos="fade-up">
            <span class="text-gold-600 font-semibold text-sm uppercase tracking-wider">Why Choose Us</span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2">The Goldiva Advantage</h2>
            <p class="text-gray-600 mt-4 max-w-2xl mx-auto">What sets us apart in the mineral services industry</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="card-hover bg-white rounded-2xl p-8 shadow-lg border border-gray-100 text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 gradient-gold rounded-full flex items-center justify-center mb-6 shadow-lg mx-auto">
                    <i class="fas fa-gem text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Industry Expertise</h3>
                <p class="text-gray-600">Deep knowledge and years of experience in gold and mineral services across Africa.</p>
            </div>

            <div class="card-hover bg-white rounded-2xl p-8 shadow-lg border border-gray-100 text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 gradient-gold rounded-full flex items-center justify-center mb-6 shadow-lg mx-auto">
                    <i class="fas fa-handshake text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Trusted Partner</h3>
                <p class="text-gray-600">Building lasting relationships with transparent and reliable mineral transactions.</p>
            </div>

            <div class="card-hover bg-white rounded-2xl p-8 shadow-lg border border-gray-100 text-center" data-aos="fade-up" data-aos-delay="300">
                <div class="w-16 h-16 gradient-gold rounded-full flex items-center justify-center mb-6 shadow-lg mx-auto">
                    <i class="fas fa-shield-alt text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Compliance First</h3>
                <p class="text-gray-600">Full adherence to regulations with proper documentation and regulatory compliance.</p>
            </div>

            <div class="card-hover bg-white rounded-2xl p-8 shadow-lg border border-gray-100 text-center" data-aos="fade-up" data-aos-delay="400">
                <div class="w-16 h-16 gradient-gold rounded-full flex items-center justify-center mb-6 shadow-lg mx-auto">
                    <i class="fas fa-headset text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Customer Support</h3>
                <p class="text-gray-600">Dedicated support team available to assist you at every step of your journey.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-20 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900" style="background-image: url('https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=1920'); background-size: cover; background-position: center; opacity: 0.15;"></div>
    <div class="absolute inset-0 bg-gray-900/90"></div>
    <div class="absolute top-0 left-1/4 w-96 h-96 bg-gold-500/5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-gold-600/5 rounded-full blur-3xl"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-gold-400 font-semibold text-sm uppercase tracking-wider">Our Process</span>
            <h2 class="text-3xl md:text-4xl font-bold text-white mt-2">From Mine to Market</h2>
            <p class="text-gray-400 mt-4 max-w-2xl mx-auto">Our streamlined process ensures maximum value at every stage</p>
        </div>

        <div class="flex justify-between items-center gap-4">
            <div class="flex-1 bg-gradient-to-br from-gray-900 to-gray-800 border border-gold-500/30 rounded-2xl p-6 text-center hover:border-gold-500/60 transition-all duration-300 hover:shadow-xl hover:shadow-gold-500/10" data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 bg-gradient-to-br from-gold-400 to-gold-600 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg shadow-gold-500/30">
                    <i class="fas fa-hammer text-white text-2xl"></i>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Extraction Process</h3>
                <p class="text-gray-400 text-base">Professional mining and extraction from verified mineral sites</p>
            </div>

            <div class="flex items-center justify-center text-gold-500 text-2xl">
                <i class="fas fa-arrow-right"></i>
            </div>

            <div class="flex-1 bg-gradient-to-br from-gray-900 to-gray-800 border border-gold-500/30 rounded-2xl p-6 text-center hover:border-gold-500/60 transition-all duration-300 hover:shadow-xl hover:shadow-gold-500/10" data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 bg-gradient-to-br from-gold-400 to-gold-600 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg shadow-gold-500/30">
                    <i class="fas fa-cogs text-white text-2xl"></i>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Processing</h3>
                <p class="text-gray-400 text-base">Crushing, grinding and concentration of mineral ores</p>
            </div>

            <div class="flex items-center justify-center text-gold-500 text-2xl">
                <i class="fas fa-arrow-right"></i>
            </div>

            <div class="flex-1 bg-gradient-to-br from-gray-900 to-gray-800 border border-gold-500/30 rounded-2xl p-6 text-center hover:border-gold-500/60 transition-all duration-300 hover:shadow-xl hover:shadow-gold-500/10" data-aos="fade-up" data-aos-delay="300">
                <div class="w-16 h-16 bg-gradient-to-br from-gold-400 to-gold-600 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg shadow-gold-500/30">
                    <i class="fas fa-vial text-white text-2xl"></i>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Recovery</h3>
                <p class="text-gray-400 text-base">Advanced gold recovery methods with precision assaying</p>
            </div>

            <div class="flex items-center justify-center text-gold-500 text-2xl">
                <i class="fas fa-arrow-right"></i>
            </div>

            <div class="flex-1 bg-gradient-to-br from-gray-900 to-gray-800 border border-gold-500/30 rounded-2xl p-6 text-center hover:border-gold-500/60 transition-all duration-300 hover:shadow-xl hover:shadow-gold-500/10" data-aos="fade-up" data-aos-delay="400">
                <div class="w-16 h-16 bg-gradient-to-br from-gold-400 to-gold-600 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg shadow-gold-500/30">
                    <i class="fas fa-file-signature text-white text-2xl"></i>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Documentation</h3>
                <p class="text-gray-400 text-base">Complete legal export procedures with full compliance</p>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12" data-aos="fade-up">
            <span class="text-gold-600 font-semibold text-sm uppercase tracking-wider">Testimonials</span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2">What Our Clients Say</h2>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-gradient-to-br from-gold-50 to-white rounded-xl p-6 shadow-lg border border-gold-100" data-aos="fade-up" data-aos-delay="100">
                <div class="flex items-center mb-3">
                    <div class="text-gold-400 text-sm">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <p class="text-gray-600 mb-4 italic text-sm">"Their consultancy services saved us countless hours on documentation and compliance."</p>
                <div>
                    <h4 class="font-bold text-gray-900 text-sm">James Okello</h4>
                    <p class="text-gold-600 text-xs">Mining Director, Karamoja</p>
                </div>
            </div>

            <div class="bg-gradient-to-br from-gold-50 to-white rounded-xl p-6 shadow-lg border border-gold-100" data-aos="fade-up" data-aos-delay="200">
                <div class="flex items-center mb-3">
                    <div class="text-gold-400 text-sm">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <p class="text-gray-600 mb-4 italic text-sm">"Received our gold with guaranteed purity and complete transparency."</p>
                <div>
                    <h4 class="font-bold text-gray-900 text-sm">Sarah Namutebi</h4>
                    <p class="text-gold-600 text-xs">Gold Trader, Kampala</p>
                </div>
            </div>

            <div class="bg-gradient-to-br from-gold-50 to-white rounded-xl p-6 shadow-lg border border-gold-100" data-aos="fade-up" data-aos-delay="300">
                <div class="flex items-center mb-3">
                    <div class="text-gold-400 text-sm">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <p class="text-gray-600 mb-4 italic text-sm">"Excelled all expectations with their compliance-first approach."</p>
                <div>
                    <h4 class="font-bold text-gray-900 text-sm">Michael Roth</h4>
                    <p class="text-gold-600 text-xs">Investment Consultant, Dubai</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection