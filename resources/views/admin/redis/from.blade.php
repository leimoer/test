<!DOCTYPE>
<html>
    <head>
    <title></title>
    </head>
    <body>
    <form action="{{url('/uploadFile')}}"  method="post" enctype="multipart/form-data"  >
        {{csrf_field()}}
        {{--另一种方法 隐藏域 type="hidden"--}}

        <p> <input type="file" name="phone" /></p>
        <input type="submit" value="Submit" />
        {{ env('QINIU_DOMAIN')}}
        <img src="{{ env('QINIU_DOMAIN')}}images/IdGvBZ56FrHfIJRY1g3l2aHMcjWuwpWMIil8HbeB.png" alt="">
    </form>
    </body>
</html>