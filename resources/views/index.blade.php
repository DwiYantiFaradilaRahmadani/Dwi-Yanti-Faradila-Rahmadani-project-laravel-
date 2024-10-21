<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SugarSide</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black text-white">

    <!-- Navbar -->
    <header class="p-5 flex justify-between items-center">
        <h1 class="text-2xl font-bold text-pink-300">SugarSide</h1>
        <nav>
            <ul class="flex space-x-5 text-white">
                <li><a href="#home" class="hover:text-pink-300">Home</a></li>
                <li><a href="#menu" class="hover:text-pink-300">Menu</a></li>
                <li><a href="#about" class="hover:text-pink-300">About</a></li>
                <li><a href="#contact" class="hover:text-pink-300">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Home Section -->
    <section id="home" class="flex flex-col justify-center items-center h-screen bg-black text-white">
        <h2 class="text-5xl font-bold mb-3 text-left">
            Enjoy Your <span class="text-pink-300">Dessert</span>
        </h2>
        <p class="text-lg mb-6 text-left text-gray-400">Nikmati Dessert untuk membuat harimu lebih indah</p>
        <a href="#menu" class="px-5 py-3 bg-pink-300 text-black font-semibold rounded-lg">Buy Now</a>
    </section>

    <!-- About Section -->
    <section id="about" class="bg-black py-20">
        <div class="container mx-auto flex flex-col md:flex-row items-center">
            <div class="md:w-1/2">
                <img src="assets/images/about.jpg" alt="Dessert" class="w-full h-auto object-cover rounded-lg">
            </div>
            <div class="md:w-1/2 md:pl-10 mt-10 md:mt-0">
                <h2 class="text-4xl font-bold mb-4">Dessert kami</h2>
                <p class="text-lg text-gray-400">
                    Dessert kami terbuat dari bahan-bahan terbaik dan memiliki cita rasa tersendiri. Dibuat dengan tangan-tangan chef terbaik.
                </p>
            </div>
        </div>
    </section>

    <!-- Menu Section -->
    <section id="menu" class="py-20">
        <div class="text-center mb-10">
            <h2 class="text-4xl font-bold text-white mb-2">Menu</h2>
            <p class="text-gray-400">Kamu bisa memilih menu dessert yang sesuai dengan keinginanmu</p>
        </div>
        <div class="flex justify-center">
            <div class="max-w-xs">
                <img src="assets/images/menu1.jpeg" alt="Dessert" class="rounded-lg mb-5">
                <a href="#" class="block text-center text-pink-300 text-lg font-semibold">Stawberry Dessert Box</a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-12 px-8">
        <div class="text-center mb-8">
            <div class="inline-block bg-pink-400 text-white px-6 py-2 rounded-full text-lg font-semibold">
                Contact
            </div>
            <h2 class="text-4xl font-semibold mt-4">
                Hubungi jika tertarik dengan dessert kami
            </h2>
        </div>

        <!-- Google Map Embed -->
        <div class="flex justify-center mb-8">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d252168.3733320783!2d106.68942982226563!3d-6.200981705341032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6992e3c22f0d6f%3A0x59f8b17db1e7b933!2sJakarta!5e0!3m2!1sen!2sid!4v1697883521234!5m2!1sen!2sid"
                width="600" height="300" allowfullscreen="" loading="lazy" class="border-0"
                style="border:0; filter: brightness(0.8);">
            </iframe>
        </div>

        <!-- Contact Form -->
        <div class="max-w-md mx-auto bg-gray-900 p-8 rounded-lg shadow-lg">
            <form action="#" method="POST">
                <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-300" for="name">
                        <i class="fas fa-user mr-2"></i>Nama
                    </label>
                    <input type="text" id="name" name="name" placeholder="nama"
                           class="w-full px-4 py-2 bg-black border border-gray-700 text-white rounded-md focus:outline-none focus:ring-2 focus:ring-pink-400"/>
                </div>

                <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-300" for="email">
                        <i class="fas fa-envelope mr-2"></i>Email
                    </label>
                    <input type="email" id="email" name="email" placeholder="email"
                           class="w-full px-4 py-2 bg-black border border-gray-700 text-white rounded-md focus:outline-none focus:ring-2 focus:ring-pink-400"/>
                </div>

                <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-300" for="phone">
                        <i class="fas fa-phone mr-2"></i>No HP
                    </label>
                    <input type="tel" id="phone" name="phone" placeholder="no hp"
                           class="w-full px-4 py-2 bg-black border border-gray-700 text-white rounded-md focus:outline-none focus:ring-2 focus:ring-pink-400"/>
                </div>

                <div class="text-center">
                    <button type="submit" class="bg-pink-400 px-6 py-3 text-white rounded-full hover:bg-pink-500 transition">
                        Kirim Pesan
                    </button>
                </div>
            </form>
        </div>
    </section>

</body>
</html>
