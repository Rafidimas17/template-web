
{{-- <link rel="stylesheet" href="{{ asset('assets/css/form/input-text.css') }}"> --}}

<div class="form-group">
    <input 
        type="{{ $type }}" 
        name="{{ $name }}" 
        value="{{ $value }}" 
        placeholder="{{ $placeholder }}" 
        id="{{ $id }}" 
        class="{{ $class }}" 
        oninput="toggleRequiredMessage(this)"
    />
    
    <!-- Conditionally display the "*required" message if value is null or empty -->
    <small class="text-danger required-message" style="{{ !empty($value) ? 'display: none;' : '' }}">*required</small>
</div>

<script>
function toggleRequiredMessage(input) {
    const message = input.parentElement.querySelector('.required-message');
    if (input.value.trim() !== '') {
        message.style.display = 'none';
    } else {
        message.style.display = 'block';
    }
}
</script>