<x-layout-admin>
    <section class="text-gray-900 bg-gray-200">
        <div class="p-4">
            <h1 class="text-3xl">Add Product</h1>
        </div>
        <div class="px-3 py-4 flex justify-center">
            <form method="POST" action="/backOffice/addProduct" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Name:</label>
                    <input type="text" name="name" id="name" class="mt-1 p-2 w-full border rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                </div>
                <div class="mb-4">
                    <label for="price" class="block text-sm font-medium text-gray-700">Price (€):</label>
                    <input type="number" name="price" id="price" step="0.01" class="mt-1 p-2 w-full border rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-sm font-medium text-gray-700">Description:</label>
                    <textarea name="description" id="description" rows="4" class="mt-1 p-2 w-full border rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"></textarea>
                </div>
                <div class="mb-4">
                    <label for="img" class="block text-sm font-medium text-gray-700">Image:</label>
                    <input type="file" name="img" id="img" accept="image/*" class="mt-1 p-2 w-full border rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
                <button type="submit" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:bg-blue-700">Ajouter</button>
            </form>
        </div>
    </section>
</x-layout-admin>
