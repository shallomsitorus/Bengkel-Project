<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Login</title>
</head>

<body>
    <section class="justify-center">
        <div class="flex h-screen lg:my-auto">
            <div class="hidden lg:block lg:w-1/3 bg-gradient-to-tl from-green-500 to-green-200 lg:flex shadow-2xl z-10">
                <img src="/img/account/forget.svg" alt="ini-gambar-forget" class="lg:m-auto p-20" width="80%">
            </div>
            <div class="container justify-center p-20 mx-auto lg:w-2/3 lg:mr-10 lg:my-auto lg:px-40 lg:py-20">
                <!-- <img src="{{ asset('img/product/G1.png') }}" alt="Gambar-product" width="100%" class="rounded-xl items-center mx-auto "> -->
                <div class=" "><img src="/img/account/forget1.png" alt="Gambar-login1" width="10%" class="rounded-full  mx-auto ring-4 ring-gray-200 bg-gray-200  p-2"></div>

                <h1 class="text-center text-3xl font-bold lg:py-4 text-gray-600">Forgot Password ?</h1>
                <p class="text-center text-sm font-light py-1 pb-4 ">Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>

                <label class="relative block py-2 w-full">
                    <input class="placeholder:italic placeholder:text-slate-400 block bg-white w-full border border-slate-300 rounded-md py-2 px-3 shadow-sm focus:outline-none focus:border-green-500 focus:ring-green-300 focus:ring sm:text-sm" placeholder="Email ..." type="text" name="search" />
                </label>


                <div class="py-3">
                    <button class="w-full bg-[#47BF71] hover:bg-green-600 active:bg-green-700 focus:outline-none focus:ring focus:ring-green-300 justify-center rounded-xl py-2 mt-6 text-white">
                        <a href="" class="text-center">
                            Send Login Link
                        </a>
                    </button>
                </div>
                <div class="flex justify-center">
                    <p>Already have an account?</p>
                    <a href="" class="text-green-400 hover:text-green-700 active:text-green-800 pl-2">login</a>
                </div>


            </div>

        </div>
    </section>

    <footer class="lg:hidden "><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#47bf71" fill-opacity="1" d="M0,160L48,149.3C96,139,192,117,288,112C384,107,480,117,576,133.3C672,149,768,171,864,170.7C960,171,1056,149,1152,128C1248,107,1344,85,1392,74.7L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg></footer>
</body>

</html>