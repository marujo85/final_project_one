<?php

class User
{
	private $id;
	private $name;
	private $email;
	private $alias;
	private $password;



	public function __construct($name, $email, $alias, $password)
	{
		$this->id = uniqid();
		$this->name = $name;
		$this->email = $email;
		$this->alias = $alias;
		$this->password = $password;
	}



	public function getId()
	{
		return $this->id;
	}



	public function getAlias()
	{
		return $this->alias;
	}

	public static function findUserById($id)
{
	global $usersData;
    foreach ($usersData as $user) {
        if ($user->getId() === $id) {
            return $user;
        }
    }
    return null;
}
}
