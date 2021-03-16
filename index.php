<?php
    $result="";
    if(isset($_POST['submit'])){
        require 'phpmailer/PHPMailerAutoload.php';
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host='smtp.gmail.com';
        $mail->Port=587;
        $mail->SMTPAuth=true;
        $mail->SMTPSecure='tls';
        $mail->Username='branporclean@gmail.com';
        $mail->Password='branporcleanseo';

        $mail->setFrom($_POST['email'],$_POST['name']);
        $mail->addAddress('ventas@branporclean.com');
        $mail->addReplyTo($_POST['email'],$_POST['name']);

        $mail->isHTML(true);
        $mail->Subject='Enviado por '.$_POST['name'];
        $mail->Body='<h1 align=center>Nombre: '.$_POST['name'].'<br>Email: '.$_POST['email'].'<br>Mensaje: '.$_POST['message'].'</h1>';
        
        if(!$mail->send()){
            $result="Algo esta mal, inténtelo de nuevo por favor.";
        }
        else {
            $result="Gracias ".$_POST['name']." por contactarnos, te responderemos lo más pronto posible.";
        }
    }
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags --> 
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MQFP4CK');</script>
    <!-- End Google Tag Manager -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Empresa especializada en la desinfección y sanitización, limpieza de instalaciones contra el COVID-19, desinfección preventiva COVID-19, sanitización de superficies y espacios">
    <meta name="keywords" content="COVID-19, bioseguridad, prevención COVID 19, control de plagas, desinfección, equipos de protección, contra el coronavirus, desinfección y sanitización, combatir el coronavirus, desinfección preventiva COVID-19, solución para combatir el coronavirus">
    <title>Branporclean</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MQFP4CK"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light nav">
                        <a class="navbar-brand" href="index.html"> <img src="img/logoo.png" alt="Branporclean"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="ti-menu"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item">
                                    <a class="nav-link" href="#inico">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#empresa">Empresa</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#servicios">Servicios</a>
                                </li> 
                                <li class="nav-item">
                                    <a class="nav-link" href="#areas">Áreas de enfoque</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#contacto">Contáctanos</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- banner part start-->
    <section class="banner_part" id="inicio">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xl-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <div class="info">
                                <h1>Tu tarea proteger a tu familia del Covid-19, la nuestra <span>eliminarlo</span>...</h1>
                                <p>Si la suerte debe encontrarte haciendo algo bueno por tu futuro, nuestro éxito será darte la dirección para que la encuentres junto a ti. Por eso te invitamos a que te unas en nuestra iniciativa de trabajo y formes parte en la expansión de nuestros servicios que podemos garantizar con la calidad de nuestros productos, brindando seguridad y protección a todos nuestros clientes. </p>
                                <a href="#" class="btn_1">Contáctanos </a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- about part start-->
    <section class="about_part " style="margin-top: 40px;" id="empresa">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6 col-lg-6">
                    <div class="about_part_img p">
                        <img src="img/familia.jpg" alt="Branporclean">
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="about_part_text">
                        <h2>Nosotros nos encargamos, lo hacemos por tu familia y la nuestra...</h2>
                        <ul>
                            <li>
                                <span class="flaticon-ui"></span>
                                <h3>Misión</h3>
                                <p>  Empresa de desinfección y sanitización, nos encargamos de ser el apoyo que necesitas para eliminar las amenazas que están entre nosotros pero no podemos ver... </p>
                            </li>
                            <li>
                                <span class="flaticon-drop"></span>
                                <h3>¿Cómo lo hacemos?</h3>
                                <p>  La Desinfección con BRANPORCLEAN se realiza con equipos de sistema de aspersión y nebulización certificados por la Agencia de protección ambiental de EE.UU.(EPA, por sus siglas en inglés), usando productos que están certificados por la organización mundial de la salud (OMS) y la organización panamericana de la salud (OPS) contra la desinfección efectiva del SARS-CoV-2, al igual que para la desinfección de bacterias, gérmenes, hongos y otros tipos de virus.  </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about part end-->

    <!-- our_project part start-->
