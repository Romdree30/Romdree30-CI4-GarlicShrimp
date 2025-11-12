<!DOCTYPE html>
<html lang="en" class="bg-orange-50">

<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
    <title>Garlic Shrimp Admin - Customer Requests</title>
    <style>
        /* Define the core colors (Consistent with Dashboard) */
        :root {
            --color-accent: #FF7F00;
            /* Vibrant Orange */
            --color-accent-dark: #E67200;
            --color-button: #FFA53F;
            --color-button-dark: #F9932E;

            --color-background-light: #FFF7ED;
            /* Light Cream (For main content/background) */
            --color-card-bg: #FFFFFF;
            /* White */
            --color-link-hover: #FEF3E8;

            /* Status Colors (Optimized for light background) */
            --color-status-pending-bg: #FEF3C7;
            /* Light Yellow */
            --color-status-pending-text: #92400E;
            /* Dark Brown */
            --color-status-approved-bg: #D1FAE5;
            /* Light Green */
            --color-status-approved-text: #065F46;
            /* Dark Green */
            --color-status-rejected-bg: #FEE2E2;
            /* Light Red */
            --color-status-rejected-text: #991B1B;
            /* Dark Red */
            --color-status-progress-bg: #DBEAFE;
            /* Light Blue */
            --color-status-progress-text: #1E40AF;
            /* Dark Blue */

            /* Standard Text Colors */
            --color-main-text: #1F2937;
            --color-secondary-text: #4B5563;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--color-background-light);
            color: var(--color-main-text);
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
            color: var(--color-secondary-text);
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

        /* MAIN CONTENT AREA - LIGHT MODE */
        .main-content {
            background-color: var(--color-background-light);
            color: var(--color-main-text);
            padding: 2rem;
        }

        .main-header {
            color: var(--color-main-text);
            border-bottom: 2px solid #F3F4F6;
            padding-bottom: 1rem;
            margin-bottom: 1.5rem;
        }

        /* REQUEST LIST ITEM STYLES */
        .request-list-item {
            background-color: var(--color-card-bg);
            border-radius: 0.75rem;
            padding: 1.25rem 1.5rem;
            margin-bottom: 1rem;
            cursor: pointer;
            transition: transform 0.15s, box-shadow 0.15s;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border: 1px solid #FDE6CE;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
        }

        .request-list-item:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -4px rgba(0, 4, 6, 0.08);
        }

        .request-list-item h4 {
            color: var(--color-main-text);
            font-weight: 700;
        }

        /* Status Badge Styling */
        .status-badge {
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            font-size: 0.8rem;
            font-weight: 700;
            text-transform: uppercase;
        }

        .status-Pending {
            background-color: var(--color-status-pending-bg);
            color: var(--color-status-pending-text);
        }

        .status-InProgress {
            background-color: var(--color-status-progress-bg);
            color: var(--color-status-progress-text);
        }

        .status-Approved {
            background-color: var(--color-status-approved-bg);
            color: var(--color-status-approved-text);
        }

        .status-Rejected {
            background-color: var(--color-status-rejected-bg);
            color: var(--color-status-rejected-text);
        }

        /* Input and Select Styling on Light BG */
        .control-input,
        .control-select {
            background-color: var(--color-card-bg);
            color: var(--color-main-text);
            border: 1px solid #D1D5DB;
        }

        .control-input::placeholder {
            color: #9CA3AF;
        }
    </style>
</head>

