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
                <form action="pages/insert.php" method="post">

                    <!-- FIrst Name Input -->
                    <div class="flex flex-col mb-3">
                        <label for="last_name" class="font-bitcount-grid-double text-white mb-2">Last Name</label>
                        <input name="last_name" type="text"  id="last_name"  placeholder="Enter your Last Name" class="text-primary  bg-[#1c2029] font-bitcount-grid-double">
                    </div>

                    <!-- Last Name Input -->
                    <div class="flex flex-col mb-3">
                        <label for="first_name" class="font-bitcount-grid-double text-white mb-2">First Name</label>
                        <input name="first_name" type="text"  id="first_name"  placeholder="Enter your First Name" class="text-primary  bg-[#1c2029] font-bitcount-grid-double">
                    </div>

                    <!-- Email -->
                    <div class="flex flex-col mb-3">
                        <label for="email" class="font-bitcount-grid-double text-white mb-2">Email</label>
                        <input name="email" type="text"  id="email"  placeholder="Enter your Email" class="text-primary bg-[#1c2029] font-bitcount-grid-double">
                    </div>
                    <!-- Address -->
                    <div class="flex flex-col mb-3">
                        <label for="address" class="font-bitcount-grid-double text-white mb-2">Address</label>
                        <input name="address" type="text" id="address"  placeholder="Enter your Address" class="text-primary bg-[#1c2029] font-bitcount-grid-double">
                    </div>

                    <!-- Gender -->
                    <div class="flex flex-col mb-3">
                        <label for="gender" class="font-bitcount-grid-double text-white mb-2">Gender</label>
                        
                        <select name="gender" id="gender" class="text-primary  bg-[#1c2029] font-bitcount-grid-double">
                            <option value="">Select gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Others</option>
                        </select>
                    </div>

                    <div id="buttons" name = "buttons" class="flex justify-end gap-4 flex-wrap">

                        <button type="submit" name="add_record"    class="btn-primary bg-blue-500 font-bitcount-grid-double">Insert</button>
                        <button type="submit" name="update_record" class="btn-primary bg-green-500 font-bitcount-grid-double">Update</button>
                        <button type="submit" name="delete_record" class="btn-primary bg-red-500 font-bitcount-grid-double">Delete</button>

                    </div>
                            
                </form>



            </div>



        </section>


            <!-- Table Section -->

        <section id= "table-content" class= "w-3/5 h-full bg-[#1c2029] rounded-3xl p-2 outline-1 outline-offset-2 outline-gray-500 shadow-2xl shadow-blue-950 flex flex-col overflow-hidden rounded-b-none">
            
            <h1 class=" text-white font-bitcount-grid-double mb-2 pt-2">Table Content</h1>

            <div class="w-full flex-1 bg-[#101829] rounded-3xl outline-1 outline-offset-2 outline-gray-500 p-1 shadow-inner shadow-blue-950  overflow-scroll overflow-x-hidden rounded-b-none">

                <table class="w-full overflow-hidden flex-1 border border-separate  border-gray-400 table-auto border-spacing-2 rounded-3xl rounded-b-none">
                    
                    <thead class="bg-[#1c2029]">
                        <tr>
                            <th class="tble-primary font-bitcount-grid-double rounded-tl-2xl">ID</th>
                            <th class="tble-primary font-bitcount-grid-double ">Last Name</th>
                            <th class="tble-primary font-bitcount-grid-double ">First Name</th>
                            <th class="tble-primary font-bitcount-grid-double ">Email</th>
                            <th class="tble-primary font-bitcount-grid-double ">Address</th>
                            <th class="tble-primary font-bitcount-grid-double rounded-tr-2xl">Gender</th>

                        </tr>

                    </thead>


                    <tbody>

                    <?php require('pages/display.php') ?>
                    <?php foreach ($rows as $row): ?>

                        <tr>
                            <td class="tble-primary font-bitcount-grid-double">  <?= $row['id'] ?>             </td>
                            <td class="tble-primary font-bitcount-grid-double">  <?= $row['crud_last_name'] ?> </td>
                            <td class="tble-primary font-bitcount-grid-double">  <?= $row['crud_first_name'] ?></td>
                            <td class="tble-primary font-bitcount-grid-double">  <?= $row['crud_email'] ?>     </td>
                            <td class="tble-primary font-bitcount-grid-double">  <?= $row['crud_address'] ?>   </td>
                            <td class="tble-primary font-bitcount-grid-double">  <?= $row['crud_gender'] ?>    </td>
                        </tr>   


                    <?php endforeach; ?>

                    </tbody>

                </table>

            </div>

        </section>
    
    </div>
    

    


</body>
</html>