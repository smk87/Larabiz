@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Edit Listing <a href="/dashboard" class="float-right btn btn-secondary btn-xs">Go
                    Back</a></div>

            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success " role="alert">
                    {{ session('status') }}
                    @endif
                    {!!Form::open(['action'=>['ListingsController@update',$listing->id],'method'=>'POST'])!!}
                    {{Form::bsText('name',$listing->name,['placeholder'=>'Company Name'])}}
                    {{Form::bsText('email',$listing->email,['placeholder'=>'Company Email'])}}
                    {{Form::bsText('phone',$listing->phone,['placeholder'=>'Company Phone'])}}
                    {{Form::bsText('website',$listing->website,['placeholder'=>'Company Website'])}}
                    {{Form::bsText('address',$listing->address,['placeholder'=>'Bussiness Address'])}}
                    {{Form::bsTextArea('bio',$listing->bio,['placeholder'=>'About This Bussiness'])}}
                    {{Form::hidden('_method','PUT')}}
                    {{Form::bsSubmit('Update',['class'=>'btn btn-primary'])}}
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
    @endsection
