<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ประวัติส่วนตัว - สมเกียรติ จันทะแสง</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-50 text-slate-700 min-h-screen">

    <nav class="bg-indigo-300 text-slate-800 p-4 shadow-sm">
        <div class="max-w-4xl mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold text-indigo-900">Somkiat.Dev</h1>
            <div class="space-x-4">
                <a href="index.php" class="hover:text-indigo-900 transition">โฮมเพจ (Home)</a>
                <a href="bio.php" class="font-bold underline text-indigo-900">ประวัติ (Bio)</a>
                <a href="assignment.php" class="hover:text-indigo-900 transition">รายการงาน (Assignment)</a>
            </div>
        </div>
    </nav>

    <main class="py-12 pb-24">
        <div class="max-w-3xl mx-auto px-4">
            <h2 class="text-2xl font-bold text-center text-indigo-400 mb-6">ประวัติส่วนตัว (Bio)</h2>
            
            <div class="bg-white p-6 rounded-2xl border border-indigo-100 shadow-sm space-y-3">
                <p class="text-xl font-bold text-indigo-500">นายสมเกียรติ จันทะแสง (Somkiat Chanthasang)</p>
                <hr class="border-purple-100 my-2">
                <p><strong>มหาวิทยาลัย:</strong> มหาวิทยาลัยราชภัฏรำไพพรรณี</p>
                <p><strong>คณะ:</strong> วิทยาการคอมพิวเตอร์และเทคโนโลยีสารสนเทศ</p>
                <p><strong>สาขา:</strong> เทคโนโลยีสารสนเทศ</p>
                <hr class="border-purple-100 my-2">
                <p><strong>อายุ:</strong> 20 ปี</p>
                <p><strong>ส่วนสูง:</strong> 182 ซม.</p>
                <p><strong>น้ำหนัก:</strong> 79 กก.</p>
            </div>
        </div>
    </main>

    <footer class="bg-sky-200 text-sky-900 text-center py-4 text-sm fixed bottom-0 w-full">
        &copy; <?php echo date("Y"); ?> Somkiat Chanthasang
    </footer>

</body>
</html>