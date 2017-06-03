<?php

namespace App\Http\Controllers\Admin;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Redis as Redis;
use App\Model\UserModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Monolog\Handler\SyslogUdp\UdpSocket;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $user;
    public $disk;

    public function __construct(UserRepository $userRepository)
    {
        $this->user = $userRepository;
        $this->disk = \Storage::disk('qiniu');

    }
    public function index(Request $request)
    {


        $where = [];
        if (!empty($request['username'])) {
            $where['username'] = $request['username'];

        }

            $user = $this->user->getList($where,4);




        return view('admin.user.user',['user' => $user,'where' =>$where]);
    }
    //封装详情 封装删除  修改
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //获取上传过来的参数
        $data = $request->all();
        //查询数据库是否有相同的用户名
        if (UserModel::where(['username'=>$data['username']])->first()) {


            return back()->withErrors('用户名已存在');
        }
        //判断 是否有图片上传
        if (!$request->hasFile('pic')) {


            return back()->withErrors('请上传头像');
        }
        //获取图片
        $file = $request->file('pic');
        //上传到七牛
        $picName = $this->disk->put('images',$file);
        $data['password'] = md5($data['password']);
        $data['pic'] = $picName;
        if ($this->user->createDate($data)) {


            return redirect('/users');
        }


        return back()->withErrors('添加失败');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

       $result = $this->user->showFile($id);
//       dd($result->toArray());
       if (empty($result)) {
           return  response()->json(['message'=>'查询数据失败','status'=>400]);        }
      // dd($request);
       return response()->json(['massage'=>$result,'status'=>200]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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

        $data = ($request->only(['username', 'age']));

       // dd($data);


        //判断用户名是否存在
//        if (UserModel::where(['username'=>$data['username']])->first()) {
//            return back()->withErrors('用户名已存在');
//        }


        //$result = UserModel::where(['id' => $id])->update($data);
        $result = $this->user->updateDo($data,['id'=>$id]);
        if (empty($result)) {

            return  response()->json(['message'=>'修改失败','status'=>400]);
        }

        return response()->json(['massage'=>'修改成功','status'=>200]);



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

       $request= $this->user->deleteDo($id);

        //dd($request);

        if (!empty($request)){
            return response()->json(['message'=>'$request','status'=>200]);

        }else{
            return response()->json(['message'=>'删除失败','status'=>400]);
        }
    }

}
