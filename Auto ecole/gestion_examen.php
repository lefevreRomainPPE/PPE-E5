<center>
    <h2>EXAMEN</h2>
    <?php
if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){
    $letechnicien=null;
    if (isset($_GET['action']) && isset($_GET['idexam'])) {
        $action = $_GET['action'];
        $id_exam= $_GET['idexam'];
        switch($action) {
            case "sup" : $unControleur->deleteExamen($id_exam); 
            break;
            case "edit" : $letechnicien= $unControleur -> selectWhereExamen($id_exam);
            break;
        }
    }
    require_once ("vue/vue_insert_examen.php");


if (isset($_POST['Modifier'])){
    $unControleur->updateExamen ($_POST);
    header("Location: index.php?page=3");

}
if (isset($_POST['Valider'])) {
            //envoi des donnes au controleur

    $unControleur->insertExamen ($_POST);
    }
    //recup de tt mes idtechs
}
if (isset($_POST['Filtrer'])){
   $lestechniciens =$unControleur->selectLikeExamen ($_POST['filtre']);
} else {

    $lestechniciens=$unControleur->selectAllExamen();
}
    require_once("vue/vue_select_examen.php");


    ?>
    <br>
    <footer class="footer"> 2023</footer>
