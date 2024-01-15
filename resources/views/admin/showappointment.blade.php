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
      <!-- partial:partials/_sidebar.html -->
      @include('admin.Sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
       @include('admin.Navbar')
        <!-- partial -->
      <div class="container-fluid page-body-wrapper">
      <div style="margin-top: 80px" >
        @if(session()->has('message'))

        <div class="alert alert-success">
            <button  type="button" class="close" data-dismiss="alert">X</button>
            {{session()->get('message')}}
        </div>
        @endif   
    
        <h1 style="font-size:20;font-weight:600; margin-bottom:10px">My Appointment</h1>
        <table class="table table-hover" >
            <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Doctor</th>
                  <th scope="col">Name</th>
                  <th scope="col">Date</th>
                  <th scope="col">Message</th>
                  <th scope="col">Status</th>
                  <th scope="col">Cancel</th>
                  <th scope="col">Approve</th>
                </tr>
              </thead>
              <tbody>
                  @if ($data->count() > 0)
                  @foreach($data as $appointment)
                      <tr>
                          <th scope="row">{{ $loop->iteration }}</th>
                          <td>{{ $appointment->doctor }}</td>
                          <td>{{ $appointment->name }}</td>
                          <td>{{ $appointment->date }}</td>
                          <td>{{ $appointment->message }}</td>
                          <td>{{ $appointment->status }}</td>
                          <td><a href="{{url('cancel',$appointment->id)}}" class="bt btn-danger" >Cancel</a></td>
                          <td><a href="{{url('approve',$appointment->id)}}" class="bt btn-success" >Approve</a></td>
                      </tr>
                  @endforeach
              @else
                  <tr>
                      <td colspan="6">No appointments found for the user.</td>
                  </tr>
              @endif
              
              </tbody>
        </table>
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
