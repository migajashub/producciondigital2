<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Hora de expresionismo</title>
    </head>
    <body>
        <div class="fondo1">
            <div class="welcome">
                <div class="img_welcome">
                    <div class="image-container">
                        <img id="current_image" src="img/welcome1.png" alt="Vom Griesbraukeller">
                        <img id="next_image" src="img/welcome1.png" alt="Next image">
                    </div>
                    <div class="botones_slider">
                        <span class="btn active" 
                        data-img="img/welcome1.png" 
                        data-texto1="Vom Griesbraukeller"
                        data-texto2="(Gabriele Münter, 1908)"></span>

                        <span class="btn" 
                        data-img="img/welcome2.jpg" 
                        data-texto1="Junger Mann und Mädchen"
                        data-texto2="(Erick Heckel, 1909)"></span>

                        <span class="btn" 
                        data-img="img/welcome3.jpg" 
                        data-texto1="Murnau – vista con ferrocarril y castillo"
                        data-texto2="(Vassily Kandinsky, 1909)"></span>
                    </div>
                    <div class="texto_slider">
                        <p id="texto_slider">
                            <span id="welcome_linea1">Vom Griesbraukeller</span><br>
                            <span id="welcome_linea2">(Gabriele Münter, 1908)</span>
                        </p>
                    </div>   
                            
                </div>
                <div class="right">
                    <img class="top_right" src="img/movart.svg" alt="movart">
                    <div class ="nexto_top_right">
                        <form action="resultados_buscar.php" method="post">
                            <input type="search" name="buscar" placeholder="Busqueda rápida" />
                            <input type="submit" value="⌕">
                        </form>
                    </div>
                    <svg class="overlay-mask" style="position:absolute; inset:0; width:100%; height:100%;z-index:1; pointer-events:none;" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                        <defs>
                            <mask id="cutout">
                                <rect width="100%" height="100%" fill="white"/>
                                <g transform="translate(14,40) scale(0.16) ">
                                <polygon points="67,13.8 62.1,13.8 54.5,24.1 48.7,13.8 33.9,13.8 45.2,33.8 34,48.9 34,44.4 13.9,44.4 13.9,25.3 28.4,25.3 
                                    28.4,20.5 13.9,20.5 13.9,6 31.1,6 31.1,1.2 0,1.2 0,49.2 33.8,49.2 34,49.2 38.7,49.2 47.2,37.6 53.9,49.2 68.6,49.2 56.6,27.9 	
                                    "/>
                                <path d="M93.2,12.8c-3.4,0-6.4,1.8-8.8,5.4v-5.3c-4.9,0.6-9.2,0.9-12.8,0.9v47.4h12.8V46.3c2.2,2.6,5,3.9,8.4,3.9
                                    c8.3,0,12.5-6.2,12.5-18.7c0-5.7-1.1-10.2-3.3-13.5C99.9,14.5,96.9,12.8,93.2,12.8z M88.4,45c-2.7,0-4.1-4.9-4.1-13.8
                                    S85.7,18,88.6,18h0c2.3,0,3.5,4,3.5,13.2C92,40.4,90.8,45,88.4,45z"/>
                                <path d="M131.4,12.8c-3,0-5.6,2-7.7,5.8v-5.8c-3.9,0.6-7.4,1-10.3,1l-2.5,0v35.4h12.8V28c0-2.2,0.4-4.3,1.1-6.3s1.5-3,2.4-3
                                    c1.1,0,1.6,0.8,1.6,2.2c0,0.8-0.2,1.6-0.5,2.6c-0.2,0.7-0.5,1.7-0.8,3.1h8.8v0c0.3-1.3,0.5-2.2,0.7-2.9c0.4-1.5,0.6-2.9,0.6-4.1
                                    C137.6,15.1,135.5,12.8,131.4,12.8z"/>
                                <path d="M167.1,38.6c0,5.3-2.2,7.9-6.6,7.9c-4.7,0-7.1-4.6-7.1-13.9h18.7c0-13.2-5.1-19.8-15.4-19.8c-4.9,0-8.9,1.8-12.1,5.5
                                    c-3.1,3.6-4.7,8.3-4.7,14.1c0,11.8,5.9,17.7,17.7,17.7c9.1,0,13.9-4.1,14.5-12.3l-5.2-1.5C167,37.1,167.1,37.9,167.1,38.6z
                                    M153.3,28.6l0.1-3.2c0.3-6.1,1.5-9.2,3.8-9.2c2.5,0,3.7,4.1,3.7,12.4H153.3L153.3,28.6z"/>
                                <polygon points="167,36.2 167,36.2 167,36.2 	"/>
                                <path d="M194.9,25.6c-5.2-2.1-7.8-4.1-7.8-5.9c0-2.5,1.5-3.7,4.5-3.7c4.9,0,7.4,2.7,7.4,8l6.2-1.1l0,0c-0.8-6.6-5.2-10-13.2-10
                                    c-4.5,0-8.2,1.1-11.1,3.2c-2.9,2.1-4.3,4.9-4.3,8.2c0,5.1,3.8,9.2,11.3,12.5c5,2.1,7.5,4.1,7.5,5.8c0,2.6-1.5,3.9-4.6,3.9
                                    c-2.3,0-4.4-0.8-6.1-2.3c-1.7-1.5-2.6-3.3-2.6-5.4c0-0.7,0-1.4,0.1-2.2l-6.6,1.3c0,8,5.4,12,16.1,12c10.2,0,15.2-4,15.2-12
                                    C206.9,33,202.9,28.9,194.9,25.6z"/>
                                <ellipse cx="218.6" cy="4.6" rx="6" ry="4.6"/>
                                <path d="M212.1,49.2h12.8V12.8c-4.5,0.6-8.8,1-12.8,1V49.2z"/>
                                <path d="M248.1,12.8L248.1,12.8c-11.7,0-17.6,6.2-17.6,18.6c0,12.4,5.9,18.6,17.6,18.6c11.7,0,17.6-6.2,17.6-18.6
                                    C265.7,19,259.8,12.8,248.1,12.8z M248.1,46.8c-2.8,0-4.2-5.1-4.2-15.4c0-10.3,1.4-15.4,4.2-15.4c2.9,0,4.3,5.1,4.3,15.4
                                    C252.4,41.7,250.9,46.8,248.1,46.8z"/>
                                <path d="M295.7,12.8c-4.6,0-8.5,2.2-11.7,6.6v-6.6c-4.2,0.6-8.4,0.9-12.8,0.9v35.5H284V29.8c0-2.9,0.5-5.3,1.6-7.4
                                    c1.1-2.1,2.4-3.1,3.9-3.1c1.5,0,2.2,1.3,2.2,4v26h12.8h0V21.9C304.6,15.8,301.6,12.8,295.7,12.8z"/>
                                <path d="M318.5,9.3c4,0,6-1.5,6-4.6c0-3.1-2-4.6-6-4.6c-4,0-6,1.5-6,4.6C312.5,7.7,314.5,9.3,318.5,9.3z"/>
                                <path d="M311.9,49.2h12.8V12.8c-4.5,0.6-8.8,1-12.8,1V49.2z"/>
                                <path d="M349.3,25.6c-5.2-2.1-7.8-4.1-7.8-5.9c0-2.5,1.5-3.7,4.5-3.7c4.9,0,7.4,2.7,7.4,8l6.2-1.1l0,0c-0.8-6.6-5.2-10-13.2-10
                                    c-4.5,0-8.2,1.1-11.1,3.2c-2.9,2.1-4.3,4.9-4.3,8.2c0,5.1,3.8,9.2,11.3,12.5c5,2.1,7.5,4.1,7.5,5.8c0,2.6-1.5,3.9-4.6,3.9
                                    c-2.3,0-4.4-0.8-6.1-2.3c-1.7-1.5-2.6-3.3-2.6-5.4c0-0.7,0.1-1.4,0.1-2.2L330,38c0,8,5.4,12,16.1,12c10.1,0,15.2-4,15.2-12
                                    C361.3,33,357.3,28.9,349.3,25.6z"/>
                                <path d="M409.4,12.7c-4.3,0-7.9,1.9-10.7,5.8c-1.8-3.8-4.6-5.7-8.3-5.7c-4.4,0-8.2,2-11.2,6.1v-6.1c-4.2,0.6-8.5,0.9-12.8,0.9v35.5
                                    h12.8v-20c0-6.7,1.6-10,4.8-10c1.2,0,1.8,1.3,1.8,4v26h12.8V29.1c0-6.7,1.6-10,4.7-10c1.4,0,2,1.2,2,3.5v26.6h12.8V21.7
                                    C418.3,15.7,415.3,12.7,409.4,12.7z"/>
                                <path d="M441.5,12.8L441.5,12.8c-11.7,0-17.6,6.2-17.6,18.6c0,12.4,5.9,18.6,17.6,18.6c11.7,0,17.6-6.2,17.6-18.6
                                    C459,19,453.2,12.8,441.5,12.8z M441.4,46.8c-2.8,0-4.2-5.1-4.2-15.4c0-10.3,1.4-15.4,4.2-15.4c2.9,0,4.3,5.1,4.3,15.4
                                    C445.7,41.7,444.2,46.8,441.4,46.8z"/>
                                </g>
                            </mask>
                        </defs>
                        <rect width="100%" height="100%" fill="rgba(0,0,0,0.8)" mask="url(#cutout)"/>
                    </svg>
                    <h2>1905 - 1933</h2>
                    <p>Recopilatorio web sobre la vanguardia expresionista: orígenes, grupos, obras, artistas y más en un solo lugar</p>
                </div>
            </div>
            <div class="top_navbar_index">
                <a href="galeria.html">Galería</a>
                <a href="artistas.html">Artistas</a>
                <a href="trasfondo.html">Trasfondo</a>
                <a href="grupos.html">Grupos</a>
                <a href="tienda">Tienda</a>
                <a href="#"><i class="fa fa-user-circle"></i></a>
            </div>
            <div class="contenedor">
                <h2>Obras destacadas</h2>
                <div class="timeline">
                    <div class="contenedor_rel">
                        <div class="circulo">
                            <img src="img/munter_la-casa-amarilla_1908.jpg">

                        </div>
                        <div class="tooltip">
                            <h2>La casa amarilla</h2>
                            <p>1908 - Gabriele Münter</p>
                            <a href="#">Más de este artista</a>
                        </div>
                    </div>

                    <div class="contenedor_rel">
                        <div class="circulo">
                            <img src="img/kirchner_mujer-parasol_1909.jpg">

                        </div>
                        <div class="tooltip">
                            <h2>Mujer bajo parasol japonés</h2>
                            <p>1909 - Ernst Ludwig Kirchner</p>
                            <a href="#">Más de este artista</a>
                        </div>
                    </div>

                    <div class="contenedor_rel">
                        <div class="circulo">
                            <img src="img/marc_el-sueño_1912.jpg">

                        </div>
                        <div class="tooltip">
                            <h2>El sueño</h2>
                            <p>1912 - Franz Marc</p>
                            <a href="#">Más de este artista</a>
                        </div>
                    </div>

                    <div class="contenedor_rel">
                        <div class="circulo">
                            <img src="img/kandinsky_paisaje-alamos_1912.jpg">

                        </div>
                        <div class="tooltip">
                            <h2>Paisaje con dos álamos</h2>
                            <p>1912 - Wassily Kandinsky</p>
                            <a href="#">Más de este artista</a>
                        </div>
                    </div>

                    <div class="contenedor_rel">
                        <div class="circulo">
                            <img src="img/heckel_hombres-mesa_1913.jpeg">

                        </div>
                        <div class="tooltip">
                            <h2>Dos hombres en una mesa</h2>
                            <p>1913 - Erich Heckel</p>
                            <a href="#">Más de este artista</a>
                        </div>
                    </div>


                    <div class="contenedor_rel">
                        <div class="circulo">
                            <img src="img/kirchner_bridge-city-gates_1913.jpg">

                        </div>
                        <div class="tooltip">
                            <h2>The bridge at the city gates, Chemnitz</h2>
                            <p>1913 - Ernst Ludwig Kirchner</p>
                            <a href="#">Más de este artista</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="fondo2">
                <div class="contenedor_entrecolor">
                    <h2>Obra del día</h2>
                    <div class="encuadrado">
                        <div class="doscolumnas">
                                <?php 
                                $dia=date("l");
                                $obras = [
                                "Monday" => ["h2" => "Artisin", "p" => "Ernst Ludwig Kirchner, 1910", "img" => "img/kirchner_artisin-marcella_1910.jpg", "a" => "galeria.html"],
                                "Tuesday"=> ["h2" => "Cuatro bañistas", "p" => "Ernst Ludwig Kirchner, 1910", "img" => "img/kirchner_cuatro-bañistas_1910.jpg", "a" => "galeria.html"],
                                "Wednesday"=> ["h2" => "El sueño", "p" => "Franz Marc, 1912", "img" => "img/marc_el-sueño_1912.jpg", "a" => "galeria.html"],
                                "Thursday"=> ["h2" => "Casas en Munrau", "p" => "Vasily Kandinsky, 1909", "img" => "img/kandinsky_casas-murnau_1909.jpg"], "a" => "galeria.html",
                                "Friday"=> ["h2" => "Afueras de Murnau", "p" => "Gabriele Münter, 1908", "img" => "img/munter_afueras-murnau_1908.jpg", "a" => "galeria.html"],
                                "Saturday"=> ["h2" => "Landschaft im Herbst", "p" => "Karl Schmidt-Rottluff, 1910", "img" => "img/Saturday.jpg", "a" => "galeria.html"],
                                "Sunday"=> ["h2" => "Dos hombres en una mesa", "p" => "Erich Heckel, 1913", "img" => "img/heckel_hombres-mesa_1913.jpg", "a" => "galeria.html"],
                                ];
                                $obra = $obras[$dia];
                                echo "<div class='left_gen'><img src='{$obra["img"]}'></div>";
                                echo "<div class='right_gen'>";
                                echo "<h2>{$obra['h2']}</h2>";
                                echo "<p>{$obra['p']}</p>";
                                echo "<br><a href='{$obra["a"]}'>Ver más de este artista</a>";
                                echo "</div>";
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="fondo1">
            <div class="contenedor">
                <div class="doscolumnas">
                    <div class="right_gen"> 
                        <h2>¿Quieres decirnos algo?</h2>
                        <form action="contacto.php" method="post">
                            <label>Nombre</label>
                            <input type="text" name="nombre" required>
                            <label>Email</label>
                            <input type="email" name="email" required>
                            <label>Asunto</label>
                            <input type="text" name="asunto" required>
                            <label>Mensaje</label>
                            <textarea name="mensaje" required></textarea>
                            <label>Tipo de mensaje</label>
                            <select name="tipo" required>
                                <option value="">Seleccioná una opción</option>
                                <option value="sugerencia">Sugerencia</option>
                                <option value="comentario">Comentario</option>
                                <option value="pregunta">Pregunta</option>
                            </select>
                            <input type="submit" class="submit_contacto" value="Enviar">
                        </form>
                    </div>
                    <div class="left_gen">
                    <img src="img/help.jpg">
                    </div>
                </div>
            </div>
        </div>

    <script src="script.js"></script>
    </body>
</html>