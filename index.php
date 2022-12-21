<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMKN 2 Bangkalan</title>
</head>

<body>
<header>
    <h3>Pendaftaran Siswa Baru</h3>
    <h1>SMKN 2 Bangkalan</h1>
</header>

<h4>Menu</h4>
<nav>
    <ul>
        <li><a href="form_regist.php">Daftar Baru</a></li>
        <li><a href="data_list.php">Pendaftar</a></li>
    </ul>
</nav>


<?php if(isset($_GET['status'])): ?>
    <p>
        <?php
        if($_GET['status'] == 'sukses'){
            echo "Pendaftaran siswa baru berhasil!";
        } else {
            echo "Pendaftaran gagal!";
        }
        ?>
    </p>
<?php endif; ?>
</body>
</html>