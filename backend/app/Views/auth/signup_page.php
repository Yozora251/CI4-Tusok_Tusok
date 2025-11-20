<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up | Tusok-Tusok POS</title>
    <link rel="shortcut icon" type="image/png" href="/assets/tusokicon.ico" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#0d1117] text-[#e6edf3] font-poppins flex items-center justify-center min-h-screen">

    <div class="bg-[#161b22] rounded-2xl shadow-xl w-[420px] p-10 text-center">
        <img src="/assets/circle.png" alt="Tusok-Tusok Logo" class="w-14 mx-auto mb-4 drop-shadow-[0_0_6px_#4cc9f0]" />
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
            <!-- NOTE: added id attributes and small UI elements (icons, requirements, strength meter) - original inputs preserved -->
            <div class="relative">
                <input type="password" id="password" name="password" required
                    placeholder="Password"
                    class="w-full bg-[#0d1117] border <?= isset($errors['password']) ? 'border-red-500' : 'border-[#4cc9f0]' ?>
                    text-[#f1f5f9] rounded-xl px-4 py-2 placeholder-[#a8cfff] focus:border-[#3a86ff] focus:shadow-[0_0_6px_#3a86ff] focus:outline-none"
                    aria-invalid="<?= isset($errors['password']) ? 'true' : 'false' ?>">
                <?php if (!empty($errors['password'])): ?>
                    <p class="text-red-500 text-sm mt-1"><?= esc($errors['password']) ?></p>
                <?php endif; ?>

                <!-- SVG Eye toggle (absolute over input) -->
                <button type="button" aria-label="Toggle password visibility"
                    id="togglePasswordBtn"
                    class="absolute right-3 top-2 p-1 focus:outline-none" title="Show / Hide password">
                    <!-- Eye icon (start: eye) -->
                    <svg id="icon-eye" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#a8cfff]" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M2.5 12s4-7 9.5-7S21.5 12 21.5 12s-4 7-9.5 7S2.5 12 2.5 12z"></path>
                        <circle cx="12" cy="12" r="3"></circle>
                    </svg>
                    <!-- Eye-off icon (hidden initially) -->
                    <svg id="icon-eye-off" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#a8cfff] hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M3 3l18 18"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M10.58 10.59A3 3 0 0013.41 13.4"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M14.12 14.13C12.98 15.01 11.52 15.5 9.99 15.5 4.99 15.5 2 12 2 12s1.95-2.76 4.46-4.48"></path>
                    </svg>
                </button>
            </div>

            <!-- Password Requirements (ALL rules: length, number, uppercase, lowercase, special char) -->
            <div id="password-requirements" class="text-left text-sm mt-1 space-y-1">
                <p id="req-length" class="text-red-400">• At least 8 characters</p>
                <p id="req-number" class="text-red-400">• Contains a number</p>
                <p id="req-upper" class="text-red-400">• Contains an uppercase letter</p>
                <p id="req-lower" class="text-red-400">• Contains a lowercase letter</p>
                <p id="req-special" class="text-red-400">• Contains a special character (!@#$%^&* etc.)</p>
            </div>

            <!-- Strength meter -->
            <div class="mt-2">
                <div class="w-full bg-[#0b1220] rounded-full h-2 overflow-hidden border border-[#233043]">
                    <div id="strengthBar" class="h-full w-0 rounded-full transition-all"></div>
                </div>
                <p id="strengthText" class="text-left text-xs mt-1 text-[#9aa8b6]">Strength: —</p>
            </div>

            <!-- Confirm Password -->
            <div class="relative">
                <input type="password" id="password_confirm" name="password_confirm" required
                    placeholder="Confirm Password"
                    class="w-full bg-[#0d1117] border <?= isset($errors['password_confirm']) ? 'border-red-500' : 'border-[#4cc9f0]' ?>
                    text-[#f1f5f9] rounded-xl px-4 py-2 placeholder-[#a8cfff] focus:border-[#3a86ff] focus:shadow-[0_0_6px_#3a86ff] focus:outline-none"
                    aria-invalid="<?= isset($errors['password_confirm']) ? 'true' : 'false' ?>">
                <?php if (!empty($errors['password_confirm'])): ?>
                    <p class="text-red-500 text-sm mt-1"><?= esc($errors['password_confirm']) ?></p>
                <?php endif; ?>

                <!-- SVG Eye toggle for confirm -->
                <button type="button" aria-label="Toggle confirm password visibility"
                    id="toggleConfirmBtn"
                    class="absolute right-3 top-2 p-1 focus:outline-none" title="Show / Hide confirm password">
                    <svg id="icon-eye2" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#a8cfff]" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M2.5 12s4-7 9.5-7S21.5 12 21.5 12s-4 7-9.5 7S2.5 12 2.5 12z"></path>
                        <circle cx="12" cy="12" r="3"></circle>
                    </svg>
                    <svg id="icon-eye-off2" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#a8cfff] hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M3 3l18 18"></path>
                    </svg>
                </button>
            </div>

            <!-- Match indicator -->
            <p id="matchText" class="text-left text-sm mt-1 text-red-400">• Passwords must match</p>

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

    <!-- Full feature script: show/hide, live requirements, strength meter, enable/disable submit -->
    <script>
        (function() {
            // Elements
            const pass = document.getElementById('password');
            const confirmPass = document.getElementById('password_confirm');
            const reqLength = document.getElementById('req-length');
            const reqNumber = document.getElementById('req-number');
            const reqUpper = document.getElementById('req-upper');
            const reqLower = document.getElementById('req-lower');
            const reqSpecial = document.getElementById('req-special');
            const matchText = document.getElementById('matchText');
            const strengthBar = document.getElementById('strengthBar');
            const strengthText = document.getElementById('strengthText');

            // Find the submit button rendered by your PHP component (keeps your component intact)
            const submitBtn = (function() {
                // prefer form-local submit
                const form = document.querySelector('form');
                if (!form) return null;
                // first try button[type=submit] inside form
                const btn = form.querySelector('button[type="submit"], input[type="submit"]');
                return btn || null;
            })();

            // Utility: replace class for color toggles
            function mark(el, ok) {
                if (!el) return;
                if (ok) {
                    el.classList.remove('text-red-400');
                    el.classList.add('text-green-400');
                } else {
                    el.classList.remove('text-green-400');
                    el.classList.add('text-red-400');
                }
            }

            // Strength meter calculation (simple): score points for each satisfied rule + length extra
            function calculateStrength(pw) {
                let score = 0;
                if (pw.length >= 8) score += 2; // length weighted
                if (/\d/.test(pw)) score += 1;
                if (/[A-Z]/.test(pw)) score += 1;
                if (/[a-z]/.test(pw)) score += 1;
                if (/[^A-Za-z0-9]/.test(pw)) score += 1;
                // max score = 6
                return score;
            }

            function updateStrengthUI(score) {
                const percent = Math.min(100, Math.round((score / 6) * 100));
                strengthBar.style.width = percent + '%';
                strengthBar.classList.remove('bg-red-500', 'bg-yellow-400', 'bg-green-400');

                if (score <= 2) {
                    strengthBar.classList.add('bg-red-500');
                    strengthText.textContent = 'Strength: Weak';
                } else if (score <= 4) {
                    strengthBar.classList.add('bg-yellow-400');
                    strengthText.textContent = 'Strength: Medium';
                } else {
                    strengthBar.classList.add('bg-green-400');
                    strengthText.textContent = 'Strength: Strong';
                }
            }

            function validateAll() {
                const value = pass.value;

                // rules
                const okLength = value.length >= 8;
                const okNumber = /\d/.test(value);
                const okUpper = /[A-Z]/.test(value);
                const okLower = /[a-z]/.test(value);
                const okSpecial = /[^A-Za-z0-9]/.test(value);

                // update UI for each rule
                mark(reqLength, okLength);
                mark(reqNumber, okNumber);
                mark(reqUpper, okUpper);
                mark(reqLower, okLower);
                mark(reqSpecial, okSpecial);

                // match
                const match = (value !== '' && value === confirmPass.value);
                mark(matchText, match);

                // update strength
                const score = calculateStrength(value);
                updateStrengthUI(score);

                // enable submit only when all rules + match satisfied
                const allValid = okLength && okNumber && okUpper && okLower && okSpecial && match;

                if (submitBtn) {
                    if (allValid) {
                        submitBtn.disabled = false;
                        // visual enable: try to mimic primary button styling if it was previously disabled
                        submitBtn.classList.remove('opacity-50', 'cursor-not-allowed');
                        // ensure a nice background if component had none; do not override existing classes if present
                        if (!submitBtn.classList.contains('bg-[#4cc9f0]') && !submitBtn.classList.contains('bg-green-400')) {
                            // don't force if component already styles it; only add hover color
                            submitBtn.classList.add('bg-[#4cc9f0]');
                            submitBtn.classList.add('hover:bg-[#3a86ff]');
                        }
                    } else {
                        submitBtn.disabled = true;
                        submitBtn.classList.add('opacity-50', 'cursor-not-allowed');
                        // keep existing classes otherwise
                    }
                }

                return allValid;
            }

            // initial run
            validateAll();

            // events
            pass.addEventListener('input', validateAll);
            confirmPass.addEventListener('input', validateAll);

            // Show/Hide logic for password (SVG swapping)
            const togglePasswordBtn = document.getElementById('togglePasswordBtn');
            const iconEye = document.getElementById('icon-eye');
            const iconEyeOff = document.getElementById('icon-eye-off');

            togglePasswordBtn.addEventListener('click', function() {
                const isPw = pass.type === 'password';
                pass.type = isPw ? 'text' : 'password';
                iconEye.classList.toggle('hidden');
                iconEyeOff.classList.toggle('hidden');
                // keep focus after click
                pass.focus();
            });

            const toggleConfirmBtn = document.getElementById('toggleConfirmBtn');
            const iconEye2 = document.getElementById('icon-eye2');
            const iconEyeOff2 = document.getElementById('icon-eye-off2');

            toggleConfirmBtn.addEventListener('click', function() {
                const isPw = confirmPass.type === 'password';
                confirmPass.type = isPw ? 'text' : 'password';
                iconEye2.classList.toggle('hidden');
                iconEyeOff2.classList.toggle('hidden');
                confirmPass.focus();
            });

            // Prevent form submit if not valid as a extra safety (client-side)
            const form = document.querySelector('form');
            form.addEventListener('submit', function(e) {
                if (!validateAll()) {
                    e.preventDefault();
                    // brief shake or alert (non-intrusive)
                    submitBtn.classList.add('animate-shake');
                    setTimeout(() => submitBtn.classList.remove('animate-shake'), 400);
                }
            });

            // Tiny keyframes for shake (inject)
            const style = document.createElement('style');
            style.textContent = `
              @keyframes shake {
                0% { transform: translateX(0); }
                25% { transform: translateX(-4px); }
                50% { transform: translateX(4px); }
                75% { transform: translateX(-4px); }
                100% { transform: translateX(0); }
              }
              .animate-shake { animation: shake 0.35s; }
            `;
            document.head.appendChild(style);
        })();
    </script>

</body>

</html>