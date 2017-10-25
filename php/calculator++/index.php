<?php
//define some variables
$result = 0; //int

$number01 = 0; //int
$number02 = 0; //int

$operator = ""; //string

if (isset($_GET ['number01']))
{
  $number01 = $_GET['number01'];
}

if (isset($_GET ['number02']))
{
  $number02 = $_GET['number02'];
}

if (isset($_GET ['Operator']))
{
  $operator = $_GET['Operator'];
}

if ($operator == "add")
{
  $result = $number01 + $number02;
}

if ($operator =="subtract")
 {
  $result = $number01 / $number02;
}

if ($operator =="minus")
{
  $result = $number01 - $number02;
}

if ($operator =="times")
{
  $result = $number01 * $number02;
}

if ($operator =="squareRoot")
{
  $result = sqrt($number01);
}

if ($operator =="power")
{
  $result = pow( $number01, $number02) ;
}

if ($operator =="kmToMile")
{
  $result =( $number01 / 1.60934) ;
}

if ($operator =="mileToKm")
{
  $result =( $number01 * 1.60934) ;
}

//round the result
if (isset($_GET ['decimals']) && $_GET['decimals'] > 0)
{
  if (is_double ($result))
  {
    $result = round($result, $_GET['decimals']);
  }
}












  ?>
<html>
  <head>
    <title>Calculator++</title>
      <link rel="stylesheet" type="text/css" href="style.css">

  </head>

  <body>
      <div  style="margin:10px auto; width:30%; background-color: #e3e7ed;  ">

      <form action="index.php" method="get">



          <label>Number 01 :</label> <input type="text" name="number01"/><br />



          <select name="Operator">

              <<option value="add" name>+</option>
              <<option value="subtract">/</option>
              <<option value="minus">-</option>
              <<option value="times">X</option>
              <<option value="power">^</option>
              <<option value="squareRoot">√</option>
              <<option value="kmToMile">km to mile</option>
              <<option value="mileToKm">mile to km</option>


          </select>

          <br/><label>Number 02 :</label> <input type="text" name="number02"/><br />





          <input class="buttons" type="submit" name="mySubmit" value="Calculate!!!"/><br/>
          <input class="buttons" type="reset" name="reset" value="Reset"/><br/>
          <input type="range" name "decimals" min="0" max="5"/>



        <div id="showResult">

          <br/>  The result : <?php echo $result; ?>

        </div>


        </form>

      </div>



  </body>
</html>
