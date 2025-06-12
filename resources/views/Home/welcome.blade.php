@extends("Layout.layout")
@section("Content")


    <!-- Desktop Banner -->
<div class="carousel-container">
  <!-- Slide 1 -->
  <div class="slide active">
    <img class="desktop-img" src="https://alburhanluggage.com/cdn/shop/files/slider1.jpg?v=1707460270&width=1400" alt="Desktop Banner 1">
    <img class="mobile-img" src="https://alburhanluggage.com/cdn/shop/files/slider1.jpg?v=1707460270&width=1400" alt="Mobile Banner 1">
    <div class="hero-content">
      <p>To provide a range of travel luggage & support services that always ensures value, quality safety and innovation</p>
      <h1 class="custom-hero-heading">LUGGAGE FOR EVERY JOURNEY</h1>
      <div class="button-group">
        <a href="#" class="discover-btn">DISCOVER MORE</a>
      </div>
    </div>
  </div>

  <!-- Slide 2 -->
  <div class="slide">
    <div class="overlay"></div>
    <img class="desktop-img" src="https://alburhanluggage.com/cdn/shop/files/slider2.jpg?v=1707469657&width=1400" alt="Desktop Banner 2">
    <img class="mobile-img" src="https://alburhanluggage.com/cdn/shop/files/slider2.jpg?v=1707469657&width=1400" alt="Mobile Banner 2">
    <div class="hero-content">
      <p>BUILT FOR TRAVEL LOVERS</p>
      <h1>SMART LUGGAGE</h1>
      <div class="button-group">
        <a href="#" class="discover-btn">SHOP NOW</a>
      </div>
    </div>
  </div>

  <!-- Dots -->
  <div class="dots" id="carouselDots">
    <span class="dot active"></span>
    <span class="dot"></span>
  </div>
</div>

    <!-- Scroll Down Icon -->
    <div class="scroll-down">
      <i class="fas fa-chevron-down"></i>
    </div>






  </section>



  <!--  cards-->
<div class="container-fluid py-5">
  <div class="row g-4 align-items-stretch">
    <!-- Card Start -->
     <h2 class="text-center">Shop By Category</h2>
    <div class="col-md-3 col-6">
      <div class="card product-card">
        <div class="product-img-container">
          <span class="on-sale-tag">ON SALE</span>
          <img src="https://newzamzamoptico.com/wp-content/uploads/2025/02/F-206-Black-1.webp" class="main-img" alt="Main Image">
          <img src="https://newzamzamoptico.com/wp-content/uploads/2025/02/F-206-Vintage-3.webp" class="hover-img" alt="Hover Image">
        </div>
        <div class="card-body">
          <h6 class="mb-1">Lusetti Signature</h6>
          <p class="mb-1 text-danger fw-semibold">
            From Rs.22,500.00 <br>
            <small class="text-muted text-decoration-line-through">Rs.27,500.00</small>
          </p>
          <div class="color-options">
            <div style="background:#f5c6cb;"></div>
            <div style="background:#000000;"></div>
            <div style="background:#007bff;"></div>
            <div style="background:#dcb4f1;"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Repeat this block for more cards -->
    <div class="col-md-3 col-6">
      <div class="card product-card">
        <div class="product-img-container">
          <span class="on-sale-tag">ON SALE</span>
          <img src="https://newzamzamoptico.com/wp-content/uploads/2025/02/WhatsApp-Image-2024-12-27-at-10.08.40-PM.webp" class="main-img" alt="">
          <img src="https://newzamzamoptico.com/wp-content/uploads/2025/02/F-206-Vintage-2-600x600.webp" class="hover-img" alt="">
        </div>
        <div class="card-body">
          <h6 class="mb-1">Goby London CheckMate</h6>
          <p class="mb-1 text-danger fw-semibold">
            From Rs.6,999.00 <br>
            <small class="text-muted text-decoration-line-through">Rs.10,999.00</small>
          </p>
          <div class="color-options">
            <div style="background:#f8f1da;"></div>
            <div style="background:#4d392d;"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Add more cards below this if needed -->
