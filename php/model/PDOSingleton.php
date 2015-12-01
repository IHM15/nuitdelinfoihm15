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
            $this->PDOInstance = new PDO('mysql:dbname='.self::DEFAULT_SQL_DTB.';host='.self::DEFAULT_SQL_HOST,self::DEFAULT_SQL_USER ,self::DEFAULT_SQL_PASS);
        } else {
            $this->PDOInstance = new PDO('mysql:dbname='.self::DEFAULT_SQL_DTB.';host='.self::DEFAULT_SQL_HOST.';port='.self::DEFAULT_SQL_PORT
                ,self::DEFAULT_SQL_USER ,self::DEFAULT_SQL_PASS);
        }

    }

    /**
     * Crée et retourne l'objet SPDO
     *
     * @access public
     * @static
     * @param void
     * @return SPDO $instance
     */
    public static function getInstance()
    {
        if(is_null(self::$instance))
        {
            self::$instance = new SPDO();
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
}