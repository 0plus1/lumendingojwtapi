<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('DefaultPopulator');

        Model::reguard();
    }
}

/**
 * Class DefaultPopulator
 */
class DefaultPopulator extends Seeder
{
    public function run()
    {
        $ApiSubscriber = App\Models\ApiSubscriber::create(
            [
                'email' => 'test@user.dev',
                'password' => 'secret',
            ]
        );

        unset($ApiSubscriber);
        return;
    }


}