<div class="col-md-3 col-6">
      <div class="card product-card">
        <div class="product-img-container">
          <span class="on-sale-tag">ON SALE</span>
          <img src="https://newzamzamoptico.com/wp-content/uploads/2025/02/WhatsApp-Image-2024-12-27-at-10.08.40-PM.webp" class="main-img" alt="">
          <img src="https://newzamzamoptico.com/wp-content/uploads/2025/02/F-206-Vintage-2-600x600.webp" class="hover-img" alt="">
        </div>
        <div class="card-body">
          <h6 class="mb-1">Goby London CheckMate</h6>
          <p class="mb-1 text-danger fw-semibold">
            From Rs.6,999.00 <br>
            <small class="text-muted text-decoration-line-through">Rs.10,999.00</small>
          </p>
          <div class="color-options">
            <div style="background:#f8f1da;"></div>
            <div style="background:#4d392d;"></div>
          </div>
        </div>
      </div>
    </div>




    <div class="col-md-3 col-6">
      <div class="card product-card">
        <div class="product-img-container">
          <span class="on-sale-tag">ON SALE</span>
          <img src="https://newzamzamoptico.com/wp-content/uploads/2025/02/WhatsApp-Image-2024-12-27-at-10.08.40-PM.webp" class="main-img" alt="">
          <img src="https://newzamzamoptico.com/wp-content/uploads/2025/02/F-206-Vintage-2-600x600.webp" class="hover-img" alt="">
        </div>
        <div class="card-body">
          <h6 class="mb-1">Goby London CheckMate</h6>
          <p class="mb-1 text-danger fw-semibold">
            From Rs.6,999.00 <br>
            <small class="text-muted text-decoration-line-through">Rs.10,999.00</small>
          </p>
          <div class="color-options">
            <div style="background:#f8f1da;"></div>
            <div style="background:#4d392d;"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-3 col-6">
      <div class="card product-card">
        <div class="product-img-container">
          <span class="on-sale-tag">ON SALE</span>
          <img src="https://newzamzamoptico.com/wp-content/uploads/2025/02/WhatsApp-Image-2024-12-27-at-10.08.40-PM.webp" class="main-img" alt="">
          <img src="https://newzamzamoptico.com/wp-content/uploads/2025/02/F-206-Vintage-2-600x600.webp" class="hover-img" alt="">
        </div>
        <div class="card-body">
          <h6 class="mb-1">Goby London CheckMate</h6>
          <p class="mb-1 text-danger fw-semibold">
            From Rs.6,999.00 <br>
            <small class="text-muted text-decoration-line-through">Rs.10,999.00</small>
          </p>
          <div class="color-options">
            <div style="background:#f8f1da;"></div>
            <div style="background:#4d392d;"></div>
          </div>
        </div>
      </div>
    </div>


    <div class="col-md-3 col-6">
      <div class="card product-card">
        <div class="product-img-container">
          <span class="on-sale-tag">ON SALE</span>
          <img src="https://newzamzamoptico.com/wp-content/uploads/2025/02/WhatsApp-Image-2024-12-27-at-10.08.40-PM.webp" class="main-img" alt="">
          <img src="https://newzamzamoptico.com/wp-content/uploads/2025/02/F-206-Vintage-2-600x600.webp" class="hover-img" alt="">
        </div>
        <div class="card-body">
          <h6 class="mb-1">Goby London CheckMate</h6>
          <p class="mb-1 text-danger fw-semibold">
            From Rs.6,999.00 <br>
            <small class="text-muted text-decoration-line-through">Rs.10,999.00</small>
          </p>
          <div class="color-options">
            <div style="background:#f8f1da;"></div>
            <div style="background:#4d392d;"></div>
          </div>
        </div>
      </div>
    </div>



    <div class="col-md-3 col-6">
      <div class="card product-card">
        <div class="product-img-container">
          <span class="on-sale-tag">ON SALE</span>
          <img src="https://newzamzamoptico.com/wp-content/uploads/2025/02/WhatsApp-Image-2024-12-27-at-10.08.40-PM.webp" class="main-img" alt="">
          <img src="https://newzamzamoptico.com/wp-content/uploads/2025/02/F-206-Vintage-2-600x600.webp" class="hover-img" alt="">
        </div>
        <div class="card-body">
          <h6 class="mb-1">Goby London CheckMate</h6>
          <p class="mb-1 text-danger fw-semibold">
            From Rs.6,999.00 <br>
            <small class="text-muted text-decoration-line-through">Rs.10,999.00</small>
          </p>
          <div class="color-options">
            <div style="background:#f8f1da;"></div>
            <div style="background:#4d392d;"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-3 col-6">
      <div class="card product-card">
        <div class="product-img-container">
          <span class="on-sale-tag">ON SALE</span>
          <img src="https://newzamzamoptico.com/wp-content/uploads/2025/02/WhatsApp-Image-2024-12-27-at-10.08.40-PM.webp" class="main-img" alt="">
          <img src="https://newzamzamoptico.com/wp-content/uploads/2025/02/F-206-Vintage-2-600x600.webp" class="hover-img" alt="">
        </div>
        <div class="card-body">
          <h6 class="mb-1">Goby London CheckMate</h6>
          <p class="mb-1 text-danger fw-semibold">
            From Rs.6,999.00 <br>
            <small class="text-muted text-decoration-line-through">Rs.10,999.00</small>
          </p>
          <div class="color-options">
            <div style="background:#f8f1da;"></div>
            <div style="background:#4d392d;"></div>
          </div>
        </div>
      </div>
    </div>

 <div class="button-group">
      <a href="#" class="discover-btn">VIEW MORE</a>
    </div>

  </div>
</div>

<!-- cards -->
<!-- SALE BANNER SECTION -->
<section class="sale-banner-section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 text-center text-md-start">
        <div class="countdown-timer">
          <div class="countdown-box"><span>0</span> <small>DAY</small></div>
          <div class="countdown-box"><span>00</span><small>HOURS</small></div>
          <div class="countdown-box"><span>00</span><small>MIN</small></div>
          <div class="countdown-box"><span>00</span><small>SEC</small></div>
        </div>
      </div>
      <div class="col-md-6 text-center text-md-start sale-content">
        <p class="sale-subtitle">LIMITED TIME OFFER</p>
        <h2 class="sale-title">SALE</h2>
        <p class="sale-desc">Shop our selection of exclusive Luggage and Travel Bags at reduced price during the Umrah Sale. Hurry up!</p>
        <a href="#" class="discover-btn">SHOP NOW</a>
      </div>
    </div>
  </div>
</section>

  <!--  cards-->
