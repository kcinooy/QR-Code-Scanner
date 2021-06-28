<?php session_start()?>
<html>
    <head>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
<script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<head>
<style>
* {box-sizing: border-box;}
body {
margin: 0;
font-family: Arial;
}
.header {
overflow: hidden;
background: url(images/banner.png); 
padding: 20px 10px;
}
.header a {
float: left;
color: white;
text-align: center;
padding: 12px;
text-decoration: none;
font-size: 15px;
line-height: 25px;
border-radius: 5px;
}
.headera.logo {
font-size: 25px;
font-weight: bold;
}
.header a:hover {
background-color: grey;
color: black;
}
.headera.active {
background-color: green;
color: white;
}
.header-right {
float: right;
}
@media screen and (max-width: 500px) {
.header a {
float: none;
display: block;
text-align: left;
}
.header-right {
float: none;
}
}
</style>
</head>
<body>
<div class="header">
    <a href="#">
        <img class="header-logo-image" src="images/header1.png" alt="Logo">
    </a>
<div class="header-right">
<a class="button button-primary button-wide-mobile" href="attendance.php">Attendance</a>
</div>
</div>
<div style="padding-left:20px">
<h1>Automated Monitory System Applying QR Code</h1>
</div>
</body>
    <body>

        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <video id="preview" width="100%"></video>
                </div>
                <div class="col-md-6">
                	<form action="insert.php" method="post" class="form-horizontal">
                        <label>SCAN QR CODE</label>
                    <input type="text" name="text" id="text" readonyy="" placeholder="" class="form-control">
                	</form>

                    
                </div>
            </div>
        </div>

        <script>
           let scanner = new Instascan.Scanner({ video: document.getElementById('preview')});
           Instascan.Camera.getCameras().then(function(cameras){
               if(cameras.length > 0 ){
                   scanner.start(cameras[0]);
               } else{
                   alert('No cameras found');
               }

           }).catch(function(e) {
               console.error(e);
           });

           scanner.addListener('scan',function(c){
               document.getElementById('text').value=c;
               document.forms[0].submit();

           });

        </script>
    </body>
</html>