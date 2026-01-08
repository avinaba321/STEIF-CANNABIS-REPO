@extends('layout.app')

@section('title', 'Products - Organic Farmiz')

@section('content')
<style>
/* ===============================
   PRODUCTS GRID SECTION
================================ */
.products-grid {
  background: #98c183;
  padding: 110px 0;
}

/* Header */
.products-header h2 {
  font-size: 44px;
  font-weight: 700;
  color: #0b2a17;
  text-align: center;
}

.products-header p {
  color: #0b2a17;
  max-width: 620px;
  margin: 12px auto 42px;
  text-align: center;
  font-size: 16px;
  line-height: 1.6;
}

/* ===============================
   FILTER BUTTONS
================================ */
.product-filters {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 14px;
  margin-bottom: 50px;
}

.filter-btn {
  padding: 11px 26px;
  border-radius: 999px;
  border: 1.5px solid #0b2a17;
  background: transparent;
  font-weight: 600;
  font-size: 14px;
  color: #0b2a17;
  cursor: pointer;
  transition: all 0.3s ease;
}

.filter-btn.active,
.filter-btn:hover {
  background: #0b2a17;
  color: #ffffff;
  transform: translateY(-2px);
}

/* ===============================
   PRODUCT CARD
================================ */
.product-card {
  background: #061407;
  border-radius: 22px;
  overflow: hidden;
  height: 100%;
  display: flex;
  flex-direction: column;
  box-shadow: 0 25px 60px rgba(0,0,0,0.35);
  transition: transform 0.4s ease, box-shadow 0.4s ease;
}

/* Hover */
.product-card:hover {
  transform: translateY(-14px);
  box-shadow: 0 40px 90px rgba(6,20,7,0.7);
}

/* ===============================
   PRODUCT IMAGE
================================ */
.product-card img {
  width: 100%;
  height: 360px;
  object-fit: cover;
}

/* ===============================
   PRODUCT BODY
================================ */
.product-body {
  padding: 26px;
  text-align: center;
  display: flex;
  flex-direction: column;
  flex-grow: 1;
}

.product-body h3 {
  color: #ffffff;
  font-size: 20px;
  font-weight: 700;
  margin-bottom: 10px;
}

.product-body p {
  color: #cfe3d2;
  font-size: 14px;
  line-height: 1.6;
  margin-bottom: auto;
}

