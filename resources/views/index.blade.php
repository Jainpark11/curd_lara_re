@extends('layouts.master')

@section('content')
    <div class="main-content mt-5">
        <div class="card">
            <div class="card-header">
                All Posts
                <a class="btn btn-sm btn-success" href="">create</a>
                <a class="btn btn-sm btn-dark" href="">trashed</a>
            </div>

            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">이미지</th>
                            <th scope="col">제목</th>
                            <th scope="col">설명</th>
                            <th scope="col">카테고리</th>
                            <th scope="col">발행일</th>
                            <th scope="col">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>이미지</td>
                            <td>제목</td>
                            <td>설명</td>
                            <td>카테고리</td>
                            <td>발행일</td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="">Edit</a>
                                <a class="btn btn-sm btn-danger" href="">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
