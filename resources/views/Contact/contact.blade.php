@extends('layout.app')

@section('title', 'Contact - Organic Farmiz')

@section('content')

<!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/Order_info/order-info-bg.png);">
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

@endsection