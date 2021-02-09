@extends('layout/main')

@section('title', 'Product | Sukses Makmur')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Add Product</h1>

            <form method="post" action="/product">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Input product name" name="name" value={{ old('name') }}>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="img_url" class="form-label">Image Url:</label>
                    <input type="text" class="form-control @error('img_url') is-invalid @enderror" id="img_url" placeholder="Input product image link" name="img_url" value={{ old('img_url') }}>
                    @error('img_url')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price (Rp.):</label>
                    <input type="number" class="form-control" id="price" placeholder="Input price in rupiah" name="price" value={{ old('price') }}>
                </div>
                <div class="mb-3">
                    <label for="stock" class="form-label">Stock:</label>
                    <input type="number" class="form-control @error('stock') is-invalid @enderror" id="stock" placeholder="Input stock of product" name="stock" value={{ old('stock') }}>
                    @error('stock')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="discount" class="form-label">Discount (%):</label>
                    <input type="number" class="form-control" id="discount" placeholder="Input discount of product (optional)" name="discount" value={{ old('discount') }}>
                </div>
                <button type="submit" class="btn btn-primary">Add Product</button>
            </form>
        </div>
    </div>
</div>
@endsection
