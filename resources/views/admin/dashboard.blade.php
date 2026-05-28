<!DOCTYPE html>
<html>
<head>

    <title>Dashboard Admin</title>

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

            color:white;

        }

        .navbar{

            background:rgba(0,0,0,0.7);

            backdrop-filter:blur(10px);

            border-bottom:1px solid rgba(255,255,255,0.1);

        }

        .navbar-brand{

            color:#facc15 !important;

            font-size:28px;

            font-weight:700;

        }

        .dashboard-card{

            background:rgba(255,255,255,0.05);

            backdrop-filter:blur(12px);

            border:1px solid rgba(255,255,255,0.1);

            border-radius:30px;

            padding:30px;

            margin-top:40px;

        }

        .title{

            color:#facc15;

            font-weight:700;

            margin-bottom:25px;

        }

        .table{

            border-radius:20px;

            overflow:hidden;

        }

        .table th{

            background:#facc15;

            color:black;

            border:none;

        }

        .table td{

            border-color:rgba(255,255,255,0.1);

        }

        .btn-success,
        .btn-danger,
        .btn-secondary{

            border:none;

            border-radius:12px;

            padding:8px 14px;

        }

        .badge{

            padding:8px 14px;

            border-radius:10px;

        }

    </style>

</head>

<body>

<nav class="navbar navbar-expand-lg">

    <div class="container">

        <a class="navbar-brand">

            🎮 Admin Dashboard

        </a>

        <a href="/admin/logout" class="btn btn-danger">

            Logout

        </a>

    </div>

</nav>

<div class="container">

    <div class="dashboard-card">

        <h1 class="title">

            📋 Data Booking

        </h1>

        @if(session('success'))

            <div class="alert alert-success">

                {{ session('success') }}

            </div>

        @endif

        <div class="table-responsive">

            <table class="table table-dark table-bordered text-center align-middle">

                <thead>

                    <tr>

                        <th>Nama</th>
                        <th>NIM</th>
                        <th>No HP</th>
                        <th>Console</th>
                        <th>Tanggal</th>
                        <th>Jam</th>
                        <th>Status</th>
                        <th>Aksi</th>

                    </tr>

                </thead>

                <tbody>

                    @foreach($bookings as $booking)

                    <tr>

                        <td>{{ $booking->nama_mahasiswa }}</td>

                        <td>{{ $booking->nim }}</td>

                        <td>{{ $booking->no_hp }}</td>

                        <td>

                            @if($booking->console_id == 1)

                                🎮 PS5

                            @elseif($booking->console_id == 3)

                                🕹️ Xbox

                            @else

                                🖥️ Gaming PC

                            @endif

                        </td>

                        <td>{{ $booking->tanggal }}</td>

                        <td>{{ substr($booking->jam_mulai,0,5) }}</td>

                        <td>

                            @if($booking->status == 'pending')

                                <span class="badge bg-warning text-dark">

                                    Pending

                                </span>

                            @elseif($booking->status == 'approved')

                                <span class="badge bg-success">

                                    Approved

                                </span>

                            @else

                                <span class="badge bg-danger">

                                    Rejected

                                </span>

                            @endif

                        </td>

                        <td>

                            @if($booking->status == 'pending')

                                <a
                                    href="/admin/approve/{{ $booking->id }}"
                                    class="btn btn-success btn-sm mb-1"
                                >

                                    Approve

                                </a>

                                <a
                                    href="/admin/reject/{{ $booking->id }}"
                                    class="btn btn-danger btn-sm"
                                >

                                    Reject

                                </a>

                            @else

                                <a
                                    href="/admin/delete/{{ $booking->id }}"
                                    class="btn btn-secondary btn-sm"
                                >

                                    Hapus

                                </a>

                            @endif

                        </td>

                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</div>

</body>
</html>