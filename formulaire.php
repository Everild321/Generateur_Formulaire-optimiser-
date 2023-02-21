<?php 
    class Formulaire{
        private $contenu;
        private $type;
        private $traitement;
       
    public function __construct(){
        $this->contenu ='<form>';
        $this->type='Post';
        //$this->traitement=NULL;
    }

    public function debut_soummission($type){
        echo'<form action= "" method='.$type.'>';
    }

    public function ajouterlabel($nomchamp){
    echo'<label for="">'. $nomchamp .'</label><br><br>';
 
    }
    public function ajouterinput($typechamp){
        echo'<input type='. $typechamp.'> <br><br>';
     
        }
    function ajout_bouton($nom_button){
        echo '<input type="submit" name='.$nom_button.' value='.$nom_button.'>';
        if(isset($nom_button)){
            
        }
    }
        
    function fin_formulaire(){
        echo '</form>';
        /*
     $this->contenu .='</form>';
     return $this;
     */
    }
   

  }

  