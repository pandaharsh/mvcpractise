<?php

include 'Book.php';

class Model
{

    public function getBookDetails()
    {

        return array(
            "Php" => new Book('php_book', 'Yashwant', 'coding__php'),
            "C++" => new Book("c++", "Kanekar", "coding__c++")
        );
    }
}

?>