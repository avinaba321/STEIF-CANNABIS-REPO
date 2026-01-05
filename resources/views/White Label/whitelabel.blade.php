@extends('layout.app')

@section('title', 'White Label - Organic Farmiz')

@section('content')
<style>
  /* ===============================
   White Label Services
================================ */
.white-label-services {
  background: #98c183;
  padding: 110px 0 0;
  color: #ffffff;
}

.white-label-services .section-title h2 {
  font-size: 42px;
  color: #0b2a17;
  letter-spacing: 2px;
  text-transform: uppercase;
}

.white-label-services .section-title p {
  color: white;
  font-size: 18px;
  max-width: 700px;
  margin: auto;
}

/* ===============================
   Service Cards
================================ */
.wl-card {
  background: #0b2a17;
  border-radius: 18px;
  overflow: hidden;
  height: 100%;
  transition: all 0.35s ease;
  box-shadow: 0 20px 45px rgba(0,0,0,0.35);
}

.wl-card img {
  width: 100%;
  height: 200px;
  object-fit: cover;
}

.wl-content {
  padding: 24px;
}

.wl-content i {
  color: #98c183;
  font-size: 26px;
  margin-bottom: 12px;
  display: inline-block;
}

.wl-content h3 {
  font-size: 20px;
  margin-bottom: 10px;
  color:  #98c183;
}

.wl-content p {
  font-size: 15px;
  color: #cfd8cc;
  line-height: 1.6;
}

/* Hover */
.wl-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 30px 70px rgba(0,0,0,0.55);
}

/* ===============================
   CTA
================================ */
.wl-cta {
  margin-top: 90px;
  padding: 60px 0;
  background: linear-gradient(135deg, #071807, #0b2a17);
}

.wl-cta h3 {
  font-size: 30px;
  margin-bottom: 10px;
  color: white;
}

.wl-cta h3 span {
  color: #98c183;
}

.wl-cta p {
  color: #ffffff;
}

.wl-btn {
  padding: 14px 34px;
  border-radius: 999px;
  font-weight: 600;
  box-shadow: 0 12px 30px rgba(31,143,74,0.45);
}

/* ===============================
   Service Box Animations
================================ */

/* Initial state */
.service-item {
  opacity: 0;
  transform: translateY(40px) scale(0.97);
  transition: 
    opacity 0.7s ease,
    transform 0.7s ease,
    box-shadow 0.4s ease;
}

/* Activated state */
.service-item.animate {
  opacity: 1;
  transform: translateY(0) scale(1);
}

/* Stagger delay (optional) */
.service-item.delay-1 { transition-delay: 0.1s; }
.service-item.delay-2 { transition-delay: 0.2s; }
.service-item.delay-3 { transition-delay: 0.3s; }
.service-item.delay-4 { transition-delay: 0.4s; }
.service-item.delay-5 { transition-delay: 0.5s; }
.service-item.delay-6 { transition-delay: 0.6s; }
.service-item.delay-7 { transition-delay: 0.7s; }
.service-item.delay-8 { transition-delay: 0.8s; }



/* ===============================
   Responsive
================================ */
@media (max-width: 768px) {
  .white-label-services {
    padding-top: 80px;
  }

  .white-label-services .section-title h2 {
    font-size: 34px;
  }

  .wl-card img {
    height: 180px;
  }
}

</style>
<!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/White_Label/white-labl-bg-1.png);">
      <div class="container position-relative">
        <h1>White Label</h1>
        <p>Premium white-label cannabis solutions crafted with certified organic cultivation, full compliance, and scalable production — tailored to help brands grow with confidence.</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li class="current">White Label</li>
          </ol>
        </nav>
      </div>
    </div>
<!-- End Page Title -->

