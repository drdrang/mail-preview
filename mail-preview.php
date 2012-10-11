<?php
$home = getenv("HOME");
require_once("$home/git/php-markdown-extra-math/markdown.php");
require_once("$home/git/php-smartypants/smartypants.php");
$full = file_get_contents("$home/git/mail-preview/message.md");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
  <title>Mail Preview</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" media="all" href="style.css" />
</head>
<body>
  <div id="content">
    <?php echo SmartyPants(Markdown($full)) ?>
</div> <!-- content -->
</body>
</html>

