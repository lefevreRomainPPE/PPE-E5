<?php

class Modele {
    private $unPDO;
    public function __construct(){
        try{
            $url="mysql:host=localhost;dbname=CASTELLANE";
            $user = "root";
            $mdp = "" ; //PC: $mdp ="";
            $this ->unPDO = new PDO ($url, $user, $mdp);
        }
        catch (PDOException $exp){
            echo "<br> Erreur de connexion à la BDD" ;
        }
    }

    /***************** GESTION DES CLIENT******************/
    public function insertClient ($tab){
        $requete = "insert into client values (null, :nom, :prenom, :adresse, :email, :date_naiss, :date_inscription, :facture);";
        $donnees = array(":nom" => $tab['nom'],
            ":prenom"=>$tab["prenom"],
            ":adresse"=> $tab ["adresse"],
            ":email"=> $tab ["email"],
            ":date_naiss"=> $tab ["date_naiss"],
            ":telephone"=> $tab ["telephone"],
            ":date_inscription"=> $tab ["date_inscription"],
            ":facture"=> $tab ["facture"]);
        $select = $this->unPDO->prepare ($requete);
        $select -> execute ($donnees);
    }

    public function selectAllClient(){
        $requete = "Select * from client ;";
        $select = $this->unPDO->prepare($requete);
        $select -> execute ();
        return $select->fetchAll ();

    }
    public function deleteClient($idclient){
        $requete = "Delete from client where idclient = :idclient;";
        $donnees = array(":idclient" =>$idclient);
        $select = $this->unPDO->prepare ($requete);
        $select -> execute ($donnees);
    }

    public function selectWhereClient($idclient){
        $requete = "Select * from client where idclient =:idclient;";
        $donnees = array(":idclient" =>$idclient);
        $select = $this->unPDO->prepare ($requete);
        $select -> execute ($donnees);
        return $select->fetch();
    }
    
    public function updateClient($tab){
        $requete = "update client set nom=:nom, prenom = :prenom, adresse = :adresse ,email = :email, date_naiss= :date_naiss, date_inscription= :date_inscription, facture= :facture  where idclient=:idclient";
        $donnees = array(":nom" => $tab['nom'],
            ":prenom"=>$tab["prenom"],
            ":adresse"=> $tab ["adresse"],
            ":email"=>$tab["email"], 
            ":date_naiss"=>$tab["date_naiss"],
            ":telephone"=>$tab["telephone"],
            ":date_inscription"=>$tab["date_inscription"],
            ":facture"=>$tab["facture"],
            ":idclient"=>$tab["idclient"], ) ;
        $select = $this->unPDO->prepare ($requete);
        $select -> execute ($donnees);
    }

    public function selectLikeClient($filtre){
        $requete = "select * from client where nom like :filtre or prenom like :filtre or adresse like :filtre or email like :filtre;";
        $donnees = array(":filtre" =>"%".$filtre."%");
        $select = $this->unPDO->prepare ($requete);
        $select -> execute ($donnees);
        return $select->fetchAll();
    }



    /***************** GESTION DES PRODUITS ******************/
   
        public function insertProduit($tab){
            $requete = "insert into produit values (null, :designation, :prixachat, :etat, :dateachat,:idclient);";
            $donnees = array(":designation" => $tab['designation'],
                    ":prixachat"=>$tab["prixachat"],
                    ":etat"=>$tab["etat"],
                    ":dateachat"=> $tab ["dateachat"],
                    ":idclient"=> $tab ["idclient"]);
            $select = $this->unPDO->prepare ($requete);
            $select -> execute ($donnees);
        }

    public function selectAllProduit (){
        $requete = "Select * from produit ;";
        $select = $this->unPDO->prepare($requete);
        $select -> execute ();
        return $select->fetchAll ();

    }
    public function deleteProduit($idproduit){
        $requete = "Delete from produit where idproduit = :idproduit;";
        $donnees = array(":idproduit" =>$idproduit);
        $select = $this->unPDO->prepare ($requete);
        $select -> execute ($donnees);
    }

    public function selectWhereProduit($idproduit){
        $requete = "Select * from produit where idproduit =:idproduit;";
        $donnees = array(":idproduit" =>$idproduit);
        $select = $this->unPDO->prepare ($requete);
        $select -> execute ($donnees);
        return $select->fetch();
    }

