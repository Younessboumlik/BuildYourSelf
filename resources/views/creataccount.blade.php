<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body >
<div class="bg-gray-100 flex justify-center items-center h-screen">
        <!-- Left: Image -->
        <div class="w-1/2 h-screen lg:block hidden">
            <img src="\elisa-calvet-b-S3nUOqDmUvc-unsplash.jpg" alt="Placeholder Image" class="object-cover w-full h-full">
        </div>
        <div class="lg:p-20 md:p-52 sm:p-20 p-8 w-full lg:w-1/2">
@if ($creatcheck)
       <div id="alert" class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Erreur!</strong>
                <span class="block sm:inline">Ce compte est déja existe.</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-red-500" onclick="closeAlert()" role="button" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0z" fill="none"/>
                        <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/>
                    </svg>
                </span>
        </div>
@endif
<h1 class="text-3xl font-semibold mb-4 text-center">Create Account</h1>
            <form action="/home/me" method="post">
                @csrf
                <div class="mb-1">
                    <label for="firstname" class="block text-gray-600">First Name</label>
                    <input placeholder="Enter Your First Name" type="text" id="nom" name="firstname" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" autocomplete="off" required>
                </div>
                <div class="mb-1">
                    <label for="lastname" class="block text-gray-600">Last Name</label>
                    <input placeholder="Enter Your Last Name" type="text" id="prenom" name="lastname" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" autocomplete="off" required>
                </div>
                <!-- Username Input -->
                <div class="mb-1">
                    <label for="email" class="block text-gray-600">Email</label>
                    <input placeholder="Enter Your Email" type="email" id="email" name="email" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" autocomplete="off" required>
                </div>
                <!-- Password Input -->
                <div class="mb-6">
                    <label for="password" class="block text-gray-600">Password</label>
                    <input placeholder="Enter Your Password" type="password" id="password" name="password" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" autocomplete="off" required>
                </div>
                <button  name="submit" type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded-md py-2 px-4 w-full">Create Account</button>
            </form>
            <!-- Sign up Link -->
            <div class="mt-2 text-center">
                <p>Already have an account?</p>
                <a href="/login" class="text-blue-500 hover:underline">Log in</a>
            </div>
        </div>
    </div>

    <script>
        function closeAlert() {
            var alert = document.getElementById('alert');
            alert.style.display = 'none';
        }
    </script>
</body>
</html>
