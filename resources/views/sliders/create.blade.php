@extends('layouts.master')

@section('title')
    Sliders
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Anasayfa
        @endslot
        @slot('title')
            Sliders
        @endslot
    @endcomponent


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Yeni Slider</h4>

                    <form action="{{ route('sliders.store') }}" enctype="multipart/form-data" method="post">
                        <div class="row mb-4">
                            <label for="title-input" class="col-sm-3 col-form-label">Başlık</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                       name="title" id="title">
                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="title-input" class="col-sm-3 col-form-label">İçerik</label>
                            <div class="col-sm-9">
                                <textarea type="text" class="form-control @error('content') is-invalid @enderror"
                                          name="content" id="elm1"></textarea>
                                @error('content')
                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="title-input" class="col-sm-3 col-form-label">URL</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('url') is-invalid @enderror" name="url"
                                       id="url">
                                @error('url')
                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="formFile" class="col-sm-3 col-form-label">Görsel</label>
                            <div class="col-sm-6">
                                <input class="form-control" type="file" name="image" id="formFile" required>
                            </div>
                            <div class="col-sm-3">
                            </div>
                        </div>

                        <div class="row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    @csrf
                                    <button type="submit" class="btn btn-primary w-md">Kaydet</button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->

        </div> <!-- end col -->

    </div> <!-- end row -->

@endsection

@section('script')
    <!--tinymce js-->
    <script src="{{ asset('/assets/libs/tinymce/tinymce.min.js')}}"></script>

    <!-- init js -->
    <script src="{{ asset('/assets/js/pages/form-editor.init.js')}}"></script>
@endsection
