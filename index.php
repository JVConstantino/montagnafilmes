<?php include_once("lib/includes.php");?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    <!-- Meta Tags
    ============================================= -->
    <!-- Charset -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <!-- Autor -->
    <meta name="author" content="João Victor Rodrigues" />
    <!-- Base Href -->
    <base href="<?php echo url_site;?>">
    <!-- Descrição do Site  -->
    <meta name=”description” content=”Tags, Meta Tags e Dados Estruturais são super importantes para o ranqueamento do seu site no Google. Neste artigo explicamos quais dessas tags você deveria estar utilizando com alguns exemplos práticos de como usar.”>
    <!-- Redes Sociais Título -->
    <meta property=”og:title” content=”Posicionamento Técnico no Mundo Digital, Tags, Meta Tags e Structured Data” />
    <!-- Redes Sociais Descrição -->
    <meta property=”og:description” content=”Tags, Meta Tags e Dados Estruturais são super importantes para o ranqueamento do seu site no Google. Neste artigo explicamos quais dessas tags você deveria estar utilizando com alguns exemplos práticos de como usar.” />
    <!-- Redes Sociais Imagem -->
    <meta property=”og:image” content=”https://loft44.com.br/#########.jpg”>
    <!-- Redes Sociais Nome do Site -->
    <meta property=”og:site_name” content=”Loft44 | Movidos por dados. Inspirados por design. Seja bem vindo!” />
    <!-- Redes Sociais URL -->
    <meta property=”og:url” content=”https://loft44.com.br/posicionamento-tecnico-no-mundo-digital” />


    <!-- Style
	============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="stylesheet" href="css/swiper.css" type="text/css" />
    <link rel="stylesheet" href="css/dark.css" type="text/css" />
    <link rel="stylesheet" href="css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/animate.css" type="text/css" />
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

    <link rel="stylesheet" href="css/custom.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="css/fonts/fontawesome/fontawesome-web/css/all.css">

    <!-- Document Title
	============================================= -->
    <title><?php geraTitulo(titulo_site);?></title>

    <!-- ALternative Style -->
    <style>

    </style>

</head>

