<?php 
$result = "";
class calculator
{
    var $a;
    var $b;

    function checkopration($oprator)
    {
        switch($oprator)
        {
            case '+':
            return $this->a + $this->b;
            break;

            case '-':
            return $this->a - $this->b;
            break;

            case '*':
            return $this->a * $this->b;
            break;

            case '/':
            return $this->a / $this->b;
            break;

            default:
            return "Sorry No command found";
        }   
    }
    function getresult($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        return $this->checkopration($c);
    }
}

$cal = new calculator();
if(isset($_POST['submit']))
{   
    $result = $cal->getresult($_POST['n1'],$_POST['n2'],$_POST['op']);
}
?>

<h1>PHP- Simple Calculator</h1>
<form method="post">
<table align="center">
  
    <tr>
        <td>Enter First Number</td>
        <td><input type="text" name="n1"></td>
    </tr>

    <tr>
        <td>Select Oprator</td>
        <td><select name="op">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select></td>
    </tr>

    <tr>
        <td>Enter Second Number</td>
        <td><input type="text" name="n2"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="submit" value="Calculate"></td>
    </tr>

    <tr>
        <td>Answer =         <strong> <?php echo $result; ?><strong></td>
    </tr>