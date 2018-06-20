{"filter":false,"title":"index.blade.php","tooltip":"/message-board/resources/views/messages/index.blade.php","undoManager":{"mark":10,"position":10,"stack":[[{"start":{"row":9,"column":10},"end":{"row":11,"column":23},"action":"remove","lines":[" @foreach ($messages as $message)","                <li>{!! link_to_route('messages.show', $message->id, ['id' => $message->id]) !!} : {{ $message->content }}</li>","            @endforeach"],"id":2}],[{"start":{"row":9,"column":10},"end":{"row":11,"column":23},"action":"insert","lines":[" @foreach ($messages as $message)","                <li>{!! link_to_route('messages.show', $message->id, ['id' => $message->id]) !!} : {{ $message->title }} > {{ $message->content }}</li>","            @endforeach"],"id":3}],[{"start":{"row":13,"column":10},"end":{"row":13,"column":11},"action":"remove","lines":[" "],"id":4},{"start":{"row":13,"column":9},"end":{"row":13,"column":10},"action":"remove","lines":[" "]},{"start":{"row":13,"column":8},"end":{"row":13,"column":9},"action":"remove","lines":[" "]},{"start":{"row":13,"column":4},"end":{"row":13,"column":8},"action":"remove","lines":["    "]},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"remove","lines":["    "]},{"start":{"row":12,"column":12},"end":{"row":13,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":12,"column":8},"end":{"row":12,"column":12},"action":"remove","lines":["    "],"id":5},{"start":{"row":12,"column":4},"end":{"row":12,"column":8},"action":"remove","lines":["    "]},{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"remove","lines":["    "]},{"start":{"row":11,"column":23},"end":{"row":12,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":13,"column":5},"end":{"row":13,"column":10},"action":"remove","lines":["endif"],"id":6},{"start":{"row":13,"column":5},"end":{"row":14,"column":0},"action":"insert","lines":["",""]},{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"remove","lines":["    "],"id":7},{"start":{"row":13,"column":5},"end":{"row":14,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":13,"column":5},"end":{"row":14,"column":0},"action":"insert","lines":["",""],"id":8},{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"insert","lines":["    "]},{"start":{"row":14,"column":4},"end":{"row":15,"column":0},"action":"insert","lines":["",""]},{"start":{"row":15,"column":0},"end":{"row":15,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":15,"column":4},"end":{"row":34,"column":10},"action":"insert","lines":["@if (count($messages) > 0)","        <table class=\"table table-striped\">","            <thead>","                <tr>","                    <th>id</th>","                    <th>タイトル</th>","                    <th>メッセージ</th>","                </tr>","            </thead>","            <tbody>","                @foreach ($messages as $message)","                    <tr>","                        <td>{!! link_to_route('messages.show', $message->id, ['id' => $message->id]) !!}</td>","                        <td>{{ $message->title }}</td>","                        <td>{{ $message->content }}</td>","                    </tr>","                @endforeach","            </tbody>","        </table>","    @endif"],"id":9}],[{"start":{"row":7,"column":3},"end":{"row":13,"column":5},"action":"remove","lines":[" @if (count($messages) > 0)","        <ul>","           @foreach ($messages as $message)","                <li>{!! link_to_route('messages.show', $message->id, ['id' => $message->id]) !!} : {{ $message->title }} > {{ $message->content }}</li>","            @endforeach","        </ul>","    @"],"id":10},{"start":{"row":7,"column":2},"end":{"row":7,"column":3},"action":"remove","lines":[" "]},{"start":{"row":7,"column":1},"end":{"row":7,"column":2},"action":"remove","lines":[" "]},{"start":{"row":7,"column":0},"end":{"row":7,"column":1},"action":"remove","lines":[" "]},{"start":{"row":6,"column":0},"end":{"row":7,"column":0},"action":"remove","lines":["",""]},{"start":{"row":5,"column":16},"end":{"row":6,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":27,"column":4},"end":{"row":27,"column":58},"action":"remove","lines":["{!! link_to_route('messages.create', '新規メッセージの投稿') !!}"],"id":11}],[{"start":{"row":27,"column":4},"end":{"row":27,"column":98},"action":"insert","lines":["  {!! link_to_route('messages.create', '新規メッセージの投稿', null, ['class' => 'btn btn-primary']) !!}"],"id":12}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":24,"column":20},"end":{"row":24,"column":20},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1527826483454,"hash":"5d1ac832c75aeb0b3dc3b53ac5feccff0077fbcf"}