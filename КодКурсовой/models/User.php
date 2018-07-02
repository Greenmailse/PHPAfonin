<?php

  class User
  {

  public static function register(){

  }

  public static function checkPassword($password){
    if (strlen($password) >= 6){
      return true;
    }
    return false;
  }
  public static function checkName($name){
    if (filter_var($name, FILTER_VALIDATE_EMAIL)){
      return true;
    }
    return false;
  }

  public static function checkEmailExists($name)
  {
    $db = Db::getConnection();

    $sql = 'SELECT COUNT(*) FROM user WHERE name = :name';

    $result = $db->prepare($sql);
    $result->blindParam(':name',$name,PDO::PARAM_STR);
    $result->execute();

    if($result->fetchCoiumn()){
      return true;
    }
      return false;
  }
  }
?>
