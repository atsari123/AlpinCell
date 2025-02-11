@extends('layouts.app')

@section('title', 'Product - E-Wallet')

@section('styles')
<link href="{{ asset('css/e-wallet.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container-fluid mt-4">
    <!-- Header -->
    <x-dashboard-header title="E-Wallet"></x-dashboard-header>

    <!-- E-Wallet Grid -->
    <div class="row">
        <!-- DANA -->
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="rounded-circle bg-primary bg-opacity-10 p-3 me-3">
                            <i class="bi bi-wallet2 fs-2 text-primary"></i>
                        </div>
                        <h5 class="card-title mb-0">DANA</h5>
                    </div>
                    <a href="#" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#formTopupModal" aria-expanded="false" aria-controls="formTopupModal">
                        Top Up DANA
                    </a>
                </div>
            </div>
        </div>

        <!-- ShopeePay -->
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="rounded-circle bg-danger bg-opacity-10 p-3 me-3">
                            <i class="bi bi-bag fs-2 text-danger"></i>
                        </div>
                        <h5 class="card-title mb-0">ShopeePay</h5>
                    </div>
                    <a href="#" class="btn btn-danger w-100" data-bs-toggle="modal" data-bs-target="#formTopupModal" aria-expanded="false" aria-controls="formTopupModal">
                        Top Up ShopeePay
                    </a>
                </div>
            </div>
        </div>

        <!-- GoPay Customer -->
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="rounded-circle bg-success bg-opacity-10 p-3 me-3">
                            <i class="bi bi-person fs-2 text-success"></i>
                        </div>
                        <h5 class="card-title mb-0">GoPay Customer</h5>
                    </div>
                    <a href="#" class="btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#formTopupModal" aria-expanded="false" aria-controls="formTopupModal">
                        Top Up GoPay
                    </a>
                </div>
            </div>
        </div>

        <!-- GoPay Driver -->
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="rounded-circle bg-success bg-opacity-10 p-3 me-3">
                            <i class="bi bi-car-front fs-2 text-success"></i>
                        </div>
                        <h5 class="card-title mb-0">GoPay Driver</h5>
                    </div>
                    <a href="#" class="btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#formTopupModal" aria-expanded="false" aria-controls="formTopupModal">
                        Top Up GoPay Driver
                    </a>
                </div>
            </div>
        </div>

        <!-- OVO -->
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="rounded-circle bg-purple bg-opacity-10 p-3 me-3">
                            <i class="bi bi-wallet fs-2 text-purple"></i>
                        </div>
                        <h5 class="card-title mb-0">OVO</h5>
                    </div>
                    <a href="#" class="btn btn-purple w-100" data-bs-toggle="modal" data-bs-target="#formTopupModal" aria-expanded="false" aria-controls="formTopupModal">
                        Top Up OVO
                    </a>
                </div>
            </div>
        </div>

        <!-- Grab Customer -->
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="rounded-circle bg-warning bg-opacity-10 p-3 me-3">
                            <i class="bi bi-person-check fs-2 text-warning"></i>
                        </div>
                        <h5 class="card-title mb-0">Grab Customer</h5>
                    </div>
                    <a href="#" class="btn btn-warning w-100" data-bs-toggle="modal" data-bs-target="#formTopupModal" aria-expanded="false" aria-controls="formTopupModal">
                        Top Up Grab
                    </a>
                </div>
            </div>
        </div>

        <!-- Grab Driver -->
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="rounded-circle bg-warning bg-opacity-10 p-3 me-3">
                            <i class="bi bi-car-front-fill fs-2 text-warning"></i>
                        </div>
                        <h5 class="card-title mb-0">Grab Driver</h5>
                    </div>
                    <a href="#" class="btn btn-warning w-100" data-bs-toggle="modal" data-bs-target="#formTopupModal" aria-expanded="false" aria-controls="formTopupModal">
                        Top Up Grab Driver
                    </a>
                </div>
            </div>
        </div>

        <!-- LinkAja -->
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="rounded-circle bg-secondary bg-opacity-10 p-3 me-3">
                            <i class="bi bi-link-45deg fs-2 text-secondary"></i>
                        </div>
                        <h5 class="card-title mb-0">LinkAja</h5>
                    </div>
                    <a href="#" class="btn btn-secondary w-100" data-bs-toggle="modal" data-bs-target="#formTopupModal" aria-expanded="false" aria-controls="formTopupModal">
                        Top Up LinkAja
                    </a>
                </div>
            </div>
        </div>

        <!-- Maxim -->
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="rounded-circle bg-dark bg-opacity-10 p-3 me-3">
                            <i class="bi bi-bicycle fs-2 text-dark"></i>
                        </div>
                        <h5 class="card-title mb-0">Maxim</h5>
                    </div>
                    <a href="#" class="btn btn-dark w-100" data-bs-toggle="modal" data-bs-target="#formTopupModal" aria-expanded="false" aria-controls="formTopupModal">
                        Top Up Maxim
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Form Top Up (Collapse) -->
    <div class="modal fade" id="formTopupModal" tabindex="-1" aria-labelledby="formTopupModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="formTopupModalLabel">Top Up E-Wallet</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="phoneNumber" class="form-label">Nomor Telepon</label>
                            <input type="text" class="form-control" id="phoneNumber" placeholder="Masukkan nomor telepon" required>
                        </div>
                        <div class="mb-3">
                            <label for="amount" class="form-label">Nominal Top Up</label>
                            <input type="number" class="form-control" id="amount" placeholder="Masukkan nominal" required>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <button type="submit" class="btn btn-primary">Konfirmasi Top Up</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                Batal
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
