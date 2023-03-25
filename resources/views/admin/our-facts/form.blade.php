<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ __('Title') }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($ourfact->title) ? $ourfact->title : old('title')}}">

    {!! $errors->first('title', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('number') ? 'has-error' : ''}}">
    <label for="number" class="control-label">{{ __('Number') }}</label>
    <input class="form-control" name="number" type="text" id="number" value="{{ isset($ourfact->number) ? $ourfact->number : old('number')}}">

    {!! $errors->first('number', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
    <label for="image" class="control-label">{{ __('Image') }}</label>
    <input class="form-control" name="image" type="file" id="image" >

    {!! $errors->first('image', '<p class="help-block text-danger">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
