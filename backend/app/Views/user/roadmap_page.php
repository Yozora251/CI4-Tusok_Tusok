<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tusok-Tusok | Roadmap</title>
    <link rel="shortcut icon" type="image/png" href="/assets/tusokicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
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

        /* Smaller, centered cards */
        .section-card {
            background-color: #161b22;
            border: 1px solid #4cc9f0;
            border-radius: 12px;
            padding: 16px 20px;
            margin: 16px auto;
            width: 70%;
            max-width: 600px;
            text-align: left;
            box-shadow: 0 0 10px rgba(76, 201, 240, 0.1);
        }

        .back-home-btn {
            background-color: #4cc9f0;
            color: #0d1117;
            font-weight: 600;
            border: none;
            border-radius: 8px;
            padding: 8px 18px;
            text-decoration: none;
            transition: 0.3s;
        }

        .back-home-btn:hover {
            background-color: #3a86ff;
            color: #fff;
        }

        .status-badge {
            font-size: 0.8rem;
            font-weight: 600;
            border-radius: 6px;
            padding: 4px 10px;
        }

        .status-progress {
            background-color: #ffb84c;
            color: #0d1117;
        }

        .status-planned {
            background-color: #4cc9f0;
            color: #0d1117;
        }

        .status-backlog {
            background-color: #9ca3af;
            color: #0d1117;
        }

        .status-complete {
            background-color: #16db65;
            color: #0d1117;
        }

        /* Priority colors with good contrast */
        .priority-high {
            color: #ffb84c;
            font-weight: 600;
        }

        .priority-medium {
            color: #4cc9f0;
            font-weight: 600;
        }

        .priority-low {
            color: #9ca3af;
            font-weight: 600;
        }

        .divider {
            border-bottom: 1px solid #4cc9f0;
            margin: 40px 0;
            width: 70%;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>

<body>

    <!-- Back Home Button -->
    <div class="mb-4">
        <a href="/" class="back-home-btn">← Back Home</a>
    </div>

    <!-- Header -->
    <div class="text-center mb-5">
        <h1 class="fw-bold">Tusok-Tusok Roadmap</h1>
        <p class="text-light">A simple overview of our ongoing and completed modules.</p>
    </div>

    <!-- Active/Planned Section -->
    <section class="text-center">
        <h2 class="mb-3">In Progress & Planned</h2>

        <div class="section-card">
            <div class="d-flex justify-content-between align-items-start">
                <h3>User Management</h3>
                <span class="status-badge status-progress">In Progress</span>
            </div>
            <p class="mt-2 mb-1">Manage accounts for admins and customers.</p>
            <small class="priority-high">Priority: High</small>
        </div>

        <div class="section-card">
            <div class="d-flex justify-content-between align-items-start">
                <h3>Menu Management</h3>
                <span class="status-badge status-planned">Planned</span>
            </div>
            <p class="mt-2 mb-1">Add or update the menu like fishballs, kikiam, and tokneneng.</p>
            <small class="priority-medium">Priority: Medium</small>
        </div>

        <div class="section-card">
            <div class="d-flex justify-content-between align-items-start">
                <h3>Order Management</h3>
                <span class="status-badge status-planned">Planned</span>
            </div>
            <p class="mt-2 mb-1">Process and track customer orders efficiently.</p>
            <small class="priority-medium">Priority: Medium</small>
        </div>

        <div class="section-card">
            <div class="d-flex justify-content-between align-items-start">
                <h3>Dashboard Overview</h3>
                <span class="status-badge status-backlog">Backlog</span>
            </div>
            <p class="mt-2 mb-1">View sales insights and popular street food stats.</p>
            <small class="priority-low">Priority: Low</small>
        </div>

        <div class="section-card">
            <div class="d-flex justify-content-between align-items-start">
                <h3>Customer Feedback</h3>
                <span class="status-badge status-backlog">Future</span>
            </div>
            <p class="mt-2 mb-1">Allow customers to share feedback on their tusok-tusok experience.</p>
            <small class="priority-low">Priority: Low</small>
        </div>
    </section>

    <div class="divider"></div>

    <!-- Completed Section -->
    <section class="text-center">
        <h2 class="mb-3">Completed</h2>

        <div class="section-card">
            <div class="d-flex justify-content-between align-items-start">
                <h3>Authentication System</h3>
                <span class="status-badge status-complete">Completed</span>
            </div>
            <p class="mt-2 mb-1">Secure login and signup system for admin and customers.</p>
            <small class="priority-high">Priority: High</small>
        </div>
    </section>

</body>

</html>