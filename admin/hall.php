<?php 
  if(!isset($_POST['block_id'])){
    header('location:admin.php');
  }

  require('../model/databse.php');
  require('../model/functions.php');
  global $db;
  $block_id = $_POST['block_id'];
  if($block_id == "AH"){
  $query = "SELECT * FROM block WHERE block='AH'";
  $class = $db->query($query);
 }
  else if($block_id == "I"){
  $query = "SELECT * FROM block WHERE block='I'";
  $class = $db->query($query);
 }
  else if($block_id == "S"){
  $query = "SELECT * FROM block WHERE block='S'";
  $class = $db->query($query);
 }
  else if($block_id == "V"){
  $query = "SELECT * FROM block WHERE block='V'";
  $class = $db->query($query);
 }
  else if($block_id == "R"){
  $query = "SELECT * FROM block WHERE block='R'";
  $class = $db->query($query);
 }
 else{
  header('Location:admin.php');
 }


    $total_strength=0;
        include('../view/header.php');
?>
<style>
  table {
    border: 1px solid black;
    border-collapse: collapse;
}
td, th {
    border: 1px dashed black;
    padding: 2em 2em 2em 5em;
    vertical-align: top;
    text-align: center;
    color: white;
}
    .navbar-static-top {
  margin-bottom:20px;
}

i {
  font-size:16px;
}

.nav > li > a {
  color:#787878;
}
</style>
</head>

<body>
<div class="container-fluid">
<table class="text-center" style="background-color: #2a2a72;
background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 74%); width: 100%;">
                <tr>
                    <th><h4><b>Class</b></h4></th>
                    <th><h4><b>Strength</b></h4></th>
                    <th><h4><b>Add</b></h4></th>
                    <th><h4><b>Delete</b></h4></th>
                </tr>
                <?php foreach ($class as $product) : ?>
                <tr>
                    <td><h4><?php echo $product['b_id']; ?></h4></td>
                    <td><h4><?php $button = $product['strength']-getResult($product['b_id']);echo $button;$total_strength+=$product['strength']-getResult($product['b_id']);?></h4></td>
                    <td><button class="btn btn-success" data-target="#mymodel"  data-toggle="modal">Add</button></td>
                    <td><h4><form action="delete_hall.php" method="POST">
                        <input type="hidden" name="hall_id"
                               value="<?php echo $product['b_id']; ?>">
                        <input type="hidden" name="block_id" value="<?php echo $block_id; ?>">
                        <button type="submit" class="btn btn-danger" name="add">Delete</button>
                    </form></h4></td>

                </tr>
                <?php endforeach; ?>
            </table>
<div class="jumbotron">
            <div class="row">
              <div class="col-sm-6">
            <form action="add_hall.php" method="POST" >
              <label>Add Class</label><br>
              <input type="text" name="hall_id" placeholder="Hall ID">&nbsp;&nbsp;
              <input type="text" name="hall_strength" placeholder="Hall Strength">
              <input type="hidden" name="block_id" value="<?php echo $block_id; ?>">
              <button type="submit" class="btn btn-primary" name="add_hall">ADD</button></form></div>
            <div class="col-sm-6"><h4 class="text-right">Available Seats:<?php echo $total_strength; ?></h4></div></div>
            <div class="modal" id="mymodel"> 
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header" style="background-color: #045de9;
background-image: linear-gradient(315deg, #09c6f9 0%, #045de9 74%);">
                    <h4 style="color: white;" class="text-center">Add Students to <?php echo "$block_id ";?>Block</h4><br>
                    <button type="button" class="close" data-dismiss="modal">&times;</button></div>
                    <div class="modal-body" style="background-color: #63a4ff;
background-image: linear-gradient(315deg, #63a4ff 0%, #83eaf1 74%);">
                      <form action="add.php" method="POST">
                        <div class="form-group">
                          <input type="hidden" name="b_id" value="<?php echo $product['b_id'];?>">
                          <label><i class="fa fa-user-plus"></i>Add From</label>&nbsp;
                          <select name="dep" style="background-color: #b1bfd8;
background-image: linear-gradient(315deg, #b1bfd8 0%, #6782b4 74%);
">
                            <option>&nbsp;</option>
                            <option><b>Bsc Computer Science</b></option>
                            <option>Bsc IT</option>
                            <option>BCA</option>                     
                          </select>
                          &nbsp;&nbsp;<button type="submit" class="btn btn-primary" name="add">Add</button>
                        </div>
                      </form>
                      
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
        </body>
        </html>