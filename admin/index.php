<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <title>Admin</title>
</head>
<body>
    <h1 class="tittle_ad">Welcome To Admin</h1>
    <div class="wrapper">
        <?php
            include("connect.php");
            include("../module/header.php");
            include("../module/menu.php");
            include("../module/main.php");
            include("../module/footer.php");
        ?>
    </div>
    
</body>
</html>