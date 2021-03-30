<head>
    <title>Teste PHP</title>
</head>

<body>
    <?php
    echo $_SERVER['HTTP_USER_AGENT'];
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'Mozilla') !== FALSE) {
        echo '<br />Você está usando o Mozilla';
    }
    ?>
</body>