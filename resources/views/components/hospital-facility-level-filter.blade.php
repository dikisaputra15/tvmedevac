<label>Facility Level:</label>
@foreach (\App\Models\Hospital::FACILITY_LEVELS as $level)
<label style="display:block;font-size:13px;margin-bottom:5px;">
    <input type="checkbox" name="hospitalLevel" value="{{ $level }}">
    {{ $level }} (<span id="count-{{ preg_replace('/[^a-zA-Z0-9]/', '-', $level) }}">0</span>)
</label>
@endforeach
