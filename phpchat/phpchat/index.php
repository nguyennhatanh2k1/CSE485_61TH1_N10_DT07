
<!DOCTYPE html>
<html dir="ltr" lang="en-US">	
	<head>
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
    <meta charset="utf-8">
    <title>PHP CHART</title>
     <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">
      <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">
        <link rel="stylesheet" href="script/flags24.css" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="script/validation.min.js"></script>
<script type="text/javascript" src="script/login.js"></script>

 <script src="script/sweetalert.min.js"></script>
 <link rel="stylesheet" type="text/css" href="script/sweetalert.css">
 <script src="script.js"></script>

  <script src="script.responsive.js"></script>
  <script type="text/javascript"> 
 	$(document).ready(function(){
 
    	$("#btn").click(function() {
    	            swal({
    	    text: "Enter First name",
    	    html:true,   
            title:"<div class='checkout-wrap' style='padding-bottom:3px;'><ul class='checkout-bar'><li class='active'></li><li class='next'></li><li class=''></li><li class=''></li><li class=''></li><li class=''></li><li class=''></li></ul></div>",              
            type:"input",
            showCancelButton: true,   
            closeOnConfirm: false,   
            animation: "slide-from-top",   
            inputPlaceholder: "Firstname" 
        },
        function(inputValue){
            if (inputValue === false) return false;      
            if (inputValue === "") {
                swal.showInputError("Please enter your firstname!");     
                return false;
            }   	
    	 swal({
            text: "Enter your sirname:",   
            html:true,  
            title:"<div class='checkout-wrap' style='padding-bottom:3px;'><ul class='checkout-bar'><li class='visited first'></li><li class='active'></li><li class='next'></li><li class=''></li><li class=''></li><li class=''></li><li class=''></li></ul></div>",                
            type: "input",
            showCancelButton: true,   
            closeOnConfirm: false,   
            animation: "slide-from-top",   
            inputPlaceholder: "Sirname" 
        },
        function(inputValue1){
            if (inputValue1 === false) return false;      
            if (inputValue1 === "") {
                swal.showInputError("Please enter your sirname!");     
                return false;
            }  	
    	 swal({
             
            text: "Enter your email address:", 
             html:true,
            title:"<div class='checkout-wrap' style='padding-bottom:3px;'><ul class='checkout-bar'><li class='visited first'></li><li class='visited second'></li><li class='active'></li><li class='next'></li><li class=''></li><li class=''></li><li class=''></li></ul></div>",                
            type: "input",
            showCancelButton: true,   
            closeOnConfirm: false,   
            animation: "slide-from-top",   
            inputPlaceholder: "Email" 
        },
        function(inputValue2){
            if (inputValue2 === false) return false;      
            if (inputValue2 === "") {
                swal.showInputError("Please enter your email address!");     
                return false;
            }
    swal({
            text: "Enter password:",
             html:true,
            title:"<div class='checkout-wrap' style='padding-bottom:3px;'><ul class='checkout-bar'><li class='visited first'></li><li class='visited second'></li><li class='visited third'></li><li class='active'></li><li class='next'></li><li class=''></li><li class=''></li></ul></div>",                   
            type: "input",
            inputType: "password",
            showCancelButton: true,   
            closeOnConfirm: false,   
            animation: "slide-from-top",   
            inputPlaceholder: "Password" 
        },
        function(inputValue4){
            if (inputValue4 === false) return false;      
            if (inputValue4 === "") {
                swal.showInputError("Please enter your password!");     
                return false;
            }
                 swal({
            text: "Repeat password",
            html:true,
            title:"<div class='checkout-wrap' style='padding-bottom:3px;'><ul class='checkout-bar'><li class='visited first'></li><li class='visited second'></li><li class='visited third'></li><li class='visited forth'></li><li class='active'></li><li class='next'></li><li class=''></li></ul></div>",                      
            type: "input",
            inputType: "password",
            showCancelButton: true,   
            closeOnConfirm: false,   
            animation: "slide-from-top",   
            inputPlaceholder: "Repeat password" 
        },
        function(inputValue5){
            if (inputValue5 === false) return false;      
            if (inputValue5 === "") {
                swal.showInputError("Please enter your password again!");     
                return false;
            }else if(inputValue4!=inputValue5){
            	    swal.showInputError("Password dont match try again!");     
                return false;     
                  }
    	     swal({
             
            text: "Institution/College:", 
            html:true,
            title:"<div class='checkout-wrap' style='padding-bottom:3px;'><ul class='checkout-bar'><li class='visited first'></li><li class='visited second'></li><li class='visited third'></li><li class='visited forth'></li><li class='visited fifth'></li><li class='active'></li><li class='next'></li></ul></div>",                      
            type: "input",
            showCancelButton: true,   
            closeOnConfirm: false,   
            animation: "slide-from-top",   
            inputPlaceholder: "Inst/Col" 
        },
        function(inputValue6){
            if (inputValue6 === false) return false;      
            if (inputValue6 === "") {
                swal.showInputError("Please enter your institution/college!");     
                return false;
            }
    	   swal({
              
            html:true,
            title:"<div class='checkout-wrap' style='padding-bottom:3px;'><ul class='checkout-bar'><li class='visited first'></li><li class='visited second'></li><li class='visited third'></li><li class='visited forth'></li><li class='visited fifth'></li><li class='visited sixth'></li><li class='active'></li></ul></div>",                      
             type: "input",
            showCancelButton: true,   
            closeOnConfirm: false,
            showLoaderOnConfirm: true,   
            animation: "slide-from-top",   
            inputPlaceholder: "+265 999 667 662" 
        },
        function(inputValue7){
            if (inputValue7 === false) return false;      
            if (inputValue7 === "") {
                swal.showInputError("Please enter your phone number!");     
                return false;
            }
                  var vals;var vals1;var vals2;var vals3;var vals4;var vals5;var vals6;var vals7;
                  //var vals1;
    	 		vals=inputValue; vals1=inputValue1;	vals2=inputValue2;
                vals4=inputValue4;vals6=inputValue6;
                    	 		vals7=inputValue7;
             $.ajax ({
            type : 'POST',
            url: "register.php",
            data: { valz : vals,valz1:vals1,valz2:vals2,
            	    valz4:vals4,valz6:vals6,valz7:vals7 },
            success: function(result) {
                if(result=="Now"){
                swal("Account created successfully", "", "success" ); 
                
                }
                else if(result=="pass")
                     {
                	   sweetAlert("Oops...", "Password too weak use numbers and latters!", "error");
                	}
                else{
                	   sweetAlert("Oops...", "It seems you arleady have an account try again!", "error");
                	}
            }
        });                
            });  
            }); 
            });	  }); }); 	});        
    });});
});
 </script>           				                                   				                                         				                          				          				
   <script type="text/javascript">
        function changeFlag() {$("#dvFlag").attr('class', $("#CountryList").val().toLowerCase());}
 </script>
   
