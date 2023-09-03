@extends('layouts.master')

@section('content')
    <div class="main-content mt-5">
        <div class="card">
            <div class="card-header">
             <h4>글 수정</h4>
                <a class="btn btn-sm btn-success" href="{{route('posts.index')}}">Back</a>
            </div>

            <div class="card-body">
                <form action="">
                    <div class="form-group">
                        <label for="" class="form-label">이미지</label>
                        <input type="file" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="" class="form-label">제목</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">카테고리</label>
                        <select name="" id="" class="form-control">
                            <option value="">test1</option>
                            <option value="">test2</option>
                            <option value="">test3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">설명</label>
                        <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">제출</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
