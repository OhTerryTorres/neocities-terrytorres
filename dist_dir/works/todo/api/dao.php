<?php
class Dao {
var $dbhost = null;
var $dbuser = null;
var $dbpass = null;
var $conn = null;
var $dbname = null;
var $result = null;

function __construct() {
	$this->dbhost = Conn::$dbhost;
	$this->dbuser = Conn::$dbuser;
	$this->dbpass = Conn::$dbpass;
	$this->dbname = Conn::$dbname;
}

public function openConnection() {
	$this->conn = new mysqli($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
	if (mysqli_connect_errno())
		echo new Exception("Could not establish connection with database");
}

public function getConnection() {
	return $this->conn;
}

public function closeConnection() {
	if ($this->conn != null)
		$this->conn->close();
}

public function getUserDetails($username) {
	$returnValue = array();
	$sql = "select * from _users where username ='{$username}'";

	$result = $this->conn->query($sql);
	if ($result != null && (mysqli_num_rows($result) >= 1)) {
		$row = $result->fetch_array(MYSQLI_ASSOC);
		if (!empty($row)) {
			$returnValue = $row;
		}
	}
	return $returnValue;
}

public function getUserDetailsWithPassword($username, $password) {
	$returnValue = array();
	$sql = "select id, activated from _users where username='{$username}' and password='{$password}'";

	$result = $this->conn->query($sql);
	if ($result != null && (mysqli_num_rows($result) >= 1)) {
		$row = $result->fetch_array(MYSQLI_ASSOC);
		if (!empty($row)) {
			$returnValue = $row;
		}
	}
	return $returnValue;
}

public function registerUser($username, $email, $password) {
	$authentication = $this->generateRandomString();
	$this->sendActivationEmail($username, $email, $authentication);
	$sql = "insert into _users set username='{$username}', email='{$email}', password='{$password}', authentication='{$authentication}'";
	$result = $this->conn->query($sql);

	return $result;
}

public function createUserTable($username) {
	$sql = "CREATE TABLE {$username} LIKE _template";
	$result = $this->conn->query($sql);
}
public function createTokenTable($username) {
	$sql = "CREATE TABLE {$username}_tokens LIKE _template_tokens";
	$result = $this->conn->query($sql);
}
public function addTokenForUser($deviceTokenString, $username) {
    $sql = "INSERT INTO {$username}_tokens (deviceTokenString)
    SELECT * FROM (SELECT '{$deviceTokenString}') AS tmp
    WHERE NOT EXISTS (
    SELECT deviceTokenString FROM {$username}_tokens WHERE deviceTokenString = '{$deviceTokenString}') LIMIT 1;";
    $result = $this->conn->query($sql);
    
    return $result;
}
public function getTokensForUser($username) {
    $sql = "SELECT * FROM {$username}_tokens";
    $result = $this->conn->query($sql);
			
	$records = array();
			
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $records[] = $row;
        }
    }

	return $records;
}
public function markTokenAsNotified($token, $username) {
    $sql = "UPDATE {$username}_tokens SET notified=1 WHERE deviceTokenString = '{$token["deviceTokenString"]}'";
    $result = $this->conn->query($sql);
    return $result;
}
    
public function markTokenAsUnnotified($deviceTokenString, $username) {
    $sql = "UPDATE {$username}_tokens SET notified=0 WHERE deviceTokenString = '{$deviceTokenString}'";
    $result = $this->conn->query($sql);
    return $result;
}

function generateRandomString($length = 20) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function sendActivationEmail($username, $email, $authentication) {
    // The message
    $message = "Hello!\r\nActivate your ToDo account by following this link:\r\nhttp://www.terry-torres.com/todo/api/activate.php?username={$username}&authentication={$authentication}";

    // In case any of our lines are larger than 70 characters, we should use wordwrap()
    $message = wordwrap($message, 70, "\r\n");
    
    $headers = "From: ToDo";

    // Send
    mail($email, 'Activate ' . $username . '\'s ToDo account', $message, $headers);
}

public function authenticationCodeForUser($username) {
    $returnValue = array();
    $sql = "SELECT authentication FROM _users WHERE username='{$username}'";
    $result = $this->conn->query($sql);
    if ($result != null && (mysqli_num_rows($result) >= 1)) {
		$row = $result->fetch_array(MYSQLI_ASSOC);
		if (!empty($row)) {
			$returnValue = $row;
		}
	}
    return $returnValue["authentication"];
}

public function activateUser($username) {
    $sql = "UPDATE _users SET activated=1 WHERE username='{$username}'";
    $result = $this->conn->query($sql);
    return $result;
}

}
?>