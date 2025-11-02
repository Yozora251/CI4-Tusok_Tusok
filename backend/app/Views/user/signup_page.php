<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | Tusok-Tusok POS</title>
    <link rel="shortcut icon" type="image/png" href="/assets/tusokicon.ico" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#0d1117] text-[#e6edf3] font-poppins flex items-center justify-center min-h-screen">

    <div class="bg-[#161b22] rounded-2xl shadow-xl w-[420px] p-10 text-center">
        <img src="/assets/circle.png" alt="Tusok-Tusok Logo" class="w-14 mx-auto mb-4 drop-shadow-[0_0_6px_#4cc9f0]">
        <h2 class="text-[#4cc9f0] font-bold text-2xl mb-6">Create an Account</h2>
        <p class="text-white mb-6">Join the Tusok-Tusok family today</p>

        <form action="login.php" method="POST" class="space-y-4">
            <input type="text" name="fullname" placeholder="Full Name"
                class="w-full bg-[#0d1117] border border-[#4cc9f0] text-[#f1f5f9] rounded-xl px-4 py-2 placeholder-[#a8cfff] focus:border-[#3a86ff] focus:shadow-[0_0_6px_#3a86ff] focus:outline-none" required>
            <input type="text" name="username" placeholder="Username"
                class="w-full bg-[#0d1117] border border-[#4cc9f0] text-[#f1f5f9] rounded-xl px-4 py-2 placeholder-[#a8cfff] focus:border-[#3a86ff] focus:shadow-[0_0_6px_#3a86ff] focus:outline-none" required>
            <input type="email" name="email" placeholder="Email Address"
                class="w-full bg-[#0d1117] border border-[#4cc9f0] text-[#f1f5f9] rounded-xl px-4 py-2 placeholder-[#a8cfff] focus:border-[#3a86ff] focus:shadow-[0_0_6px_#3a86ff] focus:outline-none" required>
            <input type="password" name="password" placeholder="Password"
                class="w-full bg-[#0d1117] border border-[#4cc9f0] text-[#f1f5f9] rounded-xl px-4 py-2 placeholder-[#a8cfff] focus:border-[#3a86ff] focus:shadow-[0_0_6px_#3a86ff] focus:outline-none" required>

            <!-- Use button_primary component for Sign Up -->
            <?= view('components/buttons/button_primary', [
                'text' => 'Sign Up',
                'link' => '#',
                'extraClasses' => 'w-full py-2 mt-2'
            ]) ?>
        </form>

        <p class="mt-6">Already have an account?
            <a href="/login_page" class="text-[#4cc9f0] font-medium hover:text-[#3a86ff] hover:underline">Login here</a>
        </p>

        <!-- Use back_button component for back home -->
        <div class="mt-4">
            <?= view('components/buttons/back_button', [
                'text' => '← Back Home',
                'link' => '/',
                'type' => 'border',
                'extraClasses' => 'mx-auto'
            ]) ?>
        </div>
    </div>

</body>

</html>