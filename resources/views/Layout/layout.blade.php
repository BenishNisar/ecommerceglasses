<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Al-Burhan Hero</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">


</head>
<body>

  <!-- Announcement -->
  <div class="announcement-bar">
    <p style="font-size:13px;">

    ENJOY FREE NATIONWIDE SHIPPING ON ORDERS OVER RS. 5000!

  </div>

  <!-- Hero Section Start -->
  <section class="hero-section">
    <!-- ✅ Navbar placed inside Hero -->
    <div class="navbar-bar" id="navbar">

      <!-- container -->
         <div class="container-fluid d-flex justify-content-between align-items-center">

      <div class="menu-icon" onclick="toggleSidebar()">
        <i class="fas fa-bars"></i>
      </div>
      <div class="logo-center">
        <img src="{{ asset("assets/img/logo.png") }}" alt="Al-Burhan Logo" />
      </div>
      <div class="nav-icons">
{{-- <i class="fa-thin fa-user"></i> --}}
 <a href="{{ asset("/login") }}" class="nav-login">
    <i class="fa-thin fa-user"></i>
  </a>

{{-- <i class="fa-thin fa-search" onclick="toggleSearchInput()"></i>
          <i class="fa-thin fa-bag-shopping" onclick="toggleCartSidebar()"></i> --}}

<!-- Search Icon with Anchor Tag -->
<a href="#" onclick="toggleSearchInput()">
  <i class="fa-thin fa-search"></i>
</a>

<!-- Cart Icon with Anchor Tag -->
<a href="#" onclick="toggleCartSidebar()">
  <i class="fa-thin fa-bag-shopping"></i>
</a>
</div>

<!-- Search Input Field -->
<div class="search-container" id="searchContainer">
  <input type="text" class="search-input" placeholder="Search...">
  <button class="close-btn" onclick="toggleSearchInput()">&times;</button> <!-- Close Button -->
</div>


 <!-- Sidebar for Cart -->
    <div class="cart-sidebar" id="cartSidebar">


      <span class="cart-sidebar-close" onclick="toggleCartSidebar()">&times;</span>
      {{-- <h3>Your Cart</h3> --}}
      {{-- <div id="cartItems"></div>  --}}
      <div class="cart-item">
  <img src="https://alburhanluggage.com/cdn/shop/files/modo-by-rontato-black-large-01.png?v=1713525465&width=500" alt="Modo by Roncato">
  <div class="cart-item-details">
    <h5>Modo by Roncato</h5>
    <p>BLACK / SMALL</p>
    <p>Rs.15,999.00</p>
    <div class="qty-controls">
      <button>-</button>
      <span>1</span>
      <button>+</button>
    </div>
    <span class="remove-btn" onclick="removeFromCart(this)">Remove</span>
  </div>
</div>

      <div>
        <button class="btn btn-primary w-100" style="position: relative;top:50px;">Checkout</button>
      </div>
    </div>

      </div>
    </div>

    <!-- Sidebar -->
<!-- TOGGLE BUTTON IN NAVBAR -->
<div class="menu-icon" onclick="toggleSidebar()">
  <i class="fas fa-bars"></i>
</div>

<!-- ✅ SIDEBAR WRAPPER -->
<div class="sidebar-wrapper" id="sidebarWrapper">

  <!-- LEFT SIDEBAR -->
  <div class="sidebar left-sidebar" id="sidebar">
    <span class="sidebar-close" onclick="closeSidebar()">&times;</span>
    <ul>
      <li>Screen Glasses
</li>
<li>Intelligent Glasses</li>
<li onclick="toggleSubSidebar('eyeglasses-subsidebar')">EYEGLASSES <i class="fas fa-chevron-right"></i></li>
<li>Female Glasses</li>
      <li onclick="toggleSubSidebar('sunglasses-subsidebar')">SUNGLASSES <i class="fas fa-chevron-right"></i></li>
      <li onclick="toggleSubSidebar('contact-lenses-subsidebar')">CONTACT LENSES <i class="fas fa-chevron-right"></i></li>
