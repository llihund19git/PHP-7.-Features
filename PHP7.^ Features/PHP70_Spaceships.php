<?php

class User {

	public $name;
	public $age;

	public function __construct($name, $age)
	{
		$this->name = $name;
		$this->age = $age;
	}

	public function name()
	{
		return $this->name;
	}

	public function age()
	{
		return $this->age;
	}
}

class UserCollection {

	public $users;


	public function __construct($users = [])
	{
		$this->users = $users;
	}

	public function users()
	{
		return $this->users;
	}

	public function sortBy($property)
	{
		usort($this->users, function($userOne, $userTwo) use ($property) {
			return strlen($userOne->$property()) <=> strlen($userTwo->$property());
		});
	}
}

$collection = new UserCollection([
	new User('Jeff Tui', 30),
	new User('Taylor Swift', 29),
	new User('Jane Mechado', 50),
	new User('Susie Bae', 10),
]);

$collection->sortBy('name');

var_dump($collection->users());