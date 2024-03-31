<x-layout>
<section class="px-6 py-8">
<main class="max-w-lg mx-auto mt-10 bg-gray-100 broder broder-gray-200 p-6 rounded-xl">
    <h1 class="text-center font-bold text-xl">fill the follwing to create an new activate</h1>
<form method="POST" action="/createact" class="mt-10">
    @csrf
    <div class ="mb-6">
        <label class="block mb-2 uppercase font-bold text-xs text-grey-700"
        for="name">
    Name
</label>
<input class="border border-gray-400 p-2 w-full"
type="text"
name="name"
id="name"
required>
    </div>
<div class ="mb-6">
<label class="block mb-2 uppercase font-bold text-xs text-grey-700"
        for="location">
    location
</label>
<input class="border border-gray-400 p-2 w-full"
type="text"
name="location"
id="location"
required>
    </div>
    <div class ="mb-6">
<label class="block mb-2 uppercase font-bold text-xs text-grey-700"
        for="type_of_work">
        type_of_work
</label>
<input class="border border-gray-400 p-2 w-full"
type="text"
name="type_of_work"
id="type_of_work"
required>
    </div>
    <div class ="mb-6">
<label class="block mb-2 uppercase font-bold text-xs text-grey-700"
        for="category">
        category
</label>
<input class="border border-gray-400 p-2 w-full"
type="text"
name="category"
id="category"
required>
    </div>
    <div class ="mb-6">
<label class="block mb-2 uppercase font-bold text-xs text-grey-700"
        for="descrption">
        descrption
</label>
<input class="border border-gray-400 p-2 w-full"
type="text"
name="descrption"
id="descrption"
required>
    </div>
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