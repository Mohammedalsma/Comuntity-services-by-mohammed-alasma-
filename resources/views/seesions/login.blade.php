<x-layout>
<section >
<main >
    <h1 >fill the follwing to login</h1>
 
<form method="POST" action="/login" class="outline">
    @csrf
    
<div >
@error('email')
<p class="errortext">{{$message}}</p>
@enderror<label 
        for="email">
        email
</label>
</div>
<div>
<input 
type="email"
name="email"
id="email"
value="{{old('email')}}"
required>

    </div>
    <div >
<label 
        for="password">
        password
</label>
    </div>@error('password')
<p class="errortext">{{$message}}</p>
@enderror
    <div>
<input 
type="password"
name="password"
id="password"
required>

    </div>
    
    <div >
<button type="submit" class="sesson-button">
    Log in
</button>
</form>
  <br/>  
<a href="\signup" class="sesson-link">or sign up</a>
    </div>


</div>
</main>
    </section>
    </x-layout>