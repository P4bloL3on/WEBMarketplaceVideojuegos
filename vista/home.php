<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <title>Neruda Games</title>
    <link rel="stylesheet" type="text/css" href="../estilos/bootstrap.min.css">
    <link rel="stylesheet" href="../estilos/home.css">
    <?php 
    include_once '../modelo/juegos.php';
    include_once '../modelo/db.php';
    ?>
    
</head>

<body>
    <!-- ***** cabecera ***** -->
    <header class="cabecera">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="home.php" class="logo">Neruda<em> Games</em></a>
                        <!-- ***** Logo End ***** -->
                        
                        <ul class="nav">
                            <form action="../controlador/buscador.php" method="get" >
                                <span class="material-icons">
                                    search
                                </span>
                                <input type="text" name="busqueda" id="buscador" placeholder="Buscar...">
                                
                            </form>
                            <li class="scroll-to-section"><a href="#top" class="active">Inicio</a></li>
                            <li class="scroll-to-section"><a href="#features">Juegos</a></li>
                            <li class="scroll-to-section"><a href="#topJuegos">Popular</a></li>
                            <li class="scroll-to-section"><a href="#opiniones">Opiniones</a></li>
                            <li class="scroll-to-section"><a href="#contact-us">Contactanos</a></li> 
                            <li class="main-button"><a href="../controlador/logout.php">Cerrar Sesion</a></li>
                        </ul>        
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** fin cabecera ***** -->

    <!-- ***** banner ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="https://youtu.be/CdLhjv9H01Y" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h6>juega mas, gasta menos</h6>
                <h2>gaming is <em>real</em></h2>
                <div class="main-button scroll-to-section">
                    <a href="#features">Explora nuestro catalogo</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** fin banner ***** -->

    <!-- ***** juegos ***** -->
    <section class='section' id='features'>
            <div class='container'>
            <div class="section-heading">
                        <h2>Top<em>Juegos</em></h2>
                        
                    </div>
                <div class='row'>
                        <ul class='features-items'>
                            <!--aqui irán los juegos-->
                            <?php
                                $juegos= new buscar;
                                $juegos->mostrarJuegos();

                            ?>
                        </ul>
                </div>
            </div>
            <div class="main-rounded-button"><a href="../controlador/juegos.php">Ver mas</a></div>    
    </section>
    <!-- ***** fin juegos ***** -->

    <!-- ***** juegos del mes ***** -->
    <section class="section" id="topJuegos">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Best <em>Sellers</em></h2>
                    </div>
                </div>
            </div>
            <div class="row" id="tabs">
              <div class="col-lg-4">
                <ul>
                  <li><a href='#tabs-1'><img src="assets/images/tabs-first-icon.png" alt="">The Elder Scroll V: Skyrim</a></li>
                  <li><a href='#tabs-2'><img src="assets/images/tabs-first-icon.png" alt="">Halo Infinite</a></a></li>
                  <li><a href='#tabs-3'><img src="assets/images/tabs-first-icon.png" alt="">Fifa 22</a></a></li>
                  <li><a href='#tabs-4'><img src="assets/images/tabs-first-icon.png" alt="">Farming Simulator</a></a></li>
                  <div class="main-rounded-button"><a href="#">Explorar mas juegos</a></div>
                </ul>
              </div>
              <div class="col-lg-8">
                <section class='tabs-content'>
                  <article id='tabs-1'>
                    <img src="https://s1.gaming-cdn.com/images/products/1512/271x377/the-elder-scrolls-v-skyrim-special-edition-special-edition-pc-juego-steam-cover.jpg" alt="First Class">
                    <h4>The Elder Scroll V: Skyrim</h4>
                    <p>Alduin, también conocido como el Devorador de Mundos, es el principal antagonista del juego, un dragón gigante que, según la profecía, destruirá al mundo. La acción se desarrolla en el mundo de Skyrim, concretamente en la provincia del extremo norte de Tamriel. El jugador debe esforzarse para aumentar las fortalezas y habilidades de su personaje, a la vez que se abre camino a través del mapa.</p>
                    <div class="main-button">
                        <a href="#">Saber mas</a>
                    </div>
                  </article>
                  <article id='tabs-2'>
                    <img src="https://www.instant-gaming.com/images/products/2674/271x377/2674.jpg" alt="Second Training">
                    <h4>Halo Infinite</h4>
                    <p>Halo Infinite para PC y Xbox ONE fue originalmente ideado para ser lanzado como Halo 6, siendo la sexta entrega principal de la franquicia. Se trata de un shooter en primera persona de ciencia ficción militar en el que la humanidad lucha por la supervivencia en contra de alienígenas y fanáticos religiosos - y alienígenas que son fanáticos religiosos. A lo largo de sus diversas entregas, la serie ha sido aclamada y actualmente sigue contando con un gran número de seguidores.</p>
                    <div class="main-button">
                        <a href="#">Saber mas</a>
                    </div>
                  </article>
                  <article id='tabs-3'>
                    <img src="https://s3.gaming-cdn.com/images/products/9071/271x377/fifa-22-pc-juego-origin-cover.jpg" alt="Third Class">
                    <h4>Fifa 22</h4>
                    <p>FIFA 22 para PC es el trigésimo lanzamiento de la franquicia de la popular serie de videojuegos de simulación de fútbol, ​​que sigue los altibajos en la vida real de jugadores y equipos de todo el mundo, utilizando la captura de movimiento real de los jugadores y combinándola con gráficos y físicas de última generación para que cada juego te deje tan agotado como si lo hubieras jugado de verdad.</p>
                    <div class="main-button">
                        <a href="#">Saber mas</a>
                    </div>
                  </article>
                  <article id='tabs-4'>
                    <img src="https://s1.gaming-cdn.com/images/products/8676/271x377/farming-simulator-22-pc-mac-juego-steam-cover.jpg" alt="Fourth Training">
                    <h4>Farming Simulator</h4>
                    <p>Farming Simulator 22 para PC es un juego de simulación agrícola en una serie que comprende alrededor de catorce ediciones, distribuidas tanto para PC como para dispositivos móviles. El jugador, ese eres tú, es un agricultor, y tu objetivo es mantener y hacer crecer la granja para que sea un éxito.</p>
                    <div class="main-button">
                        <a href="#">Saber mas</a>
                    </div>
                  </article>
                </section>
              </div>
            </div>
        </div>
    </section>

    <!-- ***** Colaboradores ***** -->
    <section class="section" id="opiniones">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Opiniones de <em>Usuarios</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="sponsor-item">
                        <div class="image-thumb">
                            <img src="https://s1.gaming-cdn.com/images/avatars/10530414-1626034740.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>Rayman Legends</span>
                            <h4>Bret D. Bowers</h4>
                            <p>rapido y sin estafas como siempre 10/10</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sponsor-item">
                        <div class="image-thumb">
                            <img src="https://s1.gaming-cdn.com/images/avatars/2245557-1526308614.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>Final Fantasy XIV: Endwalker</span>
                            <h4>Hector T. Daigl</h4>
                            <p>Recibido hace un par de días la clave del early access, y recién la de la expansión, ningún problema</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sponsor-item">
                        <div class="image-thumb">
                            <img src="https://s1.gaming-cdn.com/images/avatars/10596630-1631714554.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>Power Trainer</span>
                            <h4>Paul D. Newman</h4>
                            <p>Como siempre y ofreciendo el mejor precio</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** fin colaboradores ***** -->
    
    <!-- ***** contacto ***** -->
    <section class="section" id="contact-us">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div id="map">
                      <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="600px" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="contact-form">
                        <form id="contact" action="" method="post">
                          <div class="row">
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-12 col-sm-12">
                              <fieldset>
                                <input name="subject" type="text" id="subject" placeholder="Subject">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button">Send Message</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** fin Contact ***** -->
    <!-- js -->
    <script src="../js/jquery-2.1.0.min.js"></script>
    <script src="../js/accordions.js"></script>
    <script src="../js/custom.js"></script>

</body>
</html>