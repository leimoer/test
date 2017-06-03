{{--@extends('admin.layouts.master')--}}
{{--@section('content')--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-12">--}}
            {{--<div class="panel panel-default">--}}

                {{--<div class="panel-body">--}}
                    {{--<!-- sample modal content -->--}}
                    {{--<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">--}}
                        {{--<div class="modal-dialog">--}}
                            {{--<div class="modal-content">--}}
                                {{--<div class="modal-header">--}}
                                    {{--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>--}}
                                    {{--<h4 class="modal-title" id="myModalLabel">添加用户</h4>--}}
                                {{--</div>--}}
                                {{--<div class="modal-body">--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-sm-12">--}}
                                            {{--<div class="panel panel-default">--}}
                                                {{--<div class="panel-heading"><h3 class="panel-title"></h3></div>--}}
                                                {{--<div class="panel-body">--}}
                                                    {{--<div class=" form p-20">--}}
                                                        {{--<form class="cmxform form-horizontal tasi-form" id="commentForm" enctype="multipart/form-data"  method="post" action="{{url('/user/user')}}" novalidate="novalidate">--}}
                                                            {{--{{csrf_field()}}--}}
                                                            {{--<div class="form-group " style="margin-top: 10px">--}}
                                                                {{--<label for="cname" class="control-label col-lg-2">用户名</label>--}}
                                                                {{--<div class="col-lg-10">--}}
                                                                    {{--<input class=" form-control" id="cname" name="name" type="text" required="" aria-required="true">--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="form-group " style="margin-top: 40px">--}}
                                                                {{--<label for="cemail" class="control-label col-lg-2">密码</label>--}}
                                                                {{--<div class="col-lg-10">--}}
                                                                    {{--<input class="form-control " id="cemail" type="text" name="password" required="" aria-required="true">--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="form-group " style="margin-top: 40px">--}}
                                                                {{--<label for="curl" class="control-label col-lg-2">手机号</label>--}}
                                                                {{--<div class="col-lg-10">--}}
                                                                    {{--<input class="form-control " id="curl" type="url" name="phone">--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="form-group " style="margin-top: 40px">--}}
                                                                {{--<label for="curl" class="control-label col-lg-2">手机号</label>--}}
                                                                {{--<div class="col-lg-10">--}}
                                                                    {{--<input class="form-control " id="curl" type="url" name="phone">--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                    {{-->--}}
                                                            {{--<div class="form-group" style="margin-top: 100px">--}}
                                                                {{--<div class="modal-footer">--}}
                                                                    {{--<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>--}}
                                                                    {{--<button type="submit" class="btn btn-primary">提交</button>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</form>--}}
                                                    {{--</div> <!-- .form -->--}}
                                                {{--</div> <!-- panel-body -->--}}
                                            {{--</div> <!-- panel -->--}}
                                        {{--</div> <!-- col -->--}}

                                    {{--</div> <!-- End row -->--}}

                                {{--</div>--}}

                            {{--</div><!-- /.modal-content -->--}}
                        {{--</div><!-- /.modal-dialog -->--}}
                    {{--</div><!-- /.modal -->--}}

                    {{--<!--  Modal content for the above example -->--}}
                    {{--<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">--}}
                        {{--<div class="modal-dialog modal-lg">--}}
                            {{--<div class="modal-content">--}}

                                {{--<div class="modal-body">--}}

                                    {{--修改--}}
                                    {{--<div class="wraper container-fluid">--}}
                                        {{--<div class="page-title">--}}
                                            {{--<h3 class="title">用户修改</h3>--}}
                                        {{--</div>--}}

                                        {{--<div class="row">--}}
                                            {{--<div class="col-sm-12">--}}
                                                {{--<div class="panel panel-default">--}}
                                                    {{--<div class="panel-heading"><h3 class="panel-title"></h3></div>--}}
                                                    {{--<div class="panel-body">--}}
                                                        {{--<div class=" form p-20">--}}
                                                            {{--<form class="cmxform form-horizontal tasi-form" name="editUser" id="editUser" method="post" action="" novalidate="novalidate">--}}
                                                                {{--{{csrf_field()}}--}}
                                                                {{--{{method_field('PUT')}}--}}
                                                                {{--<div class="form-group " style="    margin-top: 10px">--}}
                                                                    {{--<label for="cname" class="control-label col-lg-2">用户名</label>--}}
                                                                    {{--<div class="col-lg-10">--}}
                                                                        {{--<input class=" form-control" id="name" name="name" type="text" required="" aria-required="true" value="">--}}
                                                                    {{--</div>--}}
                                                                {{--</div>--}}
                                                                {{--<div class="form-group " style="margin-top: 40px">--}}
                                                                       {{--<label for="cemail" class="control-label col-lg-2">密码</label>--}}
                                                                    {{--<div class="col-lg-10">--}}
                                                                        {{--<input class="form-control " id="password" type="text" name="password" required="" aria-required="true">--}}
                                                                    {{--</div>--}}
                                                                {{--</div>--}}
                                                                {{--<div class="form-group " style="margin-top: 40px">--}}
                                                                    {{--<label for="curl" class="control-label col-lg-2">手机号</label>--}}
                                                                    {{--<div class="col-lg-10">--}}
                                                                        {{--<input class="form-control " id="phone" type="url" name="phone">--}}
                                                                    {{--</div>--}}
                                                                {{--</div>--}}
                                                                {{--<div class="form-group " style="margin-top: 40px">--}}
                                                                    {{--<label for="ccomment" class="control-label col-lg-2 height:100p">头像</label>--}}
                                                                    {{--<div class="col-lg-10">--}}
                                                                        {{--<input  id="pic" type="file" name="pic" style="border-style:none">--}}
                                                                    {{--</div>--}}
                                                                {{--</div>--}}
                                                                    {{--<div class="form-group" style="margin-top: 100px">--}}
                                                                    {{--<div class="modal-footer">--}}
                                                                        {{--<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>--}}
                                                                        {{--<button type="submit" class="btn btn-primary">提交</button>--}}
                                                                    {{--</div>--}}
                                                                {{--</div>--}}
                                                            {{--</form>--}}
                                                        {{--</div> <!-- .form -->--}}
                                                    {{--</div> <!-- panel-body -->--}}
                                                {{--</div> <!-- panel -->--}}
                                            {{--</div> <!-- col -->--}}

                                        {{--</div> <!-- End row -->--}}


                                        {{--<!-- Form-validation -->--}}


                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div><!-- /.modal-content -->--}}
                        {{--</div><!-- /.modal-dialog -->--}}
                    {{--</div><!-- /.modal -->--}}

                    {{--<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">--}}
                        {{--<div class="modal-dialog modal-sm">--}}
                            {{--<div class="modal-content">--}}
                                {{--<div class="modal-header">--}}
                                    {{--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>--}}
                                    {{--<h4 class="modal-title" id="mySmallModalLabel">Small modal</h4>--}}
                                {{--</div>--}}
                                {{--<div class="modal-body">--}}

                                {{--</div>--}}
                            {{--</div><!-- /.modal-content -->--}}
                        {{--</div><!-- /.modal-dialog -->--}}
                    {{--</div><!-- /.modal -->--}}

                    {{--<!-- Button trigger modal -->--}}
                    {{--<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">用户添加</button>--}}
                    {{--<!-- Large modal -->--}}


                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

    {{--</div>--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-6" style="width: 90%">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">--}}
                    {{--<h3 class="panel-title">用户列表</h3>--}}
                {{--</div>--}}
                {{--<div class="panel-body">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-md-12 col-sm-12 col-xs-12">--}}

                            {{--<table class="table table-striped">--}}
                                {{--<thead>--}}

                                {{--<uls>--}}
                                    {{--<th>id</th>--}}
                                    {{--<th>姓名</th>--}}
                                    {{--<th>密码</th>--}}
                                    {{--<th>手机号</th>--}}
                                    {{--<th>图片</th>--}}
                                    {{--<th>操作</th>--}}
                                {{--</uls>--}}
                                {{--@foreach($user as $users)--}}
                                {{--<tr class="tr">--}}
                                        {{--<td>{{$users -> id}}</td>--}}
                                        {{--<td>{{$users -> name}}</td>--}}
                                        {{--<td>{{$users -> password}}</td>--}}
                                        {{--<td>{{$users -> phone}}</td>--}}
                                        {{--<td>{{$users -> pic}}</td>--}}
                                        {{--<td><a href="#"><button class="btn btn-primary ed" onclick="doEdit('{{ $users -> id}}')"    data-toggle="modal" data-toggle="modal" data-target=".bs-example-modal-lg">编辑</button></a>--}}

                                        {{--<a><button class="btn btn-primary del"   data-id="{{$users -> id}}"  data-target=".bs-example-modal-lg">删除</button></a></td>--}}

                                {{--</tr>--}}

                                {{--@endforeach--}}
                                {{--</thead>--}}

                            {{--</table>--}}
                            {{--{{ $user->links() }}--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div> <!-- End Ro -->--}}
{{--@endsection--}}
{{--@section('js')--}}


    {{--<script>--}}
        {{--//创建的点击的事件的方法--}}
        {{--$('.del').click(function(){--}}
            {{--// /user/1--}}
            {{--//--}}
            {{--//alert('/user/'+$(this).attr('data-id'));--}}

            {{--var data = {'_method':'delete','_token':"{{csrf_token()}}"};--}}
            {{--$.ajax({--}}
                {{--url:'/user/'+($(this).attr('data-id')), //传送路径--}}

                {{--datatype:'json',  //以什么方式传送--}}
                {{--type:'post',  //传送方式--}}
                {{--data:data,   //参数--}}
             {{--//接收后台返回的值--}}
                {{--success:function (data) {--}}
                    {{--if(data.status == 200){--}}
                        {{--alert('成功');--}}
                    {{--}else{--}}
                        {{--alert('失败');--}}
                    {{--}--}}

                {{--}--}}

            {{--})--}}

        {{--})--}}
        {{--//修改--}}
        {{--function doEdit(id){--}}
            {{--$.ajax({--}}
                {{--type: 'GET',--}}
                {{--url: '/user/'+id,--}}
                {{--data: {},--}}
                {{--dataType: 'json',--}}
                {{--success: function (data) {--}}
                    {{--$('#name').val(data.name);--}}
                    {{--$('#password').val(data.password);--}}
                    {{--$('#phone').val(data.phone);--}}
                {{--}--}}
            {{--});--}}
            {{--document.editUser.action = '/user/'+id;--}}
        {{--}--}}

    {{--</script>--}}
{{--@endsection--}}