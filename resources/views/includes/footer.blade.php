    <div class="try">
        <div class="try-text">
            Isn't it time you transformed your business?
        </div>
        <div class="button">
            <a class="btn btn-try" href="/about#formSubmitTitle">
              <span>Try now</span>
            </a>
        </div>
    </div>

    <footer>
        <div class="footer">
            <div class="footer-container">
                <div class="footer-logo">
                    <a href="/">
                        <img loading="lazy" src="{{ asset('assets/img/logo-footer.svg') }}" alt="">
                    </a>
                </div>
                <div class="footer-link">
                    <div class="col-md-4">
                        <a href="{{ route('footer_page_1') }}">License Agreement Enterprise</a> 
                        <a href="{{ route('footer_page_2') }}">License Agreement SaaS</a> 
                    </div>

                    <div class="col-md-3">
                        <a href="{{ route('footer_page_4') }}">Privacy Policy</a> 
                        <a href="#">For Ukraine</a> 
                    </div>
                    
                    <div class="col-md-3">
                        <a href="https://support.datatile.eu/kb/en">Help Center</a> 
                        <a href="{{ route('footer_page_3') }}">Cookie List</a> 
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-after">
            <div class="date order-2">
                © <?php echo date("Y");?> DataTile Ltd.
            </div>
            <div class="footer-contact order-1">
                <div class="footer-contact-img">
                    <img loading="lazy" src="{{ asset('assets/img/map.svg') }}" alt="">
                </div>
                <div class="footer-contact-text">
                    195-197 Chr. Chatzipavlou Avenue,
                    4th Floor
                    Limassol 3036, Cyprus
                </div>
            </div>
            <div class="mail order-3">
                <a href="mailto:info@datatile.eu">
                info@datatile.eu
                </a>
            </div>
        </div>
    </footer>
