<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Katalog Buku</title>
</head>
<body>
<h1>Katalog Buku</h1>

<div id="daftarBuku">
    <h2>Daftar Buku:</h2>
    <ol id="listBuku"></ol>
</div>

<script>
    // Array katalog buku
    var catalog = [
        {
            judul: "Harry Potter and the Philosopher's Stone",
            pengarang: "J.K. Rowling",
            tahunTerbit: 1997,
             gambar: "img/harry_potter.jpg"
        },
        {
            judul: "To Kill a Mockingbird",
            pengarang: "Harper Lee",
            tahunTerbit: 1960,
            gambar: "img/to_kill_a_mockingbird.jpg"
        }
        
    ];

    // Fungsi untuk menampilkan semua buku dalam katalog
    function tampilkanSemuaBuku() {
        var listBuku = document.getElementById("listBuku");
        listBuku.innerHTML = ""; // Kosongkan daftar buku sebelum menampilkan yang baru

        for (var i = 0; i < catalog.length; i++) {
            var listItem = document.createElement("li");

            // Menambahkan gambar buku
            var img = document.createElement("img");
            img.src = catalog[i].gambar;
            img.alt = catalog[i].judul;
            img.style.width = "100px"; // Atur lebar gambar
            listItem.appendChild(img);

            // Menambahkan informasi buku
            var infoBuku = document.createElement("span");
            infoBuku.textContent = " Judul: " + catalog[i].judul + ", Pengarang: " + catalog[i].pengarang + ", Tahun Terbit: " + catalog[i].tahunTerbit;
            listItem.appendChild(infoBuku);

            listBuku.appendChild(listItem);
        }
    }

    // Panggil fungsi untuk menampilkan semua buku saat halaman dimuat
    tampilkanSemuaBuku();
</script>

</body>
</html>