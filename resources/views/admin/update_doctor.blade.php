
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      {{-- <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div> --}}
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
     @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

            <div class="container" align="center" style="padding-top:100px;">
                @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
                @endif
                <form action="{{ url('editdoctor',$data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-floating mb-3">
                        <label   style="color: black;">Doctor Name</label>
                        <input style="background-color: #fff" value="{{ $data->name }}" required type="text" name="name" class="form-control" placeholder="write the name">
                      </div>
                      <div class="form-floating mb-3">
                        <label  style="color: black;">phone</label>
                        <input style="background-color: #fff" value="{{ $data->phone }}" required type="number" name="number" class="form-control" placeholder="write the phone">
                      </div>
                      <select name="speciality" value="{{ $data->speciality }}"  required class="form-select form-control mb-4" aria-label="Default select example">
                        <label style="color: black;" for="">Speciality</label>
                        <option  style="color: #fff;" value="">-----Speciality-----</option>
                        <option style="color: #fff;" value="sink">sink</option>
                        <option style="color: #fff;" value="heart">heart</option>
                        <option style="color: #fff;" value="eye">eye</option>
                        <option style="color: #fff;" value="nose">nose</option>
                      </select>
                      <div class="form-floating mb-3">
                        <label  style="color: black;">Room No</label>
                        <input style="background-color: #fff" value="{{ $data->room }}"  required type="number" name="room" class="form-control" placeholder="write the room number">
                      </div>
                      <div class="form-floating mb-3">
                        <input style="background-color: #fff" value="{{ $data->image }}"  required type="file" name="file" class="form-control" >
                      </div>
                      <div>
                        <label for="Old Image"></label>
                        <img src="doctorimage/{{ $data->image }}" alt="">
                      </div>
                      <button type="submit" class="btn btn-primary">submit</button>


        </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
      </body>
</html>
