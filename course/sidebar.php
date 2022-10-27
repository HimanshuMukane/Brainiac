<?php
$con=mysqli_connect("localhost","root","","project");
		if(!$con)
			echo "Connection failed".mysqli_connect_error();
		else{}
?>
<?php echo '<pre>';?>
<h1>Index</h1>
<ul>
	<?php
		$sql = "SELECT Title FROM chapter";
		$result = mysqli_query($con,$sql);
		while($row = mysqli_fetch_array($result))
		{
			echo '<li><a href="">Chapter :'.$row[0].'</a><br></li>';
		}
	?>
</ul>
<?php echo '</pre>';?>