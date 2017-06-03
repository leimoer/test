<?php

namespace App\Http\Controllers;
use App\Model\UserModel;
use Illuminate\Support\Facades\Redis as Redis;
use Illuminate\Http\Request;
use iscms\Alisms\SendsmsPusher as Sms;

class RedisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //定一个变量
    public $disk;
    public $sms;
    //把他的依赖注入
    public function __construct(Sms $sms)
    {
        $this->sms = $sms;
        $this->disk = \Storage::disk('qiniu');
    }
    public function index(Request $request)
    {

        //dd(111);

//        $params = [
//            'username'=>'leilei',
//            'password'=>12324,
//            'age'=>22,
//            'pic'=>'images/IdGvBZ56FrHfIJRY1g3l2aHMcjWuwpWMIil8HbeB.png',
//            'phone'=>'454545454',
//            'nickname'=>'111'
//            ];
//        $result =UserModel::create($params);
//        dd($result);
//
//
        //              return view('admin.redis.from');
//
//        //dd('11');
//        获取input的所有值
        $input = $request->all();
        //dd($request);
        $tel  = $request['tel'];
        $tel = 17601635895;
       // dd($tel);
        //判断手机是否发过信息
        $exists = \Redis::exists('IT:STRING:USER：CODE：'.$tel);
        //判断exists是否有值
        if (!empty($exists))
        {

            //已经发送过信息
        }
        //随机6位验证码
        $num  = rand(100000,999999);
        //模板所需要得变量/
        $smsParams = [
            //短信接受的变量（）
            'code'=> "$num",


        ];


        $name = "laravl商城";  //阿里大鱼的签名。
        $content = json_encode($smsParams); //把内容 转成json格式用_encode函数
        $code = 'SMS_61965053'; //模板的id
        //dd($this->sms);
        //将参数发送到阿里大鱼 返回来的结果用一个变量接受
        $data = $this->sms->send($tel,"$name","$content","$code");
        dd($data);
        //解析阿里大鱼返回来的值  并做判断
        if (property_exists($data,'result'))
        {
            //发送成功
            \Redis::sEtex('IT:STRING:USER:CODE:'.$tel,600,$num);
            return response()->josn(['ResultData'=>'成功','info'=>'已发送']);
        }else{
            return response()->josn(['ResultData'=>'失败','info'=>'重复发送']);
        }



    }
    public function code()
    {
//        第一个是模板的签名  第二个是模板的ID
//        ALISMS_AUTOGRAPH=laravl商城
//        ALISMS_TEMPLATE_ID=SMS_61965053
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.redis.from');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public  function  uploadFile(Request $request)
    {
        //获取图片
        $file = $request->file('phone');
        //检查是否有图片
        if (!$request->hasFile('phone')) {

            ///dd(';;');
        }

//        dd($this->disk);
        //图片上传到images文件夹 //用变量接受返回来的图片名
        $picName =   $this->disk->put('images', $file);

       // dd($picName);




    }
}
