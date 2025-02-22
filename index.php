<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Soal JavaScript</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-xl font-bold mb-4">Latihan Soal - Dasar-Dasar JavaScript</h2>
        
        <div id="quiz"></div>
        
        <button onclick="checkAnswers()" class="bg-blue-500 text-white px-4 py-2 mt-4 rounded">Cek Jawaban</button>
        <p id="result" class="mt-4 font-bold"></p>
    </div>

    <script>
        const questions = [
            { q: "Apa perbedaan utama antara var, let, dan const dalam JavaScript?", a: "var dapat dideklarasikan ulang dan memiliki scope function, let memiliki scope block, const bersifat tetap dan tidak dapat diubah." },
            { q: "Apa output dari kode berikut?\nvar x = 10; let y = 5; const z = 20; x = 15; y = 10; z = 25; console.log(x, y, z);", a: "Error karena z tidak dapat diubah." },
            { q: "Perbaiki kode di atas agar tidak terjadi error!", a: "var x = 10; let y = 5; const z = 20; x = 15; y = 10; console.log(x, y, z);" },
            { q: "Tentukan tipe data dari masing-masing variabel berikut: let a = 'Hello'; let b = 42; let c = true; let d = [1, 2, 3]; let e = { name: 'Alice', age: 25 };", a: "String, Number, Boolean, Array, Object" },
            { q: "Buatlah sebuah array yang berisi 5 nama buah dan tampilkan elemen ketiga!", a: "let buah = ['Apel', 'Jeruk', 'Mangga', 'Pisang', 'Durian']; console.log(buah[2]);" },
            { q: "Buatlah sebuah object yang berisi informasi nama, umur, dan pekerjaan seseorang, lalu tampilkan nilai dari properti nama.", a: "let orang = {nama: 'Budi', umur: 25, pekerjaan: 'Programmer'}; console.log(orang.nama);" },
            { q: "Apa hasil dari operasi berikut? console.log(10 + '5'); console.log(10 - '5'); console.log(10 === '10'); console.log(10 == '10'); console.log(true && false); console.log(true || false); console.log(!true);", a: "105, 5, false, true, false, true, false" },
            { q: "Buat kode yang menggunakan operator perbandingan untuk mengecek apakah sebuah angka lebih besar dari 100 dan lebih kecil dari 500!", a: "let num = 200; console.log(num > 100 && num < 500);" },
            { q: "Buat program if-else untuk menentukan apakah sebuah angka ganjil atau genap.", a: "let num = 10; if (num % 2 === 0) { console.log('Genap'); } else { console.log('Ganjil'); }" },
            { q: "Gunakan switch-case untuk mencetak nama hari berdasarkan nomor (1 = Senin, 2 = Selasa, ... 7 = Minggu).", a: "let hari = 3; switch(hari) { case 1: console.log('Senin'); break; case 2: console.log('Selasa'); break; case 3: console.log('Rabu'); break; case 4: console.log('Kamis'); break; case 5: console.log('Jumat'); break; case 6: console.log('Sabtu'); break; case 7: console.log('Minggu'); break; default: console.log('Hari tidak valid'); }" },
            { q: "Gunakan for loop untuk mencetak angka dari 1 hingga 10.", a: "for(let i = 1; i <= 10; i++) { console.log(i); }" },
            { q: "Gunakan while loop untuk mencetak angka dari 10 hingga 1.", a: "let i = 10; while(i >= 1) { console.log(i); i--; }" },
            { q: "Gunakan do-while loop untuk mencetak angka dari 1 hingga 5.", a: "let i = 1; do { console.log(i); i++; } while(i <= 5);" }
        ];
        
        function loadQuiz() {
            const quizDiv = document.getElementById("quiz");
            questions.forEach((item, index) => {
                quizDiv.innerHTML += `
                    <div class='mb-4'>
                        <p class='font-semibold'>${index + 1}. ${item.q}</p>
                        <textarea id='ans${index}' class='w-full border p-2 rounded'></textarea>
                        <p id='ans${index}Correct' class='hidden text-green-600 mt-2 font-semibold'>Jawaban Benar: ${item.a}</p>
                    </div>
                `;
            });
        }
        
        function checkAnswers() {
            questions.forEach((_, index) => {
                document.getElementById(`ans${index}Correct`).classList.remove("hidden");

            });
        }
        
        loadQuiz();
    </script>
</body>
</html>
