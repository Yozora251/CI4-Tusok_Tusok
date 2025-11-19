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
        <img src="/assets/circle.png" alt="Tusok-Tusok Logo"
            class="w-14 mb-4 mx-auto drop-shadow-[0_0_6px_#4cc9f0]">
        <h2 class="text-[#4cc9f0] font-bold text-2xl mb-2">Welcome Back!</h2>
        <p class="text-white mb-6">Login to your Tusok-Tusok account</p>

        <form action="/login" method="post" class="space-y-4" novalidate>
            <?= csrf_field() ?>

            <!-- Username -->
            <div class="text-left">
                <input
                    type="text"
                    name="email"
                    placeholder="Email"
                    value="<?= esc($old['email'] ?? '') ?>"
                    class="w-full bg-[#0d1117] border
                        <?= isset($errors['email']) ? 'border-red-500' : 'border-[#4cc9f0]' ?>
                        text-[#e6edf3] rounded-xl px-4 py-2
                        placeholder-[#a8cfff]
                        focus:border-[#3a86ff] focus:outline-none">

                <?php if (!empty($errors['email'])): ?>
                    <p class="text-red-500 text-sm mt-1">
                        <?= esc($errors['email']) ?>
                    </p>
                <?php endif; ?>
            </div>

            <!-- Password with Show/Hide -->
            <div class="text-left relative">
                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Password"
                    class="w-full bg-[#0d1117] border
                        <?= isset($errors['password']) ? 'border-red-500' : 'border-[#4cc9f0]' ?>
                        text-[#e6edf3] rounded-xl px-4 py-2
                        placeholder-[#a8cfff]
                        focus:border-[#3a86ff] focus:outline-none pr-10">

                <!-- Eye icon -->
                <button type="button"
                    id="togglePassword"
                    class="absolute right-3 top-1/2 transform -translate-y-1/2 text-[#a8cfff] hover:text-[#4cc9f0]">
                    <!-- Eye icon SVG -->
                    <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                </button>

                <?php if (!empty($errors['password'])): ?>
                    <p class="text-red-500 text-sm mt-1">
                        <?= esc($errors['password']) ?>
                    </p>
                <?php endif; ?>
            </div>

            <!-- Primary Button Component -->
            <?= view('components/buttons/button_primary', [
                'text' => 'Login',
                'submit' => true,
                'extraClasses' => 'w-full font-semibold rounded-lg px-4 py-2'
            ]) ?>

            <p class="mt-6">
                Don’t have an account?
                <a href="/signup"
                    class="text-[#4cc9f0] font-medium hover:text-[#3a86ff] hover:underline">
                    Sign up here
                </a>
            </p>

            <!-- Back Button Component -->
            <div class="mt-4">
                <?= view('components/buttons/back_button', [
                    'text' => '← Back Home',
                    'link' => '/',
                    'type' => 'border',
                    'extraClasses' => 'mx-auto'
                ]) ?>
            </div>
        </form>
    </div>

    <!-- Toggle Password Script -->
    <script>
        const password = document.getElementById('password');
        const toggle = document.getElementById('togglePassword');
        const eyeIcon = document.getElementById('eyeIcon');

        toggle.addEventListener('click', () => {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);

            // Change eye icon (eye / eye-off)
            if (type === 'password') {
                eyeIcon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />`;
            } else {
                eyeIcon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M13.875 18.825A10.05 10.05 0 0112 19c-4.477 0-8.268-2.943-9.542-7a10.05 10.05 0 012.042-3.174m2.144-1.676A9.953 9.953 0 0112 5c4.477 0 8.268 2.943 9.542 7a10.05 10.05 0 01-1.248 2.19M15 12a3 3 0 11-6 0 3 3 0 016 0z" />`;
            }
        });
    </script>

</body>

</html>