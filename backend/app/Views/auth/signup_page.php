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

        <!-- Signup Form -->
        <form action="/signup" method="POST" class="space-y-4" novalidate>
            <?= csrf_field() ?>

            <!-- First Name -->
            <input type="text" name="first_name" required
                value="<?= esc($old['first_name'] ?? '') ?>"
                placeholder="First Name"
                class="w-full bg-[#0d1117] border <?= isset($errors['first_name']) ? 'border-red-500' : 'border-[#4cc9f0]' ?>
                text-[#f1f5f9] rounded-xl px-4 py-2 placeholder-[#a8cfff] focus:border-[#3a86ff] focus:shadow-[0_0_6px_#3a86ff] focus:outline-none"
                aria-invalid="<?= isset($errors['first_name']) ? 'true' : 'false' ?>">
            <?php if (!empty($errors['first_name'])): ?>
                <p class="text-red-500 text-sm mt-1"><?= esc($errors['first_name']) ?></p>
            <?php endif; ?>

            <!-- Middle Name -->
            <input type="text" name="middle_name"
                value="<?= esc($old['middle_name'] ?? '') ?>"
                placeholder="Middle Name (optional)"
                class="w-full bg-[#0d1117] border <?= isset($errors['middle_name']) ? 'border-red-500' : 'border-[#4cc9f0]' ?>
                text-[#f1f5f9] rounded-xl px-4 py-2 placeholder-[#a8cfff] focus:border-[#3a86ff] focus:shadow-[0_0_6px_#3a86ff] focus:outline-none"
                aria-invalid="<?= isset($errors['middle_name']) ? 'true' : 'false' ?>">
            <?php if (!empty($errors['middle_name'])): ?>
                <p class="text-red-500 text-sm mt-1"><?= esc($errors['middle_name']) ?></p>
            <?php endif; ?>

            <!-- Last Name -->
            <input type="text" name="last_name" required
                value="<?= esc($old['last_name'] ?? '') ?>"
                placeholder="Last Name"
                class="w-full bg-[#0d1117] border <?= isset($errors['last_name']) ? 'border-red-500' : 'border-[#4cc9f0]' ?>
                text-[#f1f5f9] rounded-xl px-4 py-2 placeholder-[#a8cfff] focus:border-[#3a86ff] focus:shadow-[0_0_6px_#3a86ff] focus:outline-none"
                aria-invalid="<?= isset($errors['last_name']) ? 'true' : 'false' ?>">
            <?php if (!empty($errors['last_name'])): ?>
                <p class="text-red-500 text-sm mt-1"><?= esc($errors['last_name']) ?></p>
            <?php endif; ?>

            <!-- Email -->
            <input type="email" name="email" required
                value="<?= esc($old['email'] ?? '') ?>"
                placeholder="Email Address"
                class="w-full bg-[#0d1117] border <?= isset($errors['email']) ? 'border-red-500' : 'border-[#4cc9f0]' ?>
                text-[#f1f5f9] rounded-xl px-4 py-2 placeholder-[#a8cfff] focus:border-[#3a86ff] focus:shadow-[0_0_6px_#3a86ff] focus:outline-none"
                aria-invalid="<?= isset($errors['email']) ? 'true' : 'false' ?>">
            <?php if (!empty($errors['email'])): ?>
                <p class="text-red-500 text-sm mt-1"><?= esc($errors['email']) ?></p>
            <?php endif; ?>

            <!-- Password -->
            <input type="password" name="password" required
                placeholder="Password"
                class="w-full bg-[#0d1117] border <?= isset($errors['password']) ? 'border-red-500' : 'border-[#4cc9f0]' ?>
                text-[#f1f5f9] rounded-xl px-4 py-2 placeholder-[#a8cfff] focus:border-[#3a86ff] focus:shadow-[0_0_6px_#3a86ff] focus:outline-none"
                aria-invalid="<?= isset($errors['password']) ? 'true' : 'false' ?>">
            <?php if (!empty($errors['password'])): ?>
                <p class="text-red-500 text-sm mt-1"><?= esc($errors['password']) ?></p>
            <?php endif; ?>

            <!-- Confirm Password -->
            <input type="password" name="password_confirm" required
                placeholder="Confirm Password"
                class="w-full bg-[#0d1117] border <?= isset($errors['password_confirm']) ? 'border-red-500' : 'border-[#4cc9f0]' ?>
                text-[#f1f5f9] rounded-xl px-4 py-2 placeholder-[#a8cfff] focus:border-[#3a86ff] focus:shadow-[0_0_6px_#3a86ff] focus:outline-none"
                aria-invalid="<?= isset($errors['password_confirm']) ? 'true' : 'false' ?>">
            <?php if (!empty($errors['password_confirm'])): ?>
                <p class="text-red-500 text-sm mt-1"><?= esc($errors['password_confirm']) ?></p>
            <?php endif; ?>

            <!-- Submit -->
            <?= view('components/buttons/button_primary', [
                'text' => 'Sign Up',
                'submit' => true,
                'extraClasses' => 'w-full py-2 mt-2'
            ]) ?>
        </form>

        <p class="mt-6">Already have an account?
            <a href="/login" class="text-[#4cc9f0] font-medium hover:text-[#3a86ff] hover:underline">Login here</a>
        </p>

        <!-- Back Home Button -->
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