<div class="container-fluid py-5">
  <div class="row g-4 align-items-stretch">
    <!-- Card Start -->
     <h2 class="text-center">Shop By Category</h2>
    <div class="col-md-3 col-6">
      <div class="card product-card">
        <div class="product-img-container">
          <span class="on-sale-tag">ON SALE</span>
          <img src="https://newzamzamoptico.com/wp-content/uploads/2025/02/F-206-Black-1.webp" class="main-img" alt="Main Image">
          <img src="https://newzamzamoptico.com/wp-content/uploads/2025/02/F-206-Vintage-3.webp" class="hover-img" alt="Hover Image">
        </div>
        <div class="card-body">
          <h6 class="mb-1">Lusetti Signature</h6>
          <p class="mb-1 text-danger fw-semibold">
            From Rs.22,500.00 <br>
            <small class="text-muted text-decoration-line-through">Rs.27,500.00</small>
          </p>
          <div class="color-options">
            <div style="background:#f5c6cb;"></div>
            <div style="background:#000000;"></div>
            <div style="background:#007bff;"></div>
            <div style="background:#dcb4f1;"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Repeat this block for more cards -->
    <div class="col-md-3 col-6">
      <div class="card product-card">
        <div class="product-img-container">
          <span class="on-sale-tag">ON SALE</span>
          <img src="https://newzamzamoptico.com/wp-content/uploads/2025/02/WhatsApp-Image-2024-12-27-at-10.08.40-PM.webp" class="main-img" alt="">
          <img src="https://newzamzamoptico.com/wp-content/uploads/2025/02/F-206-Vintage-2-600x600.webp" class="hover-img" alt="">
        </div>
        <div class="card-body">
          <h6 class="mb-1">Goby London CheckMate</h6>
          <p class="mb-1 text-danger fw-semibold">
            From Rs.6,999.00 <br>
            <small class="text-muted text-decoration-line-through">Rs.10,999.00</small>
          </p>
          <div class="color-options">
            <div style="background:#f8f1da;"></div>
            <div style="background:#4d392d;"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Add more cards below this if needed -->
<div class="col-md-3 col-6">
      <div class="card product-card">
        <div class="product-img-container">
          <span class="on-sale-tag">ON SALE</span>
          <img src="https://newzamzamoptico.com/wp-content/uploads/2025/02/WhatsApp-Image-2024-12-27-at-10.08.40-PM.webp" class="main-img" alt="">
          <img src="https://newzamzamoptico.com/wp-content/uploads/2025/02/F-206-Vintage-2-600x600.webp" class="hover-img" alt="">
        </div>
        <div class="card-body">
          <h6 class="mb-1">Goby London CheckMate</h6>
          <p class="mb-1 text-danger fw-semibold">
            From Rs.6,999.00 <br>
            <small class="text-muted text-decoration-line-through">Rs.10,999.00</small>
          </p>
          <div class="color-options">
            <div style="background:#f8f1da;"></div>
            <div style="background:#4d392d;"></div>
          </div>
        </div>
      </div>
    </div>




    <div class="col-md-3 col-6">
      <div class="card product-card">
        <div class="product-img-container">
          <span class="on-sale-tag">ON SALE</span>
          <img src="https://newzamzamoptico.com/wp-content/uploads/2025/02/WhatsApp-Image-2024-12-27-at-10.08.40-PM.webp" class="main-img" alt="">
          <img src="https://newzamzamoptico.com/wp-content/uploads/2025/02/F-206-Vintage-2-600x600.webp" class="hover-img" alt="">
        </div>
        <div class="card-body">
          <h6 class="mb-1">Goby London CheckMate</h6>
          <p class="mb-1 text-danger fw-semibold">
            From Rs.6,999.00 <br>
            <small class="text-muted text-decoration-line-through">Rs.10,999.00</small>
          </p>
          <div class="color-options">
            <div style="background:#f8f1da;"></div>
            <div style="background:#4d392d;"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-3 col-6">
      <div class="card product-card">
        <div class="product-img-container">
          <span class="on-sale-tag">ON SALE</span>
          <img src="https://newzamzamoptico.com/wp-content/uploads/2025/02/WhatsApp-Image-2024-12-27-at-10.08.40-PM.webp" class="main-img" alt="">
          <img src="https://newzamzamoptico.com/wp-content/uploads/2025/02/F-206-Vintage-2-600x600.webp" class="hover-img" alt="">
        </div>
        <div class="card-body">
          <h6 class="mb-1">Goby London CheckMate</h6>
          <p class="mb-1 text-danger fw-semibold">
            From Rs.6,999.00 <br>
            <small class="text-muted text-decoration-line-through">Rs.10,999.00</small>
          </p>
          <div class="color-options">
            <div style="background:#f8f1da;"></div>
            <div style="background:#4d392d;"></div>
          </div>
        </div>
      </div>
    </div>


    <div class="col-md-3 col-6">
      <div class="card product-card">
        <div class="product-img-container">
          <span class="on-sale-tag">ON SALE</span>
          <img src="https://newzamzamoptico.com/wp-content/uploads/2025/02/WhatsApp-Image-2024-12-27-at-10.08.40-PM.webp" class="main-img" alt="">
          <img src="https://newzamzamoptico.com/wp-content/uploads/2025/02/F-206-Vintage-2-600x600.webp" class="hover-img" alt="">
        </div>
        <div class="card-body">
          <h6 class="mb-1">Goby London CheckMate</h6>
          <p class="mb-1 text-danger fw-semibold">
            From Rs.6,999.00 <br>
            <small class="text-muted text-decoration-line-through">Rs.10,999.00</small>
          </p>
          <div class="color-options">
            <div style="background:#f8f1da;"></div>
            <div style="background:#4d392d;"></div>
          </div>
        </div>
      </div>
    </div>



    <div class="col-md-3 col-6">
      <div class="card product-card">
        <div class="product-img-container">
          <span class="on-sale-tag">ON SALE</span>
          <img src="https://newzamzamoptico.com/wp-content/uploads/2025/02/WhatsApp-Image-2024-12-27-at-10.08.40-PM.webp" class="main-img" alt="">
          <img src="https://newzamzamoptico.com/wp-content/uploads/2025/02/F-206-Vintage-2-600x600.webp" class="hover-img" alt="">
        </div>
        <div class="card-body">
          <h6 class="mb-1">Goby London CheckMate</h6>
          <p class="mb-1 text-danger fw-semibold">
            From Rs.6,999.00 <br>
            <small class="text-muted text-decoration-line-through">Rs.10,999.00</small>
          </p>
          <div class="color-options">
            <div style="background:#f8f1da;"></div>
            <div style="background:#4d392d;"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-3 col-6">
      <div class="card product-card">
        <div class="product-img-container">
          <span class="on-sale-tag">ON SALE</span>
          <img src="https://newzamzamoptico.com/wp-content/uploads/2025/02/WhatsApp-Image-2024-12-27-at-10.08.40-PM.webp" class="main-img" alt="">
          <img src="https://newzamzamoptico.com/wp-content/uploads/2025/02/F-206-Vintage-2-600x600.webp" class="hover-img" alt="">
        </div>
        <div class="card-body">
          <h6 class="mb-1">Goby London CheckMate</h6>
          <p class="mb-1 text-danger fw-semibold">
            From Rs.6,999.00 <br>
            <small class="text-muted text-decoration-line-through">Rs.10,999.00</small>
          </p>
          <div class="color-options">
            <div style="background:#f8f1da;"></div>
            <div style="background:#4d392d;"></div>
          </div>
        </div>
      </div>
    </div>

 <div class="button-group">
      <a href="#" class="discover-btn">VIEW BEST SELLERS</a>
    </div>

  </div>
