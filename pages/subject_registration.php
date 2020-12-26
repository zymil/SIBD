<?php 

    include_once('../database/connect.php');
    include_once('../cookies/cookie.php');

    if(!isset($_SESSION['username']) ) {
        $_SESSION['message'] = 'Please Login first!';
        header('Location: login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- É assim que se comenta, vai adicionando notas! -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/MainpageStyle.css" rel="stylesheet">
    <title> Portfol.io </title>
    
</head>

<body>
    <header>
        <h1><a href="../pages/user_mainpage.php"> Portfol.io</a></h1>
    </header>
    <?php if (isset($_SESSION['message'])) { ?>
        <div class="message">
            <?=$_SESSION['message']?>
        </div>
    <?php unset($_SESSION['message']); } ?>
    
    <div id="username">
        <p>Logged in as: <?= $_SESSION['username'] ?></p>
        <a href="../actions/ActionLogout.php">Logout</a>
    </div>
    <nav id="operations">
        <a href="../pages/user_mainpage.php" id="Back">Go back</a>
    </nav>
    <form action="../actions/ActionSubjectRegistration.php" method="POST">
        <h3>Add a new Subject to you Portfolio!</h3>
            <?php if (isset($_SESSION['message'])) { ?>
                <div class="message">
                    <?=$_SESSION['message']?>
                </div>
            <?php unset($_SESSION['message']); } ?>
        <label>
            Subject Name:  <input type="text" name="subject_name"> 
        </label>
        <p></p>
        <input type="submit" value="Submit">
    </form>

        <section id="usersubjects"> 
            <h3><?=$_SESSION['username']?>'s Subjects:</h3>
       
            <!-- Aqui entra o menu dinamico que apresenta as cadeiras adicionadas -->



        </section> 
        
        <!-- <section id="Exemplo">
            <h2>Exemplo</h2>
            <div id="ex">
              
            </div>
        </section> -->

      
    <footer>
        <a href="https://github.com/zymil/Portfolio">@github/Projeto</a>
        <p>Copyright &copy; Grupo L, 2020</p>
    </footer>
</body>
</html>