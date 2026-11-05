<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายการงาน - สมเกียรติ จันทะแสง</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-50 text-slate-700 min-h-screen">

    <nav class="bg-indigo-300 text-slate-800 p-4 shadow-sm">
        <div class="max-w-4xl mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold text-indigo-900">Somkiat.Dev</h1>
            <div class="space-x-4">
                <a href="index.php" class="hover:text-indigo-900 transition">โฮมเพจ (Home)</a>
                <a href="bio.php" class="hover:text-indigo-900 transition">ประวัติ (Bio)</a>
                <a href="assignment.php" class="font-bold underline text-indigo-900">รายการงาน (Assignment)</a>
            </div>
        </div>
    </nav>

    <main class="py-12 pb-24">
        <div class="max-w-3xl mx-auto px-4">
            <h2 class="text-2xl font-bold text-center text-indigo-400 mb-6">รายการงาน (Assignment)</h2>
            
            <div class="space-y-4">
                <div class="bg-purple-100 p-5 rounded-2xl border border-purple-200 shadow-sm">
                    <h3 class="text-lg font-bold text-purple-900">Assignment 01</h3>
                    <p class="text-purple-700">รายละเอียดงานชิ้นที่ 1</p>
                </div>

                <div class="bg-teal-100 p-5 rounded-2xl border border-teal-200 shadow-sm">
                    <h3 class="text-lg font-bold text-teal-900">Assignment 02</h3>
                    <p class="text-teal-700">รายละเอียดงานชิ้นที่ 2</p>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-sky-200 text-sky-900 text-center py-4 text-sm fixed bottom-0 w-full">
        &copy; <?php echo date("Y"); ?> Somkiat Chanthasang
    </footer>

</body>
</html>