<section class="our_project section_padding" id="portfolio">
    <div class="container" id="servicios">
        <div class="row justify-content-between">
            <div class="col-lg-5 col-sm-10">
                <div class="section_tittle" style="margin-bottom: 35px;">
                    <h2>Nuestros Servicios</h2>
                </div>
            </div>
            <div class="col-lg-6 col-sm-10">
                <div class="filters portfolio-filter project_menu_item">
                    <ul>
                        <li class="active" data-filter="*">Todos</li>
                        <li data-filter=".buildings">Desinfección</li>
                        <li data-filter=".rebuild">Bioseguridad</li>
                        <li data-filter=".architecture">Control plaga</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="filters-content">
            <div class="row justify-content-between portfolio-grid">
                <div class="col-lg-4 col-sm-6 all rebuild">
                    <div class="single_our_project">
                        <div class="single_offer">
                            <img src="img/bioseguridad.jpg" alt="bioseguridad">
                            <div class="hover_text">
                                <p>Branporclean</p>
                                <a href="#"><h2>Bioseguridad</h2></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 all architecture">
                    <div class="single_our_project">
                        <div class="single_offer">
                            <img src="img/fumigacion.jpg" alt="fumigacion">
                            <div class="hover_text">
                                <p>Branporclean</p>
                                <a href="#"><h2>Control plaga</h2></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 all buildings">
                    <div class="single_our_project">
                        <div class="single_offer">
                            <img src="img/desinfeccion.jpg" alt="desinfeccion">
                            <div class="hover_text">
                                <p>Branporclean</p>
                                <a href="#"><h2>Desinfección</h2></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- our_project part end-->
    <div class="container-post" id="areas">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_tittle">
                    <h2>Áreas de enfoque</h2>
                </div>
            </div>
        </div>
        <div class="posts">
            
            <div class="post" data-category="CSS">

                <div class="ctn-img">
                    <img src="img/residencia.jpg" alt="residencia">
                </div>
                <h2>Conjuntos residenciales</h2>
            </div>

            <div class="post" data-category="HTML">
                <div class="ctn-img"><img src="img/local.jpg" alt="local"></div>
                <h2>Locales comerciales</h2>
            </div>

            <div class="post" data-category="JS">

                <div class="ctn-img"><img src="img/medico.jpg" alt="medico"></div>
                <h2>Centros médicos</h2>

            </div>

            <div class="post" data-category="JS NODEJS VUE">

                <div class="ctn-img"><img src="img/uny.jpg" alt="educativas"></div>
                <h2>Unidades educativas</h2>
            </div>

            <div class="post" data-category="CSS">

                <div class="ctn-img"><img src="img/publica.jpg" alt="publica"></div>
                <h2>Instituciones públicas</h2>
            </div>

            <div class="post" data-category="PHP">

                <div class="ctn-img"><img src="img/empresa.jpg" alt="empresa"></div>
                <h2>Instituciones privadas</h2>
            </div>

            
        </div>

    </div>
    <!-- about part start-->
    <section class="about_part experiance_part">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6 col-lg-6">
                    <div class="about_part_text">
                        <h2>Garantía en nuestros Servicios</h2>
                        <p>Efecto residual del amonio cuaternario de quinta generación es de 30 días después de su aplicación gracias a su complemento esterilizante IG tensoactivo, este químico se utiliza para los espacios internos junto con un nebulizador de alcohol 70% eliminando hasta donde la aspersión no llega, y para todo tipo de espacios.</p>
                        
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="about_part_img">
                        <img src="img/covid.jpg" alt="garantia">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about part end-->


  <!-- Contact Section Begin -->
  <section class="contact-section spad" id="contacto">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="contact-title">
                    <h4>Contáctanos</h4>
                </div>
                <div class="contact-widget">
                    <div class="cw-item">
                        <div class="ci-icon">
                            <i class="ti-location-pin"></i>
                        </div>
                        <div class="ci-text">
                            <span>Dirección:</span>
                            <p>Caracas Venezuela</p>
                        </div>
                    </div>
                    <div class="cw-item">
                        <div class="ci-icon">
                            <i class="ti-mobile"></i>
                        </div>
                        <div class="ci-text">
                            <span>Teléfono:</span>
                            <p>+58 0424 2766360</p>
                        </div>
                    </div>
                    <div class="cw-item">
                        <div class="ci-icon">
                            <i class="ti-email"></i>
                        </div>
                        <div class="ci-text">
                            <span>Correos:</span>
                            <p>ventas@branporclean.com</p>
                            <p>BRKNGCLEAN@GMAIL.COM</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1">
                <div class="contact-form">
                    <div class="leave-comment">
                        <h4>Escríbenos</h4>
                        <p>Nuestro personal responderá a sus preguntas lo más pronto posible.</p>
                        <form class="comment-form" method="post" novalidate="novalidate">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" name="name" id="name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nombre'" placeholder = 'Nombre'>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Correo electrónico'" placeholder = 'Correo electrónico'>
                                </div>
                                <div class="col-lg-12">
                                    <textarea  name="message" id="message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Escriba su mensaje'" placeholder = 'Escriba su mensaje'></textarea>
                                    <button type="submit" class="site-btn" name="submit">Enviar mensaje</button>
                                    <h5 class="correcto"><?= $result; ?></h5>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->

     <!-- Footer Section Begin -->
     <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="#"><img src="img/logoo.jpg" alt="Branporclean"></a>
                        </div>
                        <ul>
                            <li><i class="fa fa-map-marker m"></i>Dirección: Caracas Venezuela</li>
                            <li><i class="fa fa-phone m"></i>Teléfono: (0424) 276-6360</li>
                            <li><i class="fa fa-envelope m"></i>Correos: ventas@branporclean.com <br> BRKNGCLEAN@GMAIL.COM</li>
                        </ul>
                        
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Información</h5>
                        <ul>
                            <li><a href="#empresa">Empresa</a></li>
                            <li><a href="#servicios">Servicios</a></li>
                            <li><a href="#areas">Áreas de enfoque</a></li>
                            <li><a href="#contacto">Contáctanos</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-left">
                        <h5>Siguenos</h5>
                        <div class="footer-social">
                            <a href="https://www.facebook.com/branporclean" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.instagram.com/branporclean/" target="_blank"><i class="fa fa-instagram"></i></a>
                            <!-- <a href="#"><i class="fa fa-twitter"></i></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-left">
                        <h5>Donde ubicarnos</h5>
                        <div class="map-inner">
                            <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d251097.9246351096!2d-67.03045459854461!3d10.468698790429967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2a58adcd824807%3A0x93dd2eae0a998483!2sCaracas%2C%20Distrito%20Capital!5e0!3m2!1ses!2sve!4v1603916257047!5m2!1ses!2sve"
                                height="200" style="border:0" allowfullscreen="">
                            </iframe>
                            
                            <div class="icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | Desarrollado por <a href="https://colorlib.com" target="_blank"></a>Branar C.A.</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!--Boton de ir hacia arriba-->
    <span class="ir-arriba icon-arrow-up2"><i class="fa fa-chevron-up"></i></span>
    
    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/swiper.min.js"></script>
    <!-- isotope js -->
    <script src="js/isotope.pkgd.min.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- swiper js -->
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>

</html>