<html>
    <head>
        <title>Sent Post Data</title>
    </head>
    <body>
        <h2><?=$title?></h2>
        <?=session('message')?>
        <form method="POST" action="<?=url('get-userdata')?>">
            <label>Name:<input type="text" name="name"></label><br>
            <label>Age:<input type="text" name="age"></label><br>
            <label>Mobile:<input type="text" name="mobile"></label><br>
            <input type="hidden" name="_token" value="<?=csrf_token()?>">
            <input type="submit" value="Send">
        </form>
    </body>
</html>
