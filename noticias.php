<?php
  include('head.php');
  ?>
  <main role="main" class="container">
          <div class="col blog-main">
            <h3 class="pb-3 mb-4 font-italic border-bottom">
              All notices
            </h3>
      <?php       
      foreach ($newsData->articles as $News) {
 
    ?>
    <div class="col">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
              <div class="card-body d-flex flex-column align-items-start">
                <h3 class="mb-0">
                  <a class="text-dark"><?php echo $News->title ?></a>
                </h3>
                <div class="mb-1 text-muted"><?php $fecha_formato = new DateTime($News->publishedAt); echo $fecha_formato->format('d-m-Y');?></div>
                <a class="card-text mb-auto" data-toggle="modal" data-target="#myModal"><?php echo "by ".$News->author ?></a>
                <p class="card-text mb-auto"><?php echo $News->content ?></p>
                <a type="button" class="btn btn-outline-success" href="<?php echo $News->url ?>">Continue reading</a></div>

              <img class="rounded float-right flex-auto d-none d-md-block" src="<?php echo $News->urlToImage ?>" data-src="holder.js/200x250?theme=thumb" alt="">

            </div>

    <?php } ?>
    <div class="pagination">
  <a href="">&laquo;</a>
  <a href="index.php">1</a>
  <a class="active" href="noticias.php">2</a>
  <a href="#">3</a>
 
</div>  
      </main>

<style>
.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
}

.pagination a.active {
  background-color: dodgerblue;
  color: white;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
</style>
<!-- Modal -->
<?php foreach ($usersData->results as $Users) {
    ?>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><?php echo $Users->name->first." ".$Users->name->last; ?></h4>
      </div>
      <div class="modal-body">
  <img src="<?php echo $Users->picture->large; ?>" class="card-img-top" alt="...">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
<?php   } ?>
  </div>
</div>
      <footer class="blog-footer">
      </footer>