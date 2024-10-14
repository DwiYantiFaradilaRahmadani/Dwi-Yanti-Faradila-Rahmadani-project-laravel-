<!DOCTYPE html>
<html>
  <head>
    <title>Sugar Side</title>
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap"
      rel="stylesheet"
    />

    <!--Icon-->
    <script src="https://unpkg.com/feather-icons"></script>

    <!--css-->
    <link rel="stylesheet" href="assets/css/style.css"/>
  </head>

  <body>
    <!--navbar start-->
    <nav class="navbar">
      <a href="#" class="navbar-logo">Sugar<span>Side</span></a>

      <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#menu">Menu</a>
        <a href="#about">About</a>
        <a href="#contact">Contact</a>
      </div>

      
    </nav>
    <!--navbar end-->

    <!--Hero Section awal-->
    <section class="hero" id="home">
      <main class="content">
        <h1>Enjoy Your <span>Dessert</span></h1>
        <p>Nikmati Dessert untuk membuat harimu lebih indah</p>
        <a href="#" class="cta">BUY NOW</a>
      </main>
    </section>
    <!--Hero Section akhir-->

    <!--about mulai-->
    <section id="about" class="about">
    <h2>About</h2>

    <div class="row">
      <div class="about-img">
        <img src="assets/images/about.jpg"alt="About">
    </div>
    <div class="content">
      <h2>Dessert kami</h2>
      <p>Dessert kami terbuat dari bahan-bahan terbaik 
        dan memiliki cita rasa tersendiri. Dibuat dengan 
        tangan-tangan chef terbaik.
        
      </p>
    </div>

    <!--about selesai-->
     

    <!--Menu section mulai-->
      <section id="menu" class="menu">
      <h2>Menu</h2>
      <p>Kamu bisa memilih menu dessert yang sesuai dengan keinginanmu</p>

     <div class="row">
      <div class="menu-img">
        <img src="assets/images/menu1.jpeg" width="200" 
        alt="menu 1" class="menu-card">
        <a href="pesan.html">
          <hr>
          Beli</a> 
        <h3 class="menu-card-tittle">- Strawberry Slice Cake -</h3>
        <p class="menu-card-price">Rp 25.000</p>
        
      </div>
     </div>

     
      <div class="menu-img">
        <img src="assets/images/menu2.jpeg" width="200"
        alt="menu 2" class="menu-card">
        <a href="pesan.html">
          <hr>
          Beli</a>
        <h3 class="menu-card-tittle">- Chocolate Macaron -</h3>
        <p class="menu-card-price">Rp 15.000</p>
      </div>
     

   
      <div class="menu-img">
        <img src="assets/images/menu3.jpeg" width="200"
        alt="menu 3" class="menu-card">
        <a href="pesan.html">
          <hr>
          Beli</a>
        <h3 class="menu-card-tittle">- Chocolate Chip Cookies -</h3>
        <p class="menu-card-price">Rp 20.000</p>
      </div>
   

     
      <div class="menu-img">
        <img src="assets/images/menu4.jpeg" width="200"
        alt="menu 4" class="menu-card">
        <a href="pesan.html">
          <hr>
          Beli</a>
        <h3 class="menu-card-tittle">- Waffle Ice Cream -</h3>
        <p class="menu-card-price">Rp 27.000</p>
      </div>
    
      </section >    

    <!--Menu section selesai-->

    <!--Contact section mulai-->
    <section id="contact" class="contact">
    <h2>Contact</h2>
    <p>Hubungi jika tertarik dengan dessert kami</p>
    
    <div class="row">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3450524.70886234!2d113.36569983072579!3d-8.603166822900587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd141d3e8100fa1%3A0x24910fb14b24e690!2sBali!5e0!3m2!1sen!2sid!4v1700375985451!5m2!1sen!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
      
    <form action="">
    <div class="input-group">
    <i data-feather="user"></i>
    <input type="text"
    placeholder="nama">
    </div>
    <div class="input-group">
    <i data-feather="mail"></i>
    <input type="text"
    placeholder="email">
    </div>
    <div class="input-group">
    <i data-feather="phone"></i>
    <input type="text"
    placeholder="no hp">
    </div>
    <button type="submit"
    class="button">Kirim Pesan</button>
    
  </form>
  </section>
    <!--Contact section selesai-->
    
   

    <!--icon-->
    <script>
      feather.replace();
    </script>
  </body>
</html>
