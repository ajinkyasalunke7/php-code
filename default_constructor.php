<!-- 
    <?php
class Student
{
    function __construct()
    {
        echo "Constructor Called";
    }
}

$stud = new Student();
?>
 -->

<?php
class Tree
{
	function Tree()
	{
		echo "Its a User-defined Constructor of the class Tree";
	}

	function __construct()
	{
		echo "Its a Pre-defined Constructor of the class Tree <br/>";
	}
}

$obj= new Tree();
print($obj->Tree());
?>
