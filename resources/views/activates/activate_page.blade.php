
<x-layout>

<h1>{{$activate->name}}</h1>
@if ($activate->photo != null)
<img src="{{ asset($activate->photo)}}" class ="activateimage">
@endif
<h3> the activate avablie in this loaction: {{$activate->location}}</h3>
<h3>activates start at: <time>{{\Carbon\Carbon::parse($activate->activates_start_at)->diffForHumans()}}</time></h3>
<h3>type of work: {{$activate->type_of_work}}</h3>
<h3>category: {{$activate->category}}</h3>
<p>about {{$activate->descrption}}</p>
<p>the organization bhined the good work:<a href="\orgpage\{{$org->org_name}}" class="owerlink">{{$activate->organization->org_name}}</a></p>
<p>number {{$activate->organization->owner->number}}</p>
<br/>
<div class="link">
    @guest
    @if($activate->type_of_work == 'dontion')
<p><a href="\dontion" >click here to dontion</a></p>
@else
<p><a href="\login" >click here to voulnter</a></p>
@endif
@endguest
@auth
@if($activate->type_of_work == 'dontion')
<p><a href="\dontion" >click here to dontion</a></p>

@else
<p><a href="\voulnter\{{$activate->name}}" >click here to voulnter</a></p>
@endif
<br/>
@if  (auth()->user()?->name == 'admin' || auth()->user()?->id ==$org->owner_id)
<p><a href="\deleteact\{{$activate->name}}">click here to delete the Activate</a></p>
<br/>
<p><a href="\edit\{{$activate->name}}">click here to edit the Activate</a></p>
    @endif
@endauth
</div>
   
   
</x-layout>