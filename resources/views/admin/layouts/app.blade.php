<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ezytick</title>
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}">
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-50">
<nav class="fixed z-30 w-full bg-gray-50">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start">
                <a href="{{ route('admin.index') }}" class="ml-4 text-md font-semibold flex items-center lg:mr-1.5">
                    <span class="self-center hidden text-xl font-bold md:inline-block whitespace-nowrap">Ezytick</span>
                </a>
            </div>
            <div class="ml-3">
                <div class="relative inline-block text-left">
                    <div class="block">
                        @if (auth()->user()->image)
                            <button id="dropdown" class="flex items-center justify-center w-10 h-10 bg-gray-200 bg-center bg-cover rounded">
                                <img class="w-full h-full rounded" alt="img" src="{{ auth()->user()->image }}">
                            </button>
                        @else
                            <button id="dropdown" class="relative grid content-center w-10 h-10 overflow-hidden bg-gray-100 rounded place-items-center">
                                <i class="fas fa-user text-[20px] text-gray-500"></i>
                            </button>
                        @endif
                    </div>
                    <div id="listDropdown" class="absolute right-0 z-10 hidden w-56 mt-2 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                        <div class="py-1">
                            <a href="{{ route('admin.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Главный</a>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Выйти</a>
                            <form id="logout-form" class="hidden" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</nav>
<div class="flex pt-16 overflow-hidden bg-white">
    <aside id="sidebar" class="fixed top-0 left-0 z-20 flex flex-col flex-shrink-0 hidden w-64 h-full pt-16 duration-200 lg:flex transition-width" aria-label="Sidebar">
        <div class="relative flex flex-col flex-1 min-h-0 pt-0 bg-gray-50">
            <div class="flex flex-col flex-1 pt-2 pb-4 overflow-y-auto">
                <div class="flex-1 px-3 bg-gray-50" id="sidebar-items">
                    <ul class="pt-1 pb-2">
                        <li>
                            <a href="{{ route('admin.index') }}" class="flex items-center py-2.5 px-4 text-base font-normal text-dark-500 rounded-lg hover:bg-gray-200 group  transition-all duration-200">
                                <div class="grid w-8 h-8 mr-1 text-center bg-white rounded-lg shadow-lg shadow-gray-300 text-dark-700 place-items-center">
                                    <i class="fad fa-house"></i>
                                </div>
                                <span class="ml-3 text-sm font-light text-dark-500">Фильмы и Театры</span>
                            </a>
                        </li>
                        @if(auth()->user()->type == 1)
                        <li>
                            <a href="{{ route('admin.users') }}" class="flex items-center py-2.5 px-4 text-base font-normal text-dark-500 rounded-lg hover:bg-gray-200  group transition-all duration-200">
                                <div class="grid w-8 h-8 mr-1 text-center bg-white rounded-lg shadow-lg shadow-gray-300 text-dark-700 place-items-center">
                                    <i class="fas fa-user"></i>
                                </div>
                                <span class="ml-3 text-sm font-light text-dark-500">Пользователи</span>
                            </a>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </aside>
    <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64">
        @yield('content')
    </div>
</div>

@if (session('status'))
    {{--        <x-alert :status="session('status')" :message="session('message')" />--}}
@endif

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css"/>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.maskedinput.min.js') }}"></script>

<script>
    // Alert
    let opacity = 1
    let alert = $('#alert')
    alert.css('opacity', 1)
    setTimeout(function () {
        let alertHide = setInterval(function () {
            alert.css('opacity', opacity)
            opacity -= 0.05
            if (opacity < 0) {
                alert.css('display', 'none')
                clearInterval(alertHide)
            }
        }, 10)
    }, 2000)

    // DropDown Menu
    const dropdownButton = document.querySelector("#dropdown")
    const dropdownList = document.querySelector("#listDropdown")
    dropdownButton.addEventListener("click", () => {
        dropdownList.classList.toggle("hidden")
    });

    // Add Post
    function addPost() {
        const addPostWindow = document.querySelector("#addPostWindow")
        addPostWindow.classList.toggle("hidden")
    }

    // Delete Post
    function deletePost(id) {
        const deletePostWindow = document.querySelector("#deletePostWindow")
        deletePostWindow.classList.toggle("hidden")
        const deletePostForm = document.querySelector("#deletePostForm")
        deletePostForm.action = '{{ route('admin.posts.delete', '') }}' + '/' + id
    }

    // Add User
    function addUser() {
        const addUserWindow = document.querySelector("#addUserWindow")
        addUserWindow.classList.toggle("hidden")
    }

    // Delete User
    function deleteUser(id) {
        const deleteUserWindow = document.querySelector("#deleteUserWindow")
        deleteUserWindow.classList.toggle("hidden")
        const deleteUserForm = document.querySelector("#deleteUserForm")
        deleteUserForm.action = '{{ route('admin.users.delete', '') }}' + '/' + id
    }

    // Deleted Post
    function deletedPost(id) {
        const deletedPostWindow = document.querySelector("#deletedPostWindow")
        deletedPostWindow.classList.toggle("hidden")
        const deletedPostForm = document.querySelector("#deletedPostForm")
        deletedPostForm.action = '{{ route('admin.deleted.update', '') }}' + '/' + id
    }

</script>
</body>

</html>
