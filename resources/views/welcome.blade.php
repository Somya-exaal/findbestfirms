

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="container">
            <div class="row">
                <table class="table">
<thead>
    <tr>

    <th>Sr No</th>
    <th>User Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Edit</th>
    <th>Delete</th>
    </tr>
        </thead>
<tbody>
  @foreach($data as $row)
<tr>
    <td>{{ $row->user_name }}</td>
    <td>{{ $row->email }}</td>
    <td>{{ $row->phone }}</td>
    <td>{{ $row->user_name }}</td>
    <td>{{ $row->user_name }}</td>
        </tr>
        @endforeach
           


        </tbody>


                </table>
        </div>
        </div>
        
    </body>
</html>
