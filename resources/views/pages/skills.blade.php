@extends('layouts.app')

@section('content')
<div class="container py-5" data-aos="fade-up">
    <h2 class="text-center font-weight-bold mb-5 text-white">Technical Skills</h2>
    <div class="row g-4">
        @foreach($skills as $category => $skillList)
            <div class="col-md-4">
                <div class="card card-custom p-4 h-100">
                    <h4 class="text-primary font-weight-bold mb-3">{{ $category }}</h4>
                    <div class="d-flex flex-wrap gap-2">
                        @foreach($skillList as $skill)
                            <span class="badge bg-secondary px-3 py-2">{{ $skill }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection