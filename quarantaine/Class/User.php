<?php
class User
{
    private $_userId;
    private $_firstName;
    private $_lastName;
    private $_birthDate;
    private $_email;
    private $_password;
    private $_address;
    private $_type;
    private $_insuranceNumber;
//    public function hydrate(array $data)
//    {
//        foreach ($data as $key => $value)
//        {
//            // On récupère le nom du setter correspondant à l'attribut.
//            $method = 'set'.ucfirst($key);
//
//            // Si le setter correspondant existe.
//            if (method_exists($this, $method))
//            {
//                // On appelle le setter.
//                $this->$method($value);
//            }
//        }
//    }
}