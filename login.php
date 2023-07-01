<?php
    include "./includes/head.php";
    include "./includes/navbar.php";
    ?>

    <div class="mt-5 flex justify-center">
    <div class="w-full">
            <div class="p-4 mt-20">
                <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-[80vh] lg:py-0">
                    <div
                        class="w-full bg-white/70 rounded-lg shadow-xl dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                            <h1
                                class="text-xl font-bold leading-tight underline tracking-tight text-gray-900 md:text-2xl dark:text-white">
                                เข้าสู่ระบบบัญชีของคุณ
                            </h1>
                            <form class="space-y-4 md:space-y-6" action="/api/user/login" method="POST">
                                <div>
                                    <label for="stdId"
                                        class="block mb-2 text-sm font-bold text-gray-900 dark:text-white">รหัสประจำตัวนักเรียน</label>
                                    <input type="text" name="stdId" id="stdId"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="เลขประจำตัวนักเรียน 5 หลัก" required>
                                </div>
                                <div>
                                    <label class="dark:text-gray-200 font-bold" for="password">รหัสผ่าน</label>
                                    <div class="relative w-full">
                                        <div class="absolute inset-y-0 right-0 flex items-center px-2">
                                            <a id="password-toggle">
                                                <div class="flex-shrink hover:cursor-pointer pl-1 pr-2">
                                                    <i class="fa fa-solid fa-eye fa-fw fa-inverse"
                                                        id="password-toggle-btn" style="color: #aaa;"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <input type="password" name="password" id="password"
                                            placeholder="เลขประจำตัวประชาชน 13 หลัก"
                                            class="bg-gray-50 border mt-2 border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            required>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="remember" aria-describedby="remember" type="checkbox"
                                                class="w-4 h-4 border border-gray-300 rounded bg-black focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800">
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="remember"
                                                class="text-black font-semibold dark:text-gray-300">จำฉันไว้</label>
                                        </div>
                                    </div>
                                    <a href="/register.php"
                                        class="text-sm font-medium text-emerald-500 hover:underline dark:text-primary-500">ลืมรหัสผ่าน
                                        ?</a>
                                </div>
                                <button type="submit"
                                    class="w-full text-white shadow-md transition duration-200 bg-emerald-500 hover:bg-emerald-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-semibold rounded-lg text-md px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Log
                                    in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

