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
                    <form action="{{ route('sliders.update', $sliders->id) }}"
                          enctype="multipart/form-data" method="post">

                        <div class="row mb-4">
                            <label for="title-input" class="col-sm-3 col-form-label">Başlık</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                                       value="{{ $sliders->title }}">
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
                                <textarea type="text" class="form-control @error('content') is-invalid @enderror" name="content" id="elm1"
                                > {{ $sliders->content }} </textarea>
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
                                <input type="text" class="form-control @error('url') is-invalid @enderror" name="url" id="url"
                                       value="{{ $sliders->url }}">
                                @error('url')
                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="title" class="col-sm-3 col-form-label">Mevcut Fotoğraf</label>
                            <div class="col-sm-9">
                                <img src="{{ asset($sliders->getFirstMediaUrl('image')) }}" alt=""
                                     class="img-fluid" style="width: 70%; height: 100%; object-fit: cover;">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="formFile" class="col-sm-3 col-form-label">Görsel</label>
                            <div class="col-sm-6">
                                <input class="form-control" type="file" name="image" id="formFile">
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
