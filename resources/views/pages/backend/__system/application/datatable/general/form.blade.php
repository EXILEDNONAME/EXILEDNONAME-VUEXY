<div class="mb-3 row">
  <label class="col-md-3 col-form-label"> Name </label>
  <div class="col-md-9">
    {{ Html::search('name', (isset($data->name) ? $data->name : ''))->class([ $errors->has('name') ? 'form-control is-invalid' : 'form-control'])->required() }}
    @error('name') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>
<div class="mb-3 row">
  <label class="col-md-3 col-form-label"> Description </label>
  <div class="col-md-9">
    {{ Html::textarea('description', (isset($data->description) ? $data->description : ''))->class([ $errors->has('description') ? 'form-control is-invalid' : 'form-control', ])->rows('3')->id('exilednoname-autosize') }}
    @error('description') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>
