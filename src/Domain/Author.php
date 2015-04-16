<?php

namespace MyBooks\Domain;

class Author
{
	/**
	 * Author id.
	 *
	 * @var integer
	 */
	private $id;

    /**
     * Author first name.
     *
     * @var string
     */
    private $firstname;

    /**
     * Author last name.
     *
     * @var string
     */
    private $lastname;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getFirstname() {
        return $this->firstname;
    }

    public function setFirstname($firstname) {
        $this->firstname = $firstname;
    }

    public function getLastname() {
        return $this->lastname;
    }

    public function setLastname($lastname) {
        $this->lastname = $lastname;
    }
}