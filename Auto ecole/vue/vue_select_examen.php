<h3>examen</h3>
<form method="post">
    Filtrer par : <input type="text" name="filtre">
    <input type="submit" name="Filtrer" value="Filtrer">
</form>
<br/>
<table border="1">
    <tr>
        <td>Id Examen </td>
        <td>Type d'Examen</td>
        <td>date</td>
        <?php 
if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){
       echo '<td>Opération</td>';
}?>

    </tr>
    <?php
    if (isset($lestechniciens)){
        foreach ($lestechniciens as $untechnicien){
            echo "<tr>";
            echo "<td>" . $untechnicien['idexam'] ."</td>";
            echo "<td>" . $untechnicien['type_exam'] ."</td>";
            echo "<td>" . $untechnicien['date_exam'] ."</td>";
       
             
if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){

            echo "<td>";
            echo "<a href='index.php?page=4&action=sup&idexam=".$untechnicien['idexam']."'><img src='images/supprimer.png' height='30' width='30'></a>";
            echo "<a href='index.php?page=4&action=edit&idexam=".$untechnicien['idexam']."'><img src='images/editer.png' height='30' width='30'></a>";
            echo "</td>";
            echo"</td>";
        }
    }
    } ?>
</table>