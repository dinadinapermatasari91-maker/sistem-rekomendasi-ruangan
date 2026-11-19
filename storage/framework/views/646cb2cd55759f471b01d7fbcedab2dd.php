<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?> - Rekomendasi Ruangan</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            color: #333;
        }

        header {
            background: #173b67;
            color: white;
            padding: 20px 8%;
        }

        header h2 {
            margin-bottom: 12px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-right: 20px;
        }

        main {
            width: 84%;
            margin: 30px auto;
            min-height: 400px;
        }

        .card {
            background: white;
            padding: 22px;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 2px 8px #ddd;
        }

        h1, h2 {
            margin-bottom: 15px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background: #e8eef5;
        }

        button, .btn {
            background: #173b67;
            color: white;
            padding: 10px 16px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
        }

        footer {
            background: #173b67;
            color: white;
            text-align: center;
            padding: 18px;
        }
    </style>
</head>
<body>

    <header>
        <h2>Sistem Rekomendasi Ruangan Perkuliahan</h2>

        <nav>
            <a href="/">Dashboard</a>
            <a href="/ruangan">Daftar Ruangan</a>
            <a href="/rekomendasi">Rekomendasi</a>
            <a href="/jadwal">Jadwal</a>
            <a href="/tentang">Tentang</a>
        </nav>
    </header>

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <footer>
        <p>Sistem Rekomendasi Ruangan Perkuliahan</p>
    </footer>

</body>
</html><?php /**PATH C:\laragon\www\rekomendasi-ruangan\resources\views/layouts/app.blade.php ENDPATH**/ ?>