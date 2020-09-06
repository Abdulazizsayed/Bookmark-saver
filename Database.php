<?php
class Database
{
    public static function connect($host = 'localhost', $username = 'root', $password = '', $dbName = 'bookmark')
    {
        $options = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        );

        try {
            $link = new PDO("mysql:host=$host;dbname=$dbName", $username, $password, $options);
            $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Failed to connect " . $e->getMessage();
        }

        return $link;
    }

}
