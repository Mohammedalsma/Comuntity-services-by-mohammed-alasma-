<x-layout>

<section class="px-6 py-8">
<main class="max-w-lg mx-auto mt-10 bg-gray-100 broder broder-gray-200 p-6 rounded-xl">
    <h1 class="text-center font-bold text-xl">are you sure ?!</h1>
<form method="POST" action="/deleteact/{{$activate->id}}" class="mt-10">
    @csrf
    
    <div class ="mb-6">
<button type="submit"
class="bg-blue-300 text-white rounded py-2 px-4 hover:bg-blue-500">
    submit
</button>
    </div>
</form>

</main>
    </section>
</x-layout>