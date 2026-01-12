@extends('layout.app')

@section('title', 'Contact - Organic Farmiz')

@section('content')

<style>
  /* ===============================
CONTACT SECTION – MODERN ORGANIC
================================ */
.contact.section {
  background: #98c183;
  padding: 100px 0;
}

/* Layout spacing */
.contact .row {
  align-items: stretch;
}

/* ===============================
LEFT INFO CARD
================================ */
.contact .info {
  background: linear-gradient(180deg, #061407, #0b2a17);
  padding: 36px;
  border-radius: 22px;
  height: 100%;
  box-shadow: 0 25px 60px rgba(6,20,7,0.45);
  color: #ffffff;
}

.contact .info h3 {
  font-size: 26px;
  font-weight: 700;
  margin-bottom: 12px;
  color: #98c183;
}

.contact .info p {
  font-size: 15px;
  color: #cfe3d2;
  margin-bottom: 30px;
}

/* Info Items */
.info-item {
  display: flex;
  align-items: flex-start;
  gap: 14px;
  margin-bottom: 22px;
}

.info-item i {
  width: 44px;
  height: 44px;
  background:  #98c183 !important;
  color: #061407;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 18px;
}

.info-item h4 {
  font-size: 15px;
  margin-bottom: 4px;
  color: #ffffff;
}

.info-item p {
  margin: 0;
  font-size: 14px;
  color: #d7e7dc;
}

/* ===============================
FORM CARD
================================ */
.email-form {
  background: linear-gradient(180deg, #061407, #0b2a17);
  padding: 115px;
  border-radius: 22px;
  box-shadow: 0 25px 60px rgba(6,20,7,0.45);
  animation: fadeUp 0.9s ease;
}

/* Inputs */
.email-form .form-control {
  background: #061407;
  border: 1px solid rgba(152,193,131,0.35);
  color: #ffffff !important;
  padding: 14px 16px;
  border-radius: 14px;
  font-size: 14px;
  transition: all 0.3s ease;
}

.email-form textarea {
  min-height: 150px;
  resize: none;
}



/* ===============================
PLACEHOLDER FIX – FORCE VISIBILITY
================================ */

/* Standard */
.email-form .form-control::placeholder {
  color: #9fe0b8 !important;       /* light organic green - FIXED THE TYPO */
  opacity: 1 !important;           /* VERY IMPORTANT */
}

/* Chrome / Edge / Safari */
.email-form .form-control::-webkit-input-placeholder {
  color: #9fe0b8 !important;
  opacity: 1 !important;
}

/* Firefox */
.email-form .form-control::-moz-placeholder {
  color: #9fe0b8 !important;
  opacity: 1 !important;
}

/* IE / Legacy */
.email-form .form-control:-ms-input-placeholder {
  color: #9fe0b8 !important;
  opacity: 1 !important;
}

/* Focus fade (modern UX) */
.email-form .form-control:focus::placeholder {
  opacity: 0.45;
  transition: opacity 0.3s ease;
}


/* Focus effect */
.email-form .form-control:focus {
  border-color: #98c183;
  box-shadow: 0 0 0 3px rgba(152,193,131,0.35);
  background: #061407;
}

/* ===============================
SUBMIT BUTTON
================================ */
.email-form button[type="submit"] {
  background: linear-gradient(135deg, #1f8f4a, #14532d);
  border: none;
  padding: 14px 42px;
  color: #ffffff;
  font-weight: 700;
  border-radius: 999px;
  transition: all 0.35s ease;
  box-shadow: 0 12px 28px rgba(31,143,74,0.45);
}

.email-form button[type="submit"]:hover {
  transform: translateY(-3px);
  background: linear-gradient(135deg, #27ae60, #1f8f4a);
  box-shadow: 0 20px 45px rgba(39,174,96,0.6);
}

/* ===============================
FORM STATES
================================ */
.email-form .loading,
.email-form .sent-message,
.email-form .error-message {
  font-size: 14px;
  color: #98c183;
}

/* ===============================
ANIMATION
================================ */
@keyframes fadeUp {
  from {
    opacity: 0;
    transform: translateY(40px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* ===============================
RESPONSIVE
================================ */
@media (max-width: 991px) {
  .contact.section {
    padding: 70px 0;
  }

  .contact .info,
  .email-form{
    padding: 30px;
  }
}

@media (max-width: 575px) {
  .email-form button[type="submit"] {
    width: 100%;
  }
}

</style>
<!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/Contact/contact-bg.jpg);">
      <div class="container position-relative">
        <h1>Contact</h1>
        <p>Connect with our team to place orders, request pricing, or explore white-label opportunities.
            We work closely with licensed partners to ensure every request is managed efficiently,
            securely, and in full compliance with industry standards.</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li class="current">Contact</li>
          </ol>
        </nav>
      </div>
    </div>
<!-- End Page Title -->
<!-- Contact Section -->
    <section id="contact" class="contact section">

      <div class="container" data-aos="fade">

        <div class="row gy-5 gx-lg-5">

          <div class="col-lg-4">

            <div class="info">
              <h3>Get in touch</h3>
              <p>Et id eius voluptates atque nihil voluptatem enim in tempore minima sit ad mollitia commodi minus.</p>

              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Location:</h4>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>info@example.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Call:</h4>
                  <p>+1 5589 55488 55</p>
                </div>
              </div><!-- End Info Item -->

            </div>

          </div>
          <div class="col-lg-8">
            @if (session('success'))
              <div class="alert alert-success">
                {{ session('success') }}
              </div>
            @endif

            <form  method="POST" action="{{ route('contact.store') }}" class="email-form">
              @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
                  @error('name')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
                  @error('email')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="">
                 @error('subject')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                  @enderror
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" placeholder="Message" required=""></textarea>
                @error('message')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                  @enderror
              </div>
              <div class="text-center mt-3"><button type="submit">Send Message</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

@endsection