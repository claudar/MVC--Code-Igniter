<?php		
	defined('BASEPATH') OR exit('No direct script access allowed');      
		
	 
		
	class Produits extends CI_Controller 
		
	{
		
		public function liste()
		
		{
		// Déclaration du tableau associatif à tranmettre à la vue
		
		$aView = array(); 
		
		// Dans le tableau, on créé une donnée 'prénom' qui a pour valeur 'Dave'    
		
		$aView["prenom"] = "Dave";
		$aView["nom"] = "Loper";
		$aView['Produits']= array("Aramis", "Athos", "Clatronic", "Camping", "Green");            
		
		// Charge la librairie 'database'
		$this->load->database();
		
		// Exécute la requête 
		$results = $this->db->query("SELECT * FROM produits");  
		
	    // Récupération des résultats    
		$aListe = $results->result();   
		
	    // Ajoute des résultats de la requête au tableau des variables à transmettre à la vue   
		$aView["liste_produits"] = $aListe;
		
		// Appel de la vue avec transmission du tableau  
		$this->load->view('liste', $aView);
		}
		
	}
	
?>