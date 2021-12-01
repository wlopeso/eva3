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
            <img src="<?php echo base_url(); ?>assets/img/4491464.jpg" alt="informacion de la imagen" width="250px">
            <h1> Store</h1>
        </div>
        <nav class="col-md-7">
            <ul>
                <li class="subrayar">
                    <?php echo anchor('usuario','HOME');?>
                </li>
                <li class="subrayar">
                    <?php echo anchor('usuario','Login');?>
                </li>
                <li class="subrayar">
                    <?php echo anchor('usuario/quienes_somos','Quienes Somos');?>
                </li>
            </ul>
        </nav>
    </header>
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <li class="subrayar">
                        <?php echo anchor('usuario','HOME');?>
                    </li>
                    <li class="subrayar">
                        <?php echo anchor('login','Login');?>
                    </li>
                    <li class="subrayar">
                    <?php echo anchor('usuario/quienes_somos','Quienes Somos');?>
                    </li>
                </div>
                    <main class="col-md-5">
                        <h2 style="font-family:fantasy; color: darkgoldenrod;">Quienes Somos</h2>
                        <section>
                                    <img src="<?php echo base_url(); ?>assets/img/ragnar.jpg" alt="ragnar">
                                    <p>
                                        comercializamos productos de limpieza y aseo, para oficinas y hogares, al mejor precio en el sector oriente. Nos encargamos de testear todos los productos antes de ofrecerlos de manera a garantizar siempre una compra de excelente calidad. Hoy puedes encontrar más de 750 productos diferentes en nuestra tienda.
                                        Para otorgarle mayor comodidad, ahora también puede hacer sus pedidos a través de la tienda online y los recibirá en el transcurso de las siguientes 72 horas.
                                        Creemos fielmente que comprando en nuestra tienda puedes ahorrar HASTA UN 50% en productos de limpieza. De verdad, somos la mejor opción para comprar productos de limpieza económicos en el sector oriente.  
                                    </p>
                        </section>
                    </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>