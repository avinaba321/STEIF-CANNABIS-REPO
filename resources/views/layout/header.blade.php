<header id="header" class="header d-flex align-items-center position-relative">
<div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
  

   <!-- Back Button -->
    <button class="header-back-btn" onclick="window.history.back()" aria-label="Go back">
      <i class="bi bi-arrow-left"></i>
    </button>


<a href="{{ url('/home') }}" class="logo d-flex align-items-center">
<div class="logo-img">
    <img src="{{ asset('assets/img/organic-farmiz-logo-home.png') }}" alt="Organic Farmiz">
  </div>
</a>


<nav id="navmenu" class="navmenu">
<ul>
<li><a href="{{ route('home') }}" class="{{ Request::is('/home') ? 'active' : '' }}">Home</a></li>
<li><a href="{{ route('about') }}" class="{{ Request::is('/about') ? 'active' : '' }}">About</a></li>
<li><a href="{{ url('about') }}" class="{{ Request::is('/') ? 'active' : '' }}">Products</a></li>
<li><a href="{{ route('whitelabel') }}">White Label</a></li>
<li><a href="{{ route('pricing') }}">Pricing</a></li>
<li><a href="{{ url('blog') }}">Order Info</a></li>
<li><a href="{{ url('contact') }}">Contact</a></li>
</ul>
<i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>


</div>
</header>