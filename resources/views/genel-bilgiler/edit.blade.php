@extends('layouts.master')

@section('title')
    Genel Bilgiler
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Anasayfa
        @endslot
        @slot('title')
            Genel Bilgiler
        @endslot
    @endcomponent
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Yeni</h4>
                    <form action="{{ route('genelbilgiler.update', $genelBilgiler->id) }}"
                          enctype="multipart/form-data" method="post">
                        <div class="row mb-4">
                            <label for="title-input" class="col-sm-3 col-form-label">Başlık</label>
                            <div class="col-sm-9">
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                                           name="title" id="title-input"
                                           value="{{$genelBilgiler->title}}">
                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row  mb-4">
                            <label for="image-input" class="col-sm-3 col-form-label">İçerik</label>
                            <div class="col-sm-9">
                                <div class="card">
                                    <textarea class="form-control @error('content') is-invalid @enderror" id="elm1"
                                              name="content">{{$genelBilgiler->content}}</textarea>
                                    @error('content')
                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
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
