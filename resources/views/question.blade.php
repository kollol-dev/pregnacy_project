@extends('layouts.main.app')

@section('stylesheets')

@endsection

@section('content')

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Questions</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Questions <i
                                class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                @foreach ($questions as $key => $blog)

                    <div class="col-md-4 ftco-animate">
                        <div class="blog-entry">
                            <a href="/questions/single/{{ $blog->id }}" class="block-20"
                                style="background-image: url('{{ $key % 2 == 0 ? 'images/pregnant_background.jpg' : 'images/pregnant_background2.jpg' }}');">
                                <div class="meta-date text-center p-2">
                                    @php
                                        $date = new DateTime($blog->created_at);
                                    @endphp
                                    <span class="day">{{ $date->format('d') }}</span>
                                    <span class="mos">{{ $date->format('M') }}</span>
                                    <span class="yr">{{ $date->format('Y') }}</span>
                                </div>
                            </a>
                            <div class="text bg-white p-4">
                                <h3 class="heading"><a href="/questions/single/{{ $blog->id }}">{{ $blog->title }}</a>
                                </h3>
                                <p>{{ strlen($blog->description) > 200 ? substr($blog->description, 0, 200) . '...' : $blog->description }}
                                </p>
                                <div class="d-flex align-items-center mt-4">
                                    <p class="mb-0"><a href="/questions/single/{{ $blog->id }}"
                                            class="btn btn-primary">Read More <span
                                                class="ion-ios-arrow-round-forward"></span></a></p>
                                    <p class="ml-auto mb-0">
                                        <a href="#"
                                            class="mr-2">{{ isset($blog->user) ? $blog->user->name : 'Patient' }}</a>
                                        <a href="#" class="meta-chat"></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row no-gutters my-5">
                <div class="col text-center">
                    <div class="block-27">
                        {{-- {{ $questions->links() }} --}}

                        @if ($questions->hasPages())
                            <ul class="pagination pagination">
                                {{-- Previous Page Link --}}
                                @if ($questions->onFirstPage())
                                    <li class="disabled"><span>«</span></li>
                                @else
                                    <li><a href="{{ $questions->previousPageUrl() }}" rel="prev">«</a></li>
                                @endif

                                @if ($questions->currentPage() > 3)
                                    <li class="hidden-xs"><a href="{{ $questions->url(1) }}">1</a></li>
                                @endif
                                @if ($questions->currentPage() > 4)
                                    <li><span>...</span></li>
                                @endif
                                @foreach (range(1, $questions->lastPage()) as $i)
                                    @if ($i >= $questions->currentPage() - 2 && $i <= $questions->currentPage() + 2)
                                        @if ($i == $questions->currentPage())
                                            <li class="active"><span>{{ $i }}</span></li>
                                        @else
                                            <li><a href="{{ $questions->url($i) }}">{{ $i }}</a></li>
                                        @endif
                                    @endif
                                @endforeach
                                @if ($questions->currentPage() < $questions->lastPage() - 3)
                                    <li><span>...</span></li>
                                @endif
                                @if ($questions->currentPage() < $questions->lastPage() - 2)
                                    <li class="hidden-xs"><a
                                            href="{{ $questions->url($questions->lastPage()) }}">{{ $questions->lastPage() }}</a>
                                    </li>
                                @endif

                                {{-- Next Page Link --}}
                                @if ($questions->hasMorePages())
                                    <li><a href="{{ $questions->nextPageUrl() }}" rel="next">»</a></li>
                                @else
                                    <li class="disabled"><span>»</span></li>
                                @endif
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@section('scripts')

@endsection
