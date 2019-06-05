<?php 

class User
{
	protected $age;

	public function age() : ?int
	{
		 return $this->age;
	}
}

$age = (new User)->age();

var_dump($age);

class User2
{

	public function subscribe(?callable $callback) : void
	{
		var_dump('subscribe');
	}
}

(new User2)->subscribe(null);