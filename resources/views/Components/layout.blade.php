<div class="hidden md:flex items-center gap-4  md:flex-col md:flex-grow-1">
    <x-header/>
</div>

<div class="flex flex-col flex-grow-1 md:hidden">
    <x-headerMobile/>
</div>

{{$slot}}

<x-footer/>