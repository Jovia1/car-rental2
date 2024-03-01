<?php 
include 'root/process.php';
include 'header.php'; 


?>
<div class="pagetitle">
      <h1>Drivers</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Drivers</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              
              <!-- Disabled Backdrop Modal -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pdisablebackdrop">
                  Add Driver
              </button>
              <div class="modal fade" id="pdisablebackdrop" tabindex="-1" data-bs-backdrop="false">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">New Driver</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
<!-- `driver_id`, `fullname`, `image`, `driver_email`, `driver_contact`, `registration_no` -->
                      <form action="" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                          <label for="fullname" class="form-label">Full Name</label>
                          <input type="text" class="form-control" id="fullname" name="fullname" required>
                        </div>
                        <div class="mb-3">
                          <label for="image" class="form-label">Image</label>
                          <input type="file" class="form-control" id="image" name="image" required>
                        </div>
                        <div class="mb-3">
                          <label for="email" class="form-label">Email</label>
                          <input type="email" class="form-control" id="email" name="driver_email" required>
                        </div>
                        <div class="mb-3">
                          <label for="contact" class="form-label">Contact</label>
                          <input type="text" class="form-control" id="contact" name="driver_contact" required>
                        </div>

                        <div. class="mb-3">
                          <label for="regno" class="form-label">Reg No</label>
                          <input type="text" class="form-control" id="regno" name="registration_no" required>
                        </div>
                        <button type="submit" name='driver_btn' class="btn btn-primary">Add Driver</button>
                      </form>

                    </div>

                  </div>
                </div>
              </div><!-- End Disabled Backdrop Modal-->
            </div>
        <div class="card">
      
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">S/N</th>
                    <th scope="col">full Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Reg No</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                 
                  <tr>
                    <th scope="row">1</th>
                    <td>Henry Bolt</td>
                    <td>
                      <img src="assets/img/car1.avif" alt="" class="img-fluid" style="max-width: 50px;">
                    </td>
                    <td>henrybolt@gmail.com</td>
                    <td>08012345678</td>
                    <td>1234</td>
                    <td>
                      <a class='btn btn-primary' href='edit?id=" . $rows["id"] . "'>Edit</a>
                      <a class='btn btn-danger' href='delete?id=" . $rows["id"] . "'>Delete</a>
                    </td>
                  </tr>

                  <tr>
                    <th scope="row">2</th>
                    <td>John Cow</td>
                    <td>
                      <img src="assets/img/car1.avif" alt="" class="img-fluid" style="max-width: 50px;">
                    </td>
                    <td>johncow@gmail.com</td>
                    <td>0896423121</td>
                    <td>1235</td>
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