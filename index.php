<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home - SMK Adi Sanggoro</title>
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
            <a href="jurusan.php">Jurusan</a>
			<a href="eskul.php">Ekstrakurikuler</a>
        </section>

        <section class="tm-bgcolor-2 tm-p-50 mt-20" style="border-radius: 15px; margin-bottom: 20px;">
            <h1>
                <?php
                    $pageTitle = 'SMK Adi Sanggoro';
                    echo $pageTitle
                ?>
            </h1>
            <?php
                $x = 1;
                while($x <=1) {
            ?>
                <p>Selamat datang di Website SMK Adi Sanggoro. Lembaga Pendidikan tinggi yang bertekad untuk turut serta membangun negeri dalam mencerdaskan kehidupan bangsa.</p>
            <?php
                    $x++;
                }
            ?>
        </section>

		<section class="tm-site-header tm-flex-center tm-mb-50 tm-bgcolor-1 tm-border-rounded">
			<i class="fas fa-heart fa-3x"></i>
			<h1>Adi Sanggoro</h1>
		</section>

		<section class="tm-contact tm-mb-50 tm-bgcolor-3 tm-border-rounded">
			<div class="tm-contact-header tm-flex-center">
				<i class="fas fa-map-pin fa-3x"></i>
				<h2>Contact</h2>
			</div>
			<div class="tm-contact-info">
				<address class="tm-mb-30">
					Alamat : <br> Jl.Sengked No.1 Kampus IPB Dramaga,
					Kab.Bogor, Provinsi Jawa Barat,
					Kecamatan Dramaga, Kelurahan Babakan 16680
				</address>
				<div class="tm-text-white tm-mb-40">Nomor Telpon: <a href="tel:0100200340" class="tm-link-white">(0251)8620219</a></div>
				<div class="tm-flex">
					<a href="https://facebook.com" class="tm-social-link"><i class="fab fa-facebook"></i></a>
					<a href="https://twitter.com" class="tm-social-link"><i class="fab fa-twitter"></i></a>
					<a href="https://instagram.com" class="tm-social-link"><i class="fab fa-instagram"></i></a>
				</div>
			</div>
			<div class="tm-contact-form-container">
				<div id="contact-form" action="" method="POST" class="tm-contact-form">
		          	<p>Email : <br> info_smk@adisanggoro.sch.id</p>	     
					<p>Situs : <br> https://www.adisanggoro.sch.id/new/</p>	   	   	
		        </div>    
			</div>
		</section>

		<footer class="tm-footer">
			Copyright 2022 Workshop - SMK Adi Sanggoro: <a rel="sponsored" href="https://www.tooplate.com" class="tm-link-gray">Revani</a>
		</footer>
	</div>

</body>
</html>