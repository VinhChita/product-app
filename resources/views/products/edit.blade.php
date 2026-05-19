<x-layout>
    <h1>Edit Product</h1>
    <hr>
    <a href="{{ route('products.index') }}" class="btn btn-primary"><i class="fa-brands fa-product-hunt"></i> Product List</a>
    <x-errors />
    <form action="{{ route('products.update', $product) }}" method="post" enctype="multipart/form-data">
        @method('PATCH')
        <x-products.form :product="$product" />
    </form>
</x-layout>