<?php
require_once('SQLConstants.php');
/**
 * Created by PhpStorm.
 * User: nonau
 * Date: 30/11/15
 * Time: 09:35
 */

class PDOSingleton {
    /**
     * Instance de la classe PDO
     *
     * @var PDO
     * @access private
     */
    private $PDOInstance = null;

    /**
     * Instance de la classe SPDO
     *
     * @var SPDO
     * @access private
     * @static
     */
    private static $instance = null;

    /**
     * nom d'utilisateur de la bdd
     *
     * @var string
     */
    private $DEFAULT_SQL_USER;

    /**
     *  hôte de la bdd
     *
     * @var string
     */
    private $DEFAULT_SQL_HOST;

    /**
     *  Port mysql.
     *
     * @var string
     */
    private $DEFAULT_SQL_PORT;

    /**
     * hôte de la bdd
     *
     * @var string
     */
    private $DEFAULT_SQL_PASS;

    /**
     * nom de la bdd
     *
     * @var string
     */
    private $DEFAULT_SQL_DTB ;

    /**
     * Constructeur
     *
     * @param void
     * @return void
     * @see PDO::__construct()
     * @access private
     */
    private function __construct()
    {
        $this->DEFAULT_SQL_DTB = SQLConstants::SQL_DTB;
        $this->DEFAULT_SQL_HOST = SQLConstants::SQL_HOST;
        $this->DEFAULT_SQL_PASS = SQLConstants::SQL_PASS;
        $this->DEFAULT_SQL_PORT = SQLConstants::SQL_PORT;
        $this->DEFAULT_SQL_USER = SQLConstants::SQL_USER;
        //Dans le cas ou nous sommes sur le serveur, il n'y a pas de port (localhost)
        if ($this->DEFAULT_SQL_PORT == SQLConstants::SQL_NO_PORT) {
            $this->PDOInstance = new PDO('mysql:dbname='.$this->DEFAULT_SQL_DTB.';host='.$this->DEFAULT_SQL_HOST,$this->DEFAULT_SQL_USER ,$this->DEFAULT_SQL_PASS);
        } else {
            $this->PDOInstance = new PDO('mysql:dbname='.$this->DEFAULT_SQL_DTB.';host='.$this->DEFAULT_SQL_HOST.';port='.$this->DEFAULT_SQL_PORT
                ,$this->DEFAULT_SQL_USER ,$this->DEFAULT_SQL_PASS);
        }

    }

    /**
     * Crée et retourne l'objet SPDO
     *
     * @access public
     * @static
     * @param void
     * @return PDOSingleton $instance
     */
    public static function getInstance()
    {
        if(is_null(self::$instance))
        {
            self::$instance = new PDOSingleton();
        }
        return self::$instance;
    }

    /**
     * Exécute une requête SQL avec PDO
     *
     * @param string $query La requête SQL
     * @return PDOStatement Retourne l'objet PDOStatement
     */
    public function query($query)
    {
        return $this->PDOInstance->query($query);
    }

    public function selectPersonne($login)
    {
        $stmt = $this->PDOInstance->prepare('select * from personne where mail = :login');
        $stmt->bindParam(':login', $login, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function insertPersonne($nom, $prenom, $mail, $tel, $mdp, $dv) {
        $stmt = $this->PDOInstance->prepare('insert into personne (`nom`, `prenom`, `mail`, `tel`, `mdp`, `dv`) values (:nom, :prenom, :mail, :tel, :mdp, :dv)');
        $stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
        $stmt->bindParam(':prenom',$prenom, PDO::PARAM_STR);
        $stmt->bindParam(':mail', $mail, PDO::PARAM_STR);
        $stmt->bindParam(':tel', $tel, PDO::PARAM_STR);
        $stmt->bindParam(':mdp', $mdp, PDO::PARAM_STR);
        $stmt->bindParam(':dv', $dv, PDO::PARAM_BOOL);
        return $stmt->execute();
    }

    public function insertEvent($nom_evt,$date_deb,$date_fin, $resume, $description, $id_typeEvt) {
        $stmt = $this->PDOInstance->prepare('insert into evenement (`nom_evt`,`date_deb`,`date_fin`,`resumer`,`description`,`ide_typeEvt`) values (:nom_event, :date_deb, :date_fin, :resume, :description, :id_typeEvt)');
        $stmt->bindParam(':nom_event', $nom_evt, PDO::PARAM_STR);
        $stmt->bindParam(':date_deb', $date_deb, PDO::PARAM_STR);
        $stmt->bindParam(':date_fin', $date_fin, PDO::PARAM_STR);
        $stmt->bindParam(':resume', $resume, PDO::PARAM_STR);
        $stmt->bindParam('descirption',$description, PDO::PARAM_STR);
        $stmt->bindParam('id_typeEvt', $id_typeEvt, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function addMessage($id_pers,$id_evt,$time_msg,$img_blob,$text) {
        $stmt = $this->PDOInstance->prepare('insert into message (`id_pers`, `id_evt`, `time_msg`, `img_blob`, `txt`) values ( :id_pers, :id_evt, :time_msg, :img_blob, :text)');
        $stmt->bindParam(':id_pers', $id_pers, PDO::PARAM_INT);
        $stmt->bindParam(':id_evt', $id_evt , PDO::PARAM_INT);
        $stmt->bindParam('time_msg', $time_msg, PDO::PARAM_STR);
        $stmt->bindParam('img_blob', $img_blob, PDO::PARAM_LOB);
        $stmt->bindParam('text', $text, PDO::PARAM_STR);
        return $stmt->execute();
    }

    public function getThreeLastMessages() {
        $stmt = $this->PDOInstance->prepare('select * from message limit 3');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getThreeLastEvents() {
        $stmt = $this->PDOInstance->prepare('select * from evenement limit 3');
        $stmt->execute();
        return $stmt->fetchAll();
    }
 }