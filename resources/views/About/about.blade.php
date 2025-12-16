@extends('layout.app')


@section('title','About - Organic Farmiz')
<style>
    /*--------------------------------------------------------------
# Our Story Section
--------------------------------------------------------------*/
/* Our Story Section */
.our-story {
  background-color: #98c183;
  padding: 70px 0 110px;
}

/* Eyebrow */
.story-eyebrow {
  display: inline-block;
  font-size: 14px;
  letter-spacing: 3px;
  font-weight: 600;
  color: #0b2a17;
  margin-bottom: 16px;
}

/* Title */
.story-title {
  font-size: 30px;
  font-weight: 700;
  line-height: 1.15;
  color: #0b2a17;
  margin-bottom: 22px;
}

.story-title span {
  color: #14532d;
}

/* Main Section Title */
.story-main-title {
  font-size: 50px;
  font-weight: 520;
  letter-spacing: 6px;
  text-transform: uppercase;
  color: #0b2a17;
  margin-bottom: 20px;
}

/* Text */
.story-text {
  font-size: 17px;
  line-height: 1.75;
  color: #1f2937;
  max-width: 520px;
  margin-bottom: 26px;
}

/* List */
.story-list {
  list-style: none;
  padding: 0;
  margin-bottom: 34px;
}

.story-list li {
  display: flex;
  align-items: center;
  gap: 10px;
  margin-bottom: 12px;
  font-size: 16px;
  color: #1f2937;
}

.story-list i {
  color: #14532d;
  font-size: 18px;
}

/* CTA Button */
.btn-story {
  display: inline-block;
  background: #071807;
  color: #ffffff;
  padding: 14px 36px;
  border-radius: 999px;
  font-weight: 600;
  text-decoration: none;
  transition: all 0.3s ease;
}

.btn-story:hover {
  background: #14532d;
  transform: translateY(-2px);
}

/* Image Card */
/* .story-image-wrap {
  border-radius: 26px;
  overflow: hidden;
  box-shadow: 0 30px 60px rgba(0, 0, 0, 0.25);
} */

/* .story-image-wrap img {
  width: 100%;
  height: auto;
  object-fit: cover;
} */


/* Right Image Grid */
.story-image-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 18px;
}

/* Image Card */
.story-img {
  border-radius: 18px;
  overflow: hidden;
  background: #ffffff;
  box-shadow: 0 18px 40px rgba(0, 0, 0, 0.18);
  transition: all 0.35s ease;
}

.story-img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}

/* Hover effect */
.story-img:hover {
  transform: translateY(-6px) scale(1.02);
  box-shadow: 0 30px 60px rgba(0, 0, 0, 0.25);
}

/* Slight size balance */
.small-img {
  height: 220px;
}

@media (max-width: 1199px) {
  .story-main-title {
    font-size: 56px;
    letter-spacing: 5px;
  }

  .story-title {
    font-size: 34px;
  }

  .our-story {
    padding: 100px 0;
  }
}

@media (max-width: 991px) {
  .story-main-title {
    font-size: 46px;
    letter-spacing: 4px;
    text-align: center;
  }

  .story-title {
    font-size: 30px;
    text-align: center;
  }

  .story-text {
    max-width: 100%;
    text-align: center;
  }

  .story-list li {
    justify-content: center;
  }

  .btn-story {
    width: 100%;
    text-align: center;
  }

  .our-story {
    padding: 80px 0;
  }

  .story-image-grid {
    margin-top: 40px;
  }

  .small-img {
    height: 200px;
  }
}

@media (max-width: 575px) {
  .story-main-title {
    font-size: 34px;
    letter-spacing: 3px;
  }

  .story-title {
    font-size: 26px;
  }

  .story-text {
    font-size: 16px;
    line-height: 1.7;
  }

  .story-list li {
    font-size: 15px;
  }

  .btn-story {
    padding: 14px 24px;
  }

  /* .story-image-wrap {
    border-radius: 20px;
  } */

  .story-image-grid {
    grid-template-columns: 1fr;
    gap: 16px;
  }

  .small-img {
    height: 220px;
  }
}


