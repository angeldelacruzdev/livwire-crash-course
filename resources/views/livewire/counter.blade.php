<div>
    {{-- Success is as dangerous as failure. --}}
    <p>
        {{$count}}
    </p>
    <input type="number" wire:model.live="count" />
    <button wire:click="changeCount()">Click</button>
</div>
