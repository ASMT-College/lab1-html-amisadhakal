<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>document</title>
    </head>
    <body>
        <h1>hi</h1>
        <p>hello</p>
        <?php 
        echo 'hello from server:'.date('y-m-d');
        ?>
        <br>
        <script>
            document.write('helo from client'+new Date())
            alert('hi')
        </script>
    </body>
</html>