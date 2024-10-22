@extends('layouts.master')

@section('title')
    Ürün Tipi
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Anasayfa
        @endslot
        @slot('title')
            Ürün Tipi
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('type.update', $type->id) }}"
                          enctype="multipart/form-data" method="post">
                        <div class="row mb-4">
                            <label for="title-input" class="col-sm-3 col-form-label">Ürün Tipi</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                       name="title" id="title-input"
                                       value="{{$type->title}}">
                                @error('title')
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
