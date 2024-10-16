<?php
//namespace Phppot;

//use Phppot\DataSource;

class Member
{

    private $dbConn;

    private $ds;

    function __construct()
    {
        require_once __DIR__ . "/DataSource.php";
        $this->ds = new DataSource();
    }

    function getMemberById($memberID)
    {
        $query = "SELECT * FROM userstable WHERE ID = ?";
        $paramType = "i";
        $paramArray = array(
            $memberID
        );
        $memberResult = $this->ds->select($query, $paramType, $paramArray);

        return $memberResult;
    }

    function processLogin($username)
    {
        $query = "SELECT * FROM userstable WHERE Username = ?";
        $paramType = "s";
        $paramArray = array(
            $username
        );
        $memberResult = $this->ds->select($query, $paramType, $paramArray);
        return $memberResult;
    }

    function loginMember()
    {
        $memberResult = $this->processLogin($_POST["Username"]);
        $loginPassword = 0;
        if (! empty($memberResult)) {
            $password = $_POST["Password"];
            $usersPassword = $memberResult[0]["Password"];
            if ($password == $usersPassword) {
                $loginPassword = 1;
            }
            if ($loginPassword == 1) {
                $_SESSION["active_user"] = $memberResult[0]["ID"];
                return $memberResult;
            }
        }
    }
}
?>