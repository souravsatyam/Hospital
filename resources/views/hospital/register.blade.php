<!-- multistep form -->
<html ng-app="app">
<head>
<title>Hospital Register</title>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script> -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

</head>
<style>

/*custom font*/
@import url(http://fonts.googleapis.com/css?family=Montserrat);

/*basic reset*/
* {margin: 0; padding: 0;}

html {
	height: 100%;
	/*Image only BG fallback*/
	background: url('http://thecodeplayer.com/uploads/media/gs.png');
	/*background = gradient + image pattern combo*/
	background: 
		linear-gradient(rgba(196, 102, 0, 0.2), rgba(155, 89, 182, 0.2)), 
		url('http://thecodeplayer.com/uploads/media/gs.png');
}

body {
	font-family: montserrat, arial, verdana;
}
/*form styles*/
#msform {
	width: 400px;
	margin: 50px auto;
	text-align: center;
	position: relative;
}
#msform fieldset {
	background: white;
	border: 0 none;
	border-radius: 3px;
	box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
	padding: 20px 30px;
	
	box-sizing: border-box;
	width: 80%;
	margin: 0 10%;
	
	/*stacking fieldsets above each other*/
	position: absolute;
}
/*Hide all except first fieldset*/
#msform fieldset:not(:first-of-type) {
	display: none;
}
/*inputs*/
#msform input, #msform textarea {
	padding: 15px;
	border: 1px solid #ccc;
	border-radius: 3px;
	margin-bottom: 10px;
	width: 100%;
	box-sizing: border-box;
	font-family: montserrat;
	color: #2C3E50;
	font-size: 13px;
}
/*buttons*/
#msform .action-button {
	width: 100px;
	background: #27AE60;
	font-weight: bold;
	color: white;
	border: 0 none;
	border-radius: 1px;
	cursor: pointer;
	padding: 10px 5px;
	margin: 10px 5px;
}
#msform .action-button:hover, #msform .action-button:focus {
	box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
}
/*headings*/
.fs-title {
	font-size: 15px;
	text-transform: uppercase;
	color: #2C3E50;
	margin-bottom: 10px;
}
.fs-subtitle {
	font-weight: normal;
	font-size: 13px;
	color: #666;
	margin-bottom: 20px;
}
/*progressbar*/
#progressbar {
	margin-bottom: 30px;
	overflow: hidden;
	/*CSS counters to number the steps*/
	counter-reset: step;
}
#progressbar li {
	list-style-type: none;
	color: white;
	text-transform: uppercase;
	font-size: 9px;
	width: 33.33%;
	float: left;
	position: relative;
}
#progressbar li:before {
	content: counter(step);
	counter-increment: step;
	width: 20px;
	line-height: 20px;
	display: block;
	font-size: 10px;
	color: #333;
	background: white;
	border-radius: 3px;
	margin: 0 auto 5px auto;
}
/*progressbar connectors*/
#progressbar li:after {
	content: '';
	width: 100%;
	height: 2px;
	background: white;
	position: absolute;
	left: -50%;
	top: 9px;
	z-index: -1; /*put it behind the numbers*/
}
#progressbar li:first-child:after {
	/*connector not needed before the first step*/
	content: none; 
}
/*marking active/completed steps green*/
/*The number of the step and the connector before it = green*/
#progressbar li.active:before,  #progressbar li.active:after{
	background: #27AE60;
	color: white;
}
.error {
color: #D8000C;
background-color: #FFBABA;
background-image: url('error.png');
}

</style>
<div class="error">
  
</div>
<body class="hold-transition login-page">
<form method="post" action="{{URL::to('hospital/do_register')}}" id="msform" ng-controller="" name="hospitalForm">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
	<!-- progressbar -->
	<ul id="progressbar">
		<li class="active">Hospital Information</li>
		<li>Contact Details</li>
		
	</ul>
	<!-- fieldsets -->
       
	<fieldset>
		<h2 class="fs-title">Hospital Registration</h2>
		<h3 class="fs-subtitle">Hospital Information</h3>
                <input type="text" name="hospitalname" id="hospitalname" ng-model="hospitalname" placeholder="Hospital Name" />
                <input type="text" name="hospitalemail" id="hospitalemail" ng-model="hospitalemail" placeholder="Hospital Email"/>
                <input type="password" name="hospitalpassword" id="hospitalpassword" ng-model="hospitalpassword"  placeholder="Hospital Password" />
		<input type="password" name="cpass" id="confirm_hospital_password" ng-model="confirm_hospital_password" id="confirm_hospital_password"  placeholder="Confirm Password" />
                <input type="text" name="EstablishedYear" id="EstablishedYear" ng-model="EstablishedYear" placeholder="Establish year" />
           
                <input type="button" name="next" class="next action-button" value="Next" />
	</fieldset>
	<fieldset>
           
                <h2 class="fs-title">Contact Information</h2>
		<h3 class="fs-subtitle">Contact Information</h3>
                <input type="text" name="hospital_contact_number" id="hospital_contact_number" ng-model="hospital_contact_number" placeholder="Contact Number" />
                <input type="text" name="hospital_addres_line_1" id="hospital_addres_line_1" ng-model="hospital_addres_line_1" placeholder="Address Line 1">
                <input type="text" name="hospital_address_line_2" id="hospital_addres_line_2" ng-model="hospital_addres_line_2" placeholder="Address Line 2(optional)">
                <input type="text" name="hospital_pincode" id="hospital_pincode" ng-model="hospital_pincode" placeholder="Pincode">
		<input type="text" name="hospital_city" id="hospital_city" ng-model="hospital_city" placeholder="City" />
                <input type="text" name="hospital_state" id="hospital_state" ng-model="hospital_state" placeholder="State" />
                <input type="text" name="hospital_country" id="hospital_country" ng-model="hospital_country" placeholder="Country" />
		<input type="button" name="previous" class="previous action-button"  value="Previous" />
		<input type="submit" name="submit" id="submit" value="submit" />
	</fieldset>
	
</form>
</body>
<script src="http://thecodeplayer.com/uploads/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<!-- jQuery easing plugin -->
<script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>

<!-- <script src="{{URL::asset('hospital/js/registerValidator.js')}}" type="text/javascript"></script> -->
<script>
    

//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'transform': 'scale('+scale+')'});
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".submit").click(function(){
	return false;
})





</script>

<!-- jQuery -->

</html>