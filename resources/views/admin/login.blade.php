<!DOCTYPE html>
<html>
<head>

    <title>Admin Login</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>

        *{
            font-family:'Poppins',sans-serif;
        }

        body{

            background:
            linear-gradient(
                135deg,
                #0f0f0f,
                #1a1a1a
            );

            height:100vh;

            display:flex;

            justify-content:center;

            align-items:center;

        }

        .login-card{

            width:420px;

            background:rgba(255,255,255,0.05);

            backdrop-filter:blur(15px);

            border:1px solid rgba(255,255,255,0.1);

            border-radius:30px;

            padding:40px;

            box-shadow:
            0 0 30px rgba(0,0,0,0.3);

        }

        .title{

            color:#facc15;

            font-weight:700;

            text-align:center;

            margin-bottom:30px;

        }

        .form-label{

            color:white;

            font-weight:500;

            margin-bottom:10px;

        }

        .form-control{

            background:rgba(255,255,255,0.08);

            border:none;

            color:white;

            padding:14px;

            border-radius:15px;

        }

        .form-control::placeholder{

            color:#bbb;

        }

        .form-control:focus{

            background:rgba(255,255,255,0.1);

            color:white;

            box-shadow:
            0 0 0 3px rgba(250,204,21,0.3);

        }

        .btn-login{

            background:#facc15;

            border:none;

            color:black;

            font-weight:600;

            padding:14px;

            border-radius:15px;

            transition:0.3s;

        }

        .btn-login:hover{

            background:#eab308;

            transform:translateY(-2px);

        }

    </style>

</head>

<body>

<div class="login-card">

    <h1 class="title">

        🎮 Admin Login

    </h1>

    @if(session('error'))

        <div class="alert alert-danger">

            {{ session('error') }}

        </div>

    @endif

    <form action="/admin/login" method="POST">

        @csrf

        <div class="mb-3">

            <label class="form-label">

                Username

            </label>

            <input
                type="text"
                name="username"
                class="form-control"
                placeholder="Masukkan username"
                required
            >

        </div>

        <div class="mb-4">

            <label class="form-label">

                Password

            </label>

            <input
                type="password"
                name="password"
                class="form-control"
                placeholder="Masukkan password"
                required
            >

        </div>

        <button type="submit" class="btn btn-login w-100">

            <i class="fa-solid fa-right-to-bracket"></i>

            Login

        </button>

    </form>

</div>

</body>
</html>