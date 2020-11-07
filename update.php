<?php
	$connect = mysqli_connect("127.0.0.1", "root", "", "Instagram");
	$zapros_text = "UPDATE post SET text = '{$_GET["text"]}', img = '{$_GET["img"]}' WHERE id = '{$_GET["id"]}'";
	$zapros_update = mysqli_query($connect, $zapros_text);
	function Redirect($url, $permanent = false)
	{
	    if (headers_sent() === false)
	    {
	        header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
	    }

		    exit();
	}

	Redirect('index.php', false);
?>