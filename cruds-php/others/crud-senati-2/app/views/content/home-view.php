  
  <?php
  use app\controllers\taskController;
  use app\controllers\userController;
  ?>
  <center>
    <h2>TABLA REGISTRAR TAREA</h2>
    <br>
  </center>
  <div class="row">
    <div class="col-md-4">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>
      <!-- ADD TASK FORM -->
      <div class="card card-body">
        <form action="./save_task.php" method="POST">
          <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="Task Title" autofocus>
          </div>
          <div class="form-group">
            <textarea name="description" rows="2" class="form-control" placeholder="Task Description"></textarea>
          </div>
          <input type="submit" name="save_task" class="btn btn-success btn-block" value="Save Task">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Created At</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
             $instanica = new taskController();
             echo $instanica->getTaskRegister();
          ?>
        </tbody>
      </table>
    </div>
  </div>
  <br><br>
  <center>
  <h2>TABLA REGISTRAR ALUMNOS</h2>
  <br>
  </center>
  <div class="row">
    <div class="col-md-4">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <!-- ADD TASK FORM -->
      <div class="card card-body">
        <form action="./save_task.php" method="POST">
          <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="registrar ussurio" autofocus>
          </div>
          <div class="form-group">
            <input type="password" name="description"  class="form-control" placeholder="password "></input>
          </div>
          <input type="submit" name="registrar" class="btn btn-success btn-block" value="Registrar">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>id</th>
            <th>usuario</th>
            <th>password</th>
            <th>cargo</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

          <?php
            $instanica = new userController();
            echo $instanica->getUserRegister();
          ?>
        </tbody>
      </table>
    </div>
  </div>