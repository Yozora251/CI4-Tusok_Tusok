<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Tusok-Tusok POS</title>
    <link rel="shortcut icon" type="image/png" href="/assets/tusokicon.ico" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#0d1117] text-[#e6edf3] font-poppins flex items-center justify-center min-h-screen">

    <div class="bg-[#161b22] rounded-2xl shadow-xl w-[380px] p-10 text-center">
        <img src="/assets/circle.png" alt="Tusok-Tusok Logo" class="w-14 mb-4 mx-auto drop-shadow-[0_0_6px_#4cc9f0]">
        <h2 class="text-[#4cc9f0] font-bold text-2xl mb-6">Welcome Back!</h2>
        <p class="text-white mb-6">Login to your Tusok-Tusok account</p>

        <form action="dashboard.php" method="POST" class="space-y-4">
            <input type="text" name="username" placeholder="Username"
                class="w-full bg-[#0d1117] border border-[#4cc9f0] text-[#e6edf3] rounded-xl px-4 py-2 placeholder-[#a8cfff] focus:border-[#3a86ff] focus:outline-none">
            <input type="password" name="password" placeholder="Password"
                class="w-full bg-[#0d1117] border border-[#4cc9f0] text-[#e6edf3] rounded-xl px-4 py-2 placeholder-[#a8cfff] focus:border-[#3a86ff] focus:outline-none">

            <!-- Use button_primary component -->
            <?= view('components/buttons/button_primary', [
                'text' => 'Login',
                'extraClasses' => 'w-full py-2 mt-2'
            ]) ?>
        </form>

        <p class="mt-6">Don’t have an account?
            <a href="/signup_page" class="text-[#4cc9f0] font-medium hover:text-[#3a86ff] hover:underline">Sign up here</a>
        </p>

        <!-- Use back_button component -->
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