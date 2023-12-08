<?php
include "../connexion/conx.php"; ?>


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
            <button type="button"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><a
                    href="user.php">Add +</a></button>
        </div>


        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">

                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" name=userID class="px-6 py-3">
                            project_ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Project_Titre
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Description
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Catégorie_Name
                        </th>

                        <th scope="col" class="px-6 py-3">
                            Operation
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = " SELECT p.*, c.'CategorieID
                 FROM project p 
                 INNER JOIN categorie C ON p.CategorieID = C.CategorieID";

                    $res = mysqli_query($conx, $sql);

                    if ($res) {
        
                    while($row = mysqli_fetch_assoc($res)) {

                        ?>
                        <tr>
                          <td>
                            <?php echo $row['ID']; ?>
                          </td>
                          <td>
                            <?php echo $row['ProjectTitle']; ?>
                          </td>
                          <td>
                            <?php echo $row['Description']; ?>
                          </td>
                          <td>
                            <?php echo $row['CategorieID']; ?>
                          </td>
            
                          <td><a href="update_project.php?id=<?php echo $row['Project_ID']; ?>" class="btn btn-info">Update</a></td>
                          <td><a href="#" class="btn btn-danger">Delete</a></td>
                        </tr>
                        <?php
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