<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">
    <div class="bg-white shadow-md rounded-lg flex flex-col sm:flex-row w-full max-w-4xl">
        <!-- Image Section -->
        <div class="w-full sm:w-1/2">
            <img src="images/raygar-he-Nwehjd9vp-8-unsplash.jpg" alt="Signup Image" class="rounded-t-lg sm:rounded-l-lg h-full object-cover">
        </div>
        <!-- Form Section -->
        <div class="w-full sm:w-1/2 p-8">
            <h2 class="text-2xl font-bold mb-6 text-center">Sign Up</h2>
            <form method="post" action="booking_api.php">
                <div class="mb-4">
                    <label for="lastname" class="block text-sm font-medium text-gray-700">Full Name</label>
                    <input type="text" id="name" name="name" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
                </div>
                <div class="mb-4">
                    <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                    <input type="tel" id="phone" name="phone" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="password" name="password1" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
                </div>
                <div class="mb-4">
                    <label for="confirm-password" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                    <input type="password" id="confirm-password" name="password2" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
                </div>
                <button type="submit" class="w-full bg-blue-600 text-white font-bold py-2 rounded-md hover:bg-blue-700">Sign Up</button>
                <a href="signup.html">Already have an account<span class="text-green-500 text-xl m-4">Login</span></a>

            </form>
        </div>
    </div>

</body>
</html>
