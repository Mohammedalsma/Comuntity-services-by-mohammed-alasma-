<x-layout>

    <h1 >fill the follwing to create an new activate</h1>
<form method="POST" action="/createact/" class="outline"  enctype="multipart/form-data">
    @csrf
    <div >
        <label 
        for="name">
    Name
</div>
<div>
</label>
<input
type="text"
name="name"
id="name"
required>
    </div>
<div >
<label
        for="location">
    location
</label>
</div>
<div>
<input 
type="text"
name="location"
id="location"
required>
    </div>
    <div >
        <div>
    <label>the activate fill under dontion or vaulter work </label>
        </div>
<input type="radio" id="dontion" name="type_of_work" value="dontion">
<label for="dontion">dontion</label><br>
<input type="radio" id="vaulter" name="type_of_work" value="vaulter">
<label for="vaulter">vaulter</label><br>
    </div>
    
    <div >
<label 
        for="category">
        category
</label>
</div>
<div>
<input 
type="text"
name="category"
id="category"
required>
    </div>
    <div >
<label 
        for="descrption">
        descrption
</label>
</div>
<div>
<input 
type="text"
name="descrption"
id="descrption"
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
value="{{old('activates_start_at')}}"
required>
    </div>
    
    <div >
    <input type="file" name="photo"  id="photo">
<button type="submit" class="sesson-button">
    submit
</button>
    </div>
</form>
    </x-layout>