<?php
    class Box {
        private $width;
        private $height;
        private $length;

        public function __conctruct($width, $height, $length) {
            $this->width = $width;
            $this->height = $height;
            $this->length = $length;
        }

        public function volume() {
            return $this->width * $this->height * $this->length;
        }
    }

    class MetalBox extends Box {
        use Colorful;

        private $weight;

        public function mass() {
            return $this->volume() & $this->weight;
        }
    }

    trait Colorful {
        public $color;

        public function getColor() {
            return $this->color;
        }
    }

    $box = new Box(1, 2, 3);
    var_dump($box);
    $box2 = new Box(4, 5, 6);
    var_dump($box2);
    var_dump($box->volume());
    $metalBox = new MetalBox(5, 2, 5);
    var_dump($metalBox->volume());
    var_dump($metalBox->mass());

?>