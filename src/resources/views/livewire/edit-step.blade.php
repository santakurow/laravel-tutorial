<div>
  <div class="flex justify-center pb-4 px-4">
    <h2 class="text-lg">Add Steps for task</h2>
    <span wire:click="increment" class="fas fa-plus px-2 py-1 cursor-pointer" />
  </div>

  @foreach($steps as $step)
  <div class="flex justify-center py-2" wire:key="{{$loop->index}}">
    <input type="text" name="stepName[]" class="py-1 px-2 border rounded" placeholder="Describe Step {{$loop->index + 1}}" @if(is_array($step)) value="{{$step['name']}}" @endif />
    <input type="hidden" name="stepId[]" @if(is_array($step)) value="{{$step['id']}}" @endif />
    <span class="fas fa-times text-red-400 p-2" wire:click="remove({{$loop->index}})" />
  </div>
  @endforeach
</div>
