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
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div><br />
        @endif
          <div class="card-header">
            Home itu beranda <a href="test/create" class="btn btn-success">Add data</a>
          </div>
          <div class="card-body">
          {!! $dataTable->table() !!}
          </div>
          <div class="card-footer small text-muted">   </div>
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
  <!-- <script>
         $(function() {
               $('#table').DataTable({
               processing: true,
               serverSide: true,
               ajax: "{{ url('kategori/getdatatable') }}",
               columns: [
                        { data: 'name', name : "name" },
                        { data: 'keterangan', name : "keterangan" },
                        { data: 'action', name: 'action', orderable: false, searchable: false},
                     ]
            });
         });
    </script> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
      <script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
      <script src="../vendor/datatables/buttons.server-side.js"></script>
      {!! $dataTable->scripts() !!}
</body>

</html>

            