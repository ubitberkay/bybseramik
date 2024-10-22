@extends('front.layout.master')
@section('main_content')
    <!-- Contact Section -->
    @foreach($contact_item as $obj)
        <div class="container mt-3 mb-3">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">{!! $obj->map_code !!}</div>
                <div class="col-md-4"></div>
            </div>
        </div>

        <div class="container">
            <div class="row mb-4">
                <div class="col-md-4">
                    <h5 style="color: black; font-weight: bolder" class="text-center"><i
                            class="fa-solid fa-location-dot"></i> Adresimiz</h5>
                    <h6 style="color: black" class="text-center"> {!! $obj->address !!}</h6>
                </div>
                @if($obj->phone_number != "")
                    <div class="col-md-4">
                        <h5 style="color: black; font-weight: bolder" class="text-center"><i
                                class="fa-solid fa-phone"></i>Telefon
                            Numaramız</h5>
                        {!! $obj->phone_number !!}
                    </div>
                @else
                    <div class="col-md-4"></div>
                @endif
                <div class="col-md-4">
                    <h5 style="color: black; font-weight: bolder" class="text-center"><i
                            class="fa-solid fa-envelope"></i> Mail Adresimiz
                    </h5>
                    {!! $obj->mail !!}
                </div>

            </div>
        </div>
    @endforeach
    <div class="container">
        <div class="row ">
            <h1 class="text-center mb-3 mt-3 fw-bold" style="color:black">Bize Ulaşın</h1>
        </div>
        <form action="{{ route('contact_submit') }}" method="post"
              enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label class="form-label">İsminiz*</label>
                        <input type="text" class="form-control" name="user"
                               value="{{ old('user') }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label class="form-label">Mailiniz *</label>
                        <input type="text" class="form-control" name="email"
                               value="{{ old('email') }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label class="form-label">Telefon Numaranız *</label>
                        <input type="text" class="form-control" name="phone_number"
                               value="{{ old('phone_number') }}">
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Mesajınız *</label>
                <textarea name="message" class="form-control h_150">{{ old('message') }}</textarea>
            </div>
            <div class="mb-3">
                <label class="form-label"></label>
                <button type="submit" class="btn btn-dark">Mesaj Gönder</button>
            </div>
        </form>

    </div>
@endsection
