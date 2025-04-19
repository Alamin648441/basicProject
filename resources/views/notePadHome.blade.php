<!DOCTYPE html>
<html>

<head>
    <title>Student Form</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{asset('images/logo2.png')}}" alt="Logo" width="30" height="24"
                    class="d-inline-block align-text-top">
                Note pad
            </a>
            <a href="noteView" class="btn btn-secondary">view note</a>
        </div>
    </nav>
    <div class="container mt-5" style="background-color: azure">
        <h2 class="text-center mb-4">Add Title and Description</h2>

        <!-- Box/container with input fields -->
        <div class="card p-4 shadow-lg" style="max-width: 500px; margin: 0 auto;background-color: rgb(7, 151, 151)">
            <form action="{{route('store')}}" method="POST">
                @csrf
                <!-- Title Input -->
                <div class="form-floating m-3">
                    <input type="text" class="form-control" placeholder="Leave a title here" name="title"
                        value="{{old('title')}}"></input>
                    <p style="color: rgb(223, 14, 14)">@error('title'){{$message}}@enderror</p>
                    <label for="title">title</label>
                </div>

                <!-- Description Input -->
                {{-- <div class="form-floating m-3">
                    <input value="{{old('description')}}" class="form-control" placeholder="Leave a description here"
                        style="width: 30" name="description"></input>
                    <p style="color: rgb(223, 14, 14)">@error('description'){{$message}}@enderror</p>
                    <label for="description">Description</label>
                </div> --}}

                <div class="form-floating m-3">
                    <textarea class="form-control" placeholder="Leave a description here" id="description"
                        name="description" style="height: 100px">{{old('description')}}</textarea>
                    <label for="description">Description</label>
                    <p style="color: rgb(223, 14, 14)">@error('description'){{$message}}@enderror</p>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary m-3">Add Note</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>