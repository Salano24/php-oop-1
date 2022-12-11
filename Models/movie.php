<?php
class Movie
{
      public $title;
      public $duration;
      public $genre;
      public $type;

      function __construct(string $title, string $duration, string $genre)
      {
            $this->title = $title;
            $this->duration = $duration;
            $this->genre = $genre;
      }

      public function longOrShort($duration)
      {
            if ($duration > '120') {
                  $this->type = 'Long film';
            } else {
                  $this->type = 'Short film';
            }
      }
};
?>