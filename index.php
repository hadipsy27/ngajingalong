<?php
include_once "koneksi/koneksi.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="gambar/gambar.png">
    <title>Ngaji Ngalong</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
        <style>
        .menu{
            padding-top: 200px;
            padding-bottom: 250px; 
        }
        .tombol{
            margin-top: 50px;
        }
        footer{
            padding-top: 10px;
            color: aliceblue;
        }
        .login-button{
            color:#66c2ff;
        }
        .login-button:hover{
            background-color: #66c2ff;
            color: white;
        }
        </style>
</head>

<body>

    <!-- Navigation -->
    
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-md-6 menu alert-info">
                <div class="row text-center">
                    <div class="col-md-6 col-md-push-3">
                        
                        <button type="button" class="btn btn-info btn-lg btn-block" data-toggle="modal" href='#waktu'>
                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                         Waktu & Tempat</button>
                        <button type="button" class="btn btn-info btn-lg btn-block" data-toggle="modal" href='#pengajar'>
                        <span class="glyphicon glyphicon-education" aria-hidden="true"></span>
                        Pengajar</button>
                        <button type="button" class="btn btn-info btn-lg btn-block" data-toggle="modal" href='#tentang'>
                        <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                        Tentang</button>
                    </div>
                </div>
                
            </div>
            <div class="col-md-6 ">
                
                <!-- tombol daftar -->
                <div class="row text-center tombol">
                        <img src="gambar/gambar.png" width="20%" height="20%" style="display: block; margin: auto;">
                    <h2>Mengajilah walau di manapun tempatnya</h2>
                    <br>
                    <h4>Gabung Ngaji ngalong sekarang</h4>
                    
                    <div class="col-md-8 col-md-push-2">
                        <a class="btn btn-default btn-block login-button" data-toggle="modal" href='register/masuk.php'>Masuk</a>
                        <br>
                        <a class="btn btn-info btn-block" data-toggle="modal" href='register/daftar.php'>Daftar</a>
                        <br><br><br>
                    </div>    
                </div>
            </div>
        </div>
    </div>
    

        <!-- Footer -->
        
        <nav class="navbar navbar-inverse navbar-fixed-bottom text-center" role="navigation">
            <footer>
                <p>Copyright &copy; NgajiNgalong</p>
            </footer>
        </nav>
        

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

<!-- 
<div class="modal fade" id="daftar">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Daftar</h4>
            </div>
            <div class="modal-body">
                    <form action="daftar/daftar.php" method="POST" role="form-horizontal">
                            
                            <div class="form-group">
                                
                                <div class="input-group">
                                    <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                    </span>
                                    <input type="text" class="form-control" name="nama" placeholder="Nama">
                                </div>
                                <p></p>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>
                                    </span>        
                                    <input type="text" class="form-control" name="kontak" placeholder="Kontak">
                                </div>
                                <p></p>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
                                    </span>
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                </div>
                                <p></p>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                                    </span>
                                    <input type="text" class="form-control" name="alamat" placeholder="Alamat">
                                </div>
                                <p></p>
                                <input type="submit" value="Daftar" class="btn btn-primary">
                                <input type="reset" class="btn btn-danger">
                            </div>
                            
                        </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="login">
    <div class="modal-dialog">
        <div class="modal-content"> 
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Login</h4>
            </div>
            <div class="modal-body">
                
                <form action="home.php" method="POST" role="form-horizontal">
                
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">
                            <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>
                            </span>
                            <input type="kontak" class="form-control" name="kontak" placeholder="No Telp">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">
                            <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
                            </span>            
                            <input type="password" class="form-control" name="password" placeholder="password">
                        </div>
                    </div>
                
                    <button type="submit" class="btn btn-primary">Login</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </form>
                
            </div>
        </div>
    </div>
</div> -->

<div class="modal fade" id="waktu">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Waktu dan Tempat</h4>
            </div>
            <div class="modal-body">
                <p>
                    Pengajian Rutinan yang diadakan setiap hari di suatu tempat di Kalibeber
                    Waktu dilaksanakan biasanya pagi dan sore hari
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="pengajar">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
           <h4 class="modal-title">Pengajar</h4>
        </div>
        <div class="modal-body">
            <p>
                Kiyai atau ustad yang memberi materi kepada pada santri.
                serta membina dan mengajarkan santri tentang etika, larangan, dll dalam keagamaan.
            </p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="tentang">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
           <h4 class="modal-title">Tentang Ngaji Ngalong</h4>
        </div>
        <div class="modal-body">
            <p>
                Ngaji Ngalong Maksudnya adalah mengaji tetapi tidak tinggal di pondok pensantren tersebut.
            </p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>
</div>