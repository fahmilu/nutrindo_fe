<!DOCTYPE html>
<html class="no-js">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> 

    <title>Wellness for Life</title>
    <meta name="description" content="Wellness for Life">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css" />
    <link rel="stylesheet" href="assets/css/main.css?v=1213" />
</head>

<body>
    <?php include("partials/header.php");?>
    <div id="content">
        <?php if(!isset($_GET['page'])) : ?>
        <?php include("pages/home.php"); ?>
        <?php else: ?>
            <?php include("pages/". $_GET['page'] .".php"); ?>
        <?php endif ?>
    </div>
    <?php include("partials/footer.php");?>
    <script src="assets/js/app.js?v=1213"></script>
</body>
</html>