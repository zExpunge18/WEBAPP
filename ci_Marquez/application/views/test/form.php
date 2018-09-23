<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST" action="<?=$this->config->base_url()?>test/formsubmit">
            <input type="text" name="myinput" />
            <button type="submit" name="btnSubmit">Submit</button>
        </form>
    </body>
</html>
