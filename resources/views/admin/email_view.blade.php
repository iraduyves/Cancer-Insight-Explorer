<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
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
        <!-- partial:partials/_sidebar.html -->
        @include('admin.Sidebar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            @include('admin.Navbar')
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
                <div style="margin-top: 80px">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">X</button>
                            {{ session()->get('message') }}
                        </div>
                    @endif

                    <h1 style="font-size:20;font-weight:600; margin-bottom:10px">My Appointment</h1>

                    <form action="{{ url('sendmail',$data->id) }}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Greetings</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Grettings"
                                    name="grettings">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="phone">body</label>
                                <textarea type="text" class="form-control" id="phone" name="body" placeholder="Your Message"></textarea>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Action Text</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="Action Text"
                                    name="actiontext">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputname4">Action Url</label>
                                <input type="text" class="form-control" id="inputname4" placeholder="Action Url"
                                    name="acionurl">
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputAddress">End Part</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="End Part"
                                    name="endpart">
                            </div>

                        </div>




                        <input type="submit" class="btn btn-success" />
                    </form>
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
