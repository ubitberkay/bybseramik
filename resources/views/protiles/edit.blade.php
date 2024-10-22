@extends('layouts.master')

@section('title')
    Ürün
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Anasayfa
        @endslot
        @slot('title')
            Ürün
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('protiles.update', $protilesUrun->id) }}"
                          enctype="multipart/form-data" method="post">
                        <div class="row mb-4">
                            <label for="parent-input" class="col-sm-3 col-form-label">Boyut Seçiniz</label>
                            <div class="col-sm-9">
                                <select name="boyuts[]" class="form-control" multiple>
                                    @foreach($fakulte as $size)
                                        <option value="{{ $size->id }}"
                                                @if(is_array(old('boyuts', $protilesUrun->boyuts ?? [])) && in_array($size->id, old('boyuts', $protilesUrun->boyuts ?? [])))
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
                                       id="title-input"
                                       value="{{$protilesUrun->name}}">
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
                                       id="title-input"
                                       value="{{$protilesUrun->slug}}">
                                @error('slug')
                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row  mb-4">
                            <label for="image-input" class="col-sm-3 col-form-label">Ürün Açıklaması</label>
                            <div class="col-sm-9">
                                <div class="card">
                                    <textarea class="form-control @error('description') is-invalid @enderror" id="elm1"
                                              name="description"
                                    >{{$protilesUrun->description}}</textarea>
                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="parent-input" class="col-sm-3 col-form-label">Tip Seçiniz</label>
                            <div class="col-sm-9">
                                <select name="types[]" class="form-control" multiple>
                                    @foreach($types as $size)
                                        <option value="{{ $size->id }}"
                                                @if(is_array(old('types', $protilesUrun->types ?? [])) && in_array($size->id, old('types', $protilesUrun->types ?? [])))
                                                    selected
                                            @endif>
                                            {{ $size->title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="title-input" class="col-sm-3 col-form-label">Ürün Rengi</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('color') is-invalid @enderror"
                                       name="color"
                                       id="title-input"
                                       value="{{$protilesUrun->color}}">
                                @error('color')
                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="title" class="col-sm-3 col-form-label">Mevcut Görsel</label>
                            <div class="col-sm-9">
                                <img src="{{ asset($protilesUrun->getFirstMediaUrl('image')) }}" alt=""
                                     class="img-fluid" style="width: 20%; height: 100%; object-fit: cover;">
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
