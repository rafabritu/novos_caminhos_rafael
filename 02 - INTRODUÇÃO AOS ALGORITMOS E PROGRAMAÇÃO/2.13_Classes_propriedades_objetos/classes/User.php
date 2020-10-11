<?php

class User
{
    private $firstName;
    private $lastName;
    private $email;

    public function getFirstName()
    {
        return $this->firstName;
    }
    /**
     * Definir valor de firstName
     * 
     * @param string $firstName
     * @return object
     */

    public function setFirstName(string $firstName)
    {
        $this->firstName = filter_var($firstName, FILTER_SANITIZE_STRING);
        return $this;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName)
    {
        $this->lastName = filter_var($lastName, FILTER_SANITIZE_STRING);
    }

    public function getEmail()
    {
        return $this->email;
    }
    /**
     * Receber email e filtrar
     *
     * @param string $em
     * @return bool
     */
    public function setEmail(string $em)
    {
        if (filter_var($em, FILTER_VALIDATE_EMAIL)) {
            $this->email = $em;
            return true;
        } else {
            return false;
            $this->email = null;
        }
        return $this;
    }
}