<!DOCTYPE html>
<html lang="en">
  <head>
    <style type="text/css">
    label{
        display: inline-block;
        width: 200px;
    }
    </style>
   @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.Sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
       @include('admin.Navbar')
        <!-- partial -->
      <div class="container-fluid page-body-wrapper">

        <div class="container" align="center" style="padding-top:100px">

            <h2 style="padding-bottom:50px; align-items:center">Add Doctor</h2>

            <form action="{{url('upload_doctor')}}"  method="" enctype="multipart/form-data">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Password</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputAddress">Address</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address">
                </div>
                <div class="form-row">
                    
                  <div class="form-group col-md-4">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="0788000000">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="specialist">Spaecialist</label>
                    <select id="specialist" class="form-control" name="specialist" style="">
                      <option selected>--select--</option>
                      <option value="Lung">Lung</option>
                        <option value="Pancreatic">Pancreatic</option>
                        <option value="Prostate">Prostate</option>
                        <option value="Breast">Breast</option>
                    </select>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="file">Image</label>
                    <input type="file" class="form-control" id="file" name="file" style="width: 200px">
                  </div>
                
                </div>

                <button type="submit" class="btn btn-sucess">Add</button>
              </form>
        </div>
      </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>