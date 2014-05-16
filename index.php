<?php
  session_start();

  if (isset($_SESSION['user']) && isset($_SESSION['pass'])) {
    ?>
  
      <title>JIBAS - AKADEMIK</title>
      <link href="images/jibas.ico" rel="shortcut icon" />
      <frameset border="0" frameborder="0" framespacing="0" rows="87,*,41">
        <frame name="frametop" src="frametop.php" scrolling="no" noresize="noresize" />
          <frameset border="0" frameborder="0" framespacing="0" cols="20,*,27">
            <frame name="frameleft" src="frameleft.php" scrolling="no" noresize="noresize" />
              <frame name="content" src="modul/referensi.php"/>
              <frame name="frameright" src="frameright.php" scrolling="no" noresize="noresize" />
          </frameset>
          <frame name="framebottom" src="framebottom.php" scrolling="no" noresize="noresize" />
      </frameset><noframes></noframes>
    <?php
  } else {
    header('location:login.php?c=login');
  }

?>