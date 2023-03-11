<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP掲示板(Document)</title>
    <link rel="stylesheet" href="style.css"> <!-- 省略形 link:css でOK -->
</head>
<body>
    <h1 class="title">PHPで掲示板アプリ</h1>
    <hr>
    <div class="boardWrapper">
        <section>
            <div class="wrapper">
                <div class="nameArea">
                    <span>名前：</span>
                    <p class="username">shinCode</p>
                    <time>:2022/7/15</time>
                </div>
                <p class="comment">手書きコメントです</p>
            </div>
        </section>

        <form class="formWrapper">
            <div>
                <input type="submit" value="書き込む">
                <label for="">名前：</label>
                <input type="text" name="username">
            </div>
            <div>
                <!-- label for="">コメント：</label-->
                <textarea class="commentTextArea"></textarea>
            </div>
        </form>
    </div>
</body>
</html>