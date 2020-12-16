@extends('layouts.layout')
@section('content')
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <img src="https://cdn.pixabay.com/photo/2014/11/05/15/57/salmon-518032__340.jpg" alt="Meal" class="
                    rounded w-20 h-20 my-5">
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="#" class="underline text-gray-900 dark:text-white">Food and Beverages</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                   Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                   Reprehenderit ratione explicabo pariatur id possimus doloribus ab, 
                                   exercitationem incidunt rem cupiditate accusamus quod harum 
                                   veniam, maiores veritatis vel sed et corrupti.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                            
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="#" class="underline text-gray-900 dark:text-white">Electronics and Computers</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                   Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                                   Qui molestias sequi 
                                   assumenda dolor magni iste sint neque facilis nemo magnam.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                              
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="#" class="underline text-gray-900 dark:text-white">Clothes and Shoes</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi ut libero est ad, beatae quos.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                            
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="#" class="underline text-gray-900 dark:text-white">Services</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                   <div class="row">
                                    <div class="col flex justify-between">
                                    <div>
                                    <a href="#">
                                        <i class="fab fa-facebook-f text-primary"></i><span class='mx-4'>facebook</span>
                                        </a>
                                    </div>
                                    <div>
                                    <a href="#">
                                    <i class="fab fa-whatsapp text-success"></i></i><span class='mx-4'>whatsapp</span>
                                    </a>
                                    </div>
                                    <div>
                                    <a href="#">
                                        <i class="fab fa-google text-danger"></i><span class='mx-4'>google</span>
                                        </a>
                                    </div>
                                    </div>
                                   </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                      
                    </div>

                </div>
            </div>
        </div>
        @endsection
  
