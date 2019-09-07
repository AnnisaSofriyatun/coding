<!DOCTYPE html>
<html>
<head>
	<title>Data Base Gugang</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <div class="container">
        <!-- Brand -->
            <a class="navbar-brand" href="#">DATA BASE GUDANG</a>
            </div>
    </nav>
    <div class="container">
        <?php session_start() ?>
    <h4 class="text-center">DATA</h4>
            <!-- tabel -->
            <div class="row">
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                <tr>
                    <th>Id</th>
                    <th>Categories Name</th>
                    <th>product</th>
                </tr>
                </thead>

                <!-- insert data -->
                <?php
                	require __DIR__ . '/koneksi.php';

                	$sql = "SELECT id_product, name, nama  FROM categories INNER JOIN products ON id = category_id ";
                	$result = mysqli_query($conn,$sql);

                	if (mysqli_num_rows ($result) > 0) {

                	while ($row = mysqli_fetch_assoc($result)) { ?>
                		<tr>
                			<td><?php echo $row ["id_product"] ?></td>
                			<td><?php echo $row ["name"] ?></td>
                			<td><?php echo $row ["nama"] ?></td>
                		</tr>
                	<?php }
                } else { ?>
                <tr><td colspan="5" class="text-center">data tidak ditemukan</td></tr>
                <?php }

                mysqli_close($conn);
                ?>
            </table> 
        </div>
</body>
</html>