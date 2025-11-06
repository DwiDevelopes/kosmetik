-- Buat database
CREATE DATABASE IF NOT EXISTS glamour_beauty;
USE glamour_beauty;

-- Tabel produk
CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    price DECIMAL(10, 2) NOT NULL,
    image_url VARCHAR(500),
    category VARCHAR(100),
    stock INT DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabel pelanggan
CREATE TABLE customers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    phone VARCHAR(20),
    address TEXT,
    city VARCHAR(100),
    postal_code VARCHAR(10),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabel pesanan
CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_id INT,
    total DECIMAL(10, 2) NOT NULL,
    status ENUM('pending', 'processing', 'shipped', 'delivered', 'cancelled') DEFAULT 'pending',
    payment_method VARCHAR(50),
    notes TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (customer_id) REFERENCES customers(id)
);

-- Tabel item pesanan
CREATE TABLE order_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT,
    product_id INT,
    quantity INT NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (order_id) REFERENCES orders(id),
    FOREIGN KEY (product_id) REFERENCES products(id)
);

-- Insert data contoh produk
INSERT INTO products (name, description, price, image_url, category, stock) VALUES
('Foundation Matte Finish', 'Foundation dengan finish matte yang tahan lama', 250000, 'https://images.unsplash.com/photo-1556228578-8c89e6adf883?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80', 'Foundation', 50),
('Lipstik Velvet Matte', 'Lipstik dengan tekstur velvet dan finish matte', 120000, 'https://images.unsplash.com/photo-1586495777744-4413f21062fa?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80', 'Lipstik', 100),
('Eyeshadow Palette', 'Palette eyeshadow dengan 12 warna yang dapat dipadukan', 350000, 'https://images.unsplash.com/photo-1512496015859-f55de4b4ab84?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80', 'Eyeshadow', 30),
('Blush On Powder', 'Blush on powder dengan pigmen yang kuat', 95000, 'https://images.unsplash.com/photo-1571781926291-c477ebfd024b?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80', 'Blush', 75),
('Mascara Volume Boost', 'Mascara untuk bulu mata yang terlihat lebih tebal', 150000, 'https://images.unsplash.com/photo-1594223274512-ad4803739b7c?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80', 'Mascara', 60),
('Highlighter Glow', 'Highlighter untuk wajah yang glowing natural', 180000, 'https://images.unsplash.com/photo-1596462502278-27bfdc403348?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80', 'Highlighter', 40),
('Concealer Full Coverage', 'Concealer dengan coverage penuh untuk menutupi noda', 130000, 'https://images.unsplash.com/photo-1631217868264-e5b90bb7e138?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80', 'Concealer', 80),
('Setting Spray', 'Setting spray untuk make up yang tahan lama', 110000, 'https://images.unsplash.com/photo-1629196867089-58c4c589c1c1?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80', 'Setting Spray', 90);
