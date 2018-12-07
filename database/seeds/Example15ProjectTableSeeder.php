<?php

use App\Feedback;
use App\Project;
use Illuminate\Database\Seeder;

class Example15ProjectTableSeeder extends Seeder
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
            'raising_user_id' => 29,
            'fundraiser' => ' 黃色書刊 ',
            'email' => $faker->email,
            'name' => '黃色書刊《勇者系列》訂閱集資',
            'category_id' => 15,
            'started_at' => '2017-9-4',
            'ended_at' => '2018-12-31',
            'curr_amount' => 201032,
            'goal_amount' => 300000,
            'relative_web' => 'www.zeczec.com/projects/yellowbook?r=k1640470057',
            'backer' => 578,
            'brief' => '《勇者系列》已經累積超過 200 話，現在將邁向下一個階段，擴充龐大的世界觀、推出公仔、單行本、最後希望能定期推出動畫，只要每個月一點點的贊助，就能讓這些想法化為可能。',
            'description' => '《勇者系列》是什麼？
#「當魔王不在了，那勇者又有何用？」
「魔王又是誰定義的呢？」
「比起魔族，人類更有資格活在這個世界上嗎？」

大家好，我是台灣漫畫家『黃色書刊』！

《勇者系列》是我自 2016 年開始繪製的連載漫畫，故事建構在那些常見的冒險世界元素之上，裡頭有勇者、有魔王、有龍與魔法、也有村民與國家。但是我希望能透過自己的畫筆去重新詮釋那些讀者們可能習以為常的情節。

▲ 圖為《勇者系列》第一話，一切故事的開端。

勇者一定得打敗魔王嗎？魔王就非得是壞人嗎？
勇者難道只會存在於故事之中嗎？我們的身邊也會有勇者嗎？

以這些問題做為起點，我想創造的「勇者」不再只是一位自告奮勇去打擊魔王的戰士，「勇者」可以有許多的形象、可以是有著自己生活目標的一般人，他們和我們一樣需要在生命中做出各種選擇，並且接受選擇的代價。

我期盼每一位讀者都能在《勇者系列》的故事中，探索到屬於自己的勇者哲學！

超過 200 話連載，感謝各位讀者一年多來的支持
#
「200 話之中，希望曾有一話，讓你心有共鳴。」

《勇者系列》連載了一年多，已經超過 200 話，一開始的時候，其實只是想畫個小短篇，但是由於讀者的關注與討論，讓我有了越來越多的想法，也讓這個勇者世界的構想越變越豐富，最終演變成了長篇的漫畫連載。

這一切，都要謝謝你們這些讀者的喜愛！

▲200多話的故事，要感謝讀者的支持，讓我有動力持續創作。



繼續開拓勇者的世界，需要你們的支持#
「對於創作者來說，願意支持的訂閱者就像是勇者一樣偉大啊！」
「創作跟冒險一樣，都需要有夥伴！」

現在的《勇者系列》連載，完全是仰賴我自己獨立編寫故事、繪製漫畫，再發佈到Facebook粉絲專頁上。身為原作者，我一直希望能有機會，把這個故事擴展到更大的格局，讓《勇者系列》的世界觀、角色的描寫、最後漫畫呈現的媒材，都能夠更加的完整與成熟。我相信一個更完整的《勇者系列》絕對值得被實體印刷出版、推出週邊商品和玩具，讓喜愛的讀者收藏。

甚至有機會的話，做為一個漫畫家，也想挑戰讓《勇者系列》動畫化的可能性。

然而，要達成這些目標，僅僅依靠我現有的資源是不足夠的。為了生活，漫畫家必須要有收入來源，這些能帶來收入的工作，必然會壓縮到我創作《勇者系列》的時間。再者，在獨力作業的前提下，要把Facebook頁面上的圖畫，變成可以實體出版的成品，甚至是可以收藏的週邊玩具，都會是非常艱鉅的挑戰。因此，經過一段時間的討論與準備，我開啓了這個「勇者系列 • 訂閱集資計畫」，希望借由各位讀者每個月一點一滴的贊助，幫助我將這樣的想法，化為可能。

