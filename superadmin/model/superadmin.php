<?php
date_default_timezone_set('America/Los_Angeles');
$mytime = date(time());
class superadminModel{
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


    //SuperAdmin userid and password check
    public function agentLogin($email, $password){
        $r = "";
        $sql = "SELECT * FROM users WHERE u_role = 'superadmin'";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($result as $row){

            if($row['u_username']==$email && $row['u_password']==$password){
                $_SESSION["superadmin_u_id"] = $row['u_id'];
                $_SESSION["superadmin_u_username"] = $row['u_username'];
                $_SESSION["superadmin_u_role"] = $row['u_role'];
                $_SESSION['superadmin_u_displayname'] = $row['u_displayname'];
                $_SESSION['superadmin_u_nicename'] = $row['u_nicename'];

                $r = true;
            }else{
                $r = false;
            }
        }
        return $r;
    }




    function viewUser($id){
        $data = array();
        $sql = "SELECT * FROM users WHERE u_id= $id LIMIT 1";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($result as $row){
            $data[] = $row;
        }
        return $data;
    }

    function updateUser($data){
        $sql = "UPDATE users SET u_password=:u_password WHERE u_id=:u_id";
        $stmt= $this->pdo->prepare($sql);
        $stmt->execute($data);
        return true;
    }


    function insertData($data){
        $sql = "INSERT INTO leads(l_confirmation_no, l_service, l_booking_type, l_booking_status, l_fare_type, l_class, l_airline, l_p_type, l_p_first_name, l_p_middle_name, l_p_last_name, l_p_dob, l_contact_name, l_phone_type, l_phone_no, l_alt_phone_no, l_email, l_alt_email, l_address, l_passenger_type, l_passenger_no_of, l_passenger_net_amount, l_mco, l_gross, l_a_micellaneous, l_a_net_amount, l_a_mco, l_a_gross, l_p_authorization, l_p_payment_method, l_p_card_holder_name, l_p_card_holder_phone_no, l_p_transaction_type, l_p_card_no, l_p_card_mm, l_p_card_yy, l_p_card_cvv, l_p_street_address, l_p_city, l_p_state, l_p_zip_code, l_comments, l_submitted_by, l_submitted_from, l_add_on) VALUES  (:l_confirmation_no, :l_service, :l_booking_type, :l_booking_status, :l_fare_type, :l_class, :l_airline, :l_p_type, :l_p_first_name, :l_p_middle_name, :l_p_last_name, :l_p_dob, :l_contact_name, :l_phone_type, :l_phone_no, :l_alt_phone_no, :l_email, :l_alt_email, :l_address, :l_passenger_type, :l_passenger_no_of, :l_passenger_net_amount, :l_mco, :l_gross, :l_a_micellaneous, :l_a_net_amount, :l_a_mco, :l_a_gross, :l_p_authorization, :l_p_payment_method, :l_p_card_holder_name, :l_p_card_holder_phone_no, :l_p_transaction_type, :l_p_card_no, :l_p_card_mm, :l_p_card_yy, :l_p_card_cvv, :l_p_street_address, :l_p_city, :l_p_state, :l_p_zip_code, :l_comments, :l_submitted_by, :l_submitted_from, :l_add_on)";
        $this->pdo->prepare($sql)->execute($data);
        return true; 
    }

    function updateData($allData){
        $count = $this->pdo->prepare("update leads set l_confirmation_no =?, l_service=?, l_booking_type=?, l_booking_status=?, l_reason=?, l_fare_type=?, l_class=?, l_airline=?, l_p_type=?, l_p_first_name=?, l_p_middle_name=?, l_p_last_name=?, l_p_dob=?, l_contact_name=?, l_phone_type=?, l_phone_no=?, l_alt_phone_no=?, l_email=?, l_alt_email=?, l_address=?, l_passenger_type=?, l_passenger_no_of=?, l_passenger_net_amount=?, l_mco=?, l_gross=?, l_a_micellaneous=?, l_a_net_amount=?, l_a_mco=?, l_a_gross=?, l_p_authorization=?, l_p_payment_method=?, l_p_card_holder_name=?, l_p_card_holder_phone_no=?, l_p_transaction_type=?, l_p_card_no=?, l_p_card_mm=? ,l_p_card_yy=? ,l_p_card_cvv=? ,l_p_street_address=? ,l_p_city=? ,l_p_state=? , l_p_zip_code=? ,l_comments=? where l_id=?");

        try {
            $count->execute([$allData['l_confirmation_no'], $allData['l_service'], $allData['l_booking_type'],$allData['l_booking_status'], $allData['l_reason'], $allData['l_fare_type'], $allData['l_class'], $allData['l_airline'], $allData['l_p_type'], $allData['l_p_first_name'], $allData['l_p_middle_name'], $allData['l_p_last_name'], $allData['l_p_dob'], $allData['l_contact_name'], $allData['l_phone_type'], $allData['l_phone_no'], $allData['l_alt_phone_no'], $allData['l_email'], $allData['l_alt_email'], $allData['l_address'], $allData['l_passenger_type'], $allData['l_passenger_no_of'],$allData['l_passenger_net_amount'],$allData['l_mco'], $allData['l_gross'], $allData['l_a_micellaneous'], $allData['l_a_net_amount'],  $allData['l_a_mco'],$allData['l_a_gross'], $allData['l_p_authorization'], $allData['l_p_payment_method'], $allData['l_p_card_holder_name'], $allData['l_p_card_holder_phone_no'], $allData['l_p_transaction_type'],  $allData['l_p_card_no'], $allData['l_p_card_mm'], $allData['l_p_card_yy'], $allData['l_p_card_cvv'], $allData['l_p_street_address'], $allData['l_p_city'], $allData['l_p_state'], $allData['l_p_zip_code'], $allData['l_comments'], $allData['l_id']]);
        } catch (PDOException $e) {
            echo ''.$e->getMessage();
        }
        return true;
    }


