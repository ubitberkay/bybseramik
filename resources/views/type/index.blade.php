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
                    <h4 class="card-title">Ürün Tipi</h4>
                    <p class="card-title-desc">Ürün Tiplerini buradan görüntüleyebilirsiniz.</p>
                    <div class="table-responsive">
                        <table id="datatable" class="table table-bordered dt-responsive nowrap w-100">
                            <thead>
                            <tr>
                                <th>Boyut</th>
                                <th>İşlemler</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($type as $isim)
                                <tr>
                                    <td>{{ $isim->title }}</td>
                                    <td>
                                        <ul class="list-inline font-size-20 contact-links mb-0">
                                            <li class="list-inline-item px-2">
                                                <a href="{{ route('type.edit', $isim->id) }}"
                                                   class="text-warning"><i
                                                        class="bx bx-edit"></i></a>
                                            </li>
                                            <li class="list-inline-item px-2">
                                                <form action="{{ route('type.destroy', $isim->id) }}"
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