「因為有你每個月付出的訂閱贊助，勇者才有資金購買武器防具，踏上冒險旅途，這樣的關係很浪漫吧！」
為了感謝願意訂閱這個計劃的支持者，《勇者系列》準備了各式各樣的回饋，要提供給每一位支持訂閱集資計畫的朋友，請大家繼續看下去↓↓↓


獨家的專屬回饋，獻給每一位勇者的夥伴#
「感謝您的支持，請讓我為您準備這些屬於您的禮物！」

【支持套餐】用小額贊助讓黃色書刊畫出更多的故事。#

每月訂閱 80 元，你就能夠加入專屬於訂閱者的私密社團，每周都會有新的勇者系列漫畫於社團內發表。社團內的漫畫將不會於粉絲團露出，是只有訂閱者能看見的特別番外篇！
',
        ]);
        Feedback::create([
            'project_id' => 29,
            'date' => '2019-1-1',
            'price' => 960,
            'backer' => 101,
            'description' => '【一年份，支持套餐】每個月 80 元，一年份 1 次繳清 ，加入專屬勇者系列粉絲的私密社團，社團內每週會更新不公開的勇者系列漫畫電子版，讓你更了解角色背後的故事，還有不定時的幕後花絮！帶你探索勇者系列的世界！

① 加入專屬社團，每週更新，不公開的勇者系列漫畫

-- 
✔ 適合沒有信用卡的朋友 
✔ 一次預繳一年（ 12 個月 ）',
        ]);
        Feedback::create([
            'project_id' => 29,
            'date' => '2019-1-1',
            'price' => 2040,
            'backer' => 118,
            'description' => '【一年份，精良套餐】每個月 170 元，一年份 1 次繳清，身為勇者系列的藏家級粉絲，我想要每個月收到一套，不同主題的勇者系列插畫明信片。這些插畫都是黃色書刊特別額外繪製的。

① 加入專屬社團，每週更新，不公開的勇者系列漫畫 
② 每個月收到一套（共三張），特別繪製的勇者系列插畫明信片

-- 
✔ 適合沒有信用卡的朋友 
✔ 一次預繳一年（ 12 個月 ）',
        ]);
        Feedback::create([
            'project_id' => 29,
            'date' => '2019-1-1',
            'price' => 3120,
            'backer' => 160,
            'description' => '【一年份，卓越套餐】每個月 260 元，一年份 1 次繳清，身為超級勇者迷，我想要每個月收到一本「勇者系列」實體漫畫小冊。實體小冊的內容是各個人氣角色，不為人知的番外篇故事！

① 加入專屬社團，每週更新，不公開的勇者系列漫畫 
② 每個月收到一套（共三張），特別繪製的勇者系列插畫明信片 
③ 每個月收到一本，「角色番外篇」實體漫畫小冊

-- 
✔ 適合沒有信用卡的朋友 
✔ 一次預繳一年（ 12 個月 ）',
        ]);
        Feedback::create([
            'project_id' => 29,
            'date' => '2019-1-1',
            'price' => 4080,
            'backer' => 98,
            'description' => '【一年份，史詩套餐】每個月 680 元，一年份 1 次繳清 ，終極勇者控，除了能享有「卓越套餐」的全部回饋之外，每一季還會給你一隻限定的勇者系列角色公仔！（2018/9、2018/10、2018/11加入史詩套餐訂閱，收到的是「慾望女王」角色公仔！）

① 加入專屬社團，每週更新，不公開的勇者系列漫畫 
② 每個月收到一套（共三張），特別繪製的勇者系列插畫明信片 
③ 每個月收到一本，「角色番外篇」實體漫畫小冊 
④ 獲得四隻限定勇者系列角色公仔之取得條件

-- 
✔ 適合沒有信用卡的朋友 
✔ 一次預繳一年（ 12 個月 ）

※由於工廠製作流程，每隻角色模型需花費五至六個月以上的製作時間，待有明確的寄出時間都會再另外發公告通知各位訂閱者，謝謝！',
        ]);
        Feedback::create([
            'project_id' => 29,
            'date' => '2019-1-1',
            'price' => 8160,
            'backer' => 101,
            'description' => '【半年份，史詩套餐】每個月 680 元，半年份 1 次繳清 ，終極勇者控，除了能享有「卓越套餐」的全部回饋之外，每一季還會給你一隻限定的勇者系列角色公仔！（2018/9、2018/10、2018/11加入史詩套餐訂閱，收到的是「慾望女王」角色公仔！）

① 加入專屬社團，每週更新，不公開的勇者系列漫畫 
② 每個月收到一套（共三張），特別繪製的勇者系列插畫明信片 
③ 每個月收到一本，「角色番外篇」實體漫畫小冊 
④ 獲得兩隻限定勇者系列角色公仔之取得條件

-- 
✔ 適合沒有信用卡的朋友 
✔ 一次預繳半年（ 6 個月 ）

※由於工廠製作流程，每隻角色模型需花費五至六個月以上的製作時間，待有明確的寄出時間都會再另外發公告通知各位訂閱者，謝謝！',
        ]);

        Project::create([
            'raising_user_id' => 30,
            'fundraiser' => '陳澄潘',
            'email' => $faker->email,
            'name' => '台灣漫畫咸魚翻生行動《咸魚應援團SFXing》',
            'category_id' => 15,
            'started_at' => '2018-12-3 ',
            'ended_at' => '2019-1-28',
            'curr_amount' => 0,
            'goal_amount' => 80000,
            'relative_web' => 'www.zeczec.com/projects/sfxing?r=k3084470057',
            'backer' => 0,
            'brief' => '全民創作台灣動漫IP，全民共享快樂與權益',
            'description' => '《咸魚応援団SFXing》#
I have a dream!#
這個夢想，不只是屬於提案人的，更應該是中華民國全台澎金馬東南沙人，所共同擁有的！這個夢想叫：動漫IP (智慧產權)夢。



如果有機會的話，這個夢想的實現，應該是從漫畫開始，再串聯起動(A)、漫(C)、玩(G)環節，逐步為我國建構起能夠永續發展的ACG產業，讓我們在國際間爭一席位！借鑒美日等IP輸出大國例證，在國力蛻變3.0中，ACG產業是關鍵一環，諸如A隊長、霧島等，不勝枚舉。

如果有機會的話，作為禮運大同的國度，我們的IP更可採用開放授權制，讓人人有機會參與，即使不會畫圖的民眾，只要有好點子，也能擔任漫畫內容原作者(編劇)，擁有著作權益。這樣可望：開拓真正屬於中華民國全民的動漫IP，同時為我國ACG產業在相對較短的時間內，提供生生不息的創作能量、與源源不絕的就業機會！

如果真的有機會的話，我們年輕人就可以理直氣壯對老人說：「再逼我，信不信我投身漫畫行業！我才不要做(蛻變1.0都還沒完成的)可憐蟲！！」

如果有機會…

……

鄉親們，以下這個提案，是要告訴大家：
機會，來了；
而且，行動已經展開了！

從目前的情報可知，事情大概是這樣的：

「控八星人」(他們是這樣稱呼自己)見地球咸魚化日益嚴重，自己的星球又日漸枯竭，遂召喚地球生物(他們先選了貓)為媒介，引領地球廣大咸魚，進入控八星人設計的応援舞台(「夢芝居」)，透過豐盛的AV饗宴，令咸魚的能量大振(例如MP UP!)，並達到翻生狀態，過程中釋出的能量，更透過外溢效應，生放送給控八星使用。現在起，控八星人委託我國，把每個応援事件製成MIT動漫，向全宇宙宣揚其応人如己的理念。

以下圖案，疑似是控八星人的代表「控八公」，山寨我國香港地區的花牌而製成，然後傳送至地球。至今未知有關方面是否收到；提案人收到了。


從提案短片(提案人剪輯)可見，原始圖檔訊號以適當app開啟後，裡面原來還夾了訊息，原文是這樣的：


因此，一切明朗化了--- 來，行動注意！

MISSION: MIT COMIC REVIVAL via「控八星人」応援「咸魚星人」

CODE: SFXing MIT-poc

TITLE: 咸魚応援団 Salted Fish Crossing

其中過程先不贅述了，直接報告如下---

目前進度

第一集70頁全手繪MIT「彩色漫畫」製作完成；
第一集漫畫封面修飾完成；
第一集海報 + 第二集海報完成；
第一集「応援主題歌」(詞、曲、唱)製作完成；
2隻純手作「手辦公仔」(第一集応援貓nora + 前傳生物OUEN)原型製作完成。',
        ]);
        Feedback::create([
            'project_id' => 30,
            'date' => '2019-1-1',
            'price' => 80,
            'backer' => 0,
            'description' => '1. 第一集《祖母的餑餑》70p全部內容(pdf)下載 
["控由心生"，為了盡快"讓美好的事物發生"，贊助後3天內可獲得連結，不需要等達標實現]',
        ]);
        Feedback::create([
            'project_id' => 30,
            'date' => '2019-1-1',
            'price' => 180,
            'backer' => 0,
            'description' => '2. 第一集《祖母的餑餑》+ 第二集《紗布之女》高解析插圖(jpg)下載 
1. 第一集《祖母的餑餑》70p全部內容(pdf)下載 
["控由心生"，為了盡快"讓美好的事物發生"，贊助後3天內可獲得1,2之連結，不需要等達標實現]',
        ]);
        Feedback::create([
            'project_id' => 30,
            'date' => '2019-1-1',
            'price' => 480,
            'backer' => 0,
            'description' => '3. 第一集《祖母的餑餑》印刷版1本(內含黑白及全彩內頁) 
2. 第一集《祖母的餑餑》+ 第二集《紗布之女》高解析插圖(jpg)下載 
1. 第一集《祖母的餑餑》70p全部內容(pdf)下載 
["控由心生"，為了盡快"讓美好的事物發生"，贊助後3天內可獲得1,2之連結，不需要等達標實現]',
        ]);Feedback::create([
            'project_id' => 30,
            'date' => '2019-1-1',
            'price' => 880,
            'backer' => 0,
            'description' => '4. 第一集「応援主題歌」全集光碟1枚；收錄了3個版本：動漫合唱版、前輩示範版、伴奏版，更附上NG視頻片段喔！ 
3. 第一集《祖母的餑餑》印刷版1本(內含黑白及全彩內頁) 
2. 第一集《祖母的餑餑》+ 第二集《紗布之女》高解析插圖(jpg)下載 
1. 第一集《祖母的餑餑》70p全部內容(pdf)下載 
["控由心生"，為了盡快"讓美好的事物發生"，贊助後3天內可獲得1,2之連結，不需要等達標實現]',
        ]);Feedback::create([
            'project_id' => 30,
            'date' => '2019-1-1',
            'price' => 3380,
            'backer' => 0,
            'description' => '6. 控八公手作花牌(第二集漫畫封面)記載您芳名，從此八控無窮，名垂宇宙 
5. 為表參拜之意，上述兩位戲曲小梅花親自為您製作並獻上小禮物！ 
4. 第一集「応援主題歌」全集光碟1枚；收錄了3個版本：動漫合唱版、前輩示範版、伴奏版，更附上NG視頻片段喔！ 
3. 第一集《祖母的餑餑》印刷版1本(內含黑白及全彩內頁) 
2. 第一集《祖母的餑餑》+ 第二集《紗布之女》高解析插圖(jpg)下載 
1. 第一集《祖母的餑餑》70p全部內容(pdf)下載 
["控由心生"，為了盡快"讓美好的事物發生"，贊助後3天內可獲得1,2之連結，不需要等達標實現]',
        ]);
    }
}
