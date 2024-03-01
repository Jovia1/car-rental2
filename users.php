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

        <div class="card">
      
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">S/N</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                 
                  <tr>
                    <th scope="row">1</th>
                    <td>Hellen</td>
                    <td>
                      <img src="assets/img/car1.avif" alt="" class="img-fluid" style="max-width: 50px;">
                    </td>
                    <td>hellen@gmail.com</td>
                    <td>08012345678</td>
                    <td>
                      <a class='btn btn-primary' href='edit?id=" . $rows["id"] . "'>Edit</a>
                      <a class='btn btn-danger' href='delete?id=" . $rows["id"] . "'>Delete</a>
                    </td>
                  </tr>

                  <tr>
                    <th scope="row">2</th>
                    <td>John</td>
                    <td>
                      <img src="assets/img/car1.avif" alt="" class="img-fluid" style="max-width: 50px;">
                    </td>
                    <td>john@gmail.com</td>
                    <td>0896423121</td>
                    <td>
                      <a class='btn btn-primary' href='edit?id=" . $rows["id"] . "'>Edit</a>
                      <a class='btn btn-danger' href='delete?id=" . $rows["id"] . "'>Delete</a>
                    </td>
                  </tr>
                 
                  </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>
<?php include 'footer.php'; ?>