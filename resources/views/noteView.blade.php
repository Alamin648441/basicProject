<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All note Pads</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{asset('images/logo2.png')}}" alt="Logo" width="30" height="24"
                    class="d-inline-block align-text-top">
                note pad
            </a>
            <a href="/" class="btn btn-secondary">Add new note</a>
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
        <h2 class="text-center mb-4">Your all note here!</h2>
        @if ($notepad->isEmpty())
        <div class="alert alert-warning text-center" role="alert">
            🙁 You have no notes yet. Click on "Add new note" to get started!
        </div>

        @else

        <!-- Display All note Pads -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>


                @foreach($notepad as $notepads)
                <td>{{$notepads->id}}</td>
                <td>{{ $notepads->title }}</td>
                <td>{{ $notepads->description }}</td>
                <td>{{ $notepads->created_at }}</td>
                <td>{{ $notepads->updated_at }}</td>
                <td align="center"><a href="{{route('edit',$notepads->id)}}" class="btn btn-outline-primary"
                        style="text-decoration: none; text-underline-position: inherit;display:inline">Edit</a></td>

                <td>
                    <form action="{{route('deleteNote',$notepads->id)}}" method="POST"
                        onsubmit="return confirm('Are you sure you want to delete this note')" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
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