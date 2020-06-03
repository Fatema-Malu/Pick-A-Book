<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style12.css">

  <title>Cricket</title>

  
  	<div class="container-fluid heading">
  		<div class="row rowh">
  			<div class="col-sm-3">
  				<div class="dropdown btns">
  		  <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown">Teams</button>
  		  <div class="dropdown-menu">
             <a class="dropdown-item" href="includes/display/dispplayers.php">India</a>
             <a class="dropdown-item" href="#">Australia</a>
             <a class="dropdown-item" href="#">England</a>
          </div>
  		
  	</div>
  	  	<div class="dropdown btns">
  		  <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown">Match</button>
  		  <div class="dropdown-menu">
             <a class="dropdown-item" href="#">Odi</a>
             <a class="dropdown-item" href="#">Test</a>
             <a class="dropdown-item" href="#">T20</a>
          </div>
  		
  	</div>
  	  	<div class="dropdown btns">
  		  <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown">Players</button>
  		  <div class="dropdown-menu">
             <a class="dropdown-item" href="#">Batsman</a>
             <a class="dropdown-item" href="#">Bowler</a>
             <a class="dropdown-item" href="#">All-Rounder</a>
          </div>
  		
  	</div>
  			</div>
  			<div class="col-sm-5">
  				<div class="text-lead h1 cricket"><span style="font-family:impact;text-shadow:2px 5px 10px #333";>CRICKET MANAGEMENT</span></div>
  			</div>
  			<div class="col-sm-4">
  				<div>

  		<input type="submit" class="btn btn-dark inputbtn" value="SEARCH">
  		<input type="text" name="player"class="form-control inputtext" value="Name">
  	</div>
  			</div>
  		</div>
  	</div>
  	
  
  	

  	
  
