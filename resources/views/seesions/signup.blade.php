<x-layout>
<section class="px-6 py-8">
<main >
    <h1 >Enter your infromation </h1>
<form method="POST" action="/signup" class="outline">
    @csrf

        <x-signupform />
   <div >
<button type="submit" class="sesson-button">
    submit
</button>
    </div>
<br>
    <a href="/singupasorg" class="sesson-link">sign up as owner of Organization</a>
</form>

</main>
    </section>
    </x-layout>