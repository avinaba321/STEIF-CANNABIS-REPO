@extends('layout.app')

@section('title', 'Contact - Organic Farmiz')

@section('content')

<!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/Order_info/order-info-bg.png);">
      <div class="container position-relative">
        <h1>Contact</h1>
        <p>All orders are processed in accordance with regulatory requirements, quality standards, 
            and documented chain-of-custody procedures to ensure consistency and trust.</p>
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