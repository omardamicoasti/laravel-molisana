<style>
    main {
        height: 340vh;
        display: flex;
        flex-wrap:wrap;
    }
</style> 

{{-- @dump($paste) --}}
        
@extends("layout.app")

@section("pageTitle", "Products")

@section("content")
    
    <div class="productContainer">
        @foreach ($paste as $pasta)
            <div class="singleProduct relative">
                <img src="{{ $pasta['src-p'] }}" alt="">
                <div class="layover">{{ $pasta["titolo"] }}</div>
            </div>
        @endforeach
    </div>
        
        
    
@endsection

