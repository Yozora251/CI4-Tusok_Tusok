<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tusok-Tusok Street Foods</title>
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
            background: url('https://images.unsplash.com/photo-1605478269580-3b299c4c45ea?auto=format&fit=crop&w=1600&q=80') center center/cover no-repeat;
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

        .pos-preview {
            background-color: #161b22;
            border-radius: 15px;
            padding: 40px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.4);
            margin-top: 60px;
        }

        .pos-preview h3 {
            color: #4cc9f0;
            margin-bottom: 20px;
        }

        .pos-btn {
            background-color: #4cc9f0;
            color: #0d1117;
            font-weight: 600;
            border-radius: 20px;
            padding: 10px 25px;
            border: none;
            margin: 5px;
            transition: 0.3s;
        }

        .pos-btn:hover {
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
            <a class="navbar-brand" href="#">Tusok-Tusok</a>
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
                ["Fishball", "Crispy golden balls of fish — the ultimate tusok-tusok classic!", "https://images.unsplash.com/photo-1651457786225-f6e9cfb906c4?auto=format&fit=crop&w=600&q=80"],
                ["Chicken Balls", "Juicy and flavorful, perfect with our sweet-spicy dipping sauce.", "https://images.unsplash.com/photo-1668616297920-71f85a68e45d?auto=format&fit=crop&w=600&q=80"],
                ["Squid Ball", "Soft and chewy bites of squid — every dip is an explosion of flavor.", "https://images.unsplash.com/photo-1613490493576-7fde63acd811?auto=format&fit=crop&w=600&q=80"],
                ["Kikiam", "Crunchy on the outside, savory on the inside — a crowd favorite.", "https://images.unsplash.com/photo-1670889584514-3e63a2bba58b?auto=format&fit=crop&w=600&q=80"],
                ["Tokneneng", "Bright orange battered eggs — golden and bursting with taste.", "https://images.unsplash.com/photo-1695236572822-5a6a4c0ef327?auto=format&fit=crop&w=600&q=80"],
                ["Gulaman", "Cool down with this sweet, refreshing drink after your tusok feast.", "https://images.unsplash.com/photo-1558640469-2d7e18a2d2b9?auto=format&fit=crop&w=600&q=80"],
                ["Betamax", "Grilled congealed chicken blood cubes — smoky, bold, and iconic.", "https://images.unsplash.com/photo-1562967916-eb82221dfb36?auto=format&fit=crop&w=600&q=80"],
                ["Calamares", "Crispy fried squid rings served with tangy vinegar dip.", "https://images.unsplash.com/photo-1592839715937-6a3e8cde8f25?auto=format&fit=crop&w=600&q=80"],
                ["Dynamite", "Spicy green chili stuffed with cheese and wrapped in lumpia wrapper.", "https://images.unsplash.com/photo-1632179003909-04b4a6e2db38?auto=format&fit=crop&w=600&q=80"]
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

        <!-- POS Preview -->
        <div class="pos-preview mt-5">
            <h3>🧾 POS System Preview</h3>
            <p>See how your orders are managed — quick, easy, and efficient.</p>
            <div class="my-4">
                <button class="pos-btn">View Orders</button>
                <button class="pos-btn">Checkout</button>
            </div>
            <div class="border-top border-info pt-3 mt-3">
                <p><strong>Current Order:</strong> Fishball x2, Tokneneng x1, Gulaman x1</p>
                <h5>Total: ₱85.00</h5>
            </div>
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