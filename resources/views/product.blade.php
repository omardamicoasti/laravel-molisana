@extends("layout.app")

@section("pageTitle", "Products")

@section("content")

    @foreach ($formati as $key => $formato)
        <h1>{{ $key}}</h1>
        <div class="productContainer clearfix">
            @foreach ($formato as $subkey => $pasta)
                <div class="singleProduct relative">
                    <img src="{{ $pasta['src-p'] }}" alt="">
                    <div class="layover">{{ $pasta["titolo"] }}</div>
                </div>    
            @endforeach
        </div>
    @endforeach
     
@endsection

