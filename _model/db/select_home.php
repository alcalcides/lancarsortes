<?php
    require_once 'configs.php';
    try{
        require_once 'connection.php';        
        //exibição
        foreach($conn->query("SELECT * FROM sorteios ORDER BY idsorteios DESC LIMIT 3") as $row) {
            echo '<div class="card shadow">';                
                //echo "<p class='idsorteios'>".$row["idsorteios"]."</p>";
                echo "<div class='card-header'>";
                //echo "<img class='card-img-top' src='img_avatar1.png' alt='{$row["titulo"]}'>";
                    echo "<h4 class='card-title text-center titulo'>".$row["titulo"]."</h4>";
                    echo "<p class='estado text-right'>".$row["estado"]."</p>";
                echo "</div>";
                echo "<div class='card-body>'";
                    echo "<p class='card-text descricao'>".$row["descricao"]."</p>";
                    echo "<p class='card-text momentoSorteio'>".$row["momentoSorteio"]."</p>";
                    echo "<p class='card-text lugarSorteio'>".$row["lugarSorteio"]."</p>";
                    echo "<p class='card-text formaRetirada'>".$row["formaRetirada"]."</p>";
                echo "</div>";
                echo "<div class='card-footer>'";
                    echo "<p><a href='#' target='_self' class='card-link valorParticipacao'>" . $row["valorParticipacao"] . "</a></p>";
                echo "</div>";
            echo "</div>";
        }
        $row = null;    
        $conn = null;
    }
    catch (PDOException $e){
        echo "Erro!<hr>";
        echo $e->getMessage();
    }
?>