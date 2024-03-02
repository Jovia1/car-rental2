<?php 
include 'root/process.php';
include 'header.php'; 


?>

    <div class="pagetitle">
      <h1>Users Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Users</li>
        </ol>
      </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              
              <!-- Disabled Backdrop Modal -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#udisablebackdrop">
                  Add User
              </button>
              <div class="modal fade" id="udisablebackdrop" tabindex="-1" data-bs-backdrop="false">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">New User</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                     
                      <!--`user_id`, `fname`, `email`, `contact`, `password`, `image`, `date_registered`, `role`  -->
                      <form action="" method="POST" action='' enctype="multipart/form-data">
                        <div class="mb-3">
                          <label for="fullname" class="form-label">Full Name</label>
                          <input type="text" class="form-control" id="fullname" name="fname" required>
                        </div>
                        <div class="mb-3">
                          <label for="image" class="form-label">Image</label>
                          <input type="file" class="form-control" id="image" name="image" required>
                        </div>
                        <div class="mb-3">
                          <label for="email" class="form-label">Email</label>
                          <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                          <label for="contact" class="form-label">Contact</label>
                          <input type="text" class="form-control" id="contact" name="contact" required>
                        </div>
                        <button type="submit" name='user_btn' class="btn btn-primary">Add User</button>
                      </form>
                        
                    </div>
                    
                  </div>
                </div>
              </div>
              <!-- End Disabled Backdrop Modal-->
            </div>

            <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <!-- `user_id`, `fname`, `email`, `contact`, `password`, `image`, `date_registered`, `role` -->
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                          $sql = "SELECT * FROM users";
                          $result = $conn->query($sql);
                          if ($result->num_rows > 0) {  
                            while ($row = $result->fetch(PDO::FETCH_OBJ)) {
                                ?>
                                <tr>
                                    <td><?=$row->user_id;?></td>
                                    <td><?php echo $row['fname'] ?></td>
                                    <td><?php echo $row['email'] ?></td>
                                    <td><?php echo $row['contact'] ?></td>
                                    <td>
                                    <a class="btn btn-primary" href="edit.php?id=<?php echo $row['id']; ?>" role="button">edit</a>
                                    <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>" role="button">delete</a>
                                    </td>
                                </tr>
                                <?php
                            }
                        }
                        ?>
                    </tbody>
                    </table>
                </div>
      </div>
    </section>
<?php include 'footer.php'; ?>