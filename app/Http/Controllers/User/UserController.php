<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\User\Auth\LoginRequest;
use App\Models\User\Notification;
use App\Models\User\Rating;
use App\Models\User\User;
use Carbon\Carbon;
use Roynex\InitialProjectPackage\Bases\BaseController;
use Roynex\InitialProjectPackage\Helpers\ResponseHelper;

class UserController extends BaseController
{
    protected $users;

    /**
     * BaseController constructor.
     * @param $users
     */
    public function __construct(User $users)
    {
        $this->users = $users;
    }

    public function login(loginRequest $request)
    {
        $loginData = $request->validated();
        $operationResult = $this->users->login($loginData);

        if(!$operationResult->isSuccess)
           return ($request->expectsJson()) ? ResponseHelper::authenticationFail() :
               back()->withErrors(['message' => 'wrong username or password']);

        $userData = $this->__getUserData($operationResult->data);
        $data = ['user' => $operationResult->data ,'notification' => $userData['notifications']
            , 'ratings' => $userData['rate']];

        return ($request->expectsJson()) ? ResponseHelper::select($data) :
            view('home')->with($data);

    }

    protected function __getUserData(User $user)
    {
        $notifications = new Notification();
        $data['notifications'] = $notifications->getData(['user_id' => $user->id],['notifier'],
            '*','DESC','id',true);

        $ratings = new Rating();
        $data['rate'] = $ratings->getUserRate(function ($rating) use ($user)
        {
            $rating->where('id',$user->id)
                ->whereDate('date',Carbon::now()->format('Y:m'));
        });

        return $data;
    }
}
