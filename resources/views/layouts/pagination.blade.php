@if ($paginator->hasPages())

    <div class="pagination-box">
    <div>

        <ul class="pagination">


            @if ($paginator->onFirstPage())
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">Previous</a>
                </li>
{{--                <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">← Previous</a></li>--}}
            @endif
                @foreach ($elements as $element)

                    @if (is_string($element))
                        <li class="disabled"><span>{{ $element }}</span></li>
                    @endif



                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
{{--                                <li class="active my-active"><span></span></li>--}}
                                    <li class="page-item active">
                                        <a class="page-link" href="#">{{ $page }} <span class="sr-only">(current)</span></a>
                                    </li>
                            @else
{{--                                <li><a href="{{ $url }}">{{ $page }}</a></li>--}}
                                    <li class="page-item"><a class="page-link" href="{{ $url }}">{{$page}}</a></li>

                                @endif
                        @endforeach
                    @endif
                @endforeach

                @if ($paginator->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $paginator->nextPageUrl() }}">Next</a>
                    </li>
{{--                    <li><a href="" rel="next">Next →</a></li>--}}
                @else
                    <li class="page-item">
                        <a class="page-link disabled" href="#">Next</a>
                    </li>
                @endif

        </ul>
    </div>
</div>
@endif
