@if($type === 'link')
    <button type="button" onclick="{{ $onclick }}" class="btn {{ $class }}">
        <a {{ $attributes }} href="{{ $link }}" class="{{ $class }}" id="{{ $id }}" target="{{ $target}}">
            @if($iconClass)
                <i class="{{ $iconClass }}"></i>
            @endif
            {{ $title }}
        </a>
    </button>
@elseif($type === 'submit')
    <button type="submit" onclick="{{ $onclick }}" {{ $attributes }} class="btn {{ $class }}">
        @if($iconClass)
            <i class="{{ $iconClass }}"></i>
        @endif
        {{ $title }}
    </button>
@else
    <button type="{{ $type }}" onclick="{{ $onclick }}" {{ $attributes }} class="btn {{ $class }}">
        @if($iconClass)
            <i class="{{ $iconClass }}"></i>
        @endif
        {{ $title }}
    </button>
@endif
