<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Using include in php</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<style>
    div.container {
        width: 100%;
        border: 1px solid gray;
    }

    header, footer {
        padding: 1em;
        color: white;
        background-color: black;
        clear: left;
        text-align: center;
    }
</style>
<div class="container">
    <header><?php require "header.php"; ?></header>
    <nav><?php require "nav.php"; ?></nav>
    <article><?php require "content.php"; ?></article>
    <article><?php require "content1.php"?></article>
    <article><?php  include("content1.php"); ?></article>
    <footer><?php require "footer.php"; ?></footer>
</div>
</body>
</html>

