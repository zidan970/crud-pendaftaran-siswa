<?php include("config.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Pendaftaran Siswa Baru</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Candal&family=Spinnaker&display=swap');
    </style>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <style>
        body 
        {
            background-color: #AAF683;
            font-family: 'Candal', sans-serif;
            font-family: 'Spinnaker', sans-serif;
        }

        table 
        {
            background-color: white;
        }

        #tambahbaru
        {
            margin-left: 1135px;
        }
    </style>
</head>

<body>
    <div class="p-5">  
        <nav>
           <a id="tambahbaru" class="btn btn-light" href="form-daftar.php">Tambah Baru</a>
        </nav>
        <br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col" class="text-center">No</th>
                    <th scope="col" class="text-center">Nama</th>
                    <th scope="col" class="text-center">Alamat</th>
                    <th scope="col" class="text-center">Jenis Kelamin</th>
                    <th scope="col" class="text-center">Agama</th>
                    <th scope="col" class="text-center">Sekolah Asal</th>
                    <th scope="col" class="text-center">Tindakan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM calon_siswa";
                $query = mysqli_query($db, $sql);
                while($siswa = mysqli_fetch_array($query))
                {
                    echo "<tr>";
                    echo "<td>".$siswa['id']."</td>";
                    echo "<td>".$siswa['nama']."</td>";
                    echo "<td>".$siswa['alamat']."</td>";
                    echo "<td>".$siswa['jenis_kelamin']."</td>";
                    echo "<td>".$siswa['agama']."</td>";
                    echo "<td>".$siswa['sekolah_asal']."</td>";
                    echo "<td>";
                    echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> ";
                    echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <h5>Total: <?php echo mysqli_num_rows($query) ?></h5>
    </div>
</body>

</html>
