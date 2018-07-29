<?php
include_once("config.php");
$result = mysqli_query($con, "select *from stuff1 order by id DESC");

?>

<html>
    <head>
        <title>Stuff Database </title>
        
           <link href = "home.css" type= "text/css" rel = "stylesheet">		
	</head> 
	<body >
	    <header>
		    <div class ="row">
                <ul class = "main-nav">
				    <li c><a href = "/Home.html"> Home </a></li>
					<li><a href = "./Doctor.html"> Doctors Info </a></li>
					<li ><a href = "./patient.html"> Patient Info </a></li>
					
					<li class="active"><a href = "./stuff.html"> Stuff Info</a></li>
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
        <th>Stuff Name</th>
        <th>Stuff Postion </th>
     
           <th>Stuff Phone Number</th>
      </tr>
    </thead>
         <tbody>
            <?php
                 while($res = mysqli_fetch_array($result))
                 {
                   
                     echo "<tr><td>".$res['id']."</td>";
                     echo "<td>".$res['sname']."</td>";
                     echo "<td>".$res['spostion']."</td>";
                       
                       echo "<td>".$res['sphone']."</td>";
                     
                 }
             ?>
            </tbody>
            </div>
        </table>
    </body>
</html>