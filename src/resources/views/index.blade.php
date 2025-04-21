<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <div class="header__logo" href="/">
                <h2>FashionablyLate</h2>
            </div>
        </div>
    </header>

    <main?>
        <div class="contact-form__content">
            <div class="header-form__heading">
                <h2>Contact</h2>
            </div>
            <form class="form">
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お名前</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--first_name">
                            <input type="text" name="name" placeholder="山田" />
                        </div>
                        <div class="form__input--last_name">
                            <input type="text" name="name" placeholder="太郎">
                        </div>
                        <div class="form__error">
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__title">
                        <span class="form__label--item">性別</span>
                        <span class="form__label-required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div>
                            <input type="radio" id="man" name="gender" value="man" checked />
                            <label for="man">男性</label>
                        </div>

                        <div>
                            <inut type="radio" id="woman" name="gender" value="woman" />
                            <label for="woman">女性</label>
                        </div>

                        <div>
                            <input type="radio" id="others" name="gender" value="others" />
                            <label for="others">その他</label>
                        </div>
                    </div>
                </div>
                <div class="form_group">
                    <div class="form__group-title">
                        <span class="form__label--item">メールアドレス</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="email" name="email" placeholder="text@example.com" />
                        </div>
                        <div class="form__error">

                        </div>
                    </div>
                    <div class="form__group">
                        <div class="form__group-title">
                            <span class="form__label--item">電話番号</span>
                            <span class="form__label--required">※</span>
                        </div>
                        <div class="form__error">
                            
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">住所</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="address" name="address" placeholder="東京都渋谷区千駄ヶ谷1-2-3" />
                        </div>
                        <div class="form__error">

                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">建物名</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="build" name="build" placeholder="千駄ヶ谷マンション101">
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お問い合わせの種類</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <form>
                        <select name="contact">
                            <option value="">選択してください</option>
                        </select>
                    </form>
                    <div class="form__error">

                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お問い合わせ内容</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--textarea">
                            <textarea name="content" placeholder="お問い合わせ内容をご記載ください"></textarea>
                        </div>
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-confirmation" type="confirmation">確認画面</button>
                </div>
            </form>
        </div>
    </main>
    
</body>
</html>