<?php

class Item {
	public function __construct($transformer)
	{
		var_dump($transformer);
	}
}

var_dump(new Item(new class {
	public function transform()
	{
		return [];
	}
}));