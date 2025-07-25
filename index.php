<!DOCTYPE html>
<!-- index.php -->
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบบันทึกข้อมูลตัวเลข V2</title>
    <!-- เรียกใช้งาน Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

    <div class="container mx-auto p-4 md:p-8 max-w-2xl">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">บันทึกข้อมูลตัวเลข</h1>

        <!-- ส่วนฟอร์มสำหรับเพิ่มรายการ -->
        <div id="entryForm" class="bg-white p-6 rounded-xl shadow-lg mb-6">
            <!-- เลือกประเภท 2 ตัว / 3 ตัว -->
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">ประเภท:</label>
                <div class="flex rounded-md shadow-sm" role="group">
                    <button type="button" id="btn2digit" class="px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-gray-200 rounded-l-lg hover:bg-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-500">
                        2 ตัว
                    </button>
                    <button type="button" id="btn3digit" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 focus:z-10 focus:ring-2 focus:ring-blue-500">
                        3 ตัว
                    </button>
                </div>
            </div>
            
            <!-- Input สำหรับกรอกเลขและราคา -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                <div>
                    <label for="numberInput" class="block text-gray-700 text-sm font-bold mb-2">ตัวเลข:</label>
                    <input type="text" id="numberInput" placeholder="เช่น 42" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="col-span-2">
                    <label for="priceInput" class="block text-gray-700 text-sm font-bold mb-2">ราคา:</label>
                    <input type="number" id="priceInput" placeholder="จำนวนเงิน" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
            </div>

            <!-- Checkbox ตัวเลือกต่างๆ -->
            <div class="flex flex-wrap items-center gap-4 mb-6">
                <label class="flex items-center">
                    <input type="checkbox" id="isTop" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                    <span class="ml-2 text-gray-700">บน</span>
                </label>
                <label class="flex items-center">
                    <input type="checkbox" id="isBottom" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                    <span class="ml-2 text-gray-700">ล่าง</span>
                </label>
                <label id="reverseOption" class="flex items-center">
                    <input type="checkbox" id="isReversed" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                    <span class="ml-2 text-gray-700">กลับเลข</span>
                </label>
            </div>

            <!-- ปุ่มเพิ่มรายการ -->
            <button id="addEntryBtn" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline transition-colors">
                เพิ่มรายการ
            </button>
        </div>

        <!-- ส่วนสรุปรายการทั้งหมด -->
        <div class="bg-white p-6 rounded-xl shadow-lg">
            <h2 class="text-xl font-bold text-gray-800 mb-4 border-b pb-2">รายการทั้งหมด</h2>
            <div id="entriesList" class="mb-4">
                <!-- รายการที่เพิ่มจะแสดงที่นี่ -->
                <p class="text-gray-500 text-center">ยังไม่มีรายการ</p>
            </div>
            <div class="flex justify-between items-center border-t pt-4">
                <span class="text-lg font-bold text-gray-700">ยอดรวม:</span>
                <span id="totalAmount" class="text-2xl font-bold text-green-600">0.00</span>
            </div>
            <button id="submitBtn" class="mt-6 w-full bg-green-500 hover:bg-green-700 text-white font-bold py-3 px-4 rounded-lg focus:outline-none focus:shadow-outline transition-colors disabled:bg-gray-400">
                ยืนยันและส่งข้อมูล
            </button>
            <div id="responseMessage" class="mt-4 text-center font-bold"></div>
        </div>
    </div>

    <script src="app.js"></script>
</body>
</html>