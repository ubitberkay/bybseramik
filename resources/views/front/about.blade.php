@extends('front.layout.master')
@section('main_content')

    <div class="img-fluid">
        <img style="  width: 100%; height: auto;" src="https://i.ibb.co/WnkRqMb/downloaded-Image-13-banner.png" alt="">
    </div>

    <div class="container">
        <div class="row text-center mt-3">
            <h2 class="text-dark">@foreach($about_item as $about_ite)
                    {!! $about_ite->title !!}
                @endforeach</h2>
        </div>
        <div class="row">
            @foreach($about_item as $about_ite)
                {!! $about_ite->content !!}
            @endforeach
        </div>
    </div>

@endsection
