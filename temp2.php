<html>
   <head>
      <title>Creating MySQL Temporary Tables</title>
   </head>
   <body>
      <?php
	   session_start();
	    $con=mysqli_connect("localhost","root","");
	   $naam=$_SESSION['name'];
	   $table=$_SESSION['teamtable'];
	   $table1=$_SESSION['teamtable1'];
	   $table2=$_SESSION['teamtable2'];
	    $table1=mysqli_query($con,"select uid from tet");
	    
			while($row = mysqli_fetch_array($table2))
			{	
			
			
			  
			echo $row['uid'];
				  
		}
		
	   
	   
	   echo $naam;
         $con=mysqli_connect("localhost","root","");
		if (!$con)
		{
			die('Could not connect: ' . mysqli_error());
		}
		mysqli_select_db( $con,"final");
         if(! $con ) {
            die('Could not connect: ' . mysql_error());
         }
         echo 'Connected successfully<br />';
         $sql = "CREATE TEMPORARY TABLE tet(
            uid INT(10) ,
	         name varchar(10),
               password int(10)
                   )"; 
         
             $A=mysqli_query($con,$sql);
       

         if(! $A ) {
            die('Could not create table: ');
         }
		 
		 echo "h";
		 $rs=mysqli_query($con,"select uid from tet");
		 if(mysqli_num_rows($rs)>0)
		{
			while($row = mysqli_fetch_array($rs))
			{	
			
			
			  
			echo $row['uid'];
				  
		}
		}
        else{ echo"problem in wamp server";
		}
         echo "Table created successfully\n";
         mysqli_close($con);
      ?>
   </body>
</html>