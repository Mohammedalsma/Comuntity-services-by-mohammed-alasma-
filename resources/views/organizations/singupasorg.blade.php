<x-layout>
<section class="px-6 py-8">
<main >
    <h1 >Enter your infromation </h1>
<form method="POST" action="/singupasorg" class="outline">
    @csrf

        <x-signupform />
 <div>
    the following is infromation about your org 
 </div>
 <div>
 <label 
        for="org_name">
    Name
</label>   <div>
   @error('org_name')
<p class="errortext">{{ $message }}</p>
@enderror
   </div>
   <div>
<input 
type="text"
name="org_name"
id="org_name"
value="{{old('org_name')}}"
required>

</div>
<div>
 <label 
        for="location">
    location
</label>   <div>
   @error('location')
<p class="errortext">{{ $message }}</p>
@enderror
   </div>
   <div>
<input 
type="text"
name="location"
id="location"
value="{{old('location')}}"
required>

</div>
<div>
 <label 
        for="descrption">
 descrption
</label>   <div>
   @error('descrption')
<p class="errortext">{{ $message }}</p>
@enderror
   </div>
   <div>
<input 
type="text"
name="descrption"
id="descrption"
value="{{old('descrption')}}"
required>

</div>
   <div >
<button type="submit" class="sesson-button">
    submit
</button>
    </div>
</form>

</main>
    </section>
    </x-layout>