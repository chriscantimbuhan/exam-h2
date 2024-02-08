<div class="border border-2 p-3 m-2">
    <label class="form-label">{{ $index + 1 }}. {{ $records[$index]->question ?? '' }}</label>

    @foreach ($records[$index]->choices ?? [] as $choice)
        <x-radio-button
            :value="$choice->weight"
            :label="strtoupper($choice->weight).'. '.$choice->details"
            :name="$index + 1" />
    @endforeach

</div>