</head>
<body>
	<div class="container">
		<div class="row">
		<div class="col-sm-5 fform">
			<div class="title">TEAM</div>
			<form method="post" action="includes/team.php" name="teamform" >
				<div class="form-group">
					<label for="tid">Team ID:</label>
					<input type="number" name="tid" class="form-control" required="Please fill team id" pattern="\d{4}">
				</div>
				<div class="form-group">
					<label for="tname">Team Name:</label>
					<input type="text" name="tname" class="form-control" required="Please fill all the details">
				</div>
				<div class="form-group">
					<label for="tcountry">Country:</label>
					<input type="text" name="tcountry" class="form-control" required="Please fill all the details">
				</div>
				<div class="form-group">
					<label for="captainid">Captain id:</label>
					<input type="number" name="captainid" class="form-control" required="Please fill all the details">
				</div>
				<div class="form-group">
					<label for="vcapid">Vice-Captain id:</label>
					<input type="number" name="vcapid" class="form-control" required="Please fill all the details">
				</div>
				<div class="form-group">
					<label for="tcoachid">Coach id:</label>
					<input type="number" name="tcoachid" class="form-control" required="Please fill all the details">
				</div>
				<div>
					<input type="submit" name="submit1" class="btn btn-success btn-submit">
				</div>
			</form>
		</div>
		<div class="col-sm-1"></div>
		<div class="col-sm-5 fform">
			<div class="title text-danger">TICKETS</div>
			<form method="post" action="">
				<div class="form-group">
					<label for="ttid">Ticket ID:</label>
					<input type="number" name="ttid" class="form-control" required="Please fill all the details">
				</div>
				<div class="form-group">
					<label for="ttmid">Ticket Match Id:</label>
					<input type="number" name="ttmid" class="form-control" required="Please fill all the details">
				</div>
				<div class="form-group">
					<label for="ttvenue">Venue:</label>
					<input type="text" name="ttvenue" class="form-control" required="Please fill all the details">
				</div>
				<div class="form-group">
					<label for="tttime">Ticket Time:</label>
					<input type="number" name="tttime" class="form-control" required="Please fill all the details">
				</div>
				<div class="form-group">
					<label for="ttprice">Ticket Price:</label>
					<input type="number" name="ttprice" class="form-control" required="Please fill all the details">
				</div>
				
				<div>
					<input type="submit" name="submit1" class="btn btn-success btn-submit">
				</div>
			</form>
		</div>
	</div>



	<div class="row">
		<div class="col-sm-5 fform">
			<div class="title text-danger">MATCH UP</div>
			<form method="post" action="">
				<div class="form-group">
					<label for="mid">Match ID:</label>
					<input type="number" name="mid" class="form-control" required="Please fill all the details">
				</div>
				<div class="form-group">
					<label for="team1id">Team1 Id:</label>
					<input type="number" name="team1id" class="form-control" required="Please fill all the details">
				</div>
				<div class="form-group">
					<label for="team2id">Team2 Id:</label>
					<input type="number" name="team2id" class="form-control" required="Please fill all the details">
				</div>
				<div class="form-group">
					<label for="mpredict">Prediction:</label>
					<input type="text" name="mpredict" class="form-control" required="Please fill all the details">
				</div>
				<div>
					<input type="submit" name="submit1" class="btn btn-success btn-submit">
				</div>
			</form>
		</div>
		<div class="col-sm-1"></div>
		<div class="col-sm-5 fform">
			<div class="title text-danger">STATISTICS</div>
			<form method="post" action="">
				<div class="form-group ">
					<label for="sid">Stats id:</label>
					<input type="number" name="sid" class="form-control" required="Please fill all the details">
				</div>
				<div class="form-group">
					<label for="mid">match Id:</label>
					<input type="number" name="mid" class="form-control" required="Please fill all the details">
				</div>
				<div class="form-group">
					<label for="swinnerid">Winner Id:</label>
					<input type="number" name="swinnerid" class="form-control" required="Please fill all the details">
				</div>
				<div class="form-group">
					<label for="swinby">Prediction:</label>
					<input type="number" name="swinby" class="form-control" required="Please fill all the details">
				</div>
				<div>
					<input type="submit" name="submit1" class="btn btn-success btn-submit">
				</div>
			</form>
		</div>
		</div>
	</div>


    <div class="row">
    	<div class="col-sm-3"></div>
    	<div class="col-sm-6 fform">
    		<div class="title text-danger">PLAYER</div>
			<form method="post" action="includes/player.php" class="form">
				<div class="form-group">
					<label for="pid">Player ID:</label>
					<input type="number" name="pid" class="form-control" required="Please fill all the details">
				</div>
				<div class="form-group">
					<label for="prank">Player Ranking:</label>
					<input type="number" name="prank" class="form-control" required="Please fill all the details">
				</div>
				<div class="form-group">
					<label for="pteam">Player Team:</label>
					<input type="text" name="pteam" class="form-control" required="Please fill all the details">
				</div>
				<div class="form-group">
					<label for="pname">Player Name:</label>
					<input type="text" name="pname" class="form-control" required="Please fill all the details">
				</div>
				<div class="form-group">
					<label for="page">Age:</label>
					<input type="number" name="page" class="form-control" required="Please fill all the details">
				</div>
				<div class="form-group">
					<label for="pjob">Batsman/Bowler/all-Rounder:</label>
					<input type="text" name="pjob" class="form-control" required="Please fill all the details">
				</div>
				<div class="form-group">
					<label for="pavg">Player Avg:</label>
					<input type="number" name="pavg" class="form-control" required="Please fill all the details">
				</div>
				<div class="form-group">
					<label for="psr">Player Strike Rate:</label>
					<input type="number" name="psr" class="form-control" required="Please fill all the details">
				</div>
				<div class="form-group">
					<label for="ptr">Player total runs:</label>
					<input type="number" name="ptr" class="form-control" required="Please fill all the details">
				</div>
				<div class="form-group">
					<label for="ptw">Player total wickets:</label>
					<input type="number" name="ptw" class="form-control" required="Please fill all the details">
				</div>
				<div class="form-group">
					<label for="pbest">Player Best:</label>
					<input type="number" name="pbest" class="form-control" required="Please fill all the details">
				</div>
				<div>
					<input type="submit" name="submit5" class="btn btn-success btn-submit">
				</div>
			</form>
    	</div>
    	<div class="col-sm-2"></div>
    </div>

	</div>
	

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>