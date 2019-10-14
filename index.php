<?php include("inc/functions.php"); include("inc/header.php"); ?>
  <body>
<?php include("inc/menu.php"); ?>
   <div class="container" style="padding-top:50px">
    <h2 class="page-header" align="center">e-SINAN</h2>
    <h3 align="center">Sistema de Informação de Agravos de Notificação</h3>
<?php
	if(isset($_GET['MSG'])){
		echo "<div class=\"bg-danger\">".urldecode($_GET['MSG'])."</div>";
	}
?>
    <div class="col-md-12">
<?php
	include("views/notificacao.php");
?>
    </div>
   </div>
<?php include("inc/footer.php"); ?>   
 </body>
</html>