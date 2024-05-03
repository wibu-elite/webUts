<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
</head>

<body>
    <header>
        <h3>Pendaftaran Guild Petualangan</h3>
        <h1>GOTEI 13</h1>
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li>
                <button><a href="formDaftar.php">Daftar Baru</a></button>
            </li>
            <li>
                <button><a href="listSiswa.php">Pendaftar</a></button>
            </li>
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