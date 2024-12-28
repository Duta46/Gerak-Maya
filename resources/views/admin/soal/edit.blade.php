@extends('layouts.app')
@section('title', 'Edit Soal')
@section('page-title')
    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
        <h1 class="page-heading d-flex text-dark fw-bold flex-column justify-content-center my-0">
            Edit Soal
        </h1>
    </div>
@endsection
@push('styles')
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush
@section('content')
    <div class="card card-docs flex-row-fluid mb-2">
        <div class="card-body fs-6 text-gray-700">
            <form action="{{ route('soal.update', $soal->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="card-body p-9">
                    <div class="row mb-5">
                        <div class="col-xl-3">
                            <label for="soal" class="fs-6 fw-bold mt-2 mb-3">Soal</label>
                        </div>
                        <div class="col-lg">
                            <textarea name="soal" id="soal" class="form-control" value="{{ $soal->soal }}" placeholder="Input Soal">
@if (old('soal'))
{{ old('soal') }}
@elseif(isset($soal))
{{ $soal->soal }}
@endif
</textarea>
                        </div>
                    </div>

                    <div class="row mb-5">
                        <div class="col-xl-3">
                            <label for="jawaban_a" class="fs-6 fw-bold mt-2 mb-3">Jawaban A</label>
                        </div>
                        <div class="col-lg">
                            <textarea name="jawaban_a" id="jawaban_a" class="form-control" value="{{ $soal->jawaban_a }}" placeholder="Input Soal">
@if (old('jawaban_a'))
{{ old('jawaban_a') }}
@elseif(isset($soal))
{{ $soal->jawaban_a }}
@endif
</textarea>
                        </div>
                    </div>

                    <div class="row mb-5">
                        <div class="col-xl-3">
                            <label for="jawaban_b" class="fs-6 fw-bold mt-2 mb-3">Jawaban B</label>
                        </div>
                        <div class="col-lg">
                            <textarea name="jawaban_b" id="jawaban_b" class="form-control" value="{{ $soal->jawaban_b }}" placeholder="Input Soal">
@if (old('jawaban_b'))
{{ old('jawaban_b') }}
@elseif(isset($soal))
{{ $soal->jawaban_b }}
@endif
</textarea>
                        </div>
                    </div>

                    <div class="row mb-5">
                        <div class="col-xl-3">
                            <label for="jawaban_c" class="fs-6 fw-bold mt-2 mb-3">Jawaban C</label>
                        </div>
                        <div class="col-lg">
                            <textarea name="jawaban_c" id="jawaban_c" class="form-control" value="{{ $soal->jawaban_c }}" placeholder="Input Soal">
@if (old('jawaban_c'))
{{ old('jawaban_c') }}
@elseif(isset($soal))
{{ $soal->jawaban_c }}
@endif
</textarea>
                        </div>
                    </div>

                    <div class="row mb-5">
                        <div class="col-xl-3">
                            <label for="jawaban_d" class="fs-6 fw-bold mt-2 mb-3">Jawaban D</label>
                        </div>
                        <div class="col-lg">
                            <textarea name="jawaban_d" id="jawaban_d" class="form-control" value="{{ $soal->jawaban_d }}" placeholder="Input Soal">
