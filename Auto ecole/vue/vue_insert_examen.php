<h3> Ajouter un examen</h3>
<form method="post">
    <table>
        <tr>
            <td> Type d'Examen :</td>
            <td> <input type="text" name="nom" value="<?= ($letechnicien !=null) ? $letechnicien['type_exam'] : ''?>"></td>
        </tr>
        <tr>
            <td> Date d'Examen :</td>
            <td> <input type="date" name="prenom"value="<?= ($letechnicien !=null) ? $letechnicien['date_exam'] : ''?>"></td>
        </tr>
        <tr>
       
        
        
        <td> <input type="reset" name="Annuler" value="Annuler">
        <input type="submit"

        <?=($letechnicien !=null) ? ' name="Modifier" value="Modifier"':'
         name="Valider" value="Valider" ' ?>
         >
        </td>
         
         <?=($letechnicien !=null) ? '<input type="hidden" name="idexam" value="'.$letechnicien['idexam'].'">' : ' '?>
    </table>
</form>