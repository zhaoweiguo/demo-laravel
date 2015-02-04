



   @foreach($users as $user)
        <tr>
           <td><input type="checkbox" class="checkboxes" value="1" /></td>
           <td> {{ $user['id']}} </td>
           <td> {{ $user['name'] }} </td>
           <td> {{ $user['mac'] }} </td>
           <td> {{ $user['imei'] }} </td>

           <td>
            @if ($user['status'] == 1)
              可用
            @else
              停用
            @endif
           </td>

           <td> {{ $user['created_at'] }} </td>
           <td> {{ $user['updated_at'] }} </td>
        </tr>
   <br />
    @endforeach



