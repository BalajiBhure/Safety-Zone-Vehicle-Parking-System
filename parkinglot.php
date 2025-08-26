<?php
    session_start();
    error_reporting(0);
    include('includes/dbconn.php');
    if (strlen($_SESSION['vpmsaid']==0)) {
        header('location:logout.php');
        } else {
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>VPS</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/datatable.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<link href="css/lot.css" rel="stylesheet">

	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<style>
		body {
  			background-image: url(w3s.jpg);
			background-size: 1450px 900px;
			/* background-color: lightgray;   */

			}
	</style>

</head>
<body>
        <?php include 'includes/navigation.php' ?>
	
		<?php
		$page="vehicle-parkinglot";
		include 'includes/sidebar.php'
		?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="dashboard.php">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Vehicle Parking Lot</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<!-- <h1 class="page-header">Vehicle parking lot</h1> -->
			</div>
		</div><!--/.row-->
		
		<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">Vehicle Parking Lot </div>
						<div class="panel-body">
                        <table id="example" class="table table-striped table-hover table-bordered" style="width:100%">
                        
        <thead>
            <tr>
                <th>#Parking Number</th>
                <th>Vehicle Number</th>
                <th>Vehicle Status</th>
                <th>Actions</th>

            </tr>
        </thead>
        <tbody>
		
				
		
        
        



		<?php
        $ret=mysqli_query($con,"SELECT * FROM vehicle_info WHERE Status='' ORDER BY InTime DESC");
        $cnt=1;
        while ($row=mysqli_fetch_array($ret)) {

				?>
   
            <tr>

            <td><?php echo $cnt;?></td>
	

            <td><?php  echo $row['RegistrationNumber'];?></td>
			<td><button type="button" class="btn btn-success"> online</button></td>
		
           
            
            <td><a href="update-incomingdetail.php?updateid=<?php echo $row['ID'];?>"><button type="button" class="btn btn-sm btn-danger">Take Action</button></a>
            </td>

            </tr>

                <?php $cnt=$cnt+1;}?>










				<label>Choose Parking Lot</label>
		<div class="bus seat2-2 border-0 p-0">
		<div class="seat-row-1">
			<ol class="seats">
			<li class="seat">
				<input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-1" value="1" required="" type="radio" disabled>
				<?php echo $row['ID'];?>
				<label for="seat-radio-1-1">

																					A 1                                                                        </label>
			</li>
			<li class="seat">
				<input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-2" value="2" required="" type="radio" disabled>
				<label for="seat-radio-1-2">
																					B 2                                                                        </label>
			</li>
			<li class="seat">
				<input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-3" value="3" required="" type="radio" disabled>
				<label for="seat-radio-1-3">
																					C 3                                                                        </label>
			</li>
			<li class="seat">
				<input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-4" value="4" required="" type="radio" disabled>
				<label for="seat-radio-1-4">
																					D 4                                                                        </label>
			</li>
			</ol>
		</div>
		<div class="seat-row-2">
			<ol class="seats">
			<li class="seat">
				<input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-5" value="5" required="" type="radio" disabled>
				<label for="seat-radio-1-5">
																					5                                                                        </label>
			</li>
			<li class="seat">
				<input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-6" value="6" required="" type="radio" disabled>
				<label for="seat-radio-1-6">
																					6                                                                        </label>
			</li>
			<li class="seat">
				<input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-7" value="7" required="" type="radio">
				<label for="seat-radio-1-7">

																					7  
																				                                                                      </label>
			</li>
			<li class="seat">
				<input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-8" value="8" required="" type="radio">
				<label for="seat-radio-1-8">
																					8                                                                        </label>
			</li>
			</ol>
		</div>
		<div class="seat-row-3">
			<ol class="seats">
			<li class="seat">
				<input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-9" value="9" required="" type="radio">
				<label for="seat-radio-1-9">
																					9                                                                        </label>
			</li>
			<li class="seat">
				<input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-10" value="10" required="" type="radio">
				<label for="seat-radio-1-10">
																					10                                                                        </label>
			</li>
			<li class="seat">
				<input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-11" value="11" required="" type="radio">
				<label for="seat-radio-1-11">
																					11                                                                        </label>
			</li>
			<li class="seat">
				<input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-12" value="12" required="" type="radio">
				<label for="seat-radio-1-12">
																					12                                                                        </label>
			</li>
			</ol>
		</div>
		<div class="seat-row-4">
			<ol class="seats">
			<li class="seat">
				<input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-13" value="13" required="" type="radio">
				<label for="seat-radio-1-13">
																					13                                                                        </label>
			</li>
			<li class="seat">
				<input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-14" value="14" required="" type="radio">
				<label for="seat-radio-1-14">
																					14                                                                        </label>
			</li>
			<li class="seat">
				<input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-15" value="15" required="" type="radio">
				<label for="seat-radio-1-15">
																					15                                                                        </label>
			</li>
			<li class="seat">
				<input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-16" value="16" required="" type="radio">
				<label for="seat-radio-1-16">
																					16                                                                        </label>
			</li>
			</ol>
		</div>
		<div class="seat-row-5">
			<ol class="seats">
			<li class="seat">
				<input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-17" value="17" required="" type="radio">
				<label for="seat-radio-1-17">
																					17                                                                        </label>
			</li>
			<li class="seat">
				<input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-18" value="18" required="" type="radio">
				<label for="seat-radio-1-18">
																					18                                                                        </label>
			</li>
			<li class="seat">
				<input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-19" value="19" required="" type="radio">
				<label for="seat-radio-1-19">
																					19                                                                        </label>
			</li>
			<li class="seat">
				<input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-20" value="20" required="" type="radio">
				<label for="seat-radio-1-20">
																					20                                                                        </label>
			</li>
			</ol>
		</div>
		<div class="seat-row-6">
			<ol class="seats">
			<li class="seat">
				<input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-21" value="21" required="" type="radio">
				<label for="seat-radio-1-21">
																					21                                                                        </label>
			</li>
			<li class="seat">
				<input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-22" value="22" required="" type="radio">
				<label for="seat-radio-1-22">
																					22                                                                        </label>
			</li>
			<li class="seat">
				<input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-23" value="23" required="" type="radio">
				<label for="seat-radio-1-23">
																					23                                                                        </label>
			</li>
			<li class="seat">
				<input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-24" value="24" required="" type="radio">
				<label for="seat-radio-1-24">
																					24                                                                        </label>
			</li>
			</ol>
		</div>
		<div class="seat-row-7">
			<ol class="seats">
			<li class="seat">
				<label for="seat-radio-1-BLANK" style="background: none;"></label>
			</li>
			<li class="seat">
				<label for="seat-radio-1-BLANK" style="background: none;"></label>
			</li>
			<li class="seat">
				<input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-25" value="25" required="" type="radio">
				<label for="seat-radio-1-25">
																					25                                                                        </label>
			</li>
			<li class="seat">
				<input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-26" value="26" required="" type="radio">
				<label for="seat-radio-1-26">
																					26                                                                        </label>
			</li>
			</ol>
		</div>
		<div class="seat-row-8">
			<ol class="seats">
			<li class="seat">
				<label for="seat-radio-1-BLANK" style="background: none;"></label>
			</li>
			<li class="seat">
				<label for="seat-radio-1-BLANK" style="background: none;"></label>
			</li>
			<li class="seat">
				<input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-27" value="27" required="" type="radio">
				<label for="seat-radio-1-27">
																					27                                                                        </label>
			</li>
			<li class="seat">
				<input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-28" value="28" required="" type="radio">
				<label for="seat-radio-1-28">
																					28                                                                        </label>
			</li>
			</ol>
		</div>
		</div>

		<div class="text-left mt-2">
		<button class="btn btn-primary btn-xs mb-2">Available</button>
		<button class="btn btn-success btn-xs mb-2">Status Published</button>
		<button class="btn btn-danger btn-xs mb-2">Booked</button>
		</div>

		

 
 
        
        </tbody>


    </table>
						</div>
					</div>
				</div>
				
				
				
</div><!--/.row-->
		
		
		

        <?php include 'includes/footer.php'?>
	</div>	<!--/.main-->
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap4.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script>
		window.onload = function () {
		var chart1 = document.getElementById("line-chart").getContext("2d");
		window.myLine = new Chart(chart1).Line(lineChartData, {
		responsive: true,
		scaleLineColor: "rgba(0,0,0,.2)",
		scaleGridLineColor: "rgba(0,0,0,.05)",
		scaleFontColor: "#c5c7cc"
		});
};
	</script>

    <script>
        $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>
		
</body>
</html>

<?php }  ?>