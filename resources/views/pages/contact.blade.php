@extends('layouts.app')

@section('content')
<div class="container py-5" data-aos="fade-up">
    <div class="max-w-2xl mx-auto">
        <h2 class="font-weight-bold text-white text-center mb-3">Get In Touch</h2>
        <p class="text-secondary text-center mb-5">Feel free to reach out for project opportunities, web development roles, or technical inquiries.</p>
        
       
        <div class="card card-custom p-4 mb-5 shadow-lg">
            <form action="#" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label text-white">Your Name</label>
                    <input type="text" class="form-control bg-dark text-white border-secondary" placeholder="Enter your name" required>
                </div>
                <div class="mb-3">
                    <label class="form-label text-white">Your Email</label>
                    <input type="email" class="form-control bg-dark text-white border-secondary" placeholder="name@example.com" required>
                </div>
                <div class="mb-3">
                    <label class="form-label text-white">Message</label>
                    <textarea class="form-control bg-dark text-white border-secondary" rows="4" placeholder="Write your message here..." required></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100 py-2 font-weight-bold">
                    <i class="fa-solid fa-paper-plane me-2"></i>Send Message
                </button>
            </form>
        </div>

     
        <div class="row g-3 text-start">
            <div class="col-md-6">
                <div class="card card-custom p-3 text-center">
                    <i class="fa-solid fa-envelope text-primary fs-3 mb-2"></i>
                    <h5 class="text-white">Email</h5>
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&to=yeshambeltg02@gmail.com" target="_blank" class="text-secondary text-decoration-none">yeshambeltg02@gmail.com</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-custom p-3 text-center">
                    <i class="fa-brands fa-github text-primary fs-3 mb-2"></i>
                    <h5 class="text-white">GitHub</h5>
                    <a href="https://github.com/TigistY" target="_blank" class="text-secondary text-decoration-none">github.com/TigistY</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection