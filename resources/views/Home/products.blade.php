@extends("Layout.layout")
@section("Content")
<!-- Featured Product Section -->
<section class="featured-product-section py-5" style="margin-top: 120px;" >
  <div class="container">
    <h2 class="text-center mb-4 text-uppercase" style="letter-spacing: 2px;">Product Details</h2>
    <div class="row align-items-start">
      <!-- Left Image Column -->
      <div class="col-md-6 text-center">
        <img id="productMainImage" src="https://alburhanluggage.com/cdn/shop/files/modo-by-rontato-black-large-01.png?v=1713525465&width=500" alt="Modo by Roncato" class="img-fluid" style="max-height: 450px;">

        <!-- Image Gallery Dots Below -->
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

@endsection
