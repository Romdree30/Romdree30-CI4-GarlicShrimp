<!DOCTYPE html>
<html lang="en" class="bg-orange-50 dark:bg-gray-900">

<head>
    <!-- The head component already includes all necessary meta, Tailwind, and font links -->
    <?= view('components/head') ?>
    <title>Sign Up</title>
</head>

<body class="flex flex-col min-h-screen text-gray-900 dark:text-gray-100">

    <!-- Header -->
    <header>
        <?= view('components/header') ?>
    </header>

    <!-- Main Section (Sign-up Form Centered) -->
    <main class="flex flex-grow justify-center items-center px-4 py-12">
        <div
            class="bg-white dark:bg-gray-800 shadow-xl p-8 md:p-12 rounded-2xl w-full max-w-lg transition-all duration-300 transform">

            <!-- Auth Section -->
            <div id="auth-container">
                <h1 class="mb-6 font-bold text-3xl md:text-4xl text-center">Create Your Account</h1>
                <p class="mb-8 text-gray-700 dark:text-gray-400 text-center">
                    Sign up to start your order.
                </p>

                <!-- Status Message -->
                <div id="status-message"
                    class="hidden mb-4 p-3 rounded-lg font-medium text-sm text-center transition-all duration-300"></div>

                <!-- Sign-up Form -->
                <form id="signup-form" class="space-y-4">

                    <!-- First Name and Last Name in a 2-column grid -->
                    <div class="gap-4 grid grid-cols-2">
                        <div>
                            <label for="first-name" class="block mb-1 font-medium text-sm">First Name</label>
                            <input type="text" id="first-name" required
                                class="bg-gray-50 dark:bg-gray-700 p-3 border focus:border-orange-500 dark:border-gray-700 rounded-lg focus:ring-2 focus:ring-orange-500 w-full transition-all duration-300">
                        </div>
                        <div>
                            <label for="last-name" class="block mb-1 font-medium text-sm">Last Name</label>
                            <input type="text" id="last-name" required
                                class="bg-gray-50 dark:bg-gray-700 p-3 border focus:border-orange-500 dark:border-gray-700 rounded-lg focus:ring-2 focus:ring-orange-500 w-full transition-all duration-300">
                        </div>
                    </div>

                    <!-- Middle Name (Optional) -->
                    <div>
                        <label for="middle-name" class="block mb-1 font-medium text-sm">Middle Name (Optional)</label>
                        <input type="text" id="middle-name"
                            class="bg-gray-50 dark:bg-gray-700 p-3 border focus:border-orange-500 dark:border-gray-700 rounded-lg focus:ring-2 focus:ring-orange-500 w-full transition-all duration-300">
                    </div>

                    <!-- Gender Select -->
                    <div>
                        <label for="gender" class="block mb-1 font-medium text-sm">Gender</label>
                        <select id="gender" required
                            class="bg-gray-50 dark:bg-gray-700 p-3 border focus:border-orange-500 dark:border-gray-700 rounded-lg focus:ring-2 focus:ring-orange-500 w-full transition-all duration-300 appearance-none">
                            <option value="" disabled selected>Select your gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="signup-email" class="block mb-1 font-medium text-sm">Email</label>
                        <input type="email" id="signup-email" required
                            class="bg-gray-50 dark:bg-gray-700 p-3 border focus:border-orange-500 dark:border-gray-700 rounded-lg focus:ring-2 focus:ring-orange-500 w-full transition-all duration-300">
                    </div>
                    <!-- Password -->
                    <div>
                        <label for="signup-password" class="block mb-1 font-medium text-sm">Password</label>
                        <input type="password" id="signup-password" required
                            class="bg-gray-50 dark:bg-gray-700 p-3 border focus:border-orange-500 dark:border-gray-700 rounded-lg focus:ring-2 focus:ring-orange-500 w-full transition-all duration-300">
                    </div>
                    <button type="submit"
                        class="bg-orange-600 hover:bg-orange-700 p-3 rounded-lg focus:ring-4 focus:ring-orange-500/50 w-full font-semibold text-white transition-all duration-300">
                        Sign Up
                    </button>
                </form>

                <!-- Back to Home -->
                <div class="mt-6 text-center">
                    <a href="/"
                        class="inline-block bg-orange-600 hover:bg-orange-700 px-6 py-3 rounded-lg focus:ring-4 focus:ring-orange-500/50 font-semibold text-white transition-all duration-300">
                        Back to Home
                    </a>
                </div>

                <!-- Log In -->
                <div class="flex justify-center items-center mt-4">
                    <span class="text-sm">Already have an account?</span>
                    <a href="/login" class="ml-2 font-medium text-orange-600 hover:underline">Log in</a>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="mt-auto">
        <?= view('components/footer') ?>
    </footer>

    <!-- Firebase Script -->
    <script type="module">
        import {
            initializeApp
        } from "https://www.gstatic.com/firebasejs/11.6.1/firebase-app.js";
        import {
            getAuth,
            createUserWithEmailAndPassword,
            onAuthStateChanged,
            signInWithCustomToken,
            signInAnonymously
        } from "https://www.gstatic.com/firebasejs/11.6.1/firebase-auth.js";
        import {
            getFirestore,
            doc,
            setDoc,
            setLogLevel
        } from "https://www.gstatic.com/firebasejs/11.6.1/firebase-firestore.js";

        setLogLevel('debug');

        const signupForm = document.getElementById('signup-form');
        const statusMessage = document.getElementById('status-message');
        let db, auth;

        const appId = typeof __app_id !== 'undefined' ? __app_id : 'default-app-id';
        const firebaseConfig = typeof __firebase_config !== 'undefined' ? JSON.parse(__firebase_config) : {};
        const initialAuthToken = typeof __initial_auth_token !== 'undefined' ? __initial_auth_token : null;

        function displayMessage(message, type = 'success') {
            statusMessage.textContent = message;
            statusMessage.classList.remove('hidden', 'bg-red-500', 'bg-green-500');
            statusMessage.classList.add(type === 'success' ? 'bg-green-500' : 'bg-red-500');
            setTimeout(() => statusMessage.classList.add('hidden'), 5000);
        }

        function initializeFirebase() {
            if (Object.keys(firebaseConfig).length > 0) {
                const app = initializeApp(firebaseConfig);
                auth = getAuth(app);
                db = getFirestore(app);

                onAuthStateChanged(auth, (user) => {
                    if (user) {
                        console.log("User authenticated:", user.uid);
                        // Redirect to login page after successful creation
                        window.location.href = '/login';
                    }
                });

                if (initialAuthToken) {
                    signInWithCustomToken(auth, initialAuthToken).catch(() => {
                        signInAnonymously(auth);
                    });
                } else {
                    signInAnonymously(auth);
                }
            } else {
                console.error("Missing Firebase config.");
            }
        }

        signupForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            const email = signupForm['signup-email'].value;
            const password = signupForm['signup-password'].value;
            // Get new credential inputs
            const firstName = signupForm['first-name'].value;
            const middleName = signupForm['middle-name'].value;
            const lastName = signupForm['last-name'].value;
            const gender = signupForm['gender'].value;

            try {
                const userCredential = await createUserWithEmailAndPassword(auth, email, password);
                const user = userCredential.user;

                const docRef = doc(db, `/artifacts/${appId}/users/${user.uid}/user_profile`, 'info');
                await setDoc(docRef, {
                    email: user.email,
                    firstName: firstName,
                    middleName: middleName,
                    lastName: lastName,
                    gender: gender,
                    // Note: Firebase handles the password hash securely, we only store non-sensitive profile data.
                    createdAt: new Date().toISOString(),
                    lastLogin: new Date().toISOString()
                });

                displayMessage('Account created successfully!', 'success');
            } catch (error) {
                console.error("Sign-up failed:", error);
                displayMessage(`Sign-up failed: ${error.message}`, 'error');
            }
        });

        window.onload = initializeFirebase;
    </script>
</body>

</html>