@extends('front.layout.master')
@section('main_content')
    <style>
        .colorBox {
            width: 20px;
            height: 20px;
            border: 1px solid rgba(0, 0, 0, .2);
        }
    </style>
    <div class="img-fluid">
        <img style="  width: 100%; max-height: 600px;" src="https://i.ibb.co/WnkRqMb/downloaded-Image-13-banner.png"
             alt="">
    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-4">
                <img class="img-fluid" src="{{asset($seramik->getFirstMediaUrl('image'))}}" alt=""></div>
            <div class="col-md-8">
                <div class="row">
                    <h2 class="text-black">Ürün Adı</h2>
                    <p class="display-3">{!! $seramik->name !!}</p>
                </div>
                <div class="row">
                    <h2 class="text-black">Ürün Açıklaması</h2>
                    <p class="display-4">{!! $seramik->description !!}</p>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <h3 class="text-black">Ürün Tipi</h3>
                            @if(!empty($seramik->types) && count($seramik->types) > 0)
                                @foreach($seramik->types as $sizeId)
                                    @php
                                        $size = \App\Models\Type::find($sizeId); // Fetching the size by ID
                                    @endphp

                                    @if($size)
                                        {{ $size->title }}@if (!$loop->last)
                                            ,
                                        @endif
                                    @endif
                                @endforeach
                            @else
                                Ürün Tipi Belirtilmedi
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <h3 class="text-black">Ürün Rengi</h3>
                            <div class="colorBox" style="background: <?php echo $seramik->color ?>; margin-left: 10px"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <h3 class="text-black mt-1">Ürün Boyutları</h3>
                    @if(!empty($seramik->boyuts) && count($seramik->boyuts) > 0)
                        @foreach($seramik->boyuts as $sizeId)
                            @php
                                $size = \App\Models\Boyut::find($sizeId); // Fetching the size by ID
                            @endphp

                            @if($size)
                                {{ $size->title }}@if (!$loop->last)
                                    ,
                                @endif
                            @endif
                        @endforeach
                    @else
                        Ürün Boyutu Belirtilmedi
                    @endif
                </div>
                <div class="row">
                    <h3 class="text-black mt-1">Ürün Tipleri</h3>
                    @if(!empty($types->boyuts) && count($types->boyuts) > 0)
                        @foreach($types->boyuts as $sizeId)
                            @php
                                $size = \App\Models\Type::find($sizeId); // Fetching the size by ID
                            @endphp

                            @if($size)
                                {{ $size->title }}@if (!$loop->last)
                                    ,
                                @endif
                            @endif
                        @endforeach
                    @else
                        Ürün Tipi Belirtilmedi
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
