@extends('manages.index')

@section('content')
    <!--main content start-->
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group" style="text-align: right;margin-bottom: 30px;">
                    {!! Form::open(['method' => 'GET', 'route' => ['searchUser', isset($keyword)]]) !!}
                    <div class="col-sm-12">
                        {!! Form::text('keyword', null, ['placeholder' => 'nhập tên người bạn muốn tìm','class' => 'search-input']) !!}
                        <button type="submit" class="btn btn-send ">Tìm kiếm</button>
                    </div>
                    {!! Form::close() !!}
                </div>
                <section class="panel">
                    <header class="panel-heading">
                        @if(empty($c))
                        Bảng nhân viên
                            <a class="btn btn-success" href="{{route('users.create')}}" style="float:right"><i
                                    class="icon_pencil"></i> Thêm nhân viên mới</a>
                        @else <a href="{{route('users.index')}}" class="btn btn-success" style="float:right">Quay
                            lại</a>
                        @endif
                    </header>

                    <table class="table table-striped table-advance table-hover">
                        <tbody>
                        <tr>
                            <th>Stt</th>
                            <th><i class="icon_profile"></i> Họ và tên</th>
                            <th><i class="icon_mail_alt"></i> Email</th>
                            <th><i class="icon_mobile"></i> Số điện thoại</th>
                            <th><i class="icon_pin_alt"></i> Địa chỉ</th>
                            <th>Chức vụ</th>
                            {{--<th>Password</th>--}}
                            <th><i class="icon_cogs"></i> Action</th>
                        </tr>
                        @php $i = 1 @endphp

                        @foreach($users as $user)
                            <tr>
                                <td>{{$i++}}</td>
                                <td><a href="{{route('users.show', $user->user_id)}}">{{ $user->name }}</a></td>
                                <td>{{ $user->email}}</td>
                                <td>{{ $user->tel}}</td>
                                <td>{{ str_limit($user->address, 20) }}</td>
                                <td>
                                    @if($user->permission == 2)
                                        {{'Sale'}}
                                    @else {{'Writer'}}
                                    @endif
                                </td>
                                {{--<td></td>--}}
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-success" href="{{route('users.edit' , $user->user_id)}}"><i
                                                class="icon_pencil-edit"></i></a>
                                        <form action="{{route('users.destroy', $user->user_id)}}"
                                              method="POST" onsubmit="return confirm('Are you sure?');"
                                              style="display: inline-block;">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <a class="btn btn-danger" href="javascript:void(0);"
                                               onclick="$(this).parent().submit();">
                                                <i class="icon_close_alt"></i>
                                            </a>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </section>
            </div>
        </div>
        <div id="pagination" class="text-center">
            {{$users->appends(Request::except('page'))->links()}}
        </div>
        <!-- page end-->
    </section>
    <!--main content end-->
@endsection
