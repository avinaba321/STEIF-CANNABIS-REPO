
@extends('layout.app')


@section('title','Home - Organic Farmiz')

@section('content')
<div id="age-modal" class="age-overlay">
  <div class="age-card">
    <div class="age-icon">
      <img src="{{ asset('assets/img/organic-farmiz-logo.png') }}" alt="Cannabis Icon">
    </div>

    <h2>Are you over the age of 21?</h2>

    <p>
      You must be over the age of 21 in New Jersey to access Organic Farms,
      please confirm your age below.
    </p>

    <div class="age-buttons">
      <button class="btn-yes" onclick="confirmAge()">I'm Over 21</button>
      <button class="btn-no" onclick="denyAge()">Under 21</button>
    </div>
  </div>
</div>
<section id="hero" class="hero section dark-background">

  <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

    <!-- Slide 1 -->
    <div class="carousel-item active">
      <img src="assets/img/can-bg-1.png" alt="">
      <div class="carousel-container">
        <h2>ORGANIC FARMZ</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <div class="hero-btn-group mt-3">
        <a href="#products" class="btn hero-btn hero-btn-primary">
          View Products
        </a>
        <a href="#contact" class="btn hero-btn hero-btn-outline">
          Contact Us
        </a>
      </div>



      </div>
    </div>

    <!-- Slide 2 -->
    <div class="carousel-item">
      <img src="{{ asset('assets/img/can-bg-2.png') }}" alt="">
      <div class="carousel-container">
        <h2>Organic vegetables is good for health</h2>
        <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.</p>

        <div class="hero-btn-group mt-3">
        <a href="#products" class="btn hero-btn hero-btn-primary">
          View Products
        </a>
        <a href="#contact" class="btn hero-btn hero-btn-outline">
          Contact Us
        </a>
      </div>
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="carousel-item">
      <img src="{{ asset('assets/img/can-bg-3.png') }}" alt="">
      <div class="carousel-container">
        <h2>Providing Fresh Produce Every Single Day</h2>
        <p>Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>

         <div class="hero-btn-group mt-3">
        <a href="#products" class="btn hero-btn hero-btn-primary">
          View Products
        </a>
        <a href="#contact" class="btn hero-btn hero-btn-outline">
          Contact Us
        </a>
      </div>
      </div>
    </div>

     <!-- Slide 4 -->
    <div class="carousel-item">
      <img src="{{ asset('assets/img/can-bg-4.jpg') }}" alt="">
      <div class="carousel-container">
        <h2>Providing Fresh Produce Every Single Day</h2>
        <p>Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>

        <div class="hero-btn-group mt-3">
        <a href="#products" class="btn hero-btn hero-btn-primary">
          View Products
        </a>
        <a href="#contact" class="btn hero-btn hero-btn-outline">
          Contact Us
        </a>
      </div>
      </div>
    </div>

  </div>

</section>
<!-- /Hero Section -->

<!-- Our Products Section -->
<section id="products" class="services-2 section">

 <div class="row mb-5 justify-content-center text-center">
  <div class="col-lg-8">
    <span class="section-eyebrow">OUR PRODUCTS</span>
    <h2 class="products-heading">
      Premium Organic Cannabis —
      <br>Grown, Processed & Ready for Your Brand
    </h2>
  </div>
