<?php
  header("Content-type: text/xml");
  $names = array (
   "HTML", "PHP", "Javascript", "Java",
   "MySQL", "Python", "C++",
   "Ruby" );
echo "<?xml version=\"1.0\" ?>\n";
echo "<names>\n";
while (list($k,$v)=each($names)) {
   if (stristr($v,$_GET['query'])) {
      echo "<name>$v</name>\n";
   }
}
echo "</names>\n";
?>