<?php


$books = [
	['The Martian', 'Andy Weir'],
	['Harry Potter', 'JK Rowling']
];

foreach ($books as [$title, $author]) {
	var_dump($title, $author);
}


$books2 = [
	['title' => 'The Martian', 'author' => 'Andy Weir'],
	['title' => 'Harry Potter', 'author' => 'JK Rowling']
];

foreach ($books2 as ['title' => $title2, 'author' => $author2]) {
	var_dump($title2, $author2);
}

