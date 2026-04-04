@extends('frontend.layouts.master')

@section('title', 'Request a Consultation - Goldiva Minerals')

@section('content')
<!-- Hero Section -->
<section class="pt-32 pb-20 hero-bg">
    <div class="max-w-7xl mx-auto px-4 text-center text-white fade-in">
        <h1 class="text-5xl md:text-6xl font-bold mb-6">Request a <span class="text-gradient">Consultation</span></h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto">Get in touch with our experts for professional mineral consultancy services.</p>
    </div>
</section>

<!-- Consulting Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-16">
            <!-- Consulting Info -->
            <div>
                <h2 class="text-4xl font-bold text-gray-900 mb-8">Get Expert Guidance</h2>
                
                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="w-14 h-14 bg-gold-100 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
                            <i class="fas fa-compass text-2xl text-gold-600"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-1">Process Guidance</h3>
                            <p class="text-gray-600">Step-by-step guidance through mineral processing and handling procedures.</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-14 h-14 bg-gold-100 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
                            <i class="fas fa-lightbulb text-2xl text-gold-600"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-1">Industry Advice</h3>
                            <p class="text-gray-600">Expert insights on market trends, regulations, and best practices.</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-14 h-14 bg-gold-100 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
                            <i class="fas fa-cogs text-2xl text-gold-600"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-1">Operational Support</h3>
                            <p class="text-gray-600">Hands-on support to optimize your mineral operations.</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-14 h-14 bg-gold-100 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
                            <i class="fas fa-file-signature text-2xl text-gold-600"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-1">Compliance Assistance</h3>
                            <p class="text-gray-600">Help navigating regulatory requirements and documentation.</p>
                        </div>
                    </div>
                </div>

                <div class="mt-12">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Connect With Us</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="w-12 h-12 bg-gold-500 text-white rounded-full flex items-center justify-center hover:bg-gold-600 transition-all">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-12 h-12 bg-gold-500 text-white rounded-full flex items-center justify-center hover:bg-gold-600 transition-all">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-12 h-12 bg-gold-500 text-white rounded-full flex items-center justify-center hover:bg-gold-600 transition-all">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="w-12 h-12 bg-gold-500 text-white rounded-full flex items-center justify-center hover:bg-gold-600 transition-all">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Consultation Form -->
            <div class="bg-gray-50 rounded-2xl p-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Request a Consultation</h2>
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
                            <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">Phone *</label>
                            <input type="tel" id="phone" name="phone" required class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-gold-500 focus:ring-2 focus:ring-gold-200 outline-none transition-all" placeholder="+256 700 000 000">
                        </div>
                        <div>
                            <label for="company" class="block text-sm font-semibold text-gray-700 mb-2">Company (optional)</label>
                            <input type="text" id="company" name="company" class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-gold-500 focus:ring-2 focus:ring-gold-200 outline-none transition-all" placeholder="Your company name">
                        </div>
                        <div>
                            <label for="service_type" class="block text-sm font-semibold text-gray-700 mb-2">Service Type *</label>
                            <select id="service_type" name="service_type" required class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-gold-500 focus:ring-2 focus:ring-gold-200 outline-none transition-all bg-white">
                                <option value="">Select a service type</option>
                                <option value="general">General Inquiry</option>
                                <option value="gold_trading">Gold Trading</option>
                                <option value="smelting">Smelting Services</option>
                                <option value="documentation">Documentation</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">Message *</label>
                            <textarea id="message" name="message" rows="5" required class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-gold-500 focus:ring-2 focus:ring-gold-200 outline-none transition-all resize-none" placeholder="How can we help you?"></textarea>
                        </div>
                        <button type="submit" class="w-full btn-gold text-white py-4 rounded-xl font-bold text-lg shadow-lg">
                            Submit Request
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection