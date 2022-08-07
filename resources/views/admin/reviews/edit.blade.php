@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.review.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.reviews.update", [$review->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="title">{{ trans('cruds.review.fields.title') }}</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', $review->title) }}" required>
                @if($errors->has('title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.review.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="gadget_name">{{ trans('cruds.review.fields.gadget_name') }}</label>
                <input class="form-control {{ $errors->has('gadget_name') ? 'is-invalid' : '' }}" type="text" name="gadget_name" id="gadget_name" value="{{ old('gadget_name', $review->gadget_name) }}" required>
                @if($errors->has('gadget_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('gadget_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.review.fields.gadget_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="overview_description">{{ trans('cruds.review.fields.overview_description') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('overview_description') ? 'is-invalid' : '' }}" name="overview_description" id="overview_description">{!! old('overview_description', $review->overview_description) !!}</textarea>
                @if($errors->has('overview_description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('overview_description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.review.fields.overview_description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="desain_description">{{ trans('cruds.review.fields.desain_description') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('desain_description') ? 'is-invalid' : '' }}" name="desain_description" id="desain_description">{!! old('desain_description', $review->desain_description) !!}</textarea>
                @if($errors->has('desain_description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('desain_description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.review.fields.desain_description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="performa_description">{{ trans('cruds.review.fields.performa_description') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('performa_description') ? 'is-invalid' : '' }}" name="performa_description" id="performa_description">{!! old('performa_description', $review->performa_description) !!}</textarea>
                @if($errors->has('performa_description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('performa_description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.review.fields.performa_description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="layar_description">{{ trans('cruds.review.fields.layar_description') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('layar_description') ? 'is-invalid' : '' }}" name="layar_description" id="layar_description">{!! old('layar_description', $review->layar_description) !!}</textarea>
                @if($errors->has('layar_description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('layar_description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.review.fields.layar_description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="baterai_description">{{ trans('cruds.review.fields.baterai_description') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('baterai_description') ? 'is-invalid' : '' }}" name="baterai_description" id="baterai_description">{!! old('baterai_description', $review->baterai_description) !!}</textarea>
                @if($errors->has('baterai_description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('baterai_description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.review.fields.baterai_description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="konektivitas_description">{{ trans('cruds.review.fields.konektivitas_description') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('konektivitas_description') ? 'is-invalid' : '' }}" name="konektivitas_description" id="konektivitas_description">{!! old('konektivitas_description', $review->konektivitas_description) !!}</textarea>
                @if($errors->has('konektivitas_description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('konektivitas_description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.review.fields.konektivitas_description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="kesimpulan">{{ trans('cruds.review.fields.kesimpulan') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('kesimpulan') ? 'is-invalid' : '' }}" name="kesimpulan" id="kesimpulan">{!! old('kesimpulan', $review->kesimpulan) !!}</textarea>
                @if($errors->has('kesimpulan'))
                    <div class="invalid-feedback">
                        {{ $errors->first('kesimpulan') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.review.fields.kesimpulan_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection

@section('scripts')
<script>
    $(document).ready(function () {
  function SimpleUploadAdapter(editor) {
    editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
      return {
        upload: function() {
          return loader.file
            .then(function (file) {
              return new Promise(function(resolve, reject) {
                // Init request
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '{{ route('admin.reviews.storeCKEditorImages') }}', true);
                xhr.setRequestHeader('x-csrf-token', window._token);
                xhr.setRequestHeader('Accept', 'application/json');
                xhr.responseType = 'json';

                // Init listeners
                var genericErrorText = `Couldn't upload file: ${ file.name }.`;
                xhr.addEventListener('error', function() { reject(genericErrorText) });
                xhr.addEventListener('abort', function() { reject() });
                xhr.addEventListener('load', function() {
                  var response = xhr.response;

                  if (!response || xhr.status !== 201) {
                    return reject(response && response.message ? `${genericErrorText}\n${xhr.status} ${response.message}` : `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`);
                  }

                  $('form').append('<input type="hidden" name="ck-media[]" value="' + response.id + '">');

                  resolve({ default: response.url });
                });

                if (xhr.upload) {
                  xhr.upload.addEventListener('progress', function(e) {
                    if (e.lengthComputable) {
                      loader.uploadTotal = e.total;
                      loader.uploaded = e.loaded;
                    }
                  });
                }

                // Send request
                var data = new FormData();
                data.append('upload', file);
                data.append('crud_id', '{{ $review->id ?? 0 }}');
                xhr.send(data);
              });
            })
        }
      };
    }
  }

  var allEditors = document.querySelectorAll('.ckeditor');
  for (var i = 0; i < allEditors.length; ++i) {
    ClassicEditor.create(
      allEditors[i], {
        extraPlugins: [SimpleUploadAdapter]
      }
    );
  }
});
</script>

@endsection