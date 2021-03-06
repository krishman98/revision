<div class="container">
    <a class="logo" href="/">k<span>Man</span></a>

    <img id="mobile-cta" class="mobile-menu" src="storage/images/menu.svg" alt="Open Navigation">
    {{--  {{ print_r(URL('')) }}  --}}
    <nav>
        <img id="mobile-exit" class="mobile-menu-exit" src="{{ url('storage/images/exit.svg') }}" alt="Close Navigation">

        <ul class="primary-nav">
            <li class="{{ request()->is('/') ? 'current' : '' }}"><a href="/">Home</a></li>
            <li class="{{ request()->is('about') ? 'current' : '' }}"><a href="about">Features</a></li>
            <li><a href="#">Pricing</a></li>
        </ul>

        <ul class="secondary-nav">
            <li><a href="contact">Contact</a></li>
            <li class="go-premium-cta"><a href="#">Go Premium</a></li>
        </ul>
    </nav>
</div>