</div>


    <!-- Products Carousel -->
    <div class="services-carousel-wrap">
      <div class="swiper init-swiper">

        <!-- Swiper Config -->
        <script type="application/json" class="swiper-config">
          {
            "loop": true,
            "speed": 600,
            "autoplay": { "delay": 5000 },
            "slidesPerView": "auto",
            "pagination": {
              "el": ".swiper-pagination",
              "type": "bullets",
              "clickable": true
            },
            "navigation": {
              "nextEl": ".js-custom-next",
              "prevEl": ".js-custom-prev"
            },
            "breakpoints": {
              "320": { "slidesPerView": 1, "spaceBetween": 30 },
              "768": { "slidesPerView": 2, "spaceBetween": 30 },
              "1200": { "slidesPerView": 3, "spaceBetween": 40 }
            }
          }
        </script>

        <!-- Navigation -->
        <button class="navigation-prev js-custom-prev">
          <i class="bi bi-arrow-left-short"></i>
        </button>
        <button class="navigation-next js-custom-next">
          <i class="bi bi-arrow-right-short"></i>
        </button>

        <div class="swiper-wrapper">

          <!-- Product 1 -->
          <div class="swiper-slide">
            <div class="service-item">
              <div class="service-item-contents">
                <span class="service-item-category">Organic Flower</span>
                <h3 class="service-item-title">Premium Cannabis Buds</h3>
              </div>
              <img src="{{ asset('assets/img/product1.webp') }}" alt="Organic Cannabis Flower">
            </div>
          </div>

          <!-- Product 2 -->
          <div class="swiper-slide">
            <div class="service-item">
              <div class="service-item-contents">
                <span class="service-item-category">MENDOZ STOMPER</span>
                <h3 class="service-item-title">INDICA DOMINANT</h3>
              </div>
              <img src="{{ asset('assets/img/product2.webp') }}" alt="Cannabis Pre Rolls">
            </div>
          </div>

          <!-- Product 3 -->
          <div class="swiper-slide">
            <div class="service-item">
              <div class="service-item-contents">
                <span class="service-item-category">MYSTIC MAGIC</span>
                <h3 class="service-item-title">CBD dominant HYBRID (2:1)</h3>
              </div>
              <img src="{{ asset('assets/img/product3.jpg') }}" alt="Cannabis Edibles">
            </div>
          </div>

          <!-- Product 4 -->
          <div class="swiper-slide">
            <div class="service-item">
              <div class="service-item-contents">
                <span class="service-item-category">91 Octane</span>
                <h3 class="service-item-title">indica dominant</h3>
              </div>
              <img src="{{ asset('assets/img/product4.webp') }}" alt="Cannabis Oils">
            </div>
          </div>

          <!-- Product 5 -->
          <div class="swiper-slide">
            <div class="service-item">
              <div class="service-item-contents">
                <span class="service-item-category">Vape</span>
                <h3 class="service-item-title">Vape Cartridges</h3>
              </div>
              <img src="{{ asset('assets/img/product5.webp') }}" alt="Cannabis Vape">
            </div>
          </div>

          <!-- Product 6 -->
          <div class="swiper-slide">
            <div class="service-item">
              <div class="service-item-contents">
                <span class="service-item-category">FIESTAZ</span>
                <h3 class="service-item-title">indica dominant</h3>
              </div>
              <img src="{{ asset('assets/img/product6.webp') }}" alt="White Label Cannabis">
            </div>
          </div>

        </div>

        <div class="swiper-pagination"></div>
      </div>
    </div>

  </div>
</section>
<!-- /Our Products Section -->


   
    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
    <h2>WHITE LABEL</h2>
    <p>Premium Organic Cannabis — Grown, Branded, and Delivered for You</p>
  </div><!-- End Section Title -->
      <div class="content">
        <div class="container">
          <div class="row g-0">
            <div class="col-lg-3 col-md-6">
              <div class="service-item">
                <span class="number">01</span>
                <div class="service-item-icon">
                  <i class="fa-solid fa-seedling"></i>
                </div>
                <div class="service-item-content">
                  <h3 class="service-heading">Organic Cultivation</h3>
                  <p>
                    Certified organic cannabis grown in controlled environments using sustainable farming practices.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="service-item">
                <span class="number">02</span>
                <div class="service-item-icon">
                   <i class="fa-solid fa-scissors"></i>
                </div>
                <div class="service-item-content">
                 <h3 class="service-heading">Precision Harvesting</h3>
                  <p>
                    Hand-trimmed and carefully harvested to preserve cannabinoids and terpene integrity.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="service-item">
                <span class="number">03</span>
                <div class="service-item-icon">
                 <i class="fa-solid fa-dna"></i>
                </div>
                <div class="service-item-content">
                 <h3 class="service-heading">Premium Genetics</h3>
                 <p>
                     Curated cannabis strains selected for potency, terpene profiles, and consistent quality.
                  </p>

                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="service-item">
                <span class="number">04</span>
                <div class="service-item-icon">
                   <i class="fa-solid fa-temperature-half"></i>
                </div>
                <div class="service-item-content">
                 <h3 class="service-heading">Drying & Curing</h3>
                  <p>
                    Slow, controlled curing process to ensure smooth smoke, rich flavor, and long shelf life.
                  </p>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="service-item">
                <span class="number">05</span>
                <div class="service-item-icon">
                  <i class="fa-solid fa-joint"></i>
                </div>
                <div class="service-item-content">
                  <h3 class="service-heading">White Label Pre-Rolls</h3>
                  <p>
                    Ready-to-sell pre-rolls produced to your specifications with consistent weight and burn.
                  </p>

                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="service-item">
                <span class="number">06</span>
                <div class="service-item-icon">
                   <i class="fa-solid fa-droplet"></i>
                </div>
                <div class="service-item-content">
                  <h3 class="service-heading">Oils & Extracts</h3>
                  <p>
                    High-quality cannabis oils and concentrates for brands seeking premium derivatives.
                  </p>

                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="service-item">
                <span class="number">07</span>
                <div class="service-item-icon">
                   <i class="fa-solid fa-box-open"></i>
                </div>
                <div class="service-item-content">
                  <h3 class="service-heading">Custom Packaging</h3>
                  <p>
                    Fully branded, compliant packaging solutions tailored to your market and regulations.
                  </p>

                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="service-item">
                <span class="number">08</span>
                <div class="service-item-icon">
                   <i class="fa-solid fa-industry"></i>
                </div>
                <div class="service-item-content">
                 <h3 class="service-heading">Bulk Supply & Distribution</h3>
                  <p>
                    Reliable bulk cannabis supply with scalable quantities and secure logistics support.
                  </p>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Services CTA Row -->
