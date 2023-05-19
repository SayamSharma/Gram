<form action="{{ route('category.create')}}" method="post">
@csrf
<br>
<input type="text" name="name" id="name" placeholder="name">
<br>
<select name="parent" id="parent" aria-placeholder="Select Parent">
    <option value="">Not a child</option>
    @foreach ($parent as $item)
    <option value="{{ $item->p_id }}">{{ $item->name}}</option>    
    @endforeach
    
    
</select>
<br>
<input type="submit" value="submit">
</form>