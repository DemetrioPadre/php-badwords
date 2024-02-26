
<?php
$user_text= $_GET['name'];
$bad_word= $_GET['bad_word'];
//variabile che serve a inserire tanti * quanto lunga la parola da censurare, grazie signor google e php docs
$bad_word_m = str_repeat('*',strlen($bad_word) );
$new_bad_word = str_replace($bad_word, $bad_word_m , $user_text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> 
</head>
<body>
<div class="container mt-5">
    <div class="firstW"><h1> Ecco la stampa della parola da te scelta e/o inserita : "
    <?php   echo $user_text;?>
    "
    </h1>

<h2> la tua parola è lunga:  <?php echo strlen($user_text)?> caratteri </h2>
</div>
    
    <div class="badWord">
        <h3>vorrei censurare la parola  : " <?php echo $bad_word ?> " , che ha <?php echo strlen($bad_word) ?> caratteri,  sarebbe possibile?</h3>
<h4> 
    Ecco la tua parola censurata : "
    <?php echo $new_bad_word  ?> " , che ha <?php echo strlen($bad_word)?> asterischi </h4>
    


    </div>
    
   
    
    
    
        
    </div>
    
</body>
</html>