
<x-layout>
    <h1>are you sure, there is no conflick with the time for you</h1>
    <p>if you said yes, you will be counted by the system</p>
    <h3>start at  <time>{{\Carbon\Carbon::parse($activate->activates_start_at)->diffForHumans()}}</time></h3>

    <form method="POST" action="/createvoulnter/{{$activate->name}}">
    @csrf
    <button type="submit" class="sesson-button">
        yes
    </button>
    <span class="link">
    <a href="\activate\{{$activate->name}}">no</a>
</span>
    </form>
</x-layout>