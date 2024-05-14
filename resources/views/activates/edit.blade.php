<x-layout>
<h1 >edit the activate</h1>
<form method="POST" action="/update/{{$activate->name}}" class="outline"  enctype="multipart/form-data">
    @csrf
    <div >
        <label 
        for="name">
    Name
    @error('name')
<p class="errortext">{{$message}}</p>
@enderror
    
</label>
</div>
<div>

<input
type="text"
name="name"
id="name"
value="{{$activate->name}}"
required>
    </div>
<div >
<label
        for="location">
    location
    @error('location')
<p class="errortext">{{$message}}</p>
@enderror
</label>
</div>
<div>
<input 
type="text"
name="location"
id="location"
value="{{$activate->location}}"
required>
    </div>
    <div >
        <div>
    <label>the activate fill under dontion or vaulter work </label>
        </div>
        @if ($activate->type_of_work == 'dontion')
<input type="radio" id="dontion" name="type_of_work" value="dontion" checked>
<label for="dontion">dontion</label><br>
<input type="radio" id="vaulter" name="type_of_work" value="vaulter">
<label for="vaulter">vaulter</label><br>
@elseif($activate->type_of_work == 'vaulter')
<input type="radio" id="dontion" name="type_of_work" value="dontion" >
<label for="dontion">dontion</label><br>
<input type="radio" id="vaulter" name="type_of_work" value="vaulter" checked>
<label for="vaulter">vaulter</label><br>
@endif
    </div>
    
    <div >
<label 
        for="category">
        category
        @error('category')
<p class="errortext">{{$message}}</p>
@enderror
</label>
</div>
<div>
<input 
type="text"
name="category"
id="category"
value="{{$activate->category}}"
required>
    </div>
    <div >
<label 
        for="descrption">
        descrption
        @error('descrption')
<p class="errortext">{{$message}}</p>
@enderror
</label>
</div>
<div>
<input 
type="text"
name="descrption"
id="descrption"
value="{{$activate->descrption}}"
required>
    </div>
    <label 
        for="activates_start_at">
        activates_start_at
</label>
    </div>
    <div>
<input 
type="date"
name="activates_start_at"
id="activates_start_at"
value="{{$activate->activates_start_at}}"
required>
    </div>
    
    <div >
    <input type="file" name="photo"  required id="photo" value="{{$activate->photo}}">
<button type="submit" class="sesson-button">
    submit
</button>
    </div>
</form>
</x-layout>