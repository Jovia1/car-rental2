<?php include 'header.php';  ?>

    <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index">Home</a></li>
          <li class="breadcrumb-item"><a href="categories">Category</a></li>
          <li class="breadcrumb-item active">Add Category</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">


          <div class="card">
            <div class="card-body">
              
              <!-- Disabled Backdrop Modal -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cdisablebackdrop">
                Add Category
              </button>
              <div class="modal fade" id="cdisablebackdrop" tabindex="-1" data-bs-backdrop="false">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Add Category</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        
                        <form action="category" method="post">
                          <div class="mb-3">
                            <label for="categoryname" class="form-label" aria-placeholder="Enetr Name">Category Type</label>
                            
                            <select name="category" id="category" >
                            <ul>
                              <li>
                              <option value=""></option>
                              <option value="Self Driven">Self Driven</option>
                              <option value="7 Seater">7 Seater</option>
                              <option value="Baby Seater">Baby Seater</option>
                              </li>
                            </ul>
                          </select>
                          </div>

                          <div class="mb-3">
                            <label for="categoryprice" class="form-label" aria-placeholder="Enter Price">Price</label>
                            <select name="category" id="category">
                            <ul>
                              <li>
                              <option value="$"></option>
                              <option value="Self Driven">$100</option>
                              <option value="7 Seater">$1200</option>
                              <option value="Baby Seater">$200</option>
                              </li>
                            </select>
                          </div>

                        </form>
                          
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
                    <th scope="col">S/n</th>
                    <th scope="col">Category Type</th>
                    <th scope="col">Price</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Baby Seat</td>
                    <td>$100</td>
                    
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>7 seater</td>
                    <td>$1200</td>
                    
                  </tr>
                  
                  <tr>
                    <th scope="row">3</th>
                    <td>Car Seat</td>
                    <td>$200</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Self driven</td>
                    <td>$300</td>
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