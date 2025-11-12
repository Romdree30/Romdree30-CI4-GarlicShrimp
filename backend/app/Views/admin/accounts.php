<!DOCTYPE html>
<html lang="en" class="bg-orange-50">

<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght0,400;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">
    <title>Garlic Shrimp Admin - Accounts</title>
    <style>
        /* Define the core colors (Consistent with Dashboard) */
        :root {
            --color-accent: #FF7F00;
            /* Vibrant Orange */
            --color-accent-dark: #E67200;
            --color-button: #FFA53F;
            --color-button-dark: #F9932E;

            --color-background: #FFF7ED;
            /* Light Cream */
            --color-card-bg: #FFFFFF;
            --color-link-hover: #FEF3E8;

            /* Status Colors */
            --color-active-bg: #D1FAE5;
            /* Light Green */
            --color-active-text: #059669;
            /* Dark Green Text */
            --color-inactive-bg: #FEE2E2;
            /* Light Red */
            --color-inactive-text: #EF4444;
            /* Dark Red Text */

            /* Stats Card Backgrounds for visual pop */
            --color-total-bg: #FFEDD5;
            /* Lighter Accent background */
            --color-admin-bg-count: #EEF2FF;
            /* Indigo-50 */
            --color-client-bg-count: #EFF6FF;
            /* Blue-50 */
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--color-background);
            color: #1F2937;
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

        .sidebar a:hover,
        .sidebar a.active {
            background-color: var(--color-link-hover);
            color: var(--color-accent);
            border-left-color: var(--color-accent);
        }

        .sidebar-title {
            color: var(--color-accent);
        }

        .welcome-banner {
            background-color: var(--color-accent);
            color: white;
            padding: 0.75rem 1.5rem;
            font-weight: 600;
            border-left: none;
        }

        /* CARD STYLES */
        .stat-card {
            background-color: var(--color-card-bg);
            transition: transform 0.2s, box-shadow 0.2s;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -2px rgba(0, 0, 0, 0.03);
            border: 1px solid #FEEFDB;
        }

        .stat-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -4px rgba(0, 0, 0, 0.05);
        }

        /* TABLE STYLES */
        .data-table {
            background-color: var(--color-card-bg);
            /* Ensure bottom corners are rounded since there is no footer */
            border-radius: 0.75rem;
            /* rounded-xl */
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -2px rgba(0, 0, 0, 0.03);
            border: 1px solid #FEEFDB;
        }

        .table-header {
            background-color: #F9FAFB;
            color: #4B5563;
        }

        .table-row-hover:hover {
            background-color: var(--color-link-hover);
        }

        /* Status Badge Design */
        .status-badge {
            display: inline-flex;
            align-items: center;
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            /* Pill shape */
            font-size: 0.75rem;
            font-weight: 600;
        }

        .status-active-badge {
            background-color: var(--color-active-bg);
            color: var(--color-active-text);
        }

        .status-inactive-badge {
            background-color: var(--color-inactive-bg);
            color: var(--color-inactive-text);
        }

        /* Action Button Design (Outline) */
        .action-edit {
            color: var(--color-accent);
            border: 2px solid var(--color-accent);
            background-color: white;
            transition: background-color 0.1s;
        }

        .action-edit:hover {
            background-color: var(--color-link-hover);
        }

        .action-delete {
            color: #EF4444;
            /* Red Text */
            border: 2px solid #EF4444;
            background-color: white;
            transition: background-color 0.1s;
        }

        .action-delete:hover {
            background-color: #FEF2F2;
            /* Light Red Hover */
        }
    </style>
</head>

