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
                    <h4 class="card-title">Ürünler</h4>
                    <p class="card-title-desc">Ürünleri buradan görüntüleyebilirsiniz.</p>
                    <div class="table-responsive">
                        <table id="datatable" class="table table-bordered dt-responsive nowrap w-100">
                            <thead>
                            <tr>
                                <th>İsim</th>
                                <th>Açıklama</th>
                                <th>Renk</th>
                                <th>Görsel</th>
                                <th>İşlemler</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($urun as $uye)
                                <tr>
                                    <td>{{ $uye->name }}</td>
                                    <td>{!!$uye->description!!} </td>
                                    <td>{{ $uye->color }}</td>
                                    <td>@if($uye->getMedia('image')->isNotEmpty())
                                            <img src="{{ asset($uye->getFirstMediaUrl('image')) }}" alt=""
                                                 class="avatar-sm">
                                        @else
                                            Görsel Mevcut Değil.
                                        @endif</td>
                                    <td>
                                        <ul class="list-inline font-size-20 contact-links mb-0">
                                            <li class="list-inline-item px-2">
                                                <a href="{{ route('urun.edit', $uye->id) }}"
                                                   class="text-warning"><i
                                                        class="bx bx-edit"></i></a>
                                            </li>
                                            <li class="list-inline-item px-2">
                                                <form action="{{ route('urun.destroy', $uye->id) }}"
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
