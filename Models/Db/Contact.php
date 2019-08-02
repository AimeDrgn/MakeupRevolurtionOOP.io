<?php

namespace Models\Db;

use Core\AbstractDbConnection;
use Models\Contact as ContactModel;

class Contact extends AbstractDbConnection {
    
    public function saveContactForm(ContactModel $contact) : bool{
        $statement = "INSERT INTO `contact` (`name`, `phone`, `email`, `message`) VALUES (?, ?, ?, ?)";
        $stmt = $this->getPdo()->prepare($statement);
        $dbResult = $stmt->execute([
            $contact->getName(),
            $contact->getPhone(),
            $contact->getEmail(),
            $contact->getMessage()
        ]);
        if($dbResult){
            return true;
        }
        return false;
    }
}
