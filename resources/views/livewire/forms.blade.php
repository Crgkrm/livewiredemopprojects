<div>
<form wire:submit.prevent="submit">
    @if(session()->has('success'))
    <div style="color:green">{{session('success')}}</div>
    @endif
    Name:<br><input type="text" name="name" wire:model="name"/></br>
    @error('name')
    <span style="color:red">{{$message}}</span>
    @enderror
    Email:<br><input type="text" name="email" wire:model="email"/></br>
    @error('email')
    <span style="color:red">{{$message}}</span>
    @enderror
    <br>
    <button type="Submit">Save</button>

</form>
<br><br>
<table class="table table-boardered table-stiped">
<thead>
<tr>
<th>id</th>
<th>name</th>
<th>email</th>


</tr>



</thead>
<tbody>
@forelse($rgister as $record)
<tr>
<td>{{$record->id}}</td>
<td>{{$record->name}}</td>
<td>{{$record->email}}</td>


</tr>
@empty

@endforelse

</tbody>




</table>


</div>
