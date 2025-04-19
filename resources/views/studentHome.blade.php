<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Student Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to right, #4facfe, #00f2fe);
            min-height: 100vh;
        }

        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #16dcdc;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            z-index: 1030;
        }


        .form-card {
            background: #ffffff;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #ffffff;
            font-weight: bold;
        }

        .btn-primary {
            background-color: #4facfe;
            border: none;
        }

        .btn-primary:hover {
            background-color: #00c6ff;
        }

        .error-text {
            color: #ff3b3b;
            font-size: 0.9rem;
        }
    </style>
</head>

<body>

    <nav class="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo2.png') }}" alt="Logo" width="30" height="24"
                    class="d-inline-block align-text-top">
                My Basic Project
            </a>
            <a href="studentView" class="btn btn-outline-primary">View Students</a>
        </div>
    </nav>

    <div class="container my-5">
        <h2 class="text-center mb-5">🎓 Add Student Information</h2>

        <div class="form-card mx-auto" style="max-width: 700px;">
            <form action="{{route('studentForm')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row g-3">
                    <!-- Name -->
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                                value="{{ old('name') }}">
                            <label for="name">Name</label>
                            <div class="error-text">@error('name') {{ $message }} @enderror</div>
                        </div>
                    </div>

                    <!-- Session -->
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="session" name="session" placeholder="Session"
                                value="{{ old('session') }}">
                            <label for="session">Session</label>
                            <div class="error-text">@error('session') {{ $message }} @enderror</div>
                        </div>
                    </div>

                    <!-- Semester -->
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="semester" name="semester" placeholder="Semester"
                                value="{{ old('semester') }}">
                            <label for="semester">Semester</label>
                            <div class="error-text">@error('semester') {{ $message }} @enderror</div>
                        </div>
                    </div>

                    <!-- Shift -->
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="shift" name="shift" placeholder="Shift"
                                value="{{ old('shift') }}">
                            <label for="shift">Shift</label>
                            <div class="error-text">@error('shift') {{ $message }} @enderror</div>
                        </div>
                    </div>

                    <!-- Group -->
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="group" name="group" placeholder="Group"
                                value="{{ old('group') }}">
                            <label for="group">Group</label>
                            <div class="error-text">@error('group') {{ $message }} @enderror</div>
                        </div>
                    </div>

                    <!-- Roll -->
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="roll" name="roll" placeholder="Roll"
                                value="{{ old('roll') }}">
                            <label for="roll">Roll</label>
                            <div class="error-text">@error('roll') {{ $message }} @enderror</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="file" class="form-control" id="image" name="image" value="{{ old('image') }}">
                            <label for="image">Upload your image</label>
                            <div class="error-text">@error('image') {{ $message }} @enderror</div>
                        </div>
                    </div>

                    <div></div>
                    <div class="col-md-6">

                        <button type="button" onclick="history.back()"
                            class="btn btn-outline-primary w-100 mt-2">Back</button>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-outline-primary w-100 mt-2">➕ Add Student</button>

                    </div>

                </div>

                <!-- Submit Button -->


            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>