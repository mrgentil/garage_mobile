@inject('markdown', 'Parsedown')
@php($markdown->setSafeMode(true))

@if(isset($reply) && $reply === true)
    <ul class="children">
        <li id="comment-{{ $comment->id }}">
@else
    <li id="comment-{{ $comment->id }}">
@endif
<!-- single comment wrap -->
    <div class="single-comment-wrap padding-40">
        <div class="thumb">
            <img src="https://www.gravatar.com/avatar/{{ md5($comment->commenter->email ?? $comment->guest_email) }}.jpg?s=64" alt="{{ $comment->commenter->name ?? $comment->guest_name }} Avatar">
        </div>
        <div class="content bg-none">
            <div class="title-area">
                <h5 class="title">{{ $comment->commenter->name ?? $comment->guest_name }}</h5>
                <span class="date">{{ $comment->created_at->diffForHumans() }}</span>
            </div>
            <p>
                {!! $markdown->line($comment->comment) !!}
            </p>

            <div class="reply">
                <div style="display: flex;">
                    @can('reply-to-comment', $comment)
                       {{-- <button data-toggle="modal" data-target="#reply-modal-{{ $comment->id }}" class="btn btn-sm btn-link text-uppercase">Reply</button>--}}
                        <a href="#" data-toggle="modal" data-target="#reply-modal-{{ $comment->id }}"> Réagir</a>
                    @endcan
                    @can('edit-comment', $comment)
                        <a href="#" data-toggle="modal" data-target="#comment-modal-{{ $comment->id }}" style="margin-right: 10px;">Editer</a>
                    @endcan
                    @can('delete-comment', $comment)
                        <a href="{{ route('comments.destroy', $comment->id) }}" onclick="event.preventDefault();document.getElementById('comment-delete-form-{{ $comment->id }}').submit();">Supprimer</a>
                        <form id="comment-delete-form-{{ $comment->id }}" action="{{ route('comments.destroy', $comment->id) }}" method="POST" style="display: none;">
                            @method('DELETE')
                            @csrf
                        </form>
                    @endcan
                </div>
            </div>
        </div>
    </div><!-- // single comment wrap -->

        @can('edit-comment', $comment)
            <div class="modal fade" id="comment-modal-{{ $comment->id }}" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form method="POST" action="{{ route('comments.update', $comment->id) }}">
                            @method('PUT')
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title">Editer un Commentaire</h5>
                                <button type="button" class="close" data-dismiss="modal">
                                <span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="message">Entrez votre commentaire ici:</label>
                                    <textarea required class="form-control" name="message" rows="3">{{ $comment->comment }}</textarea>
                                    <small class="form-text text-muted"><a target="_blank" href="https://help.github.com/articles/basic-writing-and-formatting-syntax">Markdown</a> cheatsheet.</small>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="main-btn-wrap">
                                    <button type="button" class="main-btn black-border" data-dismiss="modal">Annuler</button>
                                    <button type="submit" class="main-btn black">Mise à jour</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endcan

        @can('reply-to-comment', $comment)
            <div class="modal fade" id="reply-modal-{{ $comment->id }}" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form method="POST" action="{{ route('comments.reply', $comment->id) }}">
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title">Répondre à ce commentaire</h5>
                                <button type="button" class="close" data-dismiss="modal">
                                <span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="message">Entrez votre commentaire ici:</label>
                                    <textarea required class="form-control" name="message" rows="3"></textarea>
                                    <small class="form-text text-muted"><a target="_blank" href="https://help.github.com/articles/basic-writing-and-formatting-syntax">Markdown</a> cheatsheet.</small>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="main-btn-wrap">
                                    <button type="button" class="main-btn black-border" data-dismiss="modal">Annuler</button>
                                    <button type="submit" class="main-btn black">Répondre</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endcan


        {{-- Recursion for children --}}
        @if($grouped_comments->has($comment->id))
            @foreach($grouped_comments[$comment->id] as $child)
                @include('comments::_comment', [
                    'comment' => $child,
                    'reply' => true,
                    'grouped_comments' => $grouped_comments
                ])
            @endforeach
        @endif
@if(isset($reply) && $reply === true)
        </li>
    </ul>
@else
  </li>
@endif
