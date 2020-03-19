<?php

namespace App\Models;

require_once("../config/Config.php");
abstract class Conexao
{
    private static $host = CONNECT_DB["HOST"];
    private static $user = CONNECT_DB["USER"];
    private static $dbsa = CONNECT_DB["DBSA"];
    private static $pass = CONNECT_DB["PASS"];

    private static $connect = null;
    private static function Conectar()
    {
        try {
            if (self::$connect == null) :
                $dsn = "mysql:host=" . self::$host . ";dbname=" . self::$dbsa;
                $options = [\PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES UTF8"];
                self::$connect = new \PDO($dsn, self::$user, self::$pass, $options);
            endif;
        } catch (\Throwable $erro) {
            exit("Erro ao Tentar Conectar " . $erro->getMessage() . $erro->getLine() . $erro->getFile() . $erro->getCode());
        }

        self::$connect->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        return self::$connect;
    }
    public static function getConn()
    {
        return self::Conectar();
    }
}
