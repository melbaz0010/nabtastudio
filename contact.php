<?php include 'php/sentMail.php';?>

<!DOCTYPE html>
<html dir="rtl" lang="ar">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Free Web tutorials">
        <meta name="keywords" content="E-Learning, Motion Graphic, 2D Animation">
        <meta name="author" content="Nabta Studio">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="images/favicon.png"/>
        <title>أستوديو نبتة</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main-contact.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="css/all.min.css">
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <script type="text/javascript">
             var onloadCallback = function() {
                alert("grecaptcha is ready!");
            };
        </script>
    </head>
    <body>
        <!-- Start Header -->
        <div class="header" id="header">
            <div class="container">
                
                <a href="index.html" class="logo"><img src="images/logo.png" height="100px" alt="Nabta Studio"></a>
                <ul class="navigaion-cta">
                    <li><a href="index.html">الرئيسية</a></li>
                    <li><a href="#">حلقات ومقالات</a></li>
                    <li><a href="#">تطبيقات و ألعاب</a></li>
                    <li><a href="e_learning-page.html" style="color: #ff5370;">التعليم الإلكتروني</a></li>
                    <li>
                        <a href="#">خدماتنا</a>
                        <!-- Start Megamenu -->
                        <div class="mega-menu">
                            <div class="image">
                                <img src="images/megamenu.png" alt="megamenu">
                            </div>
                            <ul class="links">
                                <li>
                                    <a href="#"></i>حلقات و مقالات</a>
                                </li>
                                <li>
                                    <a href="#"></i>تطبيقات و ألعاب</a>
                                </li>
                                <li>
                                    <a href="#"></i>التربية التفاعلية</a>
                                </li>
                                <li>
                                    <a href="e_learning-page.html" style="color: #ff5370;"></i>التعليم الإلكتروني</a>
                                </li>
                                <li>
                                    <a href="#" style="color: #ff5370;"></i>كيف تدعمنا</a>
                                </li>
                            </ul>
                            <!-- <ul class="links">

                            </ul> -->
                        </div>
                        <!-- End Megamenu -->
                    </li>
                </ul>
            </div>
        </div>
        <!-- End Header -->
        <!-- Start Form -->
        <div class="container-form">  
            <form id="contact" action="" method="post">
            <h4>اتصل بنا اليوم ، واحصل على الرد خلال 24 ساعة!</h4>
 
            <fieldset>
                <input placeholder="الإسم" name="name" type="text" tabindex="1" autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="البريد الإلكتروني" name="email" type="email" tabindex="2">
            </fieldset>
            <fieldset>
                <input placeholder="رقم الهاتف" name="tel" type="tel" tabindex="3" >
            </fieldset>
            <fieldset>
                <input placeholder="عنوان الرسالة" type="text" name="subject" tabindex="4">
            </fieldset>
            <fieldset>
                <textarea name="message" placeholder="اكتب تفاصيل رسالتك هنا ..." tabindex="5"></textarea>
            </fieldset>
            <br/>
            <div class="g-recaptcha" data-sitekey="6LflJ_IgAAAAAGt_r1dxSCX4D7VSeQplo_8jRlUy"></div>
            <div>
                <p class="success"><?php  echo $success;  ?></p>
                <p class="failed"><?php  echo $failed;  ?></p>
            </div>
            <fieldset>
                <button type="submit" name="submit" id="contact-submit" data-submit="...Sending">أرسل الأن</button>
            </fieldset>
            </form>
        </div>
        <!-- End Form -->
        <!-- Start Footer -->
        <div class="footer" dir="#">
            <div class="container">
                <div class="box">
                    <a href="index.html"><img src="images/logo_frame.png" height="100px" alt="Nabta Studio"></a>
                    <ul class="social">
                        <li>
                            <a href="https://www.facebook.com/NabtaStudio" class="facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/NabtaStudio" class="twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/channel/UC1X4JcZF5ebCMYpE0ZsKU_Q" class="youtube">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                    <p class="text">
                        نحن أستوديو نبتة لصناعة المحتوى التربوي التعليمي لألطفال وبناء األلعاب والتطبيقات التفاعلية ) بغرض التربية و التعليم (. نحن نغرس المعرفة الجديدة في ذاكرتك مثل البذور ونسقيها لتصبح زهور قوية تظل في ذاكرتك طويلة المدى مليئة بالحيوية.
                    </p>
                </div>
                <div class="box">
                    <ul class="links">
                        <li class="rtl"><a href="index.html">الرئيسية</a></li>
                        <li class="rtl"><a href="e_learning-page.html">التعليم الإلكتروني</a></li>
                        <li class="rtl"><a href="#">حدوتة نبتة</a></li>
                        <li class="rtl"><a href="contact.php">تواصل معنا</a></li>
                    </ul>
                </div>
                <div class="box">
                    <div class="line">
                        <i class="fas fa-map-marker-alt fa-fw"></i>
                        <div class="info">مدينة السلام - القاهرة</div>
                    </div>
                    <div class="line">
                        <i class="fas fa-clock fa-fw"></i>
                        <div class="info">من الساعه 9 صباحاً حتي الساعه 5 مساءاً </div>
                    </div>
                    <div class="line">
                        <i class="fas fa-phone-volume fa-fw"></i>
                        <div class="info">
                            <span>201007560466+</span>
                        </div>
                    </div>
                </div>
            </div>
            <p class="copyright">جميع الحقوق محفوظة &copy أستوديو نبتة 2022</p>
        </div>
        <!-- End Footer -->
        <!-- Start POPUP Button -->
        <button id="btnScrollToTop" class="btnScrollToTop ">
            <i class="material-icons">arrow_upward</i>
        </button>
        <!-- End POPUP Button -->
        <script src="js/pop-up_to_top.js"></script>
    </body>
</html>