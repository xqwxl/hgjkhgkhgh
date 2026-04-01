<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZRO — Вход</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main class="page">
    <section class="auth">
        <img src="img/logo.png" alt="ZRO" class="logo">

        <h1 class="title">Добро пожаловать!</h1>

        <form action="auth/login.php" method="post" class="auth-form">
            <div class="form-card">
                <input
                        type="text"
                        name="user_name"
                        class="input"
                        placeholder="Введите ваше имя"
                        required
                >

                <input
                        type="password"
                        name="password"
                        class="input"
                        placeholder="Введите код приглашения"
                        required
                >

                <label class="checkbox-row">
                    <input type="checkbox" required>
                    <span class="checkmark"></span>
                    <span class="checkbox-text">
                        поставив галочку, вы соглашаетесь с нашими правилами пользования
                    </span>
                </label>
            </div>

            <button type="submit" class="submit-btn">Далее</button>
        </form>
    </section>

    <footer class="footer">
        <a href="#" class="footer-link">Privacy Policy</a>
    </footer>
</main>
</body>
</html>