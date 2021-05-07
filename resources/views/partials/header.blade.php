<header>
    <div><img src="{{ asset("img/logo.png") }}" alt=""></div>
    
    <ul>
        <li>
            <a href="{{ route("home-page") }}"
            class="{{ (Request::route()->getName() == 'home-page') ? "active" : '' }}">
            home</a>
        </li>
        <li>
            <a href="{{ route("product-page") }}"
            class="{{ (Request::route()->getName() == 'product-page') ? "active" : '' }}">
            product</a>
        </li>
        <li>
            <a href="{{ route("news-page") }}"
            class="{{ (Request::route()->getName() == 'news-page') ? "active" : '' }}">
            news</a>
        </li>
    </ul>

</header>

