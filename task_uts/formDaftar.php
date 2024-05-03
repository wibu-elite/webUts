<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styleFormDaftar.css">
    <title>Form Register Member| Guild Petualangan</title>
</head>

<body>
    <header>
        <h3>Formulir Pendaftaran Siswa Baru</h3>
    </header>

    <form action="prosesDaftar.php" method="POST">

        <fieldset>

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" />
        </p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat"></textarea>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
        </p>
        <p>
            <label for="skill">Skills: </label>
            <select name="skill">
                <option>Memanah</option>
                <option>Pedang Dua Tangan</option>
                <option>Pedang Ganda</option>
                <option>Sihir</option>
                <option>Pengutan Fisik</option>
                <option>Penyembuhan</option>
                <option>Strategi</option>
            </select>
        </p>
        <p>
            <label for="sekolah_asal">Asal Academy: </label>
            <input type="text" name="sekolah_asal" placeholder="asal academy" />
        </p>
     
            <input type="submit" value="Daftar" name="daftar" />
        

        </fieldset>

    </form>

    </body>
</html>