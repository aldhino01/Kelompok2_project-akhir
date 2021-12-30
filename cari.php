<html>
    <head>
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="./style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body class="h-100 w-100" style="box-sizing: border-box; background-color: #232130">
        <div class='container' style='font-family: Poppins, sans-serif;'>
            <div class="container">
                <div class='row'>
                    <nav class='navbar navbar-light' style='background-color: #232130; color:white  '>
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

                <table class="table table-bordered" style="color:white  ">
                    <thead>
                        <tr>
                        <th>Judul Buku</th>
                        <th>Penulis</th>
                        <th>Jenis Buku</th>
                        <th>Gambar Buku</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                                
                <?php                                 
                    $cari=$_POST['cari'];
                    $link = mysqli_connect("localhost", "root","","db_buku3");
                    $result = mysqli_query($link, "select * from nama_buku where judul_buku = '$cari'");
                    $jumlah = mysqli_num_rows($result);                               
                    while($baris = mysqli_fetch_array($result))
                    {                        
                        echo "<tr>
                        <td>".$baris[1]."</td>
                        <td>".$baris[2]."</td>
                        <td>".$baris[3]."</td>
                        <td> <img src='images/".$baris[4]."' class='card-img-top' style='width: 80px;'></td>
                        <td> <a href='ubah_data.php?id_buku= $baris[0]' class='btn btn-warning btn-sm'>Ubah</a>&nbsp&nbsp&nbsp<a href='hapus.php?id_buku=$baris[0]' class='btn btn-warning btn-sm'>Hapus</a></td>

                        </tr>";
                    }
                ?>
                </tbody>
                           

                <script>
                $(document).ready(function(){
                    $('#tabel-data').DataTable();
                });
                </script>

            </table>

                <?php
                    $cari=$_POST['cari'];
                    $link = mysqli_connect("localhost", "root","","db_buku3");
                    $result = mysqli_query($link, "select * from nama_buku where judul_buku = '$cari'");
                    $jumlah = mysqli_num_rows($result);                   
                    echo " <div class='container'; style='font-family: Poppins, sans-serif; color:white'>
                            Jumlah Data: $jumlah
                            </div>";
                ?>
                
            </div>
         </div>     
    </body>
</html>



