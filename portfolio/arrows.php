<?php session_start();
$pageName = basename($_SERVER['PHP_SELF'],".php");
$last = count($_SESSION["names"])-1;
/*since the session starts with 0, not with 1, the last array item's key will not be equal to the
number of items. for example if the array has 4 items, they will be 0, 1, 2 and 3, therefore the
last item is the number of items minus one*/

foreach ($_SESSION["names"] as $key => $value)
{
	if ($pageName == 'project' . $value) {
		if ($key == $last) {
			echo "<div id=\"leftarrow\" class=\"arrows\" data-name=\"" . $_SESSION["names"][$key-1] . "\"><</div>";
			echo "<div id=\"rightarrow\" class=\"arrows\" data-name=\"" . $_SESSION["names"][0] . "\">></div>";
			/*if the last item from the array is reached, the left arrow loads the
			previous item from the array and the right arrow loads the
			0 element from the array)*/
			}

		elseif ($key == 0) {
			echo "<div id=\"leftarrow\" class=\"arrows\" data-name=\"" . $_SESSION["names"][$last] . "\"><</div>";
			echo "<div id=\"rightarrow\" class=\"arrows\" data-name=\"" . $_SESSION["names"][$key+1] . "\">></div>";
		/*if the first item from the array is active, the left arrow loads the
			next item from the array and the right arrow loads the
			0 element from the array)*/
		}

		else{echo "<div id=\"leftarrow\" class=\"arrows\" data-name=\"" . $_SESSION["names"][$key-1] . "\"><</div>";
			echo "<div id=\"rightarrow\" class=\"arrows\" data-name=\"" . $_SESSION["names"][$key+1] . "\">></div>";}
		/*if an item that is not first or last in the array is active, the left arrow loads the
			next item from the array and the right arrow loads the
			previous element from the array)*/
		}
}
?>