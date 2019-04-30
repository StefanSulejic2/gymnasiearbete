<?php
class users
{
    public static function verify_login($username, $password, PDO $dbh, &$errorinfo)
    {
        $sql = "SELECT password FROM ntisitedb WHERE username = :username";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(":username", $username);
        $stmt->execute();
        $hash = $stmt->fetchColumn();
        if ( empty($hash) ){
            $errorinfo = "Felaktigt användarnamn";
            echo $errorinfo;
            return false;
        }
        if ( !password_verify($password, $hash) ) {
            $errorinfo = "Felaktigt lösenord";
            echo $errorinfo;
            return false;
        }
        return true;
    }
}