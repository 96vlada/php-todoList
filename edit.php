<?php 
    if(!isset($_GET['id'])){
        header("location: index.php");
    }

    include(dirname(__FILE__) . '/templates/scripts/crud/crudClass.php');
    $item_id = $_GET['id'];
    $jova_prepare_query = "SELECT * FROM `todoList` WHERE `todoList`.`id` = $item_id";
    $item_for_edit = $crudClass->jova_select_all($jova_prepare_query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Todo list</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
</head>

<body>

   <div class="container mt-5 pt-3">
       <div class="row justify-content-center">
           <div class="col-10 col-sm-8 col-md-6 col-lg-6 col-xl-6">
               <div class="jumbotron bg-info text-white"><h2>Edit Item</h2></div>
               <form action="/php-todoList/templates/scripts/crud/edit.php" method="post">
                <input type="hidden" id="custId" name="editItemId" value="<?php echo $item_for_edit[0]['id']; ?>">
                    <div class="form-group">
                        <label for="exampleInputItem">Item input</label>
                        <input type="text" class="form-control" id="exampleInputItem" name="editTodoItem" value="<?php echo $item_for_edit[0]['Item']; ?>" aria-describedby="emailHelp" placeholder="Enter item">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
           </div>
       </div>
   </div>


</body>

</html>