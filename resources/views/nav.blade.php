<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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

</body>
</html>