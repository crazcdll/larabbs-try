@if(count($topics))
    <ul class="media-list">
        @foreach($topics as $topic)
            <li class="media">
                <div class="media-left">
                    <a href="{{ route('users.show', [$topic->user_id]) }}">
                        <img class="media-object img-thumbnail" style="width:52px;height:52px;"
                             src="{{ $topic->user->avatar }}" title="{{ $topic->user->name }}">
                    </a>
                </div>
                <div class="media-body">

                    <div class="media-heading">
                        <a href="{{ route('topics.show', [$topic->id]) }}" title="{{ $topic->title }}">
                            {{ $topic->title }}
                        </a>
                        <a class="pull-right" href="{{ route('topics.show', [$topic->id]) }}">
                            <span class="badge">{{ $topic->reply_count }}</span>
                        </a>
                    </div>

                    <div class="media-body meta">

                        <a href="#" title="{{ $topic->category->name }}">
                            <span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
                            {{ $topic->category->name }}
                        </a>

                        <span> • </span>
                        <a href="{{ route('users.show', [$topic->user_id]) }}" title="{{ $topic->user->name }}">
                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                            {{ $topic->user->name }}
                        </a>
                        <span> • </span>
                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                        <span class="timeago" title="最后活跃于">{{ $topic->updated_at->diffForHumans() }}</span>
                    </div>
                </div>
            </li>
            @if(!$loop->last)
                <hr>
            @endif
        @endforeach
        {{--<tr>--}}
            {{--<td class="text-center"><strong>{{$topic->id}}</strong></td>--}}

            {{--<td>{{$topic->title}}</td>--}}
            {{--<td>{{$topic->body}}</td>--}}
            {{--<td>{{$topic->user_id}}</td>--}}
            {{--<td>{{$topic->category_id}}</td>--}}
            {{--<td>{{$topic->reply_count}}</td>--}}
            {{--<td>{{$topic->view_count}}</td>--}}
            {{--<td>{{$topic->last_reply_user_id}}</td>--}}
            {{--<td>{{$topic->order}}</td>--}}
            {{--<td>{{$topic->excerpt}}</td>--}}
            {{--<td>{{$topic->slug}}</td>--}}

            {{--<td class="text-right">--}}
                {{--<a class="btn btn-xs btn-primary" href="{{ route('topics.show', $topic->id) }}">--}}
                    {{--<i class="glyphicon glyphicon-eye-open"></i>--}}
                {{--</a>--}}

                {{--<a class="btn btn-xs btn-warning" href="{{ route('topics.edit', $topic->id) }}">--}}
                    {{--<i class="glyphicon glyphicon-edit"></i>--}}
                {{--</a>--}}

                {{--<form action="{{ route('topics.destroy', $topic->id) }}" method="POST" style="display: inline;"--}}
                      {{--onsubmit="return confirm('Delete? Are you sure?');">--}}
                    {{--{{csrf_field()}}--}}
                    {{--<input type="hidden" name="_method" value="DELETE">--}}

                    {{--<button type="submit" class="btn btn-xs btn-danger"><i--}}
                                {{--class="glyphicon glyphicon-trash"></i>--}}
                    {{--</button>--}}
                {{--</form>--}}
            {{--</td>--}}
        {{--</tr>--}}
        {{--@endforeach--}}
    </ul>

@else
    <div class="empty-block">暂无数据 ~_~</div>
@endif