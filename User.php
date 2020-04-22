<?php 

class User {

protected $_mail;
protected $_mdp;

public function __construct($mail, $mdp){
    $this->_mail = $mail;
    $this->_mdp = $mdp;
}

public function connexion($bdd){
        $req = $bdd->prepare("SELECT * FROM users WHERE mail = :mail AND mdp = :mdp");
        $req->execute(array(
            ':mail' => $this->_mail,
            ':mdp' => $this->_mdp 
        ));

        $count = $req->rowCount();
        if($count > 0)
        {
            session_start();
            $_SESSION['mail'] = $this->_mail;
            $_SESSION['mdp'] = $this->_mdp;
            header("location:tab-admin/index.php");
        }
        else
        {
            //Mauvais identifiant ou mauvais tout cours
            header("location:index.php");
        }
    }

}





?>