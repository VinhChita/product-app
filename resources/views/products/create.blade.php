<x-layout>
    <h1>Add New Product</h1>

    <x-errors />
<form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
        <x-products.form />
    </form>
</x-layout>

