
<html lang="en">

<head>

  <meta charset="utf-8">

  <title>Fellowtrucker Post Rate</title>
 
  
<link rel="stylesheet" href="../css/chosen.min.css">
<link rel="stylesheet" href="../css/jquery-ui.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">


  
</head>

<body>

<header class="navbar-inverse">
<div class="container">
<nav class="navbar">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="../">FellowTrucker</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="../searchrate">Search Rate</a></li>
        <li class="active"><a href="../postrate">Post Rate<span class="sr-only">(current)</span></a></li>
      </ul>
  
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../logout">Log out</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
</header>

<div>&nbsp;</div>

<div class="container" > 
<div class="col-sm-offset-1 col-sm-10">

    <form action="" method="post" id="postrate">  
	
	<div class="form-group">
	<label for="rate">Rate*</label>
    <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
    <div class="input-group">
      <div class="input-group-addon">$</div>
      <input type="text" class="form-control" id="rate" name="rate" placeholder="Amount">
      <div class="input-group-addon">.00</div>
    </div>
	</div>

	<div class="form-group">
		<label for="pickup_date">Pick up Date*</label>
		<input type="text" class="form-control" name="pickup_date" id="pickup_date" placeholder="date">
    </div>
  
	<div class="form-group">
		<label for="deliver_date">Deliver Date*</label>
		<input type="text" class="form-control" name="deliver_date" id="deliver_date" placeholder="date">
    </div>
   
	<div class="form-group">
		<label for="weight">Weight*</label>
		<input type="text" class="form-control" name="weight" id="weight" placeholder="weight KLbs">
    </div> 
	
	<div class="form-group">
	<label for="origin_state">Origin State*</label> 	
	<select class="form-control" id="origin_state" name="origin_state">
		<option value="" selected>Please Select</option>
		<option value='AL'>Alabama</option>
		<option value='AK'>Alaska</option>
		<option value='AZ'>Arizona</option>
		<option value='AR'>Arkansas</option>
		<option value='CA'>California</option>
		<option value='CO'>Colorado</option>
		<option value='CT'>Connecticut</option>
		<option value='DE'>Delaware</option>
		<option value='DC'>District of Columbia</option>
		<option value='FL'>Florida</option>
		<option value='GA'>Georgia</option>
		<option value='HI'>Hawaii</option>
		<option value='ID'>Idaho</option>
		<option value='IL'>Illinois</option>
		<option value='IN'>Indiana</option>
		<option value='IA'>Iowa</option>
		<option value='KS'>Kansas</option>
		<option value='KY'>Kentucky</option>
		<option value='LA'>Louisiana</option>
		<option value='ME'>Maine</option>
		<option value='MD'>Maryland</option>
		<option value='MA'>Massachusetts</option>
		<option value='MI'>Michigan</option>
		<option value='MN'>Minnesota</option>
		<option value='MS'>Mississippi</option>
		<option value='MO'>Missouri</option>
		<option value='MT'>Montana</option>
		<option value='NE'>Nebraska</option>
		<option value='NV'>Nevada</option>
		<option value='NH'>New Hampshire</option>
		<option value='NJ'>New Jersey</option>
		<option value='NM'>New Mexico</option>
		<option value='NY'>New York</option>
		<option value='NC'>North Carolina</option>
		<option value='ND'>North Dakota</option>
		<option value='OH'>Ohio</option>
		<option value='OK'>Oklahoma</option>
		<option value='OR'>Oregon</option>
		<option value='PA'>Pennsylvania</option>
		<option value='RI'>Rhode Island</option>
		<option value='SC'>South Carolina</option>
		<option value='SD'>South Dakota</option>
		<option value='TN'>Tennessee</option>
		<option value='TX'>Texas</option>
		<option value='UT'>Utah</option>
		<option value='VT'>Vermont</option>
		<option value='VA'>Virginia</option>
		<option value='WA'>Washington</option>
		<option value='WV'>West Virginia</option>
		<option value='WI'>Wisconsin</option>
		<option value='WY'>Wyoming</option>
	</select>
    </div>
	
	<div class="form-group">
	<label for="origin_city">Origin City*</label> 	
     <select class="form-control" name="origin_city" id="origin_city" disabled>
           <option value="" selected>Please Select</option>
     </select>	
	</div>
	
	
	
	<div class="form-group">
	<label for="origin_zipcode">(Origin Zip Code): </label> <input class="form-control" type="text" name= "origin_zipcode" id="origin_zipcode" placeholder="optional">
	</div>	
	

		
	<div class="form-group">
	<label for="dest_state">Destination State*</label> 	
	<select class="form-control" id="dest_state" name="dest_state">
		<option value="" selected>Please Select</option>
		<option value='AL'>Alabama</option>
		<option value='AK'>Alaska</option>
		<option value='AZ'>Arizona</option>
		<option value='AR'>Arkansas</option>
		<option value='CA'>California</option>
		<option value='CO'>Colorado</option>
		<option value='CT'>Connecticut</option>
		<option value='DE'>Delaware</option>
		<option value='DC'>District of Columbia</option>
		<option value='FL'>Florida</option>
		<option value='GA'>Georgia</option>
		<option value='HI'>Hawaii</option>
		<option value='ID'>Idaho</option>
		<option value='IL'>Illinois</option>
		<option value='IN'>Indiana</option>
		<option value='IA'>Iowa</option>
		<option value='KS'>Kansas</option>
		<option value='KY'>Kentucky</option>
		<option value='LA'>Louisiana</option>
		<option value='ME'>Maine</option>
		<option value='MD'>Maryland</option>
		<option value='MA'>Massachusetts</option>
		<option value='MI'>Michigan</option>
		<option value='MN'>Minnesota</option>
		<option value='MS'>Mississippi</option>
		<option value='MO'>Missouri</option>
		<option value='MT'>Montana</option>
		<option value='NE'>Nebraska</option>
		<option value='NV'>Nevada</option>
		<option value='NH'>New Hampshire</option>
		<option value='NJ'>New Jersey</option>
		<option value='NM'>New Mexico</option>
		<option value='NY'>New York</option>
		<option value='NC'>North Carolina</option>
		<option value='ND'>North Dakota</option>
		<option value='OH'>Ohio</option>
		<option value='OK'>Oklahoma</option>
		<option value='OR'>Oregon</option>
		<option value='PA'>Pennsylvania</option>
		<option value='RI'>Rhode Island</option>
		<option value='SC'>South Carolina</option>
		<option value='SD'>South Dakota</option>
		<option value='TN'>Tennessee</option>
		<option value='TX'>Texas</option>
		<option value='UT'>Utah</option>
		<option value='VT'>Vermont</option>
		<option value='VA'>Virginia</option>
		<option value='WA'>Washington</option>
		<option value='WV'>West Virginia</option>
		<option value='WI'>Wisconsin</option>
		<option value='WY'>Wyoming</option>
	</select>
	</div>
	
     <div class="form-group">
	 <label for="dest_city">Destination City*</label>
     <select class="form-control"  name="dest_city" id="dest_city" disabled>
           <option value="">Please Select</option>
     </select>	
	</div>

	
	<div class="form-group">
	<label for="dest_zipcode">(Destination Zip Code): </label> <input class="form-control" type="text" name= "dest_zipcode" id="dest_zipcode" placeholder="optional">
	</div>	

	
	<?php 

	  include_once $_SERVER['DOCUMENT_ROOT'] .'/includes/helpers.inc.php';                            
      include_once $_SERVER['DOCUMENT_ROOT'] .'/includes/db.inc.php';
	  $result = mysqli_query($link, 'SELECT * FROM trailer_type');

	  if (!$result)  
 	  {  
	    $error = 'Error adding submitted joke: ' . mysqli_error($link);  
	    echo $error;
 	    exit();
       }
         

      while ($row = mysqli_fetch_array($result))  
		{			  
		
		$trailer_types[] = array('id' => $row['id'], 'trailer_type' => $row['trailer_type']);  
 
		 } 
