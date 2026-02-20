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

    <div id= "container" class = "h-screen bg-[#030712] flex p-30 gap-5">
    
        <section id= "main-content" class= "w-2/5 h-full bg-[#1c2029] rounded-3xl p-2 outline-1 outline-offset-2 outline-gray-500 shadow-2xl shadow-blue-950 flex flex-col" >
            
            <h1 class=" text-white font-bitcount-grid-double mb-2 pt-2">Add Record</h1>

            <div class="w-full flex-1 bg-[#101829] rounded-3xl outline-1 outline-offset-2 outline-gray-500 p-5">
                <form action="" method="post">

                    <!-- FIrst Name Input -->
                    <div class="flex flex-col mb-3">
                        <label for="last_name" class="font-bitcount-grid-double text-white mb-2">Last Name</label>
                        <input name="last_name" type="text"  id="last_name"  placeholder="Enter your Last Name" class="p-1  text-white text-sm bg-[#1c2029] outline outline-offset-2 outline-gray-500 font-bitcount-grid-double rounded-3xl accent-blue-500 pl-3 pr-3 ">
                    </div>

                    <!-- Last Name Input -->
                    <div class="flex flex-col mb-3">
                        <label for="first_name" class="font-bitcount-grid-double text-white mb-2">First Name</label>
                        <input name="first_name" type="text"  id="first_name"  placeholder="Enter your First Name" class="p-1  text-white text-sm bg-[#1c2029] outline outline-offset-2 outline-gray-500 font-bitcount-grid-double rounded-3xl accent-blue-300 pl-3 pr-3 ">
                    </div>

                    <!-- Email -->
                    <div class="flex flex-col mb-3">
                        <label for="email" class="font-bitcount-grid-double text-white mb-2">Email</label>
                        <input name="email" type="text"  id="email"  placeholder="Enter your Email" class="p-1  text-white text-sm bg-[#1c2029] outline outline-offset-2 outline-gray-500 font-bitcount-grid-double rounded-3xl accent-blue-300 pl-3 pr-3">
                    </div>
                    <!-- Address -->
                    <div class="flex flex-col mb-3">
                        <label for="address" class="font-bitcount-grid-double text-white mb-2">Address</label>
                        <input name="address" type="text" id="address"  placeholder="Enter your Address" class="p-1  text-white text-sm bg-[#1c2029] outline outline-offset-2 outline-gray-500 font-bitcount-grid-double rounded-3xl accent-blue-300 pl-3 pr-3">
                    </div>

                    <!-- Gender -->
                    <div class="flex flex-col mb-3">
                        <label for="gender" class="font-bitcount-grid-double text-white mb-2">Gender</label>
                        
                        <select name="gender" id="gender" class="p-1  text-white text-sm bg-[#1c2029] outline outline-offset-2 outline-gray-500 font-bitcount-grid-double rounded-3xl accent-blue-300 pl-3 pr-3">
                            <option value="">Select gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Others</option>
                        </select>
                    </div>
            
                </form>

                <div id="buttons" name = "buttons" class="flex justify-end gap-4 flex-wrap">
                    <button type="submit" name="add_record" class="bg-blue-500 text-white font-bitcount-grid-double rounded-3xl p-2 pl-4 pr-4 mt-5 hover:bg-blue-600 transition duration-300">Insert</button>
                    <button type="submit" name="update_record" class="bg-green-500 text-white font-bitcount-grid-double rounded-3xl p-2 pl-4 pr-4 mt-5 hover:bg-green-600 transition duration-300">Update</button>
                    <button class="bg-red-500 text-white font-bitcount-grid-double rounded-3xl p-2 pl-4 pr-4 mt-5 hover:bg-red-600 transition duration-300">Delete</button>
                </div>
            </div>

        </section>


        <section id= "table-content" class= "w-3/5 h-full bg-[#1c2029] rounded-3xl p-2 outline-1 outline-offset-2 outline-gray-500 shadow-2xl shadow-blue-950 flex flex-col">
            
            <h1 class=" text-white font-bitcount-grid-double mb-2 pt-2">Table Content</h1>

            <div class="w-full flex-1 bg-[#101829] rounded-3xl outline-1 outline-offset-2 outline-gray-500 p-1 shadow-inner shadow-blue-950">

                <table class="w-full flex-1 border border-separate  border-gray-400 table-auto border-spacing-2 overflow-hidden rounded-3xl">
                    <thead class="bg-[#1c2029]">
                        <tr>
                            <th class="text-white font-bitcount-grid-double border-separate border border-gray-400 rounded-tl-2xl">ID</th>
                            <th class="text-white font-bitcount-grid-double border-separate border border-gray-400">Last Name</th>
                            <th class="text-white font-bitcount-grid-double border-separate border border-gray-400">First Name</th>
                            <th class="text-white font-bitcount-grid-double border-separate border border-gray-400">Email</th>
                            <th class="text-white font-bitcount-grid-double border-separate border border-gray-400">Address</th>
                            <th class="text-white font-bitcount-grid-double border-separate border border-gray-400 rounded-tr-2xl">Gender</th>

                        </tr>
                    </thead>


                    <tbody>
                        <tr>
                            <td></td>
                        </tr>
                    </tbody>
                </table>

            </div>

        </section>
    
    </div> 
</body>
</html>