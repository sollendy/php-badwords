<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1 class="text-center">Risultato di index</h1>
    <div class="results-cnt w-75 m-auto text-center">
        <p>
            <?php 
            $paragrafo = $_POST['testo'];
            echo $paragrafo;
            ?>
        </p>
        <p>
            <br>
            Il tuo (magnifico) paragrafo consta di <?php echo str_word_count($paragrafo)  ?> parole e <?php echo strlen($paragrafo) ?> caratteri.
        </p>
        <hr>
        <p>
        <?php echo $paragrafo; 
        
        ?>
        </p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>