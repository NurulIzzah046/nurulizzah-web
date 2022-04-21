<?php 

    require 'function/function.php';

    $rows = getData("SELECT * FROM artikel");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./views/styles/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Izzah.com</title>
</head>
<body>

    <nav>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="./views/pages/artikel.php">Admin</a></li>

        </ul>
        <h1>IzzahBlog</h1>
    </nav>

    <div class="header">
        <div class="title">
            <h1>IzzahBlog</h1>
            <h2 class="subtitle">Hello, This Is My Personal Blog</h2>
            <p>Halo semuanya, ini merupakan blog pribadi saya. Blog ini akan berisi progres
                belajar saya setiap harinya. dalam blog ini akan memuat beberapa artikel mengenai 
                pemrograman web. </p>
        </div>
        <img src="gbr8.jpg">
    </div>

    <div class="container">

        <?php foreach( $rows as $row): ?>


        <div class="card">
            <h3><?= $row["judul"] ?></h3>
            <p><?= $row["isi"] ?></p>
            <br>
            <h2><?= $row["date"] ?></h2>
            
        </div>

        <?php endforeach ?>
    </div>

    
    
</body>
</html>