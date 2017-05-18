<?php
require "header.php";
?>
		<section class="intro">
        </section>

        <section class="bottom-blocks">
            <article class="bottom-block">
		        <section class="left-block">
		            <figure class="left-block-image">
                        <img src="images/Kasperskiy.jpg" alt="Kaspersky Internet Security" width="125px" height="175px">
                        <figcaption class="left-block-image-description">
					    <a href="programm.php?id=1">Kaspersky Internet Security для всех устройств</a>
                        </figcaption>
                    </figure>
					<figure class="left-block-image">
                        <img src="images/nod32.jpg" alt="Nod32" width="125px" height="175px">
                        <figcaption class="left-block-image-description">
					    <a href="programm.php?id=2">Nod32 Platinum edition</a>
                        </figcaption>
                    </figure>
					<figure class="left-block-image">
                        <img src="images/office.jpg" alt="MS Office 2016" width="125px" height="175px">
                        <figcaption class="left-block-image-description">
					    <a href="programm.php?id=3">MS Office для дома и офиса 2016</a>
                        </figcaption>
                    </figure>
					<figure class="left-block-image">
                        <img src="images/office2.jpg" alt="MS Office 365" width="125px" height="175px">
                        <figcaption class="left-block-image-description">
					    <a href="programm.php?id=4">MS Office 365 Персональная подписка</a>
                        </figcaption>
                    </figure>
					<figure class="left-block-image">
                        <img src="images/office3.jpg" alt="MS Office 2016" width="125px" height="175px">
                        <figcaption class="left-block-image-description">
					    <a href="programm.php?id=6">MS Office Для дома и учебы 2016</a>
                        </figcaption>
                    </figure>
					<figure class="left-block-image">
                        <img src="images/drweb.png" alt="DrWeb" width="125px" height="175px">
                        <figcaption class="left-block-image-description">
					    <a href="programm.php?id=5">DrWeb Security Space</a>
                        </figcaption>
                    </figure>
		        </section>
                <section class="right-block">
				    <figure class="right-block-image">
                        <?php require "parser.php" ?>
                    </figure>
		        </section>
            </article>
        </section>
		<?php
		require "footer.php";
		?>