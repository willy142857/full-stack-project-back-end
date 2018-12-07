<?php

use App\Feedback;
use App\Project;
use Illuminate\Database\Seeder;

class Example12ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('zh_TW');
        Project::create([
            'raising_user_id' => 23,
            'fundraiser' => 'RIG group',
            'email' => $faker->email,
            'name' => '典藏版《球場諜對諜》棒球鬥智精品桌遊',
            'category_id' => 12,
            'started_at' => '2018-10-5 ',
            'ended_at' => '2018-12-10',
            'curr_amount' => 16670,
            'goal_amount' => 100000,
            'relative_web' => 'www.zeczec.com/projects/MatchFixing?r=k2898470057',
            'backer' => 32,
            'brief' => '這是一款藉由互相猜忌對方身份，需要一定的運氣與智力才能做出正確決定的棒球桌遊。',
            'description' => '影片無法播放請點選右側網址收看  https://pse.is/B6BWW #
你知道這「黑襪事件」對美國運動史帶來的意義嗎?#
一九一九年，號稱「球界最強」的芝加哥白襪隊驚爆八名選手集體放水、故意輸掉唾手可得的世界冠軍，自此「黑襪事件」四個字成為球壇遭封印的闇黑符號。
但也正因如此，才有今日乾淨打球、純粹展現全球最高棒球技藝，被暱稱為「國家娛樂」的美國職棒大聯盟棒球。
熱愛棒球的我們，絕對無法認同打假球的行為，因此特別設計了這款遊戲，讓玩家透過遊戲身歷其境體會歷史的傷痛，讓喜愛棒球或桌遊的玩家更認同乾淨打球的真義。',
        ]);
        Feedback::create([
            'project_id' => 23,
            'date' => '2018-12-31',
            'price' => 499,
            'backer' => 11,
            'description' => '典藏版《球場諜對諜》精品桌遊1套 
限量回饋搶先出手相挺者 
搶先價499元（市價：699元） 
本產品只有一種版本，先搶先贏！ 
(((臺灣本島離島免運))) 
ps: 
香港澳門250元 
其餘海外運費標準 
依照包裹重量與地區另訂 
有任何問題請洽yuya@rig.com.tw',
        ]);
        Feedback::create([
            'project_id' => 23,
            'date' => '2018-12-31',
            'price' => 549,
            'backer' => 11,
            'description' => '典藏版《球場諜對諜》精品桌遊1套 
早鳥價549元（市價：699元） 
(((臺灣本島離島免運))) 
ps: 
香港澳門250元 
其餘海外運費標準 
依照包裹重量與地區另訂 
有任何問題請洽yuya@rig.com.tw',
        ]);
        Feedback::create([
            'project_id' => 23,
            'date' => '2018-12-31',
            'price' => 998,
            'backer' => 10,
            'description' => '典藏版《球場諜對諜》精品桌遊2套 
送《美國職棒》雜誌1本(市價168元) 
市價：1566元 現省568元 
(((臺灣本島離島免運))) 

全球華文出版市場唯一針對大聯盟（Major League Baseball）棒球進行介紹的官方授權刊物，內容兼具深度與廣度。除了球季戰況的精闢剖析，還包括知名選手、各隊新星傳記；最新熱門話題；造訪大聯盟球場的實用旅遊資訊以及投打技術剖析。 
ps: 
港澳運費250元 
其餘海外運費標準 
依照包裹重量與地區另訂 
有任何問題請洽yuya@rig.com.tw',
        ]);

        Project::create([
            'raising_user_id' => 24,
            'fundraiser' => ' 玩思once實境遊戲 ',
            'email' => $faker->email,
            'name' => '街道的隱匿者｜當你用牠的眼睛看世界-流浪動物實境遊戲',
            'category_id' => 12,
            'started_at' => '2018-10-23',
            'ended_at' => '2018-12-25',
            'curr_amount' => 459695,
            'goal_amount' => 700000,
            'relative_web' => 'www.zeczec.com/projects/once-reality-game?r=k2751470057',
            'backer' => 39,
            'brief' => '一款體會毛孩處境的實境遊戲。在這個由人類掌控的世界，街上流浪動物要如何生存下去?如果是你，你會怎麼做?',
            'description' => '把你變成流浪動物，你能存活多久?#
一個以流浪動物的視角體驗人類社會的實境遊戲
在街頭遇到流浪動物的時候，你是什麼心情呢？是覺得他們好可愛、好可憐，或者你是固定餵食的愛媽愛爸，照顧流浪動物的飲食，還是對於流浪動物帶來的髒亂覺得困擾？
《街道的隱匿者》是一款從流浪動物角度出發的遊戲，帶你從動物的角度認識人類世界，認識流浪動物在街頭上的困境，不是人類的你，該怎麼生存下去呢？',
        ]);
        Feedback::create([
            'project_id' => 24,
            'date' => '2019-5-1',
            'price' => 450,
            'backer' => 20,
            'description' => '【個人早鳥優惠_早鳥送限定酷卡】 
原價為550元，集資期間現省100元。

◇ 街道的隱匿者-遊玩券一張 
◇ 集資限定酷卡一套

注意事項： 
＊免郵資，票券以掛號方式寄出。 
＊遊戲建議人數為4~8人，低於4人以併團方式進行遊玩。 
＊需要統編可以留言在備註欄',
        ]);
        Feedback::create([
            'project_id' => 24,
            'date' => '2019-5-1',
            'price' => 2400,
            'backer' => 18,
            'description' => '【團體早鳥優惠_早鳥送限定酷卡】 
原價為3300元，集資期間現省900元。

◇ 街道的隱匿者-團體遊玩券一張(6人) 
◇ 集資限定酷卡六套

注意事項： 
＊免郵資，票券以掛號方式寄出。 
＊遊戲建議人數為4~8人，低於4人以併團方式進行遊玩。 
＊此方案為6人團體券，如果同團超過6人，現場以400元/人，加收費用。 
＊需要統編可以留言在備註欄',
        ]);
        Feedback::create([
            'project_id' => 24,
            'date' => '2019-5-1',
            'price' => 600,
            'backer' => 1,
            'description' => '【個人票套組】 
原價為700元，集資期間現省100元。

◇ 街道的隱匿者-遊玩券一張 
◇ 集資限定酷卡一套 
◇ 快樂結局帆布包一個

注意事項： 
＊免郵資，票券以掛號方式寄出。 
＊遊戲建議人數為4~8人，低於4人以併團方式進行遊玩。 
＊需要統編可以留言在備註欄',
        ]);

    }
}
