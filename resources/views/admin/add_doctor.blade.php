
<!DOCTYPE html>
<html lang="en">
  <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
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
                <form action="{{ url('upload_doctor') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-floating mb-3">
                        <label   style="color: black;">Doctor Name</label>
                        <input style="background-color: #fff" required type="text" name="name" class="form-control" placeholder="write the name">
                      </div>
                      <div class="form-floating mb-3">
                        <label  style="color: black;">phone</label>
                        <input style="background-color: #fff"  required type="number" name="number" class="form-control" placeholder="write the phone">
                      </div>
                      <select name="speciality"  required class="form-select form-control mb-4" aria-label="Default select example">
                        <label style="color: black;" for="">Speciality</label>
                        <option  style="color: #fff;" value="">-----Speciality-----</option>
                        <option style="color: #fff;" value="sink">sink</option>
                        <option style="color: #fff;" value="heart">heart</option>
                        <option style="color: #fff;" value="eye">eye</option>
                        <option style="color: #fff;" value="nose">nose</option>
                      </select>
                      <div class="form-floating mb-3">
                        <label  style="color: black;">Room No</label>
                        <input style="background-color: #fff"  required type="number" name="room" class="form-control" placeholder="write the room number">
                      </div>
                      <div class="form-floating mb-3">
                        <input style="background-color: #fff"  required type="file" name="file" class="form-control" >
                      </div>
                      <button type="submit" class="btn btn-primary">submit</button>


        </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
      </body>
</html>
