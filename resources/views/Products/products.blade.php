@extends('layout.app')

@section('title', 'Products - Organic Farmiz')

@section('content')
<style>
    .products-grid {
  background: #98c183;
  padding: 110px 0;
}

.products-header h2 {
  font-size: 44px;
  font-weight: 700;
  color: #0b2a17;
}

.products-header p {
  color: #0b2a17;
  max-width: 600px;
  margin: 10px auto 40px;
}

/* Filters */
.product-filters {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 12px;
  margin-bottom: 40px;
}

.filter-btn {
  padding: 10px 22px;
  border-radius: 999px;
  border: 1px solid  #0b2a17;
  background: transparent;
  font-weight: 600;
  cursor: pointer;
  transition: 0.3s;
}

.filter-btn.active,
.filter-btn:hover {
  background:  #0b2a17;
  color: #fff;
}

/* Product Card */
.product-card {
  background: #061407;
  border-radius: 22px;
  overflow: hidden;
  height: 100%;
  box-shadow: 0 25px 60px rgba(0,0,0,0.35);
  transition: 0.4s;
}

.product-card img {
  max-width: 100%;
  height: 370px;
  object-fit: cover;
}

.product-body {
  padding: 26px;
  text-align: center;
}

.product-body h3 {
  color: #fff;
  font-size: 20px;
  margin-bottom: 10px;
}

.product-body p {
  color: #cfe3d2;
  font-size: 14px;
  margin-bottom: 18px;
}

