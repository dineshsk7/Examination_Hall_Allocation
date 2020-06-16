 <?php 

 	require('../model/databse.php');
  	require('../model/functions.php');
  	global $db;
  	$query = "SELECT * FROM block where b_id like '%-%' order by b_id";
  	$class = $db->query($query);
  	$total_strength=0;
  	include('../view/header.php');
  	?>
  <div class="container">
  <h2  class="text-center">Hall Details</h2>          
  <table class="table table-hover">
    <thead>
      <tr>
        <th class="text-center"><h4>Class</h4></th>
        <th class="text-center"><h4>Strength</h4></th>
      </tr>
    </thead>
    <tbody>
   	<?php foreach ($class as $product) : ?>
      <tr>
         <td class="text-center"><?php echo $product['b_id']; ?></td>
         <td class="text-center"><?php $button = $product['strength']-getResult($product['b_id']);echo $button;$total_strength+=$product['strength']-getResult($product['b_id']);?></td>
      </tr>
       <?php endforeach; ?>
    </tbody> 
  </table>
</div>
</body>
</html>