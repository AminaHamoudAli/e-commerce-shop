@extends('layouts.app')

@section('content')
    <h1>Admin Dashboard</h1>
    <ul>
        <li><a href="{{ url('admin/products') }}">Manage Products</a></li>
        <li><a href="{{ url('admin/categories') }}">Manage Categories</a></li>
    </ul>
@endsection
