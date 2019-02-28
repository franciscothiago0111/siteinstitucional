<h1>Contato</h1><br>	

<div class="contato">	

<form  method="POST">

<?php
if(!empty($aviso)){
	echo $aviso. "<br/><br/>";
}
?>

   Nome:<br>
  <input type="text" name="nome" ><br><br>
   Email:<br>
  <input type="email" name="email" ><br><br>
  Mensagem:<br>
  <textarea name="msg"></textarea><br><br> 

  <input type="submit" value="enviar mensagem">
</form>

</div>


