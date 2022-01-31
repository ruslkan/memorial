<header class="header" style="background-image: url({{ Voyager::image(setting('site.header_bg')) }})">
    <div class="header__inner">
        <h1 class="header__headline">{{ setting('site.title') }}</h1>
            <div class="header__logo">
                <x-logo />
            </div>
        <p class="header__desc">{{ setting('site.description') }}</p>
    </div>
</header>
