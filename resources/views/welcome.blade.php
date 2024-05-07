<x-app-layout>
    @include('mimenu')
    
    <section class="max-w-7xl mx-auto p-6 lg:p-8">
        <div class="mt-16">
            @livewire('show-post')
        </div>
    </section>
    <footer class="mt-10 mb-3 p-2 bg-white">
        <div class="md:flex justify-center sm:items-center sm:juustify-between max-w-6xl mx-auto">
            <div class="text-center text-sm text-gray-500 sm:text-left">
                <div class="md:flex items-center gap-4 mb-2 md:mb-0">
                    <p>CopyRight 2024 - Fernando Rodriguez</p>
                    <p>Desarrollo Web</p>
                </div>
            </div>
        </div>
    </footer>
</x-app-layout>