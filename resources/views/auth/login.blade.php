@extends('layouts.master-without-nav')

@section('title')
    Giriş
@endsection

@section('body')

    <body >
    <div>
        <div class="container-fluid g-0">
            <div class="row g-0">

                <div class="col-xl-9">
                    <video style="position:absolute;object-fit: fill; height: 100%;width: 100%" autoplay="autoplay" loop muted>
                        <source src="{{ URL::asset('/assets/images/1004.mp4') }}" type="video/mp4">
                    </video>

                </div>

                <div class="col-xl-3">
                    <div class="auth-full-page-content p-md-5 p-4">
                        <div class="w-100">

                            <div class="d-flex flex-column h-100">
                                <img src="{{ URL::asset('/assets/images/byb.png')}}" style="display: block; margin: 0 auto; max-width: 75%" >
                                <br>
                                <h4 class="text-center" style="color:#004f9e;font-weight: bold ">BYB Seramik</h4>
                                <div class="my-auto">
                                    <div>
                                        <h5>Hoşgeldin.</h5>
                                        <p class="text-muted">Devam etmek için giriş yap.</p>
                                    </div>

                                    <div class="mt-4">
                                        <form class="form-horizontal" method="POST" action="{{  route('login')}}">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="username" class="form-label">E-posta</label>
                                                <input name="email" type="email"
                                                       class="form-control @error('email') is-invalid @enderror"
                                                       id="username" autocomplete="email" {{--value="admin@ubit.com.tr"--}}
                                                       autofocus>
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Şifre</label>
                                                <div
                                                    class="input-group auth-pass-inputgroup @error('password') is-invalid @enderror">
                                                    <input type="password" name="password"
                                                           class="form-control  @error('password') is-invalid @enderror"
                                                           id="userpassword" aria-label="Password"
                                                           aria-describedby="password-addon" {{--value="Ubit123456."--}}>
                                                    <button class="btn btn-secondary " type="button" id="password-addon"><i
                                                            class="mdi mdi-eye-outline"></i></button>
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="mt-4 d-grid">
                                                @csrf
                                                <button class="btn btn-outline-primary rounded-2" type="submit">Giriş
                                                    Yap
                                                </button>
                                            </div>

                                        </form>
                                    </div>
                                </div>

                                <div class="mt-4 mt-md-5 text-center">
                                    <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> <b style="color: red">Berkay</b><b style="color: black"> Ülkü</b></p>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </div>
    <!-- end account-pages -->
    </body>
@endsection
