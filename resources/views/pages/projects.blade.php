@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center font-weight-bold mb-5 text-white" data-aos="fade-down">Featured Projects</h2>
    <div class="row g-4">
        @foreach($projects as $project)
            <div class="col-md-6" data-aos="fade-up">
                <div class="card card-custom h-100 overflow-hidden">
                    
                    <img src="{{ asset($project['image']) }}" class="card-img-top" alt="{{ $project['title'] }}" style="height: 220px; object-fit: cover;">
                    <div class="card-body d-flex flex-column justify-between p-4">
                        <div>
                            <h4 class="card-title text-white font-weight-bold mb-3">{{ $project['title'] }}</h4>
                            <p class="card-text text-secondary mb-4">{{ $project['description'] }}</p>
                            <div class="d-flex flex-wrap gap-2 mb-4">
                                @foreach($project['tech'] as $tech)
                                    <span class="badge bg-primary bg-opacity-25 text-primary border border-primary px-3 py-2">{{ $tech }}</span>
                                @endforeach
                            </div>
                        </div>
                        <div class="d-flex gap-3 pt-3 border-top border-secondary">
                            @if($project['github'])
                                <a href="{{ $project['github'] }}" target="_blank" class="btn btn-outline-primary btn-sm">GitHub Code &rarr;</a>
                            @endif
                            @if($project['demo'])
                                <a href="{{ $project['demo'] }}" target="_blank" class="btn btn-success btn-sm">Live Demo &rarr;</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection