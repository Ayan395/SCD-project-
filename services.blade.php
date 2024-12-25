@extends('layouts.web')
@section('content')
    <section class="services">
        <h1>Our Services</h1>
    </section>

    <section class="ayan">
        <!-- Service: SEO -->
        <div class="service">
            <img src="{{ asset('images/seo.jpg') }}" alt="SEO Service">
            <h2>SEO</h2>
            <p>Improve your search engine rankings and visibility with our top-notch SEO strategies.</p>
            <a href="{{ url('/contact') }}" class="cta">Get Started</a>
        </div>

        <!-- Service: Web Development -->
        <div class="service">
            <img src="{{ asset('images/web.jpg') }}" alt="Web Development Service">
            <h2>Web Development</h2>
            <p>Build a responsive and user-friendly website to showcase your business effectively.</p>
            <a href="{{ url('/contact') }}" class="cta">Get Started</a>
        </div>

        <!-- Service: PPC -->
        <div class="service">
            <img src="{{ asset('images/ppc.jpg') }}" alt="PPC Service">
            <h2>Pay-Per-Click (PPC)</h2>
            <p>Drive targeted traffic to your site and maximize ROI with our PPC campaigns.</p>
            <a href="{{ url('/contact') }}" class="cta">Get Started</a>
        </div>
    </section>
@endsection