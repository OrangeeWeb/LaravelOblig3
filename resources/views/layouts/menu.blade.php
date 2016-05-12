<nav class="paper-navbar active" id="navbar">
    <ul class="col-8 col-m-10 col--center">
        <li class="paper-navbar__item paper-navbar__burger paper-color-1" id="menu-toggle"><a href="#">Menu</a></li>
        <li class="paper-navbar__item paper-navbar__item--logo"><a href="/">G &amp; G</a></li>
        <li class="paper-navbar__item"><a href="{{ url('/category') }}">Categories</a>
            <ul class="col-8 col-m-10 col--center">
                @foreach($tags as $tag)
                    <li class="paper-navbar__item"><a href="{{ url('/category', $tag->slug) }}">{{$tag->name}} ({{$tag->items->count()}})</a></li>
                @endforeach
            </ul>
        </li>
        <li class="paper-navbar__item"><a href="{{ url('/items') }}">Find</a></li>
        <li class="paper-navbar__item"><a href="{{ url('/items/create') }}">Add Item</a></li>
        <li class="paper-navbar__item"><a href="{{ url('/login') }}">Login</a></li>
        <li class="paper-navbar__item"><a href="{{ url('/register') }}">Register</a></li>
    </ul>
</nav>