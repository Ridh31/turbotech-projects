@extends('master')
@section('content')

{{-- <div class="headingContainer">
    <h1 class="headingText">  <i class="{{ $icon }} headingIcon"> </i> {{ $title }} </h1>
</div> --}}

<!-- textarea with avatar -->

<!-- main -->
<div class="mainCard">
    <div class="cardContainer p-5">

        <!-- text area with avatar -->
        <div class="flex items-start space-x-4">

            <!-- avatar -->
            <div class="flex-shrink-0">
                <img class="inline-block h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
            </div>

            <!-- textarea & button -->
            <div class="min-w-0 flex-1">
                <form action="#" class="relative">
                    <div class="overflow-hidden rounded-lg border border-[color:rgba(var(--ni-gray-300))] shadow-sm focus-within:border-[color:rgba(var(--ni-primary-500))] focus-within:ring-1 focus-within:ring-[color:rgba(var(--ni-primary-500))]">
                        <label for="comment" class="sr-only">Add your comment</label>
                        <textarea rows="3" name="comment" id="comment" class="block w-full resize-none border-0 px-5 py-3 focus:outline-none focus:ring-0 sm:text-sm" placeholder="Add your comment..." /></textarea>
                    </div>
                    
                    <!-- button -->
                    <div class="absolute inset-x-0 left-auto bottom-0 flex justify-between py-2 pl-3 pr-2">
                        <div class="flex-shrink-0">
                            <button type="submit" class="inline-flex items-center rounded-md border border-transparent bg-[color:rgba(var(--ni-primary-500))] px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-[color:rgba(var(--ni-primary-600))] focus:outline-none focus:ring-2 focus:ring-[color:rgba(var(--ni-primary-500))] focus:ring-offset-2 duration-300">Post</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('internalScript')

@endsection