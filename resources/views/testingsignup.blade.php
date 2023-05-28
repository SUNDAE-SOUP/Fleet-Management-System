<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <!-- flowbite -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
</head>
<body>

    <div class="header"> </div>
    
    <div class="container">
        <div class="login-form">
            <form method="POST" action="{{ route('register') }}">
                @csrf

            <img src="{{ asset('images/logo.png') }}" class="logo" alt="Company Logo" />
            
             <!-- Name -->
             <div class="mt-4">
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text"  name="name" :value="old('name')" required />
            </div>

            
            <!-- Employee id -->
            <div class="mt-4">
                <x-label for="employee_code" :value="__('Employee Id')" />

                <x-input id="employee_code" class="block mt-1 w-full" type="text"  name="employee_code" :value="old('employee_code')" required />
            </div>


            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

           
            <button type="submit" class="btn text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-50 sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 ">Submit</button>
            </form>
        </div>
    </div>

    <footer class="footer"></footer>

    <!-- flowbite -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>
</html>