
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Dashboard</title>
  @include('backend.includes.style')
</head>
<body id="page-top">
@include('backend.includes.nav')
  <div id="wrapper">
  @include('backend.includes.menu')
    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>
        <!-- Area Chart Example-->
        <div class="card mb-3">
          <div class="card-header">
            Home itu beranda
          </div>
          <div class="card-body">
          <form method="post" action="{{ url('backend-admin/kategori') }}" enctype="multipart/form-data">
          {{csrf_field()}}
            <div class="row">
              <div class="col-md-4"></div>
              <div class="form-group col-md-4">
                <label for="Name">Name:</label>
                <input type="text" class="form-control" name="name">
              </div>
            </div>
            <div class="row">
              <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                  <label for="Email">keteranaan:</label>
                  <input type="text" class="form-control" name="keterangan">
                </div>
              </div>
              <div class="row">
                <div class="col-md-4"></div>
                  <div class="form-group col-md-4">
                    <label for="Email">filename:</label>
                    <input type="file" class="form-control" name="filename">
                    <p class="text-danger">{{ $errors->first('filename') }}</p>
                  </div>
              </div>

            <div class="row">
              <div class="col-md-4"></div>
              <div class="form-group col-md-4" style="margin-top:60px">
                <button type="submit" class="btn btn-success">Submit</button>
              </div>
            </div>
          </form>
          </div>
          <div class="card-footer small text-muted">   

          </div>
        </div>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  @include('backend.includes.scripts')
</body>

</html>
