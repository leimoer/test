@extends('admin.layouts.master')
@section('content')




    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-default">

                <div class="panel-body">
                    <!-- sample modal content -->
                    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title" id="myModalLabel">添加用户</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="panel panel-default">
                                                <div class="panel-heading"><h3 class="panel-title"></h3></div>
                                                <div class="panel-body">
                                                    <div class=" form p-20">
                                                        <form class="cmxform form-horizontal tasi-form" id="commentForm" method="post" action="{{url('/users')}}" novalidate="novalidate" enctype="multipart/form-data"  >
                                                            {{csrf_field()}}
                                                            <div class="form-group " style="margin-top: 10px">
                                                                <label for="cname" class="control-label col-lg-2">用户名</label>
                                                                <div class="col-lg-10">
                                                                    <input class=" form-control" id="cname" name="username" type="text" required="" aria-required="true">
                                                                </div>
                                                            </div>
                                                            <div class="form-group " style="margin-top: 40px">
                                                                <label for="cemail" class="control-label col-lg-2">密码</label>
                                                                <div class="col-lg-10">
                                                                    <input class="form-control " id="cemail" type="text" name="password" required="" aria-required="true">
                                                                </div>
                                                            </div>
                                                            <div class="form-group " style="margin-top: 40px">
                                                                <label for="curl" class="control-label col-lg-2">年龄</label>
                                                                <div class="col-lg-10">
                                                                    <input class="form-control " id="curl" type="url" name="age">
                                                                </div>
                                                            </div><div class="form-group " style="margin-top: 40px">
                                                                <label for="curl" class="control-label col-lg-2">手机号</label>
                                                                <div class="col-lg-10">
                                                                    <input class="form-control " id="curl" type="url" name="phone">
                                                                </div>
                                                            </div>
                                                            <div class="form-group " style="margin-top: 40px">
                                                                <label for="curl" class="control-label col-lg-2">头像</label>
                                                                <div class="col-lg-10">
                                                                    <input class="form-control " id="curl" type="file" name="pic">
                                                                </div>
                                                            </div>

                                                            <div class="form-group" style="margin-top: 100px">
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                                                                    <button type="submit" class="btn btn-primary">提交</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div> <!-- .form -->
                                                </div> <!-- panel-body -->
                                            </div> <!-- panel -->
                                        </div> <!-- col -->

                                    </div> <!-- End row -->

                                </div>

                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                    <!--  Modal content for the above example -->
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">

                                <div class="modal-body">

                                    {{--修改--}}
                                    <div class="wraper container-fluid">
                                        <div class="page-title">
                                            <h3 class="title">用户修改</h3>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading"><h3 class="panel-title"></h3></div>
                                                    <div class="panel-body">
                                                        <div class=" form p-20">
                                                            <form class="cmxform form-horizontal tasi-form" name="editUser" id="editUser" method="post" action="" novalidate="novalidate">
                                                                {{--{{csrf_field()}}--}}
                                                                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                                                {{method_field('PUT')}}
                                                                <input type="hidden" name="id" id="id">
                                                                <div class="form-group " style="    margin-top: 10px">
                                                                    <label for="cname" class="control-label col-lg-2">用户名</label>
                                                                    <div class="col-lg-10">
                                                                        <input class=" form-control" id="username" name="username" type="text" required="" aria-required="true" value="">
                                                                    </div>
                                                                </div>

                                                                <div class="form-group " style="    margin-top: 40px">
                                                                    <label for="curl" class="control-label col-lg-2">年龄</label>
                                                                    <div class="col-lg-10">
                                                                        <input class="form-control " id="age" type="url" name="age">
                                                                    </div>
                                                                </div>

                                                                <div class="form-group" style="margin-top: 100px">
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                                                                        <button type="button" class="btn btn-primary" id="editSubmit">提交</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div> <!-- .form -->
                                                    </div> <!-- panel-body -->
                                                </div> <!-- panel -->
                                            </div> <!-- col -->

                                        </div> <!-- End row -->


                                        <!-- Form-validation -->


                                    </div>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title" id="mySmallModalLabel">Small modal</h4>
                                </div>
                                <div class="modal-body">

                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                    <!-- Button trigger modal -->
                    <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">用户添加</button>
                    <!-- Large modal -->


                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="errors">
            @if(count($errors)>0)
                <div class="box-body">
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-ban"></i>错误：</h4>

                        @foreach($errors->all() as $error)
                            {{$error}}
                        @endforeach
                    </div>

                </div>
            @endif
        </div>

        <div class="col-md-6" style="width: 100%">
            <div class="panel panel-default">
                <form class="form-inline p-20" role="form" action="{{url('/users')}}" method="get">
                    <div class="form-group">
                        <label class="sr-only" for="exampleInputEmail2"></label>
                        <input type="text" class="form-control" id="exampleInputEmail2" name="username" placeholder="按用户名搜索">
                    </div>



                    <button type="submit" class="btn btn-success m-l-10">搜索</button>
                </form>
                <div class="panel-heading">
                    <h3 class="panel-title">用户列表</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12"> ;

                            <table class="table table-striped">
                                <thead>

                                <uls>
                                    <th>id</th>
                                    <th>姓名</th>
                                    <th>年龄</th>
                                    <th>头像</th>
                                    <th>操作</th>
                                </uls>
                                </thead>
                                @if(!empty($user))
                                @foreach($user as $users)

                                    <tr class="tr">
                                        <td>{{$users -> id}}</td>
                                        <td>{{$users -> username}}</td>
                                        <td>{{$users -> age}}</td>
                                        <td><img src="{{ env('QINIU_DOMAIN')}}{{$users -> pic}}?imageView2/1/w/80/h/80" alt=""></td>

                                        <td><a href="#"><button class="btn btn-primary ed" onclick="doEdit('{{ $users -> id}}')"    data-toggle="modal" data-toggle="modal" data-target=".bs-example-modal-lg">编辑</button></a>

                                            <a><button class="btn btn-primary del"   onclick="doDel('{{$users -> id}}')"  data-target=".bs-example-modal-lg">删除</button></a></td>

                                    </tr>

                                @endforeach
                                    @else
                                        暂无数据！
                                    @endif


                            </table>
                            @if(empty($where))
                                {{ $user->links() }}
                            @else
                                {{ $user->appends($where)->links() }}
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Ro -->
@endsection
@section('js')


    <script>
        function doEdit(id) {
//            alert(111);
            $.ajax({

                url:'/users/'+id, //传送路径

                datatype:'json',  //以什么方式传送
                type:'get',  //传送方式
                data:'', //参数
                //接收后台返回的值
                success:function (data) {
                    console.log(data);
                    if(data.status == 200){
                        $('#username').val(data.massage.username);
                        $('#age').val(data.massage.age);
                        $('#id').val(data.massage.id);



                    }else{
                        alert('失败');
                    }

                }

            })


        }
        $("#editSubmit").click(function(){

            var val = $('#id').val();

            var data = {'_method':'put','_token':$('#token').val(),'username':$('#username').val(),'age':$('#age').val()};

            $.ajax({

                url:'/users/'+val,//传送路径

                datatype:'json',  //以什么方式传送
                type:'post',  //传送方式
                data:data,//参数
                //接收后台返回的值
                success:function (data) {
                  //console.log(data);
                    if(data.status == 200){
                        alert('修改成功')
                        window.setTimeout("window.location='/users'",500);
                    }else{
                        alert('失败');
                    }


                }


            });
                //return false;
        });

        function doDel(id)
        {

            //console.log(id);
            var data = {'_method':'delete','_token':"{{ csrf_token() }}"};
            //console.log(data);
            $.ajax({
                url:'/users/'+id,
                datatype:'json',
                type:'post',
                data:data,
                success:function (data) {
                    if(data.status == 200){
                        alert('成功');
                        window.setTimeout("window.location='/users'",500);
                    }else{
                        alert('失败');
                    }

                }

            })
        }
        /*//创建的点击的事件的方法
        $('.del').click(function(){
            // /user/1
            //
            //alert('/user/'+$(this).attr('data-id'));

            var data = {'_method':'delete','_token':""};
            $.ajax({
                url:'/user/'+($(this).attr('data-id')), //传送路径

                datatype:'json',  //以什么方式传送
                type:'post',  //传送方式
                data:data,   //参数 $.ajax({
                url:'/user/'+($(this).attr('data-id')), //传送路径

                datatype:'json',  //以什么方式传送
                type:'post',  //传送方式
                data:data,   //参数
                //接收后台返回的值
                success:function (data) {
                    if(data.status == 200){
                        alert('成功');
                    }else{
                        alert('失败');
                    }

                }

            })
                //接收后台返回的值
                success:function (data) {
                    if(data.status == 200){
                        alert('成功');
                    }else{
                        alert('失败');
                    }

                }

            })

        })*/
        //修改


    </script>
@endsection