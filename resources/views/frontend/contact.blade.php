@extends('frontend.layouts.master')

@section('title', 'Contact Us - Goldiva Minerals')

@section('content')
<!-- Hero Section -->
<section class="pt-32 pb-20 hero-bg">
    <div class="max-w-7xl mx-auto px-4 text-center text-white fade-in">
        <h1 class="text-5xl md:text-6xl font-bold mb-6">Contact <span class="text-gradient">Us</span></h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto">We'd love to hear from you. Reach out for inquiries, partnerships, or consultations.</p>
    </div>
</section>

<!-- Contact Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-16">
            <!-- Contact Info -->
            <div>
                <h2 class="text-4xl font-bold text-gray-900 mb-8">Get In Touch</h2>
                
                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="w-14 h-14 bg-gold-100 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
                            <i class="fas fa-building text-2xl text-gold-600"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-1">Company</h3>
                            <p class="text-gray-600">Goldiva Minerals</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-14 h-14 bg-gold-100 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
                            <i class="fas fa-envelope text-2xl text-gold-600"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-1">Email</h3>
                            <p class="text-gray-600">info@goldivaminerals.com</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-14 h-14 bg-gold-100 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
                            <i class="fas fa-map-marker-alt text-2xl text-gold-600"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-1">Location</h3>
                            <p class="text-gray-600">Uganda, East Africa</p>
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

            <!-- Contact Form -->
            <div class="bg-gray-50 rounded-2xl p-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Send Us a Message</h2>
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

<!-- CTA Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h3 class="text-2xl font-bold text-gray-900 mb-4">Need Immediate Assistance?</h3>
        <p class="text-gray-600 mb-6">Our team is ready to help with your mineral services needs.</p>
        <a href="{{ route('frontend.consulting') }}" class="btn-gold text-white px-8 py-4 rounded-full font-bold inline-block shadow-lg">
            Request a Consultation
        </a>
    </div>
</section>
@endsection
