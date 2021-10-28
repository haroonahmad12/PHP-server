<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div>    
<h3>Server Variables</h3>
<pre>
    <?php
foreach ($_SERVER as $key => $value) {
    echo "$key - $value <br>" ;
}
?>
</pre>
</div>

<div>
    <h3>Session Variables</h3>
    <pre>
<?php
        session_start();

        
$_SESSION['browser'] = $_SERVER['HTTP_USER_AGENT'];
$_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
$_SESSION['time'] = time();
echo 
print_r($_SESSION);

?>
</pre>
</div>
</body>
</html>