<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        .table-container {
            border: 1px solid #0b0b0b;
            padding: 20px;
            border-radius: 5px;
            background-color: #f8f9fa;
        }
        .table th, .table td {
            vertical-align: middle;
        }
        
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="table-container">
            <h1 style="color: red" class="mb-4">Students List</h1>
            <table style="color: green" class="table table-bordered">
                <thead class="thead-light">
                    <tr style="color: #0b0b0b">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Percentage</th>
                        <th>Age</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->address }}</td>
                            <td>{{ $student->percentage }}</td>
                            <td>{{ $student->age }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
