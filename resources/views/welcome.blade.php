<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyBrand - Your Trusted E-Commerce</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        * {
            font-family: 'Poppins', sans-serif;
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        .hero-pattern {
            background-color: #667eea;
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
        
        .hover-scale {
            transition: transform 0.3s ease;
        }
        
        .hover-scale:hover {
            transform: scale(1.05);
        }
        
        .fade-in {
            animation: fadeIn 0.8s ease-in;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="bg-gray-50">
    
    <!-- Navbar -->
    <nav class="bg-white shadow-md fixed w-full top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="/" class="flex items-center space-x-2">
                        <svg class="w-8 h-8 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"/>
                        </svg>
                        <span class="text-2xl font-bold text-gray-900">My<span class="text-purple-600">Brand</span></span>
                    </a>
                </div>
                
                <!-- Navigation Links -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="/" class="text-gray-700 hover:text-purple-600 font-medium">Home</a>
                    <a href="#product" class="text-gray-700 hover:text-purple-600 font-medium">Products</a>
                    <a href="#categories" class="text-gray-700 hover:text-purple-600 font-medium">Categories</a>
                    <a href="#about" class="text-gray-700 hover:text-purple-600 font-medium">About</a>
                </div>
                
                <!-- Auth Buttons -->
                <div class="flex items-center space-x-4">
                    <a href="/login" class="text-gray-700 hover:text-purple-600 font-medium">Login</a>
                    <a href="/register" class="bg-purple-600 hover:bg-purple-700 text-white px-6 py-2 rounded-lg font-medium transition">
                        Register
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-pattern pt-24 pb-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div class="text-white fade-in">
                    <h1 class="text-5xl md:text-6xl font-bold mb-6">
                        Welcome to<br>
                        <span class="text-yellow-300">MyBrand</span>
                    </h1>
                    <p class="text-xl mb-8 text-purple-100">
                        Your trusted e-commerce platform for quality products at the best prices. Shop now and enjoy exclusive deals!
                    </p>
                    <div class="flex space-x-4">
                        <a href="/register" class="bg-white text-purple-600 px-8 py-3 rounded-lg font-semibold hover:bg-yellow-300 transition hover-scale">
                            Get Started
                        </a>
                        <a href="#products" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-purple-600 transition">
                            Browse Products
                        </a>
                    </div>
                    
                    <!-- Stats -->
                    <div class="grid grid-cols-3 gap-8 mt-12">
                        <div>
                            <div class="text-3xl font-bold text-yellow-300">10K+</div>
                            <div class="text-purple-200">Products</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-yellow-300">50K+</div>
                            <div class="text-purple-200">Customers</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-yellow-300">4.9★</div>
                            <div class="text-purple-200">Rating</div>
                        </div>
                    </div>
                </div>
                
                <!-- Right Image -->
                <div class="fade-in hidden md:block">
                    <div class="bg-white p-8 rounded-2xl shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da?w=600" 
                             alt="Shopping" 
                             class="rounded-lg w-full h-96 object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Why Choose MyBrand?</h2>
                <p class="text-xl text-gray-600">Experience the best online shopping with our amazing features</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-gradient-to-br from-purple-50 to-purple-100 p-8 rounded-xl hover-scale">
                    <div class="bg-purple-600 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Quality Products</h3>
                    <p class="text-gray-600">Handpicked products from trusted sellers with quality guarantee</p>
                </div>
                
                <!-- Feature 2 -->
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-8 rounded-xl hover-scale">
                    <div class="bg-blue-600 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Best Prices</h3>
                    <p class="text-gray-600">Competitive prices with regular discounts and special offers</p>
                </div>
                
                <!-- Feature 3 -->
                <div class="bg-gradient-to-br from-green-50 to-green-100 p-8 rounded-xl hover-scale">
                    <div class="bg-green-600 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Fast Delivery</h3>
                    <p class="text-gray-600">Quick and reliable shipping to your doorstep nationwide</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Preview -->
    <section id="categories" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Popular Categories</h2>
                <p class="text-xl text-gray-600">Browse our wide range of product categories</p>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <!-- Category 1 -->
                <div class="bg-white p-6 rounded-xl shadow-md hover-scale cursor-pointer text-center">
                    <div class="text-4xl mb-4">👕</div>
                    <h3 class="font-semibold text-gray-900">Fashion</h3>
                    <p class="text-sm text-gray-500">2,500+ items</p>
                </div>
                
                <!-- Category 2 -->
                <div class="bg-white p-6 rounded-xl shadow-md hover-scale cursor-pointer text-center">
                    <div class="text-4xl mb-4">📱</div>
                    <h3 class="font-semibold text-gray-900">Electronics</h3>
                    <p class="text-sm text-gray-500">1,800+ items</p>
                </div>
                
                <!-- Category 3 -->
                <div class="bg-white p-6 rounded-xl shadow-md hover-scale cursor-pointer text-center">
                    <div class="text-4xl mb-4">🏠</div>
                    <h3 class="font-semibold text-gray-900">Home & Living</h3>
                    <p class="text-sm text-gray-500">3,200+ items</p>
                </div>
                
                <!-- Category 4 -->
                <div class="bg-white p-6 rounded-xl shadow-md hover-scale cursor-pointer text-center">
                    <div class="text-4xl mb-4">⚽</div>
                    <h3 class="font-semibold text-gray-900">Sports</h3>
                    <p class="text-sm text-gray-500">1,500+ items</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="gradient-bg py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl font-bold text-white mb-6">Ready to Start Shopping?</h2>
            <p class="text-xl text-purple-100 mb-8">Join thousands of satisfied customers today!</p>
            <a href="/register" class="inline-block bg-white text-purple-600 px-10 py-4 rounded-lg font-bold text-lg hover:bg-yellow-300 transition hover-scale">
                Create Free Account
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8">
                <!-- Brand -->
                <div>
                    <div class="flex items-center space-x-2 mb-4">
                        <svg class="w-8 h-8 text-purple-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"/>
                        </svg>
                        <span class="text-2xl font-bold">My<span class="text-purple-400">Brand</span></span>
                    </div>
                    <p class="text-gray-400">Your trusted e-commerce platform for quality products.</p>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h4 class="font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white">About Us</a></li>
                        <li><a href="#" class="hover:text-white">Contact</a></li>
                        <li><a href="#" class="hover:text-white">FAQ</a></li>
                    </ul>
                </div>
                
                <!-- Support -->
                <div>
                    <h4 class="font-semibold mb-4">Support</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white">Help Center</a></li>
                        <li><a href="#" class="hover:text-white">Shipping Info</a></li>
                        <li><a href="#" class="hover:text-white">Returns</a></li>
                    </ul>
                </div>
                
                <!-- Contact -->
                <div>
                    <h4 class="font-semibold mb-4">Contact Us</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li>📧 support@mybrand.com</li>
                        <li>📞 +62 812-3456-7890</li>
                        <li>📍 Jakarta, Indonesia</li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2024 MyBrand. All rights reserved.</p>
            </div>
        </div>
    </footer>

</body>
</html>