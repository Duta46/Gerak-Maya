@extends('layouts.app')

@section('title', 'Soal Detail')

@section('page-title')
    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
        <h1 class="page-heading d-flex text-dark fw-bold flex-column justify-content-center my-0">
            Soal Detail
        </h1>
    </div>
@endsection

@section('content')
    <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
        <div class="card-header cursor-pointer">
            <div class="card-title m-0">
                <h3 class="fw-bold m-0">Soal Details</h3>
            </div>
            <a href="{{ route('soal.edit', $soal) }}" class="btn btn-primary align-self-center">
                Edit
            </a>
        </div>
        <div class="card-body p-9">
            <div class="row mb-7">
                <label class="col-lg-4 fw-semibold text-muted">Soal</label>
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-gray-800">{!! $soal->soal !!}</span>
                </div>
            </div>

            <div class="row mb-7">
                <label class="col-lg-4 fw-semibold text-muted">Jawaban A</label>
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-gray-800">{!! $soal->jawaban_a !!}</span>
                </div>
            </div>

            <div class="row mb-7">
                <label class="col-lg-4 fw-semibold text-muted">Jawaban B</label>
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-gray-800">{!! $soal->jawaban_b !!}</span>
                </div>
            </div>

            <div class="row mb-7">
                <label class="col-lg-4 fw-semibold text-muted">Jawaban C</label>
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-gray-800">{!! $soal->jawaban_c !!}</span>
                </div>
            </div>

            <div class="row mb-7">
                <label class="col-lg-4 fw-semibold text-muted">Jawaban D</label>
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-gray-800">{!! $soal->jawaban_d !!}</span>
                </div>
            </div>

            <div class="row mb-7">
                <label class="col-lg-4 fw-semibold text-muted">Kunci Jawaban</label>
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-gray-800">{{ $soal->kunci_jawaban }}</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-semibold text-muted">Point Soal</label>
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-gray-800">{{ $soal->point_soal }}</span>
                </div>
            </div>
        </div>
    @endsection
