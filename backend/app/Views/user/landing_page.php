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

        nav {
            background-color: #0d1b2a;
            padding: 15px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
        }

        .navbar-brand {
            font-weight: 800;
            font-size: 1.8rem;
            color: #4cc9f0 !important;
        }

        .navbar-brand img {
            height: 45px;
            width: 45px;
            margin-right: 10px;
            border-radius: 50%;
        }

        .nav-link {
            color: #a9bcd0 !important;
            font-weight: 500;
            margin-right: 15px;
            transition: 0.3s;
        }

        .nav-link:hover {
            color: #4cc9f0 !important;
        }

        .auth-btn {
            background-color: transparent;
            border: 1px solid #4cc9f0;
            color: #4cc9f0;
            border-radius: 25px;
            font-weight: 600;
            padding: 6px 16px;
            transition: 0.3s;
            margin-left: 10px;
        }

        .auth-btn:hover {
            background-color: #4cc9f0;
            color: #0d1117;
        }

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

        .add-btn {
            background-color: #4cc9f0;
            color: #0d1117;
            font-weight: 600;
            border-radius: 20px;
            padding: 8px 20px;
            border: none;
            transition: 0.3s;
            margin-top: 10px;
        }

        .add-btn:hover {
            background-color: #3a86ff;
            color: white;
        }

        .promo {
            background: linear-gradient(135deg, #1e2a47, #16213e);
            color: #e6edf3;
            text-align: center;
            padding: 60px 20px;
            border-top: 2px solid #4cc9f0;
            border-bottom: 2px solid #4cc9f0;
        }

        .promo h2 {
            color: #4cc9f0;
            font-weight: 700;
        }

        footer {
            background-color: #0d1b2a;
            color: #a9bcd0;
            text-align: center;
            padding: 20px 0;
            border-top: 1px solid #4cc9f0;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <!-- Logo + Brand -->
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="/assets/circle.png" alt="Tusok-Tusok Logo">
                Tusok-Tusok
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav me-3">
                    <li class="nav-item"><a class="nav-link" href="#menu">Menu</a></li>
                    <li class="nav-item"><a class="nav-link" href="#promo">Promos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
                <div class="d-flex">
                    <a href="login.php" class="auth-btn">Login</a>
                    <a href="signup.php" class="auth-btn">Sign Up</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <section class="hero">
        <div class="hero-content">
            <h1>Tusok-Tusok at Night</h1>
            <p>Where the streets come alive with the aroma of freshly grilled street food.</p>
            <a href="#menu" class="btn">Discover More</a>
        </div>
    </section>

    <!-- Menu -->
    <section id="menu" class="container py-5">
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
            <div class="card food-card text-center">
              <img src="' . $food[2] . '" alt="' . $food[0] . '">
              <div class="card-body">
                <h5 class="card-title">' . $food[0] . '</h5>
                <p>' . $food[1] . '</p>
                <button class="add-btn">Add to Cart</button>
              </div>
            </div>
          </div>';
            }
            ?>
        </div>
    </section>

    <!-- Promo -->
    <section id="promo" class="promo">
        <h2>🔥 Night Market Special!</h2>
        <p>Buy any 4 sticks and get a free cup of Gulaman to refresh your night!</p>
        <a href="#menu" class="btn">Claim Offer</a>
    </section>

    <!-- About -->
    <section id="about" class="container py-5">
        <h2 class="section-title">About Tusok-Tusok</h2>
        <p class="text-center mx-auto" style="max-width: 700px;">
            Tusok-Tusok Street Foods celebrates the heart of Filipino night markets — the laughter, the smoky scent, and the taste of nostalgia.
            Each bite brings you closer to the Filipino spirit of sharing and enjoying simple joys together.
            From Fishballs to Dynamite, we bring street food comfort to your hands.
        </p>
    </section>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Tusok-Tusok Street Foods | Crafted with 💙 in the Philippines</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>