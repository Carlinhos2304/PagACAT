<?php
session_start(); // Inicia la sesión
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Negro Spirituals</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="icon" href="/PagCentroCultural/imgLogo/Logotipo circular blanco.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400&family=Montserrat:wght@400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@500&family=Montserrat:wght@500&family=Oswald:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@500&family=Montserrat:wght@500&family=Oswald:wght@300;400&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark p-4">
        <a class="navbar-brand" href="Home.html"> 
            <img src="imgLogo/logo.png" alt="Logo" style="max-height: 70px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="Home.html">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="QuienesSomos.html">¿Quiénes Somos?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Galeria.html">Galería</a>
                </li>
                <!-- En tu archivo NegroSpirituals.html -->
                <li class="nav-item">
                    <a class="nav-link active special-text" aria-current="page" href="NegroSpirituals.php">Negro Spirituals</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Asociate.html">Asóciate</a>
                </li>
                
            </ul>
        </div>
    </nav>



     <!-- Quienes SOMOS -->

     <section class="quienes-somos-negro">
        <div class="container">
            <h2>Quiénes Somos "Negro Spirituals"</h2>
            <p class="descripcion-directores-negro">
                Directores de Coros con vasta experiencia en distintos tipos de Coros, desde Coros de niños hasta Coros de adultos mayores.
            </p>
            <div class="row">
                <div class="col-md-4">
                    <div class="card-negro">
                        <img src="img/teresa-aedo.jpg" alt="Teresa Aedo González">
                        <h3>Teresa E. Aedo.</h3>
                        <!-- Botones "Leer más" y "Ocultar texto" -->
                        <button class="btn btn-primarys leer-mas">Leer más</button>
                        <button class="btn btn-secondarys ocultar-texto" style="display: none;">Ocultar texto</button>
    
                        <div class="card-details-nuevo contenidoAdicional" style="display: none;">
    
                            <!-- Contenido detallado aquí -->
                            <h4>Directora de Coros:</h4>
                            <ul>
                                <li>Francisco Bilbao (niños Talcahuano)</li>
                                <li>Apoderados Colegio Santa Eufrasia (Concepción)</li>
                                <li>Coros de niñas Congregación Buen Pastor (Concepción)</li>
                                <li>Damas de Rojos (Hospital Higueras Thno)</li>
                                <li>Coro de Profesores Jubilados (Colegio de Profesores A.G)</li>
                                <li>Coro de Niños Acathno</li>
                                <li>Coro Ex Alumnos Apoderados Liceo A-21 (Talcahuano)</li>
                                <li>Coro Escuela Enfermería integrados alumnos de todas las carreras y docentes de la Universidad San Sebastián. Sede Concepcion.</li>
                                <li>Dirige forma Coro Pacientes Esquizofrénicos (Capef Concepción)</li>
                            </ul>
                            <h4>Estudios:</h4>
                            <p>Profesora de Educación Básica Mención Música, Pedagogía en Educación Musical. Estudios en piano, teoría de la música, armonía, etc.</p>
                            <p>Estudia Piano, Teoría de la música, Armonía rinde exámenes en la comisión Del Conservatorio Nacional de Chile Magister "Metodología para la Enseñanza de la música en Educación Pre-Básica, Básica, Media y Superior. Magister en Dirección Coral Magister en Formación Coro Escolar Metodología, audición, Evaluación I, II, III, IV. Armonización y Arreglos Corales I, II, III Estudios de Clarinete, Canto Lírico.</p>
    
                            <h4>Integrante:</h4>
                            <p>Iniciadora e integrante del equipo de trabajo que Organiza Festival Internacional Virtual Negro Spirituals.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-negro">
                        <img src="img/isaac-marquez.jpg" alt="Isaac Márquez Nar" style="height: 465px;">
                        <h3>Isaac Márquez Nar.</h3>
                        <!-- Botones "Leer más" y "Ocultar texto" -->
                        <button class="btn btn-primarys leer-mas">Leer más</button>
                        <button class="btn btn-secondarys ocultar-texto" style="display: none;">Ocultar texto</button>
                        <div class="card-details-nuevo contenidoAdicional" style="display: none;">
                            <!-- Contenido detallado aquí -->
                            <h4>Director de Coros:</h4>
                            <ul>
                                <li>Coro de Petit.</li>
                                <li>Armonía Viva.</li>
                                <li>A tempo.</li>
                            </ul>
                            <h4>Estudios:</h4>
                            <p>Canto.</p>
                            <p>Dirección Coral y Orquesta.</p>
                            <p>Composición, Órgano(Polonia).</p>
                            <h4>Integrante:</h4>
                            <p>La Federación Internacional para la Música Coral, la Mesa de Consejo de la Red Nacional de Coros México, el Club de Organistas de México y el equipo de trabajo del Festival Internacional de Coros Negro Spirituals de Talcahuano-Chile conforman entidades clave. Además, asume el rol de Relacionador Público para establecer comunicación y dar a conocer el festival temático con otras asociaciones y federaciones corales.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-negro">
                        <img src="img/marco-silva.jpg" alt="Marco Silva Catrileo." style="height: 465px;">
                        <h3>Marco Silva Catrileo.</h3>
                        <!-- Botones "Leer más" y "Ocultar texto" -->
                        <button class="btn btn-primarys leer-mas">Leer más</button>
                        <button class="btn btn-secondarys ocultar-texto" style="display: none;">Ocultar texto</button>
                        <div class="card-details-nuevo contenidoAdicional" style="display: none;">
                            <!-- Contenido detallado aquí -->
                            <h4>Director de Coros:</h4>
                            <ul>
                                <li>Coro de Voces Blancas del Colegio Particular Manquimavida de Chiguayante.</li>
                                <li>Coro Infanto Juvenil de la Comuna Chiguayante-Chile.</li>
                                <li>Cuarteto “Amigos de Jesús“.</li>
                                <li>Cuarteto Vocal Libres.</li>
                            </ul>
                            <h4>Estudios:</h4>
                            <p>Estudio Música en la Universidad de Concepción-Chile.</p>
                            <p>Licenciado en Educación General Básica en la UCSSC.</p>
                            <p>Diplomado en Dirección Coral U. de Chile.</p>
                            <p>Especialización en Formación de Coros Escolares Crecer.</p>
                            <p>Cantando Teatro Municipal de Santiago Chile.</p>
                            <h4>Integrante:</h4>
                            <p>Desde el año 2000, ha colaborado activamente en el Encuentro Coral Negro Spirituals de Talcahuano-Chile y forma parte de la mesa de trabajo del Festival Internacional Negro Spirituals desde junio de 2023. Además, ha participado en eventos destacados como Crecer Cantando en el Teatro Municipal de Santiago-Chile.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



     <!-- AQUI ir CUALES SON NUESTROS OBJETIVOS-->
    <section class="nuestros-objetivos">
        <div class="container mt-5">
            <h2>Nuestros Objetivos</h2>
    
            <div class="objetivo">
                <h3>Difundir el género Negro Musical:</h3>
                <p>Difundimos el género en nuestros coros y aquellos que deseen adentrarse a este maravilloso mundo musical.</p>
            </div>
    
            <div class="objetivo">
                <h3>Utilizar como herramienta permanente el Encuentro Coral Virtual:</h3>
                <p>Mantenemos contacto con coros de diferentes lugares, presentando material conocido y nuevo a través de encuentros virtuales.</p>
            </div>

            <div class="objetivo">
                <h3>Proponer:</h3>
                <p>Compartir  repertorio común a los coros para difundir este género fortalecer lazos de amistad, vínculos musicales.</p>
            </div>
    
            <!-- Agrega los demás objetivos de manera similar -->
    
            <div class="objetivo">
                <h3>Para lograr los objetivos propuestos contamos con:</h3>
                <ul>
                    <li>I. La Agrupación Cultural Artística de Talcahuano-Chile.</li>
                    <li>II. Nuestros propios Coros.</li>
                    <li>III. Alumnos tesistas en Computación, Diseño Gráfico y Seguridad Cibernética, pertenecientes a una Institución de Educación Superior. Construyendo nuestra página con toda la información necesaria, incluyendo partituras de este género.</li>
                </ul>
            </div>
        </div>
    </section>

    

    <!-- SECIONES INFORMATIVAS-->
    <section class="info-section-nuevo">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6 info-imagen">
                    <h2>¿Qué es un Negro Spirituals?</h2>
                    <br>
                    <p>Los Negro Spirituals, Son canciones religiosas entonadas a capella por los esclavos en las plantaciones de algodón, surgieron durante la época de esclavitud y se inspiraron en la vida cotidiana.</p>
    
                    <!-- Contenido adicional oculto con JavaScript -->
                    <div class="contenidoAdicional" style="display: none;">
                        <!-- Más contenido aquí -->
                        <p>Estas composiciones reflejaban el ritmo agotador del trabajo en ese entorno, donde los esclavos eran instados a cantar como medida para prevenir fugas y rebeliones.</p>
                        <p>A pesar de su origen en circunstancias adversas, la música de los Negro Spirituals se convirtió en un valioso patrimonio del pueblo Afroamericano. Estas canciones incorporaban motivos bíblicos que simbolizaban poéticamente la realidad de aquellos que experimentaban dolor en el sufrimiento, pero mantenían la esperanza de una liberación futura.</p>
                        <p>Los Spirituals no solo eran expresiones espirituales, sino también estrategias de comunicación que surgían de la improvisación. Su naturaleza táctica iba más allá de lo espiritual, proporcionando a la comunidad Afroamericana una forma de transmitir mensajes de manera creativa y resistente.</p>
                    </div>
    
                    <!-- Botones "Leer más" y "Ocultar texto" -->
                    <button class="btn btn-primary leer-mas">Leer más</button>
                    <button class="btn btn-secondary ocultar-texto" style="display: none;">Ocultar texto</button>
                </div>
                <div class="col-md-6 info-imagen">
                    <img src="img/ngs.jpg" alt="Imagen del nuevo contenido">
                </div>
            </div>
        </div>
    </section>


    


    <section class="info-section-nuevo">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6 info-imagen">
                    <h2>¿Qué es un Góspel?</h2>
                    <br>
                    <p>El Góspel, cuyos orígenes se remontan a 1619 con la llegada del primer africano a la colonia inglesa de Virginia (EEUU) y el primer registro de un esclavo bautizado como cristiano, ha evolucionado de manera significativa a lo largo de la historia.</p>
    
                    <!-- Contenido adicional oculto con JavaScript -->
                    <div class="contenidoAdicional" style="display: none;">
                        <!-- Más contenido aquí -->
                        <p>Thomas A. Dorsey, reconocido como el padre del góspel, desempeñó un papel crucial al acuñar este término para referirse a una canción. Dorsey, un talentoso pianista de blues y jazz, fusionó estos estilos musicales con elementos religiosos, marcando así el inicio de una nueva expresión musical.</p>
                        <p>El surgimiento del Góspel coincide con la liberación de los esclavos, momento en el cual estos obtuvieron el derecho de asistir a ceremonias religiosas. A diferencia de los Negro Spirituals, que representaban un clamor del alma y una protesta, el Góspel se caracteriza por ser directamente destinado a la adoración a Dios. Las letras del Góspel encuentran su inspiración en el carácter y milagros de Jesucristo, proporcionando un vehículo poderoso para la expresión espiritual y la conexión con la fe cristiana.</p>
                    </div>
    
                    <!-- Botones "Leer más" y "Ocultar texto" -->
                    <button class="btn btn-primary leer-mas">Leer más</button>
                    <button class="btn btn-secondary ocultar-texto" style="display: none;">Ocultar texto</button>
                </div>
                <div class="col-md-6 info-imagen">
                    <img src="img/Gospel.webp" alt="Imagen del nuevo contenido">
                </div>
            </div>
        </div>
    </section>

    <section class="info-section-nuevo">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6 info-imagen">
                    <h2>¿Cúales son las Diferencia entre N. Spirituals y Góspel?</h2>
                    <br>
                    <p>Keit Mora Prado, estudiante de Rockapellas Glee club de Ulacit, nos transporta a la época de la esclavitud con una improvisación de los esclavos africanos: “El tren del evangelio se acerca, lo escucho a mano, escucho las ruedas del auto moverse y retumbando por la tierra.</p>
    
                    <!-- Contenido adicional oculto con JavaScript -->
                    <div class="contenidoAdicional" style="display: none;">
                        <!-- Más contenido aquí -->
                        <p>Oh, sube a bordo, niños pequeños. Suben a bordo, niños pequeños. Hay espacio para muchos más” (Spirituals Workshop, París, s. f.). Antes de la abolición de la esclavitud en 1863, los africanos, bajo el sol brillante, el hambre y el dolor, componían melodías para aliviar el peso del trabajo duro.</p>
                        <p>La improvisación era común, con un solo que comenzaba y el grupo respondía, creando así una forma de comunicación entre hermanos. Más allá de su función musical, los Negro Spirituals se convirtieron en una sutil forma de protesta, con interpretaciones que contenían mensajes encriptados, alertando de peligros o revelando estrategias de escape. En resumen, el Negro Spirituals es un género que nació de la improvisación, capturando la realidad y la resistencia de aquellos tiempos difíciles.</p>
                    </div>
    
                    <!-- Botones "Leer más" y "Ocultar texto" -->
                    <button class="btn btn-primary leer-mas">Leer más</button>
                    <button class="btn btn-secondary ocultar-texto" style="display: none;">Ocultar texto</button>
                </div>
                <div class="col-md-6 info-imagen">
                    <img src="img/Gospel.webp" alt="Imagen del nuevo contenido">
                    <img src="img/ngs.jpg" alt="Imagen del nuevo contenido">
                </div>
            </div>
        </div>
    </section>

    <!-- Formulario para descargar partituras -->
    <div class="container mt-5">
        <div class="row d-flex align-items-center">
            <div class="col-md-6 mx-auto text-center formulario-descarga">
                <h2>Descargar Partituras</h2>

                <form id="miFormulario" method="post" action="../php/descargar_partitura.php">

                    <!-- Nombre Completo -->
                    <label for="nombre" class="etiqueta-formulario">Nombre Completo:</label>
                    <input type="text" id="nombre" name="nombre" class="campo-formulario" required>
    
                
                    <!-- Correo Electrónico -->
                    <label for="email" class="etiqueta-formulario">Correo Electrónico:</label>
                    <input type="text" id="email" name="email" class="campo-formulario" required pattern="[a-zA-Z0-9._%+-]+@(inacapmail\.com|gmail\.com|hotmail\.com|otrodominio\.com)">
                    <div id="mensaje-error">
                        <?php
                        if (isset($_SESSION['mensaje']) && !empty($_SESSION['mensaje'])) {
                            echo $_SESSION['mensaje'];
                            unset($_SESSION['mensaje']); // Limpia el mensaje después de mostrarlo
                        }
                        ?>
                    </div>
                   
                
                    <!-- Número de Celular -->
                    <label for="celular" class="etiqueta-formulario">Número de Celular:</label>
                    <input type="tel" id="celular" name="celular" class="campo-formulario" required>
    
                    <!-- Ocupación -->
                    <label for="ocupacion" class="etiqueta-formulario">Ocupación:</label>
                    <select id="ocupacion" name="ocupacion" class="campo-formulario" required>
                        <option value="director_coro">Director de Coro</option>
                        <option value="profesor_musica">Profesor de Música</option>
                        <option value="integrante_coro">Integrante de Coro</option>
                        <!-- Agrega más opciones sea necesario -->
                    </select>
    
                    <!-- Selección de Partitura -->
                    <label for="partitura" class="etiqueta-formulario">Seleccionar Partitura:</label>
                    <select id="partitura" name="partitura" class="campo-formulario" required>
                        <option value="I'm Building Me A Home_Walton.pdf">I'm Building Me A Home_Walton.pdf</option>
                        <option value="I want to go home V2 - Score 2.pdf">I want to go home V2 - Score 2.pdf</option>
                        <option value="Mary had a baby.pdf">Mary had a baby.pdf</option>
                        <option value="My Lord What a Morning.pdf">My Lord What a Morning.pdf</option>
                        <option value="Wade In The Water Short (1).pdf">Wade In The Water Short (1).pdf</option>
                        <option value="a.pdf">hola mundo</option>
                        <!-- Agrega más opciones según sea necesario -->
                    </select>
                    
                    <!-- Campo oculto para el estado -->
                    <input type="hidden" name="estado" value="pendiente">

                    
                    <input type="submit" value="Descargar Partitura" class="boton-descarga" name="NegroSpirituals" onclick="enviarFormulario()">


                </form>
            </div>
        </div>
    </div>
    

    <!--Footer-->
    <footer class="footer">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-md-4 mb-3">
                    <div class="footer-logo text-center">
                        <img src="/PagCentroCultural/imgLogo/Isotipo blanco-8.png" alt="Logo" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="footer-links text-center">
                        <a href="Home.html">Inicio</a>
                        
                        <a href="#">Términos de Servicio</a>
                        <a href="#">Política de Privacidad</a>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="footer-copyright">
                        &copy; 2023 Agrupacion Cultural Artistica De Talcahuano | Todos los derechos reservados
                    </div>
                </div>
            </div>
        </div>
    </footer>
    

    
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    
    
</body>
</html>