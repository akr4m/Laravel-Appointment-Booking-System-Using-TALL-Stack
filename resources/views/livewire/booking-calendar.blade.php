<div class="bg-white rounded-lg">
    <div class="flex items-center justify-center relative">
        @if ($this->weekIsGreaterThanCurrent)
            <button type="button" class="p-4 absolute left-0 top-0" wire:click="decrementCalendarWeek">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-300 hover:text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
        @endif

        <div class="text-lg font-semibold p-4">
            {{ $this->calendarStartDate->format('M Y') }}
        </div>

        <button type="button" class="p-4 absolute right-0 top-0" wire:click="incrementCalendarWeek">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-300 hover:text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
        </button>
    </div>

    <div class="flex justify-between items-center px-3 border-b border-gray-200 pb-2">
        @foreach ($this->calendarWeekInterval as $day)
            <button type="button" class="text-center group cusor-pointer focus:outline-none" wire:click="setDate({{ $day->timestamp }})">
                <div class="text-xs leading-none mb-2 text-gray-700">
                    {{ $day->format('D') }}
                </div>
                <div class="text-lg leading-none p-1 rounded-full w-9 h-9 group-hover:bg-gray-200 flex items-center justify-center {{ $date === $day->timestamp ? 'bg-gray-200' : '' }}">
                    {{ $day->format('d') }}
                </div>
            </button>
        @endforeach
    </div>

    <div class="max-h-52 overflow-y-scroll">
        @if ($this->availableTimeSlots->count())
            @foreach ($this->availableTimeSlots as $slot)
                <input type="radio" name="time" id="time_{{ $slot->timestamp }}" value="{{ $slot->timestamp }}" wire:model="time" class="sr-only">
                <label for="time_{{ $slot->timestamp }}" class="w-full text-left focus:outline-none px-4 py-2 cursor-pointer flex items-center border-b border-gray-100">
                    @if ($slot->timestamp == $time)
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 text-gray-700" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                    @endif
                    {{ $slot->format('g:i A') }}
                </label>
            @endforeach
        @else
            <div class="text-center text-gray-700 px-4 py-2">
                No available slots
            </div>
        @endif
    </div>
</div>
