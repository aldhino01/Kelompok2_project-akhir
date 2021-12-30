<html>
    <head>
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="./style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body class="h-100 w-100" style="box-sizing: border-box; background-color: #232130">
    <div class="container" style="font-family: 'Poppins', sans-serif;">
        <div class='row'>
            <nav class='navbar navbar-light' style='background-color: #232130; color:white  '>
                <div class='container-fluid'>
                    <h1>Tampil Data Buku</h1>                   
                    <form class='d-flex' role='search' method='post' action='cari.php'>
                        <input type='text' name='cari' class='form-control' placeholder='Cari Data Buku'>
                        &nbsp
                        <button class='btn btn-outline-success' type='submit' value'cari'>Search</button>
                    <form>
                </div>
            </nav>
        </div>
        
    <div class="row mt-3" id="load_data">
            <?php
              include './proses/koneksi.php';
              $result = mysqli_query($conn,"select * from nama_buku");
              while($baris = mysqli_fetch_array($result))
              
              {
                echo 
                "<div class='col-sm-3 mb-3'>
         
                <div class='card' style='width: 18rem;'>
                    <img src='images/".$baris[4]."' class='card-img-top' alt='...'>
                    <div class='card-body'>
                        <h5 class='card-title'> $baris[1]</h5>
                        <p class='card-text'><h6>Penulis : $baris[2]</h6> <h6>Jenis Buku : $baris[3]</h6> </p>
                        <a href='detail_buku.php?id_buku=$baris[0]' class='btn btn-warning btn-sm'>Baca</a>&nbsp&nbsp&nbsp<a href='beli_buku.php?id_buku=$baris[0]' class='btn btn-warning btn-sm'>Beli</a>
                    </div>    
                </div>
                </div>"; 
              }
              
            ?>
              
    </div>
    </body>
</html>
