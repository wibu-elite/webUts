<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styleFormEdit.css">
    <title>Formulir Edit Member | Guild Petualangan</title>
</head>

<body>
    <header>
        <h3>Formulir Edit Member</h3>
    </header>

    <form action="prosesEdit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $siswa['nama'] ?>" />
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat"><?php echo $siswa['alamat'] ?></textarea>
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <?php $jk = $siswa['jenis_kelamin']; ?>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>> Perempuan</label>
        </p>
        <p>
            <label for="skill">Skills: </label>
            <?php $skill = $siswa['skill']; ?>
            <select name="skill">
                <option <?php echo ($skill == 'Memanah<') ? "selected": "" ?>>Memanah</option>
                <option <?php echo ($skill == 'Pedang Dua Tangan') ? "selected": "" ?>>Pedang Dua Tangan</option>
                <option <?php echo ($skill == 'Pedang Ganda') ? "selected": "" ?>>Pedang Ganda</option>
                <option <?php echo ($skill == 'Sihir') ? "selected": "" ?>>Sihir</option>
                <option <?php echo ($skill == 'Pengutan Fisik') ? "selected": "" ?>>Pengutan Fisik</option>
                <option <?php echo ($skill == 'Penyembuhan') ? "selected": "" ?>>Penyembuhan</option>
                <option <?php echo ($skill == 'Strategi') ? "selected": "" ?>>Strategi</option>
            </select>
        </p>
        <p>
            <label for="sekolah_asal">Asal Academy: </label>
            <input type="text" name="sekolah_asal" placeholder="asal academy" value="<?php echo $siswa['sekolah_asal'] ?>" />
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>