<div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

      <form class="main-form" action="{{url('appointment')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" class="form-control" placeholder="Full name" name="name">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" class="form-control" placeholder="Email address.." name="email">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" class="form-control" name="date">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select id="departement" class="custom-select" name="doctor">
              <option>--select doctor---</option>
              @foreach($doctor as $doctors)
              <option value="{{$doctors->name}}">{{$doctors->name}}---specicalisty---{{$doctors->specialist}}</option>
              @endforeach
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" class="form-control" placeholder="Number.." name="phone">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea  id="message" class="form-control" rows="6" placeholder="Enter message.." name="message"></textarea>
          </div>
          <button type="submit" class="btn btn-sucess mt-3 ">Submit Request</button>
        </div>

      </form>
    </div>
  </div> <!-- .page-section -->