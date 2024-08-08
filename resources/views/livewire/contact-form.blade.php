<div x-data="{ success: @entangle('success'), fail: @entangle('fail') }">
    <template x-if="success">
        <div id="alert-3"
             class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
             role="alert" x-init="setTimeout(() => success = false, 7000)">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                 viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ms-3 text-sm font-medium">
                {{ __('Thanks for contacting us, Your message has been sent successfully!') }}
            </div>
            <button type="button"
                    class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                    @click="success = false" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
    </template>

    <template x-if="fail">
        <div id="alert-3"
             class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
             role="alert" x-init="setTimeout(() => fail = false, 7000)">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                 viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ms-3 text-sm font-medium">
                {{ __('Sorry, something went wrong. Please try again later.') }}
            </div>
            <button type="button"
                    class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"
                    @click="success = false" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
    </template>

    <form wire:submit.prevent="submit" class="ml-auo space-y-4">
        <div>
            <input type="text" placeholder='{{ __('Name') }}' id="name" wire:model="name"
                   class="w-full rounded-md py-2.5 px-4 border text-sm outline-main-light dark:outline-main-dark dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-300">
            @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div>
            <input type="email" placeholder='{{ __('Email') }}' id="email" wire:model="email"
                   class="w-full rounded-md py-2.5 px-4 border text-sm outline-main-light dark:outline-main-dark dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-300">
            @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div>
            <input type="text" placeholder='{{ __('Subject') }}' id="subject" wire:model="subject"
                   class="w-full rounded-md py-2.5 px-4 border text-sm outline-main-light dark:outline-main-dark dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-300">
            @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div>
            <textarea id="message" placeholder='{{ __('Message') }}' wire:model="message"
                      class="w-full rounded-md px-4 border text-sm pt-2.5 outline-main-light dark:outline-main-dark dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-300"></textarea>
            @error('message') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <button type='submit'
                class="text-white bg-main-light dark:bg-main-dark hover:bg-secondary-light dark:hover:bg-secondary-dark font-semibold rounded-md text-sm px-4 py-2.5 w-full">
            {{ __('Send') }}
        </button>
    </form>
</div>
