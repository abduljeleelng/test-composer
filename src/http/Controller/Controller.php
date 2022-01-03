<?php
namespace TestApp\http\Controller;

class Controller {

    public function __construct(){
        echo "Enter Base controller ";
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo "<br />";
        echo "destruct basic contoller function called !!";
    }

    public function parent_Service(){
        echo "Parent services ------------------";
    }
}