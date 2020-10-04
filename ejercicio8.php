<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio8</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>

    <header>
    
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Solucion Ejercicio 8.</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>   
            <a class="form-inline my-2 my-lg-0" href="#"> Diego Armando Giraldo Sanchez</a>        
        </nav>  
    </header>
    <main>

        <div class="container">
            <div class="row justify-content-center">
               <div class="col-4">


                <form class="mt-5" action="ejercicio8.php" method="POST">
                    <h2>Calcular la edad </h2>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Año de nacimiento" name="nacimiento">
                            </div>                            
                        </div>
                        <button type="submit" class="btn btn-primary mt-5" name="botonCalcular">Calcular</button>
                </form>

 <?php function calcularEdad($actual,$nacimiento){
    $edad=$actual-$nacimiento;
    echo('La edad del jugador es : '."</br>".$edad.' Años');
    
}
 ?>              
<?php if(isset($_POST["botonCalcular"])): ?>

<h3 class="text-danger">
<?php 

 $nacimiento=$_POST["nacimiento"];
 $actual=2020; 
 
 calcularEdad($actual,$nacimiento);
?></h4>
<?php endif ?>

               </div> 
            </div>
        
        </div>
     

    </main>
    <footer>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>   
</body>
</html>

