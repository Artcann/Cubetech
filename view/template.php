<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <base href="<?= /** @noinspection PhpUndefinedVariableInspection */
    $racineWeb ?>" >
    <title><?= /** @noinspection PhpUndefinedVariableInspection */
        $title ?></title>
    <link href="public/css/index.css" rel="stylesheet" />
    <link href=<?= /** @noinspection PhpUndefinedVariableInspection */
    $style ?> rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.5.1.js"
            integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
            crossorigin="anonymous"></script>
    <script type="text/javascript" src="public/js/header.js"></script>
</head>

<body>

    <nav class="navbar" id="navbar-header">
        <ul>
            <a  href="javascript:void(0)" class="icon" id="ham" >
              <img class="bars" src="public/images/icon.png" alt="Hamburger"/>
            </a>
            <li><a href="home" id="pict-link"><img id="pict" src="public/images/logo_notext.png" alt="Logo du site"/></a></li>

            <li><a class="link" href="modifier"> Mon compte </a></li>
            <li><a class="link" href="forum"> Forum </a></li>
            <li><a class="link" href="#"> Notifications </a></li>

        </ul>

    </nav>

    <div id="page-container">
        <div id="content-wrapper">
            <div id="lang-fixed">
                <a class="switch-lang" href="home/switchlang/1"><img class="flag" src="public/images/united-kingdom.png"/></a>
            </div>
            <?= /** @noinspection PhpUndefinedVariableInspection */
            $content ?>
        </div>

        <footer>
            <nav class="navbar" id="navbar-footer">
                <ul>
                    <li><a href="faq">FAQ</a></li>
                    <li><a href="cgu">CGU</a></li>
                    <li><a href="contact">Contact</a></li>
                </ul>
            </nav>
        </footer>
    </div>
<script> isLoginPage() </script>
<script type="text/javascript" src="<?= /** @noinspection PhpUndefinedVariableInspection */
$script ?>"></script>

</body>
</html>
