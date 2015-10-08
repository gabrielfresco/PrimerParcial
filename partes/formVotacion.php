<?php

  if (isset($_SESSION['dni']))
  {
    
       
?>

<form  class="form-votacion" id="principal" onsubmit="GuardarVOTO();return false">
  <label>Voto</label></br>
  <table class="table">   

	<tr><td><input type="text" name="provincia" id="provincia" placeholder="Provincia" required></td></tr>

	<tr></td><select name="presidente" id="presidente" required>   

    <option value="Scioli">Scioli</option>
    <option value="Massa">Massa</option>
    <option value="Macri">Macri</option>

	</select></td></tr>
	
	<tr><td><input type="radio" name="sexo" id="m" value="Masculino" checked="true">Masculino
	<input type="radio" name="sexo" id="f" value="Femenino">Femenino </td></tr>
 <tr><td> <input type="text" name="localidad" id="localidad" placeholder="localidad"></td></tr>
 <tr><td><input type="text" name="direccion" id="direccion" placeholder="direccion"></td></tr>
</table>
	 
   <input readonly type="hidden" id="idVOTO" class="form-control" >

    <button class="btn btn-lg btn-primary btn-block" type="submit">Guardar</button> 


</form>

<?php 
  }else
  {
    echo "<section class='widget'>
      <h4 class='widgettitle'>No estas registrado</h4></section>";
  }

?>
