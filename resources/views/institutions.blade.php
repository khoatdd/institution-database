@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Tên trường</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($institutions as $institution)
                <tr>
                    <td><a href="/institution/{{ $institution->id }}/sars">{{ $institution->name }}</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pull-right">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add-new-institution">Add
                new
            </button>
        </div>
    </div>
    <div id="add-new-institution" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" arial-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Add new</h4>
                </div>
                <form id="form-add-new-institution" action="/institution/addNew" method="post" accept-charset="utf-8">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="VN_full_name">Nhập tên đầy đủ của trường</label>
                            <input type="text" class="form-control" name="VN_full_name" value="{{ old('VN_full_name') }}">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <input type="submit" class="btn btn-primary" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop