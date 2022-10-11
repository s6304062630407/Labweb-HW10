<html>
<body>
<?php
    include "main.php";
    if (empty($_COOKIE["lang"])){
        setcookie("lang",$_GET["language"], time() + 10);
    }
    if(empty($_COOKIE["lang"])){
        setcookie("lang",$_GET["language"], time() + 10);
    }
?>
</body>
</html>