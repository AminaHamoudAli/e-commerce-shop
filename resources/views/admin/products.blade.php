@extends('layouts.app')

@section('content')
    <h1>Products</h1>
    <table border="1" cellpadding="5">
        <tr>
            <th>ID</th><th>Name</th><th>Price</th><th>Category</th><th>Actions</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>${{ $product->price }}</td>
                <td>{{ $product->category->name ?? 'No Category' }}</td>
                <td>
                    @can('update', $product)
                        <button>Edit Product</button>
                    @endcan

                    @can('delete', $product)
                        <button>Delete Product</button>
                    @endcan
                </td>
            </tr>
        @endforeach
    </table>
@endsection
