@extends('layouts.app')

@section('content')
    <h1>Categories</h1>
    <table border="1" cellpadding="5">
        <tr>
            <th>ID</th><th>Name</th><th>Products Count</th>
        </tr>
        @foreach ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->products->count() }}</td>
            </tr>
        @endforeach
    </table>
@endsection
