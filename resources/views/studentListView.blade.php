<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar bg-body-secondary ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{asset('images/logo2.png')}}" alt="Logo" width="30" height="24"
                    class="d-inline-block align-text-top">
                Node pad
            </a>
            <a href="/studentHome" class="btn btn-outline-primary">Add new Student</a>
        </div>
    </nav>

    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show justify-center text-center"
        style="width: 400px; margin: 0 auto">
        {{ session('success') }}
        <!-- Close Button -->
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif


    <div class="container mt-5">
        <h2 class="text-center mb-4">Your all Students here!</h2>
        @if ($studentData->isEmpty())
        <div class="alert alert-warning text-center" role="alert">
            🙁 You have no students yet. Click on "Add new student" to get started!
        </div>

        @else

        <!-- Display All Node Pads -->
        <table class="table table-striped">
            <thead>
                <tr align="center">
                    <th>ID</th>
                    <th>Student Name</th>
                    <th>Session</th>
                    <th>Semester</th>
                    <th>Shift </th>
                    <th>Group</th>
                    <th>Roll</th>
                    <th>Image</th>
                    <td>Created At</td>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody align="center">


                @foreach($studentData as $student)
                <td>{{$student->id}}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->session }}</td>
                <td>{{ $student->semester }}</td>
                <td>{{ $student->shift }}</td>
                <td>{{$student->group}}</td>
                <td>{{$student->roll}}</td>
                <td><img src="{{ asset('images/' . $student->image) }}" alt="{{ $student->name }}"
                        class="w-full h-48 object-cover rounded transition-transform duration-300 hover:scale-105"
                        style="height: 50px; width: 50px;">
                </td>
                <td>{{$student->created_at}}</td>
                <td><a href="{{ route('editInformation', $student->id) }}" class="btn btn-sm btn-outline-primary">
                        ✏️ Edit
                    </a></td>



                <td>
                    <form action="{{route('delete',$student->id)}}" method="POST"
                        onsubmit="return confirm('Are you sure you want to delete this note')" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn  btn-outline-danger btn-sm">Delete</button>
                    </form>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>