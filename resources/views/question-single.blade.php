@extends('layouts.main.app')

@section('stylesheets')

@endsection

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-2 bread">Questioned asked by patients</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ftco-animate">
                <h2 class="mb-3">#{{ $question->id }}. {{ $question->title }}</h2>

                <p>{{ $question->detailed_question }}</p>
                <div class="about-author d-flex p-4 bg-light">
                    <div class="bio mr-5">
                        <img src="/images/male.jpg" alt="Image placeholder" class="img-fluid mb-4">
                    </div>
                    <div class="desc">
                        <h3>{{ $question->user->name }}</h3>
                        <div class="meta mb-2">{{ $question->created_at }}</div>
                    </div>
                </div>


                <div class="pt-5 mt-5">
                    <h3 class="mb-5 h4 font-weight-bold">{{ $question->comments_count }} Comments</h3>
                    <ul class="comment-list">
                        @if ($question->comments_count > 0)

                        @foreach ($question->comments as $comment)
                        <li class="comment">
                            <div class="vcard bio">
                                <img src="/images/male.jpg" alt="Image placeholder">
                            </div>
                            <div class="comment-body">
                                <h3>{{ $comment->user->name }}</h3>
                                <div class="meta mb-2">{{ $comment->created_at }}</div>
                                <p>{{ $comment->comment }}</p>
                            </div>

                            <!-- <ul class="children">
                      <li class="comment">
                        <div class="vcard bio">
                          <img src="images/male.jpg" alt="Image placeholder">
                        </div>
                        <div class="comment-body">
                          <h3>John Doe</h3>
                          <div class="meta mb-2">January 03, 2019 at 2:21pm</div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                          <p><a href="#" class="reply">Reply</a></p>
                        </div>


                        <ul class="children">
                          <li class="comment">
                            <div class="vcard bio">
                              <img src="images/male.jpg" alt="Image placeholder">
                            </div>
                            <div class="comment-body">
                              <h3>John Doe</h3>
                              <div class="meta mb-2">January 03, 2019 at 2:21pm</div>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                              <p><a href="#" class="reply">Reply</a></p>
                            </div>

                            <ul class="children">
                              <li class="comment">
                                <div class="vcard bio">
                                  <img src="images/male.jpg" alt="Image placeholder">
                                </div>
                                <div class="comment-body">
                                  <h3>John Doe</h3>
                                  <div class="meta mb-2">January 03, 2019 at 2:21pm</div>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                  <p><a href="#" class="reply">Reply</a></p>
                                </div>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                    </ul> -->
                        </li>
                        @endforeach
                        @endif
                    </ul>
                    <!-- END comment-list -->

                    @if (!Auth::check())
                    <div class="comment-form-wrap pt-5">
                        <div class="p-5 bg-light">
                            <a href="/login" class="form-group">
                                <h3 class="btn py-3 px-4 btn-primary mb-5 h4 font-weight-bold">Sign in to comment
                                </h3>
                            </a>
                        </div>
                    </div>
                    @else
                    <div class="comment-form-wrap pt-5">
                        <h3 class="mb-5 h4 font-weight-bold">Leave a comment</h3>
                        <form action="{{ Auth::user()->role == 'doctor' ? '/app/doctor/add/comment' : '/app/patient/add/comment' }}" method="post" class="p-5 bg-light">
                            @csrf
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea name="comment" id="message" cols="30" rows="10" class="form-control"></textarea>
                                <input name="question_id" value="{{ $question->id }}" style="display:none;">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                            </div>
                        </form>
                    </div>
                    @endif
                </div>
            </div> <!-- .col-md-8 -->

        </div>
    </div>
</section>


@endsection

@section('scripts')

@endsection