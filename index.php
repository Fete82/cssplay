<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS PLAY</title>
    <link rel="icon" href="assets/images/icon.png">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300&display=swap" rel="stylesheet">

</head>

<body>
    <div class="container">
        <div class="reflection1">
            <div class="text-content1">
                <h1>Inflation is theft.</h1>
            </div>
        </div>
        <div class="reflection2">
            <div class="text-content2">
                <h1>Buy Bitcoin.</h1>
            </div>
        </div>
    </div>
    <div class="subscribe-container">
        <?php include 'form.php'; ?>
    </div>
    <div class="border-gradient">
        <div class="module-border-wrap">
            <div class="module">
                <h1 id="gradient-header">Gradient Borders</h1>
                <p id="gradient-description">Cascading Style Sheets (CSS) is a style sheet language used for describing the presentation of a document written in a markup language such as HTML.[1] CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript.</p>
                <p>And this element has a gradient border.</p>
                <div class="gradient-buttons-container">
                    <input class="gradient-button" type="button" value="Standard" id="btnResetText">
                    <input class="gradient-button" type="button" value="Less Text" id="btnLessText">
                    <input class="gradient-button" type="button" value="More Text" id="btnMuchMoreText">
                </div>
            </div>
        </div>
    </div>
    <div class="footer-content">
        <h1>
            <h2 class="text-reflect">
                This is a footer
            </h2>
        </h1>
    </div>

</body>
<script src="assets/js/script.js"></script>

</html>