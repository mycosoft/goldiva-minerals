@extends('frontend.layouts.master')

@section('title', 'Contact Us - Get In Touch | Goldiva Minerals Uganda')
@section('meta_title', 'Contact Goldiva Minerals - Gold Trading & Mineral Services in Uganda')
@section('meta_description', 'Contact Goldiva Minerals for gold trading, smelting, documentation, and mineral consultancy services. Located in Kololo, Kampala, Uganda. Call +256 790 342621 or email support@goldivaminerals.com')
@section('meta_keywords', 'contact Goldiva Minerals, gold trading contact, mineral services Uganda, Kampala minerals, Uganda gold company contact')
@section('og_title', 'Contact Us - Goldiva Minerals')
@section('og_description', 'Get in touch with Goldiva Minerals. Located in Kololo, Kampala, Uganda. Email: support@goldivaminerals.com')
@section('og_image', asset('images/hero1.jpeg'))

@section('schema_markup')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "ContactPage",
    "mainEntity": {
        "@type": "Organization",
        "name": "Goldiva Minerals",
        "telephone": "+256-790-342621",
        "email": "support@goldivaminerals.com",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Kololo",
            "addressLocality": "Kampala",
            "addressCountry": "UG"
        }
    }
}
</script>
@endsection

@section('content')
<!-- Hero Section -->
<section class="pt-32 pb-20 hero-bg">
    <div class="max-w-7xl mx-auto px-4 text-center text-white">
        <h1 class="text-5xl md:text-6xl font-bold mb-6" data-aos="fade-up">Contact <span class="text-gradient">Us</span></h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto" data-aos="fade-up">We'd love to hear from you. Reach out for inquiries, partnerships, or consultations.</p>
    </div>
</section>

<!-- Contact Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-16">
            <!-- Contact Info -->
            <div data-aos="fade-right">
                <span class="text-gold-600 font-semibold text-sm uppercase tracking-wider">Get In Touch</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gold-600 mt-3 mb-8">Contact Information</h2>
                
                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="w-14 h-14 gradient-gold rounded-xl flex items-center justify-center mr-4 flex-shrink-0 shadow-lg">
                            <i class="fas fa-building text-2xl text-white"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-1">Company</h3>
                            <p class="text-gray-600">Goldiva Minerals</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-14 h-14 gradient-gold rounded-xl flex items-center justify-center mr-4 flex-shrink-0 shadow-lg">
                            <i class="fas fa-envelope text-2xl text-white"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-1">Email</h3>
                            <a href="mailto:support@goldivaminerals.com" class="text-gray-600 hover:text-gold-600 transition-colors">support@goldivaminerals.com</a>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-14 h-14 gradient-gold rounded-xl flex items-center justify-center mr-4 flex-shrink-0 shadow-lg">
                            <i class="fas fa-phone text-2xl text-white"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-1">Phone</h3>
                            <a href="tel:+256790342621" class="text-gray-600 hover:text-gold-600 transition-colors">+256 790 342621</a>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-14 h-14 gradient-gold rounded-xl flex items-center justify-center mr-4 flex-shrink-0 shadow-lg">
                            <i class="fas fa-map-marker-alt text-2xl text-white"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-1">Location</h3>
                            <p class="text-gray-600">Kololo, Kampala, Uganda</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-14 h-14 gradient-gold rounded-xl flex items-center justify-center mr-4 flex-shrink-0 shadow-lg">
                            <i class="fas fa-globe text-2xl text-white"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-1">Website</h3>
                            <a href="https://www.goldivaminerals.com" target="_blank" class="text-gray-600 hover:text-gold-600 transition-colors">www.goldivaminerals.com</a>
                        </div>
                    </div>
                </div>

                <div class="mt-12">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Connect With Us</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="w-12 h-12 gradient-gold text-white rounded-full flex items-center justify-center shadow-lg hover:opacity-90 transition-all">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-12 h-12 gradient-gold text-white rounded-full flex items-center justify-center shadow-lg hover:opacity-90 transition-all">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-12 h-12 gradient-gold text-white rounded-full flex items-center justify-center shadow-lg hover:opacity-90 transition-all">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://wa.me/256790342621" target="_blank" class="w-12 h-12 gradient-gold text-white rounded-full flex items-center justify-center shadow-lg hover:opacity-90 transition-all">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="bg-gray-50 rounded-2xl p-8" data-aos="fade-left">
                <span class="text-gold-600 font-semibold text-sm uppercase tracking-wider">Send Message</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gold-600 mt-3 mb-6">Get In Touch</h2>
                <form action="#" method="POST">
                    @csrf
                    <div class="space-y-6">
                        <div>
                            <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Name *</label>
                            <input type="text" id="name" name="name" required class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-gold-500 focus:ring-2 focus:ring-gold-200 outline-none transition-all" placeholder="Your full name">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email *</label>
                            <input type="email" id="email" name="email" required class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-gold-500 focus:ring-2 focus:ring-gold-200 outline-none transition-all" placeholder="your.email@example.com">
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">Phone (optional)</label>
                            <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-gold-500 focus:ring-2 focus:ring-gold-200 outline-none transition-all" placeholder="+256 700 000 000">
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">Message *</label>
                            <textarea id="message" name="message" rows="5" required class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-gold-500 focus:ring-2 focus:ring-gold-200 outline-none transition-all resize-none" placeholder="How can we help you?"></textarea>
                        </div>
                        <button type="submit" class="w-full btn-gold text-white py-4 rounded-xl font-bold text-lg shadow-lg">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
