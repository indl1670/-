<!doctype html>
    <head>
        <meta charset="utf-8">
        <title>WEB</title>
    </head>
    <body>
        <h1>WEB</h1>
        <ol>
            <li>HTML</li>
        </ol>
        <!-- <a herf="create.php">create</a> -->
        <form action="process_create.php" method="POST">
        <!-- form에서 submit을 눌렀을 때 create.php로 POST방식으로 전달되도록 함 -->
            <p><input type="text" name="name" placeholder="name"></p>
            <p><input type="text" name="place" placeholder="place"></p>
            <p><input type="text" name="car number" placeholder="car number"></p>
            <p><input type="text" name="phone number" placeholder="phone number"></p>
            <p><input type="submit"></p>
        </form>
    </body>
</html>