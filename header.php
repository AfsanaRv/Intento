<?php 
session_start();
include('includes/connect_db.php'); 
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Intento</title>
<link rel="icon" href="images/icon.png" type="image/x-icon">
<link rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.0/css/bulma.css">
		<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
        <!-- <link rel="stylesheet" href="styles/debug.css"> -->
        <link rel="stylesheet" href="styles/helpers.css">
        <link rel="stylesheet" href="styles/grid.css">
<style>

.hero {
	background: black url(images/b1.png) center / cover;
}

@media (max-width: 1024px) { .hero { background: black url(images/3.jpg) center / cover; } }
@media (max-width:  768px) { .hero { background: black url(images/rose.jpg) center / cover; } }

</style>

</head>

<body class="hero">
    
    <div class="hero-body">
    <header class="hero-body">
        <div class="is-overlay has-text-centered single-spaced" style="top: 82px;">
            <h1 class="title is-1 has-text-black">Intento</h1> 
            <h2 class="subtitle is-4 has-text-weight-light has-text-black"> : A project management solution : : </h2>
	    </div>    
    </header> 
        <nav class="header-height">
            
                <div>
                    <?php
                        if (isset($_SESSION['email'])) {
                            echo '<div class="hero-head">
	                            <div class="columns is-mobile is-marginless heading has-text-weight-bold">
		                            <div class="column left subtitle is-4 has-text-weight-bold has-text-black">'.'
                                    Hello '. $_SESSION['last_name'] . '!
                                    </div>
                                    <div class="column center desktop">
			                            <p class="navbar-item has-text-black"><a href="index.php">Home</a></p>
			                            <p class="navbar-item has-text-black"><a href="#">Profile</a></p>
			                            <p class="navbar-item has-text-black"><a href="teams.php">Teams</a></p>
                                        <p class="navbar-item has-text-black"><a href="projects.php">Projects</a></p>
                                    </div>
                                    <div class="column right">
                                        <form action="includes/logout.inc.php" method="post" class="navbar-item has-text-black desktop">
                                        <div class="control">
                                            <button class="button is-link is-light" type="Submit" name="logout-submit"> Logout </button>
                                        </form>
                                        </div>
                                    </div>
                                    <figure class="navbar-item image has-text-black center">
				                        <i class="fas fa-bars" style="width: 1rem; height: 1rem;"></i>
			                        </figure>
                                </div>
                            </div>';
                        }
                        else{
                            echo '<div class="hero-head">
                                    <div class="columns is-mobile is-marginless heading has-text-weight-bold">
                                        <div class="column left">                        
                                            
                                        </div>
                                        <div class="column center desktop">
			                                <p class="navbar-item has-text-black"><a href="index.php">Home</a></p>
                                            <p class="navbar-item has-text-black"><a href="#">About Us</a></p>
                                            <div class="control">
                                                <a class="navbar-item button is-link is-light" href="signup.php">Signup</a>
                                        </div>
                                        </div>
                                        <div class="column right">
			                            <p class="navbar-item has-text-black desktop">
                                        <form action="includes/login.inc.php" method="post">
                                            <div class="field is-horizontal">
                                                <div class="control has-icons-left has-icons-right">
                                                    <input class="input" type="email" placeholder="Email input"  name="email">
                                                        <span class="icon is-small is-left">
                                                            <i class="fas fa-envelope"></i>
                                                        </span>
                                                        <span class="icon is-small is-right">
                                                            <i class="fas fa-triangle"></i>
                                                        </span>
                                                </div>
                                                <div class="field">
                                                <div class="control has-icons-left">
                                                    <input class="input" type="password" name="pwd" placeholder="Password">
                                                    <span class="icon is-small is-left">
                                                        <i class="fas fa-lock"></i>
                                                    </span>
                                                </div>
                                                </div>
                                                <div class="control">
                                                   <button class="button is-link is-light" type="Submit" name="login-submit">Login</button>
                                                </div>
                                            </div>
                                        </form>
                                        <figure class="navbar-item image">
				                            <i class="fas fa-3x fa-bars has-text-black"
					                        <style="width: 1rem; height: 1rem;"></i>
			                            </figure>
                                </div>';
                            }
                    ?>

                </div>
        </nav>



