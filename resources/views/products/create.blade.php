@extends('welcome')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
            <form method="post" action="{{ Route('product.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputname1" aria-describedby="nameHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPrice1" class="form-label">Price</label>
                    <input type="number" name="price" class="form-control" id="exampleInputPrice1">
                </div>
                <div class="mb-3">
                <label for="validationCustom04" class="form-label">State</label>
                    <select class="form-select" name="category" id="validationCustom04" required>
                    <option selected disabled value="">Choose...</option>
                        @foreach($categories as $category)
                          <option value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

@endSection