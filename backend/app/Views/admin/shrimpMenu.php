<!DOCTYPE html>
<html lang="en" class="bg-orange-50">

<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
    <title>Garlic Shrimp Admin - Menu & Catalog</title>
    <style>
        /* Define the core colors (Consistent with Accounts Panel) */
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

            /* Status Colors (Reused for consistency) */
            --color-active-bg: #D1FAE5;
            --color-active-text: #059669;
            --color-inactive-bg: #FEE2E2;
            --color-inactive-text: #EF4444;
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

        /* Highlight Menu as Active */
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

        /* MENU CARD STYLES */
        .menu-card {
            background-color: var(--color-card-bg);
            transition: transform 0.2s, box-shadow 0.2s;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -2px rgba(0, 0, 0, 0.03);
            border: 1px solid #FEEFDB;
            display: flex;
            flex-direction: column;
            height: 100%;
            /* Important for grid alignment */
        }

        .menu-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -4px rgba(0, 4, 6, 0.08);
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

        /* Image placeholder style */
        .dish-image {
            width: 100%;
            height: 200px;
            background-color: #FFEDD5;
            /* Lighter Accent background */
            display: flex;
            align-items: center;
            justify-content: center;
            border-top-left-radius: 0.75rem;
            border-top-right-radius: 0.75rem;
            font-weight: 700;
            color: var(--color-accent-dark);
            font-size: 1.25rem;
            border-bottom: 1px solid #FEEFDB;
        }

        .spicy-badge {
            background-color: #F87171;
            color: white;
            padding: 0.15rem 0.5rem;
            border-radius: 9999px;
            font-size: 0.75rem;
            font-weight: 700;
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
                    <a href="/shrimpMenu" class="active">
                        <!-- Custom Icon for Menu/Dishes -->
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
            <h1 class="mb-1 font-bold text-gray-800 text-4xl">Garlic Shrimp Catalog</h1>
            <p class="text-gray-500 text-lg">Manage specialty dishes, descriptions, prices, and availability.</p>
        </header>

        <!-- CMS CONTROLS: Add, Search, and Filter -->
        <div class="flex md:flex-row flex-col justify-between items-center gap-4 mb-8">

            <!-- Add New Dish Button -->
            <button onclick="alertMessage('Add New Dish interface coming soon!', 'info')"
                class="flex items-center bg-[var(--color-accent)] shadow-md px-5 py-2 rounded-lg w-full md:w-auto font-semibold text-white transition-colors hover:bg-[var(--color-accent-dark)]">
                <svg class="mr-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                Add New Dish
            </button>

            <div class="flex sm:flex-row flex-col gap-4 w-full md:w-2/3">
                <!-- Search Bar -->
                <input type="text" id="menu-search" oninput="filterMenu()" placeholder="Search by name or description..."
                    class="flex-grow p-2.5 border border-gray-300 focus:border-[var(--color-accent)] rounded-lg focus:ring-[var(--color-accent)] focus:ring-1">

                <!-- Category Filter -->
                <select id="menu-category-filter" onchange="filterMenu()"
                    class="bg-white p-2.5 border border-gray-300 focus:border-[var(--color-accent)] rounded-lg focus:ring-[var(--color-accent)] focus:ring-1 appearance-none">
                    <option value="All">Filter by Category (All)</option>
                    <option value="Classic">Classic</option>
                    <option value="Spicy">Spicy</option>
                    <option value="Fusion">Fusion</option>
                </select>
            </div>
        </div>

        <!-- MENU ITEMS GRID -->
        <div id="menu-grid" class="gap-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            <!-- Menu Cards will be dynamically inserted here -->
        </div>

        <!-- Custom Alert/Message Box -->
        <div id="alert-box" class="right-4 bottom-4 z-50 fixed opacity-0 transition-opacity duration-300 pointer-events-none">
            <div id="alert-content" class="shadow-xl p-4 rounded-lg font-medium text-white"></div>
        </div>
    </div>

    <script type="module">
        // --- DATA SETUP: Sample Menu Items (All Garlic Shrimp Variations) ---
        // NOTE: All dishes are set to available: true as requested.
        const MENU_DATA = [{
                id: 101,
                name: 'Classic Garlic Butter Shrimp',
                description: 'The original favorite: tender shrimp sautéed in rich butter, garlic, and fresh herbs. Perfect with rice or bread.',
                price: 12.99,
                category: 'Classic',
                spicy: false,
                available: true
            },
            {
                id: 102,
                name: 'Spicy Volcano Garlic Shrimp',
                description: 'A fiery preparation tossed in homemade chili-garlic paste and crushed peppers. Served with fragrant garlic rice.',
                price: 13.99,
                category: 'Spicy',
                spicy: true,
                available: true
            },
            {
                id: 103,
                name: 'Creamy Lemon Garlic Shrimp',
                description: 'Shrimp simmered in a light, creamy sauce with concentrated lemon zest and plenty of garlic. Served over pasta.',
                price: 15.50,
                category: 'Fusion',
                spicy: false,
                available: true
            },
            {
                id: 104,
                name: 'Roasted Rosemary Garlic Shrimp Skewers',
                description: 'Large shrimp marinated and roasted on skewers with fresh rosemary and whole roasted garlic cloves. Light and flavorful.',
                price: 14.25,
                category: 'Classic',
                spicy: false,
                available: true
            },
            {
                id: 105,
                name: 'Honey Balsamic Garlic Shrimp',
                description: 'Pan-seared and glazed with a sticky, sweet-and-sour reduction of honey, balsamic vinegar, and garlic.',
                price: 13.50,
                category: 'Fusion',
                spicy: false,
                available: true
            }, // Changed to true
            {
                id: 106,
                name: 'Garlic Parmesan Crusted Shrimp',
                description: 'Shrimp coated in a crunchy crust of parmesan cheese, panko, and dry garlic, then baked to golden perfection.',
                price: 16.99,
                category: 'Classic',
                spicy: false,
                available: true
            },
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

        // --- RENDER FUNCTION ---
        function renderMenu(dishes) {
            const grid = document.getElementById('menu-grid');

            if (dishes.length === 0) {
                grid.innerHTML = `<p class="col-span-full py-10 text-gray-500 text-xl text-center">No dishes match your search or filter criteria.</p>`;
                return;
            }

            grid.innerHTML = dishes.map(dish => {
                // Since all dishes are now available, the badge will always show "Available"
                const availableBadge = dish.available ?
                    `<span class="bg-[var(--color-active-bg)] px-3 py-1 rounded-full font-bold text-[var(--color-active-text)] text-xs status-badge">Available</span>` :
                    `<span class="bg-[var(--color-inactive-bg)] px-3 py-1 rounded-full font-bold text-[var(--color-inactive-text)] text-xs status-badge">Sold Out</span>`;

                const spicyBadge = dish.spicy ?
                    `<span class="flex items-center ml-2 spicy-badge">
                        <svg class="mr-1 w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.7 15.3c-2.3-2.3-5.3-3.3-8-2.6-2.7.7-4.7 3-4.7 5.7H1.3c0-3.9 2.5-7.5 6.3-8.8 3.8-1.3 8.3-0.5 11.5 2.7l-1.4 1.4zM10 0C5.6 0 2 3.6 2 8c0 2.2 1.1 4.2 2.8 5.4L1.3 16c-0.4 0.4-0.4 1 0 1.4s1 0.4 1.4 0l3.5-3.5c1.2 1.7 3.2 2.8 5.4 2.8 4.4 0 8-3.6 8-8S14.4 0 10 0zm0 14c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6z"/></svg>
                        SPICY
                        </span>` :
                    '';

                return `
                    <div class="rounded-xl overflow-hidden menu-card">
                        <!-- Image Placeholder -->
                        <div class="dish-image">
                            [Garlic Shrimp Dish Image]
                        </div>

                        <div class="flex flex-col flex-grow p-5">
                            <!-- Title & Price -->
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="font-bold text-gray-900 text-xl">${dish.name}</h3>
                                <p class="font-extrabold text-[var(--color-accent)] text-2xl">$${dish.price.toFixed(2)}</p>
                            </div>

                            <!-- Category & Status -->
                            <div class="flex items-center mb-3 text-sm">
                                <span class="font-semibold text-gray-500">${dish.category}</span>
                                ${spicyBadge}
                                <span class="mx-2 text-gray-300">•</span>
                                ${availableBadge}
                            </div>
                            
                            <!-- Description -->
                            <p class="flex-grow mb-4 text-gray-600 text-sm">${dish.description}</p>
                            
                            <!-- Actions -->
                            <div class="flex justify-end gap-3 mt-4 pt-4 border-gray-100 border-t">
                                <button onclick="alertMessage('Editing: ${dish.name}', 'info')" 
                                    class="px-4 py-1.5 rounded-lg font-semibold text-sm transition-colors action-edit">
                                    Edit
                                </button>
                                <button onclick="alertMessage('Deleting: ${dish.name}', 'error')" 
                                    class="px-4 py-1.5 rounded-lg font-semibold text-sm transition-colors action-delete">
                                    Delete
                                </button>
                            </div>
                        </div>
                    </div>
                `;
            }).join('');
        }

        // --- FILTER AND SEARCH LOGIC (CMS Feature) ---
        window.filterMenu = function() {
            const searchTerm = document.getElementById('menu-search').value.toLowerCase();
            const categoryFilter = document.getElementById('menu-category-filter').value;

            const filteredDishes = MENU_DATA.filter(dish => {
                // 1. Category Filter Check
                const categoryMatch = categoryFilter === 'All' || dish.category === categoryFilter;

                // 2. Search Term Check
                const searchMatch = dish.name.toLowerCase().includes(searchTerm) ||
                    dish.description.toLowerCase().includes(searchTerm);

                return categoryMatch && searchMatch;
            });

            renderMenu(filteredDishes);
        }

        // --- INITIALIZATION ---
        window.onload = () => {
            console.log("Garlic Shrimp Menu & Catalog management page loaded.");
            renderMenu(MENU_DATA);
        };

        window.alertMessage = alertMessage; // Expose to the global scope for onclick handlers
    </script>
</body>

</html>