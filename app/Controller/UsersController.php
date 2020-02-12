<?php

namespace App\Controller;

use App\Models\User;
use Respect\Validation\Validator as v;

class UsersController extends BaseController
{
    public function getAddUserAction($request)
    {
        $responseMessage = null;

        if ($request->getMethod() == 'POST') {
            $postData = $request->getParsedBody();
            $jobValidator = v::key('email', v::stringType()->notEmpty())
                ->key('password', v::stringType()->notEmpty());

            try {
                $jobValidator->assert($postData); // true
                $postData = $request->getParsedBody();
                $pass_hash= password_hash($postData['password'],PASSWORD_DEFAULT);
                $user = new User;
                $user->email = $postData['email'];
                $user->password = $pass_hash;
                $user->save();
                $responseMessage = 'SAVED';
            } catch (\Exception $e) {
                $responseMessage = $e->getMessage();
            }
        }
        return $this->renderHTML('addUser.twig',[
            'responseMessage'=>$responseMessage
        ]);
    }
}
