<?php
include_once("config.php");
$result = mysqli_query($con, "select *from  patient order by id DESC");

?>

<html>
    <head>
        <title>Patient Database </title>
        
           <link href = "home.css" type= "text/css" rel = "stylesheet">		
	</head> 
	<body >
	    <header>
		    <div class ="row">
                <ul class = "main-nav">
				    <li c><a href = "/Home.html"> Home </a></li>
					<li><a href = "./Doctor.html"> Doctors Info </a></li>
					<li class="active"><a href = "./patient.html"> Patient Info </a></li>
					
					<li><a href = "./stuff.html"> Stuff Info</a></li>
                    <li><a href = "./Developer.html"> Developer Info</a></li>
                     					
				</ul>  
			</div>	
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            </head>
    <body>
        <br><br>
        <div class="container">
        <table class="table" style="color: White;">
            <thead>
      <tr>
        <th>ID</th>
        <th>Patient Name</th>
        <th>Patient Age</th>
         <th>Patient Deases</th>
           <th>Patient Phone Number</th>
      </tr>
    </thead>
         <tbody>
            <?php
                 while($res = mysqli_fetch_array($result))
                 {
                   
                     echo "<tr><td>".$res['id']."</td>";
                     echo "<td>".$res['pname']."</td>";
                     echo "<td>".$res['p_age']."</td>";
                       echo "<td>".$res['pdeases']."</td>";
                       echo "<td>".$res['pphone']."</td>";
                     
                 }
             ?>
            </tbody>
            </div>
        </table>
    </body>
</html>