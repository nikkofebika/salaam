@if ($paginator->hasPages())
<div class="blog-pagination mt-5">
    <ul class="justify-content-center">
        @if (!$paginator->onFirstPage())
            <li class=""><a class="" href="{{ \Request::url() }}">First</a></li>
            <li class=""><a class="" href="{{ $paginator->previousPageUrl() }}">&lsaquo;&lsaquo;</a></li>
        @endif

        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="disabled">{{ $element }}</li>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active"><a href="javascript:void(0)">{{ $page }}</a></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if ($paginator->hasMorePages())
            <li class=""><a class="" href="{{ $paginator->nextPageUrl() }}" rel="next">&rsaquo;&rsaquo;</a></li>
            <li class=""><a class="" href="{{ \Request::url().'?page='.$paginator->lastPage() }}" rel="next">Last</a></li>
        @endif
    </ul>
</div>
@endif

