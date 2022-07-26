<div class="table-responsive">
    <table class="table" id="products-table">
        <thead>
        <tr>
        <th>Category</th>
        <th>Size</th>
        <th>Color</th>
        <th>Gender</th>
        <th>Brand</th>
        <th>Sku</th>
        <th>Title</th>
        <th>Description</th>
        <th>Price</th>
        <th>Stock</th>
        <th>State</th>
        <th>Image</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
            <td>{{ $product->idCategory->title }}</td>
            <td>{{ $product->idSize->title }}</td>
            <td>{{ $product->idColor->title }}</td>
            <td>{{ $product->id_gender }}</td>
            <td>{{ $product->idBrand->title }}</td>
            <td>{{ $product->sku }}</td>
            <td>{{ $product->title }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->stock }}</td>
            <td>{{ $product->state }}</td>
            <td>{{ $product->image }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('products.show', [$product->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>

                        <a href="{{ route('products.edit', [$product->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
