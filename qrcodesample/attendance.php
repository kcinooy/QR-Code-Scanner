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
<a class="button button-primary button-wide-mobile" href="index.php">Scanner</a>
</div>
</div>
<div style="padding-left:20px">
<h1>Daily Monitoring</h1>
</div>
</body>
    <body>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>STUDENT ID</td>
                    <td>TIME IN</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    $conn = new mysqli('localhost', 'root', '', 'qrcodedb');

                    if($conn->connect_error){
    die("Connection Failed" .$conn->connect_error);}
                    $sql="SELECT ID,STUDENTID,TIMEIN FROM attendance WHERE DATE(TIMEIN)=CURDATE()";
                    $query = $conn->query($sql);
                    while ($row = $query->fetch_assoc()){
                ?>
                    <tr>
                        <td><?php echo $row['ID'];?></td>
                        <td><?php echo $row['STUDENTID'];?></td>
                        <td><?php echo $row['TIMEIN'];?></td>
                    </tr>
                    <?php
                    }
                ?>
            </tbody>

        
    </body>
</html>