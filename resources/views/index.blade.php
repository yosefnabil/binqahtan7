<!DOCTYPE html>
    <html lang="at" dir="rtl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shortcut icon" href="assets/img/logo-removebg-preview.png" type="image/png">

        <!--=============== REMIXICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

        <!--=============== SWIPER CSS ===============-->
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="css/styles.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">


        <title>شركة الطيف الخليجي المحدودة القابضة</title>
    </head>
    <body>
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">شركة الطيف الخليجي المحدودة القابضة</a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">الرئيسية</a>
                        </li>
                        <li class="nav__item">
                            <a href="#company" class="nav__link">عن الشركة</a>
                        </li>
                          <li class="nav__item">
                            <a href="#ex" class="nav__link">خبرتنا</a>
                        </li>
                    </li>
                    <li class="nav__item">
                      <a href="{{route('new-account')}}" class="nav__link">فتح حساب توريد</a>
                  </li>
                          <li class="nav__item">
                            <a href="#about" class="nav__link">تواصل معنا</a>
                        </li>

                    </ul>

                    <div class="nav__dark">
                        <!-- Theme change button -->
                        <span class="change-theme-name">الوضع المضلم</span>
                        <i class="ri-moon-line change-theme" id="theme-button"></i>
                    </div>

                    <i class="ri-close-line nav__close" id="nav-close"></i>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-function-line"></i>
                </div>
            </nav>
        </header>

        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home" id="home">
                <img src="assets/img/ancc.jpg" alt="" class="home__img">

                <div class="home__container container grid">
                    <div class="home__data">
                        <span class="home__data-subtitle">شركة</span>
                        <h1 class="home__data-title">شركة الطيف الخليجي المحدودة القابضة</h1>
                        <a href="#company" class="button">ابداء تصفح موقعنا</a>

                    </div>

                    <div class="home__social">
                        <a href="https://www.facebook.com/gulfspecturm" target="_blank" class="home__social-link">
                            <i class="ri-facebook-box-fill"></i>
                        </a>
                        <a href="https://www.instagram.com/gulfspecturm" target="_blank" class="home__social-link">
                            <i class="ri-instagram-fill"></i>
                        </a>
                        <a href="https://twitter.com/gulfspecturm" target="_blank" class="home__social-link">
                            <i class="ri-twitter-fill"></i>
                        </a>
                         <a href="https://whatsapp.com/gulfspecturm" target="_blank" class="home__social-link">
                            <i class="ri-snapchat-fill"></i>
                        </a>
                    </div>


                </div>
            </section>

            <!--==================== ABOUT ====================-->
            <section class="about section" id="company">
                <div class="about__container container grid">
                      <div class="about__img">

                        <div class="about__img-overlay">
                            <img src="assets/img/logo-removebg-preview.png" alt="" class="about__img-two" width="10%" height="10%">
                        </div>
                    </div>
                    <div class="about__data">
                        <h2 class="section__title about__title">عن الشركة <br> </h2>
                        <p class="about__description">
                            بدأ مشوارنا عام 1976 كمؤسسة ومن ثم شركة تختص بأعمال الإنشاء والمقاولات المختلفة. وبالإرادة الصلبة والسعي الدائم نحو الأفضل استطعنا احتلال مكانة مميزة في مجالنا وإثبات نجاحنا مع كل مشروع جديد. ومع تقدم اقتصاد المملكة وازدهار قطاع الإنشاء أكثر فأكثر فقد أخذنا على عاتقنا مهمة مواكبة هذا التقدم باستخدام أحدث الآليات والمعدات وبتوظيف نخبة من ذوي الكفاءات الهندسية والفنية والإدارية.
                        </p>
                     <!--  <a href="assets/GulfStakesProfileAR.pdf" target="_blank" class="button">الملف التعريفي</a> -->

                    </div>


                </div>
            </section>



                <!--==================== ABOUT ====================-->
            <section class="about section" id="ex">
                <div class="about__container container grid">
                    <div class="about__data">
                        <h2 class="section__title about__title">خبرتنا <br> </h2>
                        <p class="about__description">
                           لدينا خبرة واسعة تشمل مشاريع مختلفة في مجالات عديدة، ومنها: البنى التحتية والطرق والمؤسسات التعليمية والمباني السكنية والتجارية والأعمال الكهربائية والميكانيكية وشبكات المياه والصرف الصحي ومحطات معالجة المياه والمشاريع العسكرية والحدائق وتطوير المدن.
                        </p>


                    </div>

                    <div class="about__img">
                        <div class="about__img-overlay">
                            <img src="assets/img/" alt="" class="about__img-one">
                        </div>

                        <div class="about__img-overlay">

                        </div>
                    </div>
                </div>
            </section>







            <!--==================== VIDEO ====================-->
            <section class="video section" id="ex">


                <div class="video__container container">
                    <p class="video__description">
                    </p>

                    <div class="video__content" style="visibility: hidden;">
                        <video id="video-file" style="visibility: hidden;">

                        </video>

                        <button class="button button--flex video__button" id="video-button" style="visibility: hidden;">
                            <i class="ri-play-line video__button-icon" id="video-icon"></i>
                        </button>
                    </div>
                </div>
            </section>

            <!--==================== PLACES ====================-->

            <!--==================== SUBSCRIBE ====================-->
            <section class="subscribe section" id="about">
                <div class="subscribe__bg" >
                    <div class="subscribe__container container">
                        <h2 class="section__title subscribe__title"><br> تواصل معنا</h2>
                        <h3 style="text-align: center;"><span>العنوان:</span>G54M+245، طريق المدينة المنورة، الشرفية، جدة 22234</h3>
                        <h3 style="text-align: center;"><span> البريد الالكتروني:</span>  info@gulfspecturm.sa</h3>


                    </div>
                </div>
            </section>

            <!--==================== SPONSORS ====================-->

        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div class="footer__content grid">
                    <div class="footer__data">
                        <h3 class="footer__title">شركة الطيف الخليجي المحدودة القابضة</h3>
                        <p class="footer__description">عازمون <br> ومتميزون
                        </p>
                        <div>
                            <a href="https://www.facebook.com/" target="_blank" class="footer__social">
                                <i class="ri-facebook-box-fill"></i>
                            </a>
                            <a href="https://twitter.com/" target="_blank" class="footer__social">
                                <i class="ri-twitter-fill"></i>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank" class="footer__social">
                                <i class="ri-instagram-fill"></i>
                            </a>
                            <a href="https://www.whatsapp.com/" target="_blank" class="footer__social">
                                <i class="ri-whatsapp-fill"></i>
                            </a>
                        </div>
                    </div>

                    <div class="footer__data">
                        <h3 class="footer__subtitle">حول</h3>
                        <ul>
                            <li class="footer__item">
                                <a href="" class="footer__link">حول الصفحة</a>
                            </li>


                        </ul>
                    </div>



                    <div class="footer__data">
                        <h3 class="footer__subtitle">الدعم</h3>
                        <ul>
                            <li class="footer__item">
                                <a href="" class="footer__link">الاسئلة الشائعة</a>
                            </li>

                            <li class="footer__item">
                                <a href="" class="footer__link">تواصل معنا</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="footer__rights">
                    <p class="footer__copy">جميع الحقوق محفوظة لشركة الطيف الخليجي المحدودة القابضة </p>
                    <div class="footer__terms">
                        <a href="#" class="footer__terms-link">الشروط والاتفاقيات</a>
                        <a href="#" class="footer__terms-link">سياسة الخصوصية</a>
                    </div>
                </div>
            </div>
        </footer>

         <!--========== SCROLL UP ==========-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class="ri-arrow-up-line scrollup__icon"></i>
        </a>

        <!--=============== SCROLL REVEAL===============-->
        <script src="assets/js/scrollreveal.min.js"></script>

        <!--=============== SWIPER JS ===============-->
        <script src="assets/js/swiper-bundle.min.js"></script>

        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>
        <script src="//code.tidio.co/fnd2oezpif9ezmlyyihdegiai9ruuyka.js" async></script>
    </body>
</html>
