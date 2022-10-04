<?php
$operator = '';

if($_POST){
	$num1=$_POST['fnumber'];
	$num2=$_POST['snumber'];
	$operator=$_POST['calculate'];
	if($operator=="+"){
        $result=$num1+$num2;

    }else if($operator=="-"){
        $result=$num1-$num2;
    }else if($operator=="x"){
        $result=$num1*$num2;
    }else if($operator=="/")
	{	$result=$num1/$num2;}
}

?>


<!doctype html>
<html lang="en">
  <head>
    <title>calc.php</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="contianer">
        <div class="row">
            <div class="col-12 text-center text-danger mt-5">
                <h1> Calculator </h1>
            </div>
            <div class="col-4 offset-4 mt-5">
                <form  method="post">
                    <div class="form-group">
                      <label for="number">First Number</label>
                      <input type="number" name="fnumber" id="number" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                      <label for="number">Second Number</label>
                      <input type="number" name="snumber" id="number" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <br>
                    <div class="form-group ml-5">
                    <input type="submit" name="calculate" value="+" class="col-2 offset-2 ml-5 text-danger">
                    <input type="submit" name="calculate" value="-"class="col-2 offset-2 ml-4 text-danger ">
                    <input type="submit" name="calculate" value="x"class="col-2 offset-2 ml-4 text-danger ">
                    <input type="submit" name="calculate" value="/"class="col-2 offset-2 ml-4 text-danger "><br>
                    </div>

                  
                </form>
                <br>
                <?php
                echo "<div class=' alert alert-success'>Result is :   $result</div>";
                ?>
             
            </div>
        </div>
      </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>