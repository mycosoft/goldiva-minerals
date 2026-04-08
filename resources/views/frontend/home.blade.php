@extends('frontend.layouts.master')

@section('title', 'Goldiva Minerals - Premier Gold Trading & Mineral Services in Uganda')
@section('meta_title', 'Goldiva Minerals - Premier Gold Trading & Mineral Services in Uganda')
@section('meta_description', 'Goldiva Minerals is Uganda\'s trusted partner for gold trading, smelting, documentation, and mineral consultancy. Serving miners and investors across Africa with professional mineral services.')
@section('meta_keywords', 'gold trading Uganda, mineral services Africa, gold smelting, mineral consultancy, gold doré, Uganda minerals, mineral documentation, gold export services')
@section('og_title', 'Goldiva Minerals - Your Trusted Mineral Services Partner in Uganda')
@section('og_description', 'Expert gold trading, smelting, documentation, and mineral consultancy services in Uganda. Trusted by miners and investors across Africa.')
@section('og_image', asset('images/hero1.jpeg'))

@section('schema_markup')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebSite",
    "name": "Goldiva Minerals",
    "url": "https://www.goldivaminerals.com",
    "potentialAction": {
        "@type": "SearchAction",
        "target": "https://www.goldivaminerals.com/search?q={search_term_string}",
        "query-input": "required name=search_term_string"
    }
}
</script>
@endsection

@section('content')
<section class="hero-bg min-h-[82vh] flex items-center justify-center relative overflow-hidden">
    <div class="absolute inset-0" style="background-image: url('{{ asset('images/hero1.jpeg') }}'); background-size: cover; background-position: center;"></div>
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
            
            <div class="flex flex-wrap justify-center gap-4">
                <a href="{{ route('frontend.contact') }}" class="bg-white text-gray-900 px-8 py-4 rounded-full font-semibold hover:bg-gray-100 transition-all shadow-lg shadow-white/10 flex items-center gap-2">
                    <span>Contact Us</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
                <a href="{{ route('frontend.consulting') }}" class="btn-gold text-white px-8 py-4 rounded-full font-semibold shadow-lg shadow-gold-500/20 flex items-center gap-2">
                    <i class="fas fa-chart-line"></i>
                    <span>Get Consulting</span>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="py-4 bg-gray-900 border-y border-gold-500/50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap justify-center items-center gap-6 md:gap-12">
            <div class="flex items-center gap-2">
                <i class="fas fa-coins text-gold-400 text-lg"></i>
                <span class="text-white font-semibold">Gold:</span>
                <span class="text-gold-400 font-bold">$3,350/oz</span>
            </div>
            <div class="flex items-center gap-2">
                <i class="fas fa-circle text-gold-300 text-xs"></i>
                <span class="text-white font-semibold">Silver:</span>
                <span class="text-gold-300 font-bold">$8.50/oz</span>
            </div>
            <div class="flex items-center gap-2">
                <i class="fas fa-chart-line text-green-400 text-lg"></i>
                <span class="text-white font-semibold">Change:</span>
                <span class="text-green-400 font-bold">+0.50%</span>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div data-aos="fade-right">
                <span class="text-gold-600 font-semibold text-sm uppercase tracking-wider">About Goldiva Minerals</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gold-600 mt-3 mb-6">Excellence in Mineral Services</h2>
                <p class="text-gray-600 leading-relaxed mb-4">
                    Goldiva Minerals is a premier mineral services company based in Uganda, serving clients across Africa. With years of experience in the industry, we have built a reputation for reliability, professionalism, and exceptional service delivery.
                </p>
                <p class="text-gray-600 leading-relaxed">
                    We specialize in gold trading, smelting, and mineral consultancy, offering end-to-end solutions from extraction to export. Our team of experts ensures every transaction meets the highest standards of quality and compliance, making us the preferred partner for miners, investors, and traders throughout the continent.
                </p>
            </div>
            <div class="relative" data-aos="fade-left">
                <div class="absolute -top-4 -left-4 w-72 h-72 bg-gold-200 rounded-full opacity-20 blur-3xl"></div>
                <div class="absolute -bottom-4 -right-4 w-72 h-72 bg-gold-400 rounded-full opacity-20 blur-3xl"></div>
                <div class="relative rounded-2xl overflow-hidden shadow-[0_0_30px_rgba(217,167,83,0.3)] hover:shadow-[0_0_40px_rgba(217,167,83,0.5)] transition-all duration-300">
                    <img src="{{ asset('images/ug-artisanal.jpg') }}" alt="Mining Operations" class="w-full h-80 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-gold-900/20 via-transparent to-transparent"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="text-gold-600 font-semibold text-sm uppercase tracking-wider">What We Offer</span>
            <h2 class="text-3xl md:text-4xl font-bold text-gold-600 mt-3">Our Services</h2>
            <p class="text-gray-600 mt-4 max-w-2xl mx-auto">Comprehensive mineral services tailored to meet your needs</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="card-hover bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                <div class="w-16 h-16 rounded-full border-2 border-gold-500 flex items-center justify-center mb-6 shadow-lg mx-auto">
                    <i class="fas fa-coins text-gold-500 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Buying & Selling</h3>
                <p class="text-gray-600">Expert gold trading services with competitive rates and secure transactions across Uganda and Africa.</p>
            </div>

            <div class="card-hover bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                <div class="w-16 h-16 rounded-full border-2 border-gold-500 flex items-center justify-center mb-6 shadow-lg mx-auto">
                    <i class="fas fa-fire text-gold-500 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Smelting Services</h3>
                <p class="text-gray-600">Professional smelting services ensuring the highest purity levels for your gold and mineral products.</p>
            </div>

            <div class="card-hover bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                <div class="w-16 h-16 rounded-full border-2 border-gold-500 flex items-center justify-center mb-6 shadow-lg mx-auto">
                    <i class="fas fa-file-alt text-gold-500 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Documentation</h3>
                <p class="text-gray-600">Complete documentation services including export/import permits, assays, and regulatory compliance.</p>
            </div>

            <div class="card-hover bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                <div class="w-16 h-16 rounded-full border-2 border-gold-500 flex items-center justify-center mb-6 shadow-lg mx-auto">
                    <i class="fas fa-headset text-gold-500 text-2xl"></i>
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

