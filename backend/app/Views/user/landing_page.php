<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tusok-Tusok Street Foods</title>
    <link rel="shortcut icon" type="image/png" href="/assets/tusokicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #0d1117;
            color: #e6edf3;
            margin: 0;
            padding: 0;
        }

        /* HEADER STYLES */
        header {
            background-color: #0d1b2a;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px 60px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
            position: sticky;
            top: 0;
            z-index: 10;
        }

        .brand {
            display: flex;
            align-items: center;
            text-decoration: none;
            font-weight: 800;
            font-size: 1.8rem;
            color: #4cc9f0;
        }

        .brand img {
            height: 45px;
            width: 45px;
            margin-right: 10px;
            border-radius: 50%;
        }

        /* NAVIGATION WRAPPER */
        .nav-group {
            display: flex;
            align-items: center;
            gap: 25px;
        }

        .nav-links {
            display: flex;
            gap: 20px;
        }

        .nav-links a {
            color: #a9bcd0;
            font-weight: 500;
            text-decoration: none;
            transition: 0.3s;
        }

        .nav-links a:hover {
            color: #4cc9f0;
        }

        .auth-buttons a {
            text-decoration: none;
            background-color: transparent;
            border: 1px solid #4cc9f0;
            color: #4cc9f0;
            border-radius: 25px;
            font-weight: 600;
            padding: 6px 16px;
            transition: 0.3s;
        }

        .auth-buttons a:hover {
            background-color: #4cc9f0;
            color: #0d1117;
        }

        /* HERO SECTION */
        .hero {
            background: url('https://i.pinimg.com/1200x/cc/22/d1/cc22d1deb7d96e1c4bb43360c49638cd.jpg') center center/cover no-repeat;
            min-height: 90vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.8);
            position: relative;
        }

        .hero::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        .hero h1 {
            font-size: 3.5rem;
            font-weight: 700;
            color: #4cc9f0;
        }

        .hero p {
            font-size: 1.2rem;
            color: #e6edf3;
            margin-top: 15px;
        }

        .hero .btn {
            background-color: #4cc9f0;
            color: #0d1117;
            font-weight: bold;
            border-radius: 30px;
            padding: 12px 28px;
            margin-top: 25px;
            transition: 0.3s;
        }

        .hero .btn:hover {
            background-color: #3a86ff;
            color: #fff;
        }

        .section-title {
            color: #4cc9f0;
            font-weight: 700;
            text-align: center;
            margin-bottom: 40px;
        }

        .food-card {
            background-color: #161b22;
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.4);
            transition: 0.3s;
        }

        .food-card:hover {
            transform: translateY(-8px);
        }

        .food-card img {
            height: 220px;
            object-fit: cover;
        }

        .food-card .card-body {
            padding: 20px;
        }

        .food-card .card-title {
            color: #4cc9f0;
            font-weight: bold;
        }

        .food-card p {
            color: #ffffff;
        }

        .view-btn {
            background-color: transparent;
            border: 1px solid #4cc9f0;
            color: #4cc9f0;
            font-weight: 600;
            border-radius: 20px;
            padding: 8px 20px;
            transition: 0.3s;
            margin-top: 10px;
        }

        .view-btn:hover {
            background-color: #4cc9f0;
            color: #0d1117;
        }

        footer {
            background-color: #0d1b2a;
            color: #a9bcd0;
            text-align: center;
            padding: 20px 0;
            border-top: 1px solid #4cc9f0;
        }

        /* Responsive Header */
        @media (max-width: 768px) {
            header {
                flex-direction: column;
                text-align: center;
                gap: 10px;
            }

            .nav-group {
                flex-direction: column;
                gap: 10px;
            }

            .nav-links {
                flex-direction: column;
            }

            .auth-buttons {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>

    <!-- HEADER -->
    <header>
        <a href="#" class="brand">
            <img src="/assets/circle.png" alt="Tusok-Tusok Logo">
            Tusok-Tusok
        </a>

        <div class="nav-group">
            <nav class="nav-links">
                <a href="/moodboard_page">Moodboard</a>
                <a href="/roadmap_page">Roadmap</a>
            </nav>

            <div class="auth-buttons">
                <a href="/login_page">Login</a>
                <a href="/signup_page">Sign Up</a>
            </div>
        </div>
    </header>

    <!-- HERO -->
    <section class="hero">
        <div class="hero-content">
            <h1>Tusok-Tusok at Night</h1>
            <p>Where the streets come alive with the aroma of freshly grilled street food.</p>
            <a href="#menu" class="btn">Discover More</a>
        </div>
    </section>

    <!-- MENU -->
    <section id="menu" class="py-5 container">
        <h2 class="section-title">Our Signature Street Foods</h2>
        <div class="row g-4">
            <?php
            $foods = [
                ["Fishball", "Crispy golden balls of fish — the ultimate tusok-tusok classic!", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTipxa_NalTjt7pQ9Ffcl-2gH4iBWBt1cDgFA&s"],
                ["Chicken Balls", "Juicy and flavorful, perfect with our sweet-spicy dipping sauce.", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-4t_DkMraRyumricILW6Wb4TptCTIq5o1Ig&s"],
                ["Squid Ball", "Soft and chewy bites of squid — every dip is an explosion of flavor.", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqcT3LsHowTBaqqCx5uTOx3WEnC3yuWBkprA&s"],
                ["Kikiam", "Crunchy on the outside, savory on the inside — a crowd favorite.", "https://i0.wp.com/kimavinante.wordpress.com/wp-content/uploads/2017/09/kikiam.jpg?w=2000&h=&crop=1&ssl=1"],
                ["Tokneneng", "Bright orange battered eggs — golden and bursting with taste.", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRSHxPghN6jl306YAJdQOgo0KiWhxKjbAorxQ&s"],
                ["Gulaman", "Cool down with this sweet, refreshing drink after your tusok feast.", "https://a0.anyrgb.com/pngimg/884/644/gulaman-carbonated-drink-black-russian-cuba-libre-coca-cola-slush-orange-soft-drink-carbonated-water-sonic-drivein-soda.png"],
                ["Betamax", "Grilled congealed chicken blood cubes — smoky, bold, and iconic.", "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjO478dAtSQPdJMyTQ5nXGylDkW7om13PkA284dCfsc23anowR3Vg_NXrT93Z3nlJv2U1RSn-Tcd2bjICJs2OjqchuJvMMcULb5dZkR7PDtrwwymcA8QSMXf3uoRdLx4z-fKw2XWFvQ3xw/s400/IMG_sf6.jpg"],
                ["Calamares", "Crispy fried squid rings served with tangy vinegar dip.", "https://i0.wp.com/www.russianfilipinokitchen.com/wp-content/uploads/2015/04/crispy-fried-calamari-01.jpg?w=582"],
                ["Dynamite", "Spicy green chili stuffed with cheese and wrapped in lumpia wrapper.", "https://www.recipesbynora.com/wp-content/uploads/2024/04/Dynamite-Lumpia-Recipe-on-a-plate.jpg"]
            ];

            foreach ($foods as $food) {
                echo '
          <div class="col-md-4">
            <div class="text-center card food-card">
              <img src="' . $food[2] . '" alt="' . $food[0] . '">
              <div class="card-body">
                <h5 class="card-title">' . $food[0] . '</h5>
                <p>' . $food[1] . '</p>
                <button class="view-btn">View Details</button>
              </div>
            </div>
          </div>';
            }
            ?>
        </div>
    </section>

    <!--footer-->
    <?= view('components/footer') ?>

</body>

</html>