<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Services\Interfaces\UserServiceInterface as UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    public function index()
    {
        $users = $this->userService->paginate();

        $config = $this->config();
        $template = 'admin.dashboard.pages.user.index';
        return view('admin.dashboard.index', compact('template', 'config', 'users'));
    }

    private function config()
    {
        return [
            'js' => ['js/plugins/switchery/switchery.js'],
            'css' => [
                'css/plugins/switchery/switchery.css'
            ]
        ];
        ;
    }
}
