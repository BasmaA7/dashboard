
<?php 
 include "../connexion/conx.php"; 
    session_start();
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
   
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="The Home Page for PeoplePerTask Platform">
  <meta name="keywords" content="HTML, CSS, Youcode, tailwindCSS, Youssoufia">
  <meta name="author" content="Zaiid Moumnii">

  <title>People Per Tasks</title>
  <link rel="icon" type="image/x-icon" href="../images/logo.webp">

  <link rel="stylesheet" href="../dist/output.css">
  
</head>
<body class="dark:bg-gray-900 ">
<?php include "../nav_b.php";?>

    <section class= "hero-section">
        <div class="grid max-w-screen-xl mt-10 px-4 py-8  mx-auto lg:gap-0 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mx-auto lg:mx-auto place-self-center lg:col-span-7 w-auto">
                <h1 class="max-w-2xl mb-4 text-5xl tracking-wider leading-wide md:text-5xl xl:tracking-normal xl:text-8xl xl:leading-wide dark:text-white ">Are you looking for Freelancers ? </h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">Hire Great Freelancers, Fast. PeopleForTasks helps you hire elite freelancers at a moment's, or just be onenotice. </p>
                <a href="../src/marketplace.html" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-3xl bg-primary-600 hover:bg-primary-700 focus:ring-4">
                    Hire Freelancers
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
                <a href="../src/marketplace.html" class="inline-flex items-start justify-center mt-5 px-2 py-3 text-base text-left text-gray-900 border border-gray-300 rounded-3xl hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                  Look for freelancing jobs 
                </a> 
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="../images/hero.png" alt="Freelance">
            </div>                
        </div>
    </section>
    <section class=" recent-works">
      <div class=" flex flex-col items-center py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
          <h2 class="mb-12 text-2xl tracking-tight font-normal text-[#00373E] dark:text-white lg:text-5xl">Recently posted <span class="text-primary-600">works</span></h2>
          <div class="grid gap-6 lg:gap-16 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 items-center">
              <div class="w-64 bg-white p-8 rounded-lg dark:bg-gray-800 shadow-md">
                  <div class="flex justify-between items-center content-center mb-4 w-fit h-fit rounded-full lg:h-fit lg:w-fit  ">
                    <svg width="40" height="42" viewBox="0 0 37 39" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-[#00373E] dark:text-white">
                      <path d="M23.3543 23.5229L36.3887 0.6875H27.6543L14.5863 23.5145C14.57 23.5346 14.561 23.5598 14.561 23.5858C14.561 23.6118 14.57 23.637 14.5863 23.6572L22.8924 38.2537C22.926 38.3125 22.9596 38.3125 23.0268 38.3125H31.6855L23.3459 23.6404C23.3391 23.6213 23.3363 23.601 23.3377 23.5808C23.3392 23.5605 23.3448 23.5408 23.3543 23.5229ZM15.6361 16.1574L10.6895 7.49023C10.673 7.4611 10.6482 7.43754 10.6183 7.42257C10.5884 7.40761 10.5547 7.40193 10.5215 7.40625H2.45898L7.40566 16.1742C7.41663 16.1948 7.41962 16.2187 7.41406 16.2414L0.611328 27.5625H8.74102C8.76856 27.566 8.7965 27.5605 8.8207 27.5469C8.8449 27.5333 8.86407 27.5123 8.87539 27.4869L15.6361 16.2582C15.6445 16.2251 15.6445 16.1905 15.6361 16.1574Z" fill="currentcolor"/>
                      </svg>
                      
                      <h3 class=" text-xl font-bold dark:text-white ml-2">Logo Design</h3>
                  </div>
                  <p class="text-gray-500 dark:text-gray-400">Need a professional logo with writing underneath for our jewellery company</p>
                  <button
                  type="button"
                  class="text-orange-600 hover:text-black dark:hover:text-white focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-3xl text-xl px-3 py-2 text-center ml-1 md:ml-1 mt-5 dark:focus:ring-orange-600 ">APPLY NOW
                  </button>
              </div>
              <div class="w-64 bg-white p-8 rounded-lg dark:bg-gray-800 shadow-md">
                <div class="flex justify-between items-center content-center mb-4 w-fit h-fit rounded-full lg:h-fit lg:w-fit  ">
                  <svg width="40" height="40" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-[#00373E] dark:text-white">
                    <g filter="url(#filter0_d_1_148)">
                    <path d="M25.5 0C13.6226 0 4 9.62259 4 21.5C4 33.3774 13.6226 43 25.5 43C37.3774 43 47 33.3774 47 21.5C47 9.62259 37.3774 0 25.5 0ZM16.4713 13.76C17.8218 13.76 18.8726 14.745 18.9909 15.9087C19.1185 16.9581 18.6832 17.8759 17.5222 18.4282C16.9054 18.7359 16.6608 18.7359 16.5345 18.5532C16.4713 18.4282 16.5345 18.3099 16.6595 18.1823C17.7667 17.2672 17.7667 16.5254 17.6391 15.4827C17.5759 14.8041 17.0868 14.3754 16.5963 14.3754C14.4409 14.3754 11.3758 19.1632 11.8018 22.6691C11.9913 24.0195 12.7895 25.6159 14.5041 25.6159C15.0577 25.6159 15.6745 25.4332 16.2254 25.1899C17.1217 24.7129 17.6606 24.3501 18.1927 23.7548C18.0597 22.1652 19.4518 20.0877 21.5091 20.0877C22.4336 20.0877 23.1686 20.4586 23.2304 21.1372C23.35 22.055 22.5518 22.1799 22.3072 22.1799C22.0613 22.1799 21.6287 22.1168 21.6287 21.8722C21.5736 21.6263 22.1809 21.7472 22.1245 21.1936C22.0613 20.8228 21.6905 20.7045 21.3277 20.7045C20.0323 20.7045 19.2973 22.489 19.48 23.5868C19.5432 24.0827 19.7864 24.5745 20.2849 24.5745C20.6491 24.5745 21.2027 24.0209 21.3827 23.224C21.5077 22.6704 21.9995 22.2995 22.4322 22.2995C22.615 22.2995 22.7332 22.3627 22.7964 22.6072V22.8532C22.7413 23.0991 22.5505 23.8408 22.615 24.0209C22.615 24.1485 22.6781 24.3286 22.9213 24.3286C23.0826 24.3286 23.6994 24.0061 24.3148 23.5022C24.5177 22.4447 24.7623 21.1788 24.7623 21.074C24.8254 20.64 25.0082 20.2127 25.8682 20.2127C26.0563 20.2127 26.1759 20.2758 26.2391 20.5204V20.7663L25.9932 21.8722C26.7927 20.8295 27.9604 20.0944 28.6954 20.0944C29.0032 20.0944 29.2491 20.2758 29.2491 20.5836C29.2491 20.7663 29.2491 21.074 29.1214 21.3831C28.8782 22.055 28.5691 23.1044 28.3864 24.0209C28.3864 24.2668 28.4495 24.5113 28.7572 24.5113C29.065 24.5113 29.9827 24.1472 30.7178 23.1609L30.7326 23.1542C30.7326 23.0346 30.7178 22.9163 30.7178 22.7981C30.7178 22.0563 30.7809 21.4476 30.9072 21.0136C31.0322 20.5231 31.6423 20.0958 32.0132 20.0958C32.1946 20.0958 32.384 20.214 32.384 20.3968C32.384 20.4599 32.384 20.5849 32.3209 20.6427C32.075 21.4476 31.8855 22.1813 31.8855 22.9163C31.8855 23.3503 31.95 23.9591 32.075 24.3299C32.075 24.3931 32.1301 24.4549 32.1932 24.4549C32.3209 24.4549 33.1809 23.6581 33.7896 22.6072C33.236 22.2431 32.9282 21.6277 32.9282 20.8926C32.9282 19.5986 33.7345 18.9254 34.4695 18.9254C35.0863 18.9254 35.5754 19.354 35.5754 20.214C35.5754 20.7677 35.3927 21.3844 35.0863 21.9354H35.2677C35.6601 21.9502 36.0458 21.7889 36.3105 21.5094C36.3689 21.4159 36.4548 21.3427 36.5564 21.2998C37.1584 20.5365 38.0399 19.9708 39.0826 19.9708C39.9426 19.9708 40.7341 20.3417 40.7973 21.0136C40.9222 21.9367 40.1187 22.1195 39.8727 22.1195C39.6295 22.1195 39.1955 22.0563 39.1955 21.8118C39.1955 21.5672 39.7478 21.6868 39.6913 21.1399C39.6282 20.769 39.2573 20.644 38.8864 20.644C37.6609 20.644 36.8641 22.2391 37.0442 23.5344C37.1073 24.0236 37.3519 24.5772 37.8437 24.5772C38.2146 24.5772 38.7668 24.0236 39.0114 23.2267C39.1297 22.7376 39.6282 22.3022 40.0542 22.3022C40.2423 22.3022 40.3619 22.3654 40.425 22.6099C40.425 22.7376 40.425 22.9808 40.1791 23.7803C39.8714 24.3326 39.8714 24.6403 39.9359 24.8863C39.991 25.3754 40.2369 25.7462 40.4882 25.929C40.5331 25.986 40.5731 26.0467 40.6078 26.1104C40.6078 26.2381 40.5433 26.363 40.3619 26.363C40.2987 26.363 40.2423 26.363 40.1791 26.2999C39.256 25.929 38.8851 25.3122 38.7655 24.6968C38.3946 25.1308 37.9687 25.3754 37.4715 25.3754C36.6719 25.3754 35.8818 24.6403 35.7568 23.7158C35.7186 23.3238 35.764 22.9281 35.8899 22.5548C35.5257 22.786 35.1333 22.919 34.7705 22.919H34.4695C33.6646 24.0867 32.8033 24.8862 32.1946 25.2504C31.9849 25.3621 31.7532 25.4264 31.516 25.4385C31.3977 25.4385 31.2096 25.3754 31.1518 25.2504C30.9785 24.9776 30.8723 24.5503 30.8024 24.0612C29.9411 24.9978 28.7505 25.5017 28.1996 25.5017C27.5828 25.5017 27.22 25.1308 27.1568 24.5167V23.8448C27.3382 22.4944 27.8354 21.6895 27.8354 21.4436C27.8318 21.4112 27.8172 21.3811 27.7939 21.3583C27.7706 21.3355 27.7402 21.3215 27.7078 21.3186C27.2818 21.3186 25.8682 22.7954 25.6223 23.7817L25.4342 24.5785C25.3146 25.1308 24.7623 25.5017 24.3914 25.5017C24.2087 25.5017 24.0837 25.4385 24.0273 25.1953V24.9494L24.1038 24.5302C23.3258 25.0824 22.5491 25.4385 22.1782 25.4385C21.626 25.4385 21.3183 25.1308 21.2632 24.6968C20.8923 25.1953 20.4636 25.4385 19.9127 25.4385C19.2744 25.4385 18.6603 25.0045 18.366 24.3756C17.9239 24.8715 17.4268 25.3687 16.8395 25.7463C15.9795 26.2999 14.9999 26.7258 13.8295 26.7258C12.7868 26.7258 11.8636 26.1722 11.3732 25.6831C10.6314 25.0045 10.2054 23.9618 10.1423 22.9808C9.77813 19.9722 11.6191 16.1008 14.4383 14.3795C15.1168 14.0086 15.7968 13.7654 16.4687 13.7654L16.4713 13.76ZM33.975 19.6604C33.7936 19.6604 33.6687 19.9681 33.6687 20.2678C33.6687 20.7663 33.9119 21.3172 34.2209 21.6263C34.3442 21.29 34.4083 20.935 34.4104 20.5768C34.4104 19.9695 34.1645 19.6618 33.975 19.6618V19.6604Z" fill="currentcolor"/>
                    </g>
                    <defs>
                    <filter id="filter0_d_1_148" x="0" y="0" width="51" height="51" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                    <feOffset dy="4"/>
                    <feGaussianBlur stdDeviation="2"/>
                    <feComposite in2="hardAlpha" operator="out"/>
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1_148"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1_148" result="shape"/>
                    </filter>
                    </defs>
                  </svg>  
                  <h3 class=" text-xl font-bold dark:text-white ml-1">Graphic Design</h3>
                </div>
                <p class="text-gray-500 dark:text-gray-400">Need a professional logo with writing underneath for our jewellery company</p>
                <button
                type="button"
                class="text-orange-600 hover:text-black dark:hover:text-white focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-3xl text-xl px-3 py-2 text-center ml-1 md:ml-1 mt-5 dark:focus:ring-orange-600 ">APPLY NOW
                </button>
              </div>
              <div class="w-64 bg-white p-8 rounded-lg dark:bg-gray-800 shadow-md">
                <div class="flex justify-between items-center content-center mb-4 w-fit h-fit rounded-full lg:h-fit lg:w-fit  ">
                  <svg width="40" height="40" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-[#00373E] dark:text-white">
                    <g clip-path="url(#clip0_1_155)">
                    <path d="M14.4196 5.375C11.0703 5.375 7.85814 6.86041 5.48983 9.50446C3.12152 12.1485 1.79102 15.7346 1.79102 19.4739C1.79102 23.2131 3.12152 26.7992 5.48983 29.4433C7.85814 32.0873 11.0703 33.5727 14.4196 33.5727H16.3499C16.1787 32.2368 16.1787 30.8804 16.3499 29.5445H14.4196C12.0272 29.5445 9.73283 28.4835 8.04118 26.5949C6.34953 24.7062 5.39917 22.1447 5.39917 19.4739C5.39917 16.803 6.34953 14.2415 8.04118 12.3529C9.73283 10.4643 12.0272 9.40324 14.4196 9.40324H28.8522C30.1899 9.40294 31.511 9.73483 32.7197 10.3749C33.9284 11.0149 34.9944 11.9471 35.8406 13.1038C36.6868 14.2606 37.2919 15.613 37.6121 17.0631C37.9324 18.5132 37.9597 20.0246 37.6922 21.488C38.755 22.6515 39.6259 24.0151 40.2648 25.5162C41.1779 23.367 41.5891 20.9948 41.4602 18.6204C41.3312 16.2461 40.6662 13.9467 39.5271 11.9365C38.3881 9.92621 36.8119 8.27038 34.9455 7.12313C33.079 5.97588 30.9828 5.37451 28.8522 5.375H14.4196ZM19.8318 31.5586C19.8321 29.9884 20.1613 28.4401 20.7931 27.0372C21.4249 25.6344 22.3418 24.4159 23.4705 23.4791C24.5992 22.5423 25.9084 21.9131 27.2937 21.6418C28.679 21.3706 30.1019 21.4647 31.4488 21.9167C32.7957 22.3687 34.0293 23.166 35.051 24.2451C36.0728 25.3241 36.8543 26.6549 37.3333 28.1313C37.8123 29.6076 37.9754 31.1885 37.8097 32.7477C37.644 34.307 37.154 35.8014 36.3788 37.1115L40.9521 42.2193L38.4012 45.0673L33.826 39.9615C32.4664 40.9648 30.8887 41.5381 29.2606 41.6205C27.6325 41.7029 26.0148 41.2912 24.5795 40.4294C23.1441 39.5675 21.9447 38.2876 21.1088 36.7257C20.2728 35.1637 19.8315 33.3781 19.8318 31.5586Z" fill="currentcolor"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_1_155">
                    <rect width="43" height="43" fill="white"/>
                    </clipPath>
                    </defs>
                    </svg>
                    
                  <h3 class=" text-xl font-bold dark:text-white ml-2">SEO Expert </h3>
                </div>
                <p class="text-gray-500 dark:text-gray-400">Need a professional logo with writing underneath for our jewellery company</p>
                <button
                type="button"
                class="text-orange-600 hover:text-black dark:hover:text-white focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-3xl text-xl px-3 py-2 text-center ml-1 md:ml-1 mt-5 dark:focus:ring-orange-600 ">APPLY NOW
                </button>
              </div>    
            </div>                  
        </div>
    </section>
    <section class="categories">
    <div class="flex flex-col items-center py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
        <h2 class="mb-12 text-2xl tracking-tight font-normal text-[#00373E] dark:text-white lg:text-5xl">Most Popular <span class="text-primary-600">categories</span></h2>
        
        <div class="grid gap-6 lg:gap-10 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 items-center">
            <?php 
                $query = "SELECT * FROM categorie";
                $result = mysqli_query($conx, $query);
                while ($row = mysqli_fetch_assoc($result)){

            ?>
                <div class="shadow-md">
                    <a href="../src/marketplace.php" class="block w-full h-50 relative rounded-2xl overflow-hidden">
                        <img class="w-full h-full" src="./images/<?= $row['img'] ?>">
                        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <span class="text-white text-xl font-bold tracking-wider"><?php echo $row['CategorieName'] ?></span>
                        </div>
                    </a>
                </div>
            <?php  } ?>
        </div>
        
        <button id="More"
                type="button"
                class="bg-primary-600 text-white hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-3xl text-xl px-5 py-3 text-center ml-1 md:ml-1 mt-10 dark:focus:ring-orange-600">
            More categories
        </button>
    </div>
</section>
    <section class=" freelancers">
      <div class=" flex flex-col items-center py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6 ">
        <h2 class=" mb-12 text-xl tracking-tight font-normal text-[#00373E] dark:text-white lg:text-5xl">Check out the most popular <span class="text-primary-600">freelancers</span></h2>
        <div class="grid gap-6 lg:gap-16 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 items-center">
            <div class="text-center text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 py-12 px-12 w-64 rounded-xl shadow-md">
              <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="../images/freelancer2.jpg" alt="Khalid Oukha">
              <h3 class="mb-1 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                  <a href="../src/freelancers.html">Khalid Oukha</a>
              </h3>
              <p>Graphic Designer</p>
            </div>
            <div class="text-center text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 py-12 px-12 w-64 rounded-xl shadow-md">
                  <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="../images/freelancer3.jpg" alt="Yassine Louissi">
                  <h3 class="mb-1 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                      <a href="../src/freelancers.html">Yassine Louissi</a>
                  </h3>
                  <p>UI UX Designer</p>
            </div>
            <div class="text-center text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 py-12 px-12 w-64 rounded-xl shadow-md">
                  <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="../images/freelancer1.jpg" alt="Abdeljabbar Ait">
                  <h3 class="mb-1 text-xl font-bold tracking-tight text-gray-900 dark:text-white"> 
                      <a href="../src/freelancers.html">Abdeljabar 
                      </a>
                  </h3>
                  <p>SEO & Marketing</p>
            </div>
        </div>  
      </div>
    </section>
    <section class="Testimonials">
      <div class=" flex flex-col justify-evenly sm:flex-row lg:flex-row items-center py-8 px-8 mx-auto max-w-screen-xl lg:px-6 lg:py-16 ">
          <div class="text-left w-96 ">
            <h2 class=" text-3xl font-bold tracking-widest leading-loose text-[#00373E] dark:text-white sm:text-3xl sm:leading-loose">
              What our customers are saying ?
            </h2>
            <p class="mt-7 sm:leading-10 text-gray-600 ">
              Doesn't matter if you're a freelancer or just a client looking for a task to be done ... “PeoplePerTasks” makes everything happen.
            </p>
            <div class="hidden lg:mt-8 lg:flex lg:gap-4">
              <button
                aria-label="previous slide"
                id="previous"
                class="rounded-full border border-black p-3 text-black transition dark:border-white dark:text-white hover:bg-[#00373E] hover:text-white">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="h-5 w-5 rtl:rotate-180"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M15.75 19.5L8.25 12l7.5-7.5"
                  />
                </svg>
              </button>
              <button
                aria-label="Next slide"
                id="next"
                class="rounded-full border border-black p-3 text-black transition dark:border-white dark:text-white hover:bg-[#00373E] hover:text-white">
                <svg
                  class="h-5 w-5 rtl:rotate-180"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M9 5l7 7-7 7"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                  />
                </svg>
              </button>
            </div>
          </div>
          <div class="-mx-6 lg:col-span-2 lg:mx-0 self-center justify-start overflow-hidden mt-4 shadow-md" id="client">
            <div id="clients_slider" class="w-[410px] flex gap-4 px-2 duration-200">
              <div class="client">
                <div
                  class="flex h-fit flex-col justify-between bg-white dark:bg-gray-800 p-6  rounded-2xl mt-3 shadow-sm w-96  sm:p-8 lg:p-12"
                >
                  <div> 
                    <div class="flex items-center ">
                      <img src="../images/client1.jpg" alt="Aymane Benhima" class="mb-4 rounded-full w-11 h-11">
                      <div class="flex flex-col mb-4 ml-8">
                        <h3 class="dark:text-white">Aymane Benhima</h3>
                        <p class="text-gray-800 dark:text-gray-400 pt-2 lg:pt-2">Front-End Developer</p>
                      </div>
                    </div>
                    <p class="mt-4 leading-relaxed text-gray-700 dark:text-gray-400">
                      Loving this freelancing platform! As a front-end developer, the seamless interface and diverse opportunities make it my go-to. Quick payments and user-friendly experience keep me coming back. Kudos to the team for an awesome space for freelancers!
                    </p>
                  </div>
                </div>
              </div>
              <div class="client">
                <div
                  class="flex h-fit flex-col justify-between bg-white dark:bg-gray-800 p-6  rounded-2xl mt-3 shadow-sm w-96  sm:p-8 lg:p-12"
                >
                  <div> 
                    <div class="flex items-center ">
                      <img src="../images/client2.jpg" alt="Aymane Benhima" class="mb-4 rounded-full w-11 h-11">
                      <div class="flex flex-col mb-4 ml-8">
                        <h3 class="dark:text-white">Mohammed-elarbi El Hattab</h3>
                        <p class="text-gray-800 dark:text-gray-400 pt-2 lg:pt-2">Data scientist</p>
                      </div>
                    </div>
                    <p class="mt-4 leading-relaxed text-gray-700 dark:text-gray-400">
                      The diversity of data projects is outstanding, allowing me to apply my skills across various domains. Transparent communication and a reliable payment system make working here a pleasure. I'm truly glad to be one of your loyal customers
                    </p>
                  </div>
                </div>
              </div>
              <div class="client">
                <div
                  class="flex h-fit flex-col justify-between bg-white dark:bg-gray-800 p-6  rounded-2xl mt-3 shadow-sm w-96  sm:p-8 lg:p-12"
                >
                  <div> 
                    <div class="flex items-center ">
                      <img src="../images/client3.jpg" alt="Aymane Benhima" class="mb-4 rounded-full w-11 h-11">
                      <div class="flex flex-col mb-4 ml-8">
                        <h3 class="dark:text-white">Mohamed Tergui</h3>
                        <p class="text-gray-800 dark:text-gray-400 pt-2 lg:pt-2">Graphic Designer</p>
                      </div>
                    </div>
                    <p class="mt-4 leading-relaxed text-gray-700 dark:text-gray-400">
                      As a graphic designer, finding the right platform is crucial. P-P-T nails the essentials with a sleek, user-friendly interface that makes showcasing my portfolio and connecting with clients a breeze. It truly gets the needs of freelancers in the creative field.
                    </p>
                  </div>
                </div>
              </div>
              <div class="client">
                <div
                  class="flex h-fit flex-col justify-between bg-white dark:bg-gray-800 p-6  rounded-2xl mt-3 shadow-sm w-96  sm:p-8 lg:p-12"
                >
                  <div> 
                    <div class="flex items-center ">
                      <img src="../images/client4.jpg" alt="Aymane Benhima" class="mb-4 rounded-full w-11 h-11">
                      <div class="flex flex-col mb-4 ml-8">
                        <h3 class="dark:text-white">Bilal Chbanat</h3>
                        <p class="text-gray-800 dark:text-gray-400 pt-2 lg:pt-2">Video editor</p>
                      </div>
                    </div>
                    <p class="mt-4 leading-relaxed text-gray-700 dark:text-gray-400">
                      Freelancing bliss! As a video editor, this platform is a game-changer. The intuitive interface makes showcasing my portfolio and connecting with clients seamless. Hats off to the team for understanding and supporting freelancers' unique needs
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mt-8 flex justify-center gap-4 lg:hidden">
            <button
              aria-label="previous slide"
              id="mobile-previous"
              class="rounded-full border border-black p-3 text-black transition dark:border-white dark:text-white hover:bg-[#00373E] hover:text-white">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="h-5 w-5 rtl:rotate-180"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M15.75 19.5L8.25 12l7.5-7.5"
                />
              </svg>
            </button>
            <button
              aria-label="Next slide"
              id="mobile-next"
              class="rounded-full border border-black p-3 text-black transition dark:border-white dark:text-white hover:bg-[#00373E] hover:text-white">
              <svg
                class="h-5 w-5 rtl:rotate-180"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M9 5l7 7-7 7"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                />
              </svg>
            </button>
          </div>
    
      </div>
    </section>
    
<footer class="p-4 bg-white sm:p-6 dark:bg-gray-800">
      <div class="mx-auto max-w-screen-xl ">
        <div class="md:flex md:justify-between">
          <div class="mb-6 md:mb-0">
            <a href="../src/index.html" class="flex items-center">
              <img
                src="../images/logo.webp"
                class="mr-3 h-6 sm:h-9"
                alt="peoplepertask Logo"
              >
              <span class="self-center lg:visible: lg:text-xl font-semibold whitespace-nowrap dark:text-white">PeoplePerTask</span>
            </a>
          </div>
          <div class="grid grid-cols-2 gap-8 px-4 py-6 lg:py-8 md:grid-cols-4">
            <div>
              <h2
                class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white"
              >
                Company
              </h2>
              <ul class="text-gray-500 dark:text-gray-400 font-medium">
                <li class="mb-4">
                  <a href="../src/about.html" class="hover:underline">About</a>
                </li>
                <li class="mb-4">
                  <a href="../src/about.html" class="hover:underline">Careers</a>
                </li>
                <li class="mb-4">
                  <a href="../src/about.html" class="hover:underline">Brand Center</a>
                </li>
              </ul>
            </div>
            <div>
              <h2
                class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white"
              >
                Help center
              </h2>
              <ul class="text-gray-500 dark:text-gray-400 font-medium">
                <li class="mb-4">
                  <a href="../src/error404.html" class="hover:underline">Discord Server</a>
                </li>
                <li class="mb-4">
                  <a href="../src/error404.html" class="hover:underline">Twitter</a>
                </li>
                <li class="mb-4">
                  <a href="./contact.php" class="hover:underline">Contact Us</a>
                </li>
              </ul>
            </div>
            <div>
              <h2
                class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white"
              >
                Legal
              </h2>
              <ul class="text-gray-500 dark:text-gray-400 font-medium">
                <li class="mb-4">
                  <a href="../src/error404.html" class="hover:underline">Privacy Policy</a>
                </li>
                <li class="mb-4">
                  <a href="../src/error404.html" class="hover:underline">Licensing</a>
                </li>
                <li class="mb-4">
                  <a href="../src/error404.html" class="hover:underline">Terms &amp; Conditions</a>
                </li>
              </ul>
            </div>
            <div>
              <h2
                class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white"
              >
                Download
              </h2>
              <ul class="text-gray-500 dark:text-gray-400 font-medium">
                <li class="mb-4">
                  <a href="../src/error404.html" class="hover:underline">iOS</a>
                </li>
                <li class="mb-4">
                  <a href="../src/error404.html" class="hover:underline">Android</a>
                </li>
                <li class="mb-4">
                  <a href="../src/error404.html" class="hover:underline">Windows</a>
                </li>
                <li class="mb-4">
                  <a href="../src/error404.html" class="hover:underline">MacOS</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <hr
          class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8"
        >
        <div class="sm:flex sm:items-center sm:justify-between">
          <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400"
            >© 2023 <a href="#" class="hover:underline">PeoplePerTask™</a>. All
            Rights Reserved.
          </span>
          <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
            <a
              href="www.facebook.com"
              class="text-gray-500 hover:text-gray-900 dark:hover:text-white"
            >
              <svg
                class="w-5 h-5"
                fill="currentColor"
                viewBox="0 0 24 24"
                aria-hidden="true"
              >
                <path
                  fill-rule="evenodd"
                  d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                  clip-rule="evenodd"
                />
              </svg>
            </a>
            <a
              href="www.instagram.com"
              class="text-gray-500 hover:text-gray-900 dark:hover:text-white"
            >
              <svg
                class="w-5 h-5"
                fill="currentColor"
                viewBox="0 0 24 24"
                aria-hidden="true"
              >
                <path
                  fill-rule="evenodd"
                  d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                  clip-rule="evenodd"
                />
              </svg>
            </a>
            <a
              href="www.twitter.com"
              class="text-gray-500 hover:text-gray-900 dark:hover:text-white"
            >
              <svg
                class="w-5 h-5"
                fill="currentColor"
                viewBox="0 0 24 24"
                aria-hidden="true"
              >
                <path
                  d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"
                />
              </svg>
            </a>
            <a
              href="www.github.com/zaiidmo/PeoplePerTasks"
              class="text-gray-500 hover:text-gray-900 dark:hover:text-white"
            >
              <svg
                class="w-5 h-5"
                fill="currentColor"
                viewBox="0 0 24 24"
                aria-hidden="true"
              >
                <path
                  fill-rule="evenodd"
                  d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                  clip-rule="evenodd"
                />
              </svg>
            </a>
            <a
              href="#"
              class="text-gray-500 hover:text-gray-900 dark:hover:text-white"
            >
              <svg
                class="w-5 h-5"
                fill="currentColor"
                viewBox="0 0 24 24"
                aria-hidden="true"
              >
                <path
                  fill-rule="evenodd"
                  d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                  clip-rule="evenodd"
                />
              </svg>
            </a>
          </div>
        </div>
      </div>
</footer>
<script src="../js/theme.js"></script>
<script src="../js/home.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
</body>
</html>














<!-- 
<section class="categories">
      <div class=" flex flex-col items-center py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
        <h2 class="mb-12 text-2xl tracking-tight font-normal text-[#00373E] dark:text-white lg:text-5xl">Most Popular <span class="text-primary-600">categories</span></h2>
        <div class="grid gap-6 lg:gap-10 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 items-center">
          <div class="shadow-md">
            <a href="../src/marketplace.html" class="block w-full h-50 relative rounded-2xl overflow-hidden">
                <img class="w-full h-full" src="../images/category1.png" alt="Graphic Design">
                <div class="absolute inset-0 bg-black bg-opacity-50"></div>
                <div class="absolute inset-0 flex items-center justify-center">
                    <span class="text-white text-xl font-bold tracking-wider">Graphic Design</span>
                </div>
            </a>
          </div>   
          <div class="shadow-md hidden sm:block">
            <a href="../src/marketplace.html" class="block w-full h-50 relative rounded-2xl overflow-hidden">
              <img class="w-full h-full" src="../images/category2.png" alt="Cartoon Animation">
                <div class="absolute inset-0 bg-black bg-opacity-50"></div>
                <div class="absolute inset-0 flex items-center justify-center">
                    <span class="text-white text-xl font-bold tracking-wider">Cartoon Animation</span>
                </div>
            </a>
          </div>
          <div class="shadow-md hidden sm:block">
            <a href="../src/marketplace.html" class="block w-full h-50 relative rounded-2xl overflow-hidden">
              <img class="w-full h-full" src="../images/category3.png" alt="Illustration">
                <div class="absolute inset-0 bg-black bg-opacity-50"></div>
                <div class="absolute inset-0 flex items-center justify-center">
                    <span class="text-white text-xl font-bold tracking-wider">Illustration</span>
                </div>
            </a>
          </div>
          <div class="shadow-md">
            <a href="../src/marketplace.html" class="block w-full h-50 relative rounded-2xl overflow-hidden">
              <img class="w-full h-full " src="../images/category4.png" alt="Video Editing">
                <div class="absolute inset-0 bg-black bg-opacity-50"></div>
                <div class="absolute inset-0 flex items-center justify-center">
                    <span class="text-white text-xl tracking-wider font-bold">Video Editing</span>
                </div>
            </a>
          </div> 
        </div> 
        <button id="More"
        type="button"
        class="bg-primary-600 text-white hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-3xl text-xl px-5 py-3 text-center ml-1 md:ml-1 mt-10 dark:focus:ring-orange-600">More categories
        </button>
      </div>
    </section> -->