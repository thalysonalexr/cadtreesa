<?php
/**
 * Class responsible for mysql connection with PDO object and declarations
 *
 * @author Thalyson Alexandre Rodrigues de Sousa <tha.motog@gmail.com>
 * @link http://github.com/thalysonrodrigues
 *
 * @version 1.0
 * @package classes
 */

namespace app\classes;


class Database
{
    /**
     * @var string $database  Type database 
     * @var string $hostname  Connecting host
     * @var string $port      Port host
     * @var string $dbName    Name database
     * @var string $username  Username database
     * @var string $password  Password database
     * @var string $charset   Unicode characters
     */
    private static $database = APP_ENVIRONMENT["DB"]["DB_CONNECTION"];
    private static $hostname = APP_ENVIRONMENT["DB"]["DB_HOSTNAME"];
    private static $port     = APP_ENVIRONMENT["DB"]["DB_PORT"];
    private static $dbName   = APP_ENVIRONMENT["DB"]["DB_DBNAME"];
    private static $username = APP_ENVIRONMENT["DB"]["DB_USERNAME"];
    private static $password = APP_ENVIRONMENT["DB"]["DB_PASSWORD"];
    private static $charset  = APP_ENVIRONMENT["DB"]["DB_CHARSET"];

    /**
     * Connects to the mysql database
     *
     * @see \PDO
     *
     * @return \PDO object Connection
     */
    private static function connect() {
        $pdo = new \PDO(self::$database . ":host=" . self::$hostname . ";port=" . self::$port . ";dbname=" . self::$dbName . ";charset=" . self::$charset, self::$username, self::$password);
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);
        return $pdo;
    }

    /**
     * Runs statements from a PDO connection
     *
     * @param string $query   Query statement to be executed
     * @param array  $params  Parameters to be linker to query
     *
     * @return array Data returned from the query
     */
    public static function query($query, $params = []) {
        $statement = self::connect()->prepare($query);
        $statement->execute($params);

        if (explode(' ', $query)[0] == 'SELECT') {
            $data = $statement->fetchAll();
            return $data;
        }
    }
}
