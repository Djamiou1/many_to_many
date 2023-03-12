@extends('welcome')

@section('content')

    <div class="container">
        <div class="row my-4">
            @foreach($products as $product)
              <div class="col-md-3">
                <div class="card">
                    <img src="https://th.bing.com/th/id/OIP.XdvmHJVBz7PRDWpYOXXsJgHaE8?w=270&h=182&c=7&r=0&o=5&pid=1.7" alt="https://th.bing.com/th/id/OIP.XdvmHJVBz7PRDWpYOXXsJgHaE8?w=270&h=182&c=7&r=0&o=5&pid=1.7" class="card-image">
                    <div class="card-body">
                    @foreach($product->categories as $category)
                        <h2 class="card-title">{{ $category->title }}</h2>
                    @endforeach
                        <h2 class="card-title">{{ $product->name }}</h2>
                        <h2 class="card-title">{{ $product->price }} FCF</h2>
                    </div>
                  </div>
                </div>
            @endforeach
        </div>
    </div>

@endSection