<body class="flex min-h-screen">

    <!-- SIDEBAR (Unchanged from previous version for consistency) -->
    <aside class="top-0 sticky flex flex-col h-screen sidebar">
        <div class="p-6">
            <h2 class="font-bold text-3xl sidebar-title">Garlic Shrimp</h2>
            <p class="mt-1 text-gray-500 text-sm">Admin Panel</p>
        </div>

        <a class="text-lg welcome-banner">Welcome, Admin</a>

        <nav class="flex-grow mt-4">
            <ul>
                <li>
                    <a href="/dashboard">
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
                    <a href="/accounts" class="active">
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
            <!-- LOGOUT BUTTON -->
            <a href="/" class="flex justify-center items-center bg-[var(--color-button)] hover:bg-[var(--color-button-dark)] shadow-md px-4 py-2 rounded-lg font-semibold text-white transition-colors">
                <svg class="mr-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                </svg>
                Logout
            </a>
        </div>
    </aside>

    <!-- MAIN CONTENT -->
    <div class="flex flex-col flex-grow p-8">

        <!-- HEADER -->
        <header class="bg-white shadow-sm -m-4 mb-6 p-4 border-gray-100 border-b rounded-xl">
            <h1 class="mb-1 font-bold text-gray-800 text-4xl">Accounts</h1>
            <p class="text-gray-500 text-lg">View and manage all users by type and status.</p>
        </header>

        <!-- STATISTICS CARDS (User Type Distribution) -->
        <div class="gap-6 grid grid-cols-1 md:grid-cols-3 mb-8" id="stats-container">
            <!-- Cards will be populated here -->
        </div>

        <!-- ADD USER BUTTON -->
        <div class="mb-6">
            <button onclick="alertMessage('Add User feature not implemented yet.', 'info')" class="flex items-center bg-[var(--color-accent)] shadow-md px-5 py-2 rounded-lg font-semibold text-white transition-colors hover:bg-[var(--color-accent-dark)]">
                <svg class="mr-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                Add User
            </button>
        </div>

        <!-- USER TABLE CONTAINER -->
        <div class="data-table flex flex-col shadow-lg rounded-xl overflow-hidden">
            <div class="overflow-x-auto">
                <table class="divide-y divide-gray-200 min-w-full">
                    <thead>
                        <tr class="table-header font-medium text-sm text-left uppercase tracking-wider">
                            <th class="px-6 py-3">ID</th>
                            <th class="px-6 py-3">Name</th>
                            <th class="px-6 py-3 text-center">Actions</th>
                            <th class="px-6 py-3">Email</th>
                            <th class="px-6 py-3">Type</th>
                            <th class="px-6 py-3 text-center">Status</th>
                        </tr>
                    </thead>
                    <tbody id="accounts-table-body" class="divide-y divide-gray-100">
                        <!-- Data rows will be inserted here by JavaScript -->
                    </tbody>
                </table>
            </div>
            <!-- The Table Footer element has been removed entirely -->
        </div>

        <!-- Custom Alert/Message Box -->
        <div id="alert-box" class="right-4 bottom-4 z-50 fixed opacity-0 transition-opacity duration-300 pointer-events-none">
            <div id="alert-content" class="shadow-xl p-4 rounded-lg font-medium text-white"></div>
        </div>
    </div>

    <script type="module">
        // --- DATA SETUP (All accounts set to status: 1 - Active) ---
        const ACCOUNTS_DATA = [{
                id: '123456789',
                name: 'Romeo Andree Bundalian',
                email: 'romdreeb7645@gmail.com',
                type: 'admin',
                status: 1,
            },
            {
                id: '987654321',
                name: 'Maria Clara D. Santos',
                email: 'maria.clara@example.com',
                type: 'client',
                status: 1,
            },
            {
                id: '987654322',
                name: 'Juan Miguel R. Del Rosario',
                email: 'juan.delrosario@example.com',
                type: 'client',
                status: 1,
            }
        ];

        // --- UTILITY FUNCTIONS ---
        function alertMessage(message, type = 'info') {
            const box = document.getElementById('alert-box');
            const content = document.getElementById('alert-content');
            let bgColor = (type === 'success') ? 'bg-green-500' : (type === 'error') ? 'bg-red-500' : 'bg-blue-500';
            content.className = `p-4 rounded-lg shadow-xl text-white font-medium ${bgColor}`;
            content.textContent = message;
            box.classList.remove('opacity-0', 'pointer-events-none');

            setTimeout(() => {
                box.classList.add('opacity-0', 'pointer-events-none');
            }, 3000);
        }

        // --- RENDER FUNCTIONS ---

        function renderStatistics() {
            const totalUsers = ACCOUNTS_DATA.length;
            const adminUsers = ACCOUNTS_DATA.filter(a => a.type === 'admin').length;
            const clientUsers = ACCOUNTS_DATA.filter(a => a.type === 'client').length;

            const stats = [{
                    title: 'Total Accounts',
                    count: totalUsers,
                    icon: `<svg class="w-8 h-8 text-[var(--color-accent)]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-3m-4 0a3 3 0 00-3-3H6a3 3 0 00-3 3v3h5m0 0a3 3 0 00-3-3h3a3 3 0 00-3-3V7a3 3 0 013-3h6a3 3 0 013 3v3a3 3 0 00-3 3h3a3 3 0 00-3 3v3z"></path></svg>`,
                    textColor: 'text-[var(--color-accent)]',
                    bgClass: 'bg-[var(--color-total-bg)]'
                },
                {
                    title: 'Admin Users',
                    count: adminUsers,
                    icon: `<svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2v5.52l-2-2-3 3 2 2H9a2 2 0 01-2-2V9a2 2 0 012-2h6zm0 0l-3 3m3-3V3"></path></svg>`,
                    textColor: 'text-indigo-600',
                    bgClass: 'bg-[var(--color-admin-bg-count)]'
                },
                {
                    title: 'Client Users',
                    count: clientUsers,
                    icon: `<svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-3M5 20h5v-3m-5 0a3 3 0 013-3h8a3 3 0 013 3m-10 0V7a3 3 0 013-3h2a3 3 0 013 3v10m-3-4h-2"></path></svg>`,
                    textColor: 'text-blue-600',
                    bgClass: 'bg-[var(--color-client-bg-count)]'
                },
            ];

            const container = document.getElementById('stats-container');
            container.innerHTML = stats.map(stat => `
                <div class="flex items-center space-x-4 p-5 rounded-xl stat-card">
                    <div class="p-3 rounded-full ${stat.bgClass}">
                        ${stat.icon}
                    </div>
                    <div>
                        <p class="text-3xl font-extrabold ${stat.textColor}">${stat.count}</p>
                        <p class="font-semibold text-gray-500 text-sm uppercase">${stat.title}</p>
                    </div>
                </div>
            `).join('');
        }

        function renderTable() {
            const tbody = document.getElementById('accounts-table-body');
            tbody.innerHTML = ACCOUNTS_DATA.map(account => {
                const is_active = account.status === 1;
                const statusText = is_active ? 'Active' : 'Inactive';
                const statusClass = is_active ? 'status-active-badge' : 'status-inactive-badge';

                return `
                    <tr class="table-row-hover text-gray-700 text-sm">
                        <!-- ID: Now showing the full ID -->
                        <td class="px-6 py-4 font-mono text-gray-600 whitespace-nowrap">${account.id}</td>
                        <td class="px-6 py-4 font-medium text-gray-800 whitespace-nowrap">${account.name}</td>
                        <td class="px-6 py-4 text-center whitespace-nowrap">
                            <button onclick="alertMessage('Editing user ${account.name}', 'info')" 
                                class="px-3 py-1 rounded-md font-semibold text-xs transition-colors action-edit">
                                Edit
                            </button>
                            <button onclick="alertMessage('Deleting user ${account.name}', 'error')" 
                                class="ml-2 px-3 py-1 rounded-md font-semibold text-xs transition-colors action-delete">
                                Delete
                            </button>
                        </td>
                        <td class="px-6 py-4 text-gray-500 whitespace-nowrap">${account.email}</td>
                        <td class="px-6 py-4 text-gray-700 whitespace-nowrap">${account.type.charAt(0).toUpperCase() + account.type.slice(1)}</td>
                        <td class="px-6 py-4 text-center whitespace-nowrap">
                            <span class="status-badge ${statusClass}">
                                ${statusText}
                            </span>
                        </td>
                    </tr>
                `;
            }).join('');
        }

        // --- INITIALIZATION ---
        window.onload = () => {
            console.log("Accounts management page loaded with full IDs and table footer removed.");
            renderStatistics();
            renderTable();
        };

        window.alertMessage = alertMessage;
    </script>
</body>

</html>