?>  

	<div class="form-group">
	<label for="trailer_type">Trailer Type*</label> 
	<select class="form-control" name="trailer_type">
	<option value="">Choose One</option>
	<?php foreach ($trailer_types as $trailer_type) : ?>  
	
	<option value="<?php echo $trailer_type['id']; ?>"><?php htmlout($trailer_type['trailer_type']); ?></option>
	
	<?php endforeach; ?>  
	</select>
	</div>
	
	<div class="form-group">
	<label for="load_type">Load Type*</label> 
	<select class="form-control" name="load_type">
	<option value="1" selected>Full Load</option>
	<option value="0">Partial Load</option>
	</select>
	</div>
	
    <div class="form-group">
	<label for="comment">Comments </label>  <textarea class="form-control" name='comment' id='comment' rows="3" cols="30"></textarea>
    </div>
	
	 <button type="submit" class="btn btn-default">Post Rate</button>
	 <!--
     <div><input type="submit" value="Post Rate" id="submit"></div>  
	 -->
</form>

</div>
</div>

<script type="text/javascript" src="../scripts/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="../scripts/jquery-ui.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> 
  
<script type="text/javascript">
 $(document).ready(function() {
    $( "#pickup_date" ).datepicker();
    $( "#deliver_date" ).datepicker();  
   
  	$("#origin_state").change(function() {
		$("#origin_city").load("getCities.php?state=" + $("#origin_state").val()).prop('disabled', false);
	});
	
   	$("#dest_state").change(function() {

		$("#dest_city").load("getCities.php?state=" + $("#dest_state").val()).prop('disabled', false);

	});
	

 });
</script>

</body>

</html>

