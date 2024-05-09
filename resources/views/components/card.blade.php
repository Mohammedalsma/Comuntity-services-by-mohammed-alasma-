@props(['activates','photoacts'])


@foreach($activates as $activate)
<div class="column">
<div class="card"onclick="this.querySelector('a').click(); return true;">
@if ($activate->photo != null)
<img src="{{ asset($activate->photo)}}" >
@endif
<h1>{{$activate->name}}</h1>
<h3><span class="category">type of work:</span> {{$activate->type_of_work}}</h3>
<p><span class="about">about:</span> {{$activate->descrption}}</p>
 <p>start at  <time>{{$activate->activates_start_at}}</time></p>
<a href="\activate\{{$activate->name}}" class="card-link"> click on the activate to view it</a>
</div>
</div>
@endforeach

