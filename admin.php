
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
                <nav class='navbar navbar-light' style="background-color: #232130; color:white  ">
                    <div class='container-fluid'>
                        <h1>Input Buku</h1>                   
                        <a href='tampil.php'>
                            <button type='button' class='btn btn-primary btn-sm' data-bs-toggle='modal'>
                            Tampil Data Buku
                            </button>
                        </a>
                    </div>
                 </nav>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                <form action="simpan.php" method="POST" enctype="multipart/form-data">               
                    <div class="mb-3">
                        <label class="form-label" style="color:white  ">Judul Buku</label>
                        <input type="text" name="judul_buku" class="form-control" style="background-color: #252332; color:white  "> 
                    </div>
                    <div class="mb-3">
                        <label class="form-label" style="color:white  ">Penulis</label>
                        <input type="text" name="penulis" class="form-control" style="background-color: #252332; color:white  "></label>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" style="color:white  ">Jenis Buku</label>
                        <input type="text" name="jenis_buku" class="form-control" style="background-color: #252332; color:white  "></label>
                    </div>  
                    <div class="mb-3">
                        <label class="form-label" style="color:white  ">Gambar Buku</label>
                        <input type="file" name="gambar_buku" value="" class="form-control" style="background-color: #252332; color:white  "></label>
                    </div>
                <button type="submit" name="simpan" value="simpan" class="btn btn-warning">Simpan</button>
            </form>
        </div>       
            
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>


