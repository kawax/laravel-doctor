<div>
    <div class="py-6 text-lg text-center tracking-widest">Laravelプロジェクトの健全性調査</div>

    <table class="table-auto">
        <thead>
        <tr>
            <th>質問</th>
            <th class="px-3">はい</th>
            <th class="px-3">どちらでもない</th>
            <th class="px-3">いいえ</th>
        </tr>
        </thead>
        <tbody>
        @foreach($questions as $question)
            <tr>
                <td class="text-center px-6 py-3">
                    {{ $question['question'] }}
                </td>
                <td class="text-center">
                    <label>
                        <x-input type="radio"
                                 name="{{ $loop->index }}"
                                 wire:click="checked({{ $loop->index }}, {{ $question['yes'] ?? 0 }})">
                        </x-input>
                    </label>
                </td>
                <td class="text-center">
                    <label>
                        <x-input type="radio"
                                 name="{{ $loop->index }}"
                                 wire:click="checked({{ $loop->index }}, {{ $question['neither'] ?? 0 }})"></x-input>
                    </label>
                </td>
                <td class="text-center">
                    <label>
                        <x-input type="radio"
                                 name="{{ $loop->index }}"
                                 wire:click="checked({{ $loop->index }}, {{ $question['no'] ?? 0 }})"></x-input>
                    </label>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    @if($result)
        <div class="font-bold text-lg text-center">
            <div class="text-white bg-red-500 rounded-t">判定</div>
            <div class="bg-gray-100 rounded-b">
                {{ $result ?? '' }}
                @env('local')
                    {{ $score }}
                @endenv
            </div>
        </div>
    @endif

</div>
