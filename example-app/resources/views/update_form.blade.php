<!DOCTYPE html>
<html>
    <body>

    {{$datalist}}
        <form action="/update_action" method="post">
        @csrf
            <h2>Update Member</h2>
           <input type="hidden" name="id" value="{{$datalist->id}}">
            <input type="text"  name="member_name" value="{{$datalist->members_name}}"></br>
            <input type="email"  name="email" value="{{$datalist->email}}"></br>
            <input type="text"  name="address" value="{{$datalist->address}}"></br>
           
            <input type="submit" name="submit" value="update">
        </form>
    </body>
</html>