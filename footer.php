    <div id="footer-section" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div id="footer-menu">
                        <a href="http://locus.ioe.edu.np/leblog/" class="menu-item">Blog</a>
                        <a href="http://locus.ioe.edu.np/legallery/" class="menu-item">Gallery</a>
                        <a href="#about-section" class="menu-item">About</a>
                        <a href="#services-section" class="menu-item">Services</a>
                        <a href="#members-section" class="menu-item">Members</a>
                    </div>
                </div>
                <div class="col-md-5">
                    <div id="contact-info">
                        <div><i class="fa fa-map-marker"></i>Nursery Chowk, Dhungedhara, Balaju</div>
                        <div><i class="fa fa-phone"></i>+977-01-4881572</div>
                        <div><i class="fa fa-envelope"></i><a href="info@womensconcern.org">info@womensconcern.org</a></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">

                </div>
            </div>
            <div id="footer-wrapper">
                <p>Copyright © Women's Concern 2016. All rights reserved.</p>
                <p>Designed by Toggle Corp.</p>
            </div>
        </div>

    </div>

    <?php wp_footer(); ?>
    <script>
    $(document).ready(function(){
        $(function() {
            $('a[href*="#"]:not([href="#"])').click(function() {
                if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                    if (target.length) {
                        $('html, body').animate({
                            scrollTop: target.offset().top
                        }, 500);
                        return false;
                    }
                }
            });
        });
    });

    </script>
</body>
</html>
