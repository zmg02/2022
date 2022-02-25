<?php

namespace App\Admin\Controllers\Mogujie;

use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function MongoDB\BSON\toJSON;

class UserController extends Controller
{
    private function _time_scope(Request $request, $query)
    {
        if (!empty($request['start_date_time']) && !empty($request['end_date_time'])) {
            $start_date_time = strtotime($request['start_date_time']);
            $end_date_time   = strtotime($request['end_date_time']);
            $dateTime = [$start_date_time, $end_date_time];
            $query = $query->whereBetween('create_time', $dateTime);
        }
        return $query;
    }

    public function lists(Request $request)
    {
//        addUsers(5000);

        $user = new User();
        $query = $user->query();

        if (!empty($request['account'])) {
            $query = $query->where(function($query) use ($request) {
                $query->where('name', 'like', '%'.trim($request['account']).'%')->orWhere('email', 'like', '%'.trim($request['account']).'%')->orWhere('phone', 'like', '%'.trim($request['account']).'%');
            });

        }
        if (!empty($request['is_admin'])) {
            $query = $query->where('is_admin',$request['is_admin']);
        }
        if (!empty($request['is_active'])) {
            $query = $query->where('is_active',$request['is_active']);
        }
        if (!empty($request['is_vip'])) {
            $query = $query->where('is_vip',$request['is_vip']);
        }
        if (isset($request['status']) && $request['status'] != 'all') {
            $query = $query->where('status',$request['status']);
        }

        $query = $this->_time_scope($request, $query);
        $users = $query->where('status','<>',0)->paginate(15);
//        $users = $query->toSql();
//        dd($users);
        return view('admin\mogujie\user\list',['users'=>$users]);
    }

    public function delete(Request $request)
    {
        $id = $request['id'];
        $user = new User();
        $userInfo = $user->where('id',$id)->first();
        if (empty($userInfo['id'])) {
            return 'error1';
        }
        $res = $user->where('id',$id)->update(['status'=>0]);
        if ($res == 0) {
            return 'error2';
        }
        return 'success';
    }

    public function set(Request $request)
    {
        $user = new User();
        if (isset($request['id'])) {
            $id = intval($request['id']);
            $update = [
                'is_vip' => $request['is_vip'],
                'is_admin' => $request['is_admin'],
                'status' => $request['status'],
            ];
            $res = $user->where('id',$id)->update($update);
            if ($res == 0) {
                return 'success';
            }
        } else {
            return 'error';
        }

        return 'success';
    }

}
