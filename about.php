<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>About - SMK Adi Sanggoro</title>
	<link rel="stylesheet" href="fontawesome/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="css/tooplate-style.css" rel="stylesheet">

    <style>
        #haha {
            border: 1px solid black;
            padding: 20px;
            margin-top: 20px;
        }

        #haha a {
            margin-right: 20px;
        }

        .mt-20 {
            margin-top: 20px;
        }
    </style>


</head>
<body>
	<div class="tm-container-fluid">
        <!-- code here -->
        <section class="menu" id="haha">
            <a href="index.php">Home</a>
            <a href="about.php">Jurusan</a>
        </section>
        <br>

		<section class="tm-bgcolor-2 tm-p-50 mt-20" style="border-radius: 15px; margin-bottom: 20px;">
            <h1>
                <?php
                    $pageTitle = 'Geomatika';
                    echo $pageTitle
                ?>
            </h1>
            <?php
                $x = 1;
                while($x <=1) {
            ?>
                <p>Geomatika Hadir untuk menjawab akan kebutuhan survey dan pemetaan yang mampu menguasai pengukuran lahan dan penyajian peta topografi, kontur, dan peta terapan.</p>
            <?php
                    $x++;
                }
            ?>
        </section>

        <section class="tm-bgcolor-1 tm-p-50 mt-20" style="border-radius: 15px; margin-bottom: 20px;">
            <h1>
                <?php
                    $pageTitle = 'Geologi Pertambangan';
                    echo $pageTitle
                ?>
            </h1>
            <?php
                $x = 1;
                while($x <=1) {
            ?>
                <p>Geomatika Hadir untuk menjawab akan kebutuhan survey dan pemetaan yang mampu menguasai pengukuran lahan dan penyajian peta topografi, kontur, dan peta terapan.</p>
            <?php
                    $x++;
                }
            ?>
        </section>

        <section class="tm-bgcolor-3 tm-p-50 mt-20" style="border-radius: 15px; margin-bottom: 20px;">
            <h1>
                <?php
                    $pageTitle = 'Teknik Mekatronika';
                    echo $pageTitle
                ?>
            </h1>
            <?php
                $x = 1;
                while($x <=1) {
            ?>
                <p>Mekatronika hadir untuk memenuhi kebutuhan perkembangan teknologi yang mampu menguasai ilmu teknik mengenai aplikasi dari prinsip fisika untuk analisis, desain, manufaktur, kinematika, teknik material termodinamika dan energi.</p>
            <?php
                    $x++;
                }
            ?>
        </section>

		<footer class="tm-footer">
			Copyright 2020 Nano Folio - Design: <a rel="sponsored" href="https://www.tooplate.com" class="tm-link-gray">Tooplate</a>
		</footer>
	</div>

</body>
</html>