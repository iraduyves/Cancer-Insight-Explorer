<!DOCTYPE html>
<html lang="en">

<head>

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
                                                    <th> Update </th>
                                                    <th> Delete </th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if ($data->count() > 0)
                                                    @foreach ($data as $doctor)
                                                        <tr>
                                                            <th scope="row">{{ $loop->iteration }}</th>
                                                            <td>
                                                                <img src="doctorimage/{{ $doctor->image }}"
                                                                    alt="image" />
                                                            </td>
                                                            <td>
                                                                <span class="pl-2">{{ $doctor->name }}</span>
                                                            </td>

                                                            <td>{{ $doctor->email }} </td>
                                                            <td>{{ $doctor->phone }} </td>
                                                            <td>{{ $doctor->address }} </td>
                                                            <td>{{ $doctor->specialist }} </td>
                                                            <td>
                                                                <a href="{{ url('updatedoctor', $doctor->id) }}"  class="badge badge-outline-success">Update</a>
                                                            </td>
                                                            <td>
                                                                <a href="{{ url('deletedoctor', $doctor->id) }}" class="badge badge-outline-danger">Delete</a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @else
                                                    <tr>
                                                        <td colspan="6">No Data found for the Doctors.</td>
                                                    </tr>
                                                @endif


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
