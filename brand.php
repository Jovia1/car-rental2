<?php include 'header.php';  ?>

    <div class="pagetitle">
      <h1>Data Tables</h1>
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
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#odisablebackdrop">
                Add Brand
              </button>
              <div class="modal fade" id="odisablebackdrop" tabindex="-1" data-bs-backdrop="false">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">New Brand</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      
                      <form action="brand" method="post">
                        <div class="mb-3">
                          <label for="brandname" class="form-label" aria-placeholder="Enetr Name">Brand Name</label>
                          <input type="text" class="form-control" id="odisablebackdrop" name="brandname">
                        </div>

                        <div class="mb-3">
                          <label for="driventrain4wd" class="form-label" aria-placeholder="Enter Driven Train 4wd">Driven Train</label>
                          <input type="text" class="form-control" id="odisablebackdrop" name="driventrain4wd">
                        </div>

                        <div class="mb-3">
                          <label for="color" class="form-label" aria-placeholder="Enter Color">Color</label>
                          <input type="text" class="form-control" id="odisablebackdrop" name="color">
                        </div>

                        <div class="mb-3">
                          <label for="make" class="form-label" aria-placeholder="Enter Make">Make</label>
                          <input type="text" class="form-control" id="odisablebackdrop" name="make">
                        </div>

                        <div class="mb-3">
                          <label for="seats" class="form-label" aria-placeholder="Enter Seats">Seats</label>
                          <input type="text" class="form-control" id="odisablebackdrop" name="seats">
                        </div>

                        <div class="mb-3">
                          <label for="fueltype" class="form-label" aria-placeholder="Enter Fuel Type">Fuel Type</label>
                          <input type="text" class="form-control" id="odisablebackdrop" name="fueltype">
                        </div>

                        <div class="mb-3">
                          <label for="cc" class="form-label" aria-placeholder="Enter CC">CC</label>
                          <input type="text" class="form-control" id="odisablebackdrop" name="cc">
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
                    <th scope="col">Brand Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Driven Train</th>
                    <th scope="col">Color</th>
                    <th scope="col">Make</th>
                    <th scope="col">Seats</th>
                    <th scope="col">Fuel Type</th>
                    <th scope="col">CC</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Ford</td>
                    <td>
                      <img src="assets/img/car1.avif" alt="" class="img-fluid" style="max-width: 50px;">
                    </td>
                    <td>4W</td>
                    <td>Black</td>
                    <td>2016</td>
                    <td>4 seater</td>
                    <td>Diseal</td>
                    <td>N/A</td>
                    <td>
                      <a class='btn btn-primary' href='edit?id=" . $rows["id"] . "'>Edit</a> 
                      <a class='btn btn-danger' href='delete?id=" . $rows["id"] . "'>Delete</a>
                  </td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Toyota</td>
                    <td>
                      <img src="assets/img/car1.avif" alt="" class="img-fluid" style="max-width: 50px;">
                    </td>
                    <td>4WD</td>
                    <td>White</td>
                    <td>2018</td>
                    <td>4 seater</td>
                    <td>Diseal</td>
                    <td>N/A</td>
                    <td>
                    <a class='btn btn-primary' href='edit?id=" . $rows["id"] . "'>Edit</a>
                    <a class='btn btn-danger' href='delete?id=" . $rows["id"] . "'>Delete</a>
                    </td>
                  </tr>

                  <tr>
                    <th scope="row">3</th>
                    <td>Hyundai</td>
                    <td>
                      <img src="assets/img/car1.avif" alt="" class="img-fluid" style="max-width: 50px;">
                    </td>
                    <td>2WD</td>
                    <td>Red</td>
                    <td>2019</td>
                    <td>6 seater</td>
                    <td>Diseal</td>
                    <td>N/A</td>
                    <td>
                    <a class='btn btn-primary' href='edit?id=" . $rows["id"] . "'>Edit</a>
                    <a class='btn btn-danger' href='delete?id=" . $rows["id"] . "'>Delete</a>
                    
                  </td>
                  </tr>

                  <tr>
                    <th scope="row">4</th>
                    <td>Maruti</td>
                    <td>
                      <img src="assets/img/car1.avif" alt="" class="img-fluid" style="max-width: 50px;">
                    </td>
                    <td>4W</td>
                    <td>Blue</td>
                    <td>2017</td>
                    <td>4 seater</td>
                    <td>Diseal</td>
                    <td>N/A</td>
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