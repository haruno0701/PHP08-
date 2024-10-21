@extends('layouts.profile')
@section('title', 'MyProfile2')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>Myプロフィール画面</h2>
                <form action="{{ route('admin.profile.edit') }}" method="post" enctype="multipart/form-data">

                </form>
            </div>
        </div>
    </div>
@endsection
