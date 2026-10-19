@extends('layouts.app')

@section('content')
<style>
 
    .hero-container {
        position: relative;
        min-height: 85vh;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        border-radius: 16px;
    }

    
    .hero-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url("{{ asset('images/hero-bg.jpg') }}");
        background-size: cover;
        background-position: center;
        z-index: 1;
        animation: kenburns 16s ease-in-out infinite alternate;
    }

    /* Dark Overlay for readability */
    .hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(15, 23, 42, 0.82); 
        z-index: 2;
    }

   
    .hero-content {
        position: relative;
        z-index: 3;
    }

    @keyframes kenburns {
        0% {
            transform: scale(1);
        }
        100% {
            transform: scale(1.18);
        }
    }
</style>

<div class="container my-3">
    <div class="hero-container shadow-lg">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        
        <div class="hero-content text-center px-4 py-5" data-aos="fade-up">
            <h1 class="display-3 font-weight-bold text-white mb-3 fw-bold">
                Welcome to My Portfolio
            </h1>
            <p class="lead text-light mb-4 fs-4 opacity-90">
                I am a Full-Stack Web Developer specializing in Laravel, PHP, and MySQL.
            </p>
            <div class="d-flex justify-content-center gap-3">
                <a href="{{ route('projects') }}" class="btn btn-primary btn-lg px-4 py-2 shadow-sm">
                    View Projects
                </a>
                <a href="{{ route('contact') }}" class="btn btn-outline-light btn-lg px-4 py-2">
                    Contact Me
                </a>
            </div>
        </div>
    </div>
</div>
@endsection