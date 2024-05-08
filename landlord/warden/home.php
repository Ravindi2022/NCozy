<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/866e8148a5.js" crossorigin="anonymous"></script>
    <script src="navbar.js"></script>
    <title>Warden Dashboard</title>
</head>

<body>
    <?php include ("navbar.php"); ?>
   
    <?php
    if (isset ($_GET['email'])) {

        $email = $_GET['email'];
    } ?>
    <section class="bg-white mt-20">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-8 lg:px-12">
            <div class="flex flex-col mb-8 space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                <img src="NCozy.png"
                    class="rounded-full mx-auto  w-32 h-32 shadow-md border-4 border-white transition duration-200 transform hover:scale-110"
                    alt="NCozy Logo" />
            </div>
            <a href="#"
                class="inline-flex justify-between items-center py-1 px-1 pr-4 mb-7 text-sm text-gray-700 bg-gray-100 rounded-full hover:bg-gray-200 "
                role="alert">
                <span class="text-xs bg-[#084cd4] rounded-full text-white px-4 py-1.5 mr-3">Exclusive</span> <span
                    class="text-sm font-medium">For NSBM Undergraduates</span>
                <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>
            <h1 class="mb-12 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl">
                Welcome to NCozy Warden Dashboard.</h1>
            <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 ">Your one-stop platform for
                NSBM undergraduate accommodation management. Simplify daily tasks, streamline communication, and gain valuable
                insights.</p>
            <div class="flex flex-col mb-8 lg:mb-16 space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                <a href="propertyList.php"
                    class="inline-flex justify-center items-center py-2 px-5 text-base font-medium text-center text-gray-900 rounded-lg border border-[#084cd4] hover:bg-gray-100 focus:ring-4 focus:ring-gray-100">
                    <i class="fa-solid fa-eye mr-2 -mb-1 justify-center w-5 h-5"></i>
                    View Ads
                </a>
                
                <a href="propertyEdit.php?email=<?php echo $email; ?>"
                    class="inline-flex justify-center items-center py-2 px-4 text-base font-medium text-center text-gray-900 rounded-lg border border-[#084cd4] hover:bg-gray-100 focus:ring-4 focus:ring-gray-100">
                    <i class="fa-solid fa-pen-to-square mr-2 -mb-1 justify-center w-5 h-5"></i>
                    Hostels
                </a>
                <a href="wardenAccept.php"
                    class="inline-flex justify-center items-center py-2 px-5 text-base font-medium text-center text-gray-900 rounded-lg border border-[#084cd4] hover:bg-gray-100 focus:ring-4 focus:ring-gray-100">
                    <i class="fa-solid fa-hourglass-half mr-2 -mb-1 justify-center w-5 h-5"></i>
                    Requests
                </a>
            </div>

        </div>
    </section>

   

    <?php include ("footer.php"); ?>
</body>

</html>