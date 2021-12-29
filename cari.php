<html>
    <head>
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
                     
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>


<?php
$cari=$_POST['cari'];
$link = mysqli_connect("localhost", "root","","db_buku3");
$result = mysqli_query($link, "select * from nama_buku where judul_buku = '$cari'");
$jumlah = mysqli_num_rows($result);
   echo 
    
    "
    <div class='container'>
        <div class='row'>
            <nav class='navbar navbar-expand-lg navbar-light bg-white'>
                <div class='container-fluid'>
                    <h1>Cari Data Buku</h1>                   
                    <a href='tampil.php'>
                        <button type='button' class='btn btn-primary btn-sm' data-bs-toggle='modal'>
                        Lihat Data
                        </button>
                    </a>
                    <form class='d-flex' role='search' method='post' action='cari.php'>
                        <input type='text' name='cari' class='form-control' placeholder='Cari Data Buku'>
                        &nbsp
                        <button class='btn btn-outline-success' type='submit' value'cari'>Search</button>
                    <form>
                </div>
            </nav>
        </div>
    </div>";

echo " <div class='container'>
           Jumlah Data: $jumlah
        </div>";

while($baris = mysqli_fetch_array($result))
{
  

    echo 
        "<br>
        <div class='container'>
         
                    <div class='card' style='width: 18rem;'>
                        <img src='images/".$baris[4]."' class='card-img-top' alt='...'>
                        <div class='card-body'>
                            <h5 class='card-title'> $baris[1]</h5>
                            <p class='card-text'><h6>Penulis : $baris[2]</h6> <h6>Jenis Buku : $baris[3]</h6> </p>
                            <a href='ubah_data.php?id_buku=$baris[0]' class='btn btn-warning btn-sm'>Ubah</a>&nbsp&nbsp&nbsp<a href='hapus.php?id_buku=$baris[0]' class='btn btn-warning btn-sm'>Hapus</a>
                        </div>
                    </div>
        </div>  
        ";
}
?>
