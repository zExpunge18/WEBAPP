<html>
    <head>
        <meta charset="UTF-8">
        <title><?= $title ?></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-5">
                    <br>
                    <center><h1><?= $label ?></h1></center>
                    <form method="POST" action="<?= $this->config->base_url() ?>Calculator/calculate">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Number 1</label>
                            <input type="text" name="num1" class="form-control" id="exampleInputEmail1" placeholder="Enter Number 1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Number 2</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="num2" placeholder="Enter Number 2">
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="operation" id="add" value="1">
                            <label class="form-check-label" for="inlineRadio1">Addition</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="operation" id="sub" value="2">
                            <label class="form-check-label" for="inlineRadio2">Subtraction</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="operation" id="mul" value="3">
                            <label class="form-check-label" for="inlineRadio3">Multiplication</label>
                        </div> 
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="operation" id="div" value="4">
                            <label class="form-check-label" for="inlineRadio4">Division</label>
                        </div>
                        <br>
                        <br>
                        <button type="submit" class="btn btn-primary" name="btnSubmit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
