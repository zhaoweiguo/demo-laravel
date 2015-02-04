



   @foreach($users as $user)
        <tr>
           <td><input type="checkbox" class="checkboxes" value="1" /></td>
           <td> {{ $user['id']}} </td>
           <td> {{ $user['name'] }} </td>
           <td> {{ $user['mac'] }} </td>
           <td> {{ $user['imei'] }} </td>
           <td> {{ $user['status'] }} </td>
           <td> {{ $user['created_at'] }} </td>
           <td> {{ $user['updated_at'] }} </td>
        </tr>
    @endforeach



