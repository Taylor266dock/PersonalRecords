<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
            </style>
        @endif
    </head>
    <body class="">

                @extends('layouts.app')

                @section('content')
                    <div class="grid w-full">
                        <div class="ta grid grid-cols-2 gap-5">
                    <button class="tablinks w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" id="fetchRecords">Personal Records</button>
                    <button class="tablinks w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" id="showForm">Add Personal Record</button>
                        </div>
                    </div>

                    <div id="content"></div>


                    <script>
                        document.getElementById('fetchRecords').addEventListener('click', function() {
                            fetch('/get-records')
                                .then(response => response.text())
                                .then(html => {
                                    document.getElementById('content').innerHTML = html;
                                })
                                .catch(error => console.error('Error fetching records:', error));
                        });

                        document.getElementById('showForm').addEventListener('click', function() {
                            fetch('/create-record')
                                .then(response => response.text())
                                .then(html => {
                                    document.getElementById('content').innerHTML = html;
                                })
                                .catch(error => console.error('Error fetching form:', error));
                        });
                    </script>
        @endsection


    </body>
</html>
