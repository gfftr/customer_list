<?php

echo "heere";

function query($query)
{
 $res = false;
 if ($con = mysqli_connect('localhost', 'root', '', 'customer_list')) {
  die("unable to connect");
 }

 $result = mysqli_query($con, $query);

 if ($result && mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
   //
   $res[] = $row;
  }
 }

 return $res;
}