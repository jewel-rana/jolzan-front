@extends('dashboard::layouts.master')
@section('content')
    <!-- Basic Vertical form layout section start -->
    <section id="basic-vertical-layouts">
        <form method="POST" action="{{ route('features.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-9 col-12">
                    <div class="card">
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="title">Title <span class="error">*</span></label>
                                        <input type="text" id="title" class="form-control" name="title"
                                               value="{{ old('title') }}" placeholder="Page title" required/>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="email-id-vertical">Description</label>
                                        <textarea id="email-id-vertical" class="form-control editor" rows="10"
                                                  name="description"
                                                  placeholder="Description">{{ old('description') }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Attributes</h4>
                        </div>
                        <div class="card-body">
                            <div class="invoice-repeater">
                                <div data-repeater-list="attribute">
                                    @if(old('attribute'))
                                        @foreach(old('attribute') as $attribute)
                                            <div data-repeater-item>
                                                <div class="row d-flex align-items-end">
                                                    <div class="col-md-4 col-12">
                                                        <div class="form-group">
                                                            <label for="itemname">Label</label>
                                                            <input type="text" class="form-control" name="label"
                                                                   id="itemname" value="{{ $attribute['label'] }}" aria-describedby="itemname"
                                                                   placeholder="Label"/>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="itemvalue">Value</label>
                                                            <textarea class="form-control" name="value"
                                                                      id="itemvalue" value="{{ $attribute['value'] }}" aria-describedby="itemvalue"
                                                                      placeholder="Value"></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-1 col-12 mb-50">
                                                        <div class="form-group">
                                                            <button class="btn btn-outline-danger text-nowrap px-1"
                                                                    data-repeater-delete type="button">
                                                                <i data-feather="x" class="mr-25"></i>
                                                                <span>Delete</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr/>
                                            </div>
                                        @endforeach
                                    @else
                                        <div data-repeater-item>
                                            <div class="row d-flex align-items-end">
                                                <div class="col-md-4 col-12">
                                                    <div class="form-group">
                                                        <label for="itemname">Label</label>
                                                        <input type="text" class="form-control" name="label"
                                                               id="itemname" aria-describedby="itemname"
                                                               placeholder="Label"/>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="itemvalue">Value</label>
                                                        <textarea class="form-control" name="value"
                                                                  id="itemvalue" aria-describedby="itemvalue"
                                                                  placeholder="Value"></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-md-1 col-12 mb-50">
                                                    <div class="form-group">
                                                        <button class="btn btn-outline-danger text-nowrap px-1"
                                                                data-repeater-delete type="button">
                                                            <i data-feather="x" class="mr-25"></i>
                                                            <span>Delete</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr/>
                                        </div>
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <button class="btn btn-icon btn-primary" type="button" data-repeater-create>
                                            <i data-feather="plus" class="mr-25"></i>
                                            <span>{{ __('Add New') }}</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="status">External Link</label>
                                <input type="text" class="form-control" name="external_link" value="{{ old('external_link') }}">
                            </div>

                            <div class="form-group">
                                <label for="type">{{ __('Type') }}</label>
                                <select id="type" class="form-control" name="type" required>
                                    <option value="">{{ __('Select type') }}</option>
                                    @foreach(config('constants.feature_types') as $key => $value)
                                        <option value="{{"$key"}}" @if(old('type') == $key) selected @endif>{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <button type="submit"
                                        class="btn btn-primary form-control mr-1">{{ __('Create featue') }}</button>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="media">Upload Image</label>
                                <input type="file" name="attachment" multiple id="media" class="form-control-file" required/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
@section('header')
    <link rel="stylesheet" type="text/css"
          href="{{ asset('assets/admin/css/vendors/css/forms/wizard/bs-stepper.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/plugins/forms/form-wizard.css') }}">
@endsection
@section('footer')
    <script src="{{ asset('assets/admin/js/vendors/js/forms/wizard/bs-stepper.min.j') }}s"></script>
    <script src="{{ asset('assets/admin/js/scripts/forms/form-wizard.js') }}"></script>
    <script src="{{ asset('assets/admin/js/vendors/js/forms/repeater/jquery.repeater.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/scripts/forms/form-repeater.js') }}"></script>
    <script src="https://cdn.tiny.cloud/1/idal2zwhxlnk67o4lcz5xb5csdu88xw9f1delibgnh1gihmh/tinymce/5/tinymce.min.js"
            referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea.editor',
            height: 500,
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount'
            ],
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
        });
    </script>
@endsection
