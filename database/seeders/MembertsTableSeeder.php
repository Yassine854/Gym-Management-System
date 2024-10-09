<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Member;
class MembertsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run( )
    {

    //     $members = factory(Member::class,30)->create();
    // foreach( $members as $member)
    //     {
    //     factory(Memberts::class)->create([
    //     'name' => $member->fname
    //     ]);

    //     factory(Memberts::class)->create([
    //     'email' => $member->email
    //     ]);

    //     factory(Memberts::class)->create([
    //         'password' => $member->pass
    //         ]);

    //     }

    $members=Member::all();
    foreach ($members as $member){
    DB::table('memberts')->insert([
        'name' => $member->fname,
        'email' => $member->email,
        'password' => bcrypt($member->pass),
    ]);


     }
}
}
