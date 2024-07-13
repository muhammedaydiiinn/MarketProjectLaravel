@extends('front.layout.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($categories as $category)
                <div class="col-md-4">
                    <a href="{{ route('category.products', $category->slug) }}">
                        <div class="card">
                            <img src="{{ asset('front/img/' . $category->image) }}" class="card-img-top img-fluid" alt="{{ $category->name }}">
                            <div class="card-body">
                                <h5 class="card-title text-center">{{ $category->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
