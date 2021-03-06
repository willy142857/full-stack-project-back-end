<?php

use App\Feedback;
use App\Project;
use Illuminate\Database\Seeder;

class Example11ProjectTableSeeder extends Seeder
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
            'raising_user_id' => 21,
            'fundraiser' => 'Meggy Li',
            'email' => $faker->email,
            'name' => '阿薩德中東舞團《解放廣場》台北場公演　募款計畫',
            'category_id' => 11,
            'started_at' => ' 2017-7-1',
            'ended_at' => '2017-8-26',
            'curr_amount' => 0,
            'goal_amount' => 100000,
            'relative_web' => 'www.zeczec.com/projects/supportasadorientaldance?r=t295470057',
            'backer' => 0,
            'brief' => '阿薩德中東舞團致力於推廣中東文化，以台灣人編創、製作的方式呈現不同視野的中東觀點，結合中東各國舞蹈，帶領台灣走向世界，第一站～台北！',
            'description' => '提案緣由#
成立於台南的阿薩德中東舞團，2013年在台南舉辦了一場精彩的舞作《解放廣場》，平日團員們皆各自有份正職工作，每週末屏除萬難，從早到晚不計酬的辛勤排練，舞團團長懷抱著想將這部能感動人心的作品，分享給更多人欣賞的那份心，2014年11月15日將至台北呈現此動人舞作。

感動與迴響



記得去年有位國小學童傻傻地跟著他媽媽來觀賞作品，

表演後他媽媽問他的觀後感。這位孩兒竟跟媽媽說，看完後有一種想要好好活下去的感覺!

如此，團長於2014年初攜帶著台南場解放廣場公演DVD，

再度起身前往埃及進修期間，他將DVD撥放給當地友人們觀看。

 

原來... 感受是不分人種國度的，舞作也撼動了長久生活於解放廣場周圍的住民們!!

於是... 勇氣百分百的團長決定，今年將北上台北舉辦唯一一場阿薩德中東舞團 解放廣場的演出。

因為唯一，所以精緻；因為唯一，所以耐心著墨，場地，燈光設計，團長無不細心要求、讓舞作更是精彩呈現。

專職舞蹈的團長與各自謀生的團員們經濟上實在有限，自台南至台北的高鐵只需約一小時四十分鐘的路程，卻是阿薩德中東舞團跨不太出的第一段路程。

這段路知易行難，懇請各界熱情支持贊助台灣在地土生土長的七年級生，這一代擁有熱情，燃燒生命，起而行，不願紙上談兵的青年藝術工作者們!!


阿薩德中東舞團《解放廣場》台北場公演
表演時間：2014/11/15 (六) 19:30 
 
表演地點：台北民生活動中心



舞團簡介#
阿薩德中東舞團致力於推廣中東文化，用舞蹈反應時代，以台灣人編創、製作的方式呈現埃及近代史，結合中東各國舞蹈，帶領台灣走向世界。每年舉辦多場中東文化講座深入校園與各藝文空間，透過電影或與藝術家、教授、作家進行對談，讓民眾更能了解中東地區的現況與歷史。 

 

藝術總監邵震宇於 2009 年獲得台灣公開賽冠軍後，即至埃及、土耳其流浪生活，深入當地文化，與當地人一同生活、一同共舞，回國後更受政大阿拉伯語系之邀教授中東舞蹈，更至國外舉辦多場舞蹈大師營。2013 年決定以埃及革命為題編創舞作【解放廣場】，國內外史無前例，更可看出藝術總監邵震宇的文化深度與視野。



公演介紹#
Midan Tahrir 解放廣場。2011年1月25日，超過一萬五千名群眾，齊聚廣場發出抗議聲浪。邵震宇以自身體驗，進入廣場內聆聽民眾的憤慨與希望，從前半年、革命當年，到兩週年紀念，在埃及一半時間都住在廣場旁，看著廣場車水馬龍，到如今導遊變遊民，聞嗆鼻刺眼的催淚瓦斯，聽憤慨爭取人權自由的高喊，目睹街童進速食店偷桌上剩食，感受充斥期盼、憤怒與失落的塗鴉牆。以解放廣場為靈感，試著探討革命前後，埃及人們的笑與淚，夢想與愛。挑戰自我呈現許多精彩的中東舞蹈 saidi、khaleegy、shaabi 等。



專業推薦#
毋須長途跋涉，邵震宇為你呈現更專業的中東舞蹈表演。難以想像來自一位台灣的舞者能漂亮地舞盪傳統中東舞蹈的魅力，專業舞者邵震宇將緊緊抓住你的目光。

   ─ 政治大學土耳其語系助理教授  杜爾孫(Dursun Köse) 強力推薦



藝術總監#
邵震宇

阿薩德中東舞團團長暨藝術總監

2009 年榮獲台灣肚皮舞公開賽冠軍，放棄眾多媒體邀約，遠赴中東各國流浪，體驗當地風俗民情，向多位大師取經，更被大師們讚賞為許久未見的中東舞蹈之星。回國後受邀至政大阿拉伯語系教授中東舞蹈，並開始至各國表演授課。





媒體報導#
  自由時報 〈解放廣場 928 舞出埃及革命印象〉