/* Buy Button */
.btn-buy {
  display: inline-block;
  padding: 12px 28px;
  background: linear-gradient(135deg, #1f8f4a, #14532d);
  color: #fff;
  border-radius: 999px;
  font-weight: 700;
  text-decoration: none;
  transition: 0.3s;
}

.btn-buy:hover {
  transform: translateY(-3px);
  background: linear-gradient(135deg, #27ae60, #1f8f4a);
}

/* Hover Effect */
.product-card:hover {
  transform: translateY(-14px);
  box-shadow: 0 40px 90px rgba(6,20,7,0.7);
}

/* View More */
.btn-view-more {
  display: inline-block;
  padding: 14px 38px;
  background: #061407;
  color: #fff;
  border-radius: 999px;
  font-weight: 700;
  text-decoration: none;
}

.btn-view-more:hover {
  background: #14532d;
}

/* ===============================
   PRODUCTS TOOLBAR
================================ */
.products-toolbar {
  display: flex;
  flex-wrap: wrap;
  gap: 18px;
  align-items: center;
  justify-content: space-between;
  margin: 40px 0 50px;
}

/* ===============================
   FILTER BUTTONS
================================ */
.product-filters {
  display: flex;
  flex-wrap: wrap;
  gap: 12px;
}

.filter-btn {
  padding: 10px 22px;
  border-radius: 999px;
  border: 1.5px solid #0b2a17;
  background: transparent;
  color: #0b2a17;
  font-weight: 600;
  font-size: 14px;
  cursor: pointer;
  transition: all 0.3s ease;
}

.filter-btn:hover {
  background: rgba(11, 42, 23, 0.1);
}

.filter-btn.active {
  background: #0b2a17;
  color: #ffffff;
  box-shadow: 0 8px 22px rgba(11, 42, 23, 0.35);
}

/* ===============================
   SEARCH BAR
================================ */
.product-search {
  position: relative;
  min-width: 260px;
  margin-bottom: 36px;
}

.product-search i {
  position: absolute;
  top: 50%;
  left: 16px;
  transform: translateY(-50%);
  color: #0b2a17;
  font-size: 16px;
}

.product-search input {
  width: 100%;
  padding: 12px 18px 12px 44px;
  border-radius: 999px;
  border: 1.5px solid #0b2a17;
  background: transparent;
  font-size: 14px;
  outline: none;
  color: #0b2a17;
}

.product-search input::placeholder {
  color: rgba(11, 42, 23, 0.6);
}

.product-search input:focus {
  background: #ffffff;
  box-shadow: 0 0 0 3px rgba(11, 42, 23, 0.15);
}

/* ===============================
   RESPONSIVE
================================ */
@media (max-width: 768px) {
  .products-toolbar {
    flex-direction: column;
    align-items: stretch;
  }

  .product-search {
    width: 100%;
  }
}


/* MODAL */
.product-modal {
  position: fixed;
  inset: 0;
  display: none;
  z-index: 9999;
}

.product-modal.active {
  display: block;
}

.modal-overlay {
  position: absolute;
  inset: 0;
  background: rgba(6, 20, 7, 0.85);
}

.modal-content {
  position: relative;
  max-width: 1100px;
  margin: 5% auto;
  background: #061407;
  border-radius: 20px;
  padding: 40px;
  color: #fff;
  animation: scaleIn 0.35s ease;
}

@keyframes scaleIn {
  from { transform: scale(0.95); opacity: 0; }
  to { transform: scale(1); opacity: 1; }
}

.modal-close {
  position: absolute;
  top: 18px;
  right: 22px;
  background: none;
  border: none;
  font-size: 28px;
  color: #98c183;
  cursor: pointer;
}

/* GRID */
.modal-grid {
  display: grid;
  grid-template-columns: 1fr 1.2fr;
  gap: 40px;
}

.modal-image img {
  width: 100%;
  border-radius: 16px;
}

/* CONTENT */
.modal-details h2 {
  font-size: 34px;
  margin-bottom: 6px;
  color: white;
}

.strain-type {
  display: inline-block;
  margin-bottom: 18px;
  color: #98c183;
  font-weight: 600;
}

.stats {
  display: flex;
  gap: 20px;
  margin-bottom: 20px;
}

.stats div {
  background: rgba(152,193,131,0.12);
  padding: 8px 14px;
  border-radius: 999px;
  font-size: 14px;
}

.description {
  line-height: 1.7;
  margin-bottom: 18px;
  color: #d7e7dc;
}

.details-list {
  padding-left: 0;
  list-style: none;
  margin-bottom: 18px;
}

.details-list li {
  margin-bottom: 8px;
  font-size: 15px;
  color: #98c183;;
}

.note {
  font-size: 13px;
  opacity: 0.7;
  margin-bottom: 20px;
}

.btn-enquire {
  display: inline-block;
  background: linear-gradient(135deg, #1f8f4a, #14532d);
  padding: 14px 36px;
  border-radius: 999px;
  color: #fff;
  font-weight: 700;
  text-decoration: none;
}

/* RESPONSIVE */
@media (max-width: 768px) {
  .modal-grid {
    grid-template-columns: 1fr;
  }
}


</style>

<!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/Products/product-bg.jpg);">
      <div class="container position-relative">
        <h1>Products</h1>
        <p> We offer a curated range of premium cannabis products produced through
  certified organic cultivation and precision-controlled processes.
  From high-quality flower and pre-rolls to extracts and infused products,
  every item is crafted for consistency, compliance, and scalability — 
  empowering brands to deliver exceptional experiences with confidence.</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li class="current">Products</li>
          </ol>
        </nav>
      </div>
    </div>
<!-- End Page Title -->

   <!-- Blog Posts 2 Section -->
    {{-- <section id="blog-posts-2" class="blog-posts-2 section">

      <div class="container">
        <div class="row gy-4">

          <div class="col-lg-4">
            <article class="position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="post-content d-flex flex-column">

                <h3 class="post-title">Dolorum optio tempore voluptas dignissimos</h3>
                <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-lg-4">
            <article class="position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/blog/blog-2.jpg" class="img-fluid" alt="">
              </div>

              <div class="post-content d-flex flex-column">
                <h3 class="post-title">Nisi magni odit consequatur autem nulla dolorem</h3>
                <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-lg-4">
            <article class="position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt="">
              </div>

              <div class="post-content d-flex flex-column">
                <h3 class="post-title">Possimus soluta ut id suscipit ea ut. In quo quia et soluta libero sit sint.</h3>
                <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-lg-4">
            <article class="position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/blog/blog-4.jpg" class="img-fluid" alt="">
              </div>

              <div class="post-content d-flex flex-column">
                <h3 class="post-title">Non rem rerum nam cum quo minus explicabo eius exercitationem.</h3>
                <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-lg-4">
            <article class="position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/blog/blog-5.jpg" class="img-fluid" alt="">
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">Accusamus quaerat aliquam qui debitis facilis consequatur</h3>
                <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-lg-4">
            <article class="position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/blog/blog-6.jpg" class="img-fluid" alt="">
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">Distinctio provident quibusdam numquam aperiam aut</h3>
                <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </article>
          </div><!-- End post list item -->

        </div>
      </div>

    </section><!-- /Blog Posts 2 Section -->

    <!-- Blog Pagination Section -->
    <section id="blog-pagination" class="blog-pagination section">

      <div class="container">
        <div class="d-flex justify-content-center">
          <ul>
            <li><a href="#"><i class="bi bi-chevron-left"></i></a></li>
            <li><a href="#">1</a></li>
            <li><a href="#" class="active">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li>...</li>
            <li><a href="#">10</a></li>
            <li><a href="#"><i class="bi bi-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>

    </section><!-- /Blog Pagination Section --> --}}

<section id="products-grid" class="products-grid">
  <div class="container">

    <!-- Header -->
    <div class="products-header text-center">
      <h2>Our Products</h2>
      <p>Premium organic cannabis products crafted for quality, compliance, and scalability</p>
    </div>

    <!-- Filters -->
    {{-- <div class="product-filters">
      <button class="filter-btn active" data-filter="all">All</button>
      <button class="filter-btn" data-filter="flower">Flowers</button>
      <button class="filter-btn" data-filter="preroll">Pre-Rolls</button>
      <button class="filter-btn" data-filter="oil">Oils & Tinctures</button>
      <button class="filter-btn" data-filter="extract">Extracts</button>
      <button class="filter-btn" data-filter="edible">Edibles</button>
    </div> --}}
    <div class="products-toolbar">

  <!-- Filters -->
  <div class="product-filters">
    <button class="filter-btn active" data-filter="all">All</button>
    <button class="filter-btn" data-filter="flower">Flowers</button>
    <button class="filter-btn" data-filter="preroll">Pre-Rolls</button>
    <button class="filter-btn" data-filter="oil">Oils & Tinctures</button>
    <button class="filter-btn" data-filter="extract">Extracts</button>
    <button class="filter-btn" data-filter="edible">Edibles</button>
  </div>

  <!-- Search -->
  <div class="product-search">
    <i class="bi bi-search"></i>
    <input
      type="text"
      id="productSearch"
      placeholder="Search products..."
    >
  </div>

</div>


    <!-- Products -->
    <div class="row gy-4 products-container">

      <!-- Flower -->
  <div class="col-lg-4 col-md-6 product-item flower">
  <div class="product-card">

    <img src="{{ asset('assets/img/Products/flower1.png') }}" alt="Mendoz Stomper">

    <div class="product-body">
      <h3>MANDARIN COOKIES</h3>
      <p>Hand-trimmed cannabis grown in certified organic environments.</p>

      <button 
        class="btn-buy"
        onclick="openProductModal(this)"
        data-name="MANDARIN COOKIES"
        data-type="Sativa dominant"
        data-image="{{ asset('assets/img/Products/flower1.png') }}"
        data-thc="27-29% *"
        data-cbd=".08% *"
        data-terpenes="3.5% *"
        data-description="The tight buds of Mendoz Stomper are light green with pastel accents, coated in dense trichomes. Sweet floral aromas meet musky gas and citrus rind with quick-onset relaxing effects."
        data-breeder="ETHOS Genetics"
        data-genetics="Forum Cut Cookies  X  Mandarin Sunset"
        data-aroma="Orange, grapefruit, earthy, herbal, gasoline"
        data-flavour="Sweet citrus, nutty, herbal, sour, diesel"
        data-effects="Energizing and uplifting yet calming with a pleasant body high. Can be heavy."
      >
        View Details
      </button>
    </div>

  </div>
</div>

  <div class="col-lg-4 col-md-6 product-item flower">
  <div class="product-card">

    <img src="{{ asset('assets/img/Products/flower2.jpg') }}" alt="Mendoz Stomper">

    <div class="product-body">
      <h3>MENDOZ STOMPER</h3>
      <p>Hand-trimmed cannabis grown in certified organic environments.</p>

      <button 
        class="btn-buy"
        onclick="openProductModal(this)"
        data-name="MENDOZ STOMPER"
        data-type="INDICA DOMINANT"
        data-image="{{ asset('assets/img/Products/flower2.jpg') }}"
        data-thc="26-29% *"
        data-cbd=".02% *"
        data-terpenes="3.35% *"
        data-description="The tight buds of Mendoz Stomper are light green with pastel accents, punctuated with ochre pistils. The outside of the flower is coated with a dense covering of trichomes which makes for some sticky handling. Each nug is packed with an over-powering sweet to floral aroma that leans towards its Mendo lineage. Expect to encounter a robust and zesty nose of musk and gassy/chemical-like fuel, with a sharp sweet and sour note that points to an intermingling of berry hints and citrus rind. The taste to smell translation is spot on with this one and the effects are quick to take hold."
        data-breeder="Sunken Treasure Seeds"
        data-genetics="Mendo Breath x Oz Kush x Mac Stomper"
        data-aroma="Sweet, floral, musk, gas"
        data-flavour="Sweet-sour, berry, citrus, fuel"
        data-effects="Relaxing, calming, creative, happy, euphoric"
      >
        View Details
      </button>
    </div>

  </div>
</div>

  <div class="col-lg-4 col-md-6 product-item preroll">
  <div class="product-card">

    <img src="{{ asset('assets/img/Products/pre-roll-1.webp') }}" alt="Mendoz Stomper">

    <div class="product-body">
      <h3>Animal Face</h3>
      <p>Hand-trimmed cannabis grown in certified organic environments.</p>

      <button 
        class="btn-buy"
        onclick="openProductModal(this)"
        data-name="MENDOZ STOMPER"
        data-type="INDICA DOMINANT"
        data-image="{{ asset('assets/img/Products/flower2.jpg') }}"
        data-thc="26-29% *"
        data-cbd=".02% *"
        data-terpenes="3.35% *"
        data-description="The tight buds of Mendoz Stomper are light green with pastel accents, punctuated with ochre pistils. The outside of the flower is coated with a dense covering of trichomes which makes for some sticky handling. Each nug is packed with an over-powering sweet to floral aroma that leans towards its Mendo lineage. Expect to encounter a robust and zesty nose of musk and gassy/chemical-like fuel, with a sharp sweet and sour note that points to an intermingling of berry hints and citrus rind. The taste to smell translation is spot on with this one and the effects are quick to take hold."
        data-breeder="Sunken Treasure Seeds"
        data-genetics="Mendo Breath x Oz Kush x Mac Stomper"
        data-aroma="Sweet, floral, musk, gas"
        data-flavour="Sweet-sour, berry, citrus, fuel"
        data-effects="Relaxing, calming, creative, happy, euphoric"
      >
        View Details
      </button>
    </div>

  </div>
</div>

  <div class="col-lg-4 col-md-6 product-item preroll">
  <div class="product-card">

    <img src="{{ asset('assets/img/Products/pre-roll-2.webp') }}" alt="Mendoz Stomper">

    <div class="product-body">
      <h3>Banana Breeze Infused</h3>
      <p>Hand-trimmed cannabis grown in certified organic environments.</p>

      <button 
        class="btn-buy"
        onclick="openProductModal(this)"
        data-name="MENDOZ STOMPER"
        data-type="INDICA DOMINANT"
        data-image="{{ asset('assets/img/Products/flower2.jpg') }}"
        data-thc="26-29% *"
        data-cbd=".02% *"
        data-terpenes="3.35% *"
        data-description="The tight buds of Mendoz Stomper are light green with pastel accents, punctuated with ochre pistils. The outside of the flower is coated with a dense covering of trichomes which makes for some sticky handling. Each nug is packed with an over-powering sweet to floral aroma that leans towards its Mendo lineage. Expect to encounter a robust and zesty nose of musk and gassy/chemical-like fuel, with a sharp sweet and sour note that points to an intermingling of berry hints and citrus rind. The taste to smell translation is spot on with this one and the effects are quick to take hold."
        data-breeder="Sunken Treasure Seeds"
        data-genetics="Mendo Breath x Oz Kush x Mac Stomper"
        data-aroma="Sweet, floral, musk, gas"
        data-flavour="Sweet-sour, berry, citrus, fuel"
        data-effects="Relaxing, calming, creative, happy, euphoric"
      >
        View Details
      </button>
    </div>

  </div>
</div>

  <div class="col-lg-4 col-md-6 product-item oil">
  <div class="product-card">

    <img src="{{ asset('assets/img/Products/oli1.webp') }}" alt="Mendoz Stomper">

    <div class="product-body">
      <h3>Banana Breeze Infused</h3>
      <p>Hand-trimmed cannabis grown in certified organic environments.</p>

      <button 
        class="btn-buy"
        onclick="openProductModal(this)"
        data-name="MENDOZ STOMPER"
        data-type="INDICA DOMINANT"
        data-image="{{ asset('assets/img/Products/flower2.jpg') }}"
        data-thc="26-29% *"
        data-cbd=".02% *"
        data-terpenes="3.35% *"
        data-description="The tight buds of Mendoz Stomper are light green with pastel accents, punctuated with ochre pistils. The outside of the flower is coated with a dense covering of trichomes which makes for some sticky handling. Each nug is packed with an over-powering sweet to floral aroma that leans towards its Mendo lineage. Expect to encounter a robust and zesty nose of musk and gassy/chemical-like fuel, with a sharp sweet and sour note that points to an intermingling of berry hints and citrus rind. The taste to smell translation is spot on with this one and the effects are quick to take hold."
        data-breeder="Sunken Treasure Seeds"
        data-genetics="Mendo Breath x Oz Kush x Mac Stomper"
        data-aroma="Sweet, floral, musk, gas"
        data-flavour="Sweet-sour, berry, citrus, fuel"
        data-effects="Relaxing, calming, creative, happy, euphoric"
      >
        View Details
      </button>
    </div>

  </div>
</div>
      <!-- Oils -->
      <div class="col-lg-4 col-md-6 product-item oil">
        <div class="product-card">
          <img src="assets/img/products/oil.jpg" alt="Cannabis Oils">
          <div class="product-body">
            <h3>Oils & Tinctures</h3>
            <p>Clean, lab-tested oils for wellness and formulations.</p>
            <a href="#contact" class="btn-buy">Buy / Enquire</a>
          </div>
        </div>
      </div>

      <!-- Extracts -->
      <div class="col-lg-4 col-md-6 product-item extract">
        <div class="product-card">
          <img src="assets/img/products/extract.jpg" alt="Cannabis Extracts">
          <div class="product-body">
            <h3>Concentrates & Extracts</h3>
            <p>High-potency extracts with preserved terpene profiles.</p>
            <a href="#contact" class="btn-buy">Buy / Enquire</a>
          </div>
        </div>
      </div>

        <!-- Extracts -->
      <div class="col-lg-4 col-md-6 product-item extract">
        <div class="product-card">
          <img src="assets/img/products/extract.jpg" alt="Cannabis Extracts">
          <div class="product-body">
            <h3>Concentrates & Extracts</h3>
            <p>High-potency extracts with preserved terpene profiles.</p>
            <a href="#contact" class="btn-buy">Buy / Enquire</a>
          </div>
        </div>
      </div>

        <!-- Extracts -->
      <div class="col-lg-4 col-md-6 product-item extract">
        <div class="product-card">
          <img src="assets/img/products/extract.jpg" alt="Cannabis Extracts">
          <div class="product-body">
            <h3>Concentrates & Extracts</h3>
            <p>High-potency extracts with preserved terpene profiles.</p>
            <a href="#contact" class="btn-buy">Buy / Enquire</a>
          </div>
        </div>
      </div>

      <!-- Edibles -->
      <div class="col-lg-4 col-md-6 product-item edible">
        <div class="product-card">
          <img src="assets/img/products/edible.jpg" alt="Cannabis Edibles">
          <div class="product-body">
            <h3>Edibles</h3>
            <p>Precision-dosed edibles with consistent quality.</p>
            <a href="#contact" class="btn-buy">Buy / Enquire</a>
          </div>
        </div>
      </div>

       <div class="col-lg-4 col-md-6 product-item edible">
        <div class="product-card">
          <img src="assets/img/products/edible.jpg" alt="Cannabis Edibles">
          <div class="product-body">
            <h3>Edibles</h3>
            <p>Precision-dosed edibles with consistent quality.</p>
            <a href="#contact" class="btn-buy">Buy / Enquire</a>
          </div>
        </div>
      </div>

       <!-- Edibles -->
      <div class="col-lg-4 col-md-6 product-item edible">
        <div class="product-card">
          <img src="assets/img/products/edible.jpg" alt="Cannabis Edibles">
          <div class="product-body">
            <h3>Edibles</h3>
            <p>Precision-dosed edibles with consistent quality.</p>
            <a href="#contact" class="btn-buy">Buy / Enquire</a>
          </div>
        </div>
      </div>

       <div class="col-lg-4 col-md-6 product-item edible">
        <div class="product-card">
          <img src="assets/img/products/edible.jpg" alt="Cannabis Edibles">
          <div class="product-body">
            <h3>Edibles</h3>
            <p>Precision-dosed edibles with consistent quality.</p>
            <a href="#contact" class="btn-buy">Buy / Enquire</a>
          </div>
        </div>
      </div>

    </div>

    

    <div class="text-center mt-5">
    <button id="loadMoreBtn" class="btn-view-more">
        View More Products
    </button>
    </div>

  </div>
</section>

<script>
const filterBtns = document.querySelectorAll(".filter-btn");
const products = document.querySelectorAll(".product-item");

filterBtns.forEach(btn => {
  btn.addEventListener("click", () => {
    filterBtns.forEach(b => b.classList.remove("active"));
    btn.classList.add("active");

    const filter = btn.dataset.filter;

    products.forEach(item => {
      item.style.display =
        filter === "all" || item.classList.contains(filter)
          ? "block"
          : "none";
    });
  });
});
</script>

<script>
document.addEventListener("DOMContentLoaded", () => {

  const products = Array.from(document.querySelectorAll(".product-item"));
  const loadMoreBtn = document.getElementById("loadMoreBtn");

  const ITEMS_PER_LOAD = 6;
  let visibleCount = ITEMS_PER_LOAD;

  // Hide all products after first 6
  function updateVisibility() {
    products.forEach((item, index) => {
      item.style.display = index < visibleCount ? "block" : "none";
    });

    // Hide button if all products are shown
    if (visibleCount >= products.length) {
      loadMoreBtn.style.display = "none";
    } else {
      loadMoreBtn.style.display = "inline-block";
    }
  }

  // Initial load
  updateVisibility();

  // Load more click
  loadMoreBtn.addEventListener("click", () => {
    visibleCount += ITEMS_PER_LOAD;
    updateVisibility();
  });

  /* =============================
     FILTER + LOAD MORE SUPPORT
  ============================== */
  const filterBtns = document.querySelectorAll(".filter-btn");

  filterBtns.forEach(btn => {
    btn.addEventListener("click", () => {
      filterBtns.forEach(b => b.classList.remove("active"));
      btn.classList.add("active");

      const filter = btn.dataset.filter;

      // Reset counter
      visibleCount = ITEMS_PER_LOAD;

      let filteredProducts = [];

      products.forEach(product => {
        if (filter === "all" || product.classList.contains(filter)) {
          product.style.display = "block";
          filteredProducts.push(product);
        } else {
          product.style.display = "none";
        }
      });

      // Apply load logic to filtered products
      filteredProducts.forEach((item, index) => {
        item.style.display = index < ITEMS_PER_LOAD ? "block" : "none";
      });

      // Toggle button visibility
      loadMoreBtn.style.display =
        filteredProducts.length > ITEMS_PER_LOAD
          ? "inline-block"
          : "none";

      // Update product list reference
      products.length = 0;
      filteredProducts.forEach(p => products.push(p));
    });
  });

});
</script>
<script>
document.getElementById("productSearch").addEventListener("keyup", function () {
  const query = this.value.toLowerCase();
  const products = document.querySelectorAll(".product-item");

  products.forEach(product => {
    const text = product.innerText.toLowerCase();
    product.style.display = text.includes(query) ? "block" : "none";
  });
});
</script>

<script>
function openProductModal(button) {
  document.getElementById('modalName').textContent = button.dataset.name;
  document.getElementById('modalType').textContent = button.dataset.type;
  document.getElementById('modalImage').src = button.dataset.image;

  document.getElementById('modalTHC').textContent = button.dataset.thc;
  document.getElementById('modalCBD').textContent = button.dataset.cbd;
  document.getElementById('modalTerpenes').textContent = button.dataset.terpenes;

  document.getElementById('modalDescription').textContent = button.dataset.description;

  document.getElementById('modalBreeder').textContent = button.dataset.breeder;
  document.getElementById('modalGenetics').textContent = button.dataset.genetics;
  document.getElementById('modalAroma').textContent = button.dataset.aroma;
  document.getElementById('modalFlavour').textContent = button.dataset.flavour;
  document.getElementById('modalEffects').textContent = button.dataset.effects;

  document.getElementById('productModal').classList.add('active');
  document.body.style.overflow = 'hidden';
}

function closeProductModal() {
  document.getElementById('productModal').classList.remove('active');
  document.body.style.overflow = '';
}
</script>



@endsection

<div id="productModal" class="product-modal">
  <div class="modal-overlay" onclick="closeProductModal()"></div>

  <div class="modal-content">
    <button class="modal-close" onclick="closeProductModal()">×</button>

    <div class="modal-grid">

      <div class="modal-image">
        <img id="modalImage" src="" alt="">
      </div>

      <div class="modal-details">
        <h2 id="modalName"></h2>
        <span class="strain-type" id="modalType"></span>

        <div class="stats">
          <div><strong>THC:</strong> <span id="modalTHC"></span></div>
          <div><strong>CBD:</strong> <span id="modalCBD"></span></div>
          <div><strong>Terpenes:</strong> <span id="modalTerpenes"></span></div>
        </div>

        <p class="description" id="modalDescription"></p>

        <ul class="details-list">
          <li><strong>Breeder:</strong> <span id="modalBreeder"></span></li>
          <li><strong>Genetics:</strong> <span id="modalGenetics"></span></li>
          <li><strong>Aroma:</strong> <span id="modalAroma"></span></li>
          <li><strong>Flavour:</strong> <span id="modalFlavour"></span></li>
          <li><strong>Effects:</strong> <span id="modalEffects"></span></li>
        </ul>

        <p class="note">
          * THC, CBD and terpene values are averages based on lab tests.
        </p>

        <a href="#contact" class="btn-enquire">Enquire Now</a>
      </div>

    </div>
  </div>
</div>

