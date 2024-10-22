@extends('layouts.master')

@section('title')
    Anasayfa
@endsection

@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Dashboard</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mini-stats-wid">
                            <a href="{{route('sliders.index')}}">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <p class="text-muted fw-medium">Sliders</p>
                                            <h4 class="mb-0">{{$slider}}</h4>
                                        </div>

                                        <div class="flex-shrink-0 align-self-center">
                                            <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                                            <span class="avatar-title">
                                                                <i class="bx bx-copy-alt font-size-24"></i>
                                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mini-stats-wid">
                            <a href="{{route('urun.index')}}">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <p class="text-muted fw-medium">Ürünler</p>
                                            <h4 class="mb-0">{{$urun}}</h4>
                                        </div>

                                        <div class="flex-shrink-0 align-self-center ">
                                            <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                            <span class="avatar-title rounded-circle bg-primary">
                                                                <i class="bx bx-group font-size-24"></i>
                                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mini-stats-wid">
                            <a href="{{route('protiles.index')}}">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <p class="text-muted fw-medium">Protiles Ürünler</p>
                                            <h4 class="mb-0">{{$protiles}}</h4>
                                        </div>

                                        <div class="flex-shrink-0 align-self-center ">
                                            <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                            <span class="avatar-title rounded-circle bg-primary">
                                                                <i class="bx bx-group font-size-24"></i>
                                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Son Mesajlar</h4>
                                <div class="table-responsive">
                                    <table class="table align-middle table-nowrap mb-0">
                                        <thead class="table-light">
                                        <tr>
                                            <th class="align-middle">İsim Soyisim</th>
                                            <th class="align-middle">Email</th>
                                            <th class="align-middle">Telefon Numarası</th>
                                            <th class="align-middle">Mesaj</th>
                                            <th class="align-middle">Tarih</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($messages as $message)
                                            <tr>
                                                <td>{{ $message->user }}</td>
                                                <td>{{$message->email}}</td>
                                                <td>{{$message->phone_number}}</td>
                                                <td>{{$message->message}}</td>
                                                <td>{{\Carbon\Carbon::parse($message->created_at)->format('d/m/y H:i')}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('messages.index') }}" class="btn btn-primary btn-sm btn-rounded waves-effect">
                                Tüm Mesajları Görüntüle
                            </a>
                        </div>
                    </div>
            </div>
            <!-- end row -->

            </div>
@endsection
