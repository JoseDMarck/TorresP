<div class="seccion-general">
  <div class="formulario-seccion">

    <h1>Envíanos tu propuesta </h1>
    
<form class="container" id="needs-validation" novalidate action="<?php echo get_template_directory_uri(); ?>/formulario_insertar.php">
  <div class="form-row">
   

    <div class="form-group col-md-4">
      <h2 for="inputAddress" required> Nombre: </h2>
      <input type="text" class="form-control" id="inputAddress" placeholder="Introduzca su nombre" required>
       <div class="invalid-feedback">
        El campo Nombre es requerido
      </div>


    </div>

   
  </div>

<div class="form-row">
    <div class="form-group col-md-4">
        <h2 for="inputEmail4" required>Correo</h2>
        <input type="email" class="form-control" id="inputEmail4" placeholder="Introduzca el correo" required>
        <div class="invalid-feedback">
        El campo de correo es requerido
      </div>
    </div>
</div>
 
<br>
  <div class="form-row">
    <div class="form-group col-md-4">
         <h2 for="inputAddress">Seleccione su municipio</h2>
      <select id="inputState" class="form-control" required>
   <option>Morelia </option>
   <option>Acuitzio </option>
   <option>Aguililla </option>
   <option>Álvaro Obregón </option>
   <option>Angamacutiro </option>
   <option>Angangueo </option>
   <option>Apatzingán </option>
   <option>Aporo </option>
   <option>Aquila </option>
   <option>Ario </option>
   <option>Arteaga </option>
   <option>Briseñas </option>
   <option>Buenavista </option>
   <option>Carácuaro </option>
   <option>Charapan </option>
   <option>Charo </option>
   <option>Chavinda </option>
   <option>Cherán </option>
   <option>Chilchota </option>
   <option>Chinicuila </option>
   <option>Chucándiro </option>
   <option>Churintzio </option>
   <option>Churumuco </option>
   <option>Coahuayana </option>
   <option>Coalcomán de Vázquez Pallares </option>
   <option>Coeneo </option>
   <option>Cojumatlán de Régules </option>
   <option>Contepec </option>
   <option>Copándaro </option>
   <option>Cotija </option>
   <option>Cuitzeo </option>
   <option>Ecuandureo </option>
   <option>Epitacio Huerta </option>
   <option>Erongarícuaro </option>
   <option>Gabriel Zamora </option>
   <option>Hidalgo </option>
   <option>Huandacareo </option>
   <option>Huaniqueo </option>
   <option>Huetamo </option>
   <option>Huiramba </option>
   <option>Indaparapeo </option>
   <option>Irimbo </option>
   <option>Ixtlán </option>
   <option>Jacona </option>
   <option>Jiménez </option>
   <option>Jiquilpan </option>
   <option>José Sixto Verduzco </option>
   <option>Juárez </option>
   <option>Jungapeo </option>
   <option>La Huacana </option>
   <option>La Piedad </option>
   <option>Lagunillas </option>
   <option>Lázaro Cárdenas </option>
   <option>Los Reyes </option>
   <option>Madero </option>
   <option>Maravatío </option>
   <option>Marcos Castellanos </option>
   <option>Morelos </option>
   <option>Múgica </option>
   <option>Nahuatzen </option>
   <option>Nocupétaro </option>
   <option>Nuevo Parangaricutiro </option>
   <option>Nuevo Urecho </option>
   <option>Numarán </option>
   <option>Ocampo </option>
   <option>Pajacuarán </option>
   <option>Panindícuaro </option>
   <option>Parácuaro </option>
   <option>Paracho </option>
   <option>Pátzcuaro </option>
   <option>Penjamillo </option>
   <option>Peribán </option>
   <option>Purépero </option>
   <option>Puruándiro </option>
   <option>Queréndaro </option>
   <option>Quiroga </option>
   <option>Sahuayo </option>
   <option>Salvador Escalante </option>
   <option>San Lucas </option>
   <option>Santa Ana Maya </option>
   <option>Senguio </option>
   <option>Susupuato </option>
   <option>Tacámbaro </option>
   <option>Tancítaro </option>
   <option>Tangamandapio </option>
   <option>Tangancícuaro </option>
   <option>Tanhuato </option>
   <option>Taretan </option>
   <option>Tarímbaro </option>
   <option>Tepalcatepec </option>
   <option>Tingambato </option>
   <option>Tingüindín </option>
   <option>Tiquicheo de Nicolás Romero </option>
   <option>Tlalpujahua </option>
   <option>Tlazazalca </option>
   <option>Tocumbo </option>
   <option>Tumbiscatío </option>
   <option>Turicato </option>
   <option>Tuxpan </option>
   <option>Tuzantla </option>
   <option>Tzintzuntzan </option>
   <option>Tzitzio </option>
   <option>Uruapan </option>
   <option>Venustiano Carranza </option>
   <option>Villamar </option>
   <option>Vista Hermosa </option>
   <option>Yurécuaro </option>
   <option>Zacapu </option>
   <option>Zamora </option>
   <option>Zináparo </option>
   <option>Zinapécuaro </option>
   <option>Ziracuaretiro </option>
   <option>Zitácuaro </option>
 
  </select>

      <div class="invalid-feedback">
        Seleccioné un municipio
      </div>
    
  </div><!-- form-group -->


  </div>

<br>
 <div class="form-row">
   <div class="form-group col-md-4">
      <h2 for="inputAddress" required> Título de la propuesta: </h2>
      <input type="text" class="form-control" id="inputAddress" placeholder="Introduzca el titulo de su propuesta" required>
      <div class="invalid-feedback">
        Inrtroduzca el titulo de la propuesta
      </div>
    </div>
 </div>


  <div class="form-row">
   <div class="form-group col-md-4">
      <h2 for="inputAddress"required> Descripción: </h2>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" required></textarea>
      <div class="invalid-feedback">
        Inrtroduzca la descripción de la propuesta
      </div>
    </div>
 </div>

 

<br>
  <button type="submit" class="btn btn-primary"><h3>Enviar</h3></button>
</form>



<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';

  window.addEventListener('load', function() {
    var form = document.getElementById('needs-validation');
    form.addEventListener('submit', function(event) {
      if (form.checkValidity() === false) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add('was-validated');
    }, false);
  }, false);
})();
</script>


</div> <!-- formulario-seccion -->
</div> <!-- seccion-general --> 