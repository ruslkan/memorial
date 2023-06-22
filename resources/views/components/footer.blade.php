<footer class="footer"
@if (Voyager::image(setting('site.footer_bg')))
    style="background-image: url({{ Voyager::image(setting('site.footer_bg')) }})"
@else
    style="background-image: url({{ asset('images/header_bg.jpg') }})"
@endif>
    <div class="footer__inner">
        <div class="footer__data-organization">
            <ul class="data-organization__list">
                <li class="data-organization__item">УНП - {{ setting('site.unp_organization') }}</li>
                <li class="data-organization__item">{{ setting('site.address_organization') }}</li>
                <li class="data-organization__item">тел.{{ setting('site.phone_main') }}</li>
                <li class="data-organization__item">тел.{{ setting('site.phone_additional') }}</li>
            </ul>
        </div>
    </div>
    <p class="footer__copyright">Copyright &copy;{{ date('Y') }}</p>
</footer>
