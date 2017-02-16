<?php
require("dbConnect.php");
//$db = get_db();
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="homeStyle.css">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    </head>
	<body>
		<div class="container">
			<h1 class="text-left">
					<a href="index.html"><img src="fullLogo.png" alt="LITTLE COLORADO Behavioral Health Centers" style="height:60px; padding: 0 0 0px 0;"></a>
				</h1>
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="index.html">
			      	<img src="logo.png" alt="LCBHC" style="height:30px; padding:0px 5px;">
			      </a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav">
			        <li><a href="index.html">Home</a></li>
			        <li><a href="careandservices.html">Care & Services</a></li>
			        <li><a href="insuranceandpayment.html">Insurance & Payment</a></li>
			        <li><a href="jobopenings.html">Job Openings</a></li>
			        <li class="active"><a href="resources.php">Resources <span class="sr-only">(current)</span></a></li>
			        <!--
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Other<span class="caret"></span></a>
			          <ul class="dropdown-menu">
			            <li><a href="#">Action</a></li>
			            <li><a href="#">Another action</a></li>
			            <li><a href="#">Something else here</a></li>
			            <li role="separator" class="divider"></li>
			            <li><a href="#">Separated link</a></li>
			            <li role="separator" class="divider"></li>
			            <li><a href="#">One more separated link</a></li>
			          </ul>
			        </li>
			        -->
			      </ul>

			      <ul class="nav navbar-nav navbar-right">
				    <li><a href="employeeportal.html"><span class="glyphicon glyphicon-user" aria-hidden="true"> </span>Employee Portal</a></li>
				    <!--<form class="navbar-form navbar-left">
				      <div class="form-group">
				        <input type="text" class="form-control" placeholder="Search">
				      </div>
				      <button type="submit" class="btn btn-default">Submit</button>
				    </form> -->
			      </ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav><!-- /navbar -->
		
			<div class="row">
				<div class="col-sm-2 col-xs-12">
					<img src="help.png" alt="Support" style="width:100%;"/>
				</div>
				<div class="col-sm-5 col-xs-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title text-center">Community Resources</h3>
						</div>
						<div class="panel-body">
							<ul class="list-default">
							  	<?php
								  foreach ($db->query('SELECT * FROM communityresource') as $row)
								  {
								    echo "<li><a href=\'".$row['link']."\'>".$row['name']."</a></li>";
								  }
								?>
							</ul>

							<!--
							<button type="button" class="btn btn-primary" style="float:right">Suggest New Resource</button>
							-->
						</div>
					</div>
				</div>
				<div class="col-sm-5 col-xs-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title text-center">Other Resources</h3>
						</div>
						<div class="panel-body">
							<ul class="list-default">
								<?php
								  foreach ($db->query('SELECT * FROM otherresource') as $row)
								  {
								    echo "<li><a href=\'".$row['link']."\'>".$row['name']."</a></li>";
								  }
								?>
								<br>
							</ul>
						</div>
					</div>
				</div> 
			</div>

			<div class="row">
				<div class="col-sm-2 col-xs-12">
				</div>
				<div class="col-sm-5 col-xs-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title text-center">Local Contacts</h3>
						</div>
						<div class="panel-body">
							<table>
							   <thead>
							    <tr>
							     <th>Name</th>
							     <th>Address</th>
							     <th>Service</th>
							    </tr>
							   </thead>
							   <tbody>
							    <?php
							    $query = "SELECT id, name, address, service "
							        . "FROM contactresource ORDER BY name ASC";
							    $result = $db->query($query);
							    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
							        echo "<tr>";
							        echo "<td>" . htmlspecialchars($row["name"]) . "</td>";
							        echo "<td>" . htmlspecialchars($row["address"]) . "</td>";
							        echo "<td>" . htmlspecialchars($row["service"]) . "</td>";
							        echo "</tr>";
							    }
							    $result->closeCursor();
							    ?>
							   </tbody>
							  </table>
						</div>
					</div>
				</div> 
				<div class="col-sm-5 col-xs-12">
					<h3 class="text-center">Suggest New Resource</h3>
					<p class="text-center">Please share any useful resource information that we have missed.</p>
					<div class="row">
						<div class="col-sm-2"></div>
						<div class="col-sm-2">
							<a href="addResource.php">
								<button type="button" class="btn btn-primary">Link Resource</button>
							</a>
						</div>
						<div class="col-sm-3"></div>
						<div class="col-sm-2">
							<a href="addContact.php">
								<button type="button" class="btn btn-primary">Local Contact</button>
							</a>
						</div>
						<div class="col-sm-1"></div>
					</div>
				</div>
			</div>





			<br>
	    </div> <!-- /container -->
	</div> <!-- /body -->

   	<div class="footer">
   		<div class="container" style="color:white;">
	   		<div class="col-sm-4">
	   			<address>
				  	<strong>Springerville Office</strong><br>
				  	50 N. Hopi Drive / PO Box 699<br>
				  	Springerville, AZ 85938<br>
				  	<abbr title="Phone">P:</abbr> (928) 333-2683
				  	<abbr tittle="fax">F:</abbr> (928) 333-5595
				</address>

				<address>
					<strong>St. Johns Office</strong><br>
				  	470 W. Cleveland / PO Box 579<br>
				  	St. Johns, AZ 85936<br>
				  	<abbr title="Phone">P:</abbr> (928) 337-4301
				  	<abbr tittle="fax">F:</abbr> (928) 337-2269
				</address>
	   		</div>
	   		<div class="col-sm-4 text-center verticalLines">
	   			8am - 5pm | Monday - Friday<br>
	   			<strong> FOR AFTER HOURS CRISIS SERVICES<br>
	   			Please call the office in your community</strong><br>
	   			<br>
	   			<img src="fullLogoWhite.png" alt="LITTLE COLORADO Behavioral Health Centers" style="height:50px; padding: 0 0 10px 0;">
	   			<br>
	   			<p class="text-center">Copyright &copy; 2016<br>
	   				Little Colorado Behavioral Health Centers<br>
	   				All Rights Reserved
	   			</p>
	   		</div>
	   		<div class="col-sm-4 text-right">
	   			<div class="media">
	   			  	<div class="media-left media-middle">
				    	<a href="https://www.jointcommission.org">
				      		<img class="media-object" src="JCAHO.png" alt="JCAHO" style="height:70px; padding-left:13px;">
				    	</a>
				  	</div>
				  	<div class="media-body">
				    	Accredited by the<br>
				    	Joint Commission on Accreditation<br>
				    	of Health Care Organizations<br>
				  	</div>
				</div>
	 			<div class="media">
	   			  	<div class="media-left media-middle">
				    	<a href="#">
				      		<img class="media-object" src="ADHS.png" alt="ADHS" style="height:70px;">
				    	</a>
				  	</div>
				  	<div class="media-body">
				    	Licensed by the<br>
				    	Arizona Department of Health Services<br>
				  	</div>
				</div>
	   		</div>
	   	</div>
	</div>	

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
</html>