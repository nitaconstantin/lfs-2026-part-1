<x-layout>
    <form action="/ideas/create" method="POST">
        @csrf
        <div class="col-span-full">
            <label for="description" class="block text-sm/6 font-medium text-white">New Idea</label>
            <div class="mt-2">
                <textarea class="text-white block w-full rounded-md bg-white/5 px-3" name="description" id="description" rows="5"></textarea>
            </div>
            <p class="mt-3 text-sm/6 text-gray-400">
                Have an idea you want to save for later?
            </p>
        </div>
        <div class="mt-6 flex items-center  gap-x-6">
            <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white">
                Save
            </button>
        </div>
    </form>








</x-layout>
