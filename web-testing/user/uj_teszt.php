<?php ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Tesztelő rendszer</title>
  <meta http-equiv="X-UA-Compatible" content="IE=9" />
  <link rel="stylesheet" type="text/css" href="../css/style.css" />
  <script type="text/javascript" src="../js/jquery.min.js"></script>
  <script type="text/javascript" src="../js/image_slide.js"></script>
</head>

<body>

  <div id="main">
  
    <div id="header">
	  <div id="banner">
	    <div id="welcome">
	      <h1><span>Tesztelő</span> rendszer</h1>
	    </div><!--close welcome-->
	    <div id="welcome_slogan">
	      <h1><span>"Szeretnünk és ápolnunk kell a tévedést,</span> mert ő a megismerés anyaöle." (Nietzsche)</h1>
	    </div><!--close welcome_slogan-->
	  </div><!--close banner-->
    </div><!--close header-->

	<div id="menubar">
      <ul id="menu">
        <li><a href="../index.php">Főoldal</a></li>
        <li class="current"><a href="user.php">Profil</a></li>
        <li><a href="../logout.php">Kijelentkezés</a></li>
      </ul>
    </div><!--close menubar-->
    
    <div id="site_content">	     		
	
	<div id="site_content">	
    <div class="sidebar_container">  
        <div class="sidebar">
          <div class="sidebar_item">
            <a href="szemelyes_adatok.php"><h2>Személyes adatok</h2></a>
            <p>A fenti menüpont alatt megtekintheted a regisztráció során megadott adataid. </p>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->  
		<div class="sidebar">
          <div class="sidebar_item">
            <h2>Új teszt kitöltése</h2>
            <p>A fenti menüpont alatt kitölthetsz egy tesztet. </p>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->     		
		<div class="sidebar">
          <div class="sidebar_item">
            <a href="kitoltott_tesztek.php"><h2>Kitöltött tesztek</h2></a>
            <p>A fenti menüpont alatt megnézheted, illetve letöltheted a már kitöltött tesztjeid.</p>         
		  </div><!--close sidebar_item-->
        </div><!--close sidebar--> 		
        <div class="sidebar">
          <div class="sidebar_item">
            <a href="eredmenyek.php"><h2>Eredmények</h2></a>
            <p>A fenti menüpont alatt megnézheted az eddig elért eredményeid</p>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
       </div><!--close sidebar_container-->	
	
      <ul class="slideshow">
        <li class="show"><img width="680" height="250" src="../images/home_1.jpg" alt="&quot;Új teszt kitöltése&quot;" /></li>
        <li><a href="szemelyes_adatok.php"><img width="680" height="250" src="../images/home_2.jpg" alt="&quot;Személyes adatok&quot;" /></a></li>
        <li><a href="kitoltott_tesztek.php"><img width="680" height="250" src="../images/home_2.jpg" alt="&quot;Kitöltött tesztek&quot;" /></a></li>
        <li><a href="eredmenyek.php"><img width="680" height="250" src="../images/home_2.jpg" alt="&quot;Eredmények&quot;" /></a></li>
      </ul> 
      
      <div id="content">
				<div class="content_item" align="center">

					<br></br>

					<p>A teszteket az alábbi kategóriákból választhatod ki.
						Kívánunk hasznos időtöltést és jó tanulást!</p>

					<?php include '../readTests.php';?>
					<table  border="0" cellpadding="2" cellspacing="10" align = "center">
						<tr>
							<th rowspan="2" align="center"><img src="../images/algebra_icon.png" alt="image1" height="50"/></th>
						</tr>
						<tr>
							<th align="center">Algebra elmélet</th>
							<td></td>
						</tr>
						<tr>
							<td></td><?php
							$tesztek = readTestName("Algebra elmélet");
							if ($tesztek[0] == "ok") {
								$count = 0;
								foreach ($tesztek as $t)
									$count++;
								$count--;
								
								for ($i = 1; $i < $count; $i++) {
									if ($i % 2 == 1)
										?><tr><td></td><td><a href="../teszt_kitoltese.php?nev=tests/<?php echo $tesztek[$i];?>" target="_blank"><?php echo $tesztek[$i+1]; $i++;?></a></td></tr><?php
								}
								}
							?>
						</tr>
						<tr>
							<td></td>
