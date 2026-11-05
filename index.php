<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หน้าแรก - สมเกียรติ จันทะแสง</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-50 text-slate-700 min-h-screen">

    <nav class="bg-indigo-300 text-slate-800 p-4 shadow-sm">
        <div class="max-w-4xl mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold text-indigo-900">Somkiat.Dev</h1>
            <div class="space-x-4">
                <a href="index.php" class="font-bold underline text-indigo-900">โฮมเพจ (Home)</a>
                <a href="bio.php" class="hover:text-indigo-900 transition">ประวัติ (Bio)</a>
                <a href="assignment.php" class="hover:text-indigo-900 transition">รายการงาน (Assignment)</a>
            </div>
        </div>
    </nav>

    <main class="py-20 text-center">
        <div class="max-w-2xl mx-auto px-4">
            <h1 class="text-4xl font-bold text-indigo-400 mb-4">ยินดีต้อนรับสู่เว็บไซต์ส่วนตัว</h1>
            <p class="text-lg text-slate-600 mb-6">พื้นที่รวบรวมประวัติและผลงานการเรียน สาขาเทคโนโลยีสารสนเทศ</p>
            <a href="bio.php" class="bg-purple-300 text-purple-900 px-6 py-2.5 rounded-xl font-medium shadow-sm hover:bg-purple-400 transition">ดูประวัติส่วนตัว</a>
        </div>
    </main>

    <footer class="bg-sky-200 text-sky-900 text-center py-4 text-sm fixed bottom-0 w-full">
        &copy; <?php echo date("Y"); ?> Somkiat Chanthasang
    </footer>

</body>
</html>