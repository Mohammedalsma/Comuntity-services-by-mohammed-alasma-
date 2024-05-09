<x-layout>
    <h1> {{$organization->org_name}} </h1>
    <h3>owner {{$organization->owner->name}}</h3>
    <h3>about</h3>
    <p>{{$organization->descrption}}</p>
    <h3>location {{$organization->location}}</h3>
    <h3>Phone {{$organization->owner->number}}</h3>

</x-layout>