<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/coding.png" type="image/x-icon">
    <meta name="description" content="informacion sobre lenguajes web">
    <meta name="keywords" content="html, php, css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/style_index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Store</title>
</head>
<body>
    <header class="row">
        <div class="col-md-5 display-inline">
            <img src="<?php echo base_url(); ?>assets/img/logo1.jpg" alt="informacion de la imagen" width="250px">
            <h1> La pica del emeterio</h1>
        </div>
        <nav class="col-md-7">
            <ul>
                <li class="subrayar">
                    <?php echo anchor('c_usuario','HOME');?>
                </li>
                <li class="subrayar">
                    <?php 
                    if(isset($this->session->usuario))
                    { 
                        echo anchor('c_usuario/logout','('.$this->session->usuario.') Logout'); 
                    } else {
                        echo anchor('c_usuario/login','Login');
                    }
                    ?>                    
                </li>
                <li class="subrayar">
                <?php echo anchor('c_usuario/quienes_somos','Quienes Somos');?>
                </li>
                <li class="subrayar">
                    <?php echo anchor('https://www.dimerc.cl/','Los Otros');?>
                </li>
            </ul>
        </nav>
    </header>
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <li class="subrayar">
                    <?php echo anchor('c_usuario','HOME');?>
                    </li>
                    <li class="subrayar">
                    <?php 
                    if(isset($this->session->usuario))
                    { 
                        echo anchor('c_usuario/logout','('.$this->session->usuario.') Logout'); 
                    } else {
                        echo anchor('c_usuario/login','Login');
                    }
                    ?>
                    </li>
                    <li class="subrayar">
                    <?php echo anchor('c_usuario/quienes_somos','Quienes Somos');?>
                    </li>
                </div>
                    <main class="col-md-5">
                        <h2 style="font-family:fantasy; color: darkgoldenrod;">Catalogo</h2>
                        <section>
                                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                                        </div>
                                        <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="<?php echo base_url(); ?>assets/img/pato.jpg" class="d-block w-100" alt="Detergente-liquido-Revitacolor-28-L">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="<?php echo base_url(); ?>assets/img/drive.jpg" class="d-block w-100" alt="Detergente-botella-líquido-DRIVE-3-LT">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="<?php echo base_url(); ?>assets/img/confort.jpg" class="d-block w-100" alt="Ciclon-Detergente-2000-ml-7861048639200">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="<?php echo base_url(); ?>assets/img/cif.jpg" class="d-block w-100" alt="Ciclon-Detergente-2000-ml-7861048639200">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="<?php echo base_url(); ?>assets/img/quix.jpg" class="d-block w-100" alt="Ciclon-Detergente-2000-ml-7861048639200">
                                        </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                        </section>
                    </main>
            </div>
        </div>
        <br>
        <div class="row">
        <div id="conform" class="col-12">
            <div>
                <h2>Contactenos</h2>
            </div>
            <div>
                <form>
                    <label for="fname">First name:</label><br>
                    <input type="text" id="fname" name="fname" value="Luis"><br>
                    <label for="lname">Last name:</label><br>
                    <input type="text" id="lname" name="lname" value="Yañes"><br><br>
                    <label for="lname">E-mail:</label><br>
                    <input type="text" id="lname" name="lname" value="luyanes@yahuu.com"><br><br>
                    <textarea class="form-control" placeholder="ingrese el contenido de su mensaje"></textarea>
                    <input type="submit" onclick="enviarFormulario()"value="Submit">
                </form>
            </div>
        </div>
        </div>
        <br>
        <footer class="mt-auto text-white-50 bg-dark text-center">
            <p>10 de julio 666 <a href="https://getbootstrap.com/" class="text-white"> lapicadelemeterio@gmail.com</a>, by <a href="https://twitter.com/mdo" class="text-white">@dmondo</a>.</p>
        </footer>
        <script>
        function enviarFormulario(){
            alert("Mensaje enviado");
            }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
