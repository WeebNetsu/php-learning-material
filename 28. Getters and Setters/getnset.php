<?php
	class Movie{
		private $title, $rating;

		function __construct($title, $rating){
			$this->title = $title;
			$this->rating = $rating;
		}

		function getTitle(){
			return $this->title;
		}

		function setTitle($title){
			$this->title = $title;
		}
	}

	$movie = new Movie("Lolali", 9.5);

	echo $movie->getTitle();
?>