<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tusok-Tusok | Roadmap</title>
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

        .divider {
            border-bottom: 1px solid #4cc9f0;
            margin: 30px 0;
        }

        .roadmap-section {
            background-color: #161b22;
            border: 1px solid #4cc9f0;
            border-radius: 12px;
            padding: 25px;
            margin-bottom: 25px;
        }

        .roadmap-section h3 {
            color: #3a86ff;
        }

        ul {
            list-style-type: "🟢 ";
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
    </style>
</head>

<body>

    <!-- Back Home Button -->
    <div class="mb-4">
        <a href="/" class="back-home-btn">← Back Home</a>
    </div>

    <h1 class="mb-3">Tusok-Tusok Development Roadmap</h1>
    <p class="text-light mb-4">A structured guide outlining each core module in the Tusok-Tusok web application.</p>

    <div class="divider"></div>

    <!-- User Management -->
    <section class="roadmap-section">
        <h3>1. User Management (Accounts for Cashiers, Admins, Staff)</h3>
        <p>Handles all account-related functions within the system.</p>
        <ul>
            <li><strong>Create:</strong> Admin can create new employee or cashier accounts.</li>
            <li><strong>Read:</strong> Admin can view the list of employees and their roles.</li>
            <li><strong>Update:</strong> Admin can update employee information (e.g., role changes, password resets).</li>
            <li><strong>Delete:</strong> (Optional/Restricted) Admin can deactivate employees who leave the business.</li>
        </ul>
    </section>

    <!-- Service Management -->
    <section class="roadmap-section">
        <h3>2. Service Management (Menu / Street Foods)</h3>
        <p>Focuses on menu customization and availability management.</p>
        <ul>
            <li><strong>Create:</strong> Admin adds new food items (e.g., Fishball, Kwek-Kwek, Silog meals).</li>
            <li><strong>Read:</strong> Cashiers and customers can view available menu items.</li>
            <li><strong>Update:</strong> Admin can change prices, descriptions, or availability of menu items.</li>
            <li><strong>Delete:</strong> Admin can discontinue or remove a menu item if it's no longer offered.</li>
        </ul>
    </section>

    <!-- Request Management -->
    <section class="roadmap-section">
        <h3>3. Request Management (Customer Orders)</h3>
        <p>Manages all customer orders and their current statuses.</p>
        <ul>
            <li><strong>Create:</strong> Cashiers record a new customer order in the POS system.</li>
            <li><strong>Read:</strong> Cashiers/Admins can view order history; customers can see their current order status (optional).</li>
            <li><strong>Update:</strong> Cashiers/Admins can update order status (e.g., "Pending", "Cooking", "Served").</li>
            <li><strong>Delete:</strong> Not usually allowed (for audit/sales tracking), but Admin may cancel incorrect or duplicate orders.</li>
        </ul>
    </section>

</body>

</html>