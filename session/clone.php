<?php
    session_start();
    if (isset($_SESSION['counter'])){
        $_SESSION['counter']=1;
    }else{
        $_SESSION['counter']++;
    }
    $msg="You have visited this".$_SESSION['counter'];
    $msg="in this session";

    echo ($msg);
?>

<p>
    To continue click following link <br/>

    <a href="counter.php"><?php echo htmlspecialchars(SID);?></a>
</p>