@if (old('jawaban_d'))
{{ old('jawaban_d') }}
@elseif(isset($soal))
{{ $soal->jawaban_d }}
@endif
</textarea>
                        </div>
                    </div>

                    <div class="row mb-5">
                        <div class="col-xl-3">
                            <label for="kunci_jawaban" class="fs-6 fw-bold mt-2 mb-3">Kunci Jawaban</label>
                        </div>
                        <div class="col-lg">
                            <select name="kunci_jawaban" class="form-select @error('kunci_jawaban') is-invalid @enderror"
                                data-control="select2" data-placeholder="Pilih Kunci Jawaban">
                                <option value="" disabled selected>Pilih Kunci Jawaban</option>
                                <option value="A" {{ $soal->kunci_jawaban == 'A' ? 'selected' : '' }}>A
                                </option>
                                <option value="B" {{ $soal->kunci_jawaban == 'B' ? 'selected' : '' }}>B
                                </option>
                                <option value="C" {{ $soal->kunci_jawaban == 'C' ? 'selected' : '' }}>C
                                </option>
                                <option value="D" {{ $soal->kunci_jawaban == 'D' ? 'selected' : '' }}>D
                                </option>
                                <option value="E" {{ $soal->kunci_jawaban == 'E' ? 'selected' : '' }}>E
                                </option>
                            </select>
                            @error('kunci_jawaban')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-5">
                        <div class="col-xl-3">
                            <label for="point_soal" class="fs-6 fw-bold mt-2 mb-3">Point Soal</label>
                        </div>
                        <div class="col-lg">
                            <input type="number" name="point_soal" class="form-control" value="{{ $soal->point_soal }}"
                                placeholder="Input Point Soal" />
                            @error('point_soal')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    {{-- <div class="row mb-5">
                        <div class="col-xl-3">
                            <label for="kategori_id" class="fs-6 fw-bold mt-2 mb-3">Kategori Soal</label>
                        </div>
                        <div class="col-lg">
                            <select name="kategori_id" id="kategori_id" class="form-select" data-control="select2">
                                @foreach ($kategoriSoals as $kategoriSoal)
                                    <option value="{{ $kategoriSoal->id }}"
                                        {{ $kategoriSoal->id == $soal->kategori_id ? 'selected' : '' }}>
                                        {{ $kategoriSoal->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('kategori_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div> --}}

                    {{-- <div class="row mb-5">
                        <div class="col-xl-3">
                            <label for="paket_soal_id" class="fs-6 fw-bold mt-2 mb-3">Paket Soal</label>
                        </div>
                        <div class="col-lg">
                            <select name="paket_soal_id" id="paket_soal_id" class="form-select" data-control="select2">
                                @foreach ($paketSoal as $paket)
                                    <option value="{{ $paket->id }}"
                                        {{ $paket->id == $soal->paket_soal_id ? 'selected' : '' }}>
                                        {{ $paket->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('paket_soal_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div> --}}

                </div>
                <div class="card-footer d-flex justify-content-end py-6 px-9">
                    <a href="{{ route('soal.index') }}" type="reset"
                        class="btn btn-light btn-active-light-primary me-2">Batalkan</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    {{-- <script src="/js/tinymce/tinymce.min.js"></script> --}}

    <script>
        function initTinyMCE(selector) {
            tinymce.init({
                selector: selector,
                forced_root_block: 'p',
                force_br_newlines: true,
                formats: {
                    underline: {
                        inline: 'u'
                    } // Mengizinkan garis bawah
                }
            });
        }
        initTinyMCE('textarea#soal');
        initTinyMCE('textarea#jawaban_a');
        initTinyMCE('textarea#jawaban_b');
        initTinyMCE('textarea#jawaban_c');
        initTinyMCE('textarea#jawaban_d');
    </script>

    {{-- <script>
        function initTinyMCE(selector) {
            tinymce.init({
                selector: selector,
                forced_root_block: 'p',
                force_br_newlines: true,
                formats: {
                    underline: {
                        inline: 'u'
                    } // Mengizinkan garis bawah
                }
            });
        }
        initTinyMCE('textarea#konten_bacaan_teks');
    </script> --}}

    {{-- <script>
        //answer_a
        $(document).ready(function() {
            $('input[type="radio"][name="answer_a_type"]').change(function() {
                if ($(this).val() === "text") {
                    $('#answer_a').show();
                    $('#imageAnswerA').hide();
                    $('#file_input_image_answer_a').hide();
                    $('#image-answer-a').hide();
                    $('#delete-button-a').hide();
                    $('#keterangan-no-image-a').hide();
                } else if ($(this).val() === "image") {
                    $('#answer_a').hide();
                    $('#imageAnswerA').show();
                    $('#file_input_image_answer_a').show();
                    $('#image-answer-a').show();
                    $('#delete-button-a').show();
                    $('#keterangan-no-image-a').show();
                }
            });
        });

        //answer_b
        $(document).ready(function() {
            $('input[type="radio"][name="answer_b_type"]').change(function() {
                if ($(this).val() === "text") {
                    $('#answer_b').show();
                    $('#imageAnswerB').hide();
                    $('#file_input_image_answer_b').hide();
                    $('#image-answer-b').hide();
                    $('#delete-button-b').hide();
                    $('#keterangan-no-image-b').hide();
                } else if ($(this).val() === "image") {
                    $('#answer_b').hide();
                    $('#imageAnswerB').show();
                    $('#file_input_image_answer_b').show();
                    $('#image-answer-b').show();
                    $('#delete-button-b').show();
                    $('#keterangan-no-image-b').show();
                }
            });
        });

        //answer_c
        $(document).ready(function() {
            $('input[type="radio"][name="answer_c_type"]').change(function() {
                if ($(this).val() === "text") {
                    $('#answer_c').show();
                    $('#imageAnswerC').hide();
                    $('#file_input_image_answer_c').hide();
                    $('#image-answer-c').hide();
                    $('#delete-button-c').hide();
                    $('#keterangan-no-image-c').hide();
                } else if ($(this).val() === "image") {
                    $('#answer_c').hide();
                    $('#imageAnswerC').show();
                    $('#file_input_image_answer_c').show();
                    $('#image-answer-c').show();
                    $('#delete-button-c').show();
                    $('#keterangan-no-image-c').show();
                }
            });
        });

        //answer_d
        $(document).ready(function() {
            $('input[type="radio"][name="answer_d_type"]').change(function() {
                if ($(this).val() === "text") {
                    $('#answer_d').show();
                    $('#imageAnswerD').hide();
                    $('#file_input_image_answer_d').hide();
                    $('#image-answer-d').hide();
                    $('#delete-button-d').hide();
                    $('#keterangan-no-image-d').hide();

                } else if ($(this).val() === "image") {
                    $('#answer_d').hide();
                    $('#imageAnswerD').show();
                    $('#file_input_image_answer_d').show();
                    $('#image-answer-d').show();
                    $('#delete-button-d').show();
                    $('#keterangan-no-image-d').show();
                }
            });
        });

        //answer_e
        $(document).ready(function() {
            $('input[type="radio"][name="answer_e_type"]').change(function() {
                if ($(this).val() === "text") {
                    $('#answer_e').show();
                    $('#imageAnswerE').hide();
                    $('#file_input_image_answer_e').hide();
                    $('#image-answer-e').hide();
                    $('#delete-button-e').hide();
                    $('#keterangan-no-image-e').hide();

                } else if ($(this).val() === "image") {
                    $('#answer_e').hide();
                    $('#imageAnswerE').show();
                    $('#file_input_image_answer_e').show();
                    $('#image-answer-e').show();
                    $('#delete-button-e').show();
                    $('#keterangan-no-image-e').show();
                }
            });
        });
    </script> --}}
@endpush
