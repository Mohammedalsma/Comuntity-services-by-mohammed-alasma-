@props(['activate'])
<h1>{{$activate->name}}</h1>
<h3> the activate avablie in this loaction: {{$activate->location}}</h3>
<h3>category: {{$activate->type_of_work}}</h3>
<p>about {{$activate->descrption}}</p>
<p>the organization bhined the good work: {{$activate->organization->name}}</p>
<p>number {{$activate->organization->phone}}</p>
<p><a href="\login">click here to voulnter</a></p>