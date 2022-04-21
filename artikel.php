<?php 

    require '../../function/function.php';

    $rows = getData("SELECT * FROM artikel");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/artikel.css?version=<?php echo time() ?>">
    <title>Document</title>
</head>
<body>

    <nav>
        <ul>
            <li><a href="../../index.php">Home</a></li>
            <li><a href="">Admin</a></li>
        </ul>
        <h1>IzzahBlog</h1>
    </nav>

    <div>
        <p>Kumpulan Tabel</p>
    </div>
    
    <table>
        <thead>
            <th>no</th>
            <th>id-artikel</th>
            <th>judul</th>
            <th>deskripsi</th>
            <th>tanggal di buat</th>
            <th>Aksi</th>
        </thead>
        <?php $i = 1; ?>
        <?php foreach($rows as $row):  ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $row["id"] ?></td>
                <td><?= $row["judul"] ?></td>
                <td><?= $row["isi"] ?></td>
                <td><?= $row["date"] ?></td>
                <td><a href="../../function/delete.php?id=<?= $row['id'] ?>">hapus</a></td>
            </tr>
        <?php $i++ ?>
        <?php endforeach ?>
    </table>

    <div class="add-produk">
        <p>Tambah Artikel</p>
        <form action="../../function/add_artikel.php" method="post" enctype="multipart/form-data">
            <label for="judul">Judul</label>
            <input type="text" name="judul" id="" placeholder="judul artikel" required>
            <label for="isi">Isi</label>
            <textarea name="isi" id="isi" cols="100" rows="20"></textarea>
            <button type="submit">Submit Artikel</button>
            <label for="tanggal">Tanggal</label>
            <input type="text" name="date" id="" placeholder="tanggal" required>
        </form>
    </div>
    
</body>
</html>