<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>
	
  <div class="lineaheader">
    <div class="trabajar">
      <p class="pull-left">¿Te gustaria ser parte de obrapro? Trabaja con nosotros </p> <a href="#formulario"><button type="button" class="btn btn-danger pull-right">¡POSTULATE!</button></a>
    </div>
  </div>
  <header>
    <figure class="logo pull-left">
      <img src="../img/obrapro.png" alt="OBRAPRO" class="img-responsive">
    </figure>
    <nav class="pull-right">
      <ul>
        <a class="selector" href="../index.php">INICIO</a>
        <a class="selector" href="nosotros.php">NOSOTROS</a>
        <a class="selector" href="servicios.php">SERVICIOS</a>
        <a class="selector" id="select" href="contacto.php">CONTACTO</a>
      </ul>
    </nav>
  </header>

  <div class="mapa">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1350.6393329694076!2d-93.14716641142391!3d16.767472777543908!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ecd9184bfc93ed%3A0xa8c68497e0aab135!2sBlvd.+Arco+Iris+442%2C+Monterreal%2C+29026+Tuxtla+Guti%C3%A9rrez%2C+Chis.!5e0!3m2!1ses-419!2smx!4v1510087323021" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>

  <section id="formulario" class="content-section text-center contact" style="padding: 5% 0%;">
        <div class="contact-section">
            <div class="container">
              <h2>FORMULARIO DE CONTACTO</h2> <br>
              <p>Escríbenos en el siguiente formulario cualquier inquietud o sugerencia que nos desees hacer llegar y pronto te contactaremos.</p> <br><br>
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <form class="form-horizontal">
                    <div class="form-group">
                      <label for="exampleInputName2">Nombre</label>
                      <input type="text" class="form-control" id="exampleInputName2" placeholder="Escribe tu nombre completo">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName2">Teléfono</label>
                      <input type="text" class="form-control" id="exampleInputName2" placeholder="Escribe tu número teléfonico">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail2">Correo</label>
                      <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Escribe tu correo electrónico">
                    </div>
                    <div class="form-group ">
                      <label for="exampleInputText">Comentario</label>
                     <textarea  class="form-control" placeholder="Escribe tu comentario"></textarea> 
                    </div>
                    <button type="submit" class="btn btn-default">ENVIAR</button>
                  </form>

                  <hr>
                    
                  
                </div>
              </div>
            </div>
            <h3>DATOS DE LA EMPRESA</h3> <br><br>
            <div class="cont">
                    <ul class="contact2">
                      <li style="text-align: left;">
                        <p><i class="fa fa-map-marker fa-3x"></i></p>
                        <p><strong>DIRECCION</strong><br>Blvd. Arco Iris #442 <br> por C. Indigo y C. Beige. Col. Monte Real.<br>Tuxtla Gutierrez, Chiapas. C.P. 29023</p>
                      </li>
                      <li style="text-align: left;">
                        <p><i class="fa fa-clock-o fa-3x"></i></p>
                        <p><strong>HORARIO</strong><br>Lunes a Viernes de 9 am a 6 pm</p>
                      </li>
                      <li style="text-align: left;">
                        <p><i class="fa fa-phone fa-3x"></i></p>
                        <p><strong>TELEFONO</strong><br>PENDIENTE</p>
                      </li>
                      <li style="text-align: left;">
                        <p><i class="fa fa-envelope fa-3x"></i></p>
                        <p><strong>E-mail:</strong><br>info@constructoraobrapro.com</p>
                      </li>
                    </ul>
                  </div>
        </div>
      </section>

<a class="go-top" href="#">Subir</a>
<?php include 'pie.php' ?>

<script src="../js/jquery.js"></script>
<script src="../js/menu.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/arriba.js"></script>
<script src="../js/sendCORREO.js"></script>
<!-- <script src="../js/contacto.js"></script> -->
</body>
</html>