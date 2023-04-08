<?php

class controller
{
    public function view($name)
    {
        include('./view/' . $name . '.php');
    }
}

?>