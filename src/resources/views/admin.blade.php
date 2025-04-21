<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
     <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo">
                <h2>FashionablyLate</h2>
            </a>
        </div>
    </header>

    <main>
        <div class="admin-form__content">
            <div class="admin-form__heading">
                <h2>Admin</h2>
            </div>
            <div class="top_pull_style">
                <div class="top_pull_style1">
                    <select id="gender" name="gender" class="form-control">
                        <option value="">性別</option>
                        <option value="男性">男性</option>
                        <option value="女性">女性</option>
                        <option value="その他">その他</option>
                    </select>
                </div>
                <div class="top_pull_style2">
                    <select id="kinds" name="kinds" class="form_control">
                        <option value="">お問い合わせの種類</option>
                        <option value="商品の交換について">商品の交換について</option>      
                    </select>
                </div>
                <div class="top_pull_style3">
                    <select id="date" name="date" class="date">
                        <option value="date">年/月/日</option>
                    </select>
                </div>
            </div>    
        </div>
    </main>
</body>
</html>