</div>

<!-- cards -->



<!-- ✅ Hero Section with 6 Slides -->
<section class="animated-hero-section">
  <div class="swiper heroSwiper">
    <div class="swiper-wrapper">
      <!-- Slide 1 -->
      <div class="swiper-slide hero-slide" style="background-image: url('https://alburhanluggage.com/cdn/shop/files/delsey-banner.jpg?v=1711345055&width=1400');">
        <div class="hero-overlay">
          <div class="hero-text">
            <small>Echolac</small>
            <h2>CRAFTED FOR ADVENTURES</h2>
            <a href="#" class="discover-btn">SHOP</a>
          </div>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="swiper-slide hero-slide" style="background-image: url('https://alburhanluggage.com/cdn/shop/files/slider2.jpg?v=1707469657&width=1400');">
        <div class="hero-overlay">
          <div class="hero-text">
            <small>Smart Travel</small>
            <h2>LIGHTWEIGHT LUGGAGE</h2>
            <a href="#" class="discover-btn">DISCOVER</a>
          </div>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="swiper-slide hero-slide" style="background-image: url('https://alburhanluggage.com/cdn/shop/files/american-tourister-banner.jpg?v=1711344950&width=1400');">
        <div class="hero-overlay">
          <div class="hero-text">
            <small>New Arrival</small>
            <h2>GLOBETROTTER BAGS</h2>
            <a href="#" class="discover-btn">EXPLORE</a>
          </div>
        </div>
      </div>

      <!-- Slide 4 -->
      <div class="swiper-slide hero-slide" style="background-image: url('https://alburhanluggage.com/cdn/shop/files/echolac-banner.jpg?v=1711345133&width=1400');">
        <div class="hero-overlay">
          <div class="hero-text">
            <small>Durability</small>
            <h2>RUGGED DESIGNS</h2>
            <a href="#" class="discover-btn">SEE MORE</a>
          </div>
        </div>
      </div>

      <!-- Slide 5 -->
      <div class="swiper-slide hero-slide" style="background-image: url('https://alburhanluggage.com/cdn/shop/files/it-luggage-banner.jpg?v=1711345193&width=1400');">
        <div class="hero-overlay">
          <div class="hero-text">
            <small>Seasonal Deal</small>
            <h2>SALE GOING ON</h2>
            <a href="#" class="discover-btn">SHOP NOW</a>
          </div>
        </div>
      </div>

      <!-- Slide 6 -->
      <div class="swiper-slide hero-slide" style="background-image: url('https://alburhanluggage.com/cdn/shop/files/image-lojel.jpg?v=1707471140&width=1400');">
        <div class="hero-overlay">
          <div class="hero-text">
            <small>Back in Stock</small>
            <h2>TRAVEL WITH STYLE</h2>
            <a href="#" class="discover-btn">BROWSE</a>
          </div>
        </div>
      </div>
    </div>

    <!-- ✅ Pagination Dots -->
    <div class="swiper-pagination"></div>
  </div>
</section>


<!-- ✅ CSS -->




<!-- ✅ ELEGANT AIM SECTION -->
<section class="aim-section">
  <div class="container text-center">
    <div class="aim-icon">
      <!-- Replace with your own SVG or image if needed -->
      <img src="https://cdn-icons-png.flaticon.com/512/2331/2331970.png" alt="Bag Icon" width="70" height="70" />
    </div>
    <h2 class="aim-heading">
      OUR AIM: OFFER ELEGANT,<br>
      TIMELESS & FUNCTIONAL<br>
      PRODUCTS
    </h2>
    <div class="aim-links">
      <a href="#" class="aim-link">Our story</a>
      <a href="#" class="aim-link">Commitments</a>
    </div>
  </div>
</section>



<!-- work with section6 -->


<section class="collection-grid">
  <div class="container">
    <div class="row g-4">
      <!-- Left Column with Bigger Width (7) -->
      <div class="col-lg-8">
        <div class="collection-box zoom-on-hover">
          <img src="https://alburhanluggage.com/cdn/shop/files/luggage.jpg?v=1709100148&width=1400" alt="Luggage">
          <div class="overlay-text">
            <h3>LUGGAGE</h3>
            <a href="#" class="discover-btn">VIEW COLLECTION</a>
          </div>
        </div>
      </div>

      <!-- Right Column with Smaller Width (5) -->
      <div class="col-lg-4 d-flex flex-column gap-4">
        <div class="collection-box zoom-on-hover">
          <img src="https://alburhanluggage.com/cdn/shop/files/travel-accessories.jpg?v=1709100148&width=700" alt="Travel Accessories" height="300px">
          <div class="overlay-text">
            <h3>TRAVEL ACCESSORIES</h3>
            <a href="#" class="discover-btn">VIEW COLLECTION</a>
          </div>
        </div>
        <div class="collection-box zoom-on-hover">
          <img src="https://alburhanluggage.com/cdn/shop/files/backpack.jpg?v=1709100148&width=700" alt="Backpacks" height="300px">
          <div class="overlay-text">
            <h3>BACKPACKS</h3>
            <a href="#" class="discover-btn">VIEW COLLECTION</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