<div class="services-cta-inner">
  <div class="container">
    <div class="row align-items-center text-center text-lg-start">

      <div class="col-lg-8 mb-4 mb-lg-0">
        <h3>
          Ready to Build Your <span>White Label Cannabis</span> Brand?
        </h3>
        <p>
          From premium organic cultivation to compliant packaging — we help
          you launch faster and scale with confidence.
        </p>
      </div>

      <div class="col-lg-4 text-center text-lg-end">
        <a href="#contact" class="btn btn-success cta-btn">
          Get White Label Pricing
          <i class="bi bi-arrow-right ms-2"></i>
        </a>
      </div>

    </div>
  </div>
</div>
<!-- /Services CTA Row -->

    </section><!-- /Services Section -->

    <!-- About 3 Section -->
    {{-- <section id="about-3" class="about-3 section">

      <div class="container">
        <div class="row gy-4 justify-content-between align-items-center">
          <div class="col-lg-6 order-lg-2 position-relative" data-aos="zoom-out">
            <img src="assets/img/img_sq_1.jpg" alt="Image" class="img-fluid">
            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn">
              <span class="play"><i class="bi bi-play-fill"></i></span>
            </a>
          </div>
          <div class="col-lg-5 order-lg-1" data-aos="fade-up" data-aos-delay="100">
            <h2 class="content-title mb-4">Plants Make Life Better</h2>
            <p class="mb-4">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim
              necessitatibus placeat, atque qui voluptatem velit explicabo vitae
              repellendus architecto provident nisi ullam minus asperiores commodi!
              Tenetur, repellat aliquam nihil illo.
            </p>
            <ul class="list-unstyled list-check">
              <li>Lorem ipsum dolor sit amet</li>
              <li>Velit explicabo vitae repellendu</li>
              <li>Repellat aliquam nihil illo</li>
            </ul>

            <p><a href="#" class="btn-cta">Get in touch</a></p>
          </div>
        </div>
      </div>
    </section><!-- /About 3 Section --> --}}


    <!-- Get In Touch Section -->
<section id="get-in-touch" class="about-3 section get-in-touch dark-background">
    <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>GET IN TOUCH</h2>
    <p>Let’s Build Your White Label Cannabis Brand Together</p>
  </div>
  <div class="container">
    <div class="row gy-4 justify-content-between align-items-center">

      <!-- Media / Video -->
      <div class="col-lg-6 order-lg-2 position-relative" data-aos="zoom-out">
        <img src="{{ asset('assets/img/get-in-touch.jpg') }}" alt="White Label Cannabis" class="img-fluid rounded-4 shadow-lg">
      </div>

      <!-- Content -->
      <div class="col-lg-5 order-lg-1" data-aos="fade-up" data-aos-delay="100">
        <span class="section-badge">Get In Touch</span>

        <h2 class="content-title mb-4">
          Ready to Launch Your <span>White Label Cannabis</span> Brand?
        </h2>

        <p class="mb-4">
          Partner with a licensed organic cannabis cultivator.
          From genetics to packaging, we help you launch faster — fully compliant.

        </p>

        <ul class="list-unstyled list-check mb-4">
          <li><i class="fa-solid fa-check"></i> Certified organic cultivation</li>
          <li><i class="fa-solid fa-check"></i> Custom branding & packaging</li>
          <li><i class="fa-solid fa-check"></i> Scalable production & logistics</li>
        </ul>

        <div class="d-flex flex-wrap gap-3 cta-buttons">
        <a href="#contact" class="btn btn-cta-primary">
          Contact Sales
        </a>

        <a href="#pricing" class="btn btn-cta-outline">
          View Pricing
        </a>
      </div>      
        </div>
      </div>

    </div>
  </div>
</section>
<!-- /Get In Touch Section -->



@endsection