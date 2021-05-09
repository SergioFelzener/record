<?php

class ForgotPass extends Model
{

    public function validate()
    {
        $errors = [];

        if (!$this->email) {
            $errors['email'] = 'E-Mail é um campo obrigatório';
        }

        if (count($errors) > 0) {
            throw new ValidationException($errors);
        }
    }

    public function generateTokenAccess($user)
    {
        // print_r($user);

        if ($user->end_date) {
            throw new AppException('Usuário está OFF da empresa (Senha não pode ser redefinida)');
        }

        if ($user->email) {
            $token = sha1($user->id . $user->password);
            $sim = "Existe email";
            echo "<br>";
            echo "<hr>";
            // echo $sim;
            echo "<br>";
            echo "<hr>";
            // print_r($token);
            return $token;
        } else {
            $nao = "Email nao esta na base";
            // echo $nao;

        }

        throw new AppException('Usuário Não Encontrado !!');
    }

    public function checkForgot()
    {
        $this->validate();
        $user = User::getOne(['email' => $this->email]);
        // print_r($user);
        $this->generateTokenAccess($user);
    }
}
