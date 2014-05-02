<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
<!-- CSS -->
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="screen" href="style/css/ie6.css" /><![endif]-->
<!--[if IE 7]><link rel="stylesheet" type="text/css" media="screen" href="style/css/ie7.css" /><![endif]-->

<!-- JavaScripts-->

	<?php echo $this->Html->charset(); ?>

<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('transdmin.css');
		echo $this->Html->script('jquery');
		echo $this->Html->script('jNice');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		
?>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jNice.js"></script>
</head>

<body>
	<div id="wrapper">
    	<!-- h1 tag stays for the logo, you can use the a tag for linking the index page -->
    	<h1><a href="#"><span>Transdmin Light</span></a></h1>
        
        <!-- You can name the links with lowercase, they will be transformed to uppercase by CSS, we prefered to name them with uppercase to have the same effect with disabled stylesheet -->
        <ul id="mainNav">
        	<li><a href="#" class="active">DASHBOARD</a></li> <!-- Use the "active" class for the active menu item  -->
        	<li><a href="#">Home</a></li>
        	<li><a href="#">Calender</a></li>
        	<li><a href="#">Queries</a></li>
        	<li class="logout"><a href="#">LOGOUT</a></li>
        </ul>
        <!-- // #end mainNav -->
        
        <div id="containerHolder">
			<div id="container">
        		<div id="sidebar">
                	<ul class="sideNav">
                    	<li><a href="#">Sample Sidebar 1</a></li>
                    	<li><a href="#" class="active">Sample Sidebar 2(active)</a></li>
                    	<li><a href="#">Sample Sidebar 3</a></li>
                    	<li><a href="#">Sample Sidebar 4</a></li>
                    	<li><a href="#">Sample Sidebar 5</a></li>
                    	<li><a href="#">Sample Sidebar 6</a></li>
                    </ul>
                    <!-- // .sideNav -->
                </div>    
                <!-- // #sidebar -->
                
               
                
                <div id="main">
                	<form action="" class="jNice">
						<div id="content">
							<?php echo $this->Session->flash(); ?>
							<?php echo $this->fetch('content'); ?>
						</div>
                    </form>
                      <?php echo $this->element('sql_dump'); ?>
                </div>
                <!-- // #main -->
               
                <div class="clear"></div>
            </div>
           
            <!-- // #container -->
        </div>	
        <!-- // #containerHolder -->
        
        <p id="footer">Feel free to use and customize it. <a href="http://www.perspectived.com">Credit is appreciated.</a></p>
    </div>
    <!-- // #wrapper -->
</body>
</html>


