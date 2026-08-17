<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-zinc-800 leading-tight">
            {{ __('Contacts') }}
        </h2>
    </x-slot>

    <div class="py-8 grid grid-cols-1 space-y-4 max-w-7xl mx-auto">
        <div class="grow w-full sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-zinc-900">
                    Contact actions (add, search/filter)
                </div>
            </div>

            <!-- TODO repeat for each contact -->

            <!-- contact card -->

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-zinc-900">
                    Contact Card here
                    <x-contact-card :contact="$contact">
                        <x-slot:actions>
                            <a href="/contacts/1">
                                View Contact
                            </a>
                        </x-slot:actions>
                        This is a current contact.
                    </x-contact-card>
                    {{-- <x-contact-card :contact="$contact">
                        <a href="/contacts/1">
                            View Contact
                        </a>
                    </x-contact-card> --}}
                    {{-- <x-contact-card
                        :contact="$contact"
                        :showPhone="true"
                        class="shadow"
                        id="main-contact"
                    /> --}}
                    {{-- <x-contact-card
                        :contact="$contact"
                        :showPhone="true"
                        class="contact-card"
                        id="main-contact"
                    /> --}}
                    {{-- <x-contact-card :contact="$contact" :showPhone="false" /> --}}
                    {{-- <x-contact-card/> --}}
                </div>
            </div>

            <!-- /contact card -->

            <!-- end repeat -->

        </div>
    </div>
</x-app-layout>
