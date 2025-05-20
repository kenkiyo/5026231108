<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Publish Frontend</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --sand: #fff8e7;
            --sky: #ccefff;
            --ocean: #99ddff;
            --wave: #66cfff;
            --text: #22577a;
            --hover: #bbf0ff;
        }

        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: var(--sky);
            color: var(--text);
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 40px 20px;
        }

        h1 {
            font-size: 2em;
            margin-bottom: 30px;
            color: var(--text);
        }

        .card-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            width: 100%;
            max-width: 800px;
        }

        .card {
            background: var(--sand);
            border-radius: 16px;
            padding: 20px;
            box-shadow: 0 8px 16px rgba(0, 128, 255, 0.1);
            text-align: center;
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            background: var(--hover);
            box-shadow: 0 12px 24px rgba(0, 128, 255, 0.2);
        }

        .card a {
            text-decoration: none;
            color: var(--text);
            font-weight: 600;
            font-size: 1.1em;
        }

        .card a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>🏝️ Daftar Halaman Tugas 🐚</h1>

<p style="
    font-size: 1em;
    margin-top: -20px;
    margin-bottom: 30px;
    color: var(--text);
    font-weight: 500;
">
    Muhammad Raihan Hassan &nbsp;||&nbsp; 5026231108
</p>

    <div class="card-container">
        <div class="card"><a href="{{ url('/p1') }}">🌊 Pertemuan 1</a></div>
        <div class="card"><a href="{{ url('/p4') }}">🌞 Pertemuan 4</a></div>
        <div class="card"><a href="{{ url('/ltree') }}">🏖️ Linktree</a></div>
        <div class="card"><a href="{{ url('/p7part1') }}">🐬 Pertemuan 7 Part 1</a></div>
        <div class="card"><a href="{{ url('/p7part2') }}">🪸 Pertemuan 7 Part 2</a></div>
        <div class="card"><a href="{{ url('/ets') }}">📝 ETS</a></div>
    </div>
</body>
</html>
