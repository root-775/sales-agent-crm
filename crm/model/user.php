<?php
date_default_timezone_set('America/Los_Angeles');
$mytime = date(time());
class userModel
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


    function insertData($data, $commentData)
    {
        $sql = "INSERT INTO leads(l_confirmation_no, l_service, l_booking_type, l_booking_status, l_fare_type, l_class, l_airline, l_p_type, l_p_first_name, l_p_middle_name, l_p_last_name, l_p_dob, l_contact_name, l_phone_type, l_phone_no, l_alt_phone_no, l_email, l_alt_email, l_address, l_passenger_type, l_passenger_no_of, l_passenger_net_amount, l_mco, l_gross, l_a_micellaneous, l_a_net_amount, l_a_mco, l_a_gross, l_p_authorization, l_p_payment_method, l_p_card_holder_name, l_p_card_holder_phone_no, l_p_transaction_type, l_p_card_no, l_p_card_mm, l_p_card_yy, l_p_card_cvv, l_p_street_address, l_p_city, l_p_state, l_p_zip_code, l_comments, l_submitted_by, l_submitted_from, l_add_on) VALUES  (:l_confirmation_no, :l_service, :l_booking_type, :l_booking_status, :l_fare_type, :l_class, :l_airline, :l_p_type, :l_p_first_name, :l_p_middle_name, :l_p_last_name, :l_p_dob, :l_contact_name, :l_phone_type, :l_phone_no, :l_alt_phone_no, :l_email, :l_alt_email, :l_address, :l_passenger_type, :l_passenger_no_of, :l_passenger_net_amount, :l_mco, :l_gross, :l_a_micellaneous, :l_a_net_amount, :l_a_mco, :l_a_gross, :l_p_authorization, :l_p_payment_method, :l_p_card_holder_name, :l_p_card_holder_phone_no, :l_p_transaction_type, :l_p_card_no, :l_p_card_mm, :l_p_card_yy, :l_p_card_cvv, :l_p_street_address, :l_p_city, :l_p_state, :l_p_zip_code, :l_comments, :l_submitted_by, :l_submitted_from, :l_add_on)";
        $this->pdo->prepare($sql)->execute($data);

        $sql = 'INSERT INTO comments (c_username, c_lead_id, c_text) VALUE (?,?,?)';
        $this->pdo->prepare($sql)->execute([$data['l_submitted_by'],$data['l_confirmation_no'] , $commentData]);

        return true;
    }

    function quickSeach($confirmation, $last_name)
    {
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
        $stmt = $this->pdo->query("SELECT * FROM leads LIMIT 1");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
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
    function getContentItinerary($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM leads where l_confirmation_no = ? LIMIT 1");
        $stmt->execute([$id]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    function showallData($u_username)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM leads where l_submitted_by = ? ORDER BY l_id DESC LIMIT 5");
        $stmt->execute([$u_username]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
        // $stmt = $this->pdo->prepare("SELECT * FROM leads WHERE l_submitted_by = ? ,LIMIT 25");
        // $stmt->execute([$u_username]);
        // $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // return $result; 

    }
    //Admin userid and password check
    public function agentLogin($email, $password)
    {
        $r = "";
        $sql = "SELECT * FROM users WHERE u_role = 'agent'";
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
                $_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
                $this->userAttendance();
                $r = true;
            } else {
                $r = false;
            }
        }
        return $r;
    }


    function getComment($c_lead_id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM comments where c_lead_id = ? ");
        $stmt->execute([$c_lead_id]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }


    function saveComment($c_text, $c_username, $c_lead_id, $c_id)
    {
        $sql = 'UPDATE comments SET c_text = ?, c_username= ?, c_lead_id = ? WHERE  c_id=?';
        $this->pdo->prepare($sql)->execute([$c_text, $c_username, $c_lead_id, $c_id]);
    }

    function setCommentByCondition($c_username, $confirmation)
    {
        $sql = 'INSERT INTO comments (c_username, c_lead_id) VALUE (?,?)';
        $this->pdo->prepare($sql)->execute([$c_username, $confirmation]);

        $stmt = $this->pdo->prepare("SELECT * FROM comments where c_username = ? ORDER BY c_id DESC LIMIT 1 ");
        $stmt->execute([$c_username]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function getCommentByCondition($c_username)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM comments where c_username = ? ");
        $stmt->execute([$c_username]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }



    function userAttendance()
    {
        
            $username = $_SESSION['u_username'];
            $a_date = date('d-m-Y');
            // $a_login = date('d-m-Y h:i:s A');
            $a_add_on = date(time());
            $stmt = $this->pdo->prepare("SELECT * FROM attendance where a_username = ? AND a_date = ?");
            $stmt->execute([$username, $a_date]);
            $result = $stmt->fetchAll();

            if ($result[0]['a_login'] == '') {
                // $sql = 'INSERT INTO attendance (a_username, a_login, a_date, a_add_on) VALUE (?,?,?,?)';
                // $this->pdo->prepare($sql)->execute([$username, $a_login, $a_date, $a_add_on]);
                $sql = 'INSERT INTO attendance (a_username, a_date, a_add_on) VALUE (?,?,?)';
                $this->pdo->prepare($sql)->execute([$username, $a_date, $a_add_on]);
            }
    }

    function userAttendanceIn()
    {
        $username = $_SESSION['u_username'];
        $a_date = date('d-m-Y');
        $a_login = date('d-m-Y h:i:s A');
        $displayData = '<form action="" method="post">
                            <input type="hidden" name="attendance" value="attendanceOut">
                            <input type="submit" value="Logout" >
                        </form>';
        $stmt = $this->pdo->prepare("SELECT * FROM attendance where a_username = ? AND a_date = ?");
        $stmt->execute([$username, $a_date]);
        $result = $stmt->fetchAll();


        if ($result[0]['a_login'] == '') {
            echo '<form action="" method="post">
                    <input type="hidden" name="attendance" value="attendanceIn">
                    <input type="submit" value="Login" class="btn btn-success" >
                </form>';
        }
        if (isset($_POST['attendance']) && $_POST['attendance'] == 'attendanceIn') {
            echo '<script>alert("Thank You");</script>';
            $sql = 'UPDATE attendance SET a_login = ? WHERE a_username = ? AND a_date=?';
            $this->pdo->prepare($sql)->execute([$a_login, $username, $a_date]);
        }


        // $stmt = $this->pdo->prepare("SELECT * FROM attendance where a_username = ? AND a_date = ?");
        // $stmt->execute([$username, $a_date]);
        // $result = $stmt->fetchAll();

        if ($result[0]['a_login'] != '' && $result[0]['a_logout'] == '') {
            echo '<form action="" method="post">
                    <input type="hidden" name="attendance" value="attendanceOut">
                    <input type="submit" value="Logout" class="btn btn-primary">
                </form>';
        }
        if (isset($_POST['attendance']) && $_POST['attendance'] == 'attendanceOut') {
            $a_logout =  date('d-m-Y h:i:s A');
            echo '<script>alert("Thank You");</script>';
            $sql = 'UPDATE attendance SET a_logout = ? WHERE a_username = ? AND a_date=?';
            $this->pdo->prepare($sql)->execute([$a_logout, $username, $a_date]);
        }
    }


    function userAttendanceOut()
    {
       
        $username = $_SESSION['u_username'];
        $a_logout =  date('d-m-Y h:i:s A');
        $a_date = date('d-m-Y');


        $stmt = $this->pdo->prepare("SELECT * FROM attendance where a_username = ? AND a_date = ?");
        $stmt->execute([$username, $a_date]);
        $result = $stmt->fetchAll();

        if (isset($result[0]['a_logout']) && $result[0]['a_logout'] == '') {
            echo '<form action="" method="post">
                    <input type="hidden" name="attendanceOut" value="attendanceOut">
                    <input type="submit" value="Logout" >
                </form>';
        }
        if (isset($_POST['attendanceOut']) && $_POST['attendanceOut'] == 'attendanceOut') {
            echo '<script>alert("Thank You");</script>';
            $sql = 'UPDATE attendance SET a_logout = ? WHERE a_username = ? AND a_date=?';
            $this->pdo->prepare($sql)->execute([$a_logout, $username, $a_date]);
        }
    }





    function usersNote($u_name, $u_note)
    {
        // $data = '';
        // $notes = '';
        // $note_id = '';
        // $stmt = $this->pdo->prepare("SELECT * FROM notes where n_note = ? LIMIT 1");
        // $stmt->execute(array($u_note));
        // $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // foreach($result as $row){
        //     $notes = $row['n_note'];
        //     $note_id = $row['n_id'];
        // }
        // if ($notes != $u_note) {
        $sql = "INSERT INTO notes(n_username, n_note) VALUES  (?, ?)";
        $this->pdo->prepare($sql)->execute([$u_name, $u_note]);
        return 'Saved';
        // }
        // if ($notes == $u_note) {
        //     $sql = "UPDATE notes SET  n_note =? WHERE  n_note = ?)";
        //     $this->pdo->prepare($sql)->execute([$u_note, $note_id]);
        //     sleep(2);
        //     return "truesfsf";
        // }


    }


    function getNote($u)
    {
        $data = '';
        $stmt = $this->pdo->prepare("SELECT * FROM notes where n_username = ? LIMIT 10");
        $stmt->execute(array($u));
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($result as $row) {
            $data .= $row['n_note'] . '<br><hr>';
        }
        return $data;
    }




    function dataView($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM leads where l_confirmation_no = ? LIMIT 1");
        $stmt->execute([$id]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function userLoginInfo($u_username)
    {

        $stmt = $this->pdo->prepare("SELECT * FROM attendance where a_username = ? LIMIT 1");
        $stmt->execute([$u_username]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }


    function viewUser($id)
    {
        $data = array();
        $sql = "SELECT * FROM users WHERE u_id= $id LIMIT 1";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $row) {
            $data[] = $row;
        }
        return $data;
    }

    
    function GetDdata($n = 1)
    {
        sleep($n);
    }

    function updateUser($data)
    {
        $sql = "UPDATE users SET u_email=:u_email, u_password=:u_password, u_nicename=:u_nicename WHERE u_id=:u_id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($data);
        return true;
    }
}
