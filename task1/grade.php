<?php
define('maxGrade',100);
define('total',500);
$totalGrade = '';
$prescentage = '';
$message = '';
if($_POST){
    $p1 =$_POST ['physics_grade'];
    $c2=$_POST ['chemistry_grade'];
    $b3 =$_POST ['biology_grade'];
    $m4=$_POST ['mathematics_grade'];
    $o5 =$_POST ['computer_grade'];
    $totalGrade =  $p1 + $c2 +  $b3+ $m4 +  $o5   ;
    $prescentage = (  $totalGrade /total)*100 ;
 
    if(  $prescentage >=90 &&   $prescentage<= maxGrade){
         $message =  "<div class=' col-12 alert alert-success'>
         <ul>
             <li> $prescentage </li>
             <li> Grade A</li>
          
         </ul>
     </div>";


    }elseif( $prescentage >80 && $prescentage <90){
        $message =  "<div class=' alert alert-success'>
        <ul>
            <li> $prescentage </li>
            <li> Grade B</li>
         
        </ul>
    </div>";
    }elseif( $prescentage >=70 &&  $prescentage <80){
        $message =  "<div class=' alert alert-success'>
        <ul>
            <li> $prescentage </li>
            <li> Grade C</li>
         
        </ul>
    </div>";
    }elseif( $prescentage >=60 &&  $prescentage <70){
        $message =  "<div class=' alert alert-success'>
        <ul>
            <li> $prescentage </li>
            <li> Grade D</li>
         
        </ul>
    </div>";
    }elseif( $prescentage >=40 &&  $prescentage <60){
        $message =  "<div class=' alert alert-success'>
        <ul>
            <li> $prescentage </li>
            <li> Grade E</li>
         
        </ul>
    </div>";
    }elseif( $prescentage <40){
        $message =  "<div class=' alert alert-success'>
        <ul>
            <li> $prescentage </li>
            <li> Grade F</li>
         
        </ul>
    </div>";
    }else{
        $message = "<div class='alert alert-danger'> Undefined </div>";

    }
    
}
// echo " $message ";

?>
<!doctype html>
<html lang="en">
  <head>
    <title>grade.php</title>
    <!-- Required meta tags --> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
  <div class="row">
            <div class="col-12 text-center text-dark mt-5">
                <h1> Grades</h1>
</div>
<div class="col-12 offset-4 mt-5">
  <form method="post">
  <div class="row">
    <div class="col-25 pr-3 mb-3">
      <label for="pgrade">Physics grade:</label>
    </div>
    <div class="col-75">
      <input type="number" id="pgrade" name="physics_grade" placeholder="" aria-describedby="helpId">
    </div>
  </div>
  <div class="row">
    <div class="col-25 pr-3 mb-3">
      <label for="cgrade"> Chemistry grade:</label>
    </div>
    <div class="col-75">
      <input type="number" id="cgrade" name="chemistry_grade" placeholder="" aria-describedby="helpId">
    </div>
  </div>
  <div class="row">
    <div class="col-25 pr-3 mb-3">
      <label for="bgrade">Biology grade:</label>
    </div>
    <div class="col-75">
      <input type="number" id="bgrade" name="biology_grade" placeholder="" aria-describedby="helpId">
    </div>
  </div>
  <div class="row">
    <div class="col-25  pr-3 mb-3">
      <label for="mgrade">Mathematics grade:</label>
    </div>
    <div class="col-75">
      <input type="number" id="mgrade" name="mathematics_grade" placeholder="" aria-describedby="helpId">
    </div>
  </div>
  <div class="row">
    <div class="col-25  pr-3 mb-3">
      <label for="cograde">Computer grade:</label>
    </div>
    <div class="col-75">
      <input type="number" id="cograde" name="computer_grade" placeholder="" aria-describedby="helpId">
    </div>
  </div>
  
  <br>
  <div class="row ">
 
  <button class="btn btn-warning text-white " type="submit">Submit </button>
  </div>
  
</form>
<br>
<?php
echo "$message";
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