<!-- scrollcontent -->
<section class="marquee-section">
  <div class="marquee-line">
    <div class="marquee">
      <span>
        <img src="https://alburhanluggage.com/cdn/shop/files/adventure-haven-backpack-03.png?v=1711450051&width=270" alt="Bag" />
        TRAVEL GEAR GUIDE
        <img src="https://alburhanluggage.com/cdn/shop/files/adventure-haven-backpack-03.png?v=1711450051&width=270" alt="Bag" />
        TRAVEL GEAR GUIDE
        <img src="https://alburhanluggage.com/cdn/shop/files/adventure-haven-backpack-03.png?v=1711450051&width=270" alt="Bag" />
        TRAVEL GEAR GUIDE
      </span>
    </div>
  </div>

  <div class="marquee-line mt-5">
    <div class="marquee reverse">
      <span>
        <img src="https://alburhanluggage.com/cdn/shop/files/lust-red-02.png?v=1711353069&width=270" alt="Wallet" />
        FUELING YOUR WANDERLUST
        <img src="https://alburhanluggage.com/cdn/shop/files/lust-red-02.png?v=1711353069&width=270" alt="Wallet" />
        FUELING YOUR WANDERLUST
        <img src="https://alburhanluggage.com/cdn/shop/files/lust-red-02.png?v=1711353069&width=270" alt="Wallet" />
        FUELING YOUR WANDERLUST
      </span>
    </div>
  </div>
</section>
<!-- repair -->

<section class="repair-section">
  <div class="repair-overlay">
    <div class="repair-box">
      <h6 class="repair-title">REPAIR</h6>
      <p class="repair-text">
        When your trusty travel companion faces wear and tear, our expert repair services ensure it's back in action, ready for your next adventure.
      </p>
      <a href="#" class="repair-link">Request A Quote</a>
    </div>
  </div>
</section>

 <!--  cards-->
<div class="container-fluid py-5">
  <div class="row g-4 align-items-stretch">
    <!-- Card Start -->
     <h2 class="text-center">Shop By Category</h2>
    <div class="col-md-3 col-6">
      <div class="card product-card">
        <div class="product-img-container">
          <span class="on-sale-tag">ON SALE</span>
          <img src="https://newzamzamoptico.com/wp-content/uploads/2025/02/F-206-Black-1.webp" class="main-img" alt="Main Image">
          <img src="https://newzamzamoptico.com/wp-content/uploads/2025/02/F-206-Vintage-3.webp" class="hover-img" alt="Hover Image">
        </div>
        <div class="card-body">
          <h6 class="mb-1">Lusetti Signature</h6>
          <p class="mb-1 text-danger fw-semibold">
            From Rs.22,500.00 <br>
            <small class="text-muted text-decoration-line-through">Rs.27,500.00</small>
          </p>
          <div class="color-options">
            <div style="background:#f5c6cb;"></div>
            <div style="background:#000000;"></div>
            <div style="background:#007bff;"></div>
            <div style="background:#dcb4f1;"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Repeat this block for more cards -->
    <div class="col-md-3 col-6">
      <div class="card product-card">
        <div class="product-img-container">
          <span class="on-sale-tag">ON SALE</span>
          <img src="https://newzamzamoptico.com/wp-content/uploads/2025/02/WhatsApp-Image-2024-12-27-at-10.08.40-PM.webp" class="main-img" alt="">
          <img src="https://newzamzamoptico.com/wp-content/uploads/2025/02/F-206-Vintage-2-600x600.webp" class="hover-img" alt="">
        </div>
        <div class="card-body">
          <h6 class="mb-1">Goby London CheckMate</h6>
          <p class="mb-1 text-danger fw-semibold">
            From Rs.6,999.00 <br>
            <small class="text-muted text-decoration-line-through">Rs.10,999.00</small>
          </p>
          <div class="color-options">
            <div style="background:#f8f1da;"></div>
            <div style="background:#4d392d;"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Add more cards below this if needed -->
<div class="col-md-3 col-6">
      <div class="card product-card">
        <div class="product-img-container">
          <span class="on-sale-tag">ON SALE</span>
          <img src="https://newzamzamoptico.com/wp-content/uploads/2025/02/WhatsApp-Image-2024-12-27-at-10.08.40-PM.webp" class="main-img" alt="">
          <img src="https://newzamzamoptico.com/wp-content/uploads/2025/02/F-206-Vintage-2-600x600.webp" class="hover-img" alt="">
        </div>
        <div class="card-body">
          <h6 class="mb-1">Goby London CheckMate</h6>
          <p class="mb-1 text-danger fw-semibold">
            From Rs.6,999.00 <br>
            <small class="text-muted text-decoration-line-through">Rs.10,999.00</small>
          </p>
          <div class="color-options">
            <div style="background:#f8f1da;"></div>
            <div style="background:#4d392d;"></div>
          </div>
        </div>
      </div>
    </div>




    <div class="col-md-3 col-6">
      <div class="card product-card">
        <div class="product-img-container">
          <span class="on-sale-tag">ON SALE</span>
          <img src="https://newzamzamoptico.com/wp-content/uploads/2025/02/WhatsApp-Image-2024-12-27-at-10.08.40-PM.webp" class="main-img" alt="">
          <img src="https://newzamzamoptico.com/wp-content/uploads/2025/02/F-206-Vintage-2-600x600.webp" class="hover-img" alt="">
        </div>
        <div class="card-body">
          <h6 class="mb-1">Goby London CheckMate</h6>
          <p class="mb-1 text-danger fw-semibold">
            From Rs.6,999.00 <br>
            <small class="text-muted text-decoration-line-through">Rs.10,999.00</small>
          </p>
          <div class="color-options">
            <div style="background:#f8f1da;"></div>
            <div style="background:#4d392d;"></div>
          </div>
        </div>
      </div>
    </div>











 <div class="button-group">
      <a href="#" class="discover-btn">VIEW BEST SELLERS</a>
    </div>

  </div>
