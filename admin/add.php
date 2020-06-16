<?php   
  if(!isset($_POST['add'])){
    header('location:admin.php');
  }

	$dep=$_POST['dep'];
	$b_id=$_POST['b_id'];

	if($dep=="Bsc Computer Science"){
		$code="temp_cs";
	}
  else if($dep=="Bsc IT"){
    $code="temp_it";

  }
  else if($dep="BCA"){
    $code="temp_bca";
  }

	require_once('../model/databse.php');
		require_once('../model/functions.php');
  global $db;
  $query = "SHOW TABLES LIKE '%$code%'";
  $statement = $db->prepare($query);
  $statement->execute();
  //$class = $statement->fetchAll(PDO::FETCH_NUM);
  $total_count=0;
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
                    <th><h4><b>Remaining</b></h4></th>
                    <th><h4><b>Count</b></h4></th>
                    <th><h4><b>Reset</b></h4></th>
                    <th><h4><b>Update</b></h4></th>


                </tr>
                <?php foreach ($statement as $product) : ?>
                <tr>
                    <td><h4><?php $final=explode("_", $product[0]); 
                                  $table_name=implode("_",array_slice($final, 1));
                                  $final=implode("-",array_slice($final, 1));
                                  echo strtoupper($final);
                        ?></h4></td>
                    <td><h4><?php echo getCount($product[0]);$total_count+=getCount($product[0]);
                    ?></h4></td>
                    <td><h6><form action="result.php" method="POST">
                        <input style="color: black; padding: 5px;" type="text" name="add_count"
                               placeholder="Enter Count" />
                        <input type="hidden" name="table_name"
                               value="<?php echo $product[0]; ?>" /><br>
                        <input type="hidden" name="b_id"
                               value="<?php echo $b_id ?>" /><br>
                        <input type="hidden" name="dep"
                               value="<?php echo $dep; ?>" />
                        <button type="submit" class="btn btn-success" name="add">Add</button>
                    </form></h6></td>
                    <td><h4><form action="reset.php" method="POST">
                        <input type="hidden" name="table_name"
                               value="<?php echo $table_name ?>" />
                        <input type="hidden" name="final"
                               value="<?php echo $product[0]; ?>" />
                        <input type="hidden" name="dep"
                               value="<?php echo $dep; ?>" />
                               <input type="hidden" name="b_id"
                               value="<?php echo $b_id; ?>" />
                        <button type="submit" class="btn btn-danger" name="add">Reset</button>
                    </form></h4></td>


                    <td><h4>

                      <form action="update_table.php" method="POST" enctype="multipart/form-data">
                        <p><input  type="file" name="computer_file" /></p>
                        <input type="hidden" name="table_name"
                               value="<?php echo $table_name ?>" />
                        <input type="hidden" name="dep"
                               value="<?php echo $dep; ?>" />
                               <input type="hidden" name="b_id"
                               value="<?php echo $b_id; ?>" />
                        <button type="submit" class="btn btn-danger" name="add">Update</button>
                    </form>

                  </h4></td>

                </tr>
                <?php endforeach; ?>
            </table>

        <div class="jumbotron">
            <h4 class="text-left">Remaining Students:&nbsp;<?php echo $total_count; ?></h4></div></div>
            <script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>


    </body>
    </html>