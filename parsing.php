<?php 

include 'Parsedown.php';
$Parsedown = new Parsedown();
$data = file_get_contents('D:\markdown\belajar-laravel.md');
echo '<!DOCTYPE html>
<html>
<head>
	<title>File Markdown saya</title>';
echo '<script src="highlight/highlight.pack.js"></script>';
echo '<link rel="stylesheet" href="highlight/styles/github.css">';
echo '<link rel="stylesheet" href="github-markdown.css">
<style>
    .markdown-body {
        min-width: 200px;
        max-width: 790px;
        margin: 0 auto;
        padding: 30px;
    }
</style>';
echo '</head>
<body>
<article class="markdown-body">';


echo $Parsedown->text($data); # prints: <p>Hello <em>Parsedown</em>!</p>
echo '</article>';
echo '<script>hljs.initHighlightingOnLoad();</script>';
echo '</body>
</html>';

 ?>
