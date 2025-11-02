<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Accounts | Tusok-Tusok Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#0d1117] text-[#e6edf3] flex min-h-screen">

    <?= view('components/sidebar') ?>

    <main class="flex-1 p-10">
        <h2 class="text-3xl font-bold text-[#4cc9f0] mb-6">User Accounts</h2>

        <div class="bg-[#161b22] p-6 rounded-xl shadow-lg">
            <table class="w-full text-left">
                <thead class="border-b border-gray-700">
                    <tr>
                        <th class="py-3">Name</th>
                        <th class="py-3">Email</th>
                        <th class="py-3">Role</th>
                        <th class="py-3 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-gray-800">
                        <td class="py-3">Juan Dela Cruz</td>
                        <td>juan@example.com</td>
                        <td>Admin</td>
                        <td class="text-right">
                            <button class="bg-[#4cc9f0] text-black px-3 py-1 rounded">Edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-3">Maria Santos</td>
                        <td>maria@example.com</td>
                        <td>Employee</td>
                        <td class="text-right">
                            <button class="bg-[#4cc9f0] text-black px-3 py-1 rounded">Edit</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>