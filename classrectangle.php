<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rectangle</title>
</head>
<body>
<?php
    class Rectangle{
        public $width;
        public $height;
//        public function __construct($width, $height){
//            $this->width = $width;
//            $this->height = $height;
//        }
        public function set_catangle($new_width, $new_height){
            $this->height = $new_height;
            $this->width =$new_width;
        }
        public function s_catangle(){
            return $this->width * $this->height;
        }
        public function c_catangle(){
            return ($this->width + $this->height)*2;
        }
        public function display(){
            return "Rectangle{" . "width=" . $this->width . ", height=" . $this->height . "}";
        }
    }
    $rectangle = new Rectangle();
    $rectangle->set_catangle(12,10);
    echo $rectangle->s_catangle();
    echo $rectangle->display();
?>
</body>
</html>