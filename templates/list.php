<?php
  include(dirname(__FILE__) . "/scripts/crud/select.php");

?>

  <ul class="list-group">
    <li class="list-group-item bg-primary text-white">Todo Items</li>
<?php
  if(!empty($jova_select_all_results)){
    foreach($jova_select_all_results as $jova_select_all_result){
?>  
    <li class="list-group-item d-flex flex-column flex-sm-column flex-md-column flex-lg-row flex-xl-row justify-content-between align-items-center">
      <h6><b><?php echo $jova_select_all_result['Item']; ?></b></h6>
      <div>
        <a class="btn btn-info" href="edit.php?id=<?php echo $jova_select_all_result['id']; ?>">Edit Item</a>
        <a class="btn btn-danger" href="/php-todoList/templates/scripts/crud/delete.php?id=<?php echo $jova_select_all_result['id']; ?>">Delete Item</a>
      </div> 
    </li>
<?php
  }
?>

<?php
  }else{
    ?>
      <li class="list-group-item">There's not result!</li>
    <?php
  }
?>

  </ul>