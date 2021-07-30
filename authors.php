<?php
  include('head.php');
  $urlUsers="https://randomuser.me/api/?results=100";
  $responseUsers= file_get_contents($urlUsers);
  $usersData=json_decode($responseUsers);
  ?>
    
 <?php $i = 0;
 foreach ($usersData->results as $Users) {
  if(++$i > 2)
    break;  
    ?> 
    <main role="main" class="container">
          <div class="col blog-main">
            <div class="card-group">
  <div class="card">
    <img src="<?php echo $Users->picture->large; ?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?php echo $Users->name->first." ".$Users->name->last; ?></h5>
    </div>
  </div>
<?php   } ?>
  <div class="card">
    <img src="<?php echo $Users->picture->large; ?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?php echo $Users->name->first." ".$Users->name->last; ?></h5>

    </div>
  </div>
<?php $i = 0;
 foreach ($usersData->results as $Users) {
  if(++$i > 1)
    break;  
    ?> 
  <div class="card">
    <img src="<?php echo $Users->picture->large; ?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?php echo $Users->name->first." ".$Users->name->last; ?></h5>
    </div>
  </div>
</div>
<?php   } ?>
  