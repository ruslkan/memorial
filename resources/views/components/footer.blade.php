<footer class="footer"
@if (Voyager::image(setting('site.footer_bg')))
    style="background-image: url({{ Voyager::image(setting('site.footer_bg')) }})"
@else
    style="background-image: url({{ asset('images/header_bg.jpg') }})"
@endif>
    <div class="footer__inner">
        <p class="footer__copyright">Copyright &copy;{{ date('Y') }}</p>
    </div>
</footer>
