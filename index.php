<?php
function triangle($number): void
{
    for($i=1;$i<$number;$i++)
    {
        $counter=0;
        while($counter < $i)
        {
            echo "0";
            $counter++;

        }
    echo "<br>";
    }

}




triangle(15);
?>