/* Our Mission Section */
.our-mission {
  background-color: #061407;
  padding: 70px 0 110px;
}

/* Eyebrow */
.mission-eyebrow {
  display: inline-block;
  font-size: 14px;
  letter-spacing: 3px;
  font-weight: 600;
  color: #98c183;
  margin-bottom: 14px;
}

/* Title */
.mission-title {
  font-size: 38px;
  font-weight: 700;
  line-height: 1.15;
  color: #ffffff;
  margin-bottom: 22px;
}

.mission-title span {
  color: #98c183;
}

/* Text */
.mission-text {
  font-size: 17px;
  line-height: 1.8;
  color: #cfd8cc;
  max-width: 520px;
  margin-bottom: 26px;
}

/* Bullet Points */
.mission-points {
  list-style: none;
  padding: 0;
  margin-bottom: 34px;
}

.mission-points li {
  display: flex;
  align-items: center;
  gap: 10px;
  margin-bottom: 12px;
  font-size: 16px;
  color: #e5e5e5;
}

.mission-points i {
  color: #98c183;
  font-size: 18px;
}

/* CTA Button */
.btn-mission {
  display: inline-block;
  background: linear-gradient(135deg, #1f8f4a, #146c3a);
  color: #ffffff;
  padding: 14px 38px;
  border-radius: 999px;
  font-weight: 600;
  text-decoration: none;
  box-shadow: 0 10px 30px rgba(31, 143, 74, 0.35);
  transition: all 0.3s ease;
}

.btn-mission:hover {
  background: linear-gradient(135deg, #27ae60, #1f8f4a);
  transform: translateY(-2px);
  box-shadow: 0 18px 45px rgba(39, 174, 96, 0.45);
}

/* Image */
.mission-image-wrap {
  border-radius: 26px;
  overflow: hidden;
  box-shadow: 0 30px 60px rgba(0, 0, 0, 0.45);
  max-width: 520px;
}

.mission-image-wrap img {
  width: 100%;
  height: auto;
  object-fit: cover;
}

/* Main Section Title – Same as OUR STORY */
.mission-main-title {
  font-size: 50px;
  font-weight: 520;
  letter-spacing: 6px;
  text-transform: uppercase;
 color: #98c183;
  margin-bottom: 20px;
  margin-top: 0;
}


/* Responsive */
@media (max-width: 991px) {
  .mission-title {
    font-size: 34px;
  }

  .mission-main-title {
    font-size: 42px;
    letter-spacing: 4px;
  }

  .our-mission {
    padding: 80px 0;
  }

  .btn-mission {
    width: 100%;
    text-align: center;
  }

  .mission-image-wrap {
    margin: 0 auto;
  }
}

@media (max-width: 575px) {
  .mission-title {
    font-size: 28px;
  }

  .mission-main-title {
    font-size: 34px;
    letter-spacing: 3px;
  }
}



/* SECTION WRAPPER */
.our-section {
  background: #98c183;
  padding: 110px 0;
}

/* TOP TITLE */
.section-main-title {
  font-size: 48px;
  letter-spacing: 6px;
  text-transform: uppercase;
  font-weight: 500;
  color: #0b2a17;
}

/* LEFT TITLE */
.section-title {
  font-size: 30px;
  font-weight: 700;
  color: #0b2a17;
  line-height: 1.2;
  margin-bottom: 20px;
}

.section-title span {
  color: #14532d;
}

/* TEXT */
.section-text {
  font-size: 16.5px;
  line-height: 1.7;
  color: #1f2937;
  max-width: 520px;
  margin-bottom: 24px;
}

/* LIST */
.section-list {
  list-style: none;
  padding: 0;
  margin-bottom: 30px;
}

.section-list li {
  display: flex;
  align-items: center;
  gap: 10px;
  font-size: 16px;
  margin-bottom: 12px;
  color: #1f2937;
}

.section-list i {
  color: #14532d;
  font-size: 18px;
}

/* BUTTON */
.btn-section {
  background: #071807;
  color: #fff;
  padding: 14px 36px;
  border-radius: 999px;
  font-weight: 600;
  text-decoration: none;
  display: inline-block;
  transition: all 0.3s ease;
}

.btn-section:hover {
  background: #14532d;
  transform: translateY(-2px);
}

/* Hero + Accent Image Grid */
.image-grid-hero {
  position: relative;
  display: flex;
  justify-content: center;
}

/* Shared image styling */
.image-box {
  border-radius: 26px;
  overflow: hidden;
  box-shadow: 0 25px 55px rgba(0, 0, 0, 0.28);
  background: #000;
}

.image-box img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}

/* Large Hero Image */
.image-hero {
  width: 85%;
  max-width: 460px;
  aspect-ratio: 4 / 5;
}

/* Small Accent Image */
.image-accent {
  position: absolute;
  bottom: -30px;
  right: 0;
  width: 45%;
  max-width: 220px;
  aspect-ratio: 1 / 1;
  border: 4px solid  #14532d; /* brand color */
}

/* Tablet */
@media (max-width: 991px) {
  .image-hero {
    width: 90%;
  }

  .image-accent {
    right: 10px;
    bottom: -20px;
    width: 40%;
  }
}

/* Mobile */
@media (max-width: 575px) {
  .image-grid-hero {
    flex-direction: column;
    align-items: center;
  }

  .image-hero {
    width: 100%;
  }

  .image-accent {
    position: relative;
    bottom: auto;
    right: auto;
    width: 70%;
    margin-top: 16px;
    border-width: 3px;
  }
}

/* RESPONSIVE */
@media (max-width: 991px) {
  .section-main-title {
    font-size: 40px;
    letter-spacing: 4px;
  }

  .our-section {
    padding: 80px 0;
  }

  .btn-section {
    width: 100%;
    text-align: center;
  }
}

@media (max-width: 575px) {
  .section-main-title {
    font-size: 34px;
    letter-spacing: 3px;
  }

  .image-grid {
    grid-template-columns: 1fr;
  }
}


</style>

@section('content')

<!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/about/about-bg.png);">
      <div class="container position-relative">
        <h1>About</h1>
        <p>We specialize in certified organic cannabis cultivation, offering premium flower and white-label solutions built on quality, compliance, and sustainability.</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li class="current">About</li>
          </ol>
        </nav>
      </div>
    </div>
