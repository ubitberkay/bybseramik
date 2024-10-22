@extends('layouts.master')

@section('title')
    İletişim
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Anasayfa
        @endslot
        @slot('title')
            İletişim
        @endslot
    @endcomponent
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('iletisim_info.update', $iletisimInfo->id) }}" enctype="multipart/form-data"
                          method="post">
                        <div class="row mb-4">
                            <label for="title-input" class="col-sm-3 col-form-label">Harita</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('map_code') is-invalid @enderror"
                                       name="map_code" id="title-input"
                                       value="{{$iletisimInfo->map_code}}">
                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="title-input" class="col-sm-3 col-form-label">Adres</label>
                            <div class="col-sm-9">
                                <textarea type="text" class="form-control @error('address') is-invalid @enderror"
                                          name="address" id="elm2">{{$iletisimInfo->address}}</textarea>
                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="title-input" class="col-sm-3 col-form-label">Telefon</label>
                            <div class="col-sm-9">
                                <textarea type="text" class="form-control @error('phone_number') is-invalid @enderror"
                                          name="phone_number" id="elm3">{{$iletisimInfo->phone_number}}</textarea>
                                @error('phone_number')
                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="title-input" class="col-sm-3 col-form-label">Mail</label>
                            <div class="col-sm-9">
                                <textarea type="text" class="form-control @error('mail') is-invalid @enderror"
                                          name="mail" id="elm4">{{$iletisimInfo->mail}}</textarea>
                                @error('mail')
                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    @csrf
                                    <button type="submit" class="btn btn-primary w-md">Güncelle</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <!--tinymce js-->
    <script src="{{ asset('/assets/libs/tinymce/tinymce.min.js')}}"></script>

    <!-- init js -->
    <script src="{{ asset('/assets/js/pages/form-editor.init.js')}}"></script>
@endsection
