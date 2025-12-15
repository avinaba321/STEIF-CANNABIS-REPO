<header id="header" class="header d-flex align-items-center position-relative">
<div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">


<a href="{{ url('/home') }}" class="logo d-flex align-items-center">
{{-- <img src="{{ asset('assets/img/organic-farmiz-logo-home.png') }}" alt="AgriCulture"> --}}
{{-- <h1 class="sitename">AgriCulture</h1> --}}
<div class="logo-img">
    <img src="{{ asset('assets/img/organic-farmiz-logo-home.png') }}" alt="Organic Farmiz">
  </div>
</a>


<nav id="navmenu" class="navmenu">
<ul>
<li><a href="{{ url('/') }}" class="{{ Request::is('/home') ? 'active' : '' }}">Home</a></li>
<li><a href="{{ url('about') }}" class="{{ Request::is('about') ? 'active' : '' }}">Products</a></li>
<li><a href="{{ url('services') }}" class="{{ Request::is('services*') ? 'active' : '' }}">White Label</a></li>
<li><a href="{{ url('testimonials') }}">Pricing</a></li>
<li><a href="{{ url('blog') }}">Order Info</a></li>
<li><a href="{{ url('contact') }}">Contact</a></li>
</ul>
<i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>


</div>
</header>