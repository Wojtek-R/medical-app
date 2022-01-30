<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">

                    <div class="mt-8 text-2xl">
                        Are you ready to expand your knowledge by playing some games?
                    </div>

                    <div class="mt-6 text-gray-500">
                        Please select the game that you would like to play today.
                    </div>
                </div>

                <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">

                    <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l">
                        <div class="flex items-center">
                            <svg fill="purple" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 280 280" class="w-8 h-8 text-gray-400">  >
                                <path d="M183.028,43.028H96.972C43.501,43.028,0,86.529,0,140s43.501,96.972,96.972,96.972h86.057
		C236.499,236.972,280,193.471,280,140S236.499,43.028,183.028,43.028z M183.028,218.972H96.972C53.427,218.972,18,183.545,18,140
		s35.427-78.972,78.972-78.972h86.057C226.573,61.028,262,96.455,262,140S226.573,218.972,183.028,218.972z"/>
                                <path d="M177.029,129.326l-42.208-35.29c-9.058-7.573-22.838-1.133-22.838,10.674v70.58c0,11.807,13.78,18.248,22.838,10.674
		l42.208-35.29C183.681,145.113,183.681,134.887,177.029,129.326z"/>
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold">Quiz your knowledge</div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-sm">
                                Play Quiz games to expand your knowledge about medical terminology.
                            </div>
                        </div>
                        <button style="background-color: #8732a8" class="hover:bg-blue-700 text-white font-bold py-2 px-4 rounded rounded ml-12 mt-6 w-48">
                            Start Quiz
                        </button>
                    </div>

                    <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l">
                        <div class="flex items-center">
                            <svg fill="purple" viewBox="0 0 32 32" id="icon" xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-400"> ><defs><style>.cls-1{fill:none;}</style></defs><title>development</title><path d="M8,4V8H4V4H8M2,2v8h8V2Z"/><path d="M18,7v4H14V7h4M12,5v8h8V5Z"/><path d="M8,16v4H4V16H8M2,14v8h8V14Z"/><path d="M22,10v6H16v6H10v8H30V10Zm-4,8h4v4H18ZM16,28H12V24h4Zm6,0H18V24h4Zm6,0H24V24h4Zm0-6H24V18h4Zm-4-6V12h4v4Z"/><rect id="_Transparent_Rectangle_" data-name="&lt;Transparent Rectangle&gt;" class="cls-1" width="32" height="32"/></svg>
                            <div class="ml-4 text-lg leading-7 font-semibold">Flashcards - Comming Soon</div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-sm">
                                Play games with medical terms to expand your knowledge.
                            </div>
                        </div>
                        <button style="background-color: #8732a8" class="hover:bg-blue-700 text-white font-bold py-2 px-4 rounded rounded ml-12 mt-6 w-48">
                            Comming Soon
                        </button>
                    </div>


                </div>


            </div>
        </div>
    </div>
</x-app-layout>
