<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', sans-serif;
        }

        .register-card {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 1rem;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            padding: 2rem;
            color: white;
            width: 100%;
            max-width: 420px;
        }

        .register-card .form-control {
            background-color: rgba(255, 255, 255, 0.1);
            border: none;
            color: white;
        }

        .register-card .form-control:focus {
            background-color: rgba(255, 255, 255, 0.2);
            box-shadow: none;
            border: none;
            color: white;
        }

        .register-card .btn-primary {
            background-color: #1c8ef9;
            border: none;
        }

        .register-card .btn-primary:hover {
            background-color: #0f7be3;
        }
    </style>
</head>

<body>
    <div class="register-card">
        <h3 class="text-center mb-4"><i class="bi bi-person-plus me-2"></i>Register</h3>
        <form action="/register/submit" method="post">
            @csrf
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Choose a username" name="name"/>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email"/>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Create a password" name="password"/>
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
            <div class="text-center mt-3">
                <a href="/login" class="text-white-50">Already have an account? Login</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>