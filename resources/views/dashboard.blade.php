<x-app-layout>
    <div class="container max-w-7xl mx-auto sm:px-6 lg:px-8 px-2 pb-96">
        <h2 class="my-4">Manage News</h2>
    
        <!-- Button to Add New News -->
        <button class="bg-blue-500 px-10 py-2 rounded-md font-semibold">Add New News</button>
    
        <!-- Table to Display News List -->
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Contoh Data -->
                <tr>
                    <td>Sample News Title</td>
                    <td>Sample news content goes here. This is a brief description...</td>
                    <td>
                        <a href="" class="btn btn-warning btn-sm">Edit</a>
                        <button class="btn btn-danger btn-sm" onclick="confirm('Are you sure you want to delete this news?')">Delete</button>
                    </td>
                </tr>
                <!-- Tambahkan data berita di sini -->
            </tbody>
        </table>
    </div>
</x-app-layout>


