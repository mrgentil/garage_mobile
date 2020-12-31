<div class="comment-form-wrap">
    <h5 class="reply-title">Poster un commentaire</h5>
    <div class="form-area">
        @if($errors->has('commentable_type'))
            <div class="alert alert-danger" role="alert">
                {{ $errors->get('commentable_type') }}
            </div>
        @endif
        @if($errors->has('commentable_id'))
            <div class="alert alert-danger" role="alert">
                {{ $errors->get('commentable_id') }}
            </div>
        @endif
        <form method="POST" action="{{ route('comments.store') }}">
            @csrf
            @honeypot
            <input type="hidden" name="commentable_type" value="\{{ get_class($model) }}" />
            <input type="hidden" name="commentable_id" value="{{ $model->id }}" />

            <div class="form-group">
                <div class="row">
                    {{-- Guest commenting --}}
                    @if(isset($guest_commenting) and $guest_commenting == true)
                        <div class="col-lg-6">
                            <input type="text" placeholder="Nom"
                                   class="form-control @if($errors->has('guest_name')) is-invalid @endif" name="guest_name">
                            @error('guest_name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <input type="email" placeholder="Email"
                               class="form-control @if($errors->has('guest_email')) is-invalid @endif" name="guest_email">
                            @error('guest_email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <textarea class="form-control @if($errors->has('message')) is-invalid @endif" name="message"  placeholder="Votre commenataire" rows="3"></textarea>
                            <div class="invalid-feedback">
                                Your message is required.
                            </div>
                            <small class="form-text text-muted"><a target="_blank" href="https://help.github.com/articles/basic-writing-and-formatting-syntax">Markdown</a> cheatsheet.</small>
                        </div>
                    @else
                        <div class="col-lg-12">
                            <textarea class="form-control @if($errors->has('message')) is-invalid @endif" name="message"  placeholder="Votre commenataire" rows="3" cols="50"></textarea>
                            <div class="invalid-feedback">
                                Your message is required.
                            </div>
                            <small class="form-text text-muted"><a target="_blank" href="https://help.github.com/articles/basic-writing-and-formatting-syntax">Markdown</a> cheatsheet.</small>
                        </div>
                    @endif

                    <div class="col-lg-6">
                        <div class="main-btn-wrap">
                            <input class="main-btn  black" type="submit" value="Submit">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!--// Form Area-->
</div>

