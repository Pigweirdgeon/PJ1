<div>	
		<?php 
		include 'open_sql.php';
		$search = "";
		if(isset($_GET["search"])){
			$search = $_GET["search"];
			if($search==""){
				$search="fdsfdsfds";
				}
			}
			$sql = "SELECT * from san_pham where ten_sp like '%$search%'";
			$result = mysqli_query($con,$sql);
			// var_dump($result);
			// die();
			mysqli_close($con);
	 ?>
		<table border="0" align="center">
			<tr><br></tr>
			<?php 
			if(isset($_GET["search"])){
				if($result !=null){
					while ($san_pham = mysqli_fetch_array($result)) {
						?>

					<tr>
						 <th>
						 	<?php echo $san_pham['ten_sp'] ?>
				 		</th>
					</tr>

					<?php 
				
				}}}
			 ?>

			 
							</table>
						</div>