<li>About Us</li>
<li>Contact Us</li>
<li>Track Order</li>
<li>Refund Policy

</li>
<li>
Accessories
</li>
    </ul>
  </div>

  <!-- RIGHT SIDEBAR: EYEGLASSES -->
  <div class="sidebar right-sidebar" id="eyeglasses-subsidebar">
    <ul>
      <li>Transition Glasses</li>
      <li>luxury glasses</li>
      <li>Clipper Glasses</li>
      <li>Sale Glasses</li>
    </ul>
  </div>

  <!-- RIGHT SIDEBAR: SUNGLASSES -->
  <div class="sidebar right-sidebar" id="sunglasses-subsidebar">
    <span class="sidebar-close" onclick="closeSidebar()">&times;</span>
    <ul>
      <li>Male Sunglasses</li>
      <li>Female Glasses</li>
    </ul>
  </div>

  <!-- RIGHT SIDEBAR: CONTACT LENSES -->
  <div class="sidebar right-sidebar" id="contact-lenses-subsidebar">
    <span class="sidebar-close" onclick="closeSidebar()">&times;</span>
    <ul>
      <li>Dahab Contact lenses</li>
      <li>One Day Wear</li>
      <li>Monthly Wear</li>
    </ul>
  </div>

</div>

    <!-- Banner Slides -->
    <!-- <div class="hero-carousel">
      <div class="slide active" style="background-image: url('logo.jpg');">
        <div class="overlay"></div>
        <div class="hero-content">

          <p>TO PROVIDE A RANGE OF TRAVEL LUGGAGE & SUPPORT SERVICES THAT<br>ALWAYS ENSURES VALUE, QUALITY, SAFETY AND INNOVATION</p>
          <h1>LUGGAGE FOR EVERY JOURNEY</h1>
<div class="button-group">
  <a href="#" class="discover-btn">DISCOVER MORE</a>
</div>
        </div>
      </div>
    </div> -->

{{-- navbarend --}}




@yield('Content')

{{-- hero end --}}
{{-- footer --}}

<!-- FOOTER SECTION -->
<footer class="site-footer">
  <div class="container-fluid py-5">
    <div class="row gy-4">

      <!-- Newsletter -->
      <div class="col-md-3">
        <h6 class="footer-heading">NEWSLETTER</h6>
        <p class="footer-text">Subscribe to receive updates, access to exclusive deals, and more.</p>
        <form class="d-flex flex-column gap-2">
          <input type="email" class="form-control rounded-0" placeholder="E-mail">
          <button type="submit" class="btn discover-btn btn-dark rounded-0 text-uppercase" style="letter-spacing: 1px;">Subscribe</button>
        </form>
      </div>

      <!-- Shop -->
      <div class="col-md-2">
        <h6 class="footer-heading">SHOP</h6>
        <ul class="list-unstyled">
          <li><a href="#">Luggage</a></li>
          <li><a href="#">Backpacks</a></li>
          <li><a href="#">Business</a></li>
          <li><a href="#">Kid’s Luggage</a></li>
          <li><a href="#">Travel Accessories</a></li>
          <li><a href="#">Wallets & Keychains</a></li>
        </ul>
      </div>

      <!-- Information -->
      <div class="col-md-3">
        <h6 class="footer-heading">INFORMATION</h6>
        <ul class="list-unstyled">
          <li><a href="#">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Our Stores</a></li>
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">Blogs</a></li>
          <li><a href="#">Track Your Order</a></li>
          <li><a href="#">Terms & Conditions</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Refund and Returns Policy</a></li>
        </ul>
      </div>

      <!-- About -->
      <div class="col-md-4">
        <h6 class="footer-heading">ABOUT COMPANY</h6>
        <p class="footer-text">
          For decades, Al Burhan Luggage has prided itself on design, innovation and durability in crafting the highest quality luggage for the experienced traveler. Since transforming the ease of modern day travel with the original wheeled luggage, Al Burhan has been the brand of choice for flight crews and frequent travellers worldwide.
        </p>
      </div>

    </div>

    <!-- Bottom row -->
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mt-5 pt-4 border-top">
      <p class="mb-2 mb-md-0 small">&copy; 2025 · Al Burhan Luggage. Website by Bohra Developers</p>
      <div class="d-flex gap-3 mb-2 mb-md-0">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        {{-- <a href="#"><i class="fab fa-x-twitter"></i></a> --}}
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-pinterest"></i></a>
      </div>
      <div class="d-flex gap-2">
        <img src="https://img.icons8.com/color/48/visa.png" height="24"/>
        <img src="https://img.icons8.com/color/48/mastercard.png" height="24"/>
        <img src="https://img.icons8.com/color/48/amex.png" height="24"/>
        <img src="https://img.icons8.com/color/48/paypal.png" height="24"/>
        <img src="https://img.icons8.com/color/48/discover.png" height="24"/>
      </div>
    </div>

  </div>
