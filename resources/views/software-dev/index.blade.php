@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Software Development Services</h1>
        
        <div class="row">
            @foreach($softwareDevs as $service)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        @if($service->image)
                            <img src="{{ asset('storage/' . $service->image) }}" class="card-img-top" alt="{{ $service->title }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $service->title }}</h5>
                            <p class="card-text">{{ Str::limit($service->description, 150) }}</p>
                            <a href="{{ route('software-dev.show', $service->slug) }}" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection