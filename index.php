<?php
$encabezado = ['Home','About','Perfil','Cursos y Autoridades'];
$malla = "Descargar Malla";
$descripcion = "Gestiona e integra las TIC a la estrategia del negocio para generar valor agregado.";
$rubro = ['Google','Facebook','Dropbox','Microsoft'];
$url1 = "https://www.facebook.com/Vive.UTP/";
$perfil = ['Compartir ideas','Abierto','Informacion','Liderazgo'];
$ciclos = "10 Ciclos  -  Ingeniería de Sistemas e Informática";
$licencia = "Universidad Licenciada por SUNEDU";
$matricula = "https://inscripcion-online.utp.edu.pe/";
$Descr_Contacto = "+ 12 mil ofertas laborales publicadas en la Bolsa
de Trabajo UTP. Somos una empresa del grupo
Intercorp y tenemos los mejores convenios de trabajo.";
$Footer = ['E-mail','Teléfono','Social'];
$url2 = "https://twitter.com/universidadutp?lang=es";
$url3 = "https://www.instagram.com/universidadutp/?hl=es";
$TituloPerfil = "Perfil del estudiante"
?>


<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>ING</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/vendor.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">

</head>

<body id="top">


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


    <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="header-logo">
            <a href="index.html">
                <img src="images/logo.svg" alt="Homepage">
            </a>
        </div>

        <div class="header-content">
    
            <nav class="row header-nav-wrap">
                <ul class="header-nav">
                    <li><a class="smoothscroll" href="#hero" title="Intro"><?php echo $encabezado[0] ?></a></li>
                    <li><a class="smoothscroll" href="#about" title="About"><?php echo $encabezado[1] ?></a></li>
                    <li><a class="smoothscroll" href="#services" title="Services"><?php echo $encabezado[2] ?></a></li>
                    <li><a class="smoothscroll" href="#portfolio" title="Works"><?php echo $encabezado[3] ?></a></li>
                    <li><a href="mailto:#0" title="Contact us">Say Hello</a></li>
                </ul>
            </nav> <!-- end header-nav-wrap -->

            <a href="https://www.utp.edu.pe/sites/default/files/malla-curricular/UTP_Malla_Ing%20Sistemas%20e%20Inform%C3%A1tica-compressed.pdf" class="btn btn--stroke btn--small"><?php echo $malla ?></a>

        </div> <!-- end header-content -->

        <a class="header-menu-toggle" href="#0"><span>Menu</span></a>

    </header> 


    <!-- hero
    ================================================== -->
    <section id="hero" class="s-hero target-section" data-parallax="scroll" data-image-src="images/port1.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="row hero-content">

            <div class="column large-full">

                <h1>
                Ingeniería de Sistemas<br>
                e Informática<br>
                Universidad Tecnológica<br>
                del Perú
                </h1>

                <ul class="hero-social">
                    <li>
                        <a href="<?php echo $url1 ?>" title="">Facebook</a>
                    </li>
                    
                </ul> <!-- end hero-social -->

            </div> 

        </div> <!-- end hero-content -->

        <div class="hero-scroll">
            <a href="#about" class="scroll-link smoothscroll">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 24l-8-9h6v-15h4v15h6z"/></svg>
            </a>
        </div> <!-- end hero-scroll -->

    </section> <!-- end s-hero -->


    <!-- about
    ================================================== -->
    <section id="about" class="s-about target-section">

        <div class="s-about__section s-about__section--profile">

            <div class="right-vert-line"></div>

            <div class="row">
                <div class="column large-6 medium-8 tab-full">

                    <div class="section-intro" data-num="01" data-aos="fade-up">
                        <h3 class="subhead">Descripción</h3>
                        <h1 class="display-1"><?php echo $descripcion ?></h1>
                    </div>

                    <div class="profile-pic" data-aos="fade-up">
                        <img src="images/perfil1.jpg" 
                             srcset="images/perfil1.jpg 1x, images/perfil1.jpg 2x" alt="">
                    </div>

                    <h3 data-aos="fade-up">Perfil</h3>

                    <p data-aos="fade-up">
                        Eliges integrar las TIC al negocio. Dominar sistemas informáticos y participar en proyectos de diseño e implementación de redes.
                        La Ingeniería de sistemas es una disciplina de la Ingeniería que se encarga de desarrollar, mejorar e implementar sistemas informáticos. Fuertemente vinculada con las matemáticas e informática, esta disciplina crea redes y sistemas al servicio de la organización que lo demande. 
                        La Ingeniería de sistemas trabaja con el fin de contribuir al desarrollo científico y tecnológico mediante la investigación continua de nuevas tecnologías y procedimientos. Gracias a su carácter multidisciplinario, esta carrera abre la puerta a una gran variedad de empresas u organizaciones, tanto públicas como privadas, y en especial en aquellas de gran tamaño. 
                    </p>

                </div>
            </div>

        </div> <!-- end s-about__section--profile -->

        <div class="s-about__section">

            <div class="row">
                <div class="column">
                    <h3 data-aos="fade-up">¿A qué se dedica un Ingeniero de sistemas?</h3>
                </div>
            </div>

            <div class="row block-large-1-2 block-900-full work-positions">

                <div class="column" data-aos="fade-up">
                    <div class="position">
                        <div class="position__header">
                            <h6>
                                <span class="position__co"><?php echo $rubro[0] ?></span>
                                <span class="position__pos">Product Designer</span>
                            </h6>
                            <div class="position__timeframe">
                                
                            </div>
                        </div>

                        <p>
                            Crear, programar, aplicar y mantener sistemas informáticos. 
                        </p>
                    </div>
                </div> <!-- end column -->
                <div class="column" data-aos="fade-up">
                    <div class="position">
                        <div class="position__header">
                            <h6>
                                <span class="position__co"><?php echo $rubro[1] ?></span>
                                <span class="position__pos">UX Director</span>
                            </h6>
                            <div class="position__timeframe">
                                
                            </div>
                        </div>

                        <p>
                            Diseñar y mantener sitios y páginas web. 
                        </p>
                    </div>
                </div> <!-- end column -->
                <div class="column" data-aos="fade-up">
                    <div class="position">
                        <div class="position__header">
                            <h6>
                                <span class="position__co"><?php echo $rubro[2] ?></span>
                                <span class="position__pos">Mobile App Designer</span>
                            </h6>
                            <div class="position__timeframe">
                                
                            </div>
                        </div>

                        <p>
                            Crear softwares y hardwares para una empresa, después de llevar a cabo una investigación.
                        </p>
                    </div>
                </div> <!-- end column -->
                <div class="column" data-aos="fade-up">
                    <div class="position">
                        <div class="position__header">
                            <h6>
                                <span class="position__co"><?php echo $rubro[3] ?></span>
                                <span class="position__pos">Product Designer</span>
                            </h6>
                            <div class="position__timeframe">
                                
                            </div>
                        </div>

                        <p>
                            Optimizar los datos que manejan esas empresas.
                            Administrar sistemas de información y redes
                        </p>
                    </div>
                </div> <!-- end column -->

            </div> <!-- work positions -->

        </div> <!-- end s-about__section -->

    </section> <!-- end s-about -->


    <!-- services
    ================================================== -->
    <section id="services" class="s-services target-section h-dark-bg">
        
        <div class="row s-services__content">

            <div class="vert-line"></div>

            <div class="column large-6 s-services__leftcol">
                <div class="section-intro" data-num="02" data-aos="fade-up">
                    <h3 class="subhead"><?php echo $TituloPerfil?></h3>

                    <h1 class="display-1">
                        la carrera de Ingeniería de sistemas requiere de mucha creatividad.
                    </h1>
                </div>

                <p class="lead" data-aos="fade-up">
                    El estudiante debe desarrollar su capacidad de ser original, inventor y, sobretodo, innovador, ya que él es el encargado de desarrollar software o 
                    herramientas para la organización de las empresas.
                </p>
            </div> <!-- end  s-services--leftcol -->

            <div class="column large-6">
                <ul class="services-list" data-aos="fade-up">
                    <li class="services-list__item is-active">
                        <div class="services-list__item-header">
                            <h5><?php echo $perfil[0] ?></h5>
                        </div>
                        <div class="services-list__item-body">
                            <p>
                                los ingenieros en sistemas suelen pasar horas frente a su principal herramienta de trabajo, el ordenador, deben tener gran capacidad de comunicación y 
                                facilidad para establecer relaciones, ya que normalmente trabajarán en equipo.
                            </p>
                        </div>
                    </li> <!-- services-list__item -->
                    <li class="services-list__item">
                        <div class="services-list__item-header">
                            <h5><?php echo $perfil[1] ?></h5>
                        </div>
                        <div class="services-list__item-body">
                            <p>
                                deben ser solidarios y abiertos al diálogo; es falso que un ‘geek’ sea tímido y antisocial, ya que es necesario saber comunicarse con los demás 
                                para que estos entiendan las soluciones que vas a brindar.
                            </p>
                        </div>
                    </li> <!-- services-list__item -->
                    <li class="services-list__item">
                        <div class="services-list__item-header">
                            <h5><?php echo $perfil[2] ?></h5>
                        </div>
                        <div class="services-list__item-body">
                            <p>
                                Se trata de personas con gran interés por el análisis, la resolución de problemas y la investigación que 
                                suelen ser responsables y organizadas al mismo tiempo que cuentan con una ética profesional sólida.
                            </p>
                        </div>
                    </li> <!-- services-list__item -->
                    <li class="services-list__item">
                        <div class="services-list__item-header">
                            <h5><?php echo $perfil[3] ?></h5>
                        </div>
                        <div class="services-list__item-body">
                            <p>
                                deben tener habilidades lógicas y capacidad de análisis así como saber interpretar los requerimientos de los clientes, tener liderazgo, 
                                capacidad para poder trabajar en equipo y adaptarse a los cambios y al trabajo bajo presión. Precisamente por eso, deben ser muy disciplinados.
                            </p>
                        </div>
                    </li> <!-- services-list__item -->
                    
                </ul> <!-- end services-list -->
            </div>

        </div> <!-- s-services__content -->

    </section> <!-- end s-services -->


    <!-- portfolio
    ================================================== -->
    <section id="portfolio" class="s-portfolio target-section">

        <div class="row s-portfolio__header">
            <div class="column large-6 medium-8 tab-full">
                <div class="section-intro" data-num="03" data-aos="fade-up">
                    <h3 class="subhead">Cursos</h3>
                    <h1 class="display-1">
                    <?php echo $ciclos ?>
                    </h1>
                </div>
            </div>
        </div> <!-- s-porfolio__header -->

        <div class="row s-porfolio__list block-large-1-2 block-tab-full collapse">

            <div class="column" data-aos="fade-up">
                <div class="folio-item">
                    <div class="folio-item__thumb">
                        <a class="folio-item__thumb-link" href="images/portfolio/gallery/c1.jpg" title="Ciclo 01" data-size="1050x700">
                            <img src="images/portfolio/c1.jpg" 
                                 srcset="images/portfolio/c1.jpg 1x, images/portfolio/c1@2x.jpg 2x" alt="">
                        </a>
                    </div>
                    <div class="folio-item__info">
                        <div class="folio-item__cat">Branding</div>
                        <h4 class="folio-item__title">Windows in The City</h4>
                    </div>
                    <a href="https://www.behance.net/" title="Project Link" class="folio-item__project-link">Project Link</a>
                    <div class="folio-item__caption">
                        <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                    </div>
                </div>
            </div> <!-- end column -->
            <div class="column" data-aos="fade-up">
                <div class="folio-item">
                    <div class="folio-item__thumb">
                        <a class="folio-item__thumb-link" href="images/portfolio/gallery/c2.jpg" title="Building Blocks" data-size="1050x700">
                            <img src="images/portfolio/c2.jpg" 
                                 srcset="images/portfolio/c2.jpg 1x, images/portfolio/c2@2x.jpg 2x" alt="">
                        </a>
                    </div>
                    <div class="folio-item__info">
                        <div class="folio-item__cat">Frontend Design</div>
                        <h4 class="folio-item__title">Building Blocks</h4>
                    </div>
                    <a href="https://www.behance.net/" title="Project Link" class="folio-item__project-link">Project Link</a>
                    <div class="folio-item__caption">
                        <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                    </div>
                </div>
            </div> <!-- end column -->
            <div class="column" data-aos="fade-up">
                <div class="folio-item">
                    <div class="folio-item__thumb">
                        <a class="folio-item__thumb-link" href="images/portfolio/gallery/c3.jpg" Title="Shout and Jump" data-size="1050x700">
                            <img src="images/portfolio/c3.jpg" 
                                 srcset="images/portfolio/c3.jpg 1x, images/portfolio/c3@2x.jpg 2x" alt="">
                        </a>
                    </div>
                    <div class="folio-item__info">
                        <div class="folio-item__cat">Branding</div>
                        <h4 class="folio-item__title">Shout & Jump</h4>
                    </div>
                    <a href="https://www.behance.net/" title="Project Link" class="folio-item__project-link">Project Link</a>
                    <div class="folio-item__caption">
                        <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                    </div>
                </div>
            </div> <!-- end column -->
            <div class="column" data-aos="fade-up">
                <div class="folio-item">
                    <div class="folio-item__thumb">
                        <a class="folio-item__thumb-link" href="images/portfolio/gallery/c4.jpg" title="Sand Dunes" data-size="1050x700">
                            <img src="images/portfolio/c4.jpg" 
                                 srcset="images/portfolio/c4.jpg 1x, images/portfolio/c4@2x.jpg 2x" alt="">
                        </a>
                    </div>
                    <div class="folio-item__info">
                        <div class="folio-item__cat">Frontend Design</div>
                        <h4 class="folio-item__title">Sand Dunes</h4>
                    </div>
                    <a href="https://www.behance.net/" title="Project Link" class="folio-item__project-link">Project Link</a>
                    <div class="folio-item__caption">
                        <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                    </div>
                </div>
            </div> <!-- end column -->
            <div class="column" data-aos="fade-up">
                <div class="folio-item">
                    <div class="folio-item__thumb">
                        <a class="folio-item__thumb-link" href="images/portfolio/gallery/c5.jpg" title="Sand Dunes" data-size="1050x700">
                            <img src="images/portfolio/c5.jpg" 
                                 srcset="images/portfolio/c5.jpg 1x, images/portfolio/c5@2x.jpg 2x" alt="">
                        </a>
                    </div>
                    <div class="folio-item__info">
                        <div class="folio-item__cat">Product Design</div>
                        <h4 class="folio-item__title">Wooocraft</h4>
                    </div>
                    <a href="https://www.behance.net/" title="Project Link" class="folio-item__project-link">Project Link</a>
                    <div class="folio-item__caption">
                        <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                    </div>
                </div>
            </div> <!-- end column -->
            <div class="column" data-aos="fade-up">
                <div class="folio-item">
                    <div class="folio-item__thumb">
                        <a class="folio-item__thumb-link" href="images/portfolio/gallery/c6.jpg" title="The Lamp" data-size="1050x700">
                            <img src="images/portfolio/c6.jpg" 
                                 srcset="images/portfolio/c6.jpg 1x, images/portfolio/c6@2x.jpg 2x" alt="">
                        </a>
                    </div>
                    <div class="folio-item__info">
                        <div class="folio-item__cat">Product Design</div>
                        <h4 class="folio-item__title">The Lamp</h4>
                    </div>
                    <a href="https://www.behance.net/" title="Project Link" class="folio-item__project-link">Project Link</a>
                    <div class="folio-item__caption">
                        <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                    </div>
                </div>
            </div> <!-- end column -->
            <div class="column" data-aos="fade-up">
                <div class="folio-item">
                    <div class="folio-item__thumb">
                        <a class="folio-item__thumb-link" href="images/portfolio/gallery/c7.jpg" title="The Lamp" data-size="1050x700">
                            <img src="images/portfolio/c7.jpg" 
                                 srcset="images/portfolio/c7.jpg 1x, images/portfolio/c7@2x.jpg 2x" alt="">
                        </a>
                    </div>
                    <div class="folio-item__info">
                        <div class="folio-item__cat">Product Design</div>
                        <h4 class="folio-item__title">The Lamp</h4>
                    </div>
                    <a href="https://www.behance.net/" title="Project Link" class="folio-item__project-link">Project Link</a>
                    <div class="folio-item__caption">
                        <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                    </div>
                </div>
            </div> <!-- end column -->
            <div class="column" data-aos="fade-up">
                <div class="folio-item">
                    <div class="folio-item__thumb">
                        <a class="folio-item__thumb-link" href="images/portfolio/gallery/c8.jpg" title="The Lamp" data-size="1050x700">
                            <img src="images/portfolio/c8.jpg" 
                                 srcset="images/portfolio/c8.jpg 1x, images/portfolio/c8@2x.jpg 2x" alt="">
                        </a>
                    </div>
                    <div class="folio-item__info">
                        <div class="folio-item__cat">Product Design</div>
                        <h4 class="folio-item__title">The Lamp</h4>
                    </div>
                    <a href="https://www.behance.net/" title="Project Link" class="folio-item__project-link">Project Link</a>
                    <div class="folio-item__caption">
                        <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                    </div>
                </div>
            </div> <!-- end column -->
            <div class="column" data-aos="fade-up">
                <div class="folio-item">
                    <div class="folio-item__thumb">
                        <a class="folio-item__thumb-link" href="images/portfolio/gallery/c9.jpg" title="The Lamp" data-size="1050x700">
                            <img src="images/portfolio/c9.jpg" 
                                 srcset="images/portfolio/c9.jpg 1x, images/portfolio/c9@2x.jpg 2x" alt="">
                        </a>
                    </div>
                    <div class="folio-item__info">
                        <div class="folio-item__cat">Product Design</div>
                        <h4 class="folio-item__title">The Lamp</h4>
                    </div>
                    <a href="https://www.behance.net/" title="Project Link" class="folio-item__project-link">Project Link</a>
                    <div class="folio-item__caption">
                        <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                    </div>
                </div>
            </div> <!-- end column -->
            <div class="column" data-aos="fade-up">
                <div class="folio-item">
                    <div class="folio-item__thumb">
                        <a class="folio-item__thumb-link" href="images/portfolio/gallery/c10.jpg" title="The Lamp" data-size="1050x700">
                            <img src="images/portfolio/c10.jpg" 
                                 srcset="images/portfolio/c10.jpg 1x, images/portfolio/c10@2x.jpg 2x" alt="">
                        </a>
                    </div>
                    <div class="folio-item__info">
                        <div class="folio-item__cat">Product Design</div>
                        <h4 class="folio-item__title">The Lamp</h4>
                    </div>
                    <a href="https://www.behance.net/" title="Project Link" class="folio-item__project-link">Project Link</a>
                    <div class="folio-item__caption">
                        <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                    </div>
                </div>
            </div> <!-- end column -->

        </div> <!-- folio-list -->

    </section> <!-- end portfolio -->


    <!-- testimonials
    ================================================== -->
    <section id="testimonials" class="s-testimonials">

        <div class="row collapse">

            <div class="column large-full">

                <div class="testimonial-slider" data-aos="fade-up">

                    <div class="testimonial-slider__slide">
                        <p>
                        Molestiae incidunt consequatur quis ipsa autem nam sit enim magni. Voluptas tempore rem. 
                        Explicabo a quaerat sint autem dolore ducimus ut consequatur neque.  Nisi dolores quaerat fuga rem nihil nostrum.
                        Laudantium quia consequatur molestias delectus culpa.
                        </p>
                        <div class="testimonial-slider__author">
                            <img src="images/avatars/f1.jpg" alt="Author image" class="testimonial-slider__avatar">
                            <cite class="testimonial-slider__cite">
                                <strong>Jonathan Golergant</strong>
                                <span>Director general de la UTP</span>
                            </cite>
                        </div>
                    </div> <!-- end testimonials__slide -->
    
                    <div class="testimonial-slider__slide">
                        <p>
                        Excepturi nam cupiditate culpa doloremque deleniti repellat. Veniam quos repellat voluptas animi adipisci.
                        Nisi eaque consequatur. Voluptatem dignissimos ut ducimus accusantium perspiciatis.
                        Quasi voluptas eius distinctio. Atque eos maxime.
                        </p>
                        <div class="testimonial-slider__author">
                            <img src="images/avatars/f2.jpg" alt="Author image" class="testimonial-slider__avatar">
                            <cite class="testimonial-slider__cite">
                                <strong>Graciela Risco de Domínguez</strong>
                                <span>Rectora de UTP</span>
                            </cite>
                        </div>
                    </div> <!-- end testimonials__slide -->
    
                    <div class="testimonial-slider__slide">
                        <p>
                        Repellat dignissimos libero. Qui sed at corrupti expedita voluptas odit. Nihil ea quia nesciunt. Ducimus aut sed ipsam.  
                        Autem eaque officia cum exercitationem sunt voluptatum accusamus. Quasi voluptas eius distinctio.
                        Voluptatem dignissimos ut.
                        </p>
                        <div class="testimonial-slider__author">
                            <img src="images/avatars/f3.jpg" alt="Author image" class="testimonial-slider__avatar">
                            <cite class="testimonial-slider__cite">
                                <strong>Leandro Mariátegui</strong>
                                <span>Decano de la Facultad de Ingeniería</span>
                            </cite>
                        </div>
                    </div> <!-- end testimonials__slide -->
    
                    <div class="testimonial-slider__slide">
                        <p>
                        Nunc interdum lacus sit amet orci. Vestibulum dapibus nunc ac augue. Fusce vel dui. In ac felis 
                        quis tortor malesuada pretium. Curabitur vestibulum aliquam leo. Qui sed at corrupti expedita voluptas odit. 
                        Nihil ea quia nesciunt. Ducimus aut sed ipsam.
                        </p>
                        <div class="testimonial-slider__author">
                            <img src="images/avatars/user-05.jpg" alt="Author image" class="testimonial-slider__avatar">
                            <cite class="testimonial-slider__cite">
                                <strong>Jeff Bezos</strong>
                                <span>CEO, Amazon</span>
                            </cite>
                        </div>
                    </div> <!-- end testimonials__slide -->

                </div> <!-- end testimonial slider -->
                
            </div> <!-- end column -->

        </div> <!-- end row -->


        <!-- CTA
        ================================================== -->
        <div class="s-cta">

            <div class="row">
                <div class="column large-full">
                    <h2 class="section-desc" data-aos="fade-up">
                        <?php echo $licencia ?>
                    </h2>
                </div>
            </div>
    
            <div class="row cta-content" data-aos="fade-up">
                <div class="column large-full">
                    <p>
                        Obtén visión <a href="https://www.dreamhost.com/r.cgi?287326">internacional</a>.
                      y experiencia global con las mejores universidades de Europa, Estados Unidos y Sudamérica. Programas especiales y becas integrales
                    </p>
    
                    <a href="<?php echo $matricula ?>" class="btn btn--primary h-full-width">Matriculate</a>
                </div>
            </div> <!-- end cta-content -->
    
        </div> <!-- end s-cta -->


    </section> <!-- end s-testimonials -->


    <!-- footer
    ================================================== -->
    <footer class="s-footer h-dark-bg">
        
        <div class="right-vert-line"></div>

        <div class="row s-footer__main">
            <div class="column large-6">
                <div class="section-intro" data-aos="fade-up">
                    <h3 class="subhead">Contacto</h3>

                    <h1 class="display-1">
                        <?php echo $Descr_Contacto ?>
                    </h1>
                </div>

                <div class="footer-email-us">
                    <a href="mailto:#0" class="btn btn--primary h-full-width">Hablemos</a>
                </div>
            </div>

            <div class="column large-5">
                <div class="footer-contacts">
                    <div class="footer-contact-block" data-aos="fade-up">
                        <h5 class="footer-contact-block__header">
                            <?php echo $Footer[0] ?>
                        </h5>
                        <p class="footer-contact-block__content">
                            <a href="mailto:#0">admision@utp.edu.pe</a>
                        </p>
                    </div> <!-- end footer-contact-block -->
                    <div class="footer-contact-block" data-aos="fade-up">
                        <h5 class="footer-contact-block__header">
                        <?php echo $Footer[1] ?>
                        </h5>
                        <p class="footer-contact-block__content">
                            <a href="tel:+1975432345">(01) 315 9610 </a>
                        </p>
                    </div> <!-- end footer-contact-block -->
                    <br>
                    <div class="footer-contact-block" data-aos="fade-up">
                        <h5 class="footer-contact-block__header">
                        <?php echo $Footer[2] ?>
                        </h5>
                        <ul class="footer-contact-block__list">
                            <li><a href="<?php echo $url2 ?>">Twitter</a></li>
                            <li><a href="<?php echo $url3 ?>">Instagram</a></li>
                            <li><a href="#0">Behance</a></li>
                            <li><a href="#0">Dribbble</a></li>
                        </ul>
                    </div> <!-- end footer-contact-block -->
                </div>
            </div>
        </div> <!-- end s-footer__main -->

        <div class="row s-footer__bottom">
            <div class="column large-full ss-copyright">
                <span>© Copyright 2021</span> 
                <span><a href="https://www.styleshout.com/"></a></span>
            </div> <!-- end ss-copyright -->

            <div class="ss-go-top">
                <a class="smoothscroll" title="Back to Top" href="#top">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0l8 9h-6v15h-4v-15h-6z"/></svg>
                </a>
            </div> <!-- end ss-go-top -->
        </div> <!-- end s-footer__bottom -->

    </footer> <!-- end s-footer -->


    <!-- photoswipe background
    ================================================== -->
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title=
                    "Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title=
                    "Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title=
                "Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>

        </div>

    </div> <!-- end photoSwipe background -->


    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>