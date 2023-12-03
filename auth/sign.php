<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styleauth.css">
    <title>Shadesense</title>
</head>
<body>
  <nav class="bg-rose-100 ">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
      <div class="relative flex h-16 items-center justify-between">
        
        <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
          <div class=" -ml-7 flex flex-shrink-0 items-center">
            <img class=" h-16 w-auto" src="./img/s.png" alt="Your Company">
          </div>
        </div>
        <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
          <div class="relative ml-3">
            <div class="m-auto">
              <button type="button" class="relative flex rounded-full bg-rose-100 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                <span class="absolute -inset-1.5"></span>
                <span class="sr-only">Open user menu</span>
                <img class="h-10 w-10 rounded-full" src="./img/v.PNG" alt="">
              </button>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </nav>

  <!-- section 1 -->
    <section class="flex justify-center w-full max-h-screen mt-5 mx-auto">
      <div class=" block ">
        <img style="width: 340px; height: auto;" class="mt-5 max-h-52" src="./img/shade.jpg" alt="">
      </div>
    </section>
    <section class="flex justify-center w-full max-h-screen mt-5 mx-auto">
      <div class="block">
        <p class="text-amber-800 max-w-xs w-64 text-center font-serif text-lg">Find your color based on your undertone</p>
    </div>
    </section>
    <!-- form login -->
    <section class="mt-5 flex justify-center w-full">
      <form action="proses_signin.php" method="POST" class="block w-72 h-auto">
        <label class="relative block ">
          <span class="sr-only">Username</span>
          <span class="absolute inset-y-0 left-0 flex items-center pl-2">
            <svg style="padding-left:27px; width: 50px; height: 35px;" viewBox="0 0 59 50" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M34.4165 16.6667H46.7082M36.8748 25H46.7082M41.7915 33.3333H46.7082M41.7915 43.75H17.2082C7.37484 43.75 4.9165 41.6667 4.9165 33.3333V16.6667C4.9165 8.33333 7.37484 6.25 17.2082 6.25H41.7915C51.6248 6.25 54.0832 8.33333 54.0832 16.6667V33.3333C54.0832 41.6667 51.6248 43.75 41.7915 43.75Z" stroke="#E19DAC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M29.4998 34.0207C29.3344 32.5583 28.5703 31.191 27.34 30.156C26.1097 29.121 24.4908 28.4835 22.764 28.354C21.5215 28.2498 20.2699 28.2498 19.0273 28.354C17.3022 28.4874 15.6859 29.1262 14.4565 30.1605C13.2272 31.1947 12.4616 32.5597 12.2915 34.0207M20.8957 23.5207C22.0758 23.5207 23.2075 23.1234 24.042 22.4162C24.8765 21.709 25.3453 20.7499 25.3453 19.7498C25.3453 18.7497 24.8765 17.7906 24.042 17.0835C23.2075 16.3763 22.0758 15.979 20.8957 15.979C19.7156 15.979 18.5838 16.3763 17.7493 17.0835C16.9149 17.7906 16.4461 18.7497 16.4461 19.7498C16.4461 20.7499 16.9149 21.709 17.7493 22.4162C18.5838 23.1234 19.7156 23.5207 20.8957 23.5207Z" stroke="#E19DAC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
              
          </span>
          <input  class=" bg-gray-300  p-5 h-10 rounded-full w-full py-2  pr-3 sm:text-sm focus:outline-none " style="padding-left: 60px;"  type="text" name="username" id="username" placeholder="Username...">
        </label>
        <label class="relative block mt-5">
          <span class="sr-only">Email</span>
          <span class="absolute inset-y-0 left-0 flex items-center pl-2">
            <svg  style="padding-left:27px; width: 50px; height: 35px;"  viewBox="0 0 59 42" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M57.8822 13.8688C58.3316 13.5297 59 13.8469 59 14.3828V36.75C59 39.6484 56.5225 42 53.4688 42H5.53125C2.47754 42 0 39.6484 0 36.75V14.3938C0 13.8469 0.656836 13.5406 1.11777 13.8797C3.69902 15.7828 7.12148 18.2 18.8754 26.3047C21.3068 27.9891 25.4092 31.5328 29.5 31.5109C33.6139 31.5438 37.7969 27.9234 40.1361 26.3047C51.89 18.2 55.301 15.7719 57.8822 13.8688ZM29.5 28C32.1734 28.0438 36.0223 24.8063 37.9582 23.4719C53.2498 12.9391 54.4137 12.0203 57.9398 9.39531C58.6082 8.90312 59 8.1375 59 7.32812V5.25C59 2.35156 56.5225 0 53.4688 0H5.53125C2.47754 0 0 2.35156 0 5.25V7.32812C0 8.1375 0.391797 8.89219 1.06016 9.39531C4.58633 12.0094 5.7502 12.9391 21.0418 23.4719C22.9777 24.8063 26.8266 28.0438 29.5 28Z" fill="#E19DAC"/>
            </svg>
          </span>
          <input  class=" bg-gray-300  p-5 h-10 rounded-full w-full py-2 pl-9 pr-3 sm:text-sm  focus:outline-none " style="padding-left: 60px;" type="text" name="email"  id="email" placeholder="Email...">
        </label>
        <label class=" relative block mt-5">
          <span class="sr-only">Password</span>
          <span class="absolute inset-y-0 left-0 flex items-center pl-2">
            <svg style="padding-left:27px; width: 50px; height: 35px;" viewBox="0 0 57 50" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M16.3635 36.4373L21.826 41.229M47.0011 31.104C44.6818 33.1333 41.775 34.5687 38.5941 35.2552C35.4132 35.9418 32.0789 35.8535 28.951 34.9998L17.7648 44.7915C16.9573 45.5207 15.366 45.9582 14.226 45.8123L9.04855 45.1873C7.33855 44.979 5.7473 43.5623 5.48605 42.0623L4.77355 37.5207C4.6073 36.5207 5.15355 35.1248 5.9373 34.4165L17.0998 24.6248C15.1998 19.2082 16.6723 13.0623 21.5648 8.7915C28.571 2.64567 39.9473 2.64567 46.9773 8.7915C54.0073 14.9373 54.0073 24.9582 47.0011 31.104Z" stroke="#E19DAC" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M34.4375 22.9165C35.3823 22.9165 36.2885 22.5873 36.9566 22.0012C37.6247 21.4152 38 20.6203 38 19.7915C38 18.9627 37.6247 18.1678 36.9566 17.5818C36.2885 16.9957 35.3823 16.6665 34.4375 16.6665C33.4927 16.6665 32.5865 16.9957 31.9184 17.5818C31.2503 18.1678 30.875 18.9627 30.875 19.7915C30.875 20.6203 31.2503 21.4152 31.9184 22.0012C32.5865 22.5873 33.4927 22.9165 34.4375 22.9165Z" stroke="#E19DAC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>    
          </span>
          <input  class=" bg-gray-300  p-5 h-10 rounded-full w-full py-2 pl-9 pr-3 sm:text-sm  focus:outline-none " style="padding-left: 60px;" type="password" name="password"  id="password" placeholder="Password...">
        </label>
        <div class="relative block mt-5">
          <button class="bg-rose-300 text-white p-5 h-10 rounded-full w-72 border py-2  pr-3 sm:text-sm" type="submit">SIGN UP</button>
        </div>
          
        </form>
    </section>
    <section class="mt-5 flex justify-center w-full">
      <div class="block">
        <p class="font-normal text-sm">Did you have account? <a href="" class="font-normal text-sm">Login!</a> </p>
    </div>
    </section>
        
</body>
</html>