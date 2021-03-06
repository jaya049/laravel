

 <!DOCTYPE html>
<html>
<style>
    td,table,th{
        border:1px solid;
        
    }
</style>
    <body>
        <table>
    <tr>
        <td>Product Name</td>
        <td>Price</td>
        <td>Quantity</td>
        <td>Action</td>
    </tr>
    @foreach($row as $prod)
        <tr>
        <td>{{$prod->product}}</td>
        <td>{{$prod->price}}</td>
        <td>{{$prod->quantity}}</td>
        <td><a href={{"prodelete/".$prod->id}}>Delete</a>|<a href={{"product_update/".$prod->id}}>Update</a></td>
        </tr>
    @endforeach
        </table>
   
    </body>
</html> 
