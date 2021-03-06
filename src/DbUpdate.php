<?php
/**
 * User: kinney
 * Date: 2017/10/20
 * Time: 18:15
 */

namespace Arikin;

class DbUpdate extends \PDO
{
    public function __construct($host, $db, $username, $password, $charset = 'utf8', $timeout = 300, $options = [])
    {
        $dsn = sprintf("mysql:host=%s;dbname=%s;charset=%s", $host, $db, $charset);
        $default_options = [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            \PDO::ATTR_EMULATE_PREPARES => \PDO::FETCH_ASSOC,
            \PDO::ATTR_EMULATE_PREPARES => FALSE,
            \PDO::ATTR_TIMEOUT => $timeout,
        ];
        $options = array_replace($default_options, $options);
        parent::__construct($dsn, $username, $password, $options);
    }
}