<body class="flex min-h-screen">

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
                        <span class="whitespace-nowrap">Shrimp Menu</span>
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
                    <a href="/admin/requests" class="active">
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

    <!-- MAIN CONTENT AREA - LIGHT MODE -->
    <div class="flex flex-col flex-grow min-h-screen main-content">

        <!-- HEADER -->
        <header class="mb-6 main-header">
            <h1 class="mb-1 font-bold text-4xl">Requests</h1>
            <p class="text-gray-500 text-lg">View and manage customer requests and orders.</p>
        </header>

        <!-- SEARCH & FILTER CONTROLS -->
        <div class="flex flex-wrap items-center gap-4 bg-white shadow-lg mb-6 p-4 border border-gray-100 rounded-xl">

            <!-- Search Bar -->
            <input type="text" id="request-search" oninput="filterRequests()" placeholder="Search by Order ID or Customer Name..."
                class="flex-grow p-3 focus:border-[var(--color-accent)] rounded-lg focus:ring-[var(--color-accent)] focus:ring-1 min-w-[200px] md:min-w-[300px] control-input">

            <!-- Sort Filter -->
            <select id="request-sort" onchange="filterRequests()"
                class="p-3 rounded-lg w-full sm:w-auto appearance-none control-select">
                <option value="Default">Sort - Default (Newest)</option>
                <option value="Oldest">Sort - Oldest</option>
                <option value="TotalAsc">Sort - Total (Low to High)</option>
                <option value="TotalDesc">Sort - Total (High to Low)</option>
            </select>

            <!-- Status Filter -->
            <select id="request-status-filter" onchange="filterRequests()"
                class="p-3 rounded-lg w-full sm:w-auto appearance-none control-select">
                <option value="All">Status - All</option>
                <option value="Pending">Pending</option>
                <option value="InProgress">In Progress</option>
                <option value="Approved">Approved (Ready for Pickup)</option>
                <option value="Rejected">Rejected</option>
            </select>

            <!-- Reset Button -->
            <button onclick="resetFilters()"
                class="bg-gray-400 hover:bg-gray-500 shadow-md px-5 py-3 rounded-lg w-full sm:w-auto font-semibold text-white transition-colors">
                Reset
            </button>

            <!-- New Request Button (Orange accent) -->
            <button onclick="alertMessage('Starting a new manual order request...', 'info')"
                class="flex items-center bg-[var(--color-accent)] shadow-md px-5 py-3 rounded-lg w-full sm:w-auto font-semibold text-white transition-colors hover:bg-[var(--color-accent-dark)]">
                <svg class="mr-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                New Request
            </button>
        </div>

        <!-- REQUEST LIST CONTAINER -->
        <div id="request-list-container" class="flex-grow space-y-3 mt-4">
            <!-- Request items will be dynamically inserted here -->
        </div>

        <!-- Custom Alert/Message Box -->
        <div id="alert-box" class="right-4 bottom-4 z-50 fixed opacity-0 transition-opacity duration-300 pointer-events-none">
            <div id="alert-content" class="shadow-xl p-4 rounded-lg font-medium text-white"></div>
        </div>
    </div>

    <script type="module">
        // --- DATA SETUP: Sample Requests (using Shrimp Menu items) ---
        let REQUEST_DATA = [{
                id: '#GS-1007',
                customerName: 'Maria Clara D. Santos',
                status: 'Pending',
                items: [{
                        name: 'Classic Garlic Butter Shrimp',
                        qty: 2,
                        price: 13.99
                    },
                    {
                        name: 'Creamy Lemon Garlic Shrimp',
                        qty: 1,
                        price: 15.50
                    }
                ],
                total: 43.48, // 2*13.99 + 1*15.50
                timestamp: '2025-11-07T04:20:00Z'
            },
            {
                id: '#GS-1006',
                customerName: 'Juan Miguel R. Del Rosario',
                status: 'InProgress',
                items: [{
                    name: 'Spicy Volcano Garlic Shrimp',
                    qty: 1,
                    price: 13.99
                }],
                total: 13.99,
                timestamp: '2025-11-07T04:15:00Z'
            },
            {
                id: '#GS-1005',
                customerName: 'Maria Clara D. Santos',
                status: 'Approved',
                items: [{
                        name: 'Roasted Rosemary Garlic Shrimp Skewers',
                        qty: 1,
                        price: 14.25
                    },
                    {
                        name: 'Classic Garlic Butter Shrimp',
                        qty: 1,
                        price: 13.99
                    }
                ],
                total: 28.24,
                timestamp: '2025-11-07T04:10:00Z'
            },
            {
                id: '#GS-1004',
                customerName: 'Juan Miguel R. Del Rosario',
                status: 'Rejected',
                items: [{
                        name: 'Honey Balsamic Garlic Shrimp',
                        qty: 1,
                        price: 16.50
                    },
                    {
                        name: 'Garlic Parmesan Crusted Shrimp',
                        qty: 1,
                        price: 14.50
                    }
                ],
                total: 31.00,
                timestamp: '2025-11-07T04:05:00Z'
            }
        ];

        // --- UTILITY FUNCTIONS ---
        function alertMessage(message, type = 'info') {
            const box = document.getElementById('alert-box');
            const content = document.getElementById('alert-content');
            let bgColor = (type === 'success') ? 'bg-green-600' : (type === 'error') ? 'bg-red-600' : 'bg-blue-600';
            content.className = `p-4 rounded-lg shadow-xl text-white font-medium ${bgColor}`;
            content.textContent = message;
            box.classList.remove('opacity-0', 'pointer-events-none');

            setTimeout(() => {
                box.classList.add('opacity-0', 'pointer-events-none');
            }, 3000);
        }

        // --- RENDER FUNCTION ---
        function renderRequests(data) {
            const container = document.getElementById('request-list-container');

            if (data.length === 0) {
                container.innerHTML = `<p class="py-10 text-gray-400 text-xl text-center">No requests match your criteria.</p>`;
                return;
            }

            container.innerHTML = data.map(request => {

                // Format the items list for display
                const itemsList = request.items.map(item =>
                    `${item.qty}x ${item.name}`
                ).join(', ');

                return `
                    <div class="request-list-item" onclick="alertMessage('Viewing details for Order ${request.id} from ${request.customerName}', 'info')">
                        <!-- Left side: Order Info -->
                        <div class="flex md:flex-row flex-col flex-grow md:items-center md:space-x-8 space-y-1 md:space-y-0">
                            <!-- Order ID & Customer -->
                            <div class="flex items-center space-x-4 w-[250px] md:w-[220px]">
                                <h4 class="text-xl">${request.id}</h4>
                                <span class="hidden md:block text-gray-300 text-sm">|</span>
                                <span class="font-medium text-gray-700 text-base">${request.customerName}</span>
                            </div>
                            
                            <!-- Items Ordered -->
                            <p class="flex-grow px-0 md:px-4 text-gray-500 text-sm truncate">${itemsList}</p>
                        </div>
                        
                        <!-- Right side: Status and Total -->
                        <div class="flex items-center space-x-6 pl-4">
                            <span class="status-badge status-${request.status.replace(/\s/g, '')}">${request.status.toUpperCase()}</span>
                            <span class="font-bold text-gray-800 text-xl">$${request.total.toFixed(2)}</span>
                        </div>
                    </div>
                `;
            }).join('');
        }

        // --- FILTER, SEARCH, AND SORT LOGIC ---
        window.filterRequests = function() {
            const searchTerm = document.getElementById('request-search').value.toLowerCase();
            const statusFilter = document.getElementById('request-status-filter').value;
            const sortMethod = document.getElementById('request-sort').value;

            let filteredAndSortedData = REQUEST_DATA;

            // 1. FILTERING (Search & Status)
            filteredAndSortedData = filteredAndSortedData.filter(request => {
                // Search check
                const searchMatch = request.id.toLowerCase().includes(searchTerm) ||
                    request.customerName.toLowerCase().includes(searchTerm);

                // Status check
                const statusMatch = statusFilter === 'All' || request.status === statusFilter;

                return searchMatch && statusMatch;
            });

            // 2. SORTING (Default is Newest)
            switch (sortMethod) {
                case 'Oldest':
                    filteredAndSortedData.sort((a, b) => new Date(a.timestamp) - new Date(b.timestamp));
                    break;
                case 'TotalAsc':
                    filteredAndSortedData.sort((a, b) => a.total - b.total);
                    break;
                case 'TotalDesc':
                    filteredAndSortedData.sort((a, b) => b.total - a.total);
                    break;
                case 'Default':
                default:
                    filteredAndSortedData.sort((a, b) => new Date(b.timestamp) - new Date(a.timestamp));
                    break;
            }

            renderRequests(filteredAndSortedData);
        }

        // --- RESET FILTERS ---
        window.resetFilters = function() {
            document.getElementById('request-search').value = '';
            document.getElementById('request-status-filter').value = 'All';
            document.getElementById('request-sort').value = 'Default';
            filterRequests(); // Re-render with default settings
        }

        // --- INITIALIZATION ---
        window.onload = () => {
            console.log("Garlic Shrimp Requests Management page loaded with light theme and specific data.");
            filterRequests(); // Initial render
        };

        window.alertMessage = alertMessage; // Expose to the global scope for onclick handlers
    </script>
</body>

</html>