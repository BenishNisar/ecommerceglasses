let slides = document.querySelectorAll('.slide');
let dots = document.querySelectorAll('.dot');
let currentSlide = 0;

function showSlide(index) {
    // Hide all slides
    slides.forEach(slide => slide.classList.remove('active'));
    dots.forEach(dot => dot.classList.remove('active'));

    // Show the selected slide
    slides[index].classList.add('active');
    dots[index].classList.add('active');
}

// Handle dot click
dots.forEach((dot, index) => {
    dot.addEventListener('click', () => {
        currentSlide = index;
        showSlide(currentSlide);
    });
});

// Auto-scroll the carousel (optional, you can remove this if you don't want auto-scrolling)
setInterval(() => {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
}, 5000); // Change slide every 5 seconds


// Navbar scroll
window.addEventListener("scroll", () => {
  const navbar = document.getElementById("navbar");
  if (window.scrollY > 40) {
    navbar.classList.add("scrolled");
  } else {
    navbar.classList.remove("scrolled");
  }
});

// Sidebar toggle
function toggleSidebar() {
  document.getElementById("sidebar").classList.toggle("active");
}


function toggleSidebar() {
      document.getElementById("sidebar").classList.toggle("active");
    }


// sidebar
function toggleSidebar() {
  document.getElementById("sidebar").classList.toggle("active");
}


// caruselarrowe
  function scrollToContent() {
    window.scrollTo({
      top: window.innerHeight,
      behavior: 'smooth'
    });
  }


  // navbar sticky

    const navbar = document.getElementById("navbar");
  const announcement = document.querySelector(".announcement-bar");

  window.addEventListener("scroll", () => {
    if (window.scrollY > 80) {
      navbar.classList.add("sticky");
      announcement.classList.add("hide");
    } else {
      navbar.classList.remove("sticky");
      announcement.classList.remove("hide");
    }
  });




  // animation on section  five
    const swiper = new Swiper(".heroSwiper", {
    effect: "fade",
    loop: true,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });

  // video animation

function playPromoVideo() {
  alert("You clicked play!");
}


// looks
// videos url
function openVideo(url) {
  const isYouTube = url.includes("youtube.com");
  document.getElementById("videoPopup").style.display = "flex";

  if (isYouTube) {
    document.getElementById("popupVideo").style.display = "none";
    document.getElementById("popupIframe").style.display = "block";
    document.getElementById("popupIframe").src = url + "?autoplay=1";
  } else {
    document.getElementById("popupIframe").style.display = "none";
    document.getElementById("popupVideo").style.display = "block";
    document.getElementById("popupSource").src = url;
    document.getElementById("popupVideo").load();
    document.getElementById("popupVideo").play();
  }
}

function closeVideo() {
  document.getElementById("popupIframe").src = "";
  document.getElementById("popupVideo").pause();
  document.getElementById("popupVideo").currentTime = 0;
  document.getElementById("videoPopup").style.display = "none";
}
// scroller video

// Function to toggle the search input visibility
function toggleSearchInput() {
  const searchContainer = document.getElementById('searchContainer');

  // Toggle display between 'none' and 'block'
  if (searchContainer.style.display === "none" || searchContainer.style.display === "") {
    searchContainer.style.display = "block"; // Show search bar
  } else {
    searchContainer.style.display = "none"; // Hide search bar
  }
}


// CAROUSEL

// cart sidebar
// Toggle Cart Sidebar
function toggleCartSidebar() {
  const cartSidebar = document.getElementById("cartSidebar");
  cartSidebar.classList.toggle("active");
}

// Close the cart sidebar when clicking the close button
document.querySelector(".cart-sidebar-close").addEventListener("click", function() {
  document.getElementById("cartSidebar").classList.remove("active");
});

// Add an item to the cart (example function)
// carts
// Toggle Cart Sidebar
function toggleCartSidebar() {
  const cartSidebar = document.getElementById("cartSidebar");
  cartSidebar.classList.toggle("active");
}

// Close the cart sidebar when clicking the close button
document.querySelector(".cart-sidebar-close").addEventListener("click", function() {
  document.getElementById("cartSidebar").classList.remove("active");
});

// Add an item to the cart (example function)
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
}

// Remove item from the cart
function removeFromCart(button) {
  const cartItem = button.closest(".cart-item");
  cartItem.remove();
}

// Sample product for testing
const sampleProduct = {
  name: "Modo Luggage",
  price: "Rs.15,999",
  image: "https://alburhanluggage.com/cdn/shop/files/modo-by-rontato-black-large-01.png?v=1713525465&width=500"
};

// Add product to cart when the "Add to Cart" button is clicked
document.querySelector(".discover-btn-new").addEventListener("click", function() {
  addToCart(sampleProduct);
});


// carts


// nested sidebar
function toggleDropdown() {
    var dropdown = document.querySelector('.dropdown-item');
    dropdown.classList.toggle('active');
}

function openCategorySidebar(categoryId) {
    // Hide all sidebars
    var sidebars = document.querySelectorAll('.nested-sidebar');
    sidebars.forEach(function (sidebar) {
        sidebar.style.display = 'none';
    });

    // Show the selected sidebar
    var selectedSidebar = document.getElementById(categoryId);
    if (selectedSidebar) {
        selectedSidebar.style.display = 'block';
    }
}
