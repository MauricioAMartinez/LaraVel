<h1>Lista de productos</h1>

<table>
    <thead>
        <th>id</th>
        <th>name</th>
        <th>image</th>
        <th>price</th>
        <th>description</th>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td> {{$product->id}} </td>
            <td> {{$product->name}} </td>
            <td>    
                <img  style="max-width: 100px" src="
             @if (count($product->images) > 0)
            {{$product->images[0]->url}}
            @else
            https://via.placeholder.com/200x200.png?text=no+hay+imagenes
            @endif
            " alt="">  </td>
            <td> {{$product->price}} </td>
            <td> {{$product->description}} </td>
        @endforeach

        </tr>
            
    </tbody>
</table>

