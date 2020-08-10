<!DOCTYPE html>
<html>
<div class="row">
    <div class="col-md-12">
        <br/>
        <h3 align="center">Profile Data</h3>
        <br/>
        
        <form action="/profile" method="post">
        @csrf
        <table class="table table-bordered" border="5" width="50%">
            <tr><th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Birthday</th>
                <th>Address</th>
                <th>Phone</th>
            </tr>
            @foreach($userdata as $row)
            <tr><td>{{$row['id']}}</td>
                <td>{{$row['name']}}</td>
                <td>{{$row['email']}}</td>
                <td>{{$row['age']}}</td>
                <td>{{$row['birthday']}}</td>
                <td>{{$row['address']}}</td>
                <td>{{$row['phone']}}</td>
               
            </tr>
            @endforeach
        </table>
        </form>
    </div>
</div>
</html>

