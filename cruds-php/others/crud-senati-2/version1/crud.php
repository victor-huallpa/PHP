<?php include("db.php"); 
  
?>

<main class="container p-4">
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
          $query = "SELECT * FROM task";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['created_at']; ?></td>
            <td>
              <a href="./edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="./delete_task.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
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
          include('db2.php');
          
          $query = "SELECT * FROM users WHERE cargo='alumno'" ;
          $result_tasks = mysqli_query($conec, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['usuario']; ?></td>
            <td><?php echo $row['clave']; ?></td>
            <td><?php echo $row['cargo']; ?></td>
            <td>
              <a href="./edit2.php?id=<?php echo $row['id']?>" class="btn btn-secondary" >
                <i class="fas fa-marker"></i>
              </a>
              <a href="./delete_task2.php?id=<?php echo $row['id']?>" class="btn btn-danger" >
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>


