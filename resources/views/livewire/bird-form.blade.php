<div>
    <form wire:submit="submit">
        <p>
            <input wire:model="bird_count" type="number"/>
        </p>
        <p><textarea wire:model="notes"></textarea></p>
        <button type="submit"> Add a New Bird Count Entry</button>

    </form>
    @if($errors->any())
        <div>
            @foreach($errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach
        </div>
    @endif
    <div style="margin-top: 20px;">

        <table >
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Count</th>
                    <th>Note Descriotion</th>
                </tr>
            </thead>
            <tbody>
                @foreach($entries as $entry)

                    <tr>
                        <td>{{$entry->id}}</td>
                        <td>{{$entry->bird_count}}</td>
                        <td>{{$entry->notes}}</td>
                    </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>


