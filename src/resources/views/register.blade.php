<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
</head>
<body>
    <header claa="header">
        <div class="header__inner">
            <div class="header__logo">
                <h2>FashionablyLate</h2>
                <button class="login-button">login</button>
            </div>
        </div>
    </header>

    <main>
        <div class="register-form__content">
            <div class="register-form__heading">
                <h2>Register</h2>
            </div>
            <form class="form" action="/practice/confirm" method="post">
                @csrf
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__group-label--item">お名前</span>
                    </div>
                    <div class="form__group-box">
                        <div class="form__group-content--text">
                            <input type="text" name="name" placeholder="例) 山田 太郎" />
                        </div>
                        <div class="form__error">
                        </div>
                    </div>
                    <div class="form__group-title">
                        <span class="form__group-label--item">メールアドレス</span>
                    </div>
                    <div class="form__group-box">
                        <div class="form__group-content--text">
                            <input type="email" name="email" placeholder="例) test@example.com" />
                        </div>
                        <div class="form__error">
                        </div>
                    </div>
                    <div class="form__group-title">
                        <span class="form__group-label--item">パスワード</span>
                    </div>
                    <div class="form__group-box">
                        <div class="form__group-content--text">
                            <input type="password" name="password" placeholder="例) coachtech1106" />
                        </div>
                        <div class="form__error">
                        </div>
                    </div>
                    <div class="form-button">
                        <div class="form-button__register">
                            <button class="register__button">登録</button>
                        </div>
                    </div>    
                </div>
            </form>
        </div>
    </main>
    
</body>
</html>