<!-- 							<td><a href="../alg_elm.html" ><font size="3">További tesztek...</font><img src="../images/arrow_brown2.png" alt="image1" height="20"/></a></td> -->
							<td></td>
						</tr>
						</table>
						<hr>
					<table  border="0" cellpadding="2" cellspacing="10" align = "center">
						<tr>
							<th rowspan="2" align="center"><img src="../images/algebra_icon.png" alt="image1" height="50"/></th>
						</tr>
						<tr>
							<th align="center">Algebra gyakorlat</th>
							<td></td>
						</tr>
						<tr>
							<td></td><?php
							$tesztek = readTestName("Algebra gyakorlat");
														
							if ($tesztek[0] == "ok") {
								$count = 0;
								foreach ($tesztek as $t)
									$count++;
								$count--;
								
								for ($i = 1; $i < $count; $i++) {
									if ($i % 2 == 1)
										?><tr><td></td><td><a href="../teszt_kitoltese.php?nev=tests/<?php echo $tesztek[$i];?>" target="_blank"><?php echo $tesztek[$i+1]; $i++;?></a></td></tr><?php
								}
								}
							?>
						</tr>
						<tr>
							<td></td>
<!-- 							<td><a href="../alg_gyak.html"><font size="3">További tesztek...</font><img src="../images/arrow_brown2.png" alt="image1" height="20"/></a></td> -->
							<td></td>
						</tr>
						</table>
						<hr>
					<table  border="0" cellpadding="2" cellspacing="10" align = "center">
						<tr>
							<th rowspan="2" align="center"><img src="../images/geom_icon.png" alt="image1" height="50"/></th>
						</tr>
						<tr>
							<th align="center">Mértan elmélet</th>
							<td></td>
						</tr>
						<tr>
							<td></td><?php
							$tesztek = readTestName("Mértan elmélet");
							if ($tesztek[0] == "ok") {
								$count = 0;
								foreach ($tesztek as $t)
									$count++;
								$count--;
								
								for ($i = 1; $i < $count; $i++) {
									if ($i % 2 == 1)
										?><tr><td></td><td><a href="../teszt_kitoltese.php?nev=tests/<?php echo $tesztek[$i];?>" target="_blank"><?php echo $tesztek[$i+1]; $i++;?></a></td></tr><?php
								}
								}
							?>
						</tr>
						<tr>
							<td></td>
<!-- 							<td><a href="../geo_elm.html"><font size="3">További tesztek...</font><img src="../images/arrow_brown2.png" alt="image1" height="20"/></a></td> -->
							<td></td>
						</tr>
						</table>
						<hr>
					<table  border="0" cellpadding="2" cellspacing="10" align = "center">
						<tr>
							<th rowspan="2" align="center"><img src="../images/geom_icon.png" alt="image1" height="50"/></th>
						</tr>
						<tr>
							<th align="center">Mértan gyakorlat</th>
							<td></td>
						</tr>
						<tr>
							<td></td><?php
							$tesztek = readTestName("Mértan gyakorlat");
							if ($tesztek[0] == "ok") {
								$count = 0;
								foreach ($tesztek as $t)
									$count++;
								$count--;
								
								for ($i = 1; $i < $count; $i++) {
									if ($i % 2 == 1)
										?><tr><td></td><td><a href="../teszt_kitoltese.php?nev=tests/<?php echo $tesztek[$i];?>" target="_blank"><?php echo $tesztek[$i+1]; $i++;?></a></td></tr><?php
								}
								}
							?>
						</tr>
						<tr>
							<td></td>
<!-- 							<td><a href="../geo_gyak.html"><font size="3">További tesztek...</font><img src="../images/arrow_brown2.png" alt="image1" height="20"/></a></td> -->
							<td></td>
						</tr>
						</table>
						<hr>
					<table  border="0" cellpadding="2" cellspacing="10" align = "center">
						<tr>
							<th rowspan="2" align="center"><img src="../images/geom_icon.png" alt="image1" height="50"/></th>
						</tr>
						<tr>
							<th align="center">Összefoglalók</th>
							<td></td>
						</tr>
						<tr>
							<td></td><?php
							$tesztek = readTestName("Összefoglalók");

							
							if ($tesztek[0] == "ok") {
								$count = 0;
								foreach ($tesztek as $t)
									$count++;
								$count--;
								
								for ($i = 1; $i < $count; $i++) {
									if ($i % 2 == 1)
										?><tr><td></td><td><a href="../teszt_kitoltese.php?nev=tests/<?php echo $tesztek[$i];?>" target="_blank"><?php echo $tesztek[$i+1]; $i++;?></a></td></tr><?php
								}
								}
							?>
						</tr>
						<tr>
							<td></td>
<!-- 							<td><a href="../osszef.html"><font size="3">További tesztek...</font><img src="../images/arrow_brown2.png" alt="image1" height="20"/></a></td> -->
							<td></td>
						</tr>
						</table>

					<br></br> <br></br>
	      
		</div><!--close content_item-->
      </div><!--close content-->   
	</div><!--site content-->

 
    <div id="content_grey">  
      <p>Hasonló weboldalak</p>   
	  <br style="clear:both"/>
    </div><!--close content_grey-->  

    <br></br>
    <br></br>
    
  </div><!-- close main -->

</body>
</html>