</div>

<!-- cards -->


<!-- video  -->

<section class="video-hero">
  <video autoplay muted loop playsinline class="bg-video">
    <source src="{{ asset("assets/video/glasses.mov") }}" type="video/mp4">
  </video>

  <div class="video-overlay">
    <div class="video-content text-center">
      <h1 class="brand-title">New ZAMZAM</h1>
      <p class="since-text">SINCE 1933</p>
      <button class="play-btn" onclick="playPromoVideo()">
        <i class="fas fa-play"></i>
      </button>
    </div>
  </div>
</section>




<!-- our look eeyes -->
<section class="our-looks py-5">
  <div class="container">
    <h2 class="text-center mb-5" style="letter-spacing: 2px; font-weight: 500;">OUR LOOKS</h2>

    <div class="swiper ourLooksSlider">
      <div class="swiper-wrapper">
        <!-- Slide Start -->
        <div class="swiper-slide d-flex flex-column flex-md-row align-items-center justify-content-between">
          <div class="left-img" style="margin-left:170px">
            <img src="https://store.theforumist.com/cdn/shop/files/66390007_2_720x.jpg?v=1747213436" alt="Group Bags" class="img-fluid" style="max-width: 100%; height: auto;">
          </div>


          <div class="right-product text-center text-md-start mt-4 mt-md-0 ps-md-5"style="margin-right:170px" >
<span class="badge text-white mb-2" style="font-size: 12px; padding: 6px 10px; background-color: #020043;">ON SALE</span>

<div class="product-img-container">
          <img src="https://newzamzamoptico.com/wp-content/uploads/2025/02/WhatsApp-Image-2024-12-27-at-10.08.40-PM.webp" class="main-img" alt="">
          <img src="https://newzamzamoptico.com/wp-content/uploads/2025/02/F-206-Vintage-2-600x600.webp" class="hover-img" alt="">
        </div>
            <h6 class="mt-3 mb-1" style="font-size: 15px;">American Tourister Curio</h6>
            <p class="text-danger fw-semibold mb-1" style="font-size: 14px;">
              From Rs.51,000.00 <br>
              <small class="text-muted text-decoration-line-through">Rs.85,000.00</small>
            </p>
            <div class="color-dots d-flex justify-content-center justify-content-md-start gap-2 mb-3">
              <span style="width: 14px; height: 14px; background: #eac4de; border-radius: 50%; display:inline-block;"></span>
              <span style="width: 14px; height: 14px; background: #000; border-radius: 50%; display:inline-block;"></span>
              <span style="width: 14px; height: 14px; background: #0026ff; border-radius: 50%; display:inline-block;"></span>
            </div>
<a href="#" class="btn btn-dark px-5 py-2 discover-btn" style="font-size: 13px; border-radius: 0; white-space: nowrap;">
  VIEW PRODUCT
</a>
          </div>
        </div>
        <!-- Slide End -->
      </div>

      <!-- Swiper Arrows -->
    <div class="swiper-button-prev" style="color: #222; left: 15px;"></div>
<div class="swiper-button-next" style="color: #222; right: 15px;"></div>

    </div>
  </div>
</section>


<!-- about -->
<section class="about-section">
  <div class="about-container">
    <div class="about-text">
      <h2>ABOUT US</h2>
      <p>When it comes to packing, choosing the perfect luggage is the first step to ensuring you have everything you need for your travels.</p>
      <p>Permanent luggage is important when moving a bit. In your case, a hard case is a great way to avoid any internal damage, but if the fabric is thick and strong, a plastic suitcase is just as good.</p>
      <p>
        Searching for the <strong>best luggage store in Pakistan?</strong> Al Burhan Luggage is here! Bringing you the highest-quality
        <a href="#">Luggage</a>, <a href="#">Suitcases</a>, <a href="#">Traveling backpacks</a>, Trolley bags, Spinner Luggage,
        <a href="#">Hardside Luggage</a>, <a href="#">Softside Luggage</a> and many more.
      </p>
    </div>

    <div class="about-images">
      <img src="https://alburhanluggage.com/cdn/shop/files/showcase-1.jpg?v=1709101655&width=500" class="img-main" alt="Main Image" />
      <img src="https://alburhanluggage.com/cdn/shop/files/showcase-2.jpg?v=1709101655&width=500" class="img-overlap" alt="Overlap Image" />
    </div>
  </div>
</section>
<!--  -->

