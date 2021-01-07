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

<body style="background-color: #212121">

    <header id="menu1">
        <nav>
            <ul>
                <li id="link"><a id="b2" href="#"> Notifications </a></li>
                <li id="link"><a id="b1" href="#"> Forum </a></li>
                <li id="link"><a id="b3" href="home"> Mon compte </a></li>
                <li><a href="home" id="pict-link"><img id="pict" src="public/images/logo_notext.png" alt="Logo du site"/></a></li>
            </ul>
        </nav>
    </header>

<?= /** @noinspection PhpUndefinedVariableInspection */
$content ?>

<!-- Footer : les éléments propres à la navigation du footer sont indicés "2" -->
    <footer id="menu2">
        <nav>
            <ul>
                <li id="link2"><a href="faq">FAQ</a></li>
                <li id="link2"><a href="cgu">CGU</a></li>
                <li id="link2"><a href="contact">Contact</a></li>
            </ul>
        </nav>
    </footer>

<script> isLoginPage() </script>
<script type="text/javascript" src="<?= /** @noinspection PhpUndefinedVariableInspection */
$script ?>"></script>

</body>
</html>


