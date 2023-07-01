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
                        <div class="p-6 space-y-4 md:space-y-2 sm:p-8">
                            <a href="./" class="hover:font-bold">< กลับ</a>
                            <h1
                                class="text-xl font-bold leading-tight underline tracking-tight text-gray-900 md:text-2xl dark:text-white">
                                เพิ่มหนังสือ
                            </h1>
                            <form class="space-y-4 md:space-y-2" action="/api/user/login" method="POST">
                                <div>
                                    <label for="stdId"
                                        class="block mb-2 text-sm font-bold text-gray-900 dark:text-white">ชื่อ</label>
                                    <input type="text" name="stdId" id="stdId"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="ชื่อหนังสือ" required>
                                </div>
                                <div>
                                    <label class="dark:text-gray-200 font-bold" for="prefix">หมวด</label>
                                    <select name="prefix" id="prefix" required class="block bg-gray-50 w-full px-2 py-2 mt-2 text-gray-700  border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                                        <option disabled selected value="">-- โปรดเลือกหมวดของหนังสือ --</option>
                                        <option value="000">000 เบ็ดเตล็ด ความรู้ทั่วไป</option>
                                        <option value="100">100 ปรัชญา จิตวิทยา</option>
                                        <option value="200">200 ศาสนา</option>
                                        <option value="300">300 สังคมศาสตร์</option>
                                        <option value="400">400 ภาษาศาสตร์</option>
                                        <option value="500">500 วิทยาศาสตร์</option>
                                        <option value="600">600 วิทยาศาสตร์ประยุกต์และเทคโนโลยี</option>
                                        <option value="700">700 ศิลปะและนันทนาการ</option>
                                        <option value="800">800 วรรณคดี</option>
                                        <option value="900">900 ประวัติศาสตร์ ภูมิศาสตร์ และ ชีวประวัติ </option>
                                    </select>
                                </div>
                                <div>
                                    <label for="detail"
                                        class="block mb-2 text-sm font-bold text-gray-900 dark:text-white">รายละเอียด</label>
                                        <textarea id="detail" name="detail" rows="4" class="block p-2.5 mt-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="รายละเอียดหนังสือ (ไม่บังคับกรอก)"></textarea>
                                </div>
                                <div class="my-3">
                                    <label class="block mb-2 text-sm font-bold text-gray-900 dark:text-white" for="file_input">ภาพปกหนังสือ</label>
                                    <input accept="image/*" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-sm cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                                </div>
                                <button type="submit"
                                    class="w-full text-white mt-2 shadow-md transition duration-200 bg-emerald-500 hover:bg-emerald-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-semibold rounded-lg text-md px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">เพิ่มหนังสือ</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

