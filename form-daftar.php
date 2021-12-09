<!DOCTYPE html>
<html>

<head>
    <title>Formulir Pendaftaran Siswa Baru</title>
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
            <form action="proses-pendaftaran.php" method="POST">
                
                <div class="form-group mt-3 mx-2">
                    <p>
                        <label for="nama">Nama: </label>
                        <input required class="a" type="text" name="nama"/>
                    </p>
                </div>
                
                <div class="form-group mt-3 mx-2">
                    <p>
                        <label for="alamat">Alamat: </label>
                        <textarea required class="a" name="alamat"></textarea>
                    </p>
                </div>
                
                <div class="form-group mt-3 mx-2">
                    <p>
                        <label for="jenis_kelamin">Jenis Kelamin: </label>
                        <br>
                        <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
                        <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
                    </p>
                </div>
                
                <div class="form-group mt-3 mx-2">
                    <p>
                        <label for="agama">Agama: </label>
                        <select name="agama">
                            <option>Islam</option>
                            <option>Kristen</option>
                            <option>Katolik</option>
                            <option>Hindu</option>
                            <option>Budha</option>
                            <option>Konghuchu</option>
                            <option>Atheis</option>
                        </select>
                    </p>
                </div>

                <div class="form-group mt-3 mx-2 my-4">
                    <p>
                        <label for="sekolah_asal">Sekolah Asal: </label>
                        <input class="a" required type="text" name="sekolah_asal"/>
                    </p>
                </div>

                <div class="form-group mt-3 mx-2 my-4">
                    <input type="submit" value="Daftar" name="daftar" />
                </div>

            </form>
        </div>
    </div>
</body>

</html>
