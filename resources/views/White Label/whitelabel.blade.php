@extends('layout.app')

@section('title', 'Pricing - Organic Farmiz')

@section('content')
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

@endsection