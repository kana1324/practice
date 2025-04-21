<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <div class="header__logo">
                <h2>FashionablyLate</h2>
            </div>
        </div>
        <div class="header__button">
            <button id="register">register</button>
        </div>
    </header>

    <main>
        <div class="login-form__content">
            <div class="login-form__heading">
                <h2>Login</h2>
            </div>
            <form class="form">
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">メールアドレス</span>
                    </div>
                    <div class="form__group-box">
                        <div class="fprm__input--text">
                            <input type="email" name="email" placeholder="test@example.com" />
                        </div>
                        <div class="form__error">
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label-item">パスワード</span>
                    </div>
                    <div class="form__group-box">
                        <div class="form__input--text">
                            <input type="password" name="password" placeholder="coachtech1106" />
                        </div>
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-login" type="login">ログイン</button>
                </div>
            </form>
        </div>
    </main>
    
</body>
</html>