<section class="py-16 bg-gradient-to-br from-gray-900 to-gray-800 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-96 h-96 bg-gold-500 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-gold-500 rounded-full blur-3xl"></div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-8">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-3">Ready to Get Started?</h2>
            <p class="text-gray-300 max-w-xl mx-auto">Whether you need to buy or sell gold, require smelting services, or need expert consultancy, we're here to help.</p>
        </div>
        <div class="flex flex-wrap justify-center gap-4">
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
        <div class="text-center mb-12">
            <span class="text-gold-600 font-semibold text-sm uppercase tracking-wider">Why Choose Us</span>
            <h2 class="text-3xl md:text-4xl font-bold text-gold-600 mt-3">The Goldiva Advantage</h2>
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

<section class="py-20 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900" style="background-image: url('{{ asset('images/mining-process.png') }}'); background-size: cover; background-position: center; opacity: 0.15;"></div>
    <div class="absolute inset-0 bg-gray-900/90"></div>
    <div class="absolute top-0 left-1/4 w-96 h-96 bg-gold-500/5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-gold-600/5 rounded-full blur-3xl"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <span class="text-gold-400 font-semibold text-sm uppercase tracking-wider">Our Process</span>
            <h2 class="text-3xl md:text-4xl font-bold text-white mt-3">From Mine to Market</h2>
            <p class="text-gray-400 mt-4 max-w-2xl mx-auto">Our streamlined process ensures maximum value at every stage</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-gradient-to-br from-gray-900 to-gray-800 border border-gold-500/30 rounded-2xl p-6 text-center hover:border-gold-500/60 transition-all duration-300 hover:shadow-xl hover:shadow-gold-500/10">
                <div class="w-16 h-16 bg-gradient-to-br from-gold-400 to-gold-600 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg shadow-gold-500/30">
                    <i class="fas fa-hammer text-white text-2xl"></i>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Extraction Process</h3>
                <p class="text-gray-400 text-base">Professional mining and extraction from verified mineral sites</p>
            </div>

            <div class="hidden md:flex items-center justify-center text-gold-500 text-2xl lg:hidden">
                <i class="fas fa-arrow-down"></i>
            </div>

            <div class="bg-gradient-to-br from-gray-900 to-gray-800 border border-gold-500/30 rounded-2xl p-6 text-center hover:border-gold-500/60 transition-all duration-300 hover:shadow-xl hover:shadow-gold-500/10">
                <div class="w-16 h-16 bg-gradient-to-br from-gold-400 to-gold-600 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg shadow-gold-500/30">
                    <i class="fas fa-cogs text-white text-2xl"></i>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Processing</h3>
                <p class="text-gray-400 text-base">Crushing, grinding and concentration of mineral ores</p>
            </div>

            <div class="hidden md:flex items-center justify-center text-gold-500 text-2xl lg:hidden">
                <i class="fas fa-arrow-down"></i>
            </div>

            <div class="bg-gradient-to-br from-gray-900 to-gray-800 border border-gold-500/30 rounded-2xl p-6 text-center hover:border-gold-500/60 transition-all duration-300 hover:shadow-xl hover:shadow-gold-500/10">
                <div class="w-16 h-16 bg-gradient-to-br from-gold-400 to-gold-600 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg shadow-gold-500/30">
                    <i class="fas fa-vial text-white text-2xl"></i>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Recovery</h3>
                <p class="text-gray-400 text-base">Advanced gold recovery methods with precision assaying</p>
            </div>

            <div class="hidden md:flex items-center justify-center text-gold-500 text-2xl lg:hidden">
                <i class="fas fa-arrow-down"></i>
            </div>

            <div class="bg-gradient-to-br from-gray-900 to-gray-800 border border-gold-500/30 rounded-2xl p-6 text-center hover:border-gold-500/60 transition-all duration-300 hover:shadow-xl hover:shadow-gold-500/10">
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
        <div class="text-center mb-12">
            <span class="text-gold-600 font-semibold text-sm uppercase tracking-wider">Our Operations</span>
            <h2 class="text-3xl md:text-4xl font-bold text-gold-600 mt-3">Operations Across East Africa</h2>
            <p class="text-gray-600 mt-4">Explore our active mining operations and facilities through our gallery.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="group relative overflow-hidden rounded-2xl">
                <img src="{{ asset('images/Artisanal-mine1.jpg') }}" alt="Gold Mining" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-transparent to-transparent opacity-80"></div>
                <div class="absolute bottom-4 left-4">
                    <h3 class="text-white font-bold text-lg">Gold Mining Operations</h3>
                    <p class="text-gold-400 text-sm">Karamoja Region</p>
                </div>
            </div>
            <div class="group relative overflow-hidden rounded-2xl">
                <img src="{{ asset('images/goldprocess.webp') }}" alt="Smelting Process" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-transparent to-transparent opacity-80"></div>
                <div class="absolute bottom-4 left-4">
                    <h3 class="text-white font-bold text-lg">Smelting Process</h3>
                    <p class="text-gold-400 text-sm">High-Purity Refining</p>
                </div>
            </div>
            <div class="group relative overflow-hidden rounded-2xl">
                <img src="{{ asset('images/Ok-nasarawa-3.jpg') }}" alt="Mineral Exploration" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-transparent to-transparent opacity-80"></div>
                <div class="absolute bottom-4 left-4">
                    <h3 class="text-white font-bold text-lg">Mineral Exploration</h3>
                    <p class="text-gold-400 text-sm">Expert Analysis</p>
                </div>
            </div>
            <div class="group relative overflow-hidden rounded-2xl">
                <img src="{{ asset('images/leaching.jpeg') }}" alt="Laboratory Testing" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-transparent to-transparent opacity-80"></div>
                <div class="absolute bottom-4 left-4">
                    <h3 class="text-white font-bold text-lg">Quality Assurance</h3>
                    <p class="text-gold-400 text-sm">Lab Testing & Certification</p>
                </div>
            </div>
            <div class="group relative overflow-hidden rounded-2xl">
                <img src="{{ asset('images/gold11.webp') }}" alt="Trading Floor" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-transparent to-transparent opacity-80"></div>
                <div class="absolute bottom-4 left-4">
                    <h3 class="text-white font-bold text-lg">Global Trading</h3>
                    <p class="text-gold-400 text-sm">Secure Transactions</p>
                </div>
            </div>
            <div class="group relative overflow-hidden rounded-2xl">
                <img src="{{ asset('images/artisan-mine.jpg') }}" alt="African Operations" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-transparent to-transparent opacity-80"></div>
                <div class="absolute bottom-4 left-4">
                    <h3 class="text-white font-bold text-lg">African Operations</h3>
                    <p class="text-gold-400 text-sm">Pan-African Presence</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <span class="text-gold-600 font-semibold text-sm uppercase tracking-wider">Testimonials</span>
            <h2 class="text-3xl md:text-4xl font-bold text-gold-600 mt-3">What Our Clients Say</h2>
            <p class="text-gray-600 mt-4 max-w-2xl mx-auto">Trusted by clients across Africa and beyond for reliable mineral services</p>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100">
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

            <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100">
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

            <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100">
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