<?php

class Model
{
    public $error;
    public $info;
    private $mysqli;
    private $menuitems;
    private $courses;

    function __construct() {
        $this->mysqli = new mysqli("localhost", "root", "", "webtest");
        if ($this->mysqli->connect_errno) {
            $this->error = "Failed to connect to MySQL: (" . $this->mysqli->connect_errno . ") " . $this->mysqli->connect_error;
        }
        $this->info =  $this->mysqli->host_info;
    }

    function loadMenu(){
        $this->menuitems = [];
        $res = $this->mysqli->query("SELECT * FROM menuitems ORDER BY id ASC");
        while ($row = $res->fetch_assoc()) {
            $this->menuitems[] =  $row;
        }
    }

    function loadCourses(){
        $this->courses = [];
        $res = $this->mysqli->query("SELECT * FROM courses ORDER BY id ASC");
        while ($row = $res->fetch_assoc()) {
            $this->courses[] = $row;
        }
    }

    function getMenu() {
        $items = $this->menuitems;
        foreach ($items as $i) {
            $lista[] = array('name' => $i['name'],'url' => $i['url']);
        }
        return $lista;
    }

    function getCourses() {
        $items = $this->courses;
        foreach($items as $i) {
            $courses[] = array('name' => $i['name'],'desc' => $i['desc']);
        }
        return $courses;
    }

    function addContact($name, $email, $subject, $comment) {
        $query = "INSERT INTO Contacts VALUES (NULL, '$name', '$email', '$subject', '$comment')";
        $this->mysqli->query($query);
    }
}
?>

