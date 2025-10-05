<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tusok-Tusok | Mood Board</title>
    <link rel="shortcut icon" type="image/png" href="/assets/tusokicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #0d1117;
            color: #e6edf3;
            font-family: 'Poppins', sans-serif;
            padding: 40px;
        }

        h1,
        h2,
        h3 {
            color: #4cc9f0;
            font-weight: 700;
        }

        .color-box {
            height: 50px;
            border-radius: 8px;
            margin-bottom: 8px;
        }

        .card-sample {
            background-color: #161b22;
            border: 1px solid #4cc9f0;
            border-radius: 10px;
            padding: 20px;
            color: #e6edf3;
        }

        .btn-sample {
            margin: 5px;
            border-radius: 8px;
        }

        .logo-sample {
            width: 120px;
            border-radius: 10px;
            box-shadow: 0 0 8px #4cc9f0;
        }

        .divider {
            border-bottom: 1px solid #4cc9f0;
            margin: 30px 0;
        }
    </style>
</head>

<body>

    <h1 class="mb-4">🎨 Tusok-Tusok Mood Board</h1>
    <p class="text-light">Visual identity and design system for the Tusok-Tusok web application.</p>

    <div class="divider"></div>

    <!-- Color System -->
    <section>
        <h2>Color System</h2>
        <p>Main palette featuring shades of dark blue, cyan, and white.</p>
        <div class="row mt-3">
            <div class="col-md-2">
                <div class="color-box" style="background-color:#0d1117;"></div>
                <p>#0D1117 (Background)</p>
            </div>
            <div class="col-md-2">
                <div class="color-box" style="background-color:#161b22;"></div>
                <p>#161B22 (Card Surface)</p>
            </div>
            <div class="col-md-2">
                <div class="color-box" style="background-color:#4cc9f0;"></div>
                <p>#4CC9F0 (Accent Blue)</p>
            </div>
            <div class="col-md-2">
                <div class="color-box" style="background-color:#3a86ff;"></div>
                <p>#3A86FF (Primary)</p>
            </div>
            <div class="col-md-2">
                <div class="color-box" style="background-color:#e6edf3;"></div>
                <p>#E6EDF3 (Text Color)</p>
            </div>
        </div>
    </section>

    <div class="divider"></div>

    <!-- Typography -->
    <section>
        <h2>Typography</h2>
        <p><strong>Heading font:</strong> Poppins — <span style="color:#4cc9f0;">"Taste the Street"</span></p>
        <p><strong>Body font:</strong> Poppins Regular — "Your everyday tusok-tusok made digital."</p>
    </section>

    <div class="divider"></div>

    <!-- Buttons -->
    <section>
        <h2>Buttons</h2>
        <div class="mb-3">
            <p>Light Mode</p>
            <button class="btn btn-primary btn-sample" style="background-color:#3a86ff;border:none;">Primary</button>
            <button class="btn btn-secondary btn-sample" style="background-color:#4cc9f0;border:none;">Secondary</button>
            <button class="btn btn-outline-light btn-sample">Outline</button>
            <button class="btn btn-dark btn-sample" disabled>Disabled</button>
        </div>
        <div>
            <p>Dark Mode</p>
            <button class="btn btn-primary btn-sample" style="background-color:#4cc9f0;border:none;">Primary</button>
            <button class="btn btn-secondary btn-sample" style="background-color:#3a86ff;border:none;">Secondary</button>
            <button class="btn btn-outline-info btn-sample">Outline</button>
            <button class="btn btn-secondary btn-sample" disabled>Disabled</button>
        </div>
    </section>

    <div class="divider"></div>

    <!-- Card Samples -->
    <section>
        <h2>Card Samples</h2>
        <div class="row g-3 mt-2">
            <div class="col-md-4">
                <div class="card-sample">
                    <h4>Orders Completed</h4>
                    <p>1,254</p>
                    <a href="#" class="text-info">View Details</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-sample">
                    <h4>Top Seller</h4>
                    <p>Fishball Combo</p>
                    <a href="#" class="text-info">View Details</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-sample">
                    <h4>Customer Review</h4>
                    <p>"Best tusok-tusok experience ever!"</p>
                    <small>– Juan Dela Cruz</small>
                </div>
            </div>
        </div>
    </section>

    <div class="divider"></div>

    <!-- Logos -->
    <section>
        <h2>Logos</h2>
        <div class="d-flex gap-4 mt-3">
            <div class="text-center">
                <img src="/assets/circle.png" class="logo-sample" alt="Circle Logo">
                <p>Main Logo – Circle</p>
            </div>
            <div class="text-center">
                <img src="/assets/square.png" class="logo-sample" alt="Square Logo">
                <p>Main Logo – Square</p>
            </div>
        </div>
    </section>

</body>

</html>