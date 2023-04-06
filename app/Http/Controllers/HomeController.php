<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use App\Models\Order;
use App\User;
use Validator;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Pusher;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function createOrder()
    {
        return view('User.createOrder');
    }
    public function saveOrder(Request $request)
    {
        // dd($request->all());
        $order = new Order();
        $order->full_name = $request->name;
        $order->birth = $request->birth;
        $order->address = $request->address;
        $order->phone = $request->phone;
        $order->email = $request->email;
        $order->ssn = $request->security;
        $order->cpn = $request->cpn;
        $order->ein = $request->ein;
        $order->save();
        return redirect(url('/home'));

    }
    public function createChart()
    {
        // $users = User::where('id', '!=', Auth::id())->get();
        // count how many mesaage  are not unread from select user
        $users = DB::select("select users.id,users.name,users.avatar,users.email,count(is_read) as unread
        from users LEFT JOIN messages ON users.id = messages.from and is_read = 0 and messages.to =" . Auth::id() . "
        where users.id != " . Auth::id() . "
        group by users.id, users.name,users.avatar,.users.email");
        // dd($users);

        return view('User.chart', compact('users'));
    }

    public function getMessage($user_id)
    {
        $my_id = Auth::id();
        Messages::where(['from' => $user_id, 'to' => $my_id])->update(['is_read' => 1]);
        $messages = Messages::where(function ($query) use ($user_id, $my_id) {
            $query->where('from', $my_id)->where('to', $user_id);
        })->orWhere(function ($query) use ($user_id, $my_id) {
            $query->where('from', $user_id)->where('to', $my_id);
        })->get();
        return view('User.chartmessage', compact('messages'));
    }
    public function sendMessage(Request $request)
    {
        // dd($request->all());
        // // dd($request->all());
        $sendmessage = new Messages();
        $sendmessage->from = Auth::id();
        $sendmessage->to = $request->reciver_id;
        $sendmessage->message = $request->message;
        $sendmessage->is_read = "0";
        $sendmessage->save();

        // pusher
        $options = array(
            'cluster' => 'ap2',
            'useTLS' => true,
        );
        $pusher = new Pusher\Pusher(
            'a6444ed6262f66726269',
            'fcde9c28554e08913b74',
            '1575858',
            $options
        );

        // $data['message'] = 'hello world';
        $data = ['from' => $sendmessage->from, 'to' => $sendmessage->to];
        $pusher->trigger('my-channel', 'my-event', $data);
// end pusher
        // return back();
        // $form = Auth::id();
        // $to = $request->reciver_id;
        // $message = $request->message;
        // $data = new Messages();
        // $data->from = $form;
        // $data->to = $to;
        // $data->message = $message;
        // $data->is_read = 0;
        // $data->save();
    }

    public function updateProfile(Request $request)
    {
        // dd($request->all());
        $profile = User::where('id', $request->profileid)->first();
        $profile->name = $request->name;
        $profile->email = $request->email;
        $profile->mobile = $request->mobile;
        $profile->address = $request->address;
        $profile->save();
        return redirect(url('/home'));
    }

    public function changePassword(Request $request)
    {
        return view('users.change-password');
    }

    public function changePasswordSave(Request $request, $id)
    {
        // dd($request->all());
       $validator= $request->validate([
            'password' => 'min:8',
            'confirm_password' => 'required_with:password|same:password|min:8',
        ]);

        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }

        $user = User::find($id);
        $user->password = bcrypt($request->password);
        $user->save();
        return back();
    }

}