<!-- Our White Label Services -->
<section id="white-label-services" class="white-label-services section">

  <!-- Section Title -->
  <div class="container section-title text-center" data-aos="fade-up">
    <h2>Our White Label Services</h2>
    <p>Premium Organic Cannabis — Grown, Branded, and Delivered for You</p>
  </div>

  <div class="container">
    <div class="row g-4">

      <!-- Service Card -->
      <div class="service-item col-xl-3 col-lg-4 col-md-6 delay-1">
        <div class="wl-card">
          <img src="{{ asset('assets/img/White_Label/whilte_label-img-1.jpg') }}" alt="Organic Cultivation">
          <div class="wl-content">
            <h3>Organic Cultivation</h3>
            <p>Certified organic cannabis grown in controlled environments using sustainable farming practices.</p>
          </div>
        </div>
      </div>

      <div class="service-item col-xl-3 col-lg-4 col-md-6 delay-2">
        <div class="wl-card">
          <img src="{{ asset('assets/img/White_Label/whilte_label-img-2.jpg') }}" alt="Precision Harvesting">
          <div class="wl-content">
            <h3>Precision Harvesting</h3>
            <p>Hand-trimmed and carefully harvested to preserve cannabinoid and terpene integrity.</p>
          </div>
        </div>
      </div>

      <div class="service-item col-xl-3 col-lg-4 col-md-6 delay-3">
        <div class="wl-card">
          <img src="{{ asset('assets/img/White_Label/whilte_label-img-3.jpg') }}" alt="Premium Genetics">
          <div class="wl-content">
            <h3>Premium Genetics</h3>
            <p>Elite cannabis strains selected for potency, terpene profiles, and consistent quality.</p>
          </div>
        </div>
      </div>

      <div class="service-item col-xl-3 col-lg-4 col-md-6 delay-4">
        <div class="wl-card">
          <img src="{{ asset('assets/img/White_Label/whilte_label-img-4.jpg') }}" alt="Drying and Curing">
          <div class="wl-content">
            <h3>Drying & Curing</h3>
            <p>Slow, controlled curing ensures smooth smoke, rich flavor, and long shelf life.</p>
          </div>
        </div>
      </div>

      <div class="service-item col-xl-3 col-lg-4 col-md-6 delay-5">
        <div class="wl-card">
          <img src="{{ asset('assets/img/White_Label/whilte_label-img-5.jpg') }}" alt="White Label Pre-Rolls">
          <div class="wl-content">
            <h3>White Label Pre-Rolls</h3>
            <p>Ready-to-sell pre-rolls made to your specs with consistent weight and burn.</p>
          </div>
        </div>
      </div>

      <div class="service-item col-xl-3 col-lg-4 col-md-6 delay-6">
        <div class="wl-card">
          <img src="{{ asset('assets/img/White_Label/whilte_label-img-6.jpg') }}" alt="Oils and Extracts">
          <div class="wl-content">
            <h3>Oils & Extracts</h3>
            <p>High-quality oils and concentrates for premium derivative product lines.</p>
          </div>
        </div>
      </div>

      <div class="service-item col-xl-3 col-lg-4 col-md-6 delay-7">
        <div class="wl-card">
          <img src="{{ asset('assets/img/White_Label/whilte_label-img-7.jpg') }}" alt="Custom Packaging">
          <div class="wl-content">
            <h3>Custom Packaging</h3>
            <p>Fully branded, compliant packaging tailored to your market regulations.</p>
          </div>
        </div>
      </div>

      <div class="service-item col-xl-3 col-lg-4 col-md-6 delay-8">
        <div class="wl-card">
          <img src="{{ asset('assets/img/White_Label/whilte_label-img-8.jpg') }}" alt="Bulk Supply">
          <div class="wl-content">
            <h3>Bulk Supply & Distribution</h3>
            <p>Scalable bulk supply with secure logistics and reliable delivery.</p>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- CTA -->
  <div class="wl-cta">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-8 text-center text-lg-start">
          <h3>Ready to Build Your <span>White Label Cannabis</span> Brand?</h3>
          <p>From cultivation to compliant packaging — launch faster and scale with confidence.</p>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
          <a href="#contact" class="btn btn-success wl-btn">
            Get White Label Pricing
            <i class="bi bi-arrow-right ms-2"></i>
          </a>
        </div>
      </div>
    </div>
  </div>

</section>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const services = document.querySelectorAll(".service-item");
    services.forEach((item, index) => {
      setTimeout(() => {
        item.classList.add("animate");
      }, index * 120);
    });
  });
</script>


@endsection