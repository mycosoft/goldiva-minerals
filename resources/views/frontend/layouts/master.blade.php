<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Primary Meta Tags -->
    <title>@yield('title', 'Goldiva Minerals - Gold Trading, Smelting & Mineral Consultancy in Uganda')</title>
    <meta name="title" content="@yield('meta_title', 'Goldiva Minerals - Gold Trading, Smelting & Mineral Consultancy in Uganda')">
    <meta name="description" content="@yield('meta_description', 'Goldiva Minerals is a premier mineral services company in Uganda offering gold trading, smelting, documentation, and mineral consultancy services across Africa. Trusted partner for miners and investors.')">
    <meta name="keywords" content="@yield('meta_keywords', 'gold trading Uganda, gold smelting Africa, mineral consultancy, gold doré, processed gold, mineral documentation, Uganda minerals, gold export, mineral services Africa')">
    <meta name="author" content="Goldiva Minerals">
    <meta name="robots" content="@yield('robots', 'index, follow')">
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <link rel="canonical" href="@yield('canonical_url', url()->current())">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="@yield('og_url', url()->current())">
    <meta property="og:title" content="@yield('og_title', 'Goldiva Minerals - Gold Trading, Smelting & Mineral Consultancy in Uganda')">
    <meta property="og:description" content="@yield('og_description', 'Goldiva Minerals is a premier mineral services company in Uganda offering gold trading, smelting, documentation, and mineral consultancy services across Africa.')">
    <meta property="og:image" content="@yield('og_image', asset('images/hero1.jpeg'))">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Goldiva Minerals">
    <meta property="og:locale" content="en_US">
    
    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="@yield('twitter_url', url()->current())">
    <meta name="twitter:title" content="@yield('twitter_title', 'Goldiva Minerals - Gold Trading, Smelting & Mineral Consultancy in Uganda')">
    <meta name="twitter:description" content="@yield('twitter_description', 'Goldiva Minerals is a premier mineral services company in Uganda offering gold trading, smelting, documentation, and mineral consultancy services across Africa.')">
    <meta name="twitter:image" content="@yield('twitter_image', asset('images/hero1.jpeg'))">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/hero1.jpeg') }}">
    
    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Goldiva Minerals",
        "alternateName": "Goldiva",
        "url": "https://www.goldivaminerals.com",
        "logo": "{{ asset('images/hero1.jpeg') }}",
        "description": "Goldiva Minerals is a premier mineral services company in Uganda offering gold trading, smelting, documentation, and mineral consultancy services across Africa.",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Kololo",
            "addressLocality": "Kampala",
            "addressCountry": "UG"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+256-790-342621",
            "contactType": "customer service",
            "availableLanguage": ["English"]
        },
        "sameAs": [
            "https://www.facebook.com/goldivaminerals",
            "https://www.linkedin.com/company/goldivaminerals",
            "https://www.instagram.com/goldivaminerals"
        ],
        "openingHours": "Mo-Fr 08:00-17:00"
    }
    </script>
    
    <!-- Local Business Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "Goldiva Minerals",
        "image": "{{ asset('images/hero1.jpeg') }}",
        "@id": "https://www.goldivaminerals.com",
        "url": "https://www.goldivaminerals.com",
        "telephone": "+256-790-342621",
        "email": "support@goldivaminerals.com",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Kololo",
            "addressLocality": "Kampala",
            "addressRegion": "Central Region",
            "addressCountry": "UG"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 0.3143,
            "longitude": 32.5861
        },
        "priceRange": "$$",
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
            "opens": "08:00",
            "closes": "17:00"
        }
    }
    </script>
    
    <!-- Service Schema -->
    @yield('schema_markup')
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        gold: {
                            50: '#FFF9E6',
                            100: '#FFF0BF',
                            200: '#FFE699',
                            300: '#FFDB6D',
                            400: '#FFD142',
                            500: '#D4AF37',
                            600: '#B8962E',
                            700: '#8C7023',
                            800: '#604C18',
                            900: '#34260D',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        html { scroll-behavior: smooth; }
        .gradient-gold { background: linear-gradient(135deg, #D4AF37 0%, #FFD700 50%, #D4AF37 100%); }
        .text-gradient { background: linear-gradient(135deg, #D4AF37, #FFD700); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        .nav-link { position: relative; }
        .nav-link::after { content: ''; position: absolute; bottom: -2px; left: 0; width: 0; height: 2px; background: #D4AF37; transition: width 0.3s ease; }
        .nav-link:hover::after { width: 100%; }
        .card-hover { transition: all 0.3s ease; }
        .card-hover:hover { transform: translateY(-8px); box-shadow: 0 20px 40px rgba(212, 175, 55, 0.2); }
        .btn-gold { background: linear-gradient(135deg, #D4AF37, #FFD700); transition: all 0.3s ease; }
        .btn-gold:hover { background: linear-gradient(135deg, #B8962E, #D4AF37); transform: scale(1.05); }
        .fade-in { animation: fadeIn 0.8s ease-out forwards; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
        .hero-bg { background: linear-gradient(135deg, rgba(52, 38, 13, 0.95) 0%, rgba(92, 76, 24, 0.9) 100%), url('https://images.unsplash.com/photo-1610375461246-83df859d849d?w=1920'); background-size: cover; background-position: center; }
        
    </style>
</head>
<body class="bg-gray-50 font-sans antialiased">
    <nav class="fixed w-full z-50 bg-white/95 backdrop-blur-md shadow-lg transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 gradient-gold rounded-xl flex items-center justify-center shadow-lg">
                        <i class="fas fa-gem text-white text-xl"></i>
                    </div>
                    <div>
                        <h1 class="text-xl font-bold text-gray-900">Goldiva</h1>
                        <p class="text-xs text-gold-600 -mt-1">Minerals</p>
                    </div>
                </div>
                
                <div class="hidden lg:flex items-center space-x-8">
                    <a href="{{ route('frontend.home') }}" class="nav-link text-gray-700 hover:text-gold-600 font-medium">Home</a>
                    <a href="{{ route('frontend.about') }}" class="nav-link text-gray-700 hover:text-gold-600 font-medium">About</a>
                    <a href="{{ route('frontend.services') }}" class="nav-link text-gray-700 hover:text-gold-600 font-medium">Services</a>
                    <a href="{{ route('frontend.products') }}" class="nav-link text-gray-700 hover:text-gold-600 font-medium">Products</a>
                    <a href="{{ route('frontend.contact') }}" class="nav-link text-gray-700 hover:text-gold-600 font-medium">Contact</a>
                    <div class="relative">
                        <form action="{{ route('frontend.search') }}" method="GET">
                            <input type="text" name="q" placeholder="Search..." class="w-40 pl-10 pr-4 py-2 text-sm border border-gray-200 rounded-full focus:outline-none focus:border-gold-500 focus:ring-2 focus:ring-gold-500/20 transition-all" value="{{ request('q') }}">
                            <button type="submit" class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gold-500 transition-colors">
                                <i class="fas fa-search"></i>
                            </button>
                        </form>
                    </div>
                    <a href="{{ route('frontend.consulting') }}" class="btn-gold text-white px-6 py-2.5 rounded-full font-semibold shadow-lg flex items-center space-x-2">
                        <i class="fas fa-chart-line"></i>
                        <span>Get Consulting</span>
                    </a>
                </div>

                <button class="lg:hidden text-gray-700" id="mobile-menu-btn">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>

        <div class="lg:hidden hidden bg-white border-t" id="mobile-menu">
            <div class="px-4 py-4 space-y-3">
                <a href="{{ route('frontend.home') }}" class="block text-gray-700 hover:text-gold-600 font-medium py-2">Home</a>
                <a href="{{ route('frontend.about') }}" class="block text-gray-700 hover:text-gold-600 font-medium py-2">About</a>
                <a href="{{ route('frontend.services') }}" class="block text-gray-700 hover:text-gold-600 font-medium py-2">Services</a>
                <a href="{{ route('frontend.products') }}" class="block text-gray-700 hover:text-gold-600 font-medium py-2">Products</a>
                <a href="{{ route('frontend.contact') }}" class="block text-gray-700 hover:text-gold-600 font-medium py-2">Contact</a>
                <a href="{{ route('frontend.consulting') }}" class="btn-gold text-white px-6 py-3 rounded-full font-semibold shadow-lg flex items-center justify-center space-x-2 mt-2">
                    <i class="fas fa-chart-line"></i>
                    <span>Get Consulting</span>
                </a>
            </div>
        </div>
    </nav>

    <main class="pt-16">
        @yield('content')
    </main>

    <footer class="bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
                <div>
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="w-12 h-12 gradient-gold rounded-xl flex items-center justify-center shadow-lg">
                            <i class="fas fa-gem text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold">Goldiva</h3>
                            <p class="text-xs text-gold-300 -mt-1">Minerals</p>
                        </div>
                    </div>
                    <p class="text-gray-400 leading-relaxed">Your trusted partner for mineral services in Uganda and across Africa. We deliver excellence in gold trading, smelting, and consultancy.</p>
                </div>

                <div>
                    <h4 class="text-lg font-semibold mb-6 text-gold-400">Quick Links</h4>
                    <ul class="space-y-3">
                        <li><a href="{{ route('frontend.about') }}" class="text-gray-400 hover:text-gold-400 transition-colors">About Us</a></li>
                        <li><a href="{{ route('frontend.services') }}" class="text-gray-400 hover:text-gold-400 transition-colors">Services</a></li>
                        <li><a href="{{ route('frontend.products') }}" class="text-gray-400 hover:text-gold-400 transition-colors">Products</a></li>
                        <li><a href="{{ route('frontend.contact') }}" class="text-gray-400 hover:text-gold-400 transition-colors">Contact</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-semibold mb-6 text-gold-400">Our Services</h4>
                    <ul class="space-y-3">
                        <li><a href="{{ route('frontend.services') }}" class="text-gray-400 hover:text-gold-400 transition-colors">Buying & Selling</a></li>
                        <li><a href="{{ route('frontend.services') }}" class="text-gray-400 hover:text-gold-400 transition-colors">Smelting</a></li>
                        <li><a href="{{ route('frontend.services') }}" class="text-gray-400 hover:text-gold-400 transition-colors">Documentation</a></li>
                        <li><a href="{{ route('frontend.consulting') }}" class="text-gray-400 hover:text-gold-400 transition-colors">Mineral Consultancy</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-semibold mb-6 text-gold-400">Contact Info</h4>
                    <ul class="space-y-4">
                        <li class="flex items-start space-x-3">
                            <i class="fas fa-map-marker-alt text-gold-400 mt-1"></i>
                            <span class="text-gray-400">Kololo, Kampala, Uganda</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <i class="fas fa-envelope text-gold-400 mt-1"></i>
                            <span class="text-gray-400">support@goldivaminerals.com</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <i class="fas fa-phone text-gold-400 mt-1"></i>
                            <span class="text-gray-400">+256 790 342621</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <i class="fas fa-globe text-gold-400 mt-1"></i>
                            <a href="https://www.goldivaminerals.com" target="_blank" class="text-gray-400 hover:text-gold-400 transition-colors">www.goldivaminerals.com</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-12 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-gray-500 text-sm">&copy; 2024 Goldiva Minerals. All rights reserved.</p>
                    <div class="flex space-x-6 mt-4 md:mt-0">
                        <a href="#" class="text-gray-400 hover:text-gold-400 transition-colors"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-400 hover:text-gold-400 transition-colors"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="text-gray-400 hover:text-gold-400 transition-colors"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <button id="moveToTop" onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="fixed bottom-8 right-8 bg-gradient-to-br from-gold-400 to-gold-600 text-white w-12 h-12 rounded-full shadow-lg flex items-center justify-center opacity-0 pointer-events-none transition-opacity duration-300 hover:from-gold-500 hover:to-gold-700 z-50">
            <i class="fas fa-arrow-up"></i>
        </button>
        <a href="https://wa.me/256790342621" class="fixed bottom-8 left-8 bg-green-500 text-white w-14 h-14 rounded-full shadow-lg flex items-center justify-center hover:bg-green-600 transition-all z-50">
            <i class="fab fa-whatsapp text-2xl"></i>
        </a>
    </footer>

    <script>
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        window.addEventListener('scroll', () => {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('shadow-xl');
            } else {
                navbar.classList.remove('shadow-xl');
            }

            const moveToTopBtn = document.getElementById('moveToTop');
            if (window.scrollY > 300) {
                moveToTopBtn.classList.remove('opacity-0', 'pointer-events-none');
                moveToTopBtn.classList.add('opacity-100');
            } else {
                moveToTopBtn.classList.add('opacity-0', 'pointer-events-none');
                moveToTopBtn.classList.remove('opacity-100');
            }
        });

        AOS.init({
            duration: 600,
            easing: 'ease-out',
            once: true,
            offset: 50
        });
    </script>
</body>
</html>