<?php
  use app\controllers\taskController;
    $url = isset($_GET['views']) && !empty($_GET['views']) ? explode("/", $_GET['views']) : ['home'];
?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
             
        <?php
            $instanica = new taskController();
            echo $instanica->getTaskRegister('one', 'task', $url[1]);
        ?>

      </div>
    </div>
  </div>
</div>