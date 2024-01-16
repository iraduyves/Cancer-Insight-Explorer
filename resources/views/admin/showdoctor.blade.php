<!DOCTYPE html>
<html lang="en">

<head>
    <style type="text/css">
        label {
            display: inline-block;
            width: 200px;
        }
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
                                <div class="card-body">
                                    <h4 class="card-title">Our Doctors</h4>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>   
                                                    <th> #</th>
                                                    <th> image </th>
                                                    <th> Doctor's Name </th>
                                                    <th> Doctor's Email </th>
                                                    <th> Doctor's Phone </th>
                                                    <th> Doctor's Address </th>
                                                    <th> Doctor's Speciality </th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <img src="admin/assets/images/faces/face1.jpg" alt="image" />
                                                    
                                                    </td>
                                                    <td>
                                                        <span class="pl-2"></span>
                                                    </td>
                                                    <td>  </td>
                                                    <td>  </td>
                                                    <td>  </td>
                                                    <td>  </td>
                                                  
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    @include('admin.script')
    <!-- End custom js for this page -->
</body>

</html>
