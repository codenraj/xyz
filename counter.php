<?php
function visitor() {
$count_my_page = ("include/counter/visitor.txt");
$hits = file($count_my_page);
$hits[0] ++;
$fp = fopen($count_my_page , "w");
fputs($fp , "$hits[0]");
fclose($fp);

if($hits[0]>999 & $hits[0]<99999)
{$hits[0]=number_format($hits[0]/1000,1)."K";}
elseif($hits[0]>99999)
{$hits[0]=number_format($hits[0]/100000,1)."M";}
echo $hits[0];
  }

  function project1() {
    $count_my_page = ("project/1/project1.txt");
    $hits = file($count_my_page);
    $hits[0] ++;
    $fp = fopen($count_my_page , "w");
    fputs($fp , "$hits[0]");
    fclose($fp);
    
    if($hits[0]>999 & $hits[0]<99999)
    {$hits[0]=number_format($hits[0]/1000,1)."K";}
    elseif($hits[0]>99999)
    {$hits[0]=number_format($hits[0]/100000,1)."M";}
    echo $hits[0];
      }

?>