@extends('components.layouts.multiple')

@section('content')
    <section class="flex flex-col gap-10 px-5 pt-10">
        <h1 class="font-bold text-3xl">Visitor</h1>

        <div class="bg-white px-5 py-10 rounded-xl shadow-lg">
            <h2 class="font-semibold text-xl">Informasi Kouta</h2>
            <div></div>
        </div>

        <x-section.visit.visit-calendar :$information_kouta />
    </section>
@endsection
