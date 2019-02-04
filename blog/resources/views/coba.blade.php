    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script  data-src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-responsive">
        <thead>
            <tr>
                <th>name</th>
                <th>keterangan</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($testInput as $row)
            <tr>
                <td>{{$row['name']}}</td>
                <td>{{$row['keterangan']}}</td>
                <td><a href="{{action('TestinputController@edit', $row['id'])}}" class="btn btn-warning">Edit</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>