    public function updateProduit($tab){
        $requete = "update produit set designation=:designation, prixachat = :prixachat,etat= :etat, dateachat = :dateachat, idclient = :idclient where idproduit=:idproduit";
        $donnees = array(":designation" => $tab['designation'],
            ":prixachat"=>$tab["prixachat"],
            ":etat"=>$tab["etat"],
            ":dateachat"=> $tab ["dateachat"],
            ":idclient"=> $tab ["idclient"],
            ":idproduit" => $tab["idproduit"] );
        $select = $this->unPDO->prepare ($requete);
        $select -> execute($donnees);
    }
    public function selectLikeProduit($filtre){
        $requete = "select * from produit where designation like :filtre or prixachat like :filtre or etat like :filtre or dateachat like :filtre or idclient like :filtre;";
        $donnees = array(":filtre" =>"%".$filtre."%");
        $select = $this->unPDO->prepare ($requete);
        $select -> execute ($donnees);
        return $select->fetchAll();
    }
    
    
    /***************** GESTION DES TECHNICIEN ******************/
    
    
    public function insertExamen($tab){
        $requete = "insert into examen values (null, :type_exam, :date_exam);";
        $donnees = array(":type_exam" => $tab["type_exam"],
            ":date_exam"=>$tab["date_exam"]);
        $select = $this->unPDO->prepare ($requete);
        $select -> execute ($donnees);
    }

    public function selectAllExamen(){
        $requete = "Select * from examen ;";
        $select = $this->unPDO->prepare($requete);
        $select -> execute ();
        return $select->fetchAll ();

    }
    public function deleteExamen($idexam){
        $requete = "Delete from examen where idexam = :idexam;";
        $donnees = array(":idexam" =>$idexam);
        $select = $this->unPDO->prepare ($requete);
        $select -> execute ($donnees);
    }


    public function selectWhereExamen($idexam){
        $requete = "Select * from examen where idexam =:idexam;";
        $donnees = array(":idexam" =>$idexam);
        $select = $this->unPDO->prepare ($requete);
        $select -> execute ($donnees);
        return $select->fetch();
    }

    public function updateExamen($tab){
        $requete = "update examen set type_exam= :type_exam, date_exam= :date_exam where idexam =:idexam";
        $donnees = array(":type_exam" => $tab['type_exam'],
            ":date_exam"=>$tab["date_exam"],
            ":idexam"=> $tab ["idexam"],);
        $select = $this->unPDO->prepare ($requete);
        $select -> execute($donnees);
    }
    public function selectLikeExamen($filtre){
        $requete = "select * from examen where type_exam like :filtre or date_exam like :filtre;";
        $donnees = array(":filtre" =>"%".$filtre."%");
        $select = $this->unPDO->prepare ($requete);
        $select -> execute ($donnees);
        return $select->fetchAll();
    }




    /***************** GESTION DES INTERVENTION ******************/
    public function insertIntervention($tab){
        $requete = "insert into intervention values (null, :dateinter, :prixinter, :rapport, :idproduit,:idtech);";
        $donnees = array(":dateinter" => $tab['dateinter'],
            ":prixinter"=>$tab["prixinter"],
            ":rapport"=>$tab["rapport"],
            ":idproduit"=> $tab ["idproduit"],
            ":idtech"=> $tab ["idtech"]);
        $select = $this->unPDO->prepare ($requete);
        $select -> execute ($donnees);
    }

    public function selectAllIntervention (){
        $requete = "Select * from intervention ;";
        $select = $this->unPDO->prepare($requete);
        $select -> execute ();
        return $select->fetchAll ();

    }
    public function deleteIntervention($idinter){
        $requete = "Delete from intervention where idinter = :idinter;";
        $donnees = array(":idinter" =>$idinter);
        $select = $this->unPDO->prepare ($requete);
        $select -> execute ($donnees);
    }

    public function selectWhereIntervention($idinter){
        $requete = "Select * from intervention where idinter =:idinter;";
        $donnees = array(":idinter" =>$idinter);
        $select = $this->unPDO->prepare ($requete);
        $select -> execute ($donnees);
        return $select->fetch();
    }

    public function updateIntervention($tab){
        $requete = "update intervention set dateinter=:dateinter, prixinter = :prixinter,rapport= :rapport, idproduit = :idproduit, idtech = :idtech where idinter=:idinter";
        $donnees = array(
            ":idinter" => $tab["idinter"],
        ":dateinter" => $tab["dateinter"],
            ":prixinter"=>$tab["prixinter"],
            ":rapport"=>$tab["rapport"],
            ":idproduit"=> $tab ["idproduit"],
            ":idtech"=> $tab ["idtech"]);
        $select = $this->unPDO->prepare ($requete);
        $select -> execute($donnees);
    }
    public function selectLikeIntervention($filtre){
        $requete = "select * from intervention where dateinter like :filtre or prixinter like :filtre or rapport like :filtre or idproduit like :filtre or idtech like :filtre;";
        $donnees = array(":filtre" =>"%".$filtre."%");
        $select = $this->unPDO->prepare ($requete);
        $select -> execute ($donnees);
        return $select->fetchAll();
    }

/******************** TABLE USER************ */
    public function verifConnexion($email, $mdp){
        $requete="select * from user where email= :email and mdp= :mdp;";   
        $select =$this->unPDO->prepare ($requete);
        $donnees=array(":email"=>$email, ":mdp"=>$mdp);
        $select->execute($donnees);
        return $select->fetch();
    }
    
}

?>