<!-- End Page Title -->

<section id="our-story" class="our-story section">
  <div class="container">
    <div class="row mb-5">
    <div class="col-12 text-center">
        <h1 class="story-main-title">OUR STORY</h1>
    </div>
    </div>
    <div class="row align-items-center gy-5">

      <!-- Text Content -->
      <div class="col-lg-6">
        <h2 class="story-title">
          Growing Premium Cannabis <br>
          <span>With Purpose & Integrity</span>
        </h2>

        <p class="story-text">
          Our journey began with a simple belief — cannabis should be grown
          responsibly, transparently, and organically. By combining elite
          genetics, controlled cultivation environments, and sustainable
          practices, we deliver clean, consistent, and compliant cannabis
          products for modern brands.
        </p>

        <ul class="story-list">
          <li><i class="bi bi-check-circle-fill"></i> Licensed & compliant cultivation</li>
          <li><i class="bi bi-check-circle-fill"></i> Certified organic growing methods</li>
          <li><i class="bi bi-check-circle-fill"></i> Trusted white-label partnerships</li>
        </ul>

        <a href="#contact" class="btn-story">Get in Touch</a>
      </div>

      <!-- Right Side Image Grid -->
      <div class="col-lg-6">
        <div class="story-image-grid">
          <div class="story-img small-img">
            <img src="{{ asset('assets/img/About/story-bg-1.png') }}" alt="Organic Cultivation">
          </div>
          <div class="story-img small-img">
            <img src="{{ asset('assets/img/About/story-bg-2.jpg') }}" alt="Premium Genetics">
          </div>
          <div class="story-img small-img">
            <img src="{{ asset('assets/img/About/story-bg-3.jpg') }}" alt="Sustainable Farming">
          </div>
          <div class="story-img small-img">
            <img src="{{ asset('assets/img/About/story-bg-4.png') }}" alt="White Label Packaging">
          </div>
        </div>
      </div>


    </div>
  </div>
