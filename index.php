<!DOCTYPE HTML>
<!--<html dir="rtl" lang="pt-br">-->

<html lang="pt-br">
	<head>
		<title>Felipe Pianos</title>
        <!-- Favicon and Touch Icons -->
        
        <!--Responsável pelo metadata-->
		<?php include_once("meta.php"); ?>
        
        <link href="images/_site/favicon.png" rel="shortcut icon" type="image/png">   
        
		<!--Responsável pelo css-->
		<?php include_once("css/css.php"); ?>
        <!--Verifica menu-->
        <?php include_once("var.php"); ?>
        
	</head>
    <body class="">
        <div id="wrapper" class="clearfix">
            <?php include_once("view/componentes/loading.php");?>
            <?php include_once("view/header/header.php");?>
            <?php include_once("view/body/body.php");?>
            <?php include_once("view/footer/footer.php");?>
            
        </div>

        <?php include_once("js/js.php");?>

   </body>
</html>
