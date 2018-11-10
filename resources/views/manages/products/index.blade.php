@extends('manages.index')

@section('content')
    <!--main content start-->
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Bảng sản phẩm
                        <a class="btn btn-success" href="{{route('products.create')}}" style="float:right"><i
                                class="icon_pencil"></i> Thêm sản phẩm mới</a>
                    </header>

                    <table class="table table-striped table-advance table-hover">
                        <tbody>
                        <tr>
                            <th>Stt</th>
                            <th><i class="icon_profile"></i> Tên sản phẩm</th>
                            <th><i class="icon_mail_alt"></i> Nhà sản xuất</th>
                            <th><i class="icon_mobile"></i> Bộ nhớ</th>
                            <th><i class="icon_pin_alt"></i> Giá tiền</th>
                            {{--<th>Password</th>--}}
                            <th><i class="icon_cogs"></i> Action</th>
                        </tr>

                        <tr>
                            <td></td>
                            <td><a href="{{route('products.show', 1)}}">Lorem Ipsum is simply dummy text</a></td>
                            <td>Lorem Ipsum is simply dummy text</td>
                            <td>Lorem Ipsum is simply dummy text</td>
                            <td>Lorem Ipsum is simply dummy text</td>
                            {{--<td></td>--}}
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-success" href="#"><i
                                            class="icon_pencil-edit"></i></a>
                                    <form action="#"
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
                        <tr>
                            <td></td>
                            <td><a href="{{route('products.show', 1)}}">Lorem Ipsum is simply dummy text</a></td>
                            <td>Lorem Ipsum is simply dummy text</td>
                            <td>Lorem Ipsum is simply dummy text</td>
                            <td>Lorem Ipsum is simply dummy text</td>
                            {{--<td></td>--}}
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-success" href="#"><i
                                            class="icon_pencil-edit"></i></a>
                                    <form action="#"
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
                        </tbody>
                    </table>
                </section>
            </div>
        </div>
        <div id="pagination" class="text-center">
            #
        </div>
        <!-- page end-->
    </section>
    <!--main content end-->
@endsection