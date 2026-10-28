<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        :root {
            --bg-color: #0f172a;
            --card-bg: #1e293b;
            --text-main: #f8fafc;
            --text-muted: #94a3b8;
            --border-color: #334155;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-main);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .dashboard-card {
            background-color: var(--card-bg);
            border: 1px solid var(--border-color);
            padding: 40px;
            border-radius: 16px;
            text-align: center;
            max-width: 450px;
            width: 100%;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.3);
        }

        .dashboard-card h2 {
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .dashboard-card p {
            color: var(--text-muted);
            font-size: 14px;
        }
    </style>
</head>
<body>

    <div class="dashboard-card">
        <?php
        echo "<h2>Selamat datang, " . $_SESSION['user']['email'] . " 👋</h2>";
        ?>
        <p>Anda berhasil masuk ke dalam sistem workspace.</p>
    </div>

</body>
</html>