<?php 

 	require('../model/databse.php');
  	require('../model/functions.php');
  	global $db;
  	$query = "SELECT * FROM result order by s_id";
  	$class = $db->query($query);
  	include('../view/header.php');
  	?>
  	<div class="container">
  <h2  class="text-center">Result Details</h2>          
  <table class="table table-hover">
    <thead>
      <tr>
        <th class="text-center"><h4>Student ID</h4></th>
        <th class="text-center"><h4>Name</h4></th>
        <th class="text-center"><h4>Hall ID</h4></th>
      </tr>
    </thead>
    <tbody>
   	<?php foreach ($class as $product) : ?>
      <tr>
         <td class="text-center"><?php echo $product['s_id']; ?></td>
         <td class="text-center"><?php echo $product['s_name']; ?></td>
         <td class="text-center"><?php echo $product['class']; ?></td>
      </tr>
       <?php endforeach; ?>
    </tbody> 
  </table>
</div>
</body>
</html>