</section>

<!-- Our Mission Section -->
<section id="our-mission" class="our-mission">
  <div class="container text-center mb-5">
  <h2 class="mission-main-title">OUR MISSION</h2>
</div>

  <div class="container">
    <div class="row align-items-center gy-5 mt-3">

      <!-- Image LEFT -->
      <div class="col-lg-6 text-center" data-aos="fade-right">
        <div class="mission-image-wrap">
          <img src="{{ asset('assets/img/About/misson-bg-1.png') }}" alt="Organic Cannabis Cultivation">
        </div>
      </div>

      <!-- Text RIGHT -->
      <div class="col-lg-6" data-aos="fade-left">

        <h2 class="mission-title">
          Delivering <span>Premium Quality</span><br>
          With Integrity & Trust
        </h2>

        <p class="mission-text">
          To deliver premium quality products that exceed customer expectations,
          while building lasting relationships based on trust, integrity, and
          exceptional service.
        </p>

        <ul class="mission-points">
          <li><i class="bi bi-check-circle-fill"></i> Uncompromising product quality</li>
          <li><i class="bi bi-check-circle-fill"></i> Transparent & ethical practices</li>
          <li><i class="bi bi-check-circle-fill"></i> Long-term partner relationships</li>
        </ul>

        <a href="#contact" class="btn-mission">
          Work With Us
        </a>
      </div>

    </div>
  </div>
</section>
<!-- /Our Mission Section -->

<section id="our-story" class="our-story section">
  <div class="container">

    <!-- Top Center Title -->
    <div class="row mb-5">
      <div class="col-12 text-center">
        <h1 class="story-main-title">OUR VALUE</h1>
      </div>
    </div>

    <div class="row align-items-center gy-5">

      <!-- LEFT CONTENT -->
      <div class="col-lg-6">

        <h2 class="story-title">
          Growing Premium Cannabis <br>
          <span>With Purpose & Integrity</span>
        </h2>

       <p class="section-text">
        Built on responsibility and transparency, our cultivation process blends elite
        genetics, sustainable practices, and controlled environments to produce premium,
        compliant cannabis. We help brands bring high-quality organic products to market
        with confidence and integrity.
      </p>

        <ul class="section-list">
          <li><i class="bi bi-check-circle-fill"></i> Integrity in cultivation & compliance</li>
          <li><i class="bi bi-check-circle-fill"></i> Premium quality without compromise</li>
          <li><i class="bi bi-check-circle-fill"></i> Sustainable & ethical practices</li>
          <li><i class="bi bi-check-circle-fill"></i> Long-term partner relationships</li>
        </ul>

        <a href="#contact" class="btn-section">Work With Us</a>

      </div>


    <div class="col-lg-6">
  <div class="image-grid-hero">
    
    <!-- Large Hero Image -->
    <div class="image-box image-hero">
      <img src="assets/img/About/story-bg-1.png" alt="Organic Cannabis Cultivation">
    </div>

    <!-- Small Accent Image -->
    <div class="image-box image-accent">
      <img src="assets/img/About/story-bg-2.jpg" alt="Premium Cannabis Flower">
    </div>

  </div>
</div>



    </div>
  </div>
</section>

@endsection