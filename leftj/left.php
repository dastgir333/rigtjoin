
<?php

$conn = mysqli_connect("localhost","root","","manage");

if($conn){

	echo "connected";
}


// query for left join two or more tables

$query = "select `employee`.`id`,`employee`.`first_name`,`employee`.`last_name`,`employee`.`email`,`employee`.`phone`,`empmeta`.`address`,`empmeta`.`department` from `employee`right join `empmeta` on `employee`.`id`=`empmeta`.`user_id`";




$result = mysqli_query($conn,$query);

?>
    <!DOCTYPE html>
    <html>
    <head>
    	<title></title>
    </head>
    <body>
    <table border="1">
    	
     <tr>

     	<th>ID</th>
     	<th>FIRST NAME</th>
     	<th>LAST NAME</th>
     	<th>EMAIL</th>
     	<th>ADDRESS</th>
     	<th>DEPARMENT</th>
     	

     </tr>

    

   <?php
  while($row=mysqli_fetch_assoc($result))

       {
        ?>

        <tr>

     	<th><?php echo $row['id'];?></th>
     	<th><?php echo $row['first_name'];?></th>
     	<th><?php echo $row['last_name'];?></th>
     	<th><?php echo $row['email'];?></th>
     	<th><?php echo $row['address'];?></th>
     	<th><?php echo $row['department'];?></th>
     	
     	

     </tr>


       	

    <?php
   
       }
?>

   </table>
    </body>
    </html>