<html>
<head>
    <title>Accessing Cookies with PHP</title>
</head>
<body>
<?php
    $_COOKIE["name"] = 'usr';
    echo $_COOKIE["name"]."<br/>";



    $HTTP_COOKIE_VARS = 'test';
echo $HTTP_COOKIE_VARS["name"]."<br/>";

    echo $_COOKIE["age"]."<br/>";

    echo $HTTP_COOKIE_VARS["age"]."<br/>";
?>
</body>
</html>
