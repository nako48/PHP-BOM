</!DOCTYPE html>
<html>
<head>
	<title>BOM TELPON</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-info">
					<div class="panel-heading">
					</div>
					<div class="panel-body">
						<center><b>BOM TELPON !</b></center><hr/>
						<br>
						<form class="signup-form" method="post" action="api.php" role="form">
							<div class="form-input-group">
								<i class="fa fa-envelope"></i><input type="text" name="nomor" placeholder="0822333222554" required>
							</div>
							<br>
							<input type="submit" name="submit" value="BOOM !">
						</form>
					</div>
				</div>
			</div>
			<?php 
			if(isset($_GET['berhasil'])) {
				if($_GET['berhasil'] == "1") {
					echo 'BOM BERHASIL';
				}
			}
			if(isset($_GET['gagal'])) {
				if($_GET['gagal'] == "1") {
					echo 'BOM GAGAL';
				}else if($_GET['gagal'] == '2'){
					echo 'BOM GAGAL';
				}
			}
			?>
		</body>
		</html>