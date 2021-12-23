@extends('layouts.app')

@section('content')
<div class="background-image grid grid-cols-1 m-auto">
    <div class="flex text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
            <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                Want to follow trending news?
            </h1>
            <a 
                href="/news"
                class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                Read More
            </a>
        </div>
    </div>
</div>
<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-25 py-15 border-b border-gray-200">


    <div>
        <img src="https://assets-api.kathmandupost.com/thumb.php?src=https://assets-cdn.kathmandupost.com/uploads/source/news/2021/third-party/thumb20211222T072428642-1640137277.jpg&w=900&height=601" width="600" alt="">
    </div>


    <div class="m-auto sm:m-auto text-left w-4/5 block">
        <h2 class="text-3xl font-extrabold text-gray-600">
            A hot potato that MCC is in Nepal

        </h2>
        <p class=" py-8 text-gray-500 text-s">
            Four years on, US grant continues to be a divisive element, as parties talk it ad nauseum but fail to find consensus.

        </p>
        <p class="font-extrabold text-gray-600 text-l pb-9">
            While Prime Minister Sher Bahadur Deuba and his Nepali Congress are for pushing the Millennium Challenge<br>
             Corporation (MCC) Nepal Compact through the House, his coalition partners—Communist Party of Nepal (Maoist Centre),<br>
              CPN (Unified Socialist), Janata Samajbadi Party and Rastriya Janamorcha—are dead against it, saying some clauses<br>
               must be amended before the compact’s ratification.

            
        </p>

        <a href="/news" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
            Find out More
        </a>
    </div>
</div>
<div class="text-center p-15 bg-black text-white">
    <h2 class="text-2xl pb-5 text-l">
        Searching for Journalistic Writing?...If You
    </h2>

    <span class=" font-extrabold block text-4xl py-1">
        Gather the information.
    </span>
    <span class=" font-extrabold block text-4xl py-1">
        Write a strong lede.
    </span>
    <span class=" font-extrabold block text-4xl py-1">
        Structure your information.
    </span>
    <span class=" font-extrabold block text-4xl py-1">
        Verify your sources.
    </span>
</div>
<div class="text-center py-15">
    <span class="uppercase text-5 text-gray-400  font-bold text-3xl">
        NEWS
    </span>
    <h2 class="text-4xl font-bold py-10">
        Recent Posts
    </h2>
    <p class="m-auto w-4/5 text-gray-500  text-3xl font-bold">

        AstraZeneca, Oxford aim to produce Omicron-targeted vaccine.
    </p>
</div>
<div class="sm:grid grid-cols-2 w-4/5 m-auto">
    <div class="flex bg-yellow-700 text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
            <span class="uppercase text-xs">
               Hot News
            </span>
            <h3 class="text-xl font-bold py-10">
                AstraZeneca Plc said on Tuesday it is working with Oxford University to produce a vaccine<br>
                 for the Omicron coronavirus variant, joining other vaccine-makers who are looking to develop<br>
                  the variant-specific vaccine.


 
            </h3>
            <a href="" class="uppercase bg-transparent border-2 
border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                Find Out MOre
            </a>
        </div>
    </div>
    <div>
        <img src="https://assets-api.kathmandupost.com/thumb.php?src=https://assets-cdn.kathmandupost.com/uploads/source/news/2021/world/vaccine-1640155977.jpg&w=900&height=601">
    </div>

</div>


@endsection