<?php

/**
 * Description of PDOMySQL
 *
 * @author me
 */
class PDOUtils {
    public static function getMySQLConnection() {
        include 'config/Config.php';
        return new PDO($dsn, $user, $pass, $options);
    }
}
