<div>
    <h1>Bookmarks</h1>
    <p>User: {{Auth::user()->name}}</p>
    <form  wire:submit="save">
        <input type="text" wire:model="name" />
        <input type="text"  wire:model="url" />
        <button type="submit">Save</button>
    </form>

    <div style="margin-top: 20px;">

        <table >
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Url</th>
                <th></th>
            </tr>
            </thead>
            <tbody  >
            @foreach(Auth::user()->bookmarks()->orderBy('id', 'DESC')->get() as $bookmark)
                <tr wire:key="{{ $bookmark->id}}" wire:transition>
                    <td>{{ $bookmark->id}}</td>
                    <td>{{ $bookmark->name}}</td>
                    <td>{{ $bookmark->url}}</td>
                    <td>
                        <button wire:click="delete({{ $bookmark->id}})">Delete</button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
