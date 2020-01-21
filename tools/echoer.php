<?php
//PHP Echoer by BirdOPrey5

header("Content-Type: text/plain");


if (!empty($_GET))
{
  foreach ($_GET as $key => $val)
  {
     echo "[g]~$key~ : ~$val~" . PHP_EOL;
  }
}

if (!empty($_POST))
{
  foreach ($_POST as $key => $val)
  {
     echo "[p]~$key~ : ~$val~" . PHP_EOL;
  }
}

if (empty($_GET) AND empty($_POST))
{
  echo "No Params" . PHP_EOL;
}

