

<?php
function sum($n1,$n2){
    $sum = $n1+$n2;
    return $sum;
} 
function diff($n1,$n2){
    $diff = $n-$n2;
    return $diff;
} 
function prod($n1,$n2){
    $res = $n1*$n2;
    return $res;
} 
function quot($n1,$n2){
    $quot = $n1/$n2;
    return $quot;
} 
if (isset($_POST['cal'])){
            $n1 = $_POST['n1'];
            $op = $_POST['op'];
            $n2 = $_POST['n2'];

        switch($op){
            case '+':
                sum($n1,$n2);
                echo $res;
                break;
            case '-':
                $diff = $n1-$n2;
                return $diff;
                break;
            case '*':
                $pro = $n1*$n2;
                return $pro;
                break;
            case '/':
                $quot = $n1/$n2;
                return $quot;
                break;
        }
    }
  

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>simple calculator</title>
</head>
<body>
    <form style="text-align:center;" method="post">
    <u><h2> simple calculator</h2></u>
   
    <input type="number" name="n1">
    <select name="op" id="">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="number" name="n2">
    <p></p>
    
    <button type="submit" name="cal">calculate</button>
    <input type="text" value="<?php echo"$n1 $op $n2=" .calMath( $_POST['n1'],$_POST['op'],$_POST['n2']) ?>">
    <p></p>
  
    </form>
</body>
</html>
</body>
</html>