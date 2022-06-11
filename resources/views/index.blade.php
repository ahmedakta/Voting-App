<x-app-layout>
    <div class="filters flex space-x-6">
        <div class="w-1/3">
            <select name="category" id="category" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Categoey one">Caetgory one</option>
                <option value="Categoey two">Caetgory two</option>
                <option value="Categoey three">Caetgory three</option>
                <option value="Categoey four">Caetgory four</option>
            </select>
        </div>
        <div class="w-1/3">
            <select name="other_filters" id="other_filters " class="w-full rounded-xl border-none px-4 py-2">
                <option value="Filter one">Filter one</option>
                <option value="Filter two">Filter two</option>
                <option value="Filter three">Filter three</option>
                <option value="Filter four">Filter four</option>
            </select>
        </div>
        <div class="w-2/3 relative">
            <input type="search" name="search" id="search" placeholder="Find an idea.." class="w-full rounded-xl bg-white border-none placeholder-text-gray-900 px-4 py-2 pl-8">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg class="w-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path strokeLinecap="round" strokeLinejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>
    </div>    
</x-app-layout>