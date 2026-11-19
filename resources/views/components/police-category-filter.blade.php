@foreach (\App\Models\Police::CATEGORIES as $category)
<label style="display:block;font-size:13px;margin-bottom:5px;">
    <input type="checkbox" name="policeCategory" value="{{ $category }}">
    {{ $category }} (<span id="count-{{ str_replace(' ', '-', $category) }}">0</span>)
</label>
@endforeach
