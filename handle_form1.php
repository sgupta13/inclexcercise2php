<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
	    <link rel="stylesheet" type="text/css" href="inclex2.css">
        <meta http-equiv="Content-Type"
              content="text/html; charset=UTF-8">
        <title>Handle Form 1</title>
    </head>
    <body>
        <?php
        $text = $_POST["message"];
        print "<p>Hello $text</p>";
        ?>
    </body>
</html>