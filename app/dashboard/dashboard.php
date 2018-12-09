<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- head -->
	<?php include_once("../../assets/public/head.php"); ?>
    <title>Dashboard</title>
</head>

<body>
    <div class="wrapper">
        <!-- menu lateral -->
        <?php include_once("menu/menu.php"); ?>

        <!-- painel -->
        <div class="main-panel">
            <!-- barra -->
            <?php include_once("barra/barra.php"); ?>

            <!-- corpo -->
            <?php include_once("corpo/corpo.php"); ?>

            <!-- rodapé -->
	        <?php include_once("../../assets/public/footer.php"); ?>
        </div>
    </div>
</body>

<!-- javascript -->
<?php include_once("../../assets/public/javascript.php"); ?>

</html>