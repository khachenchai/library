<?php
    include "./includes/head.php";
    include "./includes/navbar.php";
    ?>

    <div class="mt-20 flex justify-center">
    <div class="w-full">
            <div class="container p-4 mx-auto md:mt-10 lg:mt-0 md:h-[60vh] lg:py-0">
                <!-- component -->
                <section class="max-w-4xl my-10 p-8 mx-auto  bg-white/70 rounded-md shadow-lg dark:bg-gray-800 ">
                    <div class="flex gap-4 items-baseline">
                        <h1
                            class="text-xl font-bold pb-2 leading-tight underline tracking-tight text-gray-900 md:text-2xl dark:text-white">
                            ลงชื่อเข้าใช้บัญชีของคุณ</h1>
                    </div>
                    <form>
                        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                            <div>
                                <label class="dark:text-gray-200 font-bold" for="prefix">คำนำหน้าชื่อ</label>
                                <select name="prefix" id="prefix" required class="block bg-gray-50 w-full px-2 py-2 mt-2 text-gray-700  border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                                    <option disabled selected value="">-- โปรดเลือกคำนำหน้า --</option>
                                    <option value="ด.ช.">ด.ช.</option>
                                    <option value="ด.ญ.">ด.ญ.</option>
                                    <option value="นาย">นาย</option>
                                    <option value="น.ส.">น.ส.</option>
                                    <option value="other">อื่น ๆ</option>
                                </select>
                            </div>
                            <div>
                                <label class="dark:text-gray-200 font-bold" for="firstname">ชื่อ</label>
                                <input type="text" name="firstname" id="firstname" placeholder="สมชาย" class="bg-gray-50 border mt-2 border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required>
                            </div>

                            <div>
                                <label class="dark:text-gray-200 font-bold" for="lastname">นามสกุล</label>
                                <input type="text" name="lastname" id="lastname" placeholder="ใจดี" class="bg-gray-50 border mt-2 border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required>
                            </div>

                            <div>
                                <label class="dark:text-gray-200 font-bold" for="email">อีเมล</label>
                                <input type="email" name="email" id="email" placeholder="โปรดกรอกอีเมลที่ท่านใช้งานจริง"
                                    class="bg-gray-50 border mt-2 border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required>
                            </div>

                            <div>
                                <label class="dark:text-gray-200 font-bold" for="password">รหัสผ่าน</label>
                                <div class="relative w-full">
                                    <div class="absolute inset-y-0 right-0 flex items-center px-2">
                                        <a id="password-toggle">
                                            <div class="flex-shrink hover:cursor-pointer pl-1 pr-2">
                                                <i class="fa fa-solid fa-eye fa-fw fa-inverse" id="password-toggle-btn"
                                                    style="color: #aaa;"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <input type="password" name="password" id="password"
                                        placeholder="รหัสผ่าน 8 - 16 ตัว"
                                        class="bg-gray-50 border mt-2 border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        required>
                                </div>
                            </div>

                            <div>
                                <label class="dark:text-gray-200 font-bold" for="check_password">ยืนยันรหัสผ่าน</label>
                                <div class="relative w-full">
                                    <div class="absolute inset-y-0 right-0 flex items-center px-2">
                                        <a id="recheck-password-toggle">
                                            <div class="flex-shrink hover:cursor-pointer pl-1 pr-2">
                                                <i class="fa fa-solid fa-eye fa-fw fa-inverse" id="recheck-toggle-btn"
                                                    style="color: #aaa;"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <input type="password" name="check_password" id="check_password"
                                        placeholder="ยืนยันรหัสผ่าน" class="bg-gray-50 border mt-2 border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        required>
                                </div>
                            </div>

                            <div>
                                <div class="flex items-center mt-2 justify-between">
                                    <div class="flex items-center">
                                    </div>
                                    <a href="/login.php"
                                        class="text-sm font-medium text-emerald-700 hover:underline dark:text-primary-500">มีบัญชีแล้ว
                                        ?</a>
                                </div>

                            </div>

                            <div>
                                <div class="p-2 mt-2">
                                    <button type="submit"
                                        class="w-full text-white shadow-md transition duration-200 bg-emerald-500 hover:bg-emerald-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-semibold rounded-lg text-md p-2 text-center text-lg dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">ลงชื่อเข้าใช้</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</body>

</html>

