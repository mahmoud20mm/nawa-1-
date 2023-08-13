
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
        <div class="container page-body-wrapper">
    <table class="table" style="background-color: aliceblue">
        <thead>
            <tr>
                <th>Customer Name</th>
                <th>Email</th>
                <th>phone</th>
                <th>Docter name</th>
                <th>Data</th>
                <th>message</th>
                <th>Status</th>
                <th>Approved</th>
                <th>Canceled</th>
                <th>Sind Mail</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $appiont)
            <tr>
                <td>{{ $appiont->name }}</td>
                <td>{{ $appiont->email }}</td>
                <td>{{ $appiont->phone }}</td>
                <td>{{ $appiont->doctor }}</td>
                <td>{{ $appiont->data }}</td>
                <td>{{ $appiont->message }}</td>
                <td>{{ $appiont->status }}</td>
                <td><a href="{{ url('approved',$appiont->id) }}" class="btn btn-success">Approved</a></td>
                <td><a href="{{ url('canceled',$appiont->id) }}" class="btn btn-danger">Canceled</a></td>
                <td><a href="{{ url('emailview',$appiont->id) }}" class="btn btn-primary">Sind Mail</a></td>
        </tr>
            @endforeach
        </tbody>
    </table>
</div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
      </body>
</html>
