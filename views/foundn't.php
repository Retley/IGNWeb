<?php session_start() ?>
<?php require("dir.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"  href="<?php echo $STATIC ?>\style.css"> 
    <link rel="icon" href="<?php echo $STATIC ?>\silverware-png.ico" type="image/x-icon">
</head>
<body style=" display: flex; flex-direction: column; justify-content: flex-start; align-items: center; min-height: 100vh;">
<div class="header-container" style="width: 100%;">
    <?php require("header.php") ?>
</div>
    <section class="not-found" style="font-family: 'Segoe UI', 'Helvetica Neue', arial, sans-serif; display: flex; flex-direction: column; justify-content: center; align-items: center; flex: 1;">
    <h1 style="font-size: 4em;">404 Not Found</h1>
    <hr style="width: 90%;">
    <span style="font-size: 2em; margin: 40px 0; ">La página que buscas no existe. <a href="/ing-web/" style="color: aqua;">Volver al inicio</a></span>
    
    </section>
    <div class="footer-container" style="justify-self: flex-end;">
        <?php require("footer.php")?>
    </div>

</body>
</html>