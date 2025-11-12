<!DOCTYPE html>
<html lang="en" class="bg-orange-50">

<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
    <title>Garlic Shrimp Admin - Dashboard</title>
    <style>
        /* Define the core colors */
        :root {
            /* General Accent Color (Used for all non-button highlights) */
            --color-accent: #FF7F00;
            /* Vibrant Orange for a lively theme */
            --color-accent-dark: #E67200;
            /* Slightly deeper for hover states */

            /* Specific Color for Primary Buttons (The user's requested color) */
            --color-button: #FFA53F;
            --color-button-dark: #F9932E;
            /* Darker shade for hover */

            --color-background: #FFF7ED;
            /* Light Cream */
            --color-card-bg: #FFFFFF;
            --color-link-hover: #FEF3E8;
            /* Lighter cream/orange for link hover */
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--color-background);
        }

        /* SIDEBAR STYLES */
        .sidebar {
            background-color: var(--color-card-bg);
            width: 250px;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.05);
            border-right: 1px solid #FDE6CE;
        }

        .sidebar a {
            padding: 1rem 1.5rem;
            display: flex;
            align-items: center;
            color: #4B5563;
            transition: background-color 0.2s, color 0.2s;
            border-left: 5px solid transparent;
        }

        /* Active links use the general accent color */
        .sidebar a:hover,
        .sidebar a.active {
            background-color: var(--color-link-hover);
            color: var(--color-accent);
            border-left-color: var(--color-accent);
        }

        /* Sidebar title uses the general accent color */
        .sidebar-title {
            color: var(--color-accent);
        }

        /* Welcome banner uses the general accent color */
        .welcome-banner {
            background-color: var(--color-accent);
            color: white;
            padding: 0.75rem 1.5rem;
            font-weight: 600;
            border-left: none;
        }

        /* CARD STYLES */
        .card {
            background-color: var(--color-card-bg);
            transition: transform 0.2s, box-shadow 0.2s;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -2px rgba(0, 0, 0, 0.03);
            border: 1px solid #FEEFDB;
        }

        .card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -4px rgba(0, 0, 0, 0.05);
        }

        /* Card icons and titles use the general accent color */
        .card-icon,
        .card-title {
            color: var(--color-accent);
        }

        /* ANNOUNCEMENT BANNER uses the general accent color */
        .announcement-banner {
            background-color: var(--color-accent);
        }

        /* LOGOUT BUTTON STYLES (Applies the specific button color) */
        .logout-button {
            background-color: var(--color-button);
        }

        .logout-button:hover {
            background-color: var(--color-button-dark);
        }
    </style>
</head>

<body class="flex min-h-screen text-gray-800">

    <!-- SIDEBAR -->
    <aside class="top-0 sticky flex flex-col h-screen sidebar">
        <div class="p-6">
            <h2 class="font-bold text-3xl sidebar-title">Garlic Shrimp</h2>
            <p class="mt-1 text-gray-500 text-sm">Admin Panel</p>
        </div>

        <a class="text-lg welcome-banner">Welcome, Admin</a>

        <nav class="flex-grow mt-4">
            <ul>
                <li>
                    <a href="/dashboard" class="active">
                        <svg class="mr-3 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="/shrimpMenu">
                        <svg class="mr-3 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                        Shrimp Menu
                    </a>
                </li>
                <li>
                    <a href="/accounts">
                        <svg class="mr-3 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M12 20.005h.01m-10.875-.005C2.187 17.135 4.6 15 7.5 15h9c2.9 0 5.313 2.135 5.488 5.005M12 12a4 4 0 100-8 4 4 0 000 8z"></path>
                        </svg>
                        Accounts
                    </a>
                </li>
                <li>
                    <a href="/requests">
                        <svg class="mr-3 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8m-2 2v7a2 2 0 01-2 2H7a2 2 0 01-2-2v-7m14 0V6a2 2 0 00-2-2H7a2 2 0 00-2 2v4l7 5 7-5z"></path>
                        </svg>
                        Requests
                    </a>
                </li>
            </ul>
        </nav>
        <div class="p-6 border-gray-200 border-t">
            <!-- LOGOUT BUTTON - USES THE SPECIFIC BUTTON COLOR #FFA53F -->
            <a href="/logout" class="flex justify-center items-center px-4 py-2 rounded-lg font-semibold text-white transition-colors logout-button">
                <svg class="mr-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                </svg>
                Logout
            </a>
        </div>
    </aside>

    <!-- MAIN CONTENT -->
    <div class="flex flex-col flex-grow">

        <!-- HEADER -->
        <header class="top-0 z-10 sticky bg-white shadow-sm p-4 border-gray-100 border-b">
            <h1 class="font-bold text-gray-800 text-3xl">Dashboard</h1>
        </header>

        <!-- MAIN AREA -->
        <main class="flex-grow p-8">

            <!-- ANNOUNCEMENT BANNER - UPDATED WORDING -->
            <div class="flex items-center shadow-xl mb-8 p-4 rounded-lg font-medium text-white announcement-banner">
                <svg class="mr-3 w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span>Your central hub for running all Garlic Shrimp Co. operations smoothly and effectively.</span>
            </div>

            <!-- DASHBOARD CARDS -->
            <div class="gap-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">

                <!-- Card for Shrimp Menu -->
                <a href="/shrimpMenu" class="flex flex-col items-center p-8 rounded-xl text-center cursor-pointer card">
                    <svg class="mb-4 w-12 h-12 card-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                    </svg>
                    <h3 class="mb-1 font-semibold text-xl card-title">Shrimp Menu</h3>
                    <p class="text-gray-500 text-sm">Manage all shrimp dishes and menu items.</p>
                </a>

                <a href="/accounts" class="flex flex-col items-center p-8 rounded-xl text-center cursor-pointer card">
                    <svg class="mb-4 w-12 h-12 card-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M12 20.005h.01m-10.875-.005C2.187 17.135 4.6 15 7.5 15h9c2.9 0 5.313 2.135 5.488 5.005M12 12a4 4 0 100-8 4 4 0 000 8z"></path>
                    </svg>
                    <h3 class="mb-1 font-semibold text-xl card-title">Accounts</h3>
                    <p class="text-gray-500 text-sm">View and manage user accounts and profiles.</p>
                </a>

                <a href="/requests" class="flex flex-col items-center p-8 rounded-xl text-center cursor-pointer card">
                    <svg class="mb-4 w-12 h-12 card-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8m-2 2v7a2 2 0 01-2 2H7a2 2 0 01-2-2v-7m14 0V6a2 2 0 00-2-2H7a2 2 0 00-2 2v4l7 5 7-5z"></path>
                    </svg>
                    <h3 class="mb-1 font-semibold text-xl card-title">Requests</h3>
                    <p class="text-gray-500 text-sm">Handle customer service and special requests.</p>
                </a>
            </div>
        </main>
    </div>

    <script type="module">
        console.log("Admin Dashboard loaded with correct routing links.");
    </script>
</body>

</html>