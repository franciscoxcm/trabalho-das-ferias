<?php
function url_redirect($values = []) {
    $buildQueryString = http_build_query($values);
    header('Location: http://localhost/trabalho-das-ferias/minha-primeira-aplicacao-php?' . $buildQueryString);
    exit; 
}