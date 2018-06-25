<?php
/*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    POUR TOUTE MODIFICATION VISANT A AMELIORER
    CE MODELE.
    VOUS ETES LIBRE DE TOUTE UTILISATION.
  ===================================================*/
    class TestDB extends Model{
		
		//La base de données samane_test est dans view/test
		//Pour tester importer la 
        public function __construct(){
            parent::__construct();
        }

        public function getTest($idP)
        {
            $sql = "SELECT *
                     FROM Produit, categorie
                     WHERE Produit.idC=categorie.idC
                     AND
                     Produit.idP = ".$idP;
            if($this->db != null)
			{
				return $this->db->query($sql)->fetch();
			}else{
				return null;
			}
        }
		
		public function addTest($refP, $libProd, $qtStock, $libC){
			$sql = "INSERT INTO Produit VALUES(null, '$refP', '$libProd', '$qtStock', '$libC')";
			if($this->db != null)
			{
				$this->db->exec($sql);
				return $this->db->lastInsertId();//Si la clé primaire est auto_increment
											 //sinon return $this->db->exec($sql);
			}else{
				return null;
			}
		}
		
		public function deleteTest($id){
			$sql = "DELETE FROM Produit WHERE idP = $id";

			if($this->db != null)
			{
				return $this->db->exec($sql);
			}else{
				return null;
			}
		}
		
		public function updateTest($idProduit, $refP, $libProd, $qtStock, $libC){
			$sql = "UPDATE Produit, categorie SET
					    refP = '$refP',
						libProd = '$libProd',
						qtStock = '$qtStock',
						libC = '$libC'
						WHERE 
						Produit.idC=categorie.idC
						AND
						idP = $idProduit";

			if($this->db != null)
			{
				return $this->db->exec($sql);
			}else{
				return null;
			}
		}
		
		public function listeTest(){
			$sql = "SELECT * FROM Produit, categorie 
					WHERE Produit.idC=categorie.idC";
			
			if($this->db != null)
				return $this->db->query($sql)->fetchAll();
			else
				return null;
		}
	}