<style>.art-content .art-postcontent-0 .layout-item-0 { border-top-style:solid;border-right-style:solid;border-bottom-style:solid;border-left-style:solid;border-width:0px;border-top-color:#949494;border-right-color:#949494;border-bottom-color:#949494;border-left-color:#949494;  border-collapse: separate;  }
.art-content .art-postcontent-0 .layout-item-1 { color: #000000; background: #E8E8E8; padding: 3px; border-radius: 30px;  }
.ie7 .art-post .art-layout-cell {border:none !important; padding:0 !important; }
.ie6 .art-post .art-layout-cell {border:none !important; padding:0 !important; }

</style>
</head>
<body>
<div id="art-main">
    <div class="art-sheet clearfix">
<header class="art-header">

    <div class="art-shapes">
        
            </div>

<h1 class="art-headline">
    PHP CHAT SYSTEM
</h1>
<h2 class="art-slogan">PHP, JAVASCRIPT, BOOTSTRAP, HTML5, CSS3 </h2>

                <div id="art-flash-area">
                    <div id="art-flash-container">
                    <object width="900" height="225" id="art-flash-object" data="images/flash.swf" type="application/x-shockwave-flash">
                        <param name="quality" value="high">
                    	<param name="scale" value="exactfit">	
		
	              	<param name="wmode" value="transparent">
                    	<param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.70&amp;framerate1=24&amp;loop=true&amp;wmode=transparent">
                        <param name="swfliveconnect" value="true">
                        <!--[if !IE]>-->
                        <object type="application/x-shockwave-flash" data="images/flash.swf" width="900" height="225">
                            <param name="quality" value="high">
                    	    <param name="scale" value="exactfit">
                            <param name="wmode" value="transparent">
                                                    	    <param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.70&amp;framerate1=24&amp;loop=true&amp;wmode=transparent">
                            <param name="swfliveconnect" value="true">
                        <!--<![endif]-->
                          	<div class="art-flash-alt"><a href="https://www.adobe.com/go/getflashplayer"><img src="https://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player"></a></div>
                        <!--[if !IE]>-->
                        </object>
                        <!--<![endif]-->
                    </object>
                    </div>
                    </div>
<nav class="art-nav">
    <ul class="art-hmenu"><li><a href="index.php" >WELCOME</a></li>
    	</ul> 
 
    </nav>                    
</header>
	<div class="art-layout-wrapper">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content"><article class="art-post art-article">                                
                                <div class="art-postcontent art-postcontent-0 clearfix">
                                	       
                                	<div class="art-content-layout layout-item-0">
	  <div class="art-content-layout-row">
	  	<div class="art-layout-cell layout-item-1" style="width: 50%;color:white;background-color:#363636;border-radius:0%; " >
        &nbsp; &nbsp; &nbsp;<span style="font-family: 'Times New Roman'; font-weight: bold;">WELCOME TO PHP CHAT SYSTEM</span>
        <p class="MsoNormal" style="text-align: justify;"><span style="font-family: 'Times New Roman'; font-weight: bold;"><span style="font-size: 12pt;">
        	Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></span></p>
         
         </div>

 <div class="art-layout-cell" style="width: 50%" >
 	
        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        	<span style="font-family: 'Times New Roman'; font-size: 22px;">
        		<span style="font-weight: bold; color: rgb(255, 255, 255);">Do you have an account?</span>
        		</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
        <p>	<center> <div id="error" style="width:60%";> </div> </center>
                </p>
        	<form class="form-login" method="post" id="login-form">
        		<p>&nbsp; &nbsp; &nbsp;&nbsp;
       <span style="font-weight: bold; font-family: 'Times New Roman'; font-size: 16px; color: rgb(255, 255, 255);">
       	Email address:</span><span style="font-weight: bold; font-family: 'Times New Roman'; font-size: 16px;">&nbsp;</span>
	<input type="email" class="form-control" placeholder="email address" name="user_email" id="user_email" />
       	</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="font-weight: bold;">&nbsp;
       		<span style="font-family: 'Times New Roman'; font-size: 16px; color: #FFFFFF;">Password</span>
       		<span style="font-family: 'Times New Roman'; font-size: 16px; color: #FFFFFF;">:</span></span>
			<input type="password" class="form-control" placeholder="Password" name="password" id="password" />       		
       		</p><p style="text-align: -webkit-auto;">
       			<label class="art-checkbox">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
       				 &nbsp; &nbsp; &nbsp;
       		</label>
       		 <button class="art-button" name="login_button" id="login_button" >&nbsp;       		 
       		 <span class="glyphicon glyphicon-log-in"> </span> &nbsp; Sign In </button>
       	 
       		  <button class="art-button" name="login_button" id="btn" >&nbsp;       		 
       		 <span class="glyphicon glyphicon-user"> </span> &nbsp; Register </button> 
       	    
       	    </p>
    	   </form>    	  
    	   
	</div>
		
	 </div>
</div>
</div>


</article></div>

                    </div>
                </div>
            </div>
            <footer class="art-footer">
<div style="position:relative;padding-left:10px;padding-right:10px">
	</div>
</footer>

    </div>
    <p class="art-page-footer">
        <span style="font-size: 16px; font-weight:bold; font-family: 'Times New Roman';">Brought to you by: <a href="http://code-projects.org/"  style="font-weight: bold; font-family: 'Comic Sans MS'; font-size:18px;color:  #5261D1;">code-projects.org </a></span>

    </p>
</div>


</body></html>