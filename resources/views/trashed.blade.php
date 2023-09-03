@extends('layouts.master')

@section('content')
    <div class="main-content mt-5">
        <div class="card">
            <div class="card-header">
                <h1>trashed posts</h1>
                <a class="btn btn-sm btn-success" href="">back</a>

            </div>

            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 5%">#</th>
                            <th scope="col" style="width: 10%">이미지</th>
                            <th scope="col" style="width: 20%">제목</th>
                            <th scope="col" style="width: 30%">설명</th>
                            <th scope="col" style="width: 10%">카테고리</th>
                            <th scope="col" style="width: 10%">발행일</th>
                            <th scope="col" style="width: 20%">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td><img src="http://picsum.photos/200" width="80"></td>
                            <td>Lorem ipsum dolor sit </td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam nemo ut sint earum dicta laborum in magnam cum, modi nam ipsum doloremque harum neque dignissimos impedit doloribus aspernatur, sapiente fugiat!</td>
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
