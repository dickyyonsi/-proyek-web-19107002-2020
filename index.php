<!doctype html>
<html lang="en">

<head>
	<title>Table 02</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/style.css">

</head>

<body>
	<section class="ftco-section">
		<div class="container">
			<div class="mb-3">
				<div class="row justify-content-center">
					<div class="col-md-6 text-center mb-5">
						<h2 class="heading-section">Dicky Yonsi Pratama - Data Mahasiswa</h2>
					</div>
				</div>
				<div class="col-md-6">
					<div class="mb-3 row">
						<label for="inputName" class="col-sm-3 col-form-label">Nama Lengkap</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="inputName">
						</div>
					</div>
					<div class="mb-3 row">
						<label for="inputDate" class="col-sm-3 col-form-label">Tempat Lahir</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="inputDate">
						</div>
					</div>
					<div class="mb-3 row">
						<label for="inputDate" class="col-sm-3 col-form-label">Tanggal Lahir</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="inputDate">
						</div>
					</div>
					<div class="mb-3 row">
						<label for="inputDate" class="col-sm-3 col-form-label">Fakultas</label>
						<div class="col-sm-6">
							<select class="form-control" id="fakultas">
								<option>Pilih Fakultas</option>
							</select>
						</div>
					</div>
					<div class="mb-3 row">
						<label for="jurusan" class="col-sm-3 col-form-label">Jurusan</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="jurusan">
						</div>
					</div>
					<div class="mb-3 row">
						<label for="IPK" class="col-sm-3 col-form-label">IPK</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="IPK">
						</div>
					</div>
					<div class="btn btn-info">Kirim</div>
					<div class="btn btn-success">Reset</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="table-wrap">
							<table class="table">
								<thead class="thead-dark">
									<tr>
										<th>No</th>
										<th>NIM</th>
										<th>Nama</th>
										<th>Tempat & Tanggal Lahir</th>
										<th>Fakultas</th>
										<th>Jurusan</th>
										<th>IPK</th>
										<th>&nbsp;</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$data_mhs = [
										[
											"no" => 1,
											'nim' => 123,
											'nama' => "Sherina",
											"ttl" => "East Blue, 12-04-2000",
											"fakultas" => "Teknik Kelautan",
											"angkatan" => "Angkatan Laut",
											"ipk" => 3.9
										],
										[
											"no" => 2,
											"nim" => 456,
											"nama" => "Muhamad Surya",
											"ttl" => "East Blue, 12-04-2040",
											"fakultas" => "Teknik Kelautan",
											"angkatan" => "Pasukan Revolusioner",
											"ipk" => 4
										],
										[
											"no" => 3,
											"nim" => 789,
											"nama" => "Muhamad Wisnu",
											"ttl" => "East Blue, 12-04-2060",
											"fakultas" => "Teknik Kelautan",
											"angkatan" => "Bajak Laut",
											"ipk" => 3.8
										]
									];

									$data_mhs = json_encode($data_mhs);
									$data_mhs = json_decode($data_mhs);

									foreach ($data_mhs as $data) {
										echo " 
											<tr class='alert' role='alert'>
												<th scope='row'>" . $data->no . "</th>
												<td>" . $data->nim . "</td>
												<td>" . $data->nama . "</td>
												<td>" . $data->ttl . "</td>
												<td>" . $data->fakultas . "</td>
												<td>" . $data->angkatan . "</td>
												<td>" . $data->ipk . "</td>
												<td>
													<a href='#' class='close' data-dismiss='alert' aria-label='Close'>
														<span aria-hidden='true'><i class='fa fa-close'></i></span>
													</a>
												</td>
											</tr>
										";
									}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>