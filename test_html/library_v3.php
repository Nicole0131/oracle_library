<?php
session_start();
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta charset="utf-8">
    <meta name="generator" content="Bootply"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>欢迎访问甲骨文公司图书馆</title>

    <style>
        @font-face {
            font-family: art-font;
            src: url('./assets/fonts/antsypants.regular.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }
        div {
            font-family: art-font;
        }
    </style>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/styles.css" rel="stylesheet">
    <script src="assets/js/material.js"></script>
    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="assets/css/material.css"/>

    <!--    <script>
        $(document).ready(function () {
            $('#example').DataTable({
                    "pageLength": 25,
                    "paging": false
                }
            );

        });
    </script> -->


</head>
<body background="assets/images/bg5.jpg">

<nav class="navbar navbar-static">
    <div class="container">
        <div class="nav-collapse collase">
            <ul class="nav navbar-nav">
                <li><img src="./assets/images/sunoracle.png" height="50"></li>
                <li><a href="library_v2.php"><div>Oracle BDC Book Library</div></a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container" align="center">


    <table border="0" width="800px">
        <tr height="30">
            <td align="right">
                <?php
                if (isset($_SESSION['MM_Username'])) {
                    $userid = $_SESSION['MM_Username'];
                    echo "<font size=\"3\"><b>Welcome</b></font>";
                    echo "<a href=\"personal.php?userid=$userid\"><b>" . $_SESSION['MM_Username'] . "</b></a>";
                } else {
                    echo "<a href=\"login.php\"><font size=\"3\"><b>Login</b></font>";
                    echo "&nbsp;&nbsp;";
                    echo "<a href=\"userregist.php\"><font size=\"3\"><b>Setup</b></font>";
                }
                ?>

            </td>
        </tr>
    </table>
    <br>
    <!--
                        <td>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="keyword" id="keywordName"/>
                            <label class="mdl-textfield__label" for="keywordName">Keyword</label>
                        </div>
                    </td>
    -->

    <!-- Search Function -->
    <table border="0" width="1000">
        <form action="searchprocess.php" method="post" name="booksearch">
            <!-- onSubmit="return validateform( this.form )"> -->
            <tr>
                <td>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" name="bookname" id="bookName"/>
                        <label class="mdl-textfield__label" for="bookName">Book Name</label>
                    </div>
                </td>

                <td>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" name="author" id="authorName"/>
                        <label class="mdl-textfield__label" for="authorName">Author</label>
                    </div>
                </td>
                <td>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" name="keyword" id="keywordName"/>
                        <label class="mdl-textfield__label" for="keywordName">Keyword</label>
                    </div>
                </td>
                <td><input type="image" src="./assets/images/Search.png" height="35"></td>
            </tr>
        </form>
    </table>

    <table>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <tr>
            <td align="center">
                <a href="library_v2.php">
                    <button
                        class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                        Browser Books
                    </button>
                </a>
            </td>
        </tr>
    </table>
</div>


</body>
</html>
