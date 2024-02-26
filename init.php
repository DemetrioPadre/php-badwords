<?php 
$user_text= $_GET['name'];
$bad_word= $_GET['bad_word'];
//variabile che serve a inserire tanti * quanto lunga la parola da censurare, grazie signor google e php docs
$bad_word_m = str_repeat('*',strlen($bad_word) );
$new_bad_word = str_replace($bad_word, $bad_word_m , $user_text);
?>