<?php
  use app\controllers\userController;
    $url = isset($_GET['views']) && !empty($_GET['views']) ? explode("/", $_GET['views']) : ['home'];
?>
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <?php
            $instanica = new userController();
            echo $instanica->getUserRegister('one', 'users', $url[1]);
        ?>
      </div>
    </div>
  </div>
</div>