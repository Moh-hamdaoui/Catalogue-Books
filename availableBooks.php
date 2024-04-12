<?php

$conn = include("connexionDB.php");

if($conn){
    $query = "select * from livres";
    $res = mysqli_query($conn, $query);


        if (mysqli_num_rows($res) > 0) {
            
            echo "<table border='1'>";
            echo "<tr><th>titre</th><th>auteur</th><th>catalogue</th><th>disponible</th></tr>";
    

                while ($row = mysqli_fetch_assoc($res)) {

                    echo "<tr>";
                    echo "<td>".$row['titre']."</td>";
                    echo "<td>".$row['auteur']."</td>";
                    echo "<td>".$row['categorie']."</td>";
                    if ($row['disponible'] == 1) {
                        echo "<td>Disponible</td>";
                    } else {
                        echo "<td>Emprunté</td>";
                    }
                    
                    echo "</tr>";
                }
    
            echo "</table>"; 
}


mysqli_close($conn);



}


?>