/* ===============================
   BUY BUTTON
================================ */
.btn-buy {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  padding: 13px 30px;
  margin-top: 22px;
  background: linear-gradient(135deg, #1f8f4a, #14532d);
  color: #ffffff;
  border-radius: 999px;
  font-weight: 700;
  font-size: 14px;
  border: none;
  cursor: pointer;
  transition: all 0.3s ease;
}

.btn-buy:hover {
  transform: translateY(-3px);
  background: linear-gradient(135deg, #27ae60, #1f8f4a);
  box-shadow: 0 14px 34px rgba(31,143,74,0.55);
}

/* ===============================
   VIEW MORE BUTTON
================================ */
.btn-view-more {
  display: inline-block;
  padding: 15px 44px;
  background: #061407;
  color: #ffffff;
  border-radius: 999px;
  font-weight: 700;
  font-size: 15px;
  text-decoration: none;
  transition: all 0.3s ease;
}

.btn-view-more:hover {
  background: #14532d;
  transform: translateY(-3px);
}

/* ===============================
   RESPONSIVE
================================ */

/* Tablet */
@media (max-width: 991px) {
  .products-header h2 {
    font-size: 36px;
  }

  .product-card img {
    height: auto;          
    max-height: 320px;    
    object-fit: contain;  
    background: #061407;  
    padding: 14px;      
  }
}

/* Mobile */
@media (max-width: 575px) {
  
  .product-card {
    padding-top: 10px;
  }

  .product-body {
    padding-top: 18px;
  }
  
  .products-grid {
    padding: 80px 0;
  }

  .products-header h2 {
    font-size: 30px;
  }

  .products-header p {
    font-size: 15px;
  }

  /* .product-card img {
    height: 240px;
  } */

  .product-card img {
    height: auto;          /* allow natural height */
    max-height: 260px;     /* control size */
    object-fit: contain;   /* show full image */
    background: #061407;   /* clean background */
    padding: 12px;         /* breathing room */
  }

  .product-body {
    padding: 20px;
  }

  .product-body h3 {
    font-size: 18px;
  }

  .btn-buy {
    width: 100%;
  }

  .btn-view-more {
    width: 100%;
    padding: 14px 0;
  }
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


/* ===============================
   MODAL WRAPPER
================================ */
.product-modal {
  position: fixed;
  inset: 0;
  display: none;
  z-index: 9999;
}

.product-modal.active {
  display: flex;
  align-items: center;
  justify-content: center;
}

/* Overlay */
.modal-overlay {
  position: absolute;
  inset: 0;
  background: rgba(6, 20, 7, 0.85);
}





/* ===============================
   MODAL CONTENT
================================ */
.modal-content {
  position: relative;
  width: calc(100% - 40px);
  max-width: 1100px;
  max-height: 90vh;
  overflow-y: auto;
  background: #061407;
  border-radius: 20px;
  padding: 40px;
  color: #fff;
  animation: scaleIn 0.35s ease;
  z-index: 2;
    padding: 36px 36px 32px;
}

/* Scrollbar (optional premium touch) */
.modal-content::-webkit-scrollbar {
  width: 6px;
}
.modal-content::-webkit-scrollbar-thumb {
  background: rgba(152,193,131,0.4);
  border-radius: 10px;
}

/* Animation */
@keyframes scaleIn {
  from { transform: scale(0.95); opacity: 0; }
  to { transform: scale(1); opacity: 1; }
}

.modal-close {
  position: absolute;
  top: 18px;
  right: 22px;
  width: 42px;
  height: 42px;
  background: #061407;
  border: none;
  font-size: 26px;
  color: #98c183;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: 0.3s;
  z-index: 10;
}


/* ===============================
   GRID LAYOUT
================================ */
.modal-grid {
  display: grid;
  grid-template-columns: 0.95fr 1.3fr;
  gap: 48px;
  align-items: start;
}

.modal-image {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: flex-start;
}

.modal-image img {
  width: 100%;
  height: auto;
  max-height: 320px;     /* ⬅ increased */
  object-fit: contain;
  background: #061407;
  padding: 14px;
  border-radius: 18px;
}


/* ===============================
   CONTENT
================================ */
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

/* Stats */
.stats {
  display: flex;
  flex-wrap: wrap;
  gap: 12px;
  margin-bottom: 20px;
}

.stats div {
  background: rgba(152,193,131,0.12);
  padding: 8px 14px;
  border-radius: 999px;
  font-size: 14px;
}

/* Description */
.description {
  line-height: 1.7;
  margin-bottom: 18px;
  color: #d7e7dc;
}

/* Details */
.details-list {
  padding-left: 0;
  list-style: none;
  margin-bottom: 18px;
}

.details-list li {
  margin-bottom: 8px;
  font-size: 15px;
  color: #98c183;
}

/* Note */
.note {
  font-size: 13px;
  opacity: 0.7;
  margin-bottom: 20px;
}

/* CTA */
.btn-enquire {
  display: inline-block;
  background: linear-gradient(135deg, #1f8f4a, #14532d);
  padding: 14px 36px;
  border-radius: 999px;
  color: #fff;
  font-weight: 700;
  text-decoration: none;
  transition: 0.3s;
}

.btn-enquire:hover {
  transform: translateY(-2px);
  background: linear-gradient(135deg, #27ae60, #1f8f4a);
}

/* ===============================
   TABLET
================================ */
@media (max-width: 991px) {
  .modal-content {
    padding: 32px;
  }

  .modal-details h2 {
    font-size: 28px;
  }
}

/* ===============================
   MOBILE
================================ */
@media (max-width: 768px) {
  .modal-grid {
    grid-template-columns: 1fr;
    gap: 28px;
  }

 .modal-image {
    position: relative;
    top: 0;
  }

  .modal-image img {
   height: auto;          /* allow natural height */
    max-height: 260px;     /* control size */
    object-fit: contain;   /* show full image */
    background: #061407;   /* clean background */
    padding: 12px;         /* breathing room */
  }

  .modal-close {
    top: 12px;
    right: 12px;
  }

  .modal-details h2 {
    font-size: 24px;
  }

  .btn-enquire {
    width: 100%;
    text-align: center;
  }
}

@media (max-width: 820px) {
  .modal-grid {
    grid-template-columns: 1fr;
    gap: 28px;
  }

  .modal-image img {
    max-height: 300px;
  }

  .modal-details h2 {
    font-size: 26px;
  }
}

@media (max-width: 480px) {
  .modal-content {
    padding: 24px;
  }

  .stats div {
    font-size: 13px;
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

    <img src="{{ asset('assets/img/Products/flower1.webp') }}" alt="Mendoz Stomper">

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

    <img src="{{ asset('assets/img/Products/flower2.webp') }}" alt="Mendoz Stomper">

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
     
<div class="col-lg-4 col-md-6 product-item oil">
  <div class="product-card">

    <img src="{{ asset('assets/img/Products/oil2.webp') }}" alt="Mendoz Stomper">

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

<div class="col-lg-4 col-md-6 product-item extract">
  <div class="product-card">

    <img src="{{ asset('assets/img/Products/extracts-1.webp') }}" alt="Mendoz Stomper">

    <div class="product-body">
      <h3>Cuban Linx Shatter</h3>
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

  <div class="col-lg-4 col-md-6 product-item extract">
  <div class="product-card">

    <img src="{{ asset('assets/img/Products/extracts-2.webp') }}" alt="Mendoz Stomper">

    <div class="product-body">
      <h3>Cuban Linx Shatter</h3>
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

 <div class="col-lg-4 col-md-6 product-item edible">
  <div class="product-card">

    <img src="{{ asset('assets/img/Products/edibles-1.webp')}}" alt="Mendoz Stomper">

    <div class="product-body">
      <h3>Fully Blasted Peach Passionfruit</h3>
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

 <div class="col-lg-4 col-md-6 product-item edible">
  <div class="product-card">

    <img src="{{ asset('assets/img/Products/edibles-2.webp')}}" alt="Mendoz Stomper">

    <div class="product-body">
      <h3>Fully Blasted Peach Passionfruit</h3>
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


</div>

    

    <div class="text-center mt-5">
    <button id="loadMoreBtn" class="btn-view-more">
        View More Products
         <i class="bi bi-chevron-down ms-2"></i>
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

