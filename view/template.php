<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <base href="<?= /** @noinspection PhpUndefinedVariableInspection */
    $racineWeb ?>" >
    <title><?= /** @noinspection PhpUndefinedVariableInspection */
        $title ?></title>
    <script type="text/javascript" src="<?= /** @noinspection PhpUndefinedVariableInspection */
    $script ?>"></script>
    <link href=<?= /** @noinspection PhpUndefinedVariableInspection */
    $style ?> rel="stylesheet" />
    <script type="text/javascript" src="public/js/header.js"></script>
</head>

<body style="background-color: #212121">

<div id="header" style="visibility: visible" >
    <header id="menu1">
        <nav>
            <ul>
                <li id="link"><a id="b1" href="#"> Forum </a></li>
                <li id="link"><a id="b2" href="#"> Notifications </a></li>
                <li id="link"><a id="b3" href="client.html"> Mon compte </a></li>
                <li><a href="home"><img id="pict" src="public/images/logo.png" alt="Logo du site"/></a></li>
            </ul>
        </nav>
    </header>
</div>

<?= /** @noinspection PhpUndefinedVariableInspection */
$content ?>

<!-- Footer : les éléments propres à la navigation du footer sont indicés "2" -->
<div id="footer" style="display: block;">
    <footer id="menu2">
        <nav>
            <ul>
                <li id="link2"><a href="#">FAQ</a></li>
                <li id="link2"><a href="#">CGU</a></li>
                <li id="link2"><a href="#">Contact</a></li>
            </ul>
        </nav>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.js"
            integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
            crossorigin="anonymous"></script>
</div>

<script> isLoginPage() </script>

</body>
</html>


