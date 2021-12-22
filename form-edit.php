<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) )
{
    header('Location: list-siswa.php');
}

// ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang diedit tidak ditemukan
if( mysqli_num_rows($query) < 1 )
{
    die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Siswa | SMK Coding</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Candal&family=Spinnaker&display=swap');
    </style>
        
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    
    
    <style>
        .a 
        {
            width: 100%;
        }

        body 
        {
            background-image: linear-gradient(120deg, #AAF683 100%, #FFD97D 0%);
            font-family: 'Candal', sans-serif;
            font-family: 'Spinnaker', sans-serif;
        }
    </style>
</head>

<body>
    <div class="d-flex min-vh-100 flex-column aligns-items-center justify-content-center">
        <div class="container p-0 card shadow border-0 rounded" style="max-width: 20rem;">
            <form action="proses-edit.php" method="POST">
                <fieldset>
                    <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />
                    
                    <div class="form-group mt-3 mx-2">
                        <p>
                            <label for="nama">Nama: </label>
                            <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $siswa['nama'] ?>" />
                        </p>
                    </div>
                    
                    <div class="form-group mt-3 mx-2">
                        <p>
                            <label for="alamat">Alamat: </label>
                            <br>
                            <textarea name="alamat"><?php echo $siswa['alamat'] ?></textarea>
                        </p>
                    </div>
                    
                    <div class="form-group mt-3 mx-2">
                        <p>
                            <label for="jenis_kelamin">Jenis Kelamin: </label>
                            <br>
                            <?php $jk = $siswa['jenis_kelamin']; ?>
                            <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
                            <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>> Perempuan</label>
                        </p>
                    </div>
                    
                    <div class="form-group mt-3 mx-2">
                        <p>
                            <label for="agama">Agama: </label>
                            <?php $agama = $siswa['agama']; ?>
                            <select name="agama">
                                <option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
                                <option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
                                <option <?php echo ($agama == 'Katolik') ? "selected": "" ?>>Katolik</option>
                                <option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
                                <option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
                                <option <?php echo ($agama == 'Konghuchu') ? "selected": "" ?>>Konghuchu</option>
                                <option <?php echo ($agama == 'Atheis') ? "selected": "" ?>>Atheis</option>
                            </select>
                        </p>
                    </div>
                    
                    <div class="form-group mt-3 mx-2">
                        <p>
                            <label for="sekolah_asal">Sekolah Asal: </label>
                            <input type="text" name="sekolah_asal" placeholder="nama sekolah" value="<?php echo $siswa['sekolah_asal'] ?>" />
                        </p>
                    </div>
                    
                    <div class="form-group mt-3 mx-2">
                        <p>
                            <input type="submit" value="Simpan" name="simpan" />
                        </p>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</body>

</html>
