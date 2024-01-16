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
                                <div class="card-body">
                                    <h4 class="card-title">All Patient's Appointment</h4>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Doctor's Name</th>
                                                    <th scope="col">Patient's Name</th>
                                                    <th scope="col">AppointmentDate</th>
                                                    <th scope="col">Message</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Cancel</th>
                                                    <th scope="col">Approve</th>
                                                    <th scope="col">Send Mail</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if ($data->count() > 0)
                                                    @foreach ($data as $appointment)
                                                        <tr>
                                                            <th scope="row">{{ $loop->iteration }}</th>
                                                            <td>{{ $appointment->doctor }}</td>
                                                            <td>{{ $appointment->name }}</td>
                                                            <td>{{ $appointment->date }}</td>
                                                            <td>{{ $appointment->message }}</td>
                                                            <td>{{ $appointment->status }}</td>
                                                            <td><a href="{{ url('cancel', $appointment->id) }}"
                                                                    class="badge badge-outline-danger">Cancel</a>
                                                            </td>
                                                            <td><a href="{{ url('approve', $appointment->id) }}"
                                                                    class="badge badge-outline-success">Approve</a></td>
                                                            <td><a href="{{ url('emailview', $appointment->id) }}"
                                                                    class="badge badge-outline-success">Send
                                                                    mail</a></td>
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
