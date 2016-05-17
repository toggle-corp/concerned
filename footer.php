    <div id="footer-section" class="section scroll-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div id="footer-menu">
                        <a href="#" class="menu-item">Blog</a>
                        <a href="#" class="menu-item">Gallery</a>
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

        var scrolling = false;
        $(document).bind('mousewheel DOMMouseScroll MozMousePixelScroll', function(event) {
            event.preventDefault();
            if(!scrolling){
                var delta = event.originalEvent.wheelDelta || -event.originalEvent.detail;

                docViewTop = $(window).scrollTop();
                docViewBottom = docViewTop + $(window).height();

                sections = $('.scroll-section');
                sections.sort(function(a,b){
                    return $(a).offset().top > $(b).offset().top;
                });

                currentSectionIndex = 0;
                nextSectionIndex = null;
                for(i = 0; i < sections.length; i++){
                    sectionTop = $(sections[i]).offset().top;
                    sectionBottom = sectionTop + $(sections[i]).height();
                    if((sectionTop >= docViewTop) && (sectionBottom <= docViewBottom)){
                        currentSectionIndex = i;
                    }
                }
                // upward scroll
                if(delta > 0 && currentSectionIndex > 0){
                    nextSectionIndex = currentSectionIndex - 1;
                }
                // downward scroll
                if(delta < 0 && currentSectionIndex < (sections.length-1)){
                    nextSectionIndex = currentSectionIndex + 1;
                }
                if(nextSectionIndex != null){
                    scrolling = true;
                    $('html, body').animate({
                        scrollTop: $(sections[nextSectionIndex]).offset().top
                    }, 200).promise().done(function(){
                        scrolling = false;
                    });
                }
            }
        });
    });

    </script>
</body>
</html>
