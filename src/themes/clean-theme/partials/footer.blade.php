<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <ul class="list-inline text-center">
                    @include('theme::partials.socialLink')
                </ul>
                <p class="copyright text-muted">Copyright &copy; {{ cms('site.name') }} {{ date('Y') }}</p>
            </div>
        </div>
    </div>
</footer>
