<!-- Pagina inicial  -->
<?php

class PagesController {

	function home()
	{
		$siteName = 'Roberto Roupas';
		echo 'Home Page';
		include '../app/views/home.php';
	}

	function contact()
	{
		echo 'My contact';
	}

}

?>