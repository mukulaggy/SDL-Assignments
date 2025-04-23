<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Area Calculator</h1>
    <form method="post">
        <input type="radio" name="shape" value="triangle">traingle <br>
        <input type="radio" name="shape" value="square">square<br>
        <input type="radio" name="shape" value="circle">circle<br>


       <h2>Enter Value:</h2>
        Base/side/radius: <input type="number" name="val1"> <br>
        Height(only for triangle): <input type="number" name="val2"> <br>
        <input type="submit" value="calculatearea" name="submit">
    </form>

    <?php
    Class Shape{
        public function area(){
            return 0;
        }
    }
    Class Triangle extends Shape{
        public $base,$height;
        function __construct($base,$height){
            $this->base=$base;
            $this->height=$height;
        }

        public function area(){
            return 0.5*$this->base*$this->height;
        }
    };
    Class Circle extends Shape{
        public $radius;
        function __construct($radius){
            $this->radius=$radius;
        }

        public function area(){
            return 3.14*$this->radius*$this->radius;
        }
    };
    Class Square extends Shape{
        public $side;
        function __construct($side){
            $this->side=$side;
        }

        public function area(){
            return $this->side*$this->side;
        }
    };

    if(isset($_POST["submit"])){
        $shape=$_POST['shape'];
        $val1=$_POST['val1'];
        $val2=$_POST['val2'];
        if($shape=='triangle'){
            $triangle=new Triangle($val1,$val2);
            echo "Area of Triangle :".$triangle->area();
        }
        else if($shape=='square'){
            $square=new Square($val1);
            echo "Area of square :".$square->area();
        }
        else if($shape=='circle'){
            $circle=new Circle($val1);
            echo"area of circle:".$circle->area();
        }

    }
    ?>

</body>
</html>