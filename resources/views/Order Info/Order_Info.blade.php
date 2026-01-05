@extends('layout.app')

@section('title', 'Order Info - Organic Farmiz')

@section('content')
<style>
    /* ORDER INFO BASE */
#order-info {
  width: 100%;
}

/* SECTION COLORS */
.order-section.dark {
  background: #0b2a17;
  color: #ffffff;
}

.order-section.light {
  background: #98c183;
  color: #0b2a17;
}

.order-section.light h2
{
      color: #0b2a17;
}
/* SECTION SPACING */
.order-section {
  padding: 100px 0;
}

/* TEXT */
.order-section h2 {
  font-size: 36px;
  font-weight: 700;
  margin-bottom: 18px;
  color: #98c183;
}

.order-section p {
  font-size: 17px;
  line-height: 1.75;
  max-width: 520px;
}

/* IMAGE */
.order-img {
  width: 100%;
  border-radius: 22px;
  box-shadow: 0 25px 60px rgba(0,0,0,0.35);
  transition: transform 0.5s ease;
}

.order-img:hover {
  transform: scale(1.03);
}

/* ANIMATIONS */
.fade-left {
  opacity: 0;
  transform: translateX(-50px);
  animation: fadeLeft 1s ease forwards;
}

.fade-right {
  opacity: 0;
  transform: translateX(50px);
  animation: fadeRight 1s ease forwards;
}

/* Primary CTA (already used) */
.order-btn {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  margin-top: 24px;
  padding: 14px 36px;
  background: linear-gradient(135deg, #1f8f4a, #14532d);
  color: #ffffff;
  font-weight: 600;
  font-size: 15px;
  border-radius: 999px;
  text-decoration: none;
  box-shadow: 0 12px 30px rgba(31, 143, 74, 0.45);
  transition: all 0.35s ease;
}

.order-btn:hover {
  background: linear-gradient(135deg, #27ae60, #1f8f4a);
  transform: translateY(-3px);
  box-shadow: 0 20px 45px rgba(39, 174, 96, 0.6);
  color: #ffffff;
}

/* Outline variant for light sections */
.order-btn-outline {
 display: inline-flex;
  align-items: center;
  gap: 8px;
  margin-top: 24px;
  padding: 14px 36px;
  background: linear-gradient(135deg, #1f8f4a, #14532d);
  color: #ffffff;
  font-weight: 600;
  font-size: 15px;
  border-radius: 999px;
  text-decoration: none;
  box-shadow: 0 12px 30px rgba(31, 143, 74, 0.45);
  transition: all 0.35s ease;
}

.order-btn-outline:hover {
    background: linear-gradient(135deg, #27ae60, #1f8f4a);
  transform: translateY(-3px);
  box-shadow: 0 20px 45px rgba(39, 174, 96, 0.6);
  color: #ffffff;
}


@keyframes fadeLeft {
  to {
    opacity: 1;
    transform: translateX(0);
  }
}

@keyframes fadeRight {
  to {
    opacity: 1;
    transform: translateX(0);
  }
}

/* RESPONSIVE */
@media (max-width: 991px) {
  .order-section {
    padding: 70px 0;
  }

  .order-section h2 {
    font-size: 30px;
  }
}

@media (max-width: 575px) {
  .order-section h2 {
    font-size: 26px;
  }

  .order-section p {
    font-size: 16px;
  }
}

@media (max-width: 576px) {
  .order-btn {
    width: 100%;
    justify-content: center;
  }
}


</style>
<!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/Order_info/order-info-bg.png);">
      <div class="container position-relative">
        <h1>Order Info</h1>
        <p>All orders are processed in accordance with regulatory requirements, quality standards, 
and documented chain-of-custody procedures to ensure consistency and trust.</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li class="current">Pricing</li>
          </ol>
        </nav>
      </div>
    </div>
<!-- End Page Title -->

<section id="order-info">

<!-- 01 ORDER PROCESS -->
<div class="order-section dark">
  <div class="container">
    <div class="row align-items-center gy-5">

      <div class="col-lg-6 fade-left">
        <h2>How to Order</h2>
        <p>
          Begin by contacting our team to discuss your product requirements.
          We’ll help you select strains, formats, and branding options that
          align with your market goals.
        </p>

        <!-- CTA Button -->
        <a href="#contact" class="order-btn">
          Start Your Order
          <i class="bi bi-arrow-right ms-2"></i>
        </a>
      </div>

      <div class="col-lg-6 fade-right">
        <img src="{{ asset('assets/img/Order_info/order.jpg') }}" class="order-img" alt="Order Process">
      </div>

    </div>
  </div>
</div>


<!-- 02 MINIMUM ORDER -->
<div class="order-section light">
  <div class="container">
    <div class="row align-items-center gy-5">

      <div class="col-lg-6 fade-left">
        <img src="{{ asset('assets/img/Order_info/bluck.jpg') }}" class="order-img" alt="Minimum Order Quantity">
      </div>

      <div class="col-lg-6 fade-right">
        <h2>Minimum Order Quantity</h2>
        <p>
          Minimum order quantities depend on the product category and packaging.
          Our MOQs are structured to support both small brands and high-volume
          distributors.
        </p>

        <!-- CTA Button -->
        <a href="#contact" class="order-btn order-btn-outline">
          Request MOQ Details
          <i class="bi bi-info-circle ms-2"></i>
        </a>
      </div>

    </div>
  </div>
</div>


<!-- 03 PAYMENT TERMS -->
<div class="order-section dark">
  <div class="container">
    <div class="row align-items-center gy-5">

      <div class="col-lg-6 fade-left">
        <h2>Payment Terms</h2>
        <p>
          Pricing is based on volume, product type, and customization.
          We offer flexible payment options with transparent terms agreed
          upon before order confirmation.
        </p>

        <!-- CTA Button -->
        <a href="#contact" class="order-btn">
          Discuss Payment Options
          <i class="bi bi-credit-card ms-2"></i>
        </a>
      </div>

      <div class="col-lg-6 fade-right">
        <img src="{{ asset('assets/img/Order_info/payment2.jpg') }}" class="order-img" alt="Payment Terms">
      </div>

    </div>
  </div>
</div>


<!-- 04 SHIPPING -->
<div class="order-section light">
  <div class="container">
    <div class="row align-items-center gy-5">

      <div class="col-lg-6 fade-left">
        <img src="{{ asset('assets/img/Order_info/logistic.jpg') }}" 
             class="order-img" 
             alt="Shipping & Delivery">
      </div>

      <div class="col-lg-6 fade-right">
        <h2>Shipping & Delivery</h2>
        <p>
          Orders are shipped through secure, compliant logistics partners.
          Delivery times vary by destination and order size, with expedited
          shipping options available upon request.
        </p>

        <!-- CTA Button -->
        <a href="#contact" class="order-btn">
          Shipping Details
          <i class="bi bi-truck ms-2"></i>
        </a>
      </div>

    </div>
  </div>
</div>


<!-- 05 SUPPORT & RETURNS -->
<div class="order-section dark">
  <div class="container">
    <div class="row align-items-center gy-5">

      <div class="col-lg-6 fade-left">
        <h2>Returns & Refunds</h2>
        <p>
          We stand behind every product we deliver. If you experience any
          issues, contact our support team within 7 days of delivery for
          prompt resolution.
        </p>
      </div>

      <div class="col-lg-6 fade-right">
        <img src="{{ asset('assets/img/Order_info/refund.jpg') }}" class="order-img" alt="Support & Returns">
      </div>

    </div>
  </div>
</div>

</section>




@endsection