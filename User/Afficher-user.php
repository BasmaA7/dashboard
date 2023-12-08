 
 <?php
    include_once "../connexion/conx.php"; 
 ?>
 
 
 
 <!DOCTYPE html>
 <html lang="en">

 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML, CSS, Youcode, tailwindCSS, Youssoufia">
    <meta name="author" content="Soulaiman Bouhlal, ZAID MOUMNI">
    <link rel="icon" type="../image/x-icon" href="../images/logo.webp">
    <meta name="description" content="this page is an html project was given in a bootcamp">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;500;600;700;800&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="../dist/output.css" />
        <title>Dashboard - peoplepertask</title>
    <link href="../dist/output.css" rel="stylesheet">
    <title>Dashboard - peoplepertask</title>
</head>
 <body>
  
 <?php include "../header_aside.php"; ?>
 <main class=" mt-14 p-12 ml-0 smXl:ml-64  dark:border-gray-700">
  <div>
    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><a href="users.php">Add +</a></button>
  </div>
  

  <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Full Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Password
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Operation
                </th>
            </tr>
        </thead>
        <tbody>
 <?php
  $sql="select *from `user`";
  $res=mysqli_query($conx,$sql);
  if($res){
   while($row=mysqli_fetch_assoc($res)){
    
    $id= $row['ID'];
    $name = $row ['FullName'];
    $password = $row ['Password'];
    $email = $row ['Email'];
    echo'<tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
        '.$id.'
    </th>
    <td class="px-6 py-4">
      '.$name.'  
    </td>
    <td class="px-6 py-4">
    '.$password.' 
    </td>
    <td class="px-6 py-4">
        '.$email.'
    </td>
    <td class="px-6 py-4">
    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><a href="Edit.php? editID='.$id.'">Edit</a></button>
    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><a  href="delete.php? deleteID='.$id.'">Delete</a></button>
    </td>
</tr>';

   }
  }
 ?>
 

        </tbody>
    </table>
</div>

  <main>
</div>
   <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="../js/theme.js"></script>
    <script src="../js/dashboard.js"></script>
 </body>
 </html>