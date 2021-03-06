<!DOCTYPE html>
<html>
    <body>

        <div>
        <form action="insert" method="post">
        @csrf
            <h2>Product Details</h2>
            <input type="text"  name="product" placeholder="product name"></br>
            <input type="text"  name="price" placeholder=" price"></br>
            <input type="text"  name="quantity" placeholder=" quantity"></br>
            <input type="submit" name="submit" value="Add">
        </form>
        </div>
    </body>
</html>