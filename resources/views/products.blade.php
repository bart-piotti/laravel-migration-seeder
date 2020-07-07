<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Prodotti</title>
    </head>
    <body>
        <table style="width:60%; margin: auto;">
          <tr>
            <th>Product Code</th>
            <th>Brand</th>
            <th>Seller name</th>
            <th>Seller lastname</th>
            <th>Price</th>
          </tr>
          @foreach ($data as $prodotto)
          <tr>
            <td>{{$prodotto->product_code}}</td>
            <td>{{$prodotto->brand}}</td>
            <td>{{$prodotto->seller_name}}</td>
            <td>{{$prodotto->seller_lastname}}</td>
            <td>{{$prodotto->price . '$'}}</td>
          </tr>
          @endforeach
        </table>
    </body>
</html>
