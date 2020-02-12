<?php

namespace App\Controller;

use App\Models\User;
use Laminas\Diactoros\Response\RedirectResponse;


class AuthController extends BaseController
{
    public function getLogin()
    {
        return $this->renderHTML('login.twig');
    }

    public function postLogin($request)
    {
        $postData = $request->getParsedBody();
        $responseMessage = null;
        $user = User::where('email', $postData['email'])->first();
        if ($user) {
            if (password_verify($postData['password'], $user->password)) {
                $_SESSION['userid'] = $user->iduser;
                return new RedirectResponse('/cursophp/admin');
            } else {
                $responseMessage = 'Bad credentials';
            }
        } else {
            $responseMessage = 'Bad credentials';
        }

        return $this->renderHTML('login.twig', [
            'responseMessage' => $responseMessage
        ]);
    }

    public function getLogout()
    {
        unset($_SESSION['userid']);  
        return new RedirectResponse('/cursophp/login');
    }
}
