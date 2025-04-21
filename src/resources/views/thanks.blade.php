<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/thanks.css') }}" />
</head>
<body>
    <main>
        <div class="thanks__content">
            <div class="thanks__heading">
                <p>お問い合わせありがとうございました</p>
            </div>
        </div>
        <form class="thanks-form" action="/" method="post">
            @csrf
            <div class="thanks-form__button">
                <button claas="thanks-form__button-submit" type="submit">HOME</button>
            </div>
        </form>
    </main>
</body>
</html>