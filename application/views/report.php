<!doctype html>
<html>
    <head>
        <title>Bug Report #<?php echo $id; ?></title>
        <style>.json_string:before, .json_string:after { content: '"'; }</style>
    </head>
    <body>
        <h1><?php echo $ip; ?> at <?php echo $referrer; ?></h1>
        <img src="<?php echo $canvas; ?>"><br>
        <hr>
        <p><?php echo $report; ?></p>
        <hr>
        <p><?php echo $save; ?></p>
        <hr>
        <p><?php echo $debugger; ?></p>
    </body>
</html>