〔記者孟慶慈／台南報導〕曾獲台灣肚皮舞冠軍的舞者邵震宇，前年到埃及時恰巧碰上埃及 革命，將難得的經歷與多年來在埃及所見所聞及當地人生活編成新作「解放廣場」，九月廿 八日在台南生活美學館首演，不同於一般人印象的中東舞蹈，錯過可惜。 埃及革命前、革命當年、革命滿兩週年，邵震宇都落腳在開羅的解放廣場旁，看到廣場上從 絡繹不絕的遊客，變成民眾抗議遊行，以及革命兩年後失業民眾進餐廳偷食等景象，感慨不 已，決定以埃及革命為題創作「解放廣場」。 解放廣場融入許多埃及人的日常生活點滴，希望透過藝術讓台灣的觀眾即使未到埃及也能感 受埃及；舞蹈的部分背景音樂，特別收錄當地的市集與地鐵、伊斯蘭教禮拜的喚拜聲，此外 還帶回來埃及革命時所用的國旗、面具，以表達當地人對人權自由的渴望。 邵震宇還邀來政大阿拉伯語系學生，演出時在現場以阿拉伯語唱出革命時埃及人民所唱的歌 曲「廣場」。



中華日報 〈邵震宇解放廣場 舞出埃及文化〉2013/9/25 

〔記者黃微芬／台南報導〕曾獲台灣肚皮舞冠軍，阿薩德中東舞團藝術總監邵震宇將其 在埃及所見所聞，包括二○一一年的埃及革命融入舞作《解放廣場》中，以獨特的舞劇 敘述方式，用埃及肚皮舞帶大家看見埃及文化，國內外史無前例，廿八日晚上七時三十 分在國立台南生活美學館首演。 國文系畢業，原本父母對他的期待是當小學老師，但邵震宇卻熱愛跳舞，大學時就參加 街舞社，接觸肚皮舞的最初企圖也是希望將肚皮舞融入街舞，跳出不一樣的風格來，沒 想到肚皮舞的文化內涵，讓他深深著迷，曾遠赴埃及和土耳其學習，成為國內少數傑出 的肚皮舞男舞者之一。 去年邵震宇正式登記立案成立「阿薩德中東舞團」，成為台南在地第一支以中東埃及為 創作主題的專業肚皮舞團，曾赴馬來西亞公演，今年進一步挑戰把埃及革命搬上舞台， 創作了《解放廣場》。 舞作以邵震宇在埃及所見所聞為主，包括他在埃及革命前、革命時及革命後在開羅「解 放廣場」旁的親身經歷及感受，以故事形式，敘述南部上埃及的窮人如何穿越沙漠來到 開羅築夢，卻遇到革命紛亂及革命後人民的生活及感受。   



贊助回饋#
1. 【邵震宇台北場紀念酷卡乙張】$500，限量100份

2. 【邵震宇台北場紀念酷卡乙張 + 解放廣場精美節目冊乙本】$1000，限量100份

3. 【解放廣場精美節目冊乙本 + 解放廣場DVD乙張】$2500，限量100份',
        ]);
        Feedback::create([
            'project_id' => 21,
            'date' => '2017-10-31',
            'price' => 500,
            'backer' => 0,
            'description' => '【邵震宇 紀念卡片乙張】$ 500元，限量100張',
        ]);
        Feedback::create([
            'project_id' => 21,
            'date' => '2017-10-31',
            'price' => 1000,
            'backer' => 0,
            'description' => '【解放廣場節目冊乙本 + 邵震宇 紀念卡片乙張】$ 1000元，限量100份',
        ]);
        Feedback::create([
            'project_id' => 21,
            'date' => '2017-10-31',
            'price' => 2500,
            'backer' => 0,
            'description' => '【解放廣場節目冊乙本 + 解放廣場DVD乙張】$ 2500元，限量100份',
        ]);

        Project::create([
            'raising_user_id' => 22,
            'fundraiser' => 'BEN&DRY',
            'email' => $faker->email,
            'name' => '【BEN&DRY】分享、討論台灣同志的日常',
            'category_id' => 11,
            'started_at' => '2018-11-9',
            'ended_at' => '2018-12-12',
            'curr_amount' => 3595,
            'goal_amount' => 10000,
            'relative_web' => 'www.zeczec.com/projects/bendry?r=k2906470057',
            'backer' => 5,
            'brief' => '以影片與大家分享同志圈內的林林總總',
            'description' => '透過建立Youtube頻道，以影片與大家分享同志圈內的林林總總，從話題資訊、身份探索、時尚打扮、生活趣事、文藝電影、工作困難到18禁性事等等。

【BEN&DRY】分享、討論台灣同志的日常➜➜https://www.zeczec.com/projects/bendry
',
        ]);
        Feedback::create([
            'project_id' => 22,
            'date' => '2019-1-1',
            'price' => 199,
            'backer' => 5,
            'description' => '任何一份力量對於我們來說，都是十分重要。 
我們很重視，很珍惜每一位的付出。 
衷心謝謝你的支持，我們會以行動回饋! 
留言給我們，我們會親自回電郵給你，感謝你的支持!',
        ]);
        Feedback::create([
            'project_id' => 22,
            'date' => '2019-1-1',
            'price' => 999,
            'backer' => 0,
            'description' => '此方案不用信用卡付款～ 
每月一部影片最後都會印上您的名字， 
在Youtube、bilibili、愛奇藝放出， 
表示感謝您對BEN&DRY的支持! 
(若不用回饋請在備註欄註明/若要，請留下大名或電郵我們，我們會第一時間親自回覆你)',
        ]);
    }
}
