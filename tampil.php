<html>
    <head>
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="./style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>         
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <body class="h-100 w-100" style="box-sizing: border-box; background-color: #232130" >
    <div class="container" style="font-family: 'Poppins', sans-serif;">  
        <?php
            include './proses/koneksi.php';

            if(isset($_GET['cari-buku'])) {
                include "./cari-buku.php";
            }

            echo 
            
            "
            <div class='container'>
                <div class='row'>
                    <nav class='navbar navbar-light' style='background-color: #232130; color:white  '>
                        <div class='container-fluid'>
                            <h1>Data Buku</h1>                   
                            <a href='user.php'>
                                <button type='button' class='btn btn-primary btn-sm' data-bs-toggle='modal'>
                                Tambah Data Buku
                                </button>
                            </a>
                            <form class='d-flex' role='search' method='post' action='cari.php'>
                                <input type='text' name='cari' class='form-control' placeholder='Cari Data Buku`'>
                                &nbsp
                                <button class='btn btn-outline-success' type='submit' value'cari'>Search</button>
                            <form>
                        </div>
                    </nav>
                </div>
            </div>";
        ?>
            <table class="table table-bordered mt-4" style="color:white  ">
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
                            

                            
                    include './proses/koneksi.php';
                    $employee = mysqli_query($conn,"select * from nama_buku");
                    while($row = mysqli_fetch_array($employee))
                    {
                        echo "<tr>
                        <td>".$row['judul_buku']."</td>
                        <td>".$row['penulis']."</td>
                        <td>".$row['jenis_buku']."</td>
                        <td> <img src='images/".$row['gambar_buku']."' class='card-img-top' style='width: 80px;'></td>
                        <td> <a href='ubah_data.php?id_buku= $row[id_buku]' class='btn btn-warning btn-sm'>Ubah</a>&nbsp&nbsp&nbsp<a href='hapus.php?id_buku=$row[id_buku]' class='btn btn-warning btn-sm'>Hapus</a></td>

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
    </div>
        
    </body> 
</html>