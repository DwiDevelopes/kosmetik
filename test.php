<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glamour Beauty - Kosmetik Profesional</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Reset dan Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f9f9f9;
            color: #333;
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header Styles */
        header {
            background: linear-gradient(135deg, #ff6b9d, #ff8fab);
            color: white;
            padding: 15px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            display: flex;
            align-items: center;
        }

        .logo i {
            margin-right: 10px;
        }

        .desktop-nav ul {
            display: flex;
            list-style: none;
        }

        .desktop-nav ul li {
            margin-left: 25px;
        }

        .desktop-nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }

        .desktop-nav ul li a:hover {
            color: #ffe4ec;
        }

        .header-actions {
            display: flex;
            align-items: center;
        }

        .search-box {
            position: relative;
            margin-right: 20px;
        }

        .search-box input {
            padding: 8px 15px;
            border: none;
            border-radius: 20px;
            width: 200px;
            outline: none;
        }

        .cart-icon {
            position: relative;
            font-size: 22px;
            cursor: pointer;
        }

        .cart-count {
            position: absolute;
            top: -8px;
            right: -8px;
            background: #ff3366;
            color: white;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?ixlib=rb-4.0.3&auto=format&fit=crop&w=1189&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 100px 20px;
            margin-bottom: 40px;
        }

        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 20px;
            max-width: 700px;
            margin: 0 auto 30px;
        }

        .btn {
            display: inline-block;
            background: #ff3366;
            color: white;
            padding: 12px 30px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s;
        }

        .btn:hover {
            background: #ff1a52;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        /* Products Section */
        .section-title {
            text-align: center;
            margin: 40px 0 30px;
            font-size: 32px;
            color: #333;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 30px;
            margin-bottom: 50px;
        }

        .product-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s;
        }

        .product-card:hover {
            transform: translateY(-10px);
        }

        .product-image {
            height: 200px;
            background-size: cover;
            background-position: center;
        }

        .product-info {
            padding: 20px;
        }

        .product-title {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .product-price {
            font-size: 20px;
            font-weight: bold;
            color: #ff3366;
            margin-bottom: 15px;
        }

        .add-to-cart {
            background: #ff3366;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-weight: bold;
            transition: background 0.3s;
        }

        .add-to-cart:hover {
            background: #ff1a52;
        }

        /* Slider Styles */
        .slider-container {
            position: relative;
            overflow: hidden;
            margin: 40px 0;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .slider {
            display: flex;
            transition: transform 0.5s ease;
        }

        .slide {
            min-width: 100%;
            height: 400px;
            background-size: cover;
            background-position: center;
        }

        .slider-controls {
            position: absolute;
            bottom: 20px;
            left: 0;
            right: 0;
            text-align: center;
        }

        .slider-dot {
            display: inline-block;
            width: 12px;
            height: 12px;
            background: rgba(255, 255, 255, 0.5);
            border-radius: 50%;
            margin: 0 5px;
            cursor: pointer;
        }

        .slider-dot.active {
            background: white;
        }

        /* Cart Modal */
        .cart-modal {
            display: none;
            position: fixed;
            top: 0;
            right: 0;
            width: 350px;
            height: 100%;
            background: white;
            box-shadow: -5px 0 15px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            overflow-y: auto;
        }

        .cart-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            border-bottom: 1px solid #eee;
        }

        .cart-items {
            padding: 20px;
        }

        .cart-item {
            display: flex;
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }

        .cart-item-image {
            width: 80px;
            height: 80px;
            background-size: cover;
            background-position: center;
            border-radius: 5px;
            margin-right: 15px;
        }

        .cart-item-details {
            flex: 1;
        }

        .cart-item-title {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .cart-item-price {
            color: #ff3366;
            font-weight: bold;
        }

        .cart-item-quantity {
            display: flex;
            align-items: center;
            margin-top: 10px;
        }

        .quantity-btn {
            background: #f0f0f0;
            border: none;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            cursor: pointer;
        }

        .quantity-input {
            width: 40px;
            text-align: center;
            margin: 0 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 5px;
        }

        .remove-item {
            color: #ff3366;
            background: none;
            border: none;
            cursor: pointer;
            margin-top: 10px;
        }

        .cart-total {
            padding: 20px;
            border-top: 1px solid #eee;
            font-size: 20px;
            font-weight: bold;
            display: flex;
            justify-content: space-between;
        }

        .checkout-btn {
            display: block;
            width: calc(100% - 40px);
            margin: 20px;
            padding: 15px;
            background: #ff3366;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s;
        }

        .checkout-btn:hover {
            background: #ff1a52;
        }

        .close-cart {
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
            color: #333;
        }

        /* Checkout Form */
        .checkout-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1100;
            align-items: center;
            justify-content: center;
        }

        .checkout-form {
            background: white;
            width: 90%;
            max-width: 600px;
            border-radius: 10px;
            padding: 30px;
            max-height: 90vh;
            overflow-y: auto;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        .form-row {
            display: flex;
            gap: 20px;
        }

        .form-row .form-group {
            flex: 1;
        }

        /* Mobile Navbar */
        .mobile-nav {
            display: none;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: white;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
            z-index: 100;
        }

        .mobile-nav ul {
            display: flex;
            list-style: none;
            justify-content: space-around;
            padding: 10px 0;
        }

        .mobile-nav ul li {
            text-align: center;
        }

        .mobile-nav ul li a {
            color: #333;
            text-decoration: none;
            font-size: 12px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .mobile-nav ul li i {
            font-size: 20px;
            margin-bottom: 5px;
        }

        /* Footer */
        footer {
            background: #333;
            color: white;
            padding: 40px 0 20px;
            margin-top: 50px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            margin-bottom: 30px;
        }

        .footer-section h3 {
            margin-bottom: 20px;
            font-size: 18px;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li {
            margin-bottom: 10px;
        }

        .footer-section ul li a {
            color: #ddd;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-section ul li a:hover {
            color: #ff8fab;
        }

        .social-icons {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-icons a {
            color: white;
            font-size: 20px;
            transition: color 0.3s;
        }

        .social-icons a:hover {
            color: #ff8fab;
        }

        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #444;
            font-size: 14px;
            color: #aaa;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .desktop-nav, .search-box {
                display: none;
            }

            .mobile-nav {
                display: block;
            }

            .hero h1 {
                font-size: 36px;
            }

            .hero p {
                font-size: 18px;
            }

            .products-grid {
                grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
                gap: 15px;
            }

            .cart-modal {
                width: 100%;
            }

            .form-row {
                flex-direction: column;
                gap: 0;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <i class="fas fa-palette"></i>
                    Glamour Beauty
                </div>
                <nav class="desktop-nav">
                    <ul>
                        <li><a href="#">Beranda</a></li>
                        <li><a href="#">Produk</a></li>
                        <li><a href="#">Koleksi</a></li>
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="#">Kontak</a></li>
                    </ul>
                </nav>
                <div class="header-actions">
                    <div class="search-box">
                        <input type="text" placeholder="Cari produk...">
                    </div>
                    <div class="cart-icon" id="cartIcon">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="cart-count">0</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Kecantikan Dimulai dari Sini</h1>
            <p>Temukan koleksi kosmetik profesional terbaru untuk tampilan yang memukau setiap hari</p>
            <a href="#" class="btn">Jelajahi Produk</a>
        </div>
    </section>

    <!-- Slider -->
    <div class="container">
        <div class="slider-container">
            <div class="slider" id="slider">
                <div class="slide" style="background-image: url('https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?ixlib=rb-4.0.3&auto=format&fit=crop&w=1189&q=80');"></div>
                <div class="slide" style="background-image: url('https://images.unsplash.com/photo-1596462502278-27bfdc403348?ixlib=rb-4.0.3&auto=format&fit=crop&w=1180&q=80');"></div>
                <div class="slide" style="background-image: url('https://images.unsplash.com/photo-1612817288484-6f916006741a?ixlib=rb-4.0.3&auto=format&fit=crop&w=1180&q=80');"></div>
            </div>
            <div class="slider-controls">
                <span class="slider-dot active" data-index="0"></span>
                <span class="slider-dot" data-index="1"></span>
                <span class="slider-dot" data-index="2"></span>
            </div>
        </div>
    </div>

    <!-- Products Section -->
    <section class="products">
        <div class="container">
            <h2 class="section-title">Produk Terbaru</h2>
            <div class="products-grid" id="productsGrid">
                <!-- Products will be generated by JavaScript -->
            </div>
        </div>
    </section>

    <!-- Cart Modal -->
    <div class="cart-modal" id="cartModal">
        <div class="cart-header">
            <h2>Keranjang Belanja</h2>
            <button class="close-cart" id="closeCart">&times;</button>
        </div>
        <div class="cart-items" id="cartItems">
            <!-- Cart items will be added here -->
        </div>
        <div class="cart-total">
            <span>Total:</span>
            <span id="cartTotal">Rp 0</span>
        </div>
        <button class="checkout-btn" id="checkoutBtn">Checkout</button>
    </div>

    <!-- Checkout Modal -->
    <div class="checkout-modal" id="checkoutModal">
        <div class="checkout-form">
            <h2>Form Checkout</h2>
            <form id="checkoutForm">
                <div class="form-group">
                    <label for="name">Nama Lengkap</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">No. Telepon</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="address">Alamat Lengkap</label>
                    <textarea id="address" name="address" rows="3" required></textarea>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="city">Kota</label>
                        <input type="text" id="city" name="city" required>
                    </div>
                    <div class="form-group">
                        <label for="postalCode">Kode Pos</label>
                        <input type="text" id="postalCode" name="postalCode" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="payment">Metode Pembayaran</label>
                    <select id="payment" name="payment" required>
                        <option value="">Pilih metode pembayaran</option>
                        <option value="transfer">Transfer Bank</option>
                        <option value="credit">Kartu Kredit</option>
                        <option value="cod">Bayar di Tempat (COD)</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="notes">Catatan (Opsional)</label>
                    <textarea id="notes" name="notes" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn">Proses Pesanan</button>
                    <button type="button" class="btn" id="cancelCheckout" style="background: #666; margin-left: 10px;">Batal</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Mobile Navbar -->
    <nav class="mobile-nav">
        <ul>
            <li>
                <a href="#">
                    <i class="fas fa-home"></i>
                    <span>Beranda</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-store"></i>
                    <span>Produk</span>
                </a>
            </li>
            <li>
                <a href="#" id="mobileCart">
                    <i class="fas fa-shopping-cart"></i>
                    <span>Keranjang</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-user"></i>
                    <span>Akun</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-ellipsis-h"></i>
                    <span>Lainnya</span>
                </a>
            </li>
        </ul>
    </nav>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Glamour Beauty</h3>
                    <p>Kami menyediakan kosmetik profesional berkualitas tinggi untuk membantu Anda tampil percaya diri setiap hari.</p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-tiktok"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="footer-section">
                    <h3>Produk</h3>
                    <ul>
                        <li><a href="#">Foundation</a></li>
                        <li><a href="#">Lipstik</a></li>
                        <li><a href="#">Eyeshadow</a></li>
                        <li><a href="#">Skincare</a></li>
                        <li><a href="#">Aksesoris</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Bantuan</h3>
                    <ul>
                        <li><a href="#">Cara Belanja</a></li>
                        <li><a href="#">Pengiriman</a></li>
                        <li><a href="#">Pembayaran</a></li>
                        <li><a href="#">Pengembalian</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Kontak</h3>
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> Jl. Kecantikan No. 123, Jakarta</li>
                        <li><i class="fas fa-phone"></i> (021) 1234-5678</li>
                        <li><i class="fas fa-envelope"></i> info@glamourbeauty.com</li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                &copy; 2023 Glamour Beauty. All rights reserved.
            </div>
        </div>
    </footer>

    <script>
        // Data produk
        const products = [
            { id: 1, name: "Foundation Matte Finish", price: 250000, image: "https://images.unsplash.com/photo-1556228578-8c89e6adf883?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" },
            { id: 2, name: "Lipstik Velvet Matte", price: 120000, image: "https://images.unsplash.com/photo-1586495777744-4413f21062fa?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" },
            { id: 3, name: "Eyeshadow Palette", price: 350000, image: "https://images.unsplash.com/photo-1512496015859-f55de4b4ab84?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" },
            { id: 4, name: "Blush On Powder", price: 95000, image: "https://images.unsplash.com/photo-1571781926291-c477ebfd024b?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" },
            { id: 5, name: "Mascara Volume Boost", price: 150000, image: "https://images.unsplash.com/photo-1594223274512-ad4803739b7c?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" },
            { id: 6, name: "Highlighter Glow", price: 180000, image: "https://images.unsplash.com/photo-1596462502278-27bfdc403348?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" },
            { id: 7, name: "Concealer Full Coverage", price: 130000, image: "https://images.unsplash.com/photo-1631217868264-e5b90bb7e138?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" },
            { id: 8, name: "Setting Spray", price: 110000, image: "https://images.unsplash.com/photo-1629196867089-58c4c589c1c1?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" }
        ];

        // Keranjang belanja
        let cart = [];
        let cartCount = 0;
        let cartTotal = 0;

        // DOM Elements
        const productsGrid = document.getElementById('productsGrid');
        const cartIcon = document.getElementById('cartIcon');
        const cartModal = document.getElementById('cartModal');
        const closeCart = document.getElementById('closeCart');
        const cartItems = document.getElementById('cartItems');
        const cartTotalElement = document.getElementById('cartTotal');
        const checkoutBtn = document.getElementById('checkoutBtn');
        const checkoutModal = document.getElementById('checkoutModal');
        const checkoutForm = document.getElementById('checkoutForm');
        const cancelCheckout = document.getElementById('cancelCheckout');
        const mobileCart = document.getElementById('mobileCart');
        const slider = document.getElementById('slider');
        const dots = document.querySelectorAll('.slider-dot');

        // Generate produk
        function generateProducts() {
            productsGrid.innerHTML = '';
            products.forEach(product => {
                const productCard = document.createElement('div');
                productCard.className = 'product-card';
                productCard.innerHTML = `
                    <div class="product-image" style="background-image: url('${product.image}')"></div>
                    <div class="product-info">
                        <h3 class="product-title">${product.name}</h3>
                        <div class="product-price">Rp ${product.price.toLocaleString('id-ID')}</div>
                        <button class="add-to-cart" data-id="${product.id}">Tambah ke Keranjang</button>
                    </div>
                `;
                productsGrid.appendChild(productCard);
            });

            // Tambahkan event listener untuk tombol tambah ke keranjang
            document.querySelectorAll('.add-to-cart').forEach(button => {
                button.addEventListener('click', function() {
                    const productId = parseInt(this.getAttribute('data-id'));
                    addToCart(productId);
                });
            });
        }

        // Tambah produk ke keranjang
        function addToCart(productId) {
            const product = products.find(p => p.id === productId);
            const existingItem = cart.find(item => item.id === productId);

            if (existingItem) {
                existingItem.quantity += 1;
            } else {
                cart.push({
                    id: product.id,
                    name: product.name,
                    price: product.price,
                    image: product.image,
                    quantity: 1
                });
            }

            updateCart();
            showNotification(`${product.name} ditambahkan ke keranjang`);
        }

        // Update tampilan keranjang
        function updateCart() {
            cartCount = cart.reduce((total, item) => total + item.quantity, 0);
            cartTotal = cart.reduce((total, item) => total + (item.price * item.quantity), 0);

            document.querySelector('.cart-count').textContent = cartCount;
            cartTotalElement.textContent = `Rp ${cartTotal.toLocaleString('id-ID')}`;

            // Update item keranjang
            cartItems.innerHTML = '';
            if (cart.length === 0) {
                cartItems.innerHTML = '<p>Keranjang belanja kosong</p>';
                return;
            }

            cart.forEach(item => {
                const cartItem = document.createElement('div');
                cartItem.className = 'cart-item';
                cartItem.innerHTML = `
                    <div class="cart-item-image" style="background-image: url('${item.image}')"></div>
                    <div class="cart-item-details">
                        <div class="cart-item-title">${item.name}</div>
                        <div class="cart-item-price">Rp ${item.price.toLocaleString('id-ID')}</div>
                        <div class="cart-item-quantity">
                            <button class="quantity-btn minus" data-id="${item.id}">-</button>
                            <input type="number" class="quantity-input" value="${item.quantity}" min="1" data-id="${item.id}">
                            <button class="quantity-btn plus" data-id="${item.id}">+</button>
                        </div>
                        <button class="remove-item" data-id="${item.id}">Hapus</button>
                    </div>
                `;
                cartItems.appendChild(cartItem);
            });

            // Tambahkan event listener untuk tombol kuantitas dan hapus
            document.querySelectorAll('.quantity-btn.minus').forEach(button => {
                button.addEventListener('click', function() {
                    const productId = parseInt(this.getAttribute('data-id'));
                    updateQuantity(productId, -1);
                });
            });

            document.querySelectorAll('.quantity-btn.plus').forEach(button => {
                button.addEventListener('click', function() {
                    const productId = parseInt(this.getAttribute('data-id'));
                    updateQuantity(productId, 1);
                });
            });

            document.querySelectorAll('.quantity-input').forEach(input => {
                input.addEventListener('change', function() {
                    const productId = parseInt(this.getAttribute('data-id'));
                    const newQuantity = parseInt(this.value);
                    if (newQuantity < 1) {
                        this.value = 1;
                        updateQuantity(productId, 0, 1);
                    } else {
                        updateQuantity(productId, 0, newQuantity);
                    }
                });
            });

            document.querySelectorAll('.remove-item').forEach(button => {
                button.addEventListener('click', function() {
                    const productId = parseInt(this.getAttribute('data-id'));
                    removeFromCart(productId);
                });
            });
        }

        // Update kuantitas produk
        function updateQuantity(productId, change, newQuantity = null) {
            const item = cart.find(item => item.id === productId);
            if (item) {
                if (newQuantity !== null) {
                    item.quantity = newQuantity;
                } else {
                    item.quantity += change;
                }

                if (item.quantity < 1) {
                    removeFromCart(productId);
                } else {
                    updateCart();
                }
            }
        }

        // Hapus produk dari keranjang
        function removeFromCart(productId) {
            cart = cart.filter(item => item.id !== productId);
            updateCart();
        }

        // Tampilkan notifikasi
        function showNotification(message) {
            const notification = document.createElement('div');
            notification.style.cssText = `
                position: fixed;
                top: 100px;
                right: 20px;
                background: #4CAF50;
                color: white;
                padding: 15px 20px;
                border-radius: 5px;
                box-shadow: 0 5px 15px rgba(0,0,0,0.2);
                z-index: 1000;
                transition: all 0.3s;
            `;
            notification.textContent = message;
            document.body.appendChild(notification);

            setTimeout(() => {
                notification.style.opacity = '0';
                setTimeout(() => {
                    document.body.removeChild(notification);
                }, 300);
            }, 3000);
        }

        // Slider functionality
        let currentSlide = 0;
        const slideCount = document.querySelectorAll('.slide').length;

        function showSlide(index) {
            if (index < 0) {
                currentSlide = slideCount - 1;
            } else if (index >= slideCount) {
                currentSlide = 0;
            } else {
                currentSlide = index;
            }

            slider.style.transform = `translateX(-${currentSlide * 100}%)`;

            // Update dots
            dots.forEach((dot, i) => {
                dot.classList.toggle('active', i === currentSlide);
            });
        }

        // Event listeners untuk dots
        dots.forEach(dot => {
            dot.addEventListener('click', function() {
                const index = parseInt(this.getAttribute('data-index'));
                showSlide(index);
            });
        });

        // Auto slide
        setInterval(() => {
            showSlide(currentSlide + 1);
        }, 5000);

        // Event listeners
        cartIcon.addEventListener('click', () => {
            cartModal.style.display = 'block';
        });

        closeCart.addEventListener('click', () => {
            cartModal.style.display = 'none';
        });

        checkoutBtn.addEventListener('click', () => {
            if (cart.length === 0) {
                alert('Keranjang belanja kosong!');
                return;
            }
            cartModal.style.display = 'none';
            checkoutModal.style.display = 'flex';
        });

        cancelCheckout.addEventListener('click', () => {
            checkoutModal.style.display = 'none';
        });

        mobileCart.addEventListener('click', () => {
            cartModal.style.display = 'block';
        });

        checkoutForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Simulasi pengiriman data ke server
            const formData = new FormData(this);
            const orderData = {
                customer: {
                    name: formData.get('name'),
                    email: formData.get('email'),
                    phone: formData.get('phone'),
                    address: formData.get('address'),
                    city: formData.get('city'),
                    postalCode: formData.get('postalCode')
                },
                payment: formData.get('payment'),
                notes: formData.get('notes'),
                items: cart,
                total: cartTotal
            };

            // Simpan ke localStorage (simulasi database)
            const orders = JSON.parse(localStorage.getItem('orders') || '[]');
            orders.push({
                id: Date.now(),
                ...orderData,
                date: new Date().toISOString()
            });
            localStorage.setItem('orders', JSON.stringify(orders));

            alert('Pesanan berhasil diproses! Terima kasih telah berbelanja di Glamour Beauty.');
            
            // Reset keranjang dan form
            cart = [];
            updateCart();
            checkoutModal.style.display = 'none';
            this.reset();
        });

        // Inisialisasi
        generateProducts();
        updateCart();
    </script>
</body>
</html>