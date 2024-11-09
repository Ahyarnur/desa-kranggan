<x-app-layout>
    <body class="bg-gray-100">
    <div class="container max-w-7xl mx-auto sm:px-6 lg:px-8 px-2 pb-96">
            <!-- Header -->
            <div class="bg-white p-6 rounded-lg shadow-md mb-8 mt-14">
                <h1 class="text-2xl font-bold">Admin Panel - Kelola Berita</h1>
            </div>
            
        
            <div class="container mx-auto mt-8 px-4">
                <!-- Form Tambah/Edit Berita -->
                <div class="bg-white p-6 rounded-lg shadow-md mb-8">
                    <h2 class="text-xl font-semibold mb-4" id="form-title">Tambah Berita</h2>
                    <form id="news-form">
                        <input type="hidden" id="news-id">
                        
                        <div class="mb-4">
                            <label class="block text-gray-700">Judul Berita:</label>
                            <input type="text" id="title" class="w-full px-4 py-2 border rounded-md" placeholder="Masukkan judul berita" required>
                        </div>
                        
                        <div class="mb-4">
                            <label class="block text-gray-700">Konten Berita:</label>
                            <textarea id="content" class="w-full px-4 py-2 border rounded-md" placeholder="Masukkan konten berita" rows="5" required></textarea>
                        </div>
                        
                        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700" id="save-button">Simpan</button>
                        <button type="button" onclick="resetForm()" class="bg-gray-600 text-white px-4 py-2 rounded-md hover:bg-gray-700 ml-2">Batal</button>
                    </form>
                </div>
        
                <!-- Tabel Daftar Berita -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold mb-4">Daftar Berita</h2>
                    <table class="min-w-full bg-white">
                        <thead>
                            <tr>
                                <th class="py-2 px-4 bg-gray-200 text-left">No</th>
                                <th class="py-2 px-4 bg-gray-200 text-left">Judul</th>
                                <th class="py-2 px-4 bg-gray-200 text-left">Konten</th>
                                <th class="py-2 px-4 bg-gray-200 text-left">Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="news-table-body">
                            <!-- Data berita akan diisi secara dinamis oleh JavaScript -->
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
            {{-- <script>
                let newsList = [];
                let editingIndex = null;
        
                const form = document.getElementById("news-form");
                const newsTableBody = document.getElementById("news-table-body");
                const formTitle = document.getElementById("form-title");
                const saveButton = document.getElementById("save-button");
        
                form.addEventListener("submit", (e) => {
                    e.preventDefault();
                    const title = document.getElementById("title").value;
                    const content = document.getElementById("content").value;
        
                    if (editingIndex !== null) {
                        // Update berita yang sedang diedit
                        newsList[editingIndex] = { title, content };
                        editingIndex = null;
                        formTitle.innerText = "Tambah Berita";
                        saveButton.innerText = "Simpan";
                    } else {
                        // Tambah berita baru
                        newsList.push({ title, content });
                    }
        
                    resetForm();
                    renderTable();
                });
        
                // Fungsi untuk menampilkan berita di tabel
                function renderTable() {
                    newsTableBody.innerHTML = "";
                    newsList.forEach((news, index) => {
                        const row = document.createElement("tr");
        
                        row.innerHTML = `
                            <td class="py-2 px-4">${index + 1}</td>
                            <td class="py-2 px-4">${news.title}</td>
                            <td class="py-2 px-4">${news.content}</td>
                            <td class="py-2 px-4">
                                <button onclick="editNews(${index})" class="text-blue-600 hover:text-blue-800">Edit</button> |
                                <button onclick="deleteNews(${index})" class="text-red-600 hover:text-red-800">Hapus</button>
                            </td>
                        `;
                        newsTableBody.appendChild(row);
                    });
                }
        
                // Fungsi untuk mengedit berita
                function editNews(index) {
                    editingIndex = index;
                    const news = newsList[index];
                    document.getElementById("title").value = news.title;
                    document.getElementById("content").value = news.content;
                    formTitle.innerText = "Edit Berita";
                    saveButton.innerText = "Perbarui";
                }
        
                // Fungsi untuk menghapus berita
                function deleteNews(index) {
                    newsList.splice(index, 1);
                    renderTable();
                }
        
                // Fungsi untuk mereset form
                function resetForm() {
                    form.reset();
                    editingIndex = null;
                    formTitle.innerText = "Tambah Berita";
                    saveButton.innerText = "Simpan";
                }
            </script> --}}

            </body>
</x-app-layout>


