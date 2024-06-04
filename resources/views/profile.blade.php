<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
        }
    </script>
</head>

<body>
    <div class="bg-gradient-to-b p-16 from-gray-200 to-gray-300 dark:from-gray-950 dark:to-violet-950">
        <div class="p-8 bg-white shadow mt-24 dark:bg-zinc-800">
            <div class="grid grid-cols-1 md:grid-cols-3">
                <div class="grid grid-cols-2 text-center order-last md:order-first mt-20 md:mt-0">
                    <div>
                        <p class="font-bold text-gray-700 text-xl dark:text-white">Status</p>
                        @if ($userdata['status'] != null)
                        <p class="text-gray-400">{{$userdata['status']}}</p>
                        @else
                        <p class="text-gray-400 dark:text-white">No status</p>
                        @endif
                    </div>
                    <div>
                        <p class="font-bold text-gray-700 text-xl dark:text-white">Courses</p>
                        <p class="text-gray-400 dark:text-white">{{ $nbr_courses }}</p>
                    </div>
                </div>
                <div class="relative">
                    <div
                        class="w-48 h-48 bg-indigo-100 mx-auto rounded-full shadow-2xl absolute inset-x-0 top-0 -mt-24 flex items-center justify-center text-indigo-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
                <div class="space-x-8 flex justify-between mt-32 md:mt-0 md:justify-center">
                    <button id="settings" class="text-white py-2 px-4 uppercase rounded bg-blue-400 hover:bg-blue-500 shadow hover:shadow-lg font-medium transition transform hover:-translate-y-0.5">
                        Settings</button>
                    <button id="dark-mode" onclick="darkmode()"
                        class="text-white py-2 px-4 uppercase rounded bg-gray-700 hover:bg-gray-800 shadow hover:shadow-lg font-medium transition transform hover:-translate-y-0.5">
                        Dark Mode</button>
                </div>
            </div>
            <div class="mt-16 text-center border-b pb-12">
                <h1 class="text-4xl font-medium text-gray-700 dark:text-white">{{ $userdata['name'] }}
                </h1>
                <p class="font-light text-gray-600 mt-3 dark:text-white">{{ $userdata['email'] }}</p>
                <p class="mt-8 text-gray-500 dark:text-white">{{ $userdata['phone'] }}</p>
            </div>
        </div>
        <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-black md:text-5xl lg:text-6xl dark:text-black text-center mt-6 dark:text-white">Courses</h1>
        <div class="p-8 bg-white shadow mt-6 dark:bg-zinc-800 grid grid-cols-3 gap-5">
            @for ($i = 0; $i < $nbr_courses; $i++)
            <div class="max-w-sm rounded overflow-hidden shadow-lg dark:shadow-white dark:shadow-md bg-slate-100">
                <div class=" px-6 py-4 font-bold text-xl mb-2 text-center bg-gray-200"> {{ $user_infos[$i]->course_label }}</div>
                <div class="px-6 pt-4 pb-2">
                    <div class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Numero de Goupe :{{ $user_infos[$i]->group_id }}</div>
                    <div class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Numero de mois:{{ $user_infos[$i]->num_months }}</div>
                </div>
                <div class="text-center py-6">
                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full dark:bg-red-900 dark:hover:bg-red-700 text-center">Supprimer</button>
                </div>
            </div>
            @endfor
        </div>
    </div>

    <div id="settings_section" class="transition-opacity duration-1000 ease-in-out opacity-0 duration-300 hidden p-6 absolute text-center bg-white dark:bg-zinc-800 w-1/2 h-48 text-center top-28 ml-auto mr-auto inset-0">
        <div class="flex justify-end">
            <svg class="fill-current h-6 w-6 text-red-500 cursor-pointer" onclick="closeSettings()" role="button" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M0 0h24v24H0z" fill="none"/>
                <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/>
            </svg>
        </div>
        <h2 class="text-3xl pb-12 pt-4">Settings</h2>
        <a href="/logout" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-8 rounded-full dark:bg-red-900 dark:hover:bg-red-700 text-center my-10">Log out</a>
    </div>

    <script>
        // settings...
        const settings = document.getElementById("settings");
        const settings_section = document.getElementById("settings_section");

        settings.addEventListener("click", function() {
            settings_section.classList.add("block");
            settings_section.classList.remove("hidden");
            settings_section.classList.toggle('opacity-100');
        });

        function closeSettings() {
            settings_section.classList.add("hidden");
            settings_section.classList.remove("block");
            settings_section.classList.remove('opacity-100');
        }

        // dark mode...
        const button = document.getElementById("dark-mode");

        function isLocalStorageAvailable() {
            try {
                const testKey = 'test';
                localStorage.setItem(testKey, testKey);
                localStorage.removeItem(testKey);
                return true;
            } catch (e) {
                return false;
            }
        }

        if (isLocalStorageAvailable()) {
            const prefersDarkMode = localStorage.getItem('darkMode') === 'true';
            document.documentElement.classList.toggle('dark', prefersDarkMode);
        }

        function darkmode() {
            document.documentElement.classList.toggle('dark');
            const isDarkMode = document.documentElement.classList.contains('dark');
            localStorage.setItem('darkMode', isDarkMode);
        }
    </script>
</body>

</html>
