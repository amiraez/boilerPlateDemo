
@extends('backend.layouts.app')

@section('content')
    <!-- Your Page Content Here -->
    <form   method="post" class="form-group" action="{{url('create')}}">

        <div class="row">
            <div class="col-md-9">

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add Articales </h3>
                    </div>
                    <!-- /.box-header -->
                    <fieldset>

                        <div class="row">
                            <label  class="col-sm-3 control-label">Name</label>
                            <div class="col-xs-4">
                                <input type="text" class="form-control" name = "name" required>
                            </div>
                        </div>
                        <div class="row">
                            <label  class="col-sm-3 control-label">Text</label>
                            <div class="col-xs-4">
                                <input type="text" class="form-control" name = "articletext" required>
                            </div>
                        </div>
                    </fieldset>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary pull-right">Add</button>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>
@endsection
