<?php
require("dbConnect.php");
$db = get_db();
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
				<div class="col-sm-12 col-xs-12">
					

					<div class="container">
					  <h2>Suggest New Contact</h2>
					  <form class="form-horizontal" action="insertContact.php">


					    <div class="form-group">
					      <label class="control-label col-sm-2" for="contactName">Contact Name:</label>
					      <div class="col-sm-4">
					        <input type="text" class="form-control" id="contactName" placeholder="Enter Name of Contact">
					      </div>
					    </div>

					    <div class="form-group">
					      <label class="control-label col-sm-2" for="phone">Phone Number:</label>
					      <div class="col-sm-4">
					        <input type="tel" class="form-control" id="phone" placeholder="Enter Phone Number">
					      </div>
					    </div>

					    <div class="form-group">
					      <label class="control-label col-sm-2" for="address">Address:</label>
					      <div class="col-sm-4">          
					        <input type="text" class="form-control" id="address" placeholder="Enter Address">
					      </div>
					    </div>

					    <div class="form-group">
					      <label class="control-label col-sm-2" for="city">City:</label>
					      <div class="col-sm-4">          
					        <input type="text" class="form-control" id="city" placeholder="Enter City">
					      </div>
					    </div>

					    <div class="form-group">
					      <label class="control-label col-sm-2" for="state">State:</label>
					      <div class="col-sm-4">          
					        <input type="text" class="form-control" id="state" placeholder="Enter State">
					      </div>
					    </div>

					    <div class="form-group">
					      <label class="control-label col-sm-2" for="zip">Zip:</label>
					      <div class="col-sm-4">          
					        <input type="text" class="form-control" id="zip" placeholder="Enter Zip Code">
					      </div>
					    </div>

					    <div class="form-group">
					      <label class="control-label col-sm-2" for="searchWord">Associations:</label>
					      <div class="col-sm-4">
					        <div class="checkbox">
						      <label><input type="checkbox" value="Depression">Depression</label>
						    </div>
						    <div class="checkbox">
						      <label><input type="checkbox" value="Anxiety">Anxiety</label>
						    </div>
						    <div class="checkbox">
						      <label><input type="checkbox" value="Trauma">Trauma</label>
						    </div>
						    <div class="checkbox">
						      <label><input type="checkbox" value="Developmental">Developmental</label>
						    </div>
						    <div class="checkbox">
						      <label><input type="checkbox" value="Criminal">Criminal</label>
						    </div>
						    <div class="checkbox">
						      <label><input type="checkbox" value="Substance">Substance Abuse</label>
						    </div>
						    <!--						    
						    <div class="checkbox disabled">
						      <label><input type="checkbox" value="" disabled>Substance Abuse</label>
						    </div>
						    -->
						  </div>
						</div>

					    <div class="form-group">        
					      <div class="col-sm-offset-2 col-sm-10">
					        <button type="submit" class="btn btn-default">Submit For Approval</button>
					      </div>
					    </div>
					  </form>
					</div>




				</div>
			</div>
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