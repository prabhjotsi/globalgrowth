<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ __('*Name') }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($testimonial->name) ? $testimonial->name : old('name')}}">

    {!! $errors->first('name', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('position') ? 'has-error' : ''}}">
    <label for="position" class="control-label">{{ __('*Position') }}</label>
    <input class="form-control" name="position" type="text" id="position" value="{{ isset($testimonial->position) ? $testimonial->position : old('position')}}">

    {!! $errors->first('position', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label">{{ __('*Description') }}</label>
    <textarea class="form-control" rows="5" name="description" type="textarea" id="description" >{{ isset($testimonial->description) ? $testimonial->description : old('description')}}</textarea>

    {!! $errors->first('description', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
    <label for="image" class="control-label">{{ __('Image') }}</label>
    <input class="form-control" name="image" type="file" id="image">

    {!! $errors->first('image', '<p class="help-block text-danger">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
