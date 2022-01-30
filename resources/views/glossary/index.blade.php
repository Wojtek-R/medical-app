<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Glossary') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="container flex justify-center mx-auto">
                <div class="flex flex-col">
                    <div class="w-full">
                        <div class="border-b border-gray-200 shadow">
                            <table>
                                <thead style="border-bottom: 1px solid lightgray;" class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-2 text-xs text-gray-500">
                                        ID
                                    </th>
                                    <th class="px-6 py-2 text-xs text-gray-500">
                                        Term
                                    </th>
                                    <th class="px-6 py-2 text-xs text-gray-500">
                                        Definition
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="bg-white">
                                @foreach($terms as $term)
                                <tr style="border-bottom: 1px solid lightgray;" class="whitespace-nowrap">
                                    <td class="px-6 py-4 text-sm text-gray-500">
                                        {{$term->id}}
                                    </td>
                                    <td  class="px-6 py-4">
                                        <div class="text-sm text-gray-900 ">
                                            {{$term->term}}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-500">
                                            {{$term->definition}}
                                        </div>
                                    </td>

                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>