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

                    <h4 class="card-title">Sliders</h4>
                    <p class="card-title-desc">Sliders Bilgileri </p>
                    <div class="table-responsive">
                        <table id="datatable" class="table table-bordered dt-responsive nowrap w-100">
                            <thead>
                            <tr>
                                <th>Başlık</th>
                                <th>İçerik</th>
                                <th>Fotoğraf</th>
                                <th>Oluşturma Tarihi</th>
                                <th>İşlemler</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sliders as $slider)
                                <tr>
                                    <td>{{ $slider->title }}</td>
                                    <td>{!! $slider->content !!}</td>
                                    <td>
                                        @if($slider->getMedia('image')->isNotEmpty())
                                            <img src="{{ asset($slider->getFirstMediaUrl('image')) }}" alt=""
                                                 class="avatar-sm">
                                        @else
                                            Görsel Mevcut Değil.
                                        @endif
                                    </td>
                                    <td>{{ $slider->created_at }}</td>

                                    <td>
                                        <ul class="list-inline font-size-20 contact-links mb-0">
                                            <li class="list-inline-item px-2">
                                                <a href="{{ route('sliders.edit', $slider->id) }}"
                                                   class="text-warning"><i
                                                        class="bx bx-edit"></i></a>
                                            </li>

                                            <li class="list-inline-item px-2">
                                                <form action="{{ route('sliders.destroy', $slider->id) }}"
                                                      method="POST">
                                                    @csrf
                                                    <button type="submit"
                                                            style="border: 0;background-color: transparent"
                                                            class=""><i class=" text-danger bx bx-trash"></i></button>
                                                </form>
                                            </li>

                                        </ul>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

@endsection

@section('script')
    <!--tinymce js-->
    <script src="{{ asset('/assets/libs/tinymce/tinymce.min.js')}}"></script>

    <!-- init js -->
    <script src="{{ asset('/assets/js/pages/form-editor.init.js')}}"></script>
@endsection
