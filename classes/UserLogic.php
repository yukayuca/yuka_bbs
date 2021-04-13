<?php 

require_once '../db_config.php'; 

class UserLogic
{
    /** 
     * ユーザーを登録する
     * @param array $userData
     * @return bool $result
     */
    public static function createUser($userData)
    {
        $result = false;
        $sql = 'INSERT INTO users (name, email, password) VALUES (?, ?, ?)'; 
        
        // ユザーでーたを配列に入れる
        $arr = []; 
        $arr[] = $userData['username'];//name
        $arr[] = $userData['email']; //email
        $arr[] = password_hash($userData['password'], PASSWORD_DEFAULT);//password

        try {
        $stmt =  connect( )->prepare($sql); 
        $result = $stmt->execute($arr); 
        return $result; 
    } catch(\Exception $e) {
        return $result; 
    }
        
    }

}
?>