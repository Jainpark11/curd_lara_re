@extends('layouts.master')

@section('content')
    <div class="main-content mt-5">
        <div class="card">
            <div class="card-header">
                <h4>글 작성</h4>
                <a class="btn btn-sm btn-success" href="">Back</a>
            </div>

            @if ($errors->any())
            @foreach ($errors->all() as $error )
            <div class="alert alert-danger">{{$error}}</div>
            @endforeach
            @endif
            <div class="card-body">
                <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="" class="form-label">이미지</label>
                        <input type="file" class="form-control" name="image">
                    </div>

                    <div class="form-group">
                        <label for="" class="form-label">제목</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">카테고리</label>
                        <select id="" class="form-control" name="category_id">
                            <option value="">선택하세요</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">설명</label>
                        <textarea id="description" cols="30" rows="10" class="form-control" name="description"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">제출</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
