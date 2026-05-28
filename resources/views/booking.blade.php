<!DOCTYPE html>
<html>
<head>

    <title>Booking Game Corner</title>

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

            min-height:100vh;

            color:white;

        }

        .booking-card{

            background:rgba(255,255,255,0.05);

            backdrop-filter:blur(12px);

            border:1px solid rgba(255,255,255,0.1);

            border-radius:30px;

            padding:40px;

            margin-top:50px;

            margin-bottom:70px;

            box-shadow:
            0 0 30px rgba(0,0,0,0.3);

        }

        .title{

            color:#facc15;

            font-weight:700;

            margin-bottom:30px;

        }

        .form-label{

            font-weight:500;

            color:white;

        }

        .form-control,
        .form-select{

            background:rgba(255,255,255,0.08);

            border:none;

            color:white;

            padding:14px;

            border-radius:15px;

        }

        .form-control:focus,
        .form-select:focus{

            background:rgba(255,255,255,0.1);

            color:white;

            box-shadow:
            0 0 0 3px rgba(250,204,21,0.3);

        }

        .form-control::placeholder{

            color:#bbb;

        }

        option{
            color:black;
        }

        .btn-yellow{

            background:#facc15;

            color:black;

            font-weight:600;

            padding:14px;

            border-radius:15px;

            border:none;

            transition:0.3s;

        }

        .btn-yellow:hover{

            background:#eab308;

            transform:translateY(-2px);

        }

        .btn-home{

            background:#222;

            color:white;

            border-radius:12px;

            padding:12px 20px;

            text-decoration:none;

            transition:0.3s;

        }

        .btn-home:hover{

            background:#333;

            color:white;

        }

        .footer{

            margin-top:20px;

            text-align:center;

            color:#aaa;

            padding-bottom:30px;

        }

    </style>

</head>

<body>

<div class="container">

    <div class="booking-card">

        <div class="d-flex justify-content-between align-items-center mb-4">

            <h1 class="title">

                🎮 Booking Game Corner

            </h1>

            <a href="/" class="btn-home">

                <i class="fa-solid fa-house"></i>

                Home

            </a>

        </div>

        @if(session('success'))

            <div class="alert alert-success">

                {{ session('success') }}

            </div>

        @endif

        @if(session('error'))

            <div class="alert alert-danger">

                {{ session('error') }}

            </div>

        @endif

        <form action="/booking/store" method="POST">

            @csrf

            <div class="mb-3">

                <label class="form-label">

                    Nama Mahasiswa

                </label>

                <input
                    type="text"
                    name="nama_mahasiswa"
                    class="form-control"
                    placeholder="Masukkan nama lengkap"
                    required
                >

            </div>

            <div class="mb-3">

                <label class="form-label">

                    NIM

                </label>

                <input
                    type="text"
                    name="nim"
                    class="form-control"
                    placeholder="Masukkan NIM"
                    required
                >

            </div>

            <div class="mb-3">

                <label class="form-label">

                    Nomor HP

                </label>

                <input
                    type="text"
                    name="no_hp"
                    class="form-control"
                    placeholder="Masukkan nomor HP"
                    required
                >

            </div>

            <div class="mb-3">

                <label class="form-label">

                    Pilih Console

                </label>

                <select
                    name="console_id"
                    class="form-select"
                    required
                >

                    <option value="">
                        -- Pilih Console --
                    </option>

                    <option value="1">
                        🎮 PlayStation 5
                    </option>

                    <option value="3">
                        🕹️ Xbox
                    </option>

                    <option value="5">
                        🖥️ Gaming PC Asus ROG
                    </option>

                </select>

            </div>

            <div class="mb-3">

                <label class="form-label">

                    Tanggal Booking

                </label>

                <input
                    type="date"
                    name="tanggal"
                    class="form-control"
                    required
                >

            </div>

            <div class="mb-4">

                <label class="form-label">

                    Jam Booking

                </label>

                <select
                    name="jam_mulai"
                    class="form-select"
                    required
                >

                    <option value="">
                        -- Pilih Jam --
                    </option>

                    <option value="09:00">
                        09:00 - 10:00
                    </option>

                    <option value="10:00">
                        10:00 - 11:00
                    </option>

                    <option value="11:00">
                        11:00 - 12:00
                    </option>

                    <option value="12:00">
                        12:00 - 13:00
                    </option>

                    <option value="13:00">
                        13:00 - 14:00
                    </option>

                    <option value="14:00">
                        14:00 - 15:00
                    </option>

                    <option value="15:00">
                        15:00 - 16:00
                    </option>

                    <option value="16:00">
                        16:00 - 17:00
                    </option>

                    <option value="17:00">
                        17:00 - 18:00
                    </option>

                </select>

            </div>

            <button type="submit" class="btn btn-yellow w-100">

                <i class="fa-solid fa-gamepad"></i>

                Booking Sekarang

            </button>

        </form>

    </div>

    <div class="footer">

        © 2026 FILKOM Game Corner 

    </div>

</div>

</body>
</html>