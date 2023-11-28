<?php 
class rraiModel
{
    private $dsn = "mysql:host=localhost;dbname=englishcrm";
    private $username = "root";
    private $password = "";
    public $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new PDO($this->dsn, $this->username, $this->password);
        } catch (PDOException $e) {
            echo " " . $e->getMessage();
        }
    }

    //Admin userid and password check
    public function agentLogin($email, $password)
    {
        $r = "";
        $sql = "SELECT * FROM users WHERE u_role = 'rrai'";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $row) {
            if ($row['u_username'] == $email && $row['u_password'] == $password) {
                $_SESSION["u_id"] = $row['u_id'];
                $_SESSION["u_username"] = $row['u_username'];
                $_SESSION["u_role"] = $row['u_role'];
                $_SESSION['u_displayname'] = $row['u_displayname'];
                $_SESSION['u_nicename'] = $row['u_nicename'];
                $r = true;
               
            } else {
                $r = false;
            }
        }
        return $r;
    }

    function addUsers($data){
        $sql = "INSERT INTO users (u_username, u_email, u_password, u_nicename, u_role, u_displayname, u_registered, u_add_on) VALUES (:u_username, :u_email, :u_password, :u_nicename, :u_role, :u_displayname, :u_registered, :u_add_on)";
        $this->pdo->prepare($sql)->execute($data);
        return true;     
    }
    
    
    
    function updateUser($data){
        $u_username = $data['u_username'];
        $u_password = $data['u_password'];
        $u_role = $data['u_role'];
        $sql = "UPDATE users SET u_password=? WHERE u_username=? AND u_role=?";
        $stmt= $this->pdo->prepare($sql);
        $stmt->execute([$u_password ,$u_username, $u_role]);
        return true;     
    }

    function showallData(){
        $stmt = $this->pdo->prepare("SELECT * FROM leads");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    
    function allusers(){
        $stmt = $this->pdo->prepare("SELECT * FROM users");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}

?>