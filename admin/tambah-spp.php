<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tambah - spp</title>

  <!-- Custom fonts for this template-->
  <link href="../template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../template/CSS/sb-admin-2.min.css" rel="stylesheet">

</head>
<body>
    <div class="container-fluid"> <br>
    <h5> <center class="alert alert-success">Halaman Tambah Data SPP</center> </h5>
    <hr>
    <form method="post" action="proses-tambah-spp.php" >
    <div class="form-group row">
		<label for="id_spp" class="col-sm-2 col-form-label">ID</label>
		<div class="col-sm-10">
			<input type="number" name="id_spp" maxlength="4" class="form-control" required>
		</div>
	</div>
	<div class="form-group row">
		<label for="tahun" class="col-sm-2 col-form-label">Tahun</label>
		<div class="col-sm-10">
			<input type="number" name="tahun" maxlength="4" class="form-control" required>
		</div>
	</div>
 
	<div class="form-group row">
		<label for="nominal" class="col-sm-2 col-form-label">Nominal</label>
		<div class="col-sm-10">
			<input type="number" name="nominal" maxlength="13" class="form-control" required>
		</div>
	</div>
  <a href="spp1.php" class="btn btn-danger">Batal</a>
  <button type="reset" class="btn btn-warning">Kosongkan</button>
  <button type="submit" class="btn btn-success">simpan</button>
 
</form>
    <!-- <form action="?url=proses-tambah-spp" method="post">
        <div class="form-group mb-2">
            <label>Tahun</label>
            <input type="number" name="tahun" maxlegth ="4" class="form-control" required>
        </div>
        <div class="form-group mb-2">
            <label>Nominal</label>
            <input type="number" name="tahun" maxlegth ="4" class="form-control" required>
        </div>
    </form> -->

    </div>


<!-- Bootstrap core JavaScript-->
<script src="../template/vendor/jquery/jquery.min.js"></script>
  <script src="../template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="../template/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../template/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../template/vendor/chart.js/Chart.min.js"></script> 
  <!-- Page level custom scripts -->
  <script src="../template/js/demo/chart-area-demo.js"></script>
  <script src="../template/js/demo/chart-pie-demo.js"></script>
</body>