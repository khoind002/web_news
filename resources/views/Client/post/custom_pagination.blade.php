@if ($paginator->hasPages())
    <nav class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="pagination__page pagination__page--current">&lsaquo;</span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="pagination__page">&lsaquo;</a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span class="pagination__page pagination__page--dots">{{ $element }}</span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="pagination__page pagination__page--current">{{ $page }}</span>
                    @else
                        <a href="{{ $url }}" class="pagination__page">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="pagination__page pagination__page--next"><i class="fa-solid fa-chevron-right fa-2xs"></i></a>
        @else
            <span class="pagination__page pagination__page--next">&rsaquo;</span>
        @endif
    </nav>
@endif