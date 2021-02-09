@extends('layout/main')

@section('title', 'Product | Sukses Makmur')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Product Detail</h1>

            <div class="card">
                <div class="row">
                    <div class="col-6">
                        <div class="text-center">
                            <img src={{$product->img_url}} class="rounded d-block img-responsive" style="height:220px; width: 300px" alt="{{$product->img_url}}">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name}}</h5>
                            <p class="card-text">Price (Rp.): {{ $product->price}}</p>
                            <p class="card-text">Stock: {{ $product->stock}}</p>
                            <p class="card-text">Discount (%): {{ $product->discount}}</p>
                            <div class="row">
                                <div class="col-4">
                                    <a href="/product" class="btn btn-info">Back</a>
                                </div>
                                <div class="col-4">
                                    <a href="{{ $product->id }}/edit" class="btn btn-success">Update</a>
                                </div>
                                <div class="col-4">
                                    <form action="/product/{{ $product->id }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
