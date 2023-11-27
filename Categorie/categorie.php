 
 <?php include_once "../connexion/conx.php"; 

if(isset($_POST['submit'])){

  $name=$_POST['CategorieName'];
  

  $sql="insert into `categorie`(CategorieName)
  values ('$name')";
  $res=mysqli_query($conx,$sql);

  if($res){
    echo 'DB insert success fully';
  }
  else{
    die(mysqli_connect_error($conx));
  }


}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML, CSS, Youcode, tailwindCSS, Youssoufia">
    <meta name="author" content="Soulaiman Bouhlal, ZAID MOUMNI">
    <link rel="icon" type="image/x-icon" href="../images/logo.webp">
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

<body class="dark:bg-gray-900">

    <?php include "header_aside.php"; ?>

    <main class=" mt-14 p-12 ml-0 smXl:ml-64  dark:border-gray-700">
   
   
 <div class="bg-white border-2 border-gray-500">
<form class="max-w-md mx-auto" method="post">
  <div class="relative z-0 w-full mb-5 group border">
      <input  name="CategorieName" type="text"  id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" CategorieName" required />
      <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"></label>
  </div>

  
  <button name="submit"  type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>
</div>
        
    </main>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="../js/theme.js"></script>
    <script src="../js/dashboard.js"></script>
</body>

</html>