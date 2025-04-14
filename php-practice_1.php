<?php
// Q1 変数と文字列
$name = '安藤';
echo '私の名前は「' . $name . '」です。';

// Q2 四則演算
echo $num = 5*4 . "\n";
echo $num / 2;

// Q3 日付操作
date_default_timezone_set('Asia/Tokyo');
$date = date('Y年m月d日 H時i分s秒');
$sentence = '現在時刻は、'. $date . 'です。';
echo $sentence;

// Q4 条件分岐-1 if文
$os = 'linux';
if ($os === 'windows' || $os === 'mac') {
    echo '使用OSは、' . $os .'です。';
} else {
    echo 'どちらでもありません。';
}

// Q5 条件分岐-2 三項演算子
$age = 18;
echo $age >= 18 ? '成人です。' : '未成年です';

// Q6 配列
$kanto = [
  '群馬県',
  '茨城県',
  '栃木県',
  '千葉県',
  '埼玉県',
  '東京都',
  '神奈川県'
];
echo "$kanto[2]と$kanto[3]は関東地方の都道府県です。";


// Q7 連想配列-1
$kanto = [
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市'
];
  
echo $kanto['東京都'] . "\n";
echo $kanto['神奈川県'] . "\n";
echo $kanto['千葉県'] . "\n";
echo $kanto['埼玉県'] . "\n";
echo $kanto['栃木県'] . "\n";
echo $kanto['群馬県'] . "\n";
echo $kanto['茨城県'] . "\n";

// Q8 連想配列-2
$saitama = '埼玉県';
if ($kanto[$saitama] === 'さいたま市') {
    echo $saitama . 'の県庁所在地は、' . $kanto[$saitama] . 'です。';
}

// Q9 連想配列-3
$kanto['愛知県'] = '名古屋市';
$kanto['大阪府'] = '大阪市';

foreach ($kanto as $ken => $shi) {
    if($ken === '愛知県' || $ken === '大阪府') {
        echo $ken . "は関東地方ではありません。\n";
    } else {
        echo $ken . 'の県庁所在地は、' . $shi . "です。\n";
    }
}

// Q10 関数-1
function hello($name) {
  return $name . "さん、こんにちは。\n";
}

$name = '金谷';
echo hello($name);

$name = '安藤';
echo hello($name);


// Q11 関数-2
function calcTaxInPrice($price) {
  return $price * 1.1;
}

$price = 1000;
$taxInPrice = calcTaxInPrice($price);
echo $price . '円の商品の税込価格は' . $taxInPrice . '円です。';

// Q12 関数とif文
function distinguishNum($number) {
  if($number % 2) {
      return $number . "は奇数です。\n";
  } else {
      return $number . "は偶数です。\n";
  }
}
$number = 11;
echo distinguishNum($number);

$number = 24;
echo distinguishNum($number);

// Q13 関数とswitch文
function evaluateGrade($assessment) {
  switch ($assessment) {
      case 'A':
      case 'B':
          return "合格です。\n";
          break;
      case 'C';
          return "合格ですが追加課題があります。\n";
          break;
      case 'D';
          return "不合格です。\n";
          break;
      default:
          return "判定不明です。講師に問い合わせてください。\n";
          break;
  }
}

$assessment = 'B';
echo evaluateGrade($assessment);

$assessment = 'G';
echo evaluateGrade($assessment);

?>