<!-- STORE VISIT VIDEO SECTION -->
<section class="store-video-section py-5 bg-light mt-5">
  <div class="container">
    <h2 class="text-center mb-5" style="letter-spacing: 2px;">VIEW SOME OF OUR STORE VISIT VIDEOS</h2>
    <div class="row g-4 justify-content-center">

       <div class="col-md-3 col-6">
        <div class="video-box" onclick="openVideo('https://www.youtube.com/embed/No80HCoE8_o')">
          <img src="https://img.youtube.com/vi/No80HCoE8_o/hqdefault.jpg" class="img-fluid rounded shadow" alt="YouTube Thumbnail">
          <div class="play-btn"><i class="fas fa-play"></i></div>
        </div>
      </div>

      <!-- YouTube Video -->
      <div class="col-md-3 col-6">
        <div class="video-box" onclick="openVideo('https://www.youtube.com/embed/No80HCoE8_o')">
          <img src="https://img.youtube.com/vi/No80HCoE8_o/hqdefault.jpg" class="img-fluid rounded shadow" alt="YouTube Thumbnail">
          <div class="play-btn"><i class="fas fa-play"></i></div>
        </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="video-box" onclick="openVideo('https://www.youtube.com/embed/No80HCoE8_o')">
          <img src="https://img.youtube.com/vi/No80HCoE8_o/hqdefault.jpg" class="img-fluid rounded shadow" alt="YouTube Thumbnail">
          <div class="play-btn"><i class="fas fa-play"></i></div>
        </div>
      </div>

            <div class="col-md-3 col-6">
        <div class="video-box" onclick="openVideo('https://www.youtube.com/embed/No80HCoE8_o')">
          <img src="https://img.youtube.com/vi/No80HCoE8_o/hqdefault.jpg" class="img-fluid rounded shadow" alt="YouTube Thumbnail">
          <div class="play-btn"><i class="fas fa-play"></i></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Video Popup Modal -->
<div id="videoPopup" class="video-popup" style="display: none;">
  <div class="video-popup-content">
    <span class="close-btn" onclick="closeVideo()" style="cursor:pointer;">&times;</span>

    <!-- iframe for YouTube -->
    <iframe id="popupIframe" width="100%" height="400" style="display:none;" frameborder="0" allowfullscreen></iframe>

    <!-- video for local file -->
    <video id="popupVideo" width="100%" height="400" controls style="display:none;">
      <source id="popupSource" src="" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  </div>
</div>





<!-- scroller section -->


<!-- scroller section -->




<!--
<section class="scroll-change-section">
  <div class="scroll-wrapper">
    <div class="scroll-images">
      <img src="https://alburhanluggage.com/cdn/shop/files/hira-mani.jpg?v=1708432596" class="scroll-img active" alt="Hira Mani">
      <img src="https://alburhanluggage.com/cdn/shop/files/sarfaraz-ahmed.jpg?v=1708435259" class="scroll-img" alt="Sarfaraz Ahmed">
      <img src="https://alburhanluggage.com/cdn/shop/files/ushnah-shah.jpg?v=1708435259" class="scroll-img" alt="Ushnah Shah">
    </div>
    <div class="scroll-content">
      <div class="scroll-item active">
        <h6>Actress</h6>
        <h3>Hira Mani</h3>
        <p>As a busy actress and mom, I need luggage that can keep up with my hectic schedule. Stylish, durable, and practical – it's a game-changer!</p>
      </div>
      <div class="scroll-item">
        <h3>Sarfaraz Ahmed</h3>
        <p>On and off the field, Al Burhan gives me confidence. It’s strong, stylish, and ready for every journey.</p>
      </div>
      <div class="scroll-item">
        <h3>Ushnah Shah</h3>
        <p>From city lights to wilderness – my luggage is my trusted travel partner. Al Burhan Luggage carries my adventures.</p>
      </div>
    </div>
  </div>
</section> -->

<section class="scroll-change-section">
  <div class="container">
    <div class="row align-items-start scroll-wrapper">

      <!-- Left Column (Image) -->
      <div class="col-md-6 scroll-images">
        <img src="https://alburhanluggage.com/cdn/shop/files/hira-mani.jpg?v=1708432596" class="scroll-img active" alt="Hira Mani">
        <img src="https://alburhanluggage.com/cdn/shop/files/sarfaraz-ahmed.jpg?v=1708435259" class="scroll-img" alt="Sarfaraz Ahmed">
        <img src="https://alburhanluggage.com/cdn/shop/files/ushnah-shah.jpg?v=1708435259" class="scroll-img" alt="Ushnah Shah">
      </div>

      <!-- Right Column (Text) -->
      <div class="col-md-6 scroll-content">
        <div class="scroll-item active">
          <h6>Actress</h6>
          <h3>Hira Mani</h3>
          <p>As a busy actress and mom, I need luggage that can keep up with my hectic schedule. Al Burhan Luggage not only meets but exceeds my expectations! Stylish, durable, and practical – it's a game-changer for any on-the-go lifestyle.</p>
        </div>
        <div class="scroll-item">
          <h6>Cricketer</h6>
          <h3>Sarfaraz Ahmed</h3>
          <p>On and off the field, Al Burhan gives me confidence. It’s strong, stylish, and ready for every journey.</p>
        </div>
        <div class="scroll-item">
          <h6>Actress</h6>
          <h3>Ushnah Shah</h3>
          <p>From city lights to wilderness – my luggage is my trusted travel partner. Al Burhan Luggage carries my adventures.</p>
        </div>
      </div>

    </div>
  </div>
</section>





<!-- scroller -->

<!-- featureed images -->
<!-- Featured Product Section -->
<section class="featured-product-section py-5">
  <div class="container">
    <h2 class="text-center mb-4 text-uppercase" style="letter-spacing: 2px;">Featured Product</h2>
    <div class="row align-items-center">

 <!-- Left Image Column -->
