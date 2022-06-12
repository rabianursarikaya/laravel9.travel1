<div>

    <input wire:model="search" list="mylist" class="search-form" type="text" name="search" placeholder="Burada Ara..." style="height: 28px;"/>
    @if(!empty($query))
        <datalist id="mylist">
            @foreach($datalist as $rs)
                <option value="{{$rs->title}}">{{$rs->category->title}}</option>
            @endforeach
        </datalist>
    @endif
    <button class="btn btn-dark" type="submit">Ara</button>


</div>
