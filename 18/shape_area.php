<!DOCTYPE html>
<html>
<head>
  <title>Shape Area Calculator</title>
</head>
<body>
  <h2>Choose a Shape</h2>
  <form method="post">
    <input type="radio" name="shape" value="triangle" required> Triangle<br>
    <input type="radio" name="shape" value="square"> Square<br>
    <input type="radio" name="shape" value="circle"> Circle<br><br>

    Enter values:<br>
    Base / Side / Radius: <input type="number" name="val1" step="any" required><br>
    Height (for Triangle only): <input type="number" name="val2" step="any"><br><br>

    <input type="submit" name="submit" value="Calculate Area">
  </form>

  <?php
  class Shape {
    public function area() {
      return 0;
    }
  }

  class Triangle extends Shape {
    public $base, $height;
    function __construct($b, $h) {
      $this->base = $b;
      $this->height = $h;
    }
    public function area() {
      return 0.5 * $this->base * $this->height;
    }
  }

  class Square extends Shape {
    public $side;
    function __construct($s) {
      $this->side = $s;
    }
    public function area() {
      return $this->side * $this->side;
    }
  }

  class Circle extends Shape {
    public $radius;
    function __construct($r) {
      $this->radius = $r;
    }
    public function area() {
      return 3.14 * $this->radius * $this->radius;
    }
  }

  if (isset($_POST['submit'])) {
    $shape = $_POST['shape'];
    $val1 = $_POST['val1'];
    $val2 = $_POST['val2'];

    if ($shape == "triangle") {
      $triangle = new Triangle($val1, $val2);
      echo "<h3>Area of Triangle: " . $triangle->area() . "</h3>";
    } elseif ($shape == "square") {
      $square = new Square($val1);
      echo "<h3>Area of Square: " . $square->area() . "</h3>";
    } elseif ($shape == "circle") {
      $circle = new Circle($val1);
      echo "<h3>Area of Circle: " . $circle->area() . "</h3>";
    }
  }
  ?>
</body>
</html>
