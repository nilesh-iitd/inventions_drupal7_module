<h2>List of Inventions</h2>
<?php

if(count($data) > 0)
{
  echo "<table><tr><th>Title</th><th>Updated Date</th><th>Summary</th></tr>";
  foreach($data as $v)
  {
    echo "<tr>";
    echo "<td>" . $v['invention_title'] . "</td>";
    echo "<td>" . $v['invention_updated_date'] . "</td>";
    echo "<td>" . $v['invention_summary'] . "</td>";
    echo "</tr>";
  }
  echo "</table>";
}
else
{
  echo "No records found";
}