<div class="col-md-6 text-center">
  <img id="productMainImage" src="https://alburhanluggage.com/cdn/shop/files/modo-by-rontato-black-large-01.png?v=1713525465&width=500" alt="Modo by Roncato" class="img-fluid" style="max-height: 450px;">

  <!-- 👇 Image Dots Below -->
  <div class="d-flex justify-content-center mt-3 gap-2 flex-wrap">
    <span class="dot-thumb active" onclick="changeMainImage(this, 'https://alburhanluggage.com/cdn/shop/files/modo-by-roncato-orange-small-01.png?v=1713886002&width=600')"></span>
    <span class="dot-thumb" onclick="changeMainImage(this, 'https://alburhanluggage.com/cdn/shop/files/modo-by-rontato-black-small-05.png?v=1713525519&width=600')"></span>
    <span class="dot-thumb" onclick="changeMainImage(this, 'https://alburhanluggage.com/cdn/shop/files/modo-by-rontato-black-small-06.png?v=1713525519&width=600')"></span>
    <span class="dot-thumb" onclick="changeMainImage(this, 'https://alburhanluggage.com/cdn/shop/files/modo-by-rontato-black-small-07.png?v=1713525518&width=600')"></span>
  </div>
</div>

      <!-- Right Content Column -->
      <div class="col-md-6">
        <h6 class="text-uppercase text-muted mb-1">Modo</h6>
        <h3 class="fw-bold mb-2">Modo by Roncato</h3>
        <span class="badge bg-danger mb-2">Save 11%</span>
        <p class="fs-5 fw-semibold text-danger mb-1">Rs.15,999.00
          <del class="text-muted fs-6">Rs.17,999.00</del>
        </p>

        <p class="text-muted mt-3">
          Introducing the latest addition to our collection, the Modo by Roncato Luggage Set. Designed to elevate your travel experience, this meticulously crafted luggage set combines style, durability, and functionality.
        </p>

        <p class="text-muted">
          Explore the world with confidence, knowing your belongings are safe and secure in Modo by Roncato.
        </p>

        <hr>

        <!-- Color Options -->
        <p class="mb-1 fw-semibold">Color:</p>
        <div class="d-flex gap-2 mb-3">
          <div class="color-dot active" onclick="changeImage(this, 'https://alburhanluggage.com/cdn/shop/files/modo-by-rontato-black-large-01.png?v=1713525465&width=500')" style="background:black; width:30px; height:30px; cursor:pointer;"></div>
          <div class="color-dot active" onclick="changeImage(this, 'https://alburhanluggage.com/cdn/shop/files/modo-by-roncato-navy-small-01.png?v=1713886002&width=600')" style="background:blue; width:30px; height:30px; cursor:pointer;"></div>
          <div class="color-dot active" onclick="changeImage(this, 'https://alburhanluggage.com/cdn/shop/files/modo-by-roncato-bottle-green-small-01.png?v=1713886002&width=600')" style="background:green; width:30px; height:30px; cursor:pointer;"></div>
          <div class="color-dot active" onclick="changeImage(this, 'https://alburhanluggage.com/cdn/shop/files/modo-by-roncato-bottle-green-small-01.png?v=1713886002&width=600')" style="background:orange; width:30px; height:30px; cursor:pointer;"></div>
        </div>

        <!-- Size Options -->
        <p class="mb-1 fw-semibold">Size:</p>
        <div class="d-flex gap-2 mb-3 flex-wrap">
          <button class="btn btn-outline-secondary btn-sm">Small</button>
          <button class="btn btn-outline-secondary btn-sm">Medium</button>
          <button class="btn btn-outline-secondary btn-sm">Large</button>
          <button class="btn btn-outline-secondary btn-sm">Set of 3</button>
        </div>

        <!-- Quantity, Add to Cart, Buy It Now -->
        <div class="d-flex flex-column gap-2 mt-4">

          <!-- Quantity Selector -->
          <div class="d-flex align-items-center border px-2 py-1" style="max-width: 130px;">
            <button class="btn p-0 px-2" onclick="this.nextElementSibling.stepDown()">−</button>
            <input type="number" value="1" min="1" class="form-control text-center border-0" style="width: 50px;">
            <button class="btn p-0 px-2" onclick="this.previousElementSibling.stepUp()">+</button>
          </div>

          <!-- Add to Cart -->
          <button class="btn discover-btn-new w-100 border border-dark text-uppercase fw-semibold" style="letter-spacing: 1px;">
            Add to Cart
          </button>

          <!-- Buy It Now -->
          <button class="btn w-100 text-white fw-semibold text-uppercase" style="background:#000; letter-spacing: 1px;">
            Buy It Now
          </button>

        </div>
      </div>

    </div>
  </div>
</section>



<!-- newsletter -->
<section class="newsletter-section">
  <div class="newsletter-overlay">
    <div class="newsletter-content text-center">
      <p class="small-text">KEEP ME UPDATED</p>
      <h2 class="newsletter-title">NEWSLETTER</h2>

      <form class="newsletter-form d-flex justify-content-center mt-4" onsubmit="return false;">
        <input type="email" class="newsletter-input" placeholder="E-mail" required />
        <button type="submit" class="discover-btn">SUBSCRIBE</button>
      </form>
    </div>
  </div>
</section>
<!-- newsletter -->






<!-- information -->
<section class="contact-info-bar py-5">
  <div class="container">
    <div class="row text-center justify-content-center">

      <div class="col-md-4 mb-4 mb-md-0">
        <i class="fa-solid fa-location-dot contact-icon"></i>
        <p class="contact-heading">FIND A STORE NEAR YOU</p>
        <a href="#" class="contact-link">Get Direction</a>
      </div>

      <div class="col-md-4 mb-4 mb-md-0">
        <i class="fa-solid fa-phone contact-icon"></i>
        <p class="contact-heading">CALL US TODAY</p>
        <a href="tel:+923312255063" class="contact-link">+923312255063</a>
      </div>

      <div class="col-md-4">
        <i class="fa-solid fa-print contact-icon"></i>
        <p class="contact-heading">SEND US AN ENQUIRY</p>
        <a href="mailto:info@alburhanluggage.com" class="contact-link">info@alburhanluggage.com</a>
      </div>

    </div>
  </div>
</section>
<!-- information -->



@endsection
