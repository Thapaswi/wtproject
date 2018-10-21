<?php
 session_start();
 $_SESSION['finalPrice']=0;
 require_once "test2.php";
 if(isset($_POST["Select"]))
 {
 if(isset($_SESSION["shopping_cart"]))
 {
 $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
 if(!in_array($_GET["id"], $item_array_id))
 {
 $count = count($_SESSION["shopping_cart"]);
 $item_array = array( 'item_id' => $_GET["id"], 'item_name' => $_POST["hidden_name"], 'item_price' => $_POST["hidden_price"], 'item_quantity' => $_POST["quantity"] );
 $_SESSION["shopping_cart"][$count] = $item_array;
 }
 else
 {
 echo '<script>alert("Item Already Added")</script>';
 echo '<script>window.location="jyo.php"</script>';
 }
 }
 else
 {
 $item_array = array( 'item_id' => $_GET["id"], 'item_name' => $_POST["hidden_name"], 'item_price' => $_POST["hidden_price"], 'item_quantity' => $_POST["quantity"] );
 $_SESSION["shopping_cart"][0] = $item_array;
 }
 }
 if(isset($_GET["action"]))
 {
 if($_GET["action"] == "delete")
 {
 foreach($_SESSION["shopping_cart"] as $keys => $values)
 {
 if($values["item_id"] == $_GET["id"])
 {
 unset($_SESSION["shopping_cart"][$keys]);
 echo '<script>alert("Item Removed")</script>';
 echo '<script>window.location="jyo.php"</script>';
 }
 }
 }
 } ?> 
 <!DOCTYPE html> 
 <html>
 <head>
 <title>Room Selection</title>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js">
 </script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
 </script>
 </head>
 <body> 
 <br />
 <div class="container" style="width:700px;float:left;">
 <h3 align="center">Hotel Room Types</h3>
 <br /> 
 <?php 
 $query = "SELECT * FROM myItems ORDER By id ASC";
 $result = mysqli_query($conn, $query);
 if(mysqli_num_rows($result) > 0)
 {
 while($row = mysqli_fetch_array($result))
 {
 ?>
 <div class="col-md-4"> 
 <form method="post" action="jyo.php?action=add&id=<?php echo $row["id"]; ?>">
 <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
 <img src="<?php echo $row["image"]; ?>" class="img-responsive" style="width:200px;height:100px"/>
 <br />
 <h4 class="text-info">
 <?php echo $row["name"]; ?></h4>
 <h4 class="text-danger"><?php echo $row["price"]; ?></h4>
 <input type="number" min="0" max="10" name="quantity" class="form-control" placeholder="No.of Rooms">
 <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
 <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
 <input type="submit" name="Select" style="margin-top:5px;" class="btn btn-success" value="SELECT" />
 </div>
 </form>
 </div>
 <?php
 }
 }
 ?>
 
 <br />
 </div>
 <div float="right" >
 <h3>Order Details</h3>
 <div class="table-responsive" float="right" style="background-color:white">
 <table class="table table-bordered">
 <tr>
 <th width="40%">Room type</th>
 <th width="10%">No.of Rooms</th>
 <th width="20%">Price</th> 
 <th width="15%">Total</th>
 <th width="5%">Action</th>
 </tr>
 <?php
 if(!empty($_SESSION["shopping_cart"])) 
 {
 $total = 0;
 foreach($_SESSION["shopping_cart"] as $keys => $values)
 {
 ?>
 <tr>
 <td><?php echo $values["item_name"]; ?></td> 
 <td><?php echo $values["item_quantity"]; ?></td>
 <td> <?php echo $values["item_price"]; ?></td>
 <td> <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);
 ?>
 </td>
 <td><a href="jyo.php?action=delete&id=<?php echo $values["item_id"]; ?>">
 <span class="text-danger">Remove</span></a></td>
 </tr> <?php
 $total = $total + ($values["item_quantity"] * $values["item_price"]);
 
 }
 ?>
 <tr>
 <td colspan="3" align="right">Total</td>
 <td align="right"><?php echo number_format($total, 2); ?></td>
 <td></td>
 </tr>
 <?php
 }
 ?>
 </table>

 </div>

 <div align="center"><input type="submit" value="SUBMIT" onclick="<?php $_SESSION['finalPrice']+=$total ?>" >
 <input type="submit" style="float:left" value="BACK" onclick='location.href="hotel.html" '>
  <input type="submit" style="float:right" value="PAY" onclick='location.href="tq.php" '></div>
 </div>
 <br />
 </body>
 </html>
 