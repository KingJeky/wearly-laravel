<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wearly - Fashion Forward</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#2563eb',
                        secondary: '#f59e0b',
                        accent: '#10b981'
                    }
                }
            }
        }
    </script>
    <style>
        .logo-text {
            background: linear-gradient(135deg, #2563eb, #10b981);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .hover-scale {
            transition: transform 0.3s ease;
        }
        .hover-scale:hover {
            transform: scale(1.05);
        }
        .btn-primary {
            background: linear-gradient(135deg, #2563eb, #1d4ed8);
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            background: linear-gradient(135deg, #1d4ed8, #1e40af);
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(37, 99, 235, 0.3);
        }
        .btn-secondary {
            transition: all 0.3s ease;
        }
        .btn-secondary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex items-center space-x-2">
                    <div class="w-10 h-10 bg-gradient-to-br from-blue-600 to-green-500 rounded-lg flex items-center justify-center">
                        <span class="text-white font-bold text-xl">W</span>
                    </div>
                    <span class="text-2xl font-bold logo-text">Wearly</span>
                </div>
                
                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#home" class="text-gray-700 hover:text-primary transition-colors">Home</a>
                    <a href="#catalog" class="text-gray-700 hover:text-primary transition-colors">Catalog</a>
                    <a href="#about" class="text-gray-700 hover:text-primary transition-colors">About</a>
                    <a href="#contact" class="text-gray-700 hover:text-primary transition-colors">Contact</a>
                    <button class="bg-primary text-white px-4 py-2 rounded-lg btn-primary">Login</button>
                    <button class="border border-primary text-primary px-4 py-2 rounded-lg btn-secondary">Register</button>
                </div>
                
                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button id="mobile-menu-btn" class="text-gray-700 hover:text-primary">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t">
            <div class="px-4 py-2 space-y-2">
                <a href="#home" class="block py-2 text-gray-700 hover:text-primary">Home</a>
                <a href="#catalog" class="block py-2 text-gray-700 hover:text-primary">Catalog</a>
                <a href="#about" class="block py-2 text-gray-700 hover:text-primary">About</a>
                <a href="#contact" class="block py-2 text-gray-700 hover:text-primary">Contact</a>
                <button class="w-full bg-primary text-white py-2 rounded-lg btn-primary mt-2">Login</button>
                <button class="w-full border border-primary text-primary py-2 rounded-lg btn-secondary">Register</button>
            </div>
        </div>
    </nav>

    <!-- Hero Banner -->
    <section id="home" class="bg-gradient-to-r from-blue-600 via-purple-600 to-green-500 text-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="space-y-6">
                    <h1 class="text-4xl md:text-6xl font-bold leading-tight">
                        Fashion That Speaks <span class="text-yellow-300">Your Style</span>
                    </h1>
                    <p class="text-xl text-gray-200">
                        Discover the latest trends and timeless classics at Wearly. Where fashion meets comfort and style meets affordability.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <button class="bg-white text-primary px-8 py-3 rounded-lg font-semibold btn-secondary">
                            Shop Now
                        </button>
                        <button class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-primary transition-all">
                            View Collection
                        </button>
                    </div>
                </div>
                <div class="relative">
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 hover-scale">
                        <img src="/placeholder.svg?height=400&width=400" alt="Fashion Collection" class="w-full h-80 object-cover rounded-lg">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Promo Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Special Offers</h2>
                <p class="text-gray-600 text-lg">Don't miss out on these amazing deals!</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Promo 1 -->
                <div class="bg-gradient-to-br from-red-500 to-pink-600 text-white rounded-2xl p-8 hover-scale">
                    <div class="text-center">
                        <h3 class="text-2xl font-bold mb-2">50% OFF</h3>
                        <p class="text-red-100 mb-4">Summer Collection</p>
                        <button class="bg-white text-red-600 px-6 py-2 rounded-lg font-semibold btn-secondary">
                            Shop Now
                        </button>
                    </div>
                </div>
                
                <!-- Promo 2 -->
                <div class="bg-gradient-to-br from-green-500 to-teal-600 text-white rounded-2xl p-8 hover-scale">
                    <div class="text-center">
                        <h3 class="text-2xl font-bold mb-2">Buy 2 Get 1</h3>
                        <p class="text-green-100 mb-4">All Accessories</p>
                        <button class="bg-white text-green-600 px-6 py-2 rounded-lg font-semibold btn-secondary">
                            Shop Now
                        </button>
                    </div>
                </div>
                
                <!-- Promo 3 -->
                <div class="bg-gradient-to-br from-purple-500 to-indigo-600 text-white rounded-2xl p-8 hover-scale">
                    <div class="text-center">
                        <h3 class="text-2xl font-bold mb-2">Free Shipping</h3>
                        <p class="text-purple-100 mb-4">Orders Over $100</p>
                        <button class="bg-white text-purple-600 px-6 py-2 rounded-lg font-semibold btn-secondary">
                            Shop Now
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Catalog Section -->
    <section id="catalog" class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Featured Products</h2>
                <p class="text-gray-600 text-lg">Discover our most popular items</p>
            </div>
            
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Product 1 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover-scale">
                    <img src="/placeholder.svg?height=300&width=300" alt="Stylish T-Shirt" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Premium T-Shirt</h3>
                        <p class="text-gray-600 mb-4">Comfortable cotton blend</p>
                        <div class="flex flex-col space-y-4">
                            <span class="text-2xl font-bold text-primary">$29.99</span>
                            <button class="bg-primary text-white px-4 py-2 rounded-lg btn-primary">Add to Cart</button>
                        </div>
                    </div>
                </div>
                
                <!-- Product 2 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover-scale">
                    <img src="/placeholder.svg?height=300&width=300" alt="Denim Jeans" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Classic Jeans</h3>
                        <p class="text-gray-600 mb-4">Premium denim quality</p>
                        <div class="flex flex-col space-y-4">
                            <span class="text-2xl font-bold text-primary">$79.99</span>
                            <button class="bg-primary text-white px-4 py-2 rounded-lg btn-primary">Add to Cart</button>
                        </div>
                    </div>
                </div>
                
                <!-- Product 3 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover-scale">
                    <img src="/placeholder.svg?height=300&width=300" alt="Sneakers" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Sport Sneakers</h3>
                        <p class="text-gray-600 mb-4">Comfortable and stylish</p>
                        <div class="flex flex-col space-y-4">
                            <span class="text-2xl font-bold text-primary">$99.99</span>
                            <button class="bg-primary text-white px-4 py-2 rounded-lg btn-primary">Add to Cart</button>
                        </div>
                    </div>
                </div>
                
                <!-- Product 4 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover-scale">
                    <img src="/placeholder.svg?height=300&width=300" alt="Fashion Jacket" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Fashion Jacket</h3>
                        <p class="text-gray-600 mb-4">Perfect for any season</p>
                        <div class="flex flex-col space-y-4">
                            <span class="text-2xl font-bold text-primary">$149.99</span>
                            <button class="bg-primary text-white px-4 py-2 rounded-lg btn-primary">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <button class="bg-primary text-white px-8 py-3 rounded-lg font-semibold btn-primary">
                    View All Products
                </button>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">About Wearly</h2>
                    <p class="text-gray-600 text-lg mb-6">
                        Founded in 2020, Wearly has been at the forefront of fashion innovation, bringing you the latest trends and timeless classics. We believe that fashion should be accessible, sustainable, and expressive of your unique personality.
                    </p>
                    <p class="text-gray-600 text-lg mb-8">
                        Our mission is to provide high-quality, affordable fashion that makes you feel confident and comfortable in your own skin. From casual wear to formal attire, we've got you covered for every occasion.
                    </p>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-primary mb-2">10K+</div>
                            <div class="text-gray-600">Happy Customers</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-primary mb-2">500+</div>
                            <div class="text-gray-600">Products</div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <img src="/placeholder.svg?height=500&width=500" alt="About Wearly" class="w-full h-96 object-cover rounded-2xl hover-scale">
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Get In Touch</h2>
                <p class="text-gray-600 text-lg">We'd love to hear from you. Send us a message!</p>
            </div>
            
            <div class="grid md:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div class="bg-white rounded-2xl shadow-lg p-8">
                    <form class="space-y-6">
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Name</label>
                            <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all" placeholder="Your Name">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Email</label>
                            <input type="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all" placeholder="your@email.com">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Message</label>
                            <textarea rows="5" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all" placeholder="Your message..."></textarea>
                        </div>
                        <button type="submit" class="w-full bg-primary text-white py-3 rounded-lg font-semibold btn-primary">
                            Send Message
                        </button>
                    </form>
                </div>
                
                <!-- Contact Info -->
                <div class="space-y-8">
                    <div class="bg-white rounded-2xl shadow-lg p-8">
                        <h3 class="text-xl font-semibold mb-4">Contact Information</h3>
                        <div class="space-y-4">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-primary/10 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-semibold">Address</div>
                                    <div class="text-gray-600">123 Fashion Street, Style City, SC 12345</div>
                                </div>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-primary/10 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-semibold">Phone</div>
                                    <div class="text-gray-600">+1 (555) 123-4567</div>
                                </div>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-primary/10 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-semibold">Email</div>
                                    <div class="text-gray-600">hello@wearly.com</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-2xl shadow-lg p-8">
                        <h3 class="text-xl font-semibold mb-4">Follow Us</h3>
                        <div class="flex space-x-4">
                            <a href="#" class="w-12 h-12 bg-blue-600 text-white rounded-lg flex items-center justify-center hover:bg-blue-700 transition-colors">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-12 h-12 bg-blue-800 text-white rounded-lg flex items-center justify-center hover:bg-blue-900 transition-colors">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-12 h-12 bg-pink-600 text-white rounded-lg flex items-center justify-center hover:bg-pink-700 transition-colors">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001.012.001z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center space-x-2 mb-4">
                        <div class="w-10 h-10 bg-gradient-to-br from-blue-600 to-green-500 rounded-lg flex items-center justify-center">
                            <span class="text-white font-bold text-xl">W</span>
                        </div>
                        <span class="text-2xl font-bold">Wearly</span>
                    </div>
                    <p class="text-gray-400">Fashion that speaks your style. Discover the latest trends and timeless classics.</p>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#home" class="text-gray-400 hover:text-white transition-colors">Home</a></li>
                        <li><a href="#catalog" class="text-gray-400 hover:text-white transition-colors">Catalog</a></li>
                        <li><a href="#about" class="text-gray-400 hover:text-white transition-colors">About</a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-white transition-colors">Contact</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Categories</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Men's Fashion</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Women's Fashion</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Accessories</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Shoes</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Newsletter</h3>
                    <p class="text-gray-400 mb-4">Subscribe to get updates on new arrivals and special offers.</p>
                    <div class="flex">
                        <input type="email" placeholder="Your email" class="flex-1 px-4 py-2 bg-gray-800 text-white rounded-l-lg focus:outline-none focus:ring-2 focus:ring-primary">
                        <button class="bg-primary px-4 py-2 rounded-r-lg btn-primary">Subscribe</button>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-8 pt-8 text-center">
                <p class="text-gray-400">&copy; 2024 Wearly. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>