</footer>


</body>


<script>
// Scroll to top on page load (optional, but for debugging)
window.scrollTo(0, 0);

// Smooth scrolling for anchor links (optional)
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();
    document.querySelector(this.getAttribute("href")).scrollIntoView({
      behavior: "smooth",
    });
  });
});

</script>
<script>
  const ourLooksSlider = new Swiper('.ourLooksSlider', {
    slidesPerView: 1,
    loop: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });




</script>

<script>
  const items = document.querySelectorAll(".scroll-item");
  const images = document.querySelectorAll(".scroll-img");

  window.addEventListener("scroll", () => {
    let index = 0;
    items.forEach((item, i) => {
      const rect = item.getBoundingClientRect();
      if (rect.top < window.innerHeight / 2) {
        index = i;
      }
    });

    items.forEach((item, i) => {
      item.classList.toggle("active", i === index);
      images[i].classList.toggle("active", i === index);
    });
  });
</script>

<script>
    / Sample Product Data
    const sampleProduct = {
      name: "Modo Luggage",
      price: "Rs.15,999",
      image: "https://alburhanluggage.com/cdn/shop/files/modo-by-rontato-black-large-01.png?v=1713525465&width=500"
    };

    // Function to toggle the Cart Sidebar
    function toggleCartSidebar() {
      const cartSidebar = document.getElementById("cartSidebar");
      cartSidebar.classList.toggle("active"); // Toggle the 'active' class to slide in/out
    }

    // Add product to the cart
    function addToCart(product) {
      const cartItems = document.getElementById("cartItems");
      const cartItem = document.createElement("div");
      cartItem.classList.add("cart-item");

      cartItem.innerHTML = `
        <img src="${product.image}" alt="${product.name}">
        <div class="cart-item-details">
          <h5>${product.name}</h5>
          <p>${product.price}</p>
        </div>
        <button class="btn btn-sm btn-danger" onclick="removeFromCart(this)">Remove</button>
      `;

      cartItems.appendChild(cartItem);
      toggleCartSidebar(); // Open the sidebar when product is added
    }

    // Remove item from cart
    function removeFromCart(button) {
      const cartItem = button.closest(".cart-item");
      cartItem.remove();
    }

    // Call addToCart when "Add to Cart" button is clicked
    document.querySelector('.btn-success').addEventListener('click', () => {
      addToCart(sampleProduct);
    });
</script>


<script>
  function toggleSidebar() {
    document.getElementById('sidebarWrapper').classList.add('active');
  }

  function closeSidebar() {
    document.getElementById('sidebarWrapper').classList.remove('active');
    document.querySelectorAll('.right-sidebar').forEach(sidebar => {
      sidebar.classList.remove('active');
    });
  }

  function toggleSubSidebar(id) {
    document.querySelectorAll('.right-sidebar').forEach(sidebar => {
      sidebar.classList.remove('active');
    });
    document.getElementById(id).classList.add('active');
  }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script src="{{ asset("assets/js/app.js") }}"></script>
</html>

