<x-layout>

<section >
<main >
    <h1 >are you sure ?!</h1>
<form method="POST" action="/logout" >
    @csrf
    
    <div >
    <button type="submit" class="sesson-button">
        yes
    </button>
    <span class="link">
    <a href="\">no</a>
</span>
    </div>
</form>

</main>
    </section>
</x-layout>