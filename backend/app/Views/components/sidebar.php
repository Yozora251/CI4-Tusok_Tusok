<aside class="w-64 bg-[#161b22] p-6 flex flex-col justify-between min-h-screen">
    <!-- TOP SECTION -->
    <div>
        <h1 class="text-2xl font-bold text-[#4cc9f0] mb-6">Admin Panel</h1>
        <nav class="flex flex-col space-y-3">
            <a href="/admin/dashboard" class="hover:text-[#4cc9f0] transition">🏠 Dashboard</a>
            <a href="/admin/stocks" class="hover:text-[#4cc9f0] transition">📦 Stocks</a>
            <a href="/admin/accounts" class="hover:text-[#4cc9f0] transition">👥 Accounts</a>
            <a href="/admin/requests" class="hover:text-[#4cc9f0] transition">📩 Requests</a>
        </nav>
    </div>

    <!-- LOGOUT BUTTON -->
    <div class="mt-10 border-t border-gray-700 pt-6">
        <form action="/logout" method="POST">
            <button
                type="submit"
                class="w-full bg-[#4cc9f0] text-black font-semibold py-2 rounded-lg hover:bg-[#3bb0d9] transition duration-200">
                🚪 Log Out
            </button>
        </form>
    </div>
</aside>