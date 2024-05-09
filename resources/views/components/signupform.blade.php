<label 
        for="name">
    Name
</label>   <div>
   @error('name')
<p class="errortext">{{ $message }}</p>
@enderror
   </div>
   <div>
<input 
type="text"
name="name"
id="name"
value="{{old('name')}}"
required>

</div>
<div>
<label 
        for="email">
        email
</label>
@error('email')
<p class="errortext">{{$message}}</p>
@enderror
</div>
<input 
type="email"
name="email"
id="email"
value="{{old('email')}}"
required>

    </div>
    <div>
<label 
        for="password">
        password
</label>
@error('password')
<p class="errortext">{{$message}}</p>
@enderror
</div>
<div>
<input 
type="password"
name="password"
id="password"
required>

    </div>
    <div>
    
<label 
        for="birthday">
        birthday
</label>
    </div>
    <div>
<input 
type="date"
name="birthday"
id="birthday"
value="{{old('birthday')}}"
required>
    </div>
    <div>

<label 
        for="number">
        number
</label> 
   @error('number')
<p class="errortext">{{$message}}</p>
@enderror
    </div>
    <div>
<input 
type="text"
name="number"
id="number"
value="{{old('number')}}"
required>
   
   </div> 