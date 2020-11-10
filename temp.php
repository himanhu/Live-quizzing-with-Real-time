<html>
   <head>
      <title>Creating MySQL Temporary Tables</title>
   </head>
   <body>
      <?php
	   session_start();
	  $_SESSION['name']='70';
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
		 $tn=1;
		 mysqli_query($con,"insert into `tet`(uid) values('$tn')");
		 	 mysqli_query($con,"insert into `tet`(uid) values(2)");
		 echo "h";
		 $rs=mysqli_query($con,"select uid from tet");
		  $_SESSION['teamtable']=$rs;
		  $_SESSION['teamtable1']= mysqli_num_rows($rs);
		  $_SESSION['teamtable2']= mysqli_fetch_array($rs);
		 
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