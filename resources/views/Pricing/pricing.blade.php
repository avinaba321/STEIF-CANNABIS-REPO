@extends('layout.app')

@section('title', 'Pricing - Organic Farmiz')

@section('content')
<style>
   /* ===============================
   Pricing Section (Organic Theme)
================================ */
.pricing-section {
  background: #98c183; /* light green */
  padding: 70px 0;
  color: #061407;
}

/* Header */
.pricing-header {
  margin-bottom: 70px;
}

.pricing-title {
  font-size: 46px;
  font-weight: 700;
  color: #061407;
  margin-bottom: 10px;
}

.pricing-subtitle {
  font-size: 17px;
  color: #0b2a17;
}

/* ===============================
   Pricing Card
================================ */
.pricing-card {
  background: linear-gradient(180deg, #061407, #041004);
  border-radius: 22px;
  padding: 42px 36px;
  height: 100%;
  position: relative;
  overflow: hidden;
  border: 1px solid rgba(152, 193, 131, 0.25);
  box-shadow: 0 20px 50px rgba(0, 0, 0, 0.35);

  transition:
    transform 0.45s cubic-bezier(0.22, 1, 0.36, 1),
    box-shadow 0.45s ease;
}

/* Subtle glow line */
.pricing-card::before {
  content: "";
  position: absolute;
  inset: 0;
  background: linear-gradient(
    120deg,
    transparent,
    rgba(152, 193, 131, 0.18),
    transparent
  );
  opacity: 0;
  transition: opacity 0.45s ease;
  pointer-events: none;
}

.pricing-card::after {
  content: "";
  position: absolute;
  top: 0;
  left: 50%;
  width: 0;
  height: 3px;
  background: linear-gradient(90deg, #98c183, #1f8f4a);
  transition: all 0.45s ease;
  transform: translateX(-50%);
}


/* Hover effect */
.pricing-card:hover {
  transform: translateY(-18px) scale(1.03);
  box-shadow:
    0 40px 90px rgba(6, 20, 7, 0.75),
    0 0 0 2px rgba(152, 193, 131, 0.35);
}

.pricing-card:hover::before {
  opacity: 1;
}

.pricing-card:hover::after {
  width: 70%;
}

.pricing-card h3,
.pricing-card ul,
.pricing-card .btn-pricing {
  transition: transform 0.4s ease;
}

.pricing-card:hover h3 {
  transform: translateY(-4px);
}

.pricing-card:hover ul {
  transform: translateY(-2px);
}

.pricing-card:hover .btn-pricing {
  transform: translateY(-6px);
}


.pricing-card.featured {
  transform: translateY(-18px) scale(1.03);
  box-shadow:
    0 40px 90px rgba(6, 20, 7, 0.75),
    0 0 0 2px rgba(152, 193, 131, 0.45);
}

.pricing-price
{
    color: #779175;
    font-family: var(--heading-font);
}


/* ===============================
   Badge
================================ */
.pricing-badge {
  display: inline-block;
  margin-bottom: 16px;
  padding: 6px 14px;
  font-size: 13px;
  font-weight: 600;
  border-radius: 999px;
  background: rgba(152, 193, 131, 0.2);
  color: #98c183;
}

/* CTA Button */
.btn-pricing {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 100%;
  background: linear-gradient(135deg, #1f8f4a, #14532d);
  color: #ffffff;
  padding: 14px 0;
  border-radius: 999px;
  font-weight: 700;
  font-size: 15px;
  text-decoration: none;
  letter-spacing: 0.4px;
  box-shadow: 0 10px 25px rgba(31, 143, 74, 0.45);
  transition: all 0.35s ease;
}

/* Button Hover */
.btn-pricing:hover {
  background: linear-gradient(135deg, #27ae60, #1f8f4a);
  transform: translateY(-3px);
  box-shadow: 0 18px 45px rgba(39, 174, 96, 0.6);
  color: #ffffff;
}

.btn-pricing:active {
  transform: scale(0.97);
}


/* ===============================
   Features
================================ */
.pricing-features {
  list-style: none;
  padding: 0;
  margin-bottom: 34px;
}

.pricing-features li {
  display: flex;
  align-items: center;
  gap: 10px;
  margin-bottom: 14px;
  font-size: 15px;
  color: #d7e7dc;
}

.pricing-features i {
  color: #98c183;
  font-size: 16px;
}

/* ===============================
   Button
================================ */
.btn-pricing {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 100%;
  background: linear-gradient(135deg, #1f8f4a, #14532d);
  color: #ffffff;
  padding: 15px 0;
  border-radius: 999px;
  font-weight: 700;
  font-size: 15px;
  text-decoration: none;
  letter-spacing: 0.4px;
  border: none;
  cursor: pointer;
  box-shadow: 0 12px 28px rgba(31, 143, 74, 0.45);
  transition: all 0.35s ease;
    position: relative;
  z-index: 3;
}

/* Hover */
.btn-pricing:hover {
  background: linear-gradient(135deg, #27ae60, #1f8f4a);
  transform: translateY(-3px);
  box-shadow: 0 20px 50px rgba(39, 174, 96, 0.65);
  color: #ffffff;
}

/* Click */
.btn-pricing:active {
  transform: translateY(0);
  box-shadow: 0 10px 20px rgba(31, 143, 74, 0.4);
}

.pricing-desc {
  font-size: 15px;
  line-height: 1.6;
  color: #cfe4d6;
  margin-bottom: 22px;
}

/* ===============================
   Animation
================================ */
.fade-up {
  opacity: 0;
  transform: translateY(50px);
  animation: fadeUp 0.9s ease forwards;
}

.fade-up:nth-child(2) {
  animation-delay: 0.2s;
}

.fade-up:nth-child(3) {
  animation-delay: 0.4s;
}

@keyframes fadeUp {
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* ===============================
   Responsive
================================ */
@media (max-width: 991px) {
  .pricing-title {
    font-size: 38px;
  }

  .pricing-card.featured {
    transform: none;
  }
}

@media (max-width: 575px) {
  .pricing-section {
    padding: 80px 0;
  }

  .pricing-title {
    font-size: 32px;
  }
}


@media (max-width: 768px) {
  .pricing-card:hover {
    transform: none;
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.35);
  }
}


</style>
<!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/price-bg-1.png);">
      <div class="container position-relative">
        <h1>Pricing</h1>
        <p>Our pricing reflects quality cultivation, regulatory compliance, and flexible white-label solutions designed to support growing brands.</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li class="current">Pricing</li>
          </ol>
        </nav>
      </div>
    </div>
<!-- End Page Title -->
<section id="pricing" class="pricing-section">
  <div class="container">

    <!-- Section Header -->
    <div class="pricing-header text-center">
      <h2 class="pricing-title">Our Pricing</h2>
      <p class="pricing-subtitle">
        Competitive rates for premium organic cannabis solutions
      </p>
    </div>

    <!-- Pricing Cards -->
    <div class="row g-4 justify-content-center">

      <!-- Starter -->
      <div class="col-lg-4 col-md-6">
        <div class="pricing-card fade-up">
          <span class="pricing-badge">Starter</span>
            <h3 class="pricing-price">$1,200 – $3,500</h3>

            <p class="pricing-desc">
            Ideal for small brands and dispensaries looking to test the market
            with premium organic cannabis products.
            </p>

            <ul class="pricing-features">
            <li><i class="bi bi-check-circle-fill"></i> Small batch orders (1–5 lbs)</li>
            <li><i class="bi bi-check-circle-fill"></i> Standard compliant packaging</li>
            <li><i class="bi bi-check-circle-fill"></i> Email & onboarding support</li>
            </ul>

            <button class="btn-pricing" onclick="location.href='{{ route('contact') }}'">
            Get Quote
            </button>

        </div>
      </div>

      <!-- Business (Highlighted) -->
      <div class="col-lg-4 col-md-6">
        <div class="pricing-card featured fade-up">
          <span class="pricing-badge">Business</span>
            <h3 class="pricing-price">$4,000 – $12,000</h3>

            <p class="pricing-desc">
            Designed for growing cannabis brands requiring consistent supply,
            custom packaging, and priority service.
            </p>

            <ul class="pricing-features">
            <li><i class="bi bi-check-circle-fill"></i> Medium volume orders (5–25 lbs)</li>
            <li><i class="bi bi-check-circle-fill"></i> Custom branding & packaging</li>
            <li><i class="bi bi-check-circle-fill"></i> Priority production & support</li>
            <li><i class="bi bi-check-circle-fill"></i> Volume-based discounts</li>
            </ul>

            <button class="btn-pricing" onclick="location.href='{{ route('contact') }}'">
            Get Quote
            </button>

        </div>
      </div>

      <!-- Enterprise -->
      <div class="col-lg-4 col-md-6">
        <div class="pricing-card fade-up">
         <span class="pricing-badge">Enterprise</span>
            <h3 class="pricing-price">$15,000+</h3>

            <p class="pricing-desc">
            Tailored solutions for large-scale distributors and national brands
            requiring high-volume, white-label cannabis production.
            </p>

            <ul class="pricing-features">
            <li><i class="bi bi-check-circle-fill"></i> Large-scale production (25+ lbs)</li>
            <li><i class="bi bi-check-circle-fill"></i> Full white-label solutions</li>
            <li><i class="bi bi-check-circle-fill"></i> Dedicated account manager</li>
            <li><i class="bi bi-check-circle-fill"></i> Custom pricing & logistics</li>
            </ul>

            <button class="btn-pricing" onclick="location.href='{{ route('contact') }}'">
            Get Quote
            </button>

        </div>
      </div>

    </div>
  </div>
</section>

@endsection
