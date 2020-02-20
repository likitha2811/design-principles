<?php
  $num1=$_REQUEST["num1"];
  $num2=$_REQUEST["num2"];
  $op=$_REQUEST["op"];
  if($op=="+")
  { $ans=$num1+$num2;
     echo $ans;
  }
  else if($op=="-")
  { $ans=$num1-$num2;
     echo $ans;
  }
  if($op=="*")
  { $ans=$num1*$num2;
     echo $ans;
  }
  if($op=="/")
  { $ans=$num1/$num2;
     echo $ans;
  }
   ?>    