    function seach($confirmation, $l_p_first_name, $last_name, $l_phone_no, $l_id, $l_email)
    {
        // $stmt = $this->pdo->prepare("SELECT * FROM leads where l_p_last_name = ? OR l_confirmation_no = ? OR l_p_first_name = ? OR l_phone_no = ? OR l_id = ? OR l_email = ? LIMIT 1");
        // $stmt->execute(array("%$last_name%", $confirmation, $l_p_first_name, $l_phone_no, $l_id, $l_email));
        // $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // return $result;

        $result = null;
        if ($last_name != NULL) {
            $stmt = $this->pdo->prepare("SELECT * FROM leads where l_p_last_name LIKE ? LIMIT 1");
            $stmt->execute(array("%$last_name%"));
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
        if ($confirmation != Null) {
            $stmt = $this->pdo->prepare("SELECT * FROM leads where l_confirmation_no = ? LIMIT 1");
            $stmt->execute([$confirmation]);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
        if ($l_p_first_name != null) {
            $stmt = $this->pdo->prepare("SELECT * FROM leads where l_p_first_name = ? LIMIT 1");
            $stmt->execute([$l_p_first_name]);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
        if ($l_phone_no != null) {
            $stmt = $this->pdo->prepare("SELECT * FROM leads where l_phone_no = ? LIMIT 1");
            $stmt->execute([$l_phone_no]);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
        if ($l_id != null) {
            $stmt = $this->pdo->prepare("SELECT * FROM leads where l_id = ? LIMIT 1");
            $stmt->execute([$l_id]);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
        if ($l_email != null) {
            $stmt = $this->pdo->prepare("SELECT * FROM leads where l_email = ? LIMIT 1");
            $stmt->execute([$l_email]);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
       
        return $result;
    }



   

    function getCommentLast($c_lead_id)
    {
        $commentData = array('c_text' => '');
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM comments where c_lead_id = ? ORDER BY c_id DESC LIMIT 1");
            $stmt->execute([$c_lead_id]);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($result as $row){
                $commentData = $row;

            }
            return $commentData;
        } catch (PDOException $e) {
            echo ''.$e->getMessage();
            //throw $th;
        }
    }

    function getContentItinerary($id){
        $stmt = $this->pdo->prepare("SELECT * FROM leads where l_confirmation_no = ? LIMIT 1");
        $stmt->execute([$id]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function saveComment($c_text, $c_username, $c_lead_id)
    {
        // $sql = 'UPDATE comments SET c_text = ?, c_username= ?, c_lead_id = ? WHERE c_lead_id = ? AND c_id=?';
        // $this->pdo->prepare($sql)->execute([$a_logout, $username, $a_date]);
        $sql = 'INSERT INTO comments (c_text, c_username, c_lead_id) VALUE (?,?,?)';
        $this->pdo->prepare($sql)->execute([$c_text, $c_username, $c_lead_id]);
        // $this->pdo->prepare($sql)->execute([$c_text, $c_username, $c_lead_id, $c_lead_id, $c_id]);
    }

    function getComment($c_lead_id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM comments where c_lead_id = ? ");
        $stmt->execute([$c_lead_id]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }


    function quickSeach($confirmation, $last_name){
       if($last_name != NULL){
            $stmt = $this->pdo->prepare("SELECT * FROM leads where l_p_last_name LIKE ? LIMIT 1");
            $stmt->execute(array("%$last_name%"));
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
       }
       if($confirmation != Null){
        $stmt = $this->pdo->prepare("SELECT * FROM leads where l_confirmation_no = ? LIMIT 1");
        $stmt->execute([$confirmation]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
       }
        $stmt = $this->pdo->query("SELECT * FROM leads LIMIT 1");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result; 
    }

    function GetDdata(){
        sleep(0);
    }


    function dataView($id){
        $stmt = $this->pdo->prepare("SELECT * FROM leads where l_confirmation_no = ? LIMIT 1");
        $stmt->execute([$id]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
       
     }


    function dataViewEdit($id){
        $stmt = $this->pdo->prepare("SELECT * FROM leads where l_id = ? LIMIT 1");
        $stmt->execute([$id]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;

    }




    function setCommentByCondition($c_username, $confirmation)
    {
        $sql = 'INSERT INTO comments (c_username, c_lead_id) VALUE (?,?)';
        $this->pdo->prepare($sql)->execute([$c_username, $confirmation]);
    }
    

    function showallDataTop100(){
        $stmt = $this->pdo->prepare("SELECT * FROM leads ORDER BY l_id DESC LIMIT 100 ");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    
    function showallDataTopHigh(){
        $stmt = $this->pdo->prepare("SELECT * FROM leads ORDER BY l_a_mco DESC LIMIT 5");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }



    function showallData(){
        $stmt = $this->pdo->prepare("SELECT * FROM leads ORDER BY l_id DESC");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }


    function showAllNotes(){
        $stmt = $this->pdo->prepare("SELECT * FROM notes ");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }


    function showTodayAllData(){
        $stmt = $this->pdo->prepare("SELECT * FROM leads");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
        // $stmt = $this->pdo->prepare("SELECT * FROM leads WHERE l_submitted_by = ? ,LIMIT 25");
        // $stmt->execute([$u_username]);
        // $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // return $result; 

    }




    function leadCount(){


//         SELECT COUNT(ProductID)
// FROM Products;
        $stmt = $this->pdo->prepare("SELECT COUNT(u_id) FROM leads");
        // $stmt->execute();
        $count = $stmt->rowCount();
        return $count;

    }


}
