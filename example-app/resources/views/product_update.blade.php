<!DOCTYPE html>
<html>
    <body>

    {{$row}}
        <form action="/proupdate_action" method="post">
        @csrf
            <h2>Update Member</h2>
           <input type="hidden" name="id" value="{{$row->id}}">
            <input type="text"  name="product" value="{{$row->product}}"></br>
            <input type="text"  name="price" value="{{$row->price}}"></br>
            <input type="text"  name="quantity" value="{{$row->quantity}}"></br>
            <input type="submit" name="submit" value="update">
        </form>
    </body>
</html>