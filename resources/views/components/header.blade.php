<header class="header"
@if (Voyager::image(setting('site.header_bg')))
    style="background-image: url({{ Voyager::image(setting('site.header_bg')) }})"
@else
    style="background-image: url({{ asset('images/header_bg.jpg') }})"
@endif>
    <div class="header__inner">
        <h1 class="header__headline">{{ setting('site.title') }}</h1>
            <div class="header__logo">
                <x-logo />
            </div>
        <p class="header__desc">{{ setting('site.description') }}</p>
    </div>
</header>
