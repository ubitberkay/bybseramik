@extends('layouts.master')

@section('title')
    Ürünler
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Anasayfa
        @endslot
        @slot('title')
            Ürünler
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Yeni</h4>
                    <form action="{{ route('urun.store') }}" enctype="multipart/form-data" method="post">
                        <div class="row mb-4">
                            <label for="parent-input" class="col-sm-3 col-form-label">Boyut Seçiniz</label>
                            <div class="col-sm-9">
                                <select name="boyuts[]" class="form-control" multiple>
                                    @foreach($boyut as $size)
                                        <option value="{{ $size->id }}"
                                                @if(is_array(old('boyuts', $urun->boyuts ?? [])) && in_array($size->id, old('boyuts', $urun->boyuts ?? [])))
                                                    selected
                                            @endif>
                                            {{ $size->title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="parent-input" class="col-sm-3 col-form-label">Ürün Tipi Seçiniz</label>
                            <div class="col-sm-9">
                                <select name="types[]" class="form-control" multiple>
                                    @foreach($type as $size)
                                        <option value="{{ $size->id }}"
                                                @if(is_array(old('types', $urun->types ?? [])) && in_array($size->id, old('types', $urun->types ?? [])))
                                                    selected
                                            @endif>
                                            {{ $size->title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="title-input" class="col-sm-3 col-form-label">İsim</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                       id="title-input">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="title-input" class="col-sm-3 col-form-label">Ürün Uzantısı</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug"
                                       id="title-input">
                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="title-input" class="col-sm-3 col-form-label">Açıklama</label>
                            <div class="col-sm-9">
                                <textarea type="text" class="form-control @error('description') is-invalid @enderror" name="description" id="elm1"></textarea>
                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="title-input" class="col-sm-3 col-form-label">Ürün Rengi</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('color') is-invalid @enderror"
                                       name="color" id="title-input">
                                @error('color')
                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                @enderror
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
