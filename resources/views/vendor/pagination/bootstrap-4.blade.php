@if ($paginator->hasPages())
    <ul class="pagination justify-content-center" role="navigation">
        {{-- Previous Page Link --}}
{{--        @if ($paginator->onFirstPage())--}}
{{--            <li class="page-item disabled"  aria-disabled="true" aria-label="@lang('pagination.previous')">--}}
{{--                <span class="page-link" aria-hidden="true">Previous</span>--}}
{{--            </li>--}}
{{--        @else--}}
{{--            <li class="page-item">--}}
{{--                <a class="page-link" style="color: #82ae46" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">Previous</a>--}}
{{--            </li>--}}
{{--        @endif--}}

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-item disabled" aria-disabled="true"><span class="page-link" >{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active"  aria-current="page"><span class="page-link" style="background-color: #addc96; border: 1px solid #addc96">{{ $page }}</span></li>
                    @else
                        <li class="page-item"><a class="page-link" style="color: #82ae46"  href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
{{--        @if ($paginator->hasMorePages())--}}
{{--            <li class="page-item">--}}
{{--                <a class="page-link" style="color: #82ae46" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">Next</a>--}}
{{--            </li>--}}
{{--        @else--}}
{{--            <li class="page-item disabled"  aria-disabled="true" aria-label="@lang('pagination.next')">--}}
{{--                <span class="page-link" aria-hidden="true">Next</span>--}}
{{--            </li>--}}
{{--        @endif--}}
    </ul>
@endif


