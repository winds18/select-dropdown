
<html lang="en">

<head>

  <meta charset="utf-8">

  <title>Fellowtrucker Post Rate</title>
 
<link rel="stylesheet" href="../css/jquery-ui.min.css">
<link rel="stylesheet" href="../css/select2.min.css" media="all">
<!--
<link rel="stylesheet" href="../css/postrate.css">
-->
    <style>
        .select2-container .select2-selection--single span.select2-selection__rendered{font-family: 'arial, helvetica, sans-serif';font-size: 13px;}
        .customStyle { width: 150px; height: 25px; }
        .customStyle2 { width: 50px; height: 25px; }
        * { margin: 0; padding: 0; }
        .nav { background-color: #333; height: 70px; }
        .nav ul { height: : 70px; }
        .nav ul li { font-family: 'Expletus Sans', cursive; font-size: 35px; width: 150px; float: left; list-style-type: none; color: white; text-align: center; line-height: 70px; opacity: 0.8; }
        .subnav { background-color: #336; height: 50px; }
        .subnav ul { height: : 50px; width: 800px; margin: 0 auto; }
        .subnav ul li { font-family: serif; font-size: 18px; width: 150px; float: left; list-style-type: none; color: white; text-align: center; line-height: 50px; }
        .subnav ul li a { display: block; color: white; text-decoration: none; line-height: 50px; }
        .subnav ul li a:hover { background-color: #0e13ad; }
        #postrate a { background-color: #0a0d6b; }
        .buffer { line-height: : 40px; height: 40px; margin: 0 auto; }
        .form_register { background-color: #e1e8eb; width: 600px; margin: 0 auto; }
        td { padding: 5px; }
        .styled-button-8 {
            background: #336;
            //background: #25A6E1;
            background: -moz-linear-gradient(top, #336 0%, #188BC0 100%);
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #336), color-stop(100%, #188BC0));
            background: -webkit-linear-gradient(top, #336 0%, #188BC0 100%);
            background: -o-linear-gradient(top, #336 0%, #188BC0 100%);
            background: -ms-linear-gradient(top, #336 0%, #188BC0 100%);
            background: linear-gradient(top, #336 0%, #188BC0 100%);
            filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#25A6E1', endColorstr='#188BC0', GradientType=0);
            padding: 8px 13px;
            color: #fff;
            font-family: 'Helvetica Neue', sans-serif;
            font-size: 13px;
            border-radius: 3px;
            -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
            border: 1px solid #1A87B9;
            text-decoration: none;
        }
        h3 { font-family: arial, helvetica, sans-serif; font-size: 23px; }
        #message { color: red; }
        label { font-family: arial, helvetica, sans-serif; font-size: 13px; }
        .input-control { overflow: hidden; height: 25px; }
       
        .dropdown { position: relative; }
        .dropdown dd, .dropdown dt { margin: 0px; padding: 0px; }
        .dropdown ul { margin: -1px 0 0 0; }
        .dropdown dd { position: relative; }
        .dropdown a, .dropdown a:visited { color: rgb(0, 0, 0);text-decoration: none; outline: none; font-size: 13px; font-family: arial, helvetica, sans-serif; }
        .dropdown dt a { background-color: #FFF; display: block; overflow: hidden; border: 1px solid #999; width: 200px; position: relative; height: 25px; line-height: 25px; }
        .dropdown dt a .hida{font-family: 'arial, helvetica, sans-serif';font-size: 13px;color: #000;}
        .dropdown dt a .hida, .dropdown dt a .multiSel { display: block; width: 90%; padding: 0 5%; height: 100%; position: absolute; left: 0; top: 0; }
        .multiSel { margin: 0; }
        .dropdown dt a span, .multiSel span { cursor: pointer; display: inline-block; }
        .dropdown dd ul { background-color: #FFF; border: 1px solid #999; border-top: none; display: none; left: 0px; padding: 2px 15px 2px 5px; position: absolute; top: 1px; width: 180px; list-style:
        none; overflow: auto; z-index: 999;}
        .dropdown span.value { display: none; }
        .dropdown dd ul li { font-size: 11px; font-family: arial, helvetica, sans-serif; line-height: 20px;}
        .dropdown dd ul li a { padding: 5px; display: block; font-size: 11px; font-family: arial, helvetica, sans-serif; }
        .dropdown dd ul li.options { overflow: hidden; }
        .dropdown dd ul li span { cursor:pointing;float: right; font-size: 11px; font-family: arial, helvetica, sans-serif; }
        .dropdown dd ul li a:hover { background-color: #fff; }
    </style>

</head>
<body>
<div class="nav">
  <ul>
    <li>&nbsp;FellowTrucker</li>
    </ul>
</div>
<div class="subnav">

	<ul>
	 <li><a href="/">Home</a></li>
	 <li><a href="/searchrate">Search Rate</a></li>
 	 <li id="postrate"><a href="/postrate">Post Rate</a></li>
 	 <li><a href="/contact">Contact</a></li>
 	 <li><a href="/logout">Log out</a></li>
	</ul>
</div>

<div class="buffer">
</div>


<div class="form_register">
<form action="" method="post" id="post_rate"> 
<center>
<table id="form_table">
<tr>
    <td colspan=2 align=center>
    <h3>Post Your Rate</h3>
    </td>
  </tr>

  <tr><td colspan="2" id="message" align="center">&nbsp;<?php echo($error_msg);?></td></tr>

	 <tr>
  	<td align=right>
		<label for="pickup_date">Book date</label>
	</td>
	<td align=left>
		<input type="text" class="input-control" name="book_date" id="book_date" placeholder="date" size=15  value="<?php echo($book_date) ?>">
    </td>
    </tr>

	
  <tr>
  	<td align=right>
  		<label for="rate">Rate</label>
  	</td>
  	<td align=left>
      <input type="text" class="input-control" id="rate" name="rate" placeholder="$ amount" size="6" value="<?php echo($rate) ?>"><input type="text" class="input-control" value=".00" size=1 disabled>
    </td>
    </tr>

   <tr>
  	<td align=right>
		<label for="pickup_date">Pick up date</label>
	</td>
	<td align=left>
		<input type="text" class="input-control" name="pickup_date" id="pickup_date" placeholder="date" size=15  value="<?php echo($pickup_date) ?>">
    </td>
    </tr>
    <tr>
  	<td align=right>
		<label for="deliver_date">Deliver date</label>
	</td>
	<td align=left>
		<input type="text" class="input-control" name="deliver_date" id="deliver_date" placeholder="date" size=15 value="<?php echo($deliver_date) ?>">
    </td>
    </tr>
 
	
	<tr>
  	<td align=right>
	<label for="origin_state">Origin state</label> 
	</td>
	<td align=left>
	<select class="form-control customStyle" id="origin_state" name="origin_state">

	<?php

$state_list = array(
'Alabama'=>'AL',
'Alaska'=>'AK',
'Arizona'=>'AZ',
'Arkansas'=>'AR',
'California'=>'CA',
'Colorado'=>'CO',
'Connecticut'=>'CT',
'Delaware'=>'DE',
'District of Columbia'=>'DC',
'Florida'=>'FL',
'Georgia'=>'GA',
'Hawaii'=>'HI',
'Idaho'=>'ID',
'Illinois'=>'IL',
'Indiana'=>'IN',
'Iowa'=>'IA',
'Kansas'=>'KS',
'Kentucky'=>'KY',
'Louisiana'=>'LA',
'Maine'=>'ME',
'Maryland'=>'MD',
'Massachusetts'=>'MA',
'Michigan'=>'MI',
'Minnesota'=>'MN',
'Mississippi'=>'MS',
'Missouri'=>'MO',
'Montana'=>'MT',
'Nebraska'=>'NE',
'Nevada'=>'NV',
'New Hampshire'=>'NH',
'New Jersey'=>'NJ',
'New Mexico'=>'NM',
'New York'=>'NY',
'North Carolina'=>'NC',
'North Dakota'=>'ND',
'Ohio'=>'OH',
'Oklahoma'=>'OK',
'Oregon'=>'OR',
'Pennsylvania'=>'PA',
'Rhode Island'=>'RI',
'South Carolina'=>'SC',
'South Dakota'=>'SD',
'Tennessee'=>'TN',
'Texas'=>'TX',
'Utah'=>'UT',
'Vermont'=>'VT',
'Virginia'=>'VA',
'Washington'=>'WA',
'West Virginia'=>'WV',
'Wisconsin'=>'WI',
'Wyoming'=>'WY'
);

if ($origin_state !=""){
  foreach( $state_list as $name => $abbr ) {
    if ($abbr == $origin_state){
      echo '<option value="'. $abbr . '" selected>'. $name .'</option>';
    }
  }


} else{

  echo '<option value="" selected>Please select</option>';
}
  ?>
   <!--
		<optgroup>
		<option value="" selected>Please select</option>
   -->
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
	<!--
		</optgroup>
    -->
	</select>
   </td>
   </tr>
	
	<tr>
  	<td align=right>
	<label for="origin_city">Origin city</label> 
	</td>
	<td align=left>
     <select class="form-control customStyle" name="origin_city" id="origin_city" disabled>
     	<optgroup>
        <option value="<?php echo $origin_city_id;?>" selected style="font-family: arial, helvetica, sans-serif; font-size: 13px;"><?php echo $origin_city_name; ?></option>
        </optgroup>
     </select>	
     <input type="Hidden" name="origin_city_name" value="<?php echo $origin_city_name;?>">
<?php
if(!empty($origin_city_id))
    echo '<input type="hidden" name="origin_city" value="'.$origin_city_id.'">';
?>
	</td>
	</tr>
	
	
	
	<tr>
  	<td align=right>
	<label for="origin_zipcode">(or origin zip code)</label>
	</td>
	<td align=left>
	<input class="input-control" type="text" name= "origin_zipcode" id="origin_zipcode" placeholder="optional" size="6"  value="<?php echo($origin_zipcode) ?>">
	</td>
	</tr>	
	

		
	<tr>
  	<td align=right>
	<label for="dest_state">Destination state</label> 
	</td>
	<td align=left>
	
	<select class="form-control customStyle" id="dest_state" name="dest_state">

	<?php

$state_list = array(
'Alabama'=>'AL',
'Alaska'=>'AK',
'Arizona'=>'AZ',
'Arkansas'=>'AR',
'California'=>'CA',
'Colorado'=>'CO',
'Connecticut'=>'CT',
'Delaware'=>'DE',
'District of Columbia'=>'DC',
'Florida'=>'FL',
'Georgia'=>'GA',
'Hawaii'=>'HI',
'Idaho'=>'ID',
'Illinois'=>'IL',
'Indiana'=>'IN',
'Iowa'=>'IA',
'Kansas'=>'KS',
'Kentucky'=>'KY',
'Louisiana'=>'LA',
'Maine'=>'ME',
'Maryland'=>'MD',
'Massachusetts'=>'MA',
'Michigan'=>'MI',
'Minnesota'=>'MN',
'Mississippi'=>'MS',
'Missouri'=>'MO',
'Montana'=>'MT',
'Nebraska'=>'NE',
'Nevada'=>'NV',
'New Hampshire'=>'NH',
'New Jersey'=>'NJ',
'New Mexico'=>'NM',
'New York'=>'NY',
'North Carolina'=>'NC',
'North Dakota'=>'ND',
'Ohio'=>'OH',
'Oklahoma'=>'OK',
'Oregon'=>'OR',
'Pennsylvania'=>'PA',
'Rhode Island'=>'RI',
'South Carolina'=>'SC',
'South Dakota'=>'SD',
'Tennessee'=>'TN',
'Texas'=>'TX',
'Utah'=>'UT',
'Vermont'=>'VT',
'Virginia'=>'VA',
'Washington'=>'WA',
'West Virginia'=>'WV',
'Wisconsin'=>'WI',
'Wyoming'=>'WY'
);

if ($dest_state !=""){
  foreach( $state_list as $name => $abbr ) {
    if ($abbr == $dest_state){
      echo '<option value="'. $abbr . '" selected>'. $name .'</option>';
    }
  }


} else{

  echo '<option value="" selected>Please select</option>';
}
  ?>

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
	
	</td>
	</tr>
	
     <tr>
  	 <td align=right>
	 <label for="dest_city">Destination city</label>
	 </td>
	 <td align=left>
	 
     <select class="form-control customStyle" name="dest_city" id="dest_city" disabled>
     <optgroup>
     <option value="<?php echo $dest_city_id;?>"><?php echo $dest_city_name;?></option>
     </optgroup>
     </select>
     <input type="hidden" name="dest_city_name" value="<?php echo $dest_city_name;?>">
<?php
if(!empty($dest_city_id))
    echo '<input type="hidden" name="dest_city" value="'.$dest_city_id.'">';
?>
    
	</td>
	</tr>

	
	<tr>
  	 <td align=right>
	<label for="dest_zipcode">(or destination zip code)</label>
	</td>
	<td align=left>
	 <input class="input-control" type="text" name= "dest_zipcode" id="dest_zipcode" placeholder="optional" size="6" value="<?php echo($dest_zipcode) ?>">
	</td>
	</tr>



  <tr>
  	 <td align=right>
	<label for="trailer_type">Trailer type</label> 
	</td>
	<td align=left>
		<select class="form-control customStyle" id="trailer_type" name="trailer_type">
<?php
    if ($trailer_type ==""){
     echo '<option value="" selected>Please select</option>';
    }else if ($trailer_type =="N") {
      echo '<option value="N" selected>Conestoga<span>N</span></option>';
    }else if ($trailer_type =="C") {
      echo '<option value="C" selected>Containers<span>C</span></option>';
    }else if  ($trailer_type =="K") {
       echo '<option value="K" selected>Decks, Specialized<span>K</span></option>';
    }else if  ($trailer_type =="D") {
       echo '<option value="D" selected>Decks, Standard<span>D</span></option>';
    }else if  ($trailer_type =="B") {
       echo '<option value="B" selected>Dry Bulk<span>B</span></option>';
    }else if  ($trailer_type =="F") {
       echo '<option value="F" selected>Flatbeds<span>F</span></option>';
    }else if  ($trailer_type =="Z") {
       echo '<option value="Z" selected>Hazardous Materials<span>Z</span></option>';
    }else if  ($trailer_type =="O") {
       echo '<option value="O" selected>Other Equipments<span>O</span></option>';
    }else if  ($trailer_type =="R") {
       echo '<option value="R" selected>Reefers<span>R</span></option>';
    }else if  ($trailer_type =="T") {
       echo '<option value="T" selected>Tankers<span>T</span></option>';
    }else if  ($trailer_type =="S") {
       echo '<option value="S" selected>Vans Specialized<span>S</span></option>';
    }else if  ($trailer_type =="V") {
       echo '<option value="V" selected>Vans Standard<span>V</span</option>';
    }

?>
        <option value="N" class="trailer_select">Conestoga<span>N</span></option>
        <option value="C" class="trailer_select">Containers<span>C</span></option>
        <option value="K" class="trailer_select">Decks, Specialized<span>K</span></option>
        <opption value="D" class="trailer_select">Decks, Standard<span>D</span></opption>
        <option value="B" class="trailer_select">Dry Bulk<span>B</span></option>
        <option value="F" class="trailer_select">Flatbeds<span>F</span></option>
        <option value="Z" class="trailer_select">Hazardous Materials<span>Z</span></option>
        <option value="O" class="trailer_select">Other Equipments<span>O</span></option>
        <option value="R" class="trailer_select">Reefers<span>R</span></option>
        <option value="T" class="trailer_select">Tankers<span>T</span></option>
        <option value="S" class="trailer_select">Vans Specialized<span>S</span></option>
        <option value="V" class="trailer_select">Vans Standard<span>V</span></option>
        </select>
    </td>
	</tr>
	

	 <tr>
  	 <td align=right>
	<label for="number_pickups">Number of picks</label> 
	</td>
	<td align=left>
		<select class="form-control customStyle2" id="number_pickups" name="number_pickups">
        <option value="1" selected>1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        </select>
    </td>
	</tr>


	 <tr>
  	 <td align=right>
	<label for="number_drops">Number of drops</label> 
	</td>
	<td align=left>
		<select class="form-control customStyle2" id="number_drops" name="number_drops">
        <option value="1" selected>1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        </select>
    </td>
	</tr>

 <tr>
  	<td align=right>
		<label for="weight">Weight</label>
	</td>
	<td align=left>
		<input type="text" class="input-control" name="weight" id="weight" placeholder="klbs" size="6" value="<?php echo($weight) ?>">&nbsp;klbs
	</td>
	</tr>
 
	
	<tr>
  	 <td align=right>
	<label for="load_type">Load type</label> 
	</td>
	<td align=left>
	<div class="styled-select">
	<select class="form-control customStyle" name="load_type">
	<option value="F" selected>Full Load</option>
	<option value="P">Partial Load</option>
	</select>
	</div>
	</td>
	</tr>
	
    <tr>
  	 <td align=right>
	<label for="comment">Comments</label>
	</td>
	<td align=left>
	  <textarea class="form-control" name='comment' id='comment' rows="3" cols="25" value="<?php echo($comment) ?>"></textarea>
    </td>
    </tr>
	<!--
	 <button type="submit" class="btn btn-default">Post Rate</button>
	 -->
	<tr>
    <td colspan=2 align=center>
    <input type="submit" value="Post Rate" class="styled-button-8" onclick="button_validate()">
    </td>
  </tr>
  </table>
  </center>
  </form>


</div>

<script type="text/javascript" src="../scripts/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="../scripts/jquery-ui.min.js"></script>
<script src="../scripts/select2.full.js"></script>
  
    <script type="text/javascript">
        $(document).ready(function() {
            function matchStart(term, text){
                if (text.toUpperCase().indexOf(term.toUpperCase()) == 0){ return true; }
                return false;
            }
            $.fn.select2.amd.require(['select2/compat/matcher'], function(oldMatcher){
                $( "#origin_state,#origin_city,#dest_state,#dest_city").select2({
                    matcher: oldMatcher(matchStart)
                });
                if($("#origin_state").val()){
                  var obj = $("#origin_city");
                  obj.load("getCities.php",{"state": $('#origin_state').val()}, function(data){
                      data = '<option value="<?php echo $origin_city_id;?>"><?php echo $origin_city_name;?></option>' + data;
                      $(this).html(data).prop('disabled',false).select2({matcher: oldMatcher(matchStart)});
                  });
                }
                if($("#dest_state").val()){
                  var obj = $('#dest_city');
                  obj.load("getCities.php",{"state": $('#dest_state').val()}, function(data){
                      data = '<option value="<?php echo $dest_city_id;?>"><?php echo $dest_city_name;?></option>' + data;
                      $(this).html(data).prop('disabled',false).select2({matcher: oldMatcher(matchStart)});
                  });
                }
                $("#origin_state,#dest_state").on("select2:close", function(e){
                    var id = $(this).attr('id').replace('state', 'city');
                    var obj = $("#" + id);
                    obj.load("getCities.php",{"state": $(this).val()}, function(data){
                        data = '<option value="">Please Select</option>' + data;
                        $(this).html(data).prop('disabled',false).select2({matcher: oldMatcher(matchStart)});
                    });
                });
                $("#origin_city,#dest_city").on("select2:close",function(e){
                    var id = 'input[name="' + $(this).attr('id') + '_name"]';
                    $(id).val($(this).find("option:selected").text());
                    id = 'input[name="' + $(this).attr('id') + '"]';
                    //console.log($(this).find("option:selected").val());
                    //$(id).val($(this).find("option:selected").val());
                    //console.log(id);
                    $(id).remove();
                });
            });
            $("#pickup_date").datepicker();
            $("#deliver_date").datepicker();
            $("#book_date").datepicker();
            
            $(".dropdown dt a").on('click', function() {
                  $(".dropdown dd ul").slideToggle('fast');
            });
            $(".dropdown dd ul li a").on('click', function() {
                  $(".dropdown dd ul").hide();
            });
            $(".dropdown dd ul li.options span").on('click',function(){
                var cls = $(this)[0].className;
                if(cls == "cleanall"){
                    $(':checkbox').prop('checked',false);
                    $('.multiSel').empty();
                    $(".hida").show();
                }else{
                    $(':checkbox').prop('checked',true);
                    var html = '';
                    $(".hida").hide();
                    $(':checkbox').each(function(index){
                        var title = $(this).attr('data-show');
                        if(!index)
                            var sp = '';
                        else
                            var sp = ',';
                        html = '<span title="' + title + '">' + sp + title + '</span>';
                        $('.multiSel span[title="'+title+'"]').remove();
                        $('.multiSel').append(html);
                    });
                }
            });
            function getSelectedValue(id) {
                  return $("#" + id).find("dt a span.value").html();
            }
            $(document).bind('click', function(e) {
                  var $clicked = $(e.target);
                    if (!$clicked.parents().hasClass("dropdown")) $(".dropdown dd ul").hide();
            });
            $('.mutliSelect input[type="checkbox"]').on('click', function() {
                var obj = '';
                var title = $(this).attr('data-show'),value = $(this).val();
                if ($(this).is(':checked')) {
                    var html = '<span title="' + title + '">,' + title + '</span>';
                    $('.multiSel').append(html);
                    $(".hida").hide();
                    obj = $('.multiSel span:eq(0)');
                }else{
                    $('span[title="' + title + '"]').remove();
                    if($('.multiSel span').length)
                        var ret = $(".hida").hide();
                    else
                        var ret = $(".hida").show();
                    $('.dropdown dt a').append(ret);
                    obj = $('.multiSel span:eq(0)');
                }
                if(obj.length){
                    obj.html(obj.html().replace(',',''));
                }
            });
        });
    </script>
</body>

</html>

