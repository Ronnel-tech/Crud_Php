<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/output.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bitcount+Grid+Double:wght@100..900&display=swap" rel="stylesheet">

    <title>TEST</title>
</head>
<body>
    <div id= "container" class = "h-screen bg-[#030712] flex p-30 gap-7">
   
    <section id= "main-content" class= "w-2/5 h-full bg-[#1c2029] rounded-3xl p-2 outline-1 outline-offset-2 outline-gray-500 shadow-2xl shadow-blue-950 flex flex-col" >
        
        <h1 class=" text-white font-bitcount-grid-double mb-2 pt-2">Add Record</h1>

        <div class="w-full flex-1 bg-[#101829] rounded-3xl outline-1 outline-offset-2 outline-gray-500 p-5">
            <form action="" method="post">

                <!-- FIrst Name Input -->
                <div class="flex flex-col mb-3">
                    <label for="last_name" class="font-bitcount-grid-double text-white mb-2">Last Name</label>
                    <input type="text" name="last_name" id="last_name"  placeholder="Enter your Last Name" class="p-1  text-white text-sm bg-[#1c2029] outline outline-offset-2 outline-gray-500 font-bitcount-grid-double rounded-3xl accent-blue-300 pl-3 pr-3 ">
                </div>

                <!-- Last Name Input -->
                <div class="flex flex-col mb-3">
                    <label for="first_name" class="font-bitcount-grid-double text-white mb-2">First Name</label>
                    <input type="text" name="first_name" id="first_name"  placeholder="Enter your First Name" class="p-1  text-white text-sm bg-[#1c2029] outline outline-offset-2 outline-gray-500 font-bitcount-grid-double rounded-3xl accent-blue-300 pl-3 pr-3">
                </div>

                <!-- Email -->
                <div class="flex flex-col mb-3">
                    <label for="email" class="font-bitcount-grid-double text-white mb-2">Email</label>
                    <input type="text" name="email" id="email"  placeholder="Enter your Email" class="p-1  text-white text-sm bg-[#1c2029] outline outline-offset-2 outline-gray-500 font-bitcount-grid-double rounded-3xl accent-blue-300 pl-3 pr-3">
                </div>
                <!-- Address -->
                <div class="flex flex-col mb-3">
                    <label for="address" class="font-bitcount-grid-double text-white mb-2">Address</label>
                    <input type="text" name="address" id="address"  placeholder="Enter your Address" class="p-1  text-white text-sm bg-[#1c2029] outline outline-offset-2 outline-gray-500 font-bitcount-grid-double rounded-3xl accent-blue-300 pl-3 pr-3">
                </div>

                <!-- Gender -->
                <div class="flex flex-col mb-3">
                    <label for="gender" class="font-bitcount-grid-double text-white mb-2">Gender</label>
                    <input type="text" name="gender" id="gender"  placeholder="Enter your Gender" class="p-1  text-white text-sm bg-[#1c2029] outline outline-offset-2 outline-gray-500 font-bitcount-grid-double rounded-3xl accent-blue-300 pl-3 pr-3">
                </div>
            </form>
        </div>

    </section>


    <section id= "table-content" class= "w-3/5 h-auto bg-[#1c2029] rounded-3xl p-5 outline-1 outline-offset-2 outline-gray-500 shadow-2xl shadow-blue-950">

    </section>
    
    </div> 
</body>
</html>