@extends('admin.layouts.app')

@section('content')
    @if(auth()->user()->type == 2)
        <div class="w-full px-6 py-6 mx-auto">
            <div>
                <div class="flex flex-wrap -mx-3">
                    <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                        <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                            <div class="flex-auto p-4">
                                <div class="flex flex-row -mx-3">
                                    <div class="flex-none w-2/3 max-w-full px-3">
                                        <div>
                                            <p class="mb-0 font-sans font-semibold leading-normal text-size-sm">Today's Money</p>
                                            <h5 class="mb-0 font-bold">
                                                {{ \App\Models\MovieOrder::where('user_id', auth()->user()->id)->get()->count() }}
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="px-3 text-right basis-1/3">
                                        <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-fuchsia">
                                            <i class="ni ni-money-coins text-size-lg relative top-3.5 text-white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                        <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                            <div class="flex-auto p-4">
                                <div class="flex flex-row -mx-3">
                                    <div class="flex-none w-2/3 max-w-full px-3">
                                        <div>
                                            <p class="mb-0 font-sans font-semibold leading-normal text-size-sm">
                                                Today's Users
                                            </p>
                                            <h5 class="mb-0 font-bold">
                                                {{ \App\Models\MovieOrder::where('user_id', auth()->user()->id)->get()->count() }}
                                                <span class="leading-normal text-size-sm font-weight-bolder text-lime-500">+3%</span>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="px-3 text-right basis-1/3">
                                        <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-fuchsia">
                                            <i class="ni ni-world text-size-lg relative top-3.5 text-white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                        <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                            <div class="flex-auto p-4">
                                <div class="flex flex-row -mx-3">
                                    <div class="flex-none w-2/3 max-w-full px-3">
                                        <div>
                                            <p class="mb-0 font-sans font-semibold leading-normal text-size-sm">New Clients</p>
                                            <h5 class="mb-0 font-bold">
                                                {{ \App\Models\MovieOrder::where('user_id', auth()->user()->id)->get() }}
                                                <span class="leading-normal text-red-600 text-size-sm font-weight-bolder">-2%</span>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="px-3 text-right basis-1/3">
                                        <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-fuchsia">
                                            <i class="ni ni-paper-diploma text-size-lg relative top-3.5 text-white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:w-1/4">
                        <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                            <div class="flex-auto p-4">
                                <div class="flex flex-row -mx-3">
                                    <div class="flex-none w-2/3 max-w-full px-3">
                                        <div>
                                            <p class="mb-0 font-sans font-semibold leading-normal text-size-sm">Sales</p>
                                            <h5 class="mb-0 font-bold">
                                                $103,430
                                                <span class="leading-normal text-size-sm font-weight-bolder text-lime-500">+5%</span>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="px-3 text-right basis-1/3">
                                        <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-fuchsia">
                                            <i class="ni ni-cart text-size-lg relative top-3.5 text-white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col my-6 mx-4 rounded-2xl shadow-xl shadow-gray-200">
                <div class="overflow-x-auto rounded-2xl">
                    <div class="inline-block min-w-full align-middle">
                        <div class="overflow-hidden">
                            <table class="min-w-full divide-y divide-gray-200 table-fixed">
                                <thead class="bg-white">
                                <tr>
                                    <th class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">
                                        №
                                    </th>
                                    <th class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">
                                        Заголовок
                                    </th>
                                    <th class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">
                                        Дата
                                    </th>
                                    <th class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">
                                        Действие
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($movies as $movie)
                                    <tr class="hover:bg-gray-100">
                                        <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap lg:p-5">#{{$movie->id}}</td>
                                        <td class="p-4 text-sm font-normal text-gray-500 lg:p-5">
                                            <div class="text-base font-semibold text-gray-900 w-[300px] line-clamp-1">{{$movie->name}}</div>
                                        </td>
                                        <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap lg:p-5">{{$movie->created_at->isoFormat('LL')}}</td>
                                        <td class="p-4 space-x-2 whitespace-nowrap lg:p-5">
                                            <a href="{{route('admin.posts.show', $movie)}}" class="getmovie inline-flex items-center py-2 px-3 text-sm font-medium text-center text-gray-700 bg-gray-200 rounded-lg hover:bg-gray-300 hover:text-gray-900 hover:scale-[1.02] transition-all">
                                                <i class="far fa-edit mr-2"></i>
                                                Посмотреть
                                            </a>
                                            <a href="javascript:deletePost({{$movie->id}})" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-red-500 rounded-lg hover:bg-red-800 hover:scale-[1.02] transition-all">
                                                <i class="fas fa-trash mr-2"></i>
                                                Удалить
                                            </a>
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
    @endif

    @if(auth()->user()->type == 1)
        <main>
            <div class="block justify-between items-center p-4 mx-4 mt-4 mb-6 bg-white rounded-2xl shadow-xl shadow-gray-200 lg:p-5 sm:flex">
                <div class="mb-1 w-full">
                    <div class="mb-4">
                        <nav class="flex mb-5">
                            <ol class="inline-flex items-center space-x-1 md:space-x-2">
                                <li class="inline-flex items-center">
                                    <a href="{{route('admin.index')}}" class="inline-flex items-center text-gray-700 hover:text-gray-900">
                                        <i class="fad fa-house mr-4"></i>
                                        Главный
                                    </a>
                                </li>
                            </ol>
                        </nav>
                        <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl">Все фильмы и театры</h1>
                    </div>
                    <div class="block items-center sm:flex md:divide-x md:divide-gray-100">
                        <div class="flex items-center w-full sm:justify-end">
                            <a href="javascript:addUser()" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white rounded-lg bg-blue-500 hover:bg-blue-600 sm:ml-auto hover:scale-[1.02] transition-all">
                                <i class="fas fa-plus mr-2"></i>
                                Добавить
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col my-6 mx-4 rounded-2xl shadow-xl shadow-gray-200">
                <div class="overflow-x-auto rounded-2xl">
                    <div class="inline-block min-w-full align-middle">
                        <div class="overflow-hidden">
                            <table class="min-w-full divide-y divide-gray-200 table-fixed">
                                <thead class="bg-white">
                                <tr>
                                    <th class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">
                                        №
                                    </th>
                                    <th class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">
                                        Заголовок
                                    </th>
                                    <th class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">
                                        Дата
                                    </th>
                                    <th class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">
                                        Действие
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($movies as $movie)
                                    <tr class="hover:bg-gray-100">
                                        <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap lg:p-5">#{{$movie->id}}</td>
                                        <td class="p-4 text-sm font-normal text-gray-500 lg:p-5">
                                            <div class="text-base font-semibold text-gray-900 w-[300px] line-clamp-1">{{$movie->name}}</div>
                                        </td>
                                        <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap lg:p-5">{{$movie->created_at->isoFormat('LL')}}</td>
                                        <td class="p-4 space-x-2 whitespace-nowrap lg:p-5">
                                            <a href="{{route('admin.posts.show', $movie)}}" class="getmovie inline-flex items-center py-2 px-3 text-sm font-medium text-center text-gray-700 bg-gray-200 rounded-lg hover:bg-gray-300 hover:text-gray-900 hover:scale-[1.02] transition-all">
                                                <i class="far fa-edit mr-2"></i>
                                                Посмотреть
                                            </a>
                                            <a href="javascript:deletePost({{$movie->id}})" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-red-500 rounded-lg hover:bg-red-800 hover:scale-[1.02] transition-all">
                                                <i class="fas fa-trash mr-2"></i>
                                                Удалить
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <div id="addUserWindow" class="hidden overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 justify-center items-center md:inset-0 h-modal sm:h-full bg-gray-100 bg-opacity-75">
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 px-4 w-full max-w-2xl h-full md:h-full">
                <div class="relative bg-white rounded-2xl shadow-lg">
                    <div class="flex justify-between items-start p-5 rounded-t border-b">
                        <h3 class="text-xl font-semibold">Добавить</h3>
                        <a href="javascript:addUser()" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-full w-6 h-6 inline-flex items-center justify-center">
                            <i class="far fa-times text-[15px]"></i>
                        </a>
                    </div>
                    <form action="{{route('admin.posts.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="p-6 space-y-6">
                            <div class="grid gap-5">
                                <div>
                                    <label for="product-name" class="block mb-2 text-sm font-medium text-gray-900">Загаловок</label>
                                    <input type="text" name="title" id="post-confirm-title" class="shadow-lg-sm border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-fuchsia-50 focus:border-fuchsia-300 block w-full p-2.5" placeholder="Загаловок" required>
                                </div>
                                <div>
                                    <label class="block mb-2 text-sm font-medium text-gray-900">Выбрать категорию</label>
                                    <select name="type_id" class="border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-fuchsia-50 focus:border-fuchsia-300 block w-full p-2.5">
                                        <option value="1">Movies</option>
                                        <option value="2">Events</option>
                                        <option value="3">Theaters</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block mb-2 text-sm font-medium text-gray-900">Выбрать пользователя</label>
                                    <select name="user_id" class="border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-fuchsia-50 focus:border-fuchsia-300 block w-full p-2.5">
                                        @foreach($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div>
                                    <label for="product-details" class="block mb-2 text-sm font-medium text-gray-900">Описание</label>
                                    <textarea name="body" rows="6" class="block p-4 w-full text-gray-900 border border-gray-300 sm:text-sm rounded-lg focus:ring-2 focus:ring-fuchsia-50 focus:border-fuchsia-300" placeholder="Описание" required></textarea>
                                </div>
                            </div>
                            <div class="flex justify-center items-center mt-4 w-full">
                                <label class="flex flex-col w-full h-32 rounded border-2 border-gray-300 border-dashed cursor-pointer hover:bg-gray-50">
                                    <div class="flex flex-col justify-center items-center pt-5 pb-6">
                                        <svg class="w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path>
                                        </svg>
                                        <p class="py-1 text-sm text-gray-600">Загрузите фото</p>
                                        <p class="text-xs text-gray-500">PNG, JPG до 10MB</p>
                                    </div>
                                    <input accept="image/*" type="file" name="image" class="hidden" required>
                                </label>
                            </div>
                        </div>
                        <div class="p-6 rounded-b border-t border-gray-200">
                            <button type="submit" class="text-white font-medium text-sm px-5 py-2.5 text-center rounded-lg bg-blue-500 hover:scale-[1.02] transition-all">Добавить пост</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="deletePostWindow" class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto bg-gray-100 bg-opacity-75 top-4 md:inset-0 h-modal sm:h-full">
            <div class="absolute w-full h-full max-w-md px-4 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 md:h-auto">
                <div class="relative bg-white shadow-lg rounded-2xl">
                    <div class="p-6 pt-0 text-center">
                        <i class="far fa-exclamation-circle text-[70px] text-red-500 mt-6"></i>
                        <h3 class="mt-5 mb-6 text-xl font-normal text-gray-500">Вы уверены, что хотите удалить этот?</h3>
                        <form id="deletePostForm" action="" method="post" class="inline-flex">
                            @csrf
                            @method('delete')
                            <button type="submit" class="text-white bg-red-500 font-medium rounded-lg text-base inline-flex items-center px-3 py-2.5 text-center mr-2 hover:scale-[1.02] transition-all">
                                Да
                            </button>
                        </form>
                        <a href="javascript:deletePost(0)" class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 font-medium inline-flex items-center rounded-lg text-base px-3 py-2.5 text-center hover:scale-[1.02] transition-transform">
                            Нет
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
