@extends('layouts.app')

@section('title', 'Orders - Alpin Cell')

@section('styles')
<link href="{{ asset('css/indexCategory.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container-fluid py-4">
    <!-- Header -->
    <x-dashboard-header title="Create Product"></x-dashboard-header>

    <!-- Product Types Menu -->
    <div class="row g-4">
        @foreach ($products as $product)      
        <div class="col-md-3 col-sm-6">
            <div class="product-card">
                <a href="{{route($product->name)}}" class="text-decoration-none">
                    <div class="card-content">
                        <div class="icon-container">
                            @if ($product->name == 'Pulsa')
                                <i class="bi bi-phone"></i>
                            @elseif ($product->name == 'E-Wallet')
                                <i class="bi bi-wallet2"></i>
                            @elseif ($product->name == 'Transaksi')
                                <i class="bi bi-cart"></i>
                            @elseif ($product->name == 'Pembayaran Pascabayar')
                                <i class="bi bi-credit-card"></i>
                            @elseif ($product->name == 'Top Up Game')
                                <i class="bi bi-controller"></i>
                            @elseif ($product->name == 'Voucher')
                                <i class="bi bi-ticket-perforated"></i>
                            @elseif ($product->name == 'Aksesoris')
                                <i class="bi bi-box"></i>
                            @endif
                        </div>
                        <h5 class="product-title">{{$product->name}}</h5>
                        
                        <div class="button-container">
                            <a href="{{route('categoryproductcreate',['id'=>$product->id])}}" class="add-category-btn">
                                <i class="bi bi-plus-lg me-1"></i>
                                Tambah Kategori
                            </a>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection