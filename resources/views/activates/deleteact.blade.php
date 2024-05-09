<x-layout>

<section class="px-6 py-8">
<main >
    <h1 >are you sure ?!</h1>
<form method="POST" action="/deleteact/{{$activate->name}}" >
    @csrf
    
    <div >
    <button type="submit" class="sesson-button">
        yes
    </button>
    <span class="link">
    <a href="\activate\{{$activate->name}}">no</a>
</span>
</form>

</main>
    </section>
</x-layout>