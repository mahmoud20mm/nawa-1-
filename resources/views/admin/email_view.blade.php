
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
                <form action="{{ url('sendemail',$data->id) }}" method="POST">
                    @csrf
                    <div class="form-floating mb-3">
                        <label   style="color: black;">Geeting</label>
                        <input style="background-color: #fff" required type="text" name="geeting" class="form-control" placeholder="write the name">
                      </div>
                      <div class="form-floating mb-3">
                        <label  style="color: black;">Body</label>
                        <input style="background-color: #fff"  required type="text" name="body" class="form-control">
                      </div>
                      <div class="form-floating mb-3">
                        <label  style="color: black;">Action Text</label>
                        <input style="background-color: #fff"  required type="text" name="actiontext" class="form-control">
                      </div>
                      <div class="form-floating mb-3">
                        <label  style="color: black;">Action Url</label>
                        <input style="background-color: #fff"  required type="text" name="actionurl" class="form-control">
                      </div>
                      <div class="form-floating mb-3">
                        <label  style="color: black;">End Part</label>
                        <input style="background-color: #fff"  required type="text" name="endpart" class="form-control">
                      </div>
                      <div>
                      <button type="submit" class="btn btn-primary">submit</button>
                    </div>

        </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
      </body>
</html>
