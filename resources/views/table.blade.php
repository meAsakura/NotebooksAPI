<head>
    <title>List of notebooks</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div class="container">    
    <table class="table table-bordered data-table">
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
      
</body>