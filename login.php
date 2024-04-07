<?php
  require_once("header.php");
?>
  <div class="loginSection">
     <div class="container">
       <div class="login-part bg-[#015967] shadow-md max-w-screen-xl flex flex-wrap items-center justify-center mx-auto p-4">
         <div class="admin-login bg-[#015967] p-10 rounded scroll-p-5 shadow-md">
            <svg class="w-20 h-20 m-auto text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
              <path fill-rule="evenodd" d="M10 5a2 2 0 0 0-2 2v3h2.4A7.48 7.48 0 0 0 8 15.5a7.48 7.48 0 0 0 2.4 5.5H5a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h1V7a4 4 0 1 1 8 0v1.15a7.446 7.446 0 0 0-1.943.685A.999.999 0 0 1 12 8.5V7a2 2 0 0 0-2-2Z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M10 15.5a5.5 5.5 0 1 1 11 0 5.5 5.5 0 0 1-11 0Zm6.5-1.5a1 1 0 1 0-2 0v1.5a1 1 0 0 0 .293.707l1 1a1 1 0 0 0 1.414-1.414l-.707-.707V14Z" clip-rule="evenodd"/>
            </svg>

            <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Admin</span>Login</h1>

              <form class="max-w-sm mx-auto" action="php_core/admin_login.php" method="POST">
              <label for="email-address-icon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Email</label>
              <div class="relative">
                  <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                      <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z"/>
                      <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z"/>
                    </svg>
                  </div>
                  <input type="email" name="email" id="email" id="email-address-icon" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@gmail.com" required>
                </div>

                <label for="email-address-icon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                <div class="relative">
                  <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                      <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z"/>
                      <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z"/>
                    </svg>
                  </div>
                  <input type="password" name="password" id="password" id="email-address-icon" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="password" required>
                </div>
                
                <input type="submit" class="mt-4
                text-white bg-[#015967] hover:bg-[#015967] focus:ring-4 focus:bg-[#015967] font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-[#015967] dark:hover:bg-[#015967] focus:outline-none dark:focus:ring-blue-800 border-solid border-2 border-sky-500" value="login">
              </form>
          </div>
         <div class="alumni-login m-5 bg-[#015967] p-10 rounded scroll-p-5 shadow-md">
          <div class="alumni-icon">
                  <svg class="w-20 h-20 m-auto text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd" d="M12 6a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm-1.5 8a4 4 0 0 0-4 4 2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-3Zm6.82-3.096a5.51 5.51 0 0 0-2.797-6.293 3.5 3.5 0 1 1 2.796 6.292ZM19.5 18h.5a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-1.1a5.503 5.503 0 0 1-.471.762A5.998 5.998 0 0 1 19.5 18ZM4 7.5a3.5 3.5 0 0 1 5.477-2.889 5.5 5.5 0 0 0-2.796 6.293A3.501 3.501 0 0 1 4 7.5ZM7.1 12H6a4 4 0 0 0-4 4 2 2 0 0 0 2 2h.5a5.998 5.998 0 0 1 3.071-5.238A5.505 5.505 0 0 1 7.1 12Z" clip-rule="evenodd"/>
                </svg>
            </div>
         <h1 class="mb-4 text-2xl text-center font-extrabold leading-none tracking-tight text-gray-900 md:text-3xl lg:text-3xl dark:text-white">Are You Alumni ?</h1>
            <div class="alumni-login-button text-center">
            <a href="alumni_login.php" class="mt-4
                text-white bg-[#015967] hover:bg-[#015967] focus:ring-4 focus:bg-[#015967] font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-[#015967] dark:hover:bg-[#015967] focus:outline-none dark:focus:ring-blue-800 border-solid border-2 border-sky-500" >Click Here</a>
            </div>
         </div>
       </div>
     </div>
  </div>
<?php 
  require_once("footer.php");
?>

<form class="max-w-sm mx-auto">
  <label for="email-address-icon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Email</label>
  
</form>
