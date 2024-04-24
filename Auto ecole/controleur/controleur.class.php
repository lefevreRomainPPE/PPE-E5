<?php 
    require_once("modele/modele_castellane.php");
    class Controleur{
        private $unModele;

        public function __construct(){
            $this->unModele = new Modele();
        }
        /*********GESTION DES Client ***************/
        public function insertClient ($tab){
            //on controle les données avant insertion

            //on appel de la méthode du modele
            $this->unModele->insertClient($tab);
        }
        public function selectAllClient(){
            //appel de la méthode du modele
            return $this->unModele->selectAllClient();
        }
        public function deleteClient($idclient){
            $this->unModele->deleteClient($idclient);
        }
        public function selectWhereClient($idclient){
            return $this->unModele->selectWhereClient($idclient);
        }
        public function updateClient($tab){
           $this->unModele->updateClient($tab);
        } 
        public function selectLikeClient($filtre){
            return $this->unModele->selectLikeClient($filtre);
        }
        /*********GESTION DES PRODUIT ***************/
        public function insertProduit ($tab){
            //on controle les données avant insertion

            //on appel de la méthode du modele
            $this->unModele->insertProduit($tab);
        }
        public function selectAllProduit(){
            //appel de la méthode du modele
            return $this->unModele->selectAllProduit();
        }
        public function deleteProduit($idproduit){
            $this->unModele->deleteProduit($idproduit);
        }
        public function selectWhereProduit($idproduit){
            return $this->unModele->selectWhereProduit($idproduit);
        }
        public function updateProduit($tab){
           $this->unModele->updateProduit($tab);
        } 
        public function selectLikeProduit($filtre){
            return $this->unModele->selectLikeProduit($filtre);
        }


        /*********GESTION DES examen ***************/

        public function insertexamen ($tab){
            //on controle les données avant insertion

            //on appel de la méthode du modele
            $this->unModele->insertexamen($tab);
        }
        public function selectAllexamen(){
            //appel de la méthode du modele
            return $this->unModele->selectAllexamen();
        }
        public function deleteexamen($idexam){
            $this->unModele->deleteexamen($idexam);
        }
        public function selectWhereexamen($idexam){
            return $this->unModele->selectWhereexamen($idexam);
        }
        public function updateexamen($tab){
           $this->unModele->updateexamen($tab);
        } 
        public function selectLikeexamen($filtre){
            return $this->unModele->selectLikeexamen($filtre);
        }

        /*********GESTION DES Intervention ***************/

        public function insertIntervention ($tab){
            //on controle les données avant insertion

            //on appel de la méthode du modele
            $this->unModele->insertIntervention($tab);
        }
        public function selectAllIntervention(){
            //appel de la méthode du modele
            return $this->unModele->selectAllIntervention();
        }
        public function deleteIntervention($idinter){
            $this->unModele->deleteIntervention($idinter);
        }
        public function selectWhereIntervention($idinter){
            return $this->unModele->selectWhereIntervention($idinter);
        }
        public function updateIntervention($tab){
           $this->unModele->updateIntervention($tab);
        } 
        public function selectLikeIntervention($filtre){
            return $this->unModele->selectLikeIntervention($filtre);
        }
        /************** table user ********** */
        public function verifConnexion($email, $mdp){
            //controle : voir cours sécurité
            return $this->unModele->verifConnexion($email, $mdp);
        }
    }
?>
