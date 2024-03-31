<x-layout>
<p><a href="\createact">click here to create new Activate</a></p>
@foreach($activates as $activate)
----------------------------------------------------
<h1>{{$activate->name}}</h1>
<h3>category: {{$activate->type_of_work}}</h3>
<p>about {{$activate->descrption}}</p>
<p><a href="\activate\{{$activate->id}}">click here to view more info about the Activate</a></p>
<p><a href="\deleteact\{{$activate->id}}">click here to delete the Activate</a></p>
@endforeach
</x-layout>