<body class="stretched">

    <!-- Wrapper
	============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Header
		============================================= -->
        <header id="header" class="full-header transparent-header" data-sticky-class="dark">
            <div id="header-wrap">
                <div class="container">
                    <div class="header-row">

                        <!-- Logo
						============================================= -->
                        <div id="logo">
                            <a href="#" class="standard-logo" data-dark-logo="images/uploads/Logo_Montagna_Fundo_Escuro/logo_fundo_escuro.png"><img src="images/uploads/Logo_Montagna_Fundo_Escuro/logo_fundo_escuro.png" alt="Canvas Logo"></a>
                            <a href="#" class="retina-logo" data-dark-logo="images/uploads/Logo_Montagna_Fundo_Claro/logobanner.png"><img src="images/uploads/Logo_Montagna_Fundo_Claro/logobanner.png" alt="Canvas Logo"></a>
                        </div><!-- #logo end -->
                        <div id="primary-menu-trigger">
                            <svg class="svg-trigger" viewBox="0 0 100 100">
                                <path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path>
                                <path d="m 30,50 h 40"></path>
                                <path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path>
                            </svg>
                        </div>
                        <!-- Primary Navigation
						============================================= -->
                        <nav class="primary-menu">

                            <ul class="menu-container">
                                <li class="menu-item">
                                    <a class="menu-link" href="#">
                                        <div>início</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="#" data-scrollto="#ultimos" data-offset="100">
                                        <div>Portifólio</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="#" data-scrollto="#clientes" data-offset="100">
                                        <div>clientes</div>
                                    </a>
                                </li>
                                <li class="menu-item mega-menu">
                                    <a class="menu-link" href="#" data-scrollto="#contato" data-offset="100">
                                        <div>Contato</div>
                                    </a>
                                </li>
                                <li class="menu-item mega-menu">
                                    <a class="menu-link" href="#" data-scrollto="#social" data-offset="100">
                                        <div>Siga-nos</div>
                                    </a>
                                </li>
                            </ul>

                        </nav><!-- #primary-menu end -->
                    </div>
                </div>
            </div>
            <div class="header-wrap-clone"></div>


        </header><!-- #header end -->

        <section id="slider" class="slider-element slider-parallax swiper_wrapper min-vh-60 min-vh-md-100 include-header">
            <div class="slider-inner">

                <div class="swiper-container swiper-parent">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide dark">

                            <div class="video-wrap">
                                <video id="slide-video" poster="images/videos/explore-poster.jpg" preload="auto" loop autoplay muted>
                                    <source src='images/uploads/finais/abertura-site.mp4' type='video/mp4' />
                                </video>
                                <div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>
                            </div>
                        </div>

                    </div>

                </div>

                <a href="#" data-scrollto="#ultimos" data-offset="100" class="one-page-arrow dark"><i class="icon-angle-down infinite animated fadeInDown"></i></a>

            </div>
        </section>

        <!-- Content
		============================================= -->
        <section id="content">
            <div class="content-wrap">

                <div class="section mt-0 border-top-0">
                    <div class="container clearfix">
                        <div class="heading-block center m-0">
                            <h3 id="ultimos">ÚLTIMOS TRABALHOS</h3>
                        </div>
                    </div>
                </div>



                <div class="container">
                    <div id="related-portfolio" class="owl-carousel portfolio-carousel carousel-widget owl-loaded owl-drag" data-margin="20" data-pagi="false" data-autoplay="5000" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-lg="4">


                        <div class="owl-stage-outer">
                            <div class="owl-stage" style="transform: translate3d(-2120px, 0px, 0px); transition: all 0.25s ease 0s; width: 2650px;">

                                <?php paginacao();?>
                            </div>
                        </div>
                        <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i class="icon-angle-left"></i></button><button type="button" role="presentation" class="owl-next disabled"><i class="icon-angle-right"></i></button></div>

                    </div>
                </div>

            </div>
        </section><!-- #content end -->
        <div class="container clearfix">

            <div class="container clearfix">
                <div class="heading-block center m-3">
                    <h3 id="clientes" class="text-dark">Nossos clientes</h3>
                </div>
            </div>
            <br>


            <div id="oc-clients" class="owl-carousel image-carousel carousel-widget owl-loaded owl-drag" data-margin="60" data-loop="true" data-nav="false" data-autoplay="5000" data-pagi="false" data-items-xs="2" data-items-sm="3" data-items-md="4" data-items-lg="5" data-items-xl="7">



                <div class="owl-stage-outer">
                    <div class="owl-stage" style="transform: translate3d(-1710px, 0px, 0px); transition: all 0.25s ease 0s; width: 3800px;">
                        <div class="owl-item " style="height: 130px; margin-right: 60px;">
                            <div class="oc-item "><a href="#"><img src="images/bw/size/acianf.png" alt="Clients"></a></div>
                        </div>
                        <div class="owl-item " style="height: 130px; margin-right: 60px;">
                            <div class="oc-item "><a href="#"><img src="images/bw/size/altarede.png" alt="Clients"></a></div>
                        </div>
                        <div class="owl-item " style="height: 130px; margin-right: 60px;">
                            <div class="oc-item "><a href="#"><img src="images/bw/size/amil.png" alt="Clients"></a></div>
                        </div>
                        <div class="owl-item " style="height: 130px; margin-right: 60px;">
                            <div class="oc-item "><a href="#"><img src="images/bw/size/cadima-1.png" alt="Clients"></a></div>
                        </div>
                        <div class="owl-item " style="height: 130margin-right: 60px;">
                            <div class="oc-item "><a href="#"><img src="images/bw/size/coop-2.png" alt="Clients"></a></div>
                        </div>
                        <div class="owl-item " style="height: 130px; margin-right: 60px;">
                            <div class="oc-item "><a href="#"><img src="images/bw/size/country.png" alt="Clients"></a></div>
                        </div>
                        <div class="owl-item " style="height: 130px; margin-right: 60px;">
                            <div class="oc-item "><a href="#"><img src="images/bw/size/dlk-logo.png" alt="Clients"></a></div>
                        </div>
                        <div class="owl-item " style="height: 130px; margin-right: 60px;">
                            <div class="oc-item "><a href="#"><img src="images/bw/size/fabrica.png" alt="Clients"></a></div>
                        </div>
                        <div class="owl-item " style="height: 130px; margin-right: 60px;">
                            <div class="oc-item "><a href="#"><img src="images/bw/size/hardyn.png" alt="Clients"></a></div>
                        </div>
                        <div class="owl-item active " style="height: 130px; margin-right: 60px;">
                            <div class="oc-item "><a href="#"><img src="images/bw/size/serra-azul.png" alt="Clients"></a></div>
                        </div>
                        <div class="owl-item active " style="height: 130px; margin-right: 60px;">
                            <div class="oc-item "><a href="#"><img src="images/bw/size/stam.png" alt="Clients"></a></div>
                        </div>
                        <div class="owl-item active " style="height: 130px; margin-right: 60px;">
                            <div class="oc-item "><a href="#"><img src="images/bw/size/sumicity.png" alt="Clients"></a></div>
                        </div>

                        <div class="owl-item " style="height: 130px;  margin-right: 60px;">
                            <div class="oc-item "><a href="#"><img src="images/bw/size/vest-rio.png" alt="Clients"></a></div>
                        </div>

                    </div>
                </div>
                <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><i class="icon-angle-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="icon-angle-right"></i></button></div>
                <div class="owl-dots disabled"></div>
            </div>


        </div>

        <br>
        <br>
        <br>
        <br>
        <!-- Footer
		============================================= -->
        <footer id="footer" style="background-color: #282828">
            <div class="container">


                <section id="content">
                    <div class="content-wrap" style="background-color: #282828">
                        <div class="container">

                            <div class="row gutter-40 col-mb-80">
                                <!-- Postcontent
						============================================= -->
                                <div class="postcontent col-lg-12">
                                    <div class="container clearfix">
                                        <div class="heading-block center m-3">
                                            <h3 id="contato" class="text-light">ENTRE EM CONTATO</h3>
                                        </div>
                                    </div>

                                    <div class="form-widget">

                                        <div class="form-result"></div>

                                        <form class="mb-0" id="template-contactform" name="template-contactform" method="POST" action="processa.php" novalidate="novalidate">



                                            <div class="row">
                                                <div class="col-md-4 form-group">
                                                    <label for="template-contactform-name" class="text-light"><i class="fas fa-user-edit" style="font-size: 20px"></i> - Nome </label>
                                                    <input type="text" id="template-contactform-name" name="nome" value="" class="sm-form-control required">
                                                </div>

                                                <div class="col-md-4 form-group">
                                                    <label for="template-contactform-email" class="text-light"><i class="fad fa-at" style="font-size: 20px"></i> -Email </label>
                                                    <input type="email" id="template-contactform-email" name="email" value="" class="required email sm-form-control">
                                                </div>

                                                <div class="col-md-4 form-group">
                                                    <label for="template-contactform-phone" class="text-light"><i class="fas fa-phone-plus" style="font-size: 20px"></i> - Telefone/whatsapp</label>
                                                    <input type="text" id="template-contactform-phone" name="contato" value="" class="sm-form-control">
                                                </div>

                                                <div class="w-100"></div>

                                                <div class="col-md-8 form-group">
                                                    <label for="template-contactform-subject" class="text-light"><i class="fas fa-comment-alt-edit" style="font-size: 20px"></i> - Assunto </label>
                                                    <input type="text" id="template-contactform-subject" name="assunto" value="" class="required sm-form-control">
                                                </div>

                                                <div class="col-md-4 form-group">
                                                    <label for="template-contactform-service" class="text-light"><i class="fas fa-sitemap" style="font-size: 20px"></i> - Categoria</label>
                                                    <select id="template-contactform-service" name="categoria" class="sm-form-control">
                                                        <option value="">== SELECIONAR ==</option>
                                                        <option value="Evento">EVENTO</option>
                                                        <option value="Casamento">CASAMENTO</option>
                                                        <option value="Book">BOOK</option>
                                                        <option value="Propaganda">PROPAGANDA</option>
                                                        <option value="Outros">OUTROS - (ESPECIFICAR NA MENSAGEM)</option>
                                                    </select>
                                                </div>

                                                <div class="w-100"></div>

                                                <div class="col-12 form-group">
                                                    <label for="template-contactform-message" class="text-light"><i class="fas fa-pencil-alt" style="font-size: 20px"></i> - Mensagem</label>
                                                    <textarea class="required sm-form-control" id="template-contactform-message" name="mensagem" rows="6" cols="30"></textarea>
                                                </div>


                                                <div class="col-12 form-group">
                                                    <button class="button button-3d m-0" type="submit" id="template-contactform-submit" value="submit" style="background-color: #f47b3a"><i class="far fa-paper-plane"></i> &nbsp; Enviar</button>
                                                </div>
                                            </div>



                                        </form>
                                    </div>

                                </div><!-- .postcontent end -->


                            </div>

                        </div>
                    </div>
                </section>
                <div class="row col-mb-50" id="social">
                    <div class="col-sm-6 col-lg-3">
                        <div class="feature-box fbox-center fbox-bg fbox-plain">
                            <div class="fbox-icon" style="background-color: #282828">
                                <a href="https://www.instagram.com/montagnafilmes/"><i class="fab fa-instagram-square" style="color: #DF7238; font-size: 50px"></i></a>
                            </div>
                            <div class="fbox-content">
                                <h3><a class="text-light" href="https://www.instagram.com/montagnafilmes/">@montagnafilmes</a></h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="feature-box fbox-center fbox-bg fbox-plain">
                            <div class="fbox-icon" style="background-color: #282828">
                                <a href="https://pt-br.facebook.com/mtgfilmes/"><i class="fab fa-facebook-square" style="color: #DF7238; font-size: 50px"></i></a>
                            </div>
                            <div class="fbox-content">
                                <h3><a class="text-light" href="https://pt-br.facebook.com/mtgfilmes/">@MTGFILMES</a></h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="feature-box fbox-center fbox-bg fbox-plain">
                            <div class="fbox-icon" style="background-color: #282828">
                                <a href="http://api.whatsapp.com/send?1=pt_br&phone=5522988461845"><i class="fab fa-whatsapp-square" style="color: #DF7238; font-size: 50px"></i></a>
                            </div>
                            <div class="fbox-content">
                                <h3><a class="text-light" href="http://api.whatsapp.com/send?1=pt_br&phone=5522988461845">(22) 98846-1845</a></h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="feature-box fbox-center fbox-bg fbox-plain">
                            <div class="fbox-icon" style="background-color: #282828">
                                <a href="tel:988461845"><i class="fas fa-phone-square-alt" style="color: #DF7238; font-size: 50px"></i></a>
                            </div>
                            <div class="fbox-content">
                                <h3><a class="text-light" href="tel:988461845">(22) 98846-1845</a></h3>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <br>
            <br>
            <br>

            <!-- Copyrights
			============================================= -->
            <div id="copyrights" style="background-color: #202020">
                <div class="container">

                    <div class="row col-mb-30">

                        <div class="col-md-12 text-center text-white">
                            Copyright &copy; 2020 Todos os direitos reservados | Montagna Filmes

                            <br>

                        </div>

                    </div>

                </div>
            </div><!-- #copyrights end -->
        </footer><!-- #footer end -->

    </div><!-- #wrapper end -->

    <!-- Go To Top
	============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- JavaScripts
	============================================= -->
    <script src="js/jquery.js"></script>
    <script src="js/plugins.min.js"></script>

    <!-- Footer Scripts
	============================================= -->
    <script src="js/functions.js"></script>

    <script src="css/fonts/fontawesome/fontawesome-web/js/all.js"></script>

</body>

</html>
