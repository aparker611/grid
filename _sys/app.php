<?php
  //create App object
  class App {
      
    private $body_class = "home";

    function __construct( $class ) {
        $this->bodyclass = $class;
    }
      //return $body_class
    function getBodyClass() {
        return $this->bodyclass;
    }
// Set body class
    function setBodyClass($class) {
        // check if $class is empty or not a string
        // if it is not a string or is empty then return error message
        // Print $class variable out
        if(!empty($class) && is_string($class) ) {
            $this->getBodyClass = $class;
        } else {
            return "ERROR: class is empty or not a string. | Class: " . $class;
        }
    }

}

?>