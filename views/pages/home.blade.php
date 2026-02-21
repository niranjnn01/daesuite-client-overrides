@extends('layouts.guest')

@section('content')
<div
    class="font-sans bg-fixed bg-center bg-no-repeat text-gray-800"
>

    {{-- Hero Section --}}
    <!-- <section class="w-full h-[500px]">
        <x-sections.hero-split 
            image="/client-assets/image.png" 
            alt="Shanthiniketan School"
        >
        <span class="text-primary">Welcome to Shanthiniketan School</span><br/>
        <span class="block md:inline text-secondary text-xl">A Loving Family of Happy Learners and High Achievers</span>
        </x-sections.hero-split>
    </section> -->


    <div class="min-h-screen flex items-center justify-center p-6">
        <div class="max-w-md w-full text-center">
            
            <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-[#3B82F6]/10 text-[#3B82F6] mb-8 animate-pulse">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
                </svg>
            </div>

            <h1 class="text-3xl font-bold text-slate-900 mb-4">
                Under Maintenance
            </h1>
            
            <p class="text-lg text-slate-600 mb-8">
                This website is currently under maintenance. 
                <span class="block font-medium text-[#3B82F6] mt-2">Please come back after some time.</span>
            </p>

            <div class="w-full bg-slate-200 rounded-full h-1.5 mb-8">
                <div class="bg-[#3B82F6] h-1.5 rounded-full w-2/3 animate-[shimmer_2s_infinite]"></div>
            </div>

            <p class="text-xs text-slate-400 uppercase tracking-widest font-semibold">
                &copy; 2026 Shanthiniketan School
            </p>

        </div>
    </div>
    
</div>

@endsection