@extends('manages.index')

@section('content')
    <!--main content start-->
    <section class="wrapper">

        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Bảng khách hàng
                    </header>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Stt</th>
                            <th><i class="icon_profile"></i> Họ và tên</th>
                            <th><i class="icon_mail_alt"></i> Email</th>
                            <th><i class="icon_mobile"></i> Số điện thoại</th>
                            <th><i class="icon_pin_alt"></i> Địa chỉ</th>
                            <th><i class="icon_cogs"></i> Action</th>
                            {{--<th>avatar</th>--}}
                            {{--<th>Password</th>--}}
                        </tr>
                        </thead>
                        <tbody>

                        @php $i = 1 @endphp
                        @foreach($users as $user)
                            <tr>
                                <td>{{$i++}}</td>
                                <td><a href="{{route('users.show', $user->user_id)}}">{{ $user->name }}</a></td>
                                <td>{{ $user->email}}</td>
                                <td>{{ $user->tel}}</td>
                                <td>{{ mb_substr($user->address, 0, 19) }}</td>
                                <td>
                                    <div class="btn-group">
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
                            {{--<td>{{substr($user->avatar, 0, 10)}}</td>--}}
                        @endforeach
                        </tbody>
                    </table>
                </section>
            </div>
        </div>
        <div id="pagination" class="text-center">
            {{$users->links()}}
        </div>
        <!-- page end-->
    </section>
    <!--main content end-->
@endsection
