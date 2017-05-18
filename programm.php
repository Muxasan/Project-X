<?php
require "header.php";
include ("bd.php");
$di = $_GET["id"];
$result = mysql_query("SELECT * FROM programm WHERE id='$di'");
$myrow = mysql_fetch_array($result);
?>
		<section class="intro">
        </section>
        <section class="bottom-blocks">
            <article class="bottom-block">
		        <section class="left-block">
		            <figure class="left-block-image">
                        <img src="<?php echo $myrow['image'];?>" alt="Kaspersky Internet Security" width="250px" height="300px">
                        <figcaption class="left-block-image-description">
					    <?php echo $myrow['title']; ?>
                        </figcaption>
                    </figure>
		        </section>
                <section class="right-block">
				    <?php 
					echo '<p>'.$myrow['description'].'</p><p>'.$myrow['sys_requir'].'</p>';
					?>
		        </section>
            </article>
        </section>
<?php
require "footer.php";
?>