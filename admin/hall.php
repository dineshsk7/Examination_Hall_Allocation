<?php 
    require_once('../model/databse.php');
        $query = 'SELECT * FROM block';
    $class = $db->query($query);


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>dineshsk7|blog</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<table>
                <tr>
                    <th>Class</th>
                    <th>strength</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                </tr>
                <?php foreach ($class as $product) : ?>
                <tr>
                    <td><?php echo $product['b_id']; ?></td>
                    <td><?php echo $product['strength']; ?></td>
                    <td><form action="." method="post"
                              id="add_product_form">
                        <input type="hidden" name="b_id"
                               value="<?php echo $product['b_id']; ?>" />
                        <input type="submit" value="add" />
                    </form></td>
                    <td><form action="." method="post"
                              id="delete_product_form">
                        <input type="hidden" name="b_id"
                               value="<?php echo $product['b_id']; ?>" />
                        <input type="submit" value="Delete" />
                    </form></td>

                </tr>
                <?php endforeach; ?>
            </table>
        </body>
        </html>