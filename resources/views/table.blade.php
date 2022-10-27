<head>
    <title>Notebooks</title>
    <!-- CSS only -->
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div class="container">    
    <table id="notebooks-table" class="table table-bordered data-table">
        <thead>
            <tr>
                <th>#</th>
                <th>ID</th>
                <th>Name</th>
                <th>Secondname</th>
                <th>Lastname</th>
                <th>Company</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Birthdate</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach($instance as $key => $notebook)
                @if(is_string($key))
                    @php
                    $key = 0
                    @endphp
                @endif
            <tr>
                <td>{{ ++$key}} </td>
                <td>{{ $notebook->ID }}</td>
                <td>{{ $notebook->Name }}</td>
                <td>{{ $notebook->Secondname }}</td>
                <td>{{ $notebook->Lastname }}</td>
                <td>{{ $notebook->Company }}</td>
                <td>{{ $notebook->Phone }}</td>
                <td>{{ $notebook->Email }}</td>
                <td>{{ $notebook->Birthdate }}</td>
                <td>{{ $notebook->Image }}</td>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/">Go Back</a>
</div>
      <script>
        $(document).ready(function () {
            $('#notebooks-table').DataTable();
            console.log(123);
        });
      </script>
</body>