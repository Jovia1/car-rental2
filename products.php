<?php include 'header.php';  ?>

    <div class="pagetitle">
      <h1>Products</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
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
                  Add Product
              </button>
              <div class="modal fade" id="pdisablebackdrop" tabindex="-1" data-bs-backdrop="false">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">New Product</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                     
                      <form action="product" method="post">
                        <div class="mb-3">
                          <label for="productname" class="form-label" aria-placeholder="Enetr Name">Category</label>
                          
                          <select name="category" id="category" class="form-control">
                            <option value="car">Car</option>
                            <option value="motorcycle">Motorcycle</option>
                            <option value="truck">Truck</option>
                          </select>
                          
                          <div class="mb-3">
                            <label for="productimage" class="form-label" aria-placeholder="Enter Image">Image</label>
                            <input type="file" class="form-control" id="pdisablebackdrop" name="productimage">
                          </div>

                          <div class="mb-3">
                            <label for="productprice" class="form-label" aria-placeholder="Enter Price">Price</label>
                            <input type="text" class="form-control" id="pdisablebackdrop" name="productprice">
                          </div>

                          <div class="mb-3">
                            <label for="productdate" class="form-label" aria-placeholder="Enter Date">Date</label>
                            <input type="date" class="form-control" id="pdisablebackdrop" name="productdate">
                          </div>

                          <div class="mb-3">
                            <label for="productavailability" class="form-label" aria-placeholder="Enter Availability">Availability</label>
                            <input type="text" class="form-control" id="pdisablebackdrop" name="productavailability">
                          </div>

                          <div class="mb-3">
                            <label for="productstatus" class="form-label" aria-placeholder="Enter Status">Status</label>
                            <input type="text" class="form-control" id="pdisablebackdrop" name="productstatus">
                          </div>
                        </div>

                        
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
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
                    <th scope="col">Category</th>
                    <th scope="col">Image</th>
                    <th scope="col">Price</th>
                    <th scope="col">Date</th>
                    <th scope="col">Avalability</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                 
                  <tr>
                    <th scope="row">1</th>
                    <td>Car</td>
                    <td>
                      <img src="assets/img/car1.avif" alt="" class="img-fluid" style="max-width: 50px;">
                    </td>
                    <td>1000000</td>
                    <td>2021-10-10</td>
                    <td>Yes</td>
                    <td>
                      <a class='btn btn-primary' href='edit?id=" . $rows["id"] . "'>Edit</a>
                      <a class='btn btn-danger' href='delete?id=" . $rows["id"] . "'>Delete</a>
                    </td>
                  </tr>

                  <tr>
                    <th scope="row">2</th>
                    <td>Motorcycle</td>
                    <td>
                      <img src="assets/img/car1.avif" alt="" class="img-fluid" style="max-width: 50px;">
                    </td>
                    <td>500000</td>
                    <td>2021-10-10</td>
                    <td>Yes</td>
                    <td>
                      <a class='btn btn-primary' href='edit?id=" . $rows["id"] . "'>Edit</a>
                      <a class='btn btn-danger' href='delete?id=" . $rows["id"] . "'>Delete</a>
                    </td>
                  </tr>

                  <tr>
                    <th scope="row">3</th>
                    <td>Truck</td>
                    <td>
                      <img src="assets/img/car1.avif" alt="" class="img-fluid" style="max-width: 50px;">
                    </td>
                    <td>2000000</td>
                    <td>2021-10-10</td>
                    <td>Yes</td>
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