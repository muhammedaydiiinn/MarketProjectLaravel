@extends('front.layout.app')

@section('content')
    <div class="container">
        <h1>{{ $category->name }}</h1>
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->price }} TL</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
