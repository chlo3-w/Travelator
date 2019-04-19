<?php 
    
    class Authentication {

    protected $db_connection;

    /**
     * Authentication constructor.
     */
    public function __construct() {
        $this->db_connection = new DB();
    }

    /**
     * Authentication process
     * @param $username
     * @param $password
     * @return bool
     */
    public function getAuthentication($username, $password) {
        $query = $this->db_connection->prepare('SELECT username, password FROM users WHERE username = :username');
        $query->bindParam(':username', $username, \PDO::PARAM_STR);
        $query->execute();
        //Password hashing tutorial : http://www.ibm.com/developerworks/library/wa-php-renewed_2/index.html
        //Password verify doc : http://php.net/manual/en/function.password-verify.php
        //Here, as the blog won't have a login, we won't use password_hash, only password verify to get the credentials from the database
        $queryRequest = $query->fetch(\PDO::FETCH_OBJ);
        if($queryRequest) {
            return password_verify($password, $queryRequest->password);
        }
    }

    /**
     * Changing password authentication
     * @param $password
     * @return bool
     */
    public function setAuthentication($password) {
        $query = $this->db_connection->prepare('UPDATE users SET password=:password LIMIT 1');
        $newPassword = password_hash($password , PASSWORD_DEFAULT);
        $query->bindParam(':password', $newPassword);
        return $query->execute();
    }

}