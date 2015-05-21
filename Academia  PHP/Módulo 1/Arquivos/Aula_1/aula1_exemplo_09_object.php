<?php
    class Carro {
        function Carro() {
            $this->modelo = "Pálio";
        }
    }
    
    $meuCarro = new Carro();
    echo $meuCarro->modelo;
?>
