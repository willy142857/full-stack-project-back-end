<?php

use App\User;
use Illuminate\Database\Seeder;

class TrueUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $faker = \Faker\Factory::create('zh_TW');
        $updatedAt = now()->subDays(rand(0, 500));

        User::create([
            'name' => '馬叔叔 Uncle Ma',
            'email' => $faker->email,
            'password' => Hash::make($faker->password),
            'phone' => $faker->phoneNumber,
            'description' => '',
            'sex' => '男',
            'address' => $faker->address,
            'birth' => now()->subDays(rand(5840, 36500)),
            'created_at' => $updatedAt->subDays(rand(1, 300)),
            'updated_at' => $updatedAt,
        ]);

        User::create([
            'name' => 'Typhoon',
            'email' => $faker->email,
            'password' => Hash::make($faker->password),
            'phone' => $faker->phoneNumber,
            'description' => '讓來自台灣的聲音，像颱風般席捲世界

關注我們的 Instagram

按讚我們的 Facebook

想要聯名合作迷你號角 tpminihorn@gmail.com',
            'sex' => (rand(0, 1) == 0) ? '男' : '女',
            'address' => $faker->address,
            'birth' => now()->subDays(rand(5840, 36500)),
            'created_at' => $updatedAt->subDays(rand(1, 300)),
            'updated_at' => $updatedAt,
        ]);

        User::create([
            'name' => '女子的海',
            'email' => $faker->email,
            'password' => Hash::make($faker->password),
            'phone' => $faker->phoneNumber,
            'description' => '女子的海MsOcean 以分享女子自由潛水相關知識、上課資訊、國內外潛點、裝備相關資訊分享。讓女子們潛的安心，潛的開心，潛的漂亮。',
            'sex' => (rand(0, 1) == 0) ? '男' : '女',
            'address' => $faker->address,
            'birth' => now()->subDays(rand(5840, 36500)),
            'created_at' => $updatedAt->subDays(rand(1, 300)),
            'updated_at' => $updatedAt,
        ]);

        User::create([
            'name' => '異角藝術',
            'email' => $faker->email,
            'password' => Hash::make($faker->password),
            'phone' => $faker->phoneNumber,
            'description' => '在方型的觀景窗中，你想看見什麼呢？

異角藝術是台灣目前唯一導入攝影經紀制度的公司，2017年我們成為IPA國際組織在台唯一合作夥伴，推廣攝影比賽，希望台灣的攝影師有更多的機會走向國際舞台。
我們也認為在拍照成為全民運動的年代，影像的欣賞能力同樣重要。透過「Art Angle edition」長期計畫，定期籌劃大型攝影展，讓觀眾從觀看中建立一套自己的美感思維。

最後，我們希望讓攝影回歸現實與光影，讓照片不再只是照片。',
            'sex' => (rand(0, 1) == 0) ? '男' : '女',
            'address' => $faker->address,
            'birth' => now()->subDays(rand(5840, 36500)),
            'created_at' => $updatedAt->subDays(rand(1, 300)),
            'updated_at' => $updatedAt,
        ]);

        User::create([
            'name' => '找蔬食Traveggo',
            'email' => $faker->email,
            'password' => Hash::make($faker->password),
            'phone' => $faker->phoneNumber,
            'description' => '2017年暑假，一對蔬食情侶攜手找蔬食，拍攝美味的餐廳介紹影片、也繪製蔬食相關資訊圖文，設計製作「台北捷運蔬食地圖」，想要串聯店家及消費者，並且順手做公益！',
            'sex' => (rand(0, 1) == 0) ? '男' : '女',
            'address' => $faker->address,
            'birth' => now()->subDays(rand(5840, 36500)),
            'created_at' => $updatedAt->subDays(rand(1, 300)),
            'updated_at' => $updatedAt,
        ]);

        User::create([
            'name' => '鄭心心好友群',
            'email' => $faker->email,
            'password' => Hash::make($faker->password),
            'phone' => $faker->phoneNumber,
            'description' => '',
            'sex' => '男',
            'address' => $faker->address,
            'birth' => now()->subDays(rand(5840, 36500)),
            'created_at' => $updatedAt->subDays(rand(1, 300)),
            'updated_at' => $updatedAt,
        ]);

        User::create([
            'name' => 'HiZam',
            'email' => $faker->email,
            'password' => Hash::make($faker->password),
            'phone' => $faker->phoneNumber,
            'description' => '',
            'sex' => (rand(0, 1) == 0) ? '男' : '女',
            'address' => $faker->address,
            'birth' => now()->subDays(rand(5840, 36500)),
            'created_at' => $updatedAt->subDays(rand(1, 300)),
            'updated_at' => $updatedAt,
        ]);

        User::create([
            'name' => '野孩子肢體劇場',
            'email' => $faker->email,
            'password' => Hash::make($faker->password),
            'phone' => $faker->phoneNumber,
            'description' => '「野孩子」為肢體默劇表演者姚尚德於2011年創立。野孩子期望從默劇肢體出發，試圖走出劇場空間，回歸在地文化，以表演尋找與人及社會更深的互動。此外，更期望藉由開辦常態性的肢體工作坊及課程，培養對表演藝術有興趣的弱勢青少年人文修養及表演專長。',
            'sex' => '男',
            'address' => $faker->address,
            'birth' => now()->subDays(rand(5840, 36500)),
            'created_at' => $updatedAt->subDays(rand(1, 300)),
            'updated_at' => $updatedAt,
        ]);

        User::create([
            'name' => '源源鋼藝 uanuan',
            'email' => $faker->email,
            'password' => Hash::make($faker->password),
            'phone' => $faker->phoneNumber,
            'description' => '我們是一群熱情創新的設計團隊，以及有悠久代工歷史的不銹鋼廠，共同挑戰代工轉型的品牌。希望創造親切溫暖的不銹鋼產品，讓環保又永續的不銹鋼因為設計而被更多人使用，讓產品提倡人與自然的友善，讓感動傳遞，讓人本的溫暖，源源不絕融進原屬冷冽的材質。
　
最棒的不銹鋼精神
Looks cool, feels warm.',
            'sex' => (rand(0, 1) == 0) ? '男' : '女',
            'address' => $faker->address,
            'birth' => now()->subDays(rand(5840, 36500)),
            'created_at' => $updatedAt->subDays(rand(1, 300)),
            'updated_at' => $updatedAt,
        ]);

        User::create([
            'name' => 'yu',
            'email' => $faker->email,
            'password' => Hash::make($faker->password),
            'phone' => $faker->phoneNumber,
            'description' => 'yu 是一個以防水功能為核心的服飾品牌
融合時尚、機能、實穿性等元素，以「任何天氣都能從容自在的出門」為目的，希望改變您對雨天的想像。',
            'sex' => (rand(0, 1) == 0) ? '男' : '女',
            'address' => $faker->address,
            'birth' => now()->subDays(rand(5840, 36500)),
            'created_at' => $updatedAt->subDays(rand(1, 300)),
            'updated_at' => $updatedAt,
        ]);

        User::create([
            'name' => '有機體工作坊',
            'email' => $faker->email,
            'password' => Hash::make($faker->password),
            'phone' => $faker->phoneNumber,
            'description' => '因咖啡聚集的同好，致力製作推廣好喝的有機咖啡，努力向著可以兼顧健康與品味、盡情沉浸於咖啡的世界前進。

有機體工作坊 Organism House',
            'sex' => (rand(0, 1) == 0) ? '男' : '女',
            'address' => $faker->address,
            'birth' => now()->subDays(rand(5840, 36500)),
            'created_at' => $updatedAt->subDays(rand(1, 300)),
            'updated_at' => $updatedAt,
        ]);

        User::create([
            'name' => '宅時毛',
            'email' => $faker->email,
            'password' => Hash::make($faker->password),
            'phone' => $faker->phoneNumber,
            'description' => '宅宅的，喜歡研究，追求更合乎邏輯而且美好的生活。',
            'sex' => (rand(0, 1) == 0) ? '男' : '女',
            'address' => $faker->address,
            'birth' => now()->subDays(rand(5840, 36500)),
            'created_at' => $updatedAt->subDays(rand(1, 300)),
            'updated_at' => $updatedAt,
        ]);

        User::create([
            'name' => 'Wils Fabrik Taiwan',
            'email' => $faker->email,
            'password' => Hash::make($faker->password),
            'phone' => $faker->phoneNumber,
            'description' => '宅宅的，喜歡研究，追求更合乎邏輯而且美好的生活。',
            'sex' => (rand(0, 1) == 0) ? '男' : '女',
            'address' => $faker->address,
            'birth' => now()->subDays(rand(5840, 36500)),
            'created_at' => $updatedAt->subDays(rand(1, 300)),
            'updated_at' => $updatedAt,
        ]);

        User::create([
            'name' => 'ZEBRA TIGER',
            'email' => $faker->email,
            'password' => Hash::make($faker->password),
            'phone' => $faker->phoneNumber,
            'description' => 'ZEBRA TIGER 是一個新成立的服飾品牌，我們透過一套『服飾經營2.0』流程，顛覆傳統的服飾經營。以便解決舊服飾堆積的問題～
希望品牌能展現出更具現代化的經營模式，並結合了公益項目，讓閒置的服飾創造出有意義的價值。
我們的產品將全程MIT製造，不但為台灣本土製造了就業機會，也展現出台灣紡織工藝的高品質～
後期也希望將品牌延伸至國外，讓台灣多一項品牌站上國際舞台！',
            'sex' => (rand(0, 1) == 0) ? '男' : '女',
            'address' => $faker->address,
            'birth' => now()->subDays(rand(5840, 36500)),
            'created_at' => $updatedAt->subDays(rand(1, 300)),
            'updated_at' => $updatedAt,
        ]);

        User::create([
            'name' => '拓可思',
            'email' => $faker->email,
            'password' => Hash::make($faker->password),
            'phone' => $faker->phoneNumber,
            'description' => '',
            'sex' => (rand(0, 1) == 0) ? '男' : '女',
            'address' => $faker->address,
            'birth' => now()->subDays(rand(5840, 36500)),
            'created_at' => $updatedAt->subDays(rand(1, 300)),
            'updated_at' => $updatedAt,
        ]);

        User::create([
            'name' => '108全大運執行辦公室',
            'email' => $faker->email,
            'password' => Hash::make($faker->password),
            'phone' => $faker->phoneNumber,
            'description' => '2019，全國大專校院運動會在中正大學
【108全大運執行辦公室，為任務型組織】
我們由衷希望在有限資源中突破 , 創造更多元的價值產生共鳴
108全大運在中正 , 正是聚集全台年輕選手的時刻！
讓年輕選手看見大家支持的力量 , 醞釀年輕選手在未來的舞台發光放熱',
            'sex' => (rand(0, 1) == 0) ? '男' : '女',
            'address' => $faker->address,
            'birth' => now()->subDays(rand(5840, 36500)),
            'created_at' => $updatedAt->subDays(rand(1, 300)),
            'updated_at' => $updatedAt,
        ]);

        User::create([
            'name' => '一彈 One Thumb',
            'email' => $faker->email,
            'password' => Hash::make($faker->password),
            'phone' => $faker->phoneNumber,
            'description' => '一彈國際有限公司，創新設計選物專家，讓居家生活更美好。',
            'sex' => (rand(0, 1) == 0) ? '男' : '女',
            'address' => $faker->address,
            'birth' => now()->subDays(rand(5840, 36500)),
            'created_at' => $updatedAt->subDays(rand(1, 300)),
            'updated_at' => $updatedAt,
        ]);

        User::create([
            'name' => 'iReo',
            'email' => $faker->email,
            'password' => Hash::make($faker->password),
            'phone' => $faker->phoneNumber,
            'description' => '語言翻譯耳機的領跑者',
            'sex' => (rand(0, 1) == 0) ? '男' : '女',
            'address' => $faker->address,
            'birth' => now()->subDays(rand(5840, 36500)),
            'created_at' => $updatedAt->subDays(rand(1, 300)),
            'updated_at' => $updatedAt,
        ]);

        User::create([
            'name' => '人權辦桌',
            'email' => $faker->email,
            'password' => Hash::make($faker->password),
            'phone' => $faker->phoneNumber,
            'description' => '人權辦桌是一場突發奇想的行動實踐，起源自去年志工們聽白色恐怖受難長輩分享受難出獄後，由於整體社會的排斥、國家政權的監控與隔離，使得他在街上流浪近三年的生活。從這段長輩口述的過往，不禁讓我們想像，當眼前的人在街上遊走，他的身分多元，可能是一位政治受難者、或者被剝削的勞工，他是活生生的人，有自己的故事、自己的人生、自己的現在、過去，與未來。
透過辦桌，促成彼此的交流、試圖和社會產生更多的聯結與對話，人權辦桌不只想要讓現下的社會現象能夠被看見，更期望有機會突破社會階級的劃分、消除標籤，透過探詢群體與個人的生命經驗，一點一滴累積，促成更多的互動和迴響，也期盼更加自由與平等的未來。',
            'sex' => (rand(0, 1) == 0) ? '男' : '女',
            'address' => $faker->address,
            'birth' => now()->subDays(rand(5840, 36500)),
            'created_at' => $updatedAt->subDays(rand(1, 300)),
            'updated_at' => $updatedAt,
        ]);

        User::create([
            'name' => 'owl in box',
            'email' => $faker->email,
            'password' => Hash::make($faker->password),
            'phone' => $faker->phoneNumber,
            'description' => '人權辦桌是一場突發奇想的行動實踐，起源自去年志工們聽白色恐怖受難長輩分享受難出獄後，由於整體社會的排斥、國家政權的監控與隔離，使得他在街上流浪近三年的生活。從這段長輩口述的過往，不禁讓我們想像，當眼前的人在街上遊走，他的身分多元，可能是一位政治受難者、或者被剝削的勞工，他是活生生的人，有自己的故事、自己的人生、自己的現在、過去，與未來。
透過辦桌，促成彼此的交流、試圖和社會產生更多的聯結與對話，人權辦桌不只想要讓現下的社會現象能夠被看見，更期望有機會突破社會階級的劃分、消除標籤，透過探詢群體與個人的生命經驗，一點一滴累積，促成更多的互動和迴響，也期盼更加自由與平等的未來。',
            'sex' => (rand(0, 1) == 0) ? '男' : '女',
            'address' => $faker->address,
            'birth' => now()->subDays(rand(5840, 36500)),
            'created_at' => $updatedAt->subDays(rand(1, 300)),
            'updated_at' => $updatedAt,
        ]);

        User::create([
            'name' => 'Meggy Li',
            'email' => $faker->email,
            'password' => Hash::make($faker->password),
            'phone' => $faker->phoneNumber,
            'description' => '人權辦桌是一場突發奇想的行動實踐，起源自去年志工們聽白色恐怖受難長輩分享受難出獄後，由於整體社會的排斥、國家政權的監控與隔離，使得他在街上流浪近三年的生活。從這段長輩口述的過往，不禁讓我們想像，當眼前的人在街上遊走，他的身分多元，可能是一位政治受難者、或者被剝削的勞工，他是活生生的人，有自己的故事、自己的人生、自己的現在、過去，與未來。
透過辦桌，促成彼此的交流、試圖和社會產生更多的聯結與對話，人權辦桌不只想要讓現下的社會現象能夠被看見，更期望有機會突破社會階級的劃分、消除標籤，透過探詢群體與個人的生命經驗，一點一滴累積，促成更多的互動和迴響，也期盼更加自由與平等的未來。',
            'sex' => '女',
            'address' => $faker->address,
            'birth' => now()->subDays(rand(5840, 36500)),
            'created_at' => $updatedAt->subDays(rand(1, 300)),
            'updated_at' => $updatedAt,
        ]);

        User::create([
            'name' => 'BEN&DRY',
            'email' => $faker->email,
            'password' => Hash::make($faker->password),
            'phone' => $faker->phoneNumber,
            'description' => '',
            'sex' => '男',
            'address' => $faker->address,
            'birth' => now()->subDays(rand(5840, 36500)),
            'created_at' => $updatedAt->subDays(rand(1, 300)),
            'updated_at' => $updatedAt,
        ]);

        User::create([
            'name' => 'RIG group',
            'email' => $faker->email,
            'password' => Hash::make($faker->password),
            'phone' => $faker->phoneNumber,
            'description' => '',
            'sex' => (rand(0, 1) == 0) ? '男' : '女',
            'address' => $faker->address,
            'birth' => now()->subDays(rand(5840, 36500)),
            'created_at' => $updatedAt->subDays(rand(1, 300)),
            'updated_at' => $updatedAt,
        ]);

        User::create([
            'name' => '玩思once實境遊戲',
            'email' => $faker->email,
            'password' => Hash::make($faker->password),
            'phone' => $faker->phoneNumber,
            'description' => '',
            'sex' => (rand(0, 1) == 0) ? '男' : '女',
            'address' => $faker->address,
            'birth' => now()->subDays(rand(5840, 36500)),
            'created_at' => $updatedAt->subDays(rand(1, 300)),
            'updated_at' => $updatedAt,
        ]);

        User::create([
            'name' => '吳成夫',
            'email' => $faker->email,
            'password' => Hash::make($faker->password),
            'phone' => $faker->phoneNumber,
            'description' => '公益旅行 X 旅遊作家 X 旅遊節目主持人 X 設計師',
            'sex' => (rand(0, 1) == 0) ? '男' : '女',
            'address' => $faker->address,
            'birth' => now()->subDays(rand(5840, 36500)),
            'created_at' => $updatedAt->subDays(rand(1, 300)),
            'updated_at' => $updatedAt,
        ]);

        User::create([
            'name' => '金甘蔗影展',
            'email' => $faker->email,
            'password' => Hash::make($faker->password),
            'phone' => $faker->phoneNumber,
            'description' => '',
            'sex' => (rand(0, 1) == 0) ? '男' : '女',
            'address' => $faker->address,
            'birth' => now()->subDays(rand(5840, 36500)),
            'created_at' => $updatedAt->subDays(rand(1, 300)),
            'updated_at' => $updatedAt,
        ]);

        User::create([
            'name' => '踮腳尖',
            'email' => $faker->email,
            'password' => Hash::make($faker->password),
            'phone' => $faker->phoneNumber,
            'description' => '',
            'sex' => (rand(0, 1) == 0) ? '男' : '女',
            'address' => $faker->address,
            'birth' => now()->subDays(rand(5840, 36500)),
            'created_at' => $updatedAt->subDays(rand(1, 300)),
            'updated_at' => $updatedAt,
        ]);

        User::create([
            'name' => '舊視界文化藝術',
            'email' => $faker->email,
            'password' => Hash::make($faker->password),
            'phone' => $faker->phoneNumber,
            'description' => '舊視界文化藝術有限公司，成立於2007年，致力於發掘真實之中的「經典觀點」，呈現於富有影響力的影像作品。成立以來，一步一腳印，製作正面感人的影像作品，成為國際影展的常勝軍，更走入國際，開拓資金來源與發行管道，成績斐然。走遍國際提案大會，屢獲入選，更參加各項市場展，發行範圍遍及中國大陸、中東、非洲、美洲。不僅為團隊目標走出一條路，更為台灣紀錄片走出一片天。
舊，[經久如實]。創造經典，改變視界。',
            'sex' => (rand(0, 1) == 0) ? '男' : '女',
            'address' => $faker->address,
            'birth' => now()->subDays(rand(5840, 36500)),
            'created_at' => $updatedAt->subDays(rand(1, 300)),
            'updated_at' => $updatedAt,
        ]);

        User::create([
            'name' => '黃色書刊',
            'email' => $faker->email,
            'password' => Hash::make($faker->password),
            'phone' => $faker->phoneNumber,
            'description' => '黃色在你眼中是什麼樣的顏色，那它就是什麼樣的顏色。',
            'sex' => (rand(0, 1) == 0) ? '男' : '女',
            'address' => $faker->address,
            'birth' => now()->subDays(rand(5840, 36500)),
            'created_at' => $updatedAt->subDays(rand(1, 300)),
            'updated_at' => $updatedAt,
        ]);

        User::create([
            'name' => '陳澄潘',
            'email' => $faker->email,
            'password' => Hash::make($faker->password),
            'phone' => $faker->phoneNumber,
            'description' => '台灣IP發達 祈願！
醫學系畢業後，我沒成為濟世為懷的醫生，卻投身國際醫藥內容行業，沒完沒了的寫稿，深諳內容為王、天下為公的道理，再加上台灣又是充滿故事的寶地；這些，也許是控八公跟我接觸的原因。如今，我成為了SFXing的志工提案人、執事 and 贊助(還沒到第二集就><贊光了) 。',
            'sex' => (rand(0, 1) == 0) ? '男' : '女',
            'address' => $faker->address,
            'birth' => now()->subDays(rand(5840, 36500)),
            'created_at' => $updatedAt->subDays(rand(1, 300)),
            'updated_at' => $updatedAt,
        ]);
    }
}
