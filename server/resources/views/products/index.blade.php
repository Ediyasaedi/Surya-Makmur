@extends('layout/main')

@section('title', 'Product | Sukses Makmur')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-12">
        <div class="row mt-3">
            <div class="col-8">
                <h1>Product List</h1>
            </div>
            <div class="col-2">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            </div>
            <div class="col-2 text-center">
                <h1>
                    <a href="/product/create" class="btn btn-primary">Add Product</a>
                </h1>
            </div>
        </div>

            <table class="table">
                <thead class="table-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image Url</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Discount</th>
                    <th scope="col">Price (Rp.)</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $products as $prd)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $prd->name }}</td>
                        <td>{{ $prd->img_url }}</td>
                        <td>{{ $prd->stock }}</td>
                        <td>{{ $prd->discount }}</td>
                        <td>{{ $prd->price }}</td>
                        <td>
                            <a href="/product/{{ $prd->id }}" class="btn btn-sm bg-info">Detail</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
