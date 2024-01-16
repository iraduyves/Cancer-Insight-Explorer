



<!DOCTYPE html>
<html lang="en">

<head>
    <style type="text/css">
        /* label{
        display: inline-block;
        width: 200px;
    } */
    </style>
    @include('admin.css')
</head>

<body>
    <div class="container-scroller">
        @include('admin.Sidebar')
        <div class="container-fluid page-body-wrapper">
            @include('admin.Navbar')
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row ">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                @if (session()->has('message'))
                                    <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">X</button>
                                        {{ session()->get('message') }}
                                    </div>
                                @endif

                                @if (session()->has('error'))
                                    <div class="alert alert-danger">
                                        <button type="button" class="close" data-dismiss="alert">X</button>
                                        {{ session()->get('error') }}
                                    </div>
                                @endif
                                <div class="card-body">
                                    <h4 class="card-title">All Patient's Appointment</h4>
                                    <form action="{{url('upload_doctor')}}"  method="POST" enctype="multipart/form-data">
                                        @csrf
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
                                        <div class="form-row">
                                          
                                            <div class="form-group col-md-6">
                                                <label for="inputname4">Full Name</label>
                                                <input type="text" class="form-control" id="inputname4" placeholder="Full Name" name="name">
                                              </div>
                                          <div class="form-group col-md-6">
                                            <label for="inputAddress">Address</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address">
                                          </div>
                                        </div>
                                        <div class="form-row">
                                            
                                          <div class="form-group col-md-4">
                                            <label for="phone">Phone</label>
                                            <input type="text" class="form-control" id="phone" name="phone" placeholder="0788000000">
                                          </div>
                                          <div class="form-group col-md-4">
                                            <label for="inputspecialist4">Spaecialist</label>
                                            <select id="inputspecialist4" class="form-control" name="specialist" style="">
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
                        
                                        <input type="submit" class="btn btn-success"/>
                                      </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.script')
</body>

</html>
