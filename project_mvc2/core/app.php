<?php

class app
{
    private $param = 'home';

    public function __construct()
    {
        include('./view/template/navigation.php');
        include('./view/template/header.php');
        $this->parseurl();
        include('./view/template/footer.php');
    }

    public function parseurl()
    {
        if (isset($_GET['page'])) {
            $this->param = $_GET['page'];
        }

        if (file_exists('./controller/' . $this->param . '.php')) {

            require('./controller/' . $this->param . '.php');
            $obj = new $this->param();

        } else {

            require('./controller/home.php');
            $obj = new home();

        }
    }

}

?>