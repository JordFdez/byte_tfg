<!DOCTYPE html>
<html>
<head>

	<title>pagina</title>

    <link rel="stylesheet" href="../css/pagina.css" />
    <link rel="stylesheet" href="../css/pagina2.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://kit.fontawesome.com/e465e8285d.js" crossorigin="anonymous"></script>

    
</head>
<body>
    
    <header>
        <div class="menu">
            <h1 class="playlist">Play list</h1>
            <div class="playlistdiv">
                <h4 class="active"><span></span><i class="bi bi-music-note-list"></i> play list </h4>
                <h4><span></span><i class="bi bi-music-note-list"></i> lo ultimo escuchado </h4>
                <h4><span></span><i class="bi bi-music-note-list"></i> recomendaciones </h4>
            </div>
            <div class="menu_canciones" id="aleatorio">
                <li class="lista_canciones1">
                    <span>01</span>
                    <img src="../otro/img/1.jpg">
                    <h5>On My Way
                        <div class="subtitulo">Alan Walker</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle" id="1"></i>

                </li>
                <li class="lista_canciones1">
                    <span>02</span>
                    <img src="../otro/img/2.jpg">
                    <h5>Faded
                        <div class="subtitulo">Alan Walker</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle" id="2"></i>

                </li>
                <li class="lista_canciones1">
                    <span>03</span>
                    <img src="../otro/img/3.jpg">
                    <h5>Cartoon On & On
                        <div class="subtitulo">Daniel Levi</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle" id="3"></i>

                </li>
                <li class="lista_canciones1">
                    <span>04</span>
                    <img src="../otro/img/4.jpg">
                    <h5>Warriyo
                        <div class="subtitulo">Mortals</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle" id="4"></i>

                </li>
                <li class="lista_canciones1">
                    <span>05</span>
                    <img src="../otro/img/5.jpg">
                    <h5>Numb
                        <div class="subtitulo">Linkin Park</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle" id="5"></i>

                </li>
                <li class="lista_canciones1">
                    <span>06</span>
                    <img src="../otro/img/6.jpg">
                    <h5>Electronic Music
                        <div class="subtitulo">Electro</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle" id="6"></i>

                </li>
                <li class="lista_canciones1">
                    <span>07</span>
                    <img src="../otro/img/7.jpg">
                    <h5>Sick Obsession
                        <div class="subtitulo">Landon Tewers</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle" id="7"></i>

                </li>
                <li class="lista_canciones1">
                    <span>08</span>
                    <img src="../otro/img/8.jpg">
                    <h5>Take What You Want
                        <div class="subtitulo">Post Malone</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle" id="8"></i>

                </li>
                <li class="lista_canciones1">
                    <span>09</span>
                    <img src="../otro/img/9.jpg">
                    <h5>Dame
                        <div class="subtitulo">Quevedo</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle" id="9"></i>

                </li>
                <li class="lista_canciones1">
                    <span>10</span>
                    <img src="../otro/img/10.jpg">
                    <h5>Yandel 150
                        <div class="subtitulo">Feid</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle" id="10"></i>

                </li>
            </div>
        </div>


        <div class="canciones">
            <nav>
                <ul>
                    
                    <li><a href="sobre_nosotros.html">Sobre nosostros</a></li>
                    <li><a href="sorteo.html">Sorteo</a></li>
                    <li><a href="plan.php">Planes</a></li>
                    
                </ul>
                <!-- <div class="buscar">
                    <i class="bi bi-search"></i>
                    <input type="text" placeholder="Buscar Música...">
                </div> -->
                <div class="user">
                    <img src="../img/logo/logo_transparent.png">
                </div>
            </nav>
            <div class="contenido">
                <h1>BYTE</h1>
                <h4><i>Escucha tu ritmo, en cualquier lugar y en todo momento, con Byte, la mejor experiencia de streaming musical en línea.</i></h4>
                <div class="botones">
                    <a href="inicio.html"><b><span>Iniciar Sesion</span></b></a>
                    <a href="registro.html"><b><span>Registrarse</span></b></a>
                </div>
            </div>
            <div class="canciones_populares">
                <div class="h4">
                    <h4>Canciones Populares</h4>
                    <div class="btn_s">
                        <i class="bi bi-arrow-left-short" id="left_scroll"></i>
                        <i class="bi bi-arrow-right-short" id="right_scroll"></i>
                    </div>
                </div>
                <div class="canciones_pop" id="aleatorio1">
                    <li class="lista_canciones1">
                        <div class="img_play">
                            <img src="../otro/img/1.jpg">
                            <i class="bi playListPlay bi-play-circle" id="1"></i>
                        </div>
                        <h5>On My Way
                            <div class="subtitulo">Alan Walker</div>
                        </h5>
                    </li>

                    <li class="lista_canciones1">
                        <div class="img_play">
                            <img src="../otro/img/2.jpg">
                            <i class="bi playListPlay bi-play-circle" id="2"></i>
                        </div>
                        <h5>Faded
                            <div class="subtitulo">Alan Walker</div>
                        </h5>
                    </li>

                    <li class="lista_canciones1">
                        <div class="img_play">
                            <img src="../otro/img/3.jpg">
                            <i class="bi playListPlay bi-play-circle" id="3"></i>
                        </div>
                        <h5>Cartoon On & On
                            <div class="subtitulo">Daniel Levi</div>
                        </h5>
                    </li>

                    <li class="lista_canciones1">
                        <div class="img_play">
                            <img src="../otro/img/4.jpg">
                            <i class="bi playListPlay bi-play-circle" id="4"></i>
                        </div>
                        <h5>Warriyo
                            <div class="subtitulo">Mortals</div>
                        </h5>
                    </li>

                    <li class="lista_canciones1">
                        <div class="img_play">
                            <img src="../otro/img/5.jpg">
                            <i class="bi playListPlay bi-play-circle" id="5"></i>
                        </div>
                        <h5>Numb
                            <div class="subtitulo">Linkin Park</div>
                        </h5>
                    </li>

                    <li class="lista_canciones1">
                        <div class="img_play">
                            <img src="../otro/img/6.jpg">
                            <i class="bi playListPlay bi-play-circle" id="6"></i>
                        </div>
                        <h5>Electronic Music
                            <div class="subtitulo">Electro</div>
                        </h5>
                    </li>

                    <li class="lista_canciones1">
                        <div class="img_play">
                            <img src="../otro/img/7.jpg">
                            <i class="bi playListPlay bi-play-circle" id="7"></i>
                        </div>
                        <h5>Sick Obsession
                            <div class="subtitulo">Landon Tewers</div>
                        </h5>
                    </li>

                    <li class="lista_canciones1">
                        <div class="img_play">
                            <img src="../otro/img/8.jpg">
                            <i class="bi playListPlay bi-play-circle" id="8"></i>
                        </div>
                        <h5>Take What You Want
                            <div class="subtitulo">Post Malone</div>
                        </h5>
                    </li>

                    <li class="lista_canciones1">
                        <div class="img_play">
                            <img src="../otro/img/9.jpg">
                            <i class="bi playListPlay bi-play-circle" id="9"></i>
                        </div>
                        <h5>Dame
                            <div class="subtitulo">Quevedo</div>
                        </h5>
                    </li>

                    <li class="lista_canciones1">
                        <div class="img_play">
                            <img src="../otro/img/10.jpg">
                            <i class="bi playListPlay bi-play-circle" id="10"></i>
                        </div>
                        <h5>Yandel 150
                            <div class="subtitulo">Feid</div>
                        </h5>
                    </li>

                </div>
            </div>
            <div class="artistas_populares">
                <div class="h4">
                    <h4>Artistas Populares</h4>
                    <div class="btn_s">
                        <i class="bi bi-arrow-left-short" id="left_scrolls"></i>
                        <i class="bi bi-arrow-right-short" id="right_scrolls"></i>
                    </div>
                </div>
                
                <div class="item artistas_bx" id="aleatorio2">
                
                    <li>
                        <img src="../otro/img/alan.jpg" alt="Alan Walker" title="Alan Walker" >
                    </li>
                    <li>
                        <img src="../otro/img/feid.jpg" alt="Feid" title="Feid">
                    </li>
                    <li>
                        <img src="../otro/img/9.jpg" alt="Quevedo" title="Quevedo" >
                    </li>
                    <li>
                        <img src="../otro/img/linkinpark.jpg" alt="Linkin Park" title="Linkin Park" >
                    </li>
                    <li>
                        <img src="../otro/img/ChrisBrown.jpg" alt="Chris Brown" title="Chris Brown" >
                    </li>
                    <li>
                        <img src="../otro/img/drake.jpg" alt="Drake" title="Drake" >
                    </li>
                    <li>
                        <img src="../otro/img/HarryStyles.jpg" alt="Harry Styles" title="Harry Styles" >
                    </li>
                    <li>
                        <img src="../otro/img/raw.jpg" alt="Rauw Alejandro" title="Rauw Alejandro" >
                    </li>
                    <li>
                        <img src="../otro/img/4.jpg" alt="" >
                    </li>
                    <li>
                        <img src="../otro/img/5.jpg" alt="" >
                    </li>
                    <li>
                        <img src="../otro/img/6.jpg" alt="" >
                    </li>
                    <li>
                        <img src="../otro/img/7.jpg" alt="" >
                    </li>
                    <li>
                        <img src="../otro/img/8.jpg" alt="" >
                    </li>
                    <li>
                        <img src="../otro/img/badbunny.jpg" alt="Bad Bunny" title="Bad Bunny" >
                    </li>
                    <li>
                        <img src="../otro/img/rosalia.jpg" alt="Rosalia" title="Rosalia" >
                    </li>

                </div>
            </div>
        </div>

        <div class="master_play">
            <div class="wave">
                <div class="wave1"></div>
                <div class="wave1"></div>
                <div class="wave1"></div>
            </div>
            <!-- Cancion por defecto al entrar a la pagina -->
            <img src="../Caratula/DUKI_BZRP.jpg" alt="Alan" id="poster_master_play">
            <h5 id="title">Music Sessions #50<br>
                <div class="subtitle">Duki || BZRP</div>
            </h5>
            <div class="icon">
                <i class="bi bi-skip-start-fill" id="back"></i>
                <i class="bi bi-play-fill" id="masterPlay"></i>
                <i class="bi bi-skip-end-fill" id="next"></i>
            </div>
            <span id="currentStart">0:00</span>
            <div class="bar">
                <input type="range" id="seek" min="0" value="0" max="100">
                <div class="bar2" id="bar2"></div>
                <div class="dot"></div>
            </div>
            <span id="currentEnd">0:00</span>
    
            <div class="vol">
                <i class="bi bi-volume-down-fill" id="vol_icon"></i>
                <input type="range" id="vol" min="0" value="30" max="100">
                <div class="vol_bar"></div>
                <div class="dot" id="vol_dot"></div>
            </div>
        </div>



    </header>
    <script src="../java/app.js"></script>
    <script src="../java/aleatorio.js" ></script>

</body>
</html>