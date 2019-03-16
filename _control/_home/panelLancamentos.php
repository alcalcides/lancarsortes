<?php    
    require $hieAbs . '_model/db/select_recent_sorteios.php' ;
    $news = ultimosLancamentos();
    foreach ($news as $row) {
        echo '<div class="card shadow">';
            echo "<div class='card-header'>";
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
                echo "<p><a href='#' target='_self' class='card-link valorParticipacao'>" . $row["valorParticipacao"]."</a></p>";
            echo "</div>";
        echo "</div>";
    }
?>