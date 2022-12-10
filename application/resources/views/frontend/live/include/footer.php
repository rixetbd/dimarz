
                </div>
            </div>

            <div class="aside right_aside_root">
                <div class="right_aside p-4">
                    <div class="service_right_box">
                        <h5>Our most trending services</h5>
                        <div class="search_grp">
                            <i class="fas fa-search"></i>
                            <input type="text" class="search_box" placeholder="Search Service">
                        </div>
                        <ul>
                            <li><a href="#"><i class="fas fa-square me-2"></i> <span>B2B Lead Generation</span></a></li>
                            <li><a href="#"><i class="fas fa-square me-2"></i> <span>B2C Lead Generation</span></a></li>
                            <li><a href="#"><i class="fas fa-square me-2"></i> <span>On Page SEO</span></a></li>
                            <li><a href="#"><i class="fas fa-square me-2"></i> <span>OFF Page SEO</span></a></li>
                            <li><a href="#"><i class="fas fa-square me-2"></i> <span>WordPress Development</span></a>
                            </li>
                            <li><a href="#"><i class="fas fa-square me-2"></i> <span>Web Application
                                        Development</span></a></li>
                            <li><a href="#"><i class="fas fa-square me-2"></i> <span>OFF Page SEO</span></a></li>
                            <li><a href="#"><i class="fas fa-square me-2"></i> <span>WordPress Development</span></a>
                            </li>
                            <li><a href="#"><i class="fas fa-square me-2"></i> <span>Web Application
                                        Development</span></a></li>
                            <li><a href="#"><i class="fas fa-square me-2"></i> <span>B2B Lead Generation</span></a></li>
                            <li><a href="#"><i class="fas fa-square me-2"></i> <span>B2C Lead Generation</span></a></li>
                            <li><a href="#"><i class="fas fa-square me-2"></i> <span>On Page SEO</span></a></li>
                            <li><a href="#"><i class="fas fa-square me-2"></i> <span>OFF Page SEO</span></a></li>
                            <li><a href="#"><i class="fas fa-square me-2"></i> <span>WordPress Development</span></a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-square me-2"></i>
                                    <span>Web Application Development</span>
                                </a>
                            </li>
                            <li><a href="#"><i class="fas fa-square me-2"></i> OFF Page SEO</a></li>
                            <li><a href="#"><i class="fas fa-square me-2"></i> WordPress Development</a></li>
                            <li><a href="#"><i class="fas fa-square me-2"></i> Web Application Development</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/js/all.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/jquery-3.6.1.min.js"></script>
    <script src="../js/mainscript.js"></script>
    <script src="../js/onscroll.js"></script>

    <script>
        var getSidebar = document.querySelector('nav');
        var getToggle = document.getElementsByClassName('toggle');
        for (var i = 0; i <= getToggle.length; i++) {
            getToggle[i].addEventListener('click', function () {
                getSidebar.classList.toggle('active');
            });
        }
    </script>

    <script>
        $(window).on('scroll', function () {

            var windowScroll = $(window).scrollTop();
            var topScroll = $('.service_info_left').offset().top;
            var service_info_left = $('.service_info_left').offset().top - 750;

            var service_info_left_data = $('.service_info_left').data('index');

            if (windowScroll > service_info_left) {
                $('.service_info_left').addClass('opacity_100');
            } else {
                $('.service_info_left').removeClass('opacity_100');
            }
        });



        // for (let i = 0; i < array.length; i++) {
        //     const element = array[i];

        // }
    </script>

    <script>
        const typedTextSpan = document.querySelector(".typed-text");
        const cursorSpan = document.querySelector(".cursor");

        const textArray = ["Digital marketing", "Data entry", "Web Development", "Graphics Design"];
        const typingDelay = 50;
        const erasingDelay = 50;
        const newTextDelay = 2000; // Delay between current and next text
        let textArrayIndex = 0;
        let charIndex = 0;

        function type() {
            if (charIndex < textArray[textArrayIndex].length) {
                if (!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
                typedTextSpan.textContent += textArray[textArrayIndex].charAt(charIndex);
                charIndex++;
                setTimeout(type, typingDelay);
            } else {
                cursorSpan.classList.remove("typing");
                setTimeout(erase, newTextDelay);
            }
        }

        function erase() {
            if (charIndex > 0) {
                if (!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
                typedTextSpan.textContent = textArray[textArrayIndex].substring(0, charIndex - 1);
                charIndex--;
                setTimeout(erase, erasingDelay);
            } else {
                cursorSpan.classList.remove("typing");
                textArrayIndex++;
                if (textArrayIndex >= textArray.length) textArrayIndex = 0;
                setTimeout(type, typingDelay + 1100);
            }
        }

        document.addEventListener("DOMContentLoaded", function () { // On DOM Load initiate the effect
            if (textArray.length) setTimeout(type, newTextDelay + 50);
        });
    </script>


</body>

</html>