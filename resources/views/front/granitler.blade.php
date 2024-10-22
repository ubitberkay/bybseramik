@extends('front.layout.master')
@section('main_content')
    <div class="container mb-3 mt-3">
        <div class="row text-center">
            <h3 class="text-dark fw-bold">Teknik Granit Ürünlerimiz</h3>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <form action="{{ route('granitler') }}" method="get">
                    <h5 class="text-dark font-weight-600">Ürün Arama</h5>
                    <div class="box">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="name">Ürün Adı</label>
                                <input type="text" name="name" class="form-control" placeholder=""
                                       value="{{ $form_name }}">
                            </div>
                        </div>
                    </div>
                    <div class="widget">
                        <h5 class="text-dark font-weight-600 mt-2">Boyut ile Ara</h5>
                        <div class="box">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="size" class="form-label">Boyut</label>
                                    <select id="size" name="size" class="form-select">
                                        <option value="">Tümünü Göster</option>
                                        @foreach($sizes as $size)
                                            <option
                                                value="{{ $size->id }}" {{ request('size') == $size->id ? 'selected' : '' }}>
                                                {{ $size->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget">
                        <h5 class="text-dark font-weight-600 mt-2">Ürün Tipi ile Ara</h5>
                        <div class="box">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="size" class="form-label">Ürün Tipi</label>
                                    <select id="size" name="size" class="form-select">
                                        <option value="">Tümünü Göster</option>
                                        @foreach($types as $size)
                                            <option value="{{ $size->id }}" {{ request('size') == $size->id ? 'selected' : '' }}>
                                                {{ $size->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="filter-button mt-3">
                        <button class="btn btn-dark">Arama</button>
                    </div>
                </form>
            </div>

            <div class="col-lg-8 col-md-6 ">
                <div class="row">
                    @foreach($products as $product)
                        <div class="card mb-2" style="width: 18rem; margin: 2px">
                            <img class="card-img-top mt-1" src="{{asset($product->getFirstMediaUrl('image'))}}"
                                 alt="Fotoğraf Bulunamadı">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{!! $product->name !!}</h5>
                                <p class="card-text">{!! $product->description !!}</p>
                                Ürün Boyutları :
                                @if($product->boyuts && count($product->boyuts) > 0)
                                    <!-- Check if sizes exist -->
                                    @foreach($product->boyuts as $size)
                                        {{ $size['title'] }}@if (!$loop->last)
                                            ,
                                        @endif <!-- Display size title with comma if not last -->
                                    @endforeach
                                @else
                                    Ürün Boyutu Belirtilmedi
                                @endif
                                <br/> Ürün Tipleri :
                                @if($product->types && count($product->types) > 0)
                                    <!-- Check if sizes exist -->
                                    @foreach($product->types as $size)
                                        {{ $size['title'] }}@if (!$loop->last)
                                            ,
                                        @endif <!-- Display size title with comma if not last -->
                                    @endforeach
                                @else
                                    Ürün Tipi Belirtilmedi
                                @endif
                                <a href="{{route('granit',$product->id)}}"
                                   class="btn btn-dark mt-3">Detaya Git</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-end">
                    {{ $products->appends($_GET)->links() }}
                </div>
            </div>
        </div>
    </div>

    <style>
        .pagination .page-link {
            color: black;
            background-color: white;
            border-color: #dee2e6;
        }

        .pagination .page-link:hover {
            color: black;
            background-color: #f8f9fa;
            border-color: #dee2e6;
        }

        .pagination .page-item.active .page-link {
            color: white;
            background-color: black;
            border-color: black;
        }

        .pagination .page-item.disabled .page-link {
            color: #6c757d;
            background-color: white;
            border-color: #dee2e6;
        }
    </style>
@endsection
