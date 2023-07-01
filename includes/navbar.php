<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a href="./" class="navbar-brand">จองหนังสือ</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-res"
            aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-res">
            <div class="navbar-nav me-auto">
                <a class="active nav-link" href="./">Home</a>
                <a class="nav-link" href="./interest.php">หนังสือน่าสนใจ</a>
                <a class="nav-link" href="./category.php">รายการหมวดหนังสือ</a>
                <a class="nav-link" href="./onhold.php">หนังสือที่ฉันจอง</a>
            </div>
            <div class="navbar-nav ms-auto">
                <a class="nav-link text-primary" href="./register.php">สมัครสมาชิก</a>
                <a class="nav-link text-primary" href="./login.php">เข้าสู่ระบบ</a>
            </div>
        </div>
    </div>
</nav> -->



<header class="bg-white mb-3 dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="./" class="not-underline block py-2 pl-3 pr-4 text-xl text-black font-bold rounded md:bg-transparent md:p-0 md:dark:text-blue-500" aria-current="page">จองหนังสือ</a>
  <div class="flex md:order-2">
        <div class="flex gap-2 md:block hidden">
            <a href="./login.php" class="text-white bg-emerald-500 transition duration-200 hover:bg-emerald-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">เข้าสู่ระบบ</a>
            <a href="./register.php" class="text-white bg-emerald-500 transition duration-200 hover:bg-emerald-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">สมัครสมาชิก</a>
        </div>
      <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
      </button>
  </div>
  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
    <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
      <li>
        <a href="./" class="not-underline block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Home</a>
      </li>
      <li>
        <a href="./interest.php" class="not-underline block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">หนังสือน่าสนใจ</a>
      </li>
      <li>
        <a href="./category.php" class="not-underline block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">รายการหมวดหนังสือ</a>
      </li>
      <li>
        <a href="./onhold.php" class="not-underline block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">หนังสือที่ฉันจอง</a>
      </li>
      <li class="md:hidden block">
        <div class="flex gap-1">
            <a href="./login.php" class="text-white bg-emerald-500 transition duration-200 hover:bg-emerald-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2 text-center md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">เข้าสู่ระบบ</a>
            <a href="./register.php" class="text-white bg-emerald-500 transition duration-200 hover:bg-emerald-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2 text-center md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">สมัครสมาชิก</a>
        </div>
      </li>
    </ul>
  </div>
  </div>
</header>


<script>
    const button = document.querySelector('[data-collapse-toggle]');
    const target = document.querySelector(`#${button.getAttribute('aria-controls')}`);

    button.addEventListener('click', () => {
        target.classList.toggle('hidden');
    });
</script>