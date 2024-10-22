@extends('layouts.master')

@section('title')
    Mesajlar
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Anasayfa
        @endslot
        @slot('title')
            Mesajlar
        @endslot
    @endcomponent
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Mesajlar</h4>
                    <p class="card-title-desc">Mesaj Bilgileri </p>
                    <table id="datatable" class="table table-bordered dt-responsive nowrap w-100">
                        <thead>
                        <tr>
                            <th>İsim Soyisim</th>
                            <th>Email</th>
                            <th>Telefon Numarası</th>
                            <th>Mesaj</th>
                            <th>Oluşturma Tarihi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($messages as $message)
                            <tr>
                                <td>{{$message->user}}</td>
                                <td>{{$message->email}}</td>
                                <td>{{$message->phone_number}}</td>
                                <td>{{$message->message}}</td>
                                <td>{{$message->created_at}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

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

