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
        <td>Name</td>
        <td>email</td>
        <td>address</td>
        <td colspan="2">Action</td>
    </tr>
    @foreach($datalist as $user)
        <tr><td>{{$user->members_name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->address}}</td>
        <td><a href={{"delete/".$user->id}}>Delete</a></td>
        <td><a href={{"update/".$user->id}}>Update</a></td></tr>
    @endforeach
        </table>
   <a href="mem">Add</a>
    </body>
</html>