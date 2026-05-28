<!DOCTYPE html>
<html>
<head>

    <title>FILKOM Game Corner</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            font-family:'Poppins',sans-serif;
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body {
            min-height:100vh;
            background:
                radial-gradient(circle at top left, rgba(125,58,255,0.22), transparent 25%),
                radial-gradient(circle at top right, rgba(16,185,129,0.18), transparent 18%),
                linear-gradient(180deg, #04050a 0%, #111827 100%);
            color:#e5e7eb;
        }

        .navbar {
            background:rgba(15,23,42,0.82);
            backdrop-filter:blur(18px);
            border-bottom:1px solid rgba(148,163,184,0.08);
            padding:1rem 0;
            position:sticky;
            top:0;
            z-index:9;
        }

        .navbar-brand {
            color:#8b5cf6 !important;
            font-size:1.5rem;
            font-weight:800;
            letter-spacing:0.04em;
        }

        .nav-link {
            color:#cbd5e1 !important;
            font-weight:600;
            transition:color .2s ease;
        }

        .nav-link:hover {
            color:#facc15 !important;
        }

        .hero {
            display:grid;
            grid-template-columns:1.2fr .8fr;
            gap:2rem;
            align-items:start;
            padding:4rem 0;
        }

        .hero-card {
            background:rgba(255,255,255,0.05);
            border:1px solid rgba(255,255,255,0.10);
            backdrop-filter:blur(18px);
            border-radius:32px;
            padding:2.5rem;
            box-shadow:0 30px 80px rgba(0,0,0,0.22);
            overflow:hidden;
            position:relative;
        }

        .hero-card::before {
            content:'';
            position:absolute;
            inset:0;
            background:
                radial-gradient(circle at top right, rgba(250,204,21,0.12), transparent 22%),
                radial-gradient(circle at bottom left, rgba(59,130,246,0.08), transparent 20%);
            pointer-events:none;
        }

        .hero-card > * {
            position:relative;
            z-index:1;
        }

        .section-label {
            display:inline-flex;
            margin-bottom:1.25rem;
            color:#facc15;
            font-weight:700;
            letter-spacing:0.12em;
            text-transform:uppercase;
            font-size:.8rem;
        }

        .hero h1 {
            font-size:clamp(2.8rem, 4vw, 4.8rem);
            line-height:1.02;
            color:#f8fafc;
            margin-bottom:1rem;
        }

        .hero p {
            font-size:1.05rem;
            line-height:1.85;
            color:#cbd5e1;
            margin-bottom:1.75rem;
        }

        .hero-actions {
            display:flex;
            flex-wrap:wrap;
            gap:1rem;
            margin-bottom:2rem;
        }

        .btn-book,
        .btn-admin {
            display:inline-flex;
            align-items:center;
            gap:.75rem;
            padding:.95rem 1.8rem;
            border-radius:999px;
            font-weight:700;
            transition:transform .25s ease, box-shadow .25s ease, background .25s ease;
            text-decoration:none;
        }

        .btn-book {
            background: linear-gradient(135deg, #facc15 0%, #f59e0b 100%);
            color:#0f172a;
        }

        .btn-admin {
            background: rgba(255,255,255,0.08);
            color:#f8fafc;
            border:1px solid rgba(255,255,255,0.14);
        }

        .btn-book:hover {
            transform:translateY(-2px);
            box-shadow:0 18px 40px rgba(250,204,21,0.22);
        }

        .btn-admin:hover {
            transform:translateY(-2px);
            background:rgba(255,255,255,0.12);
        }

        .feature-grid {
            display:grid;
            grid-template-columns:repeat(2,minmax(0,1fr));
            gap:1rem;
        }

        .feature-item {
            background:rgba(15,23,42,0.72);
            border:1px solid rgba(255,255,255,0.08);
            border-radius:22px;
            padding:1.2rem 1.3rem;
            color:#e2e8f0;
        }

        .feature-item strong {
            display:block;
            margin-bottom:.5rem;
            color:#facc15;
            font-weight:700;
        }

        .console-summary .section-title {
            margin-bottom:1.5rem;
            color:#facc15;
        }

        .console-card {
            display:flex;
            gap:1rem;
            align-items:center;
            background:rgba(255,255,255,0.04);
            border:1px solid rgba(255,255,255,0.08);
            border-radius:22px;
            padding:1rem 1.25rem;
            margin-bottom:1rem;
        }

        .console-card:last-child {
            margin-bottom:0;
        }

        .console-icon {
            width:3.2rem;
            height:3.2rem;
            border-radius:16px;
            display:grid;
            place-items:center;
            background:rgba(250,204,21,0.16);
            color:#facc15;
            font-size:1.4rem;
        }

        .console-card h4 {
            margin-bottom:.3rem;
            font-size:1.05rem;
            color:#f8fafc;
        }

        .console-card p {
            margin:0;
            color:#cbd5e1;
            font-size:.95rem;
        }

        .card-modern {
            background:rgba(255,255,255,0.05);
            border:1px solid rgba(255,255,255,0.10);
            backdrop-filter:blur(18px);
            border-radius:28px;
            padding:2rem;
            margin-top:2.5rem;
            box-shadow:0 20px 55px rgba(0,0,0,0.18);
        }

        .section-title {
            color:#facc15;
            font-weight:700;
            margin-bottom:1.75rem;
        }

        .table {
            border-radius:20px;
            overflow:hidden;
            background:rgba(15,23,42,0.72);
        }

        .table th {
            background:rgba(250,204,21,0.18);
            color:#f8fafc;
            border:none;
            font-weight:700;
        }

        .table td {
            border-color:rgba(255,255,255,0.08);
        }

        .bg-success {
            background:#14532d !important;
            color:#d1fae5 !important;
        }

        .bg-danger {
            background:#7f1d1d !important;
            color:#fee2e2 !important;
        }

        .rules {
            display:grid;
            gap:.85rem;
        }

        .rules li {
            background:rgba(255,255,255,0.04);
            border:1px solid rgba(255,255,255,0.08);
            border-radius:18px;
            padding:1rem 1.2rem;
            list-style:none;
            color:#e2e8f0;
        }

        .wa-section {
            text-align:center;
            margin-top:2.5rem;
        }

        .wa-btn {
            display:inline-flex;
            align-items:center;
            gap:.75rem;
            padding:1rem 2rem;
            background:#25D366;
            color:white;
            border-radius:18px;
            text-decoration:none;
            font-size:1rem;
            font-weight:700;
            transition:transform .25s ease, box-shadow .25s ease;
        }

        .wa-btn:hover {
            transform:translateY(-2px);
            box-shadow:0 18px 40px rgba(37,211,102,0.24);
        }

        .footer {
            margin-top:3rem;
            text-align:center;
            color:#94a3b8;
            padding-bottom:3rem;
        }

        @media (max-width: 992px) {
            .hero {
                grid-template-columns:1fr;
            }
            .feature-grid {
                grid-template-columns:1fr;
            }
        }

        @media (max-width: 576px) {
            .navbar {
                padding:.85rem 0;
            }
            .hero {
                padding:2.5rem 0;
            }
            .hero h1 {
                font-size:2.6rem;
            }
            .hero-actions {
                flex-direction:column;
                align-items:flex-start;
            }
        }
    </style>

</head>

<body>

<nav class="navbar navbar-expand-lg">

    <div class="container d-flex justify-content-between align-items-center">

        <a class="navbar-brand" href="/">

            🎮 FILKOM Game Corner

        </a>

        <div class="d-flex gap-3 align-items-center">
            <a class="nav-link" href="/admin/login">Admin</a>
        </div>

    </div>

</nav>

<div class="container">

    <div class="hero">
        <div class="hero-card">
            <span class="section-label">Selamat datang</span>
            <h1>
                Rasakan pengalaman Game Corner FILKOM yang lebih modern
            </h1>
            <p>
                Booking console lebih cepat, cek ketersediaan jam secara real-time, dan nikmati suasana
                permainan yang nyaman sambil menunggu jadwal perkuliahan.
            </p>
            <div class="hero-actions">
                <a href="/booking" class="btn-book">
                    Booking Sekarang
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
                <a href="/admin/login" class="btn-admin">
                    <i class="fa-solid fa-user-shield"></i>
                    Halaman Admin
                </a>
            </div>
            <div class="feature-grid">
                <div class="feature-item">
                    <strong>Jam Operasional</strong>
                    09.00 - 18.00 WIB
                </div>
                <div class="feature-item">
                    <strong>Durasi</strong>
                    Maksimum 60 menit per sesi
                </div>
                <div class="feature-item">
                    <strong>Console</strong>
                    PS5 • Xbox • Gaming PC
                </div>
                <div class="feature-item">
                    <strong>Dukungan</strong>
                    Chat Admin lewat WhatsApp
                </div>
            </div>
        </div>
        <div class="hero-card console-summary">
            <h3 class="section-title">
                Console Tersedia
            </h3>
            <div class="console-card">
                <div class="console-icon">🎮</div>
                <div>
                    <h4>PlayStation 5</h4>
                    <p>Grafis premium dan kontrol akurat untuk game favoritmu.</p>
                </div>
            </div>
            <div class="console-card">
                <div class="console-icon">🕹️</div>
                <div>
                    <h4>Xbox Series X</h4>
                    <p>Performa tinggi dan pengalaman multiplayer yang lancar.</p>
                </div>
            </div>
            <div class="console-card">
                <div class="console-icon">🖥️</div>
                <div>
                    <h4>Gaming PC</h4>
                    <p>Frame rate halus dengan spesifikasi kelas atas.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card-modern">

        <h2 class="section-title">

            📅 Jadwal Hari Ini ({{ $today }})

        </h2>

        <div class="table-responsive">

            <table class="table table-dark table-bordered text-center align-middle">

                <thead>

                    <tr>

                        <th>Console</th>

                        @foreach($jamList as $jam)

                            <th>

                                {{ $jam }}
                                -
                                {{ date('H:i', strtotime($jam . ' +1 hour')) }}

                            </th>

                        @endforeach

                    </tr>

                </thead>

                <tbody>

                    @php

                        $consoleList = [

                            [
                                'id' => 1,
                                'nama' => '🎮 PS5'
                            ],

                            [
                                'id' => 3,
                                'nama' => '🕹️ Xbox'
                            ],

                            [
                                'id' => 5,
                                'nama' => '🖥️ Gaming PC'
                            ]

                        ];

                    @endphp

                    @foreach($consoleList as $console)

                    <tr>

                        <td class="text-warning fw-bold">

                            {{ $console['nama'] }}

                        </td>

                        @foreach($jamList as $jam)

                            @php

                                $isBooked = false;

                                $namaBooking = '';

                                foreach($bookings as $booking){

                                    $jamBooking = substr(
                                        $booking->jam_mulai,
                                        0,
                                        5
                                    );

                                    if(

                                        $booking->console_id == $console['id']
                                        &&
                                        $jamBooking == $jam

                                    ){

                                        $isBooked = true;

                                        $namaBooking = $booking->nama_mahasiswa;

                                    }

                                }

                            @endphp

                            @if($isBooked)

                                <td class="bg-danger">

                                    ❌ Dibooking

                                    <br>

                                    <small>

                                        {{ $namaBooking }}

                                    </small>

                                </td>

                            @else

                                <td class="bg-success">

                                    ✅ Tersedia

                                </td>

                            @endif

                        @endforeach

                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

    <div class="card-modern">

        <h2 class="section-title">

            📋 Peraturan

        </h2>

        <ul class="rules">

            <li>Durasi penggunaan maksimal 60 menit</li>

            <li>Wajib mengisi form booking</li>

            <li>Wajib meninggalkan KTM FILKOM UB</li>

            <li>Controller diambil dan dikembalikan ke operator</li>

            <li>Laporkan kerusakan console/controller</li>

            <li>Menjaga kebersihan area Game Corner</li>

            <li>Jam operasional 09.00 - 18.00 WIB</li>

        </ul>

    </div>

    <div class="wa-section">

        <a
            href="https://wa.me/6282143857754"
            target="_blank"
            class="wa-btn"
        >

            <i class="fa-brands fa-whatsapp"></i>

            Chat Admin

        </a>

    </div>

    <div class="footer">

        © 2026 FILKOM Game Corner

    </div>

</div>

</body>
</html>