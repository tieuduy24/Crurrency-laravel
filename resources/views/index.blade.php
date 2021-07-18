@extends('layouts.app')

@section('content')
<div class="min-w-screen min-h-screen bg-gray-100 flex flex-col items-center justify-center ">
    <div class="w-5/6 lg:w-3/6 rounded-xl bg-gradient-to-b shadow-xl ">
        <div class="text-white py-4 bg-gray-200">
            <div class="text-center font-bold text-2xl text-blue-600">
                <h2 class="uppercase">
                    <i class="fab fa-gg"></i>
                    Convert
                </h2>
            </div>
            
        <form action="/convert" method="POST">
            @csrf

            <div class="py-4 px-12 text-white">
                <div class="flex items-center justify-between mb-5">
                    <div class="flex flex-col font-bold w-2/6 px-2">
                        <label for="amount" class="mb-3 text-black ">
                        Amount
                        </label>
                        <input 
                            type="text"
                            name="amount"
                            placeholder="1.00"
                            class="py-3 px-5 rounded focus:outline-none text-gray-600 
                            focus:text-gray-600 border border-4" 
                             >
                    </div>
                    <div class="flex flex-col font-bold w-4/6 px-2">
                        <label for="from" class="mb-3 text-black" >
                            From
                        </label>
                        <select 
                            name="select"
                            class="py-3 px-5 rounded focus:outline-none text-gray-600 
                            focus:text-gray-600 border border-4"
                            name="form">
                            
                            <option class="py-1">
                                USD
                            </option>
                        </select>
                    </div>
                    <div class="flex flex-col font-bold w-4/6 px-2">
                        <label for="to" class="mb-3 text-black" >
                            To
                        </label>
                        <select 
                            name="select"
                            
                            class="py-3 px-5 rounded focus:outline-none text-gray-600 
                            focus:text-gray-600 border border-4"
                            name="to">
                            <option  class="py-1">
                                VND
                            </option>
                        </select>
                    </div>
                    <div class="float-right text-right">
                        <button type="submit" class="bg-blue-600 border font-bold mt-6 py-4 px-5 rounded-xl transition-all hover:bg-blue-400">
                            Convert
                        </button>

                    </div>
                </div>
            </div>
        </form>  
        </div>
    </div>
</div>

@endsection