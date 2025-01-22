<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Carslist</title>
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <div class="header-utilities">
                <a class="header__logo" href="/">
                    Cars List
                </a>
                <nav>
                    <ul class="header-nav">
                        <li class="header-nav__item">
                            <a class="header-nav__link" href="/carlist">車名一覧</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main>
        <div class="cars__alert">
            <div class="cars__alert--danger">
                車名を入力してください
            </div>
        </div>

        <div class="cars__content">
            <div class="section__title">
                <h2>車名・車種追加</h2>
            </div>
            <form class="create-form">
                <div class="create-form__item">
                    <table>
                        <tr>
                            <th>車名入力</th>
                            <th>車種入力</th>
                        </tr>
                        <tr>
                            <td><input class="create-form__item-input" type="text" name="content"></td>
                            <td><input class="create-form__item-input" type="text" name="makes"></td>
                        </tr>
                    </table>
                </div>
                <div class="create-form__button">
                    <button class="create-form__button-submit" type="submit">追加</button>
                </div>
            </form>
            <div class="section__title">
                <h2>車種検索</h2>
            </div>
            <form class="search-form">
                <div class="search-form__item">
                    <select class="search-form__item-select">
                        <option value="">車種</option>
                    </select">
                </div>
                <div class="search-form__button">
                    <button class="search-form__button-submit" type="submit">検索</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>