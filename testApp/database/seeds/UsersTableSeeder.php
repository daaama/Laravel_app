<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 開発用ユーザーを定義
        App\User::create([
            'name' => 'develop_user',
            'email' => 'my_email@gmail.com',
            'password' => Hash::make('my_secure_password'), // この場合、「my_secure_password」でログインできる
            'remember_token' => str_random(10),
        ]);

        // モデルファクトリーで定義したテストユーザーを 20 作成
        factory(App\User::class, 20)->create();
    }
}
