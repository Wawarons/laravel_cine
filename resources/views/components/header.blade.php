<header>
    <div id="blur"></div>
    @include('components.navbar')
    <div id="header-content">

        <img id="main-logo" src="{{ asset('assets/images/movie-ticket.svg') }}" alt="logo popcorn">
        <h1 id="header-title">
            @yield('header_title')
        </h1>
        <a href="#" id="button-explorer">Explorer</a>
    </div>

</header>
