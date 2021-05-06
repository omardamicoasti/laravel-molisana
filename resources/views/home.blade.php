<style>
    main {
        height: 150vh;
    }
</style>


@extends("layout.app")

@section("pageTitle", "Home")

@section("content") 
            <img src="{{ asset("img/molisana-home.jpg") }}" alt="La Molisana"> 
@endsection
