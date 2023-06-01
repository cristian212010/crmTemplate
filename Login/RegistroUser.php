<?php
require_once("../Config/db.php");
require_once("../Config/Conectar.php");
require_once("LoginUser.php");

class RegistroUser extends Conectar{
    private $id;
    private $idCamper;
    private $email;
    private $username;
    private $password;
    
    public function __construct($id=0, $idCamper=0, $email='', $username='', $password='', $dbCnx=''){
        $this->id = $id;
        $this->idCamper = $idCamper;
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
        parent::__construct($dbCnx);
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setIdCamper($idCamper){
        $this->idCamper = $idCamper;
    }

    public function getIdCamper(){
        return $this->idCamper;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setUsername($username){
        $this->username = $username;
    }

    public function getUsername(){
        return $this->username;
    }

    public function setPassword($password){
        $this->password = $password;
    }

    public function getPassword(){
        return $this->password;
    }

    public function checkUser($email){
        try {
            $stm = $this->dbCnx->prepare("SELECT * FROM users WHERE email = '$email'");
            $stm -> execute();
            if ($stm->fetchColumn()) {
                return true;
            }else {
                return false;
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function insertData(){
        try {
            $stm = $this->dbCnx-> prepare("INSERT INTO users(idCamper, email, username, password) values (?,?,?,?)");
            $stm-> execute([$this->idCamper,$this->email,$this->username, md5($this->password)]);
            $login = new LoginUser();
            $login->setEmail($_POST['email']);
            $login->setPassword($_POST['password']);
            $success = $login->login();
        } catch (Exepcion $e) {
            return getMessage($e);
        }
    }
}
?>