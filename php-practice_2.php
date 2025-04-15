<?php
// Q1 tic-tac問題
echo "1から100までのカウントを開始します\n\n";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 4 === 0 && $i % 5 === 0) {
        echo "tic-tac\n";
    } elseif ($i % 4 === 0) {
        echo "tic\n";
    } elseif ($i % 5 === 0) {
        echo "tac\n";
    } else {
        echo $i . "\n";
    }
}

// Q2 多次元連想配列
// 課題1
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];

echo $personalInfos[1]['name'] . "の電話番号は" . $personalInfos[1]['tel'] . "です。\n";

// 課題2
foreach ($personalInfos as $index => $values) {
  $index++;
  echo $index . "番目の" . $values['name'] . "のメールアドレスは" . $values['mail'] . "で、電話番号は" . $values['tel'] . "です。\n";

}

// 課題3
$ageList = [25, 30, 18];
foreach ($personalInfos as $index => $values) {
  $personalInfos[$index]['age'] = $ageList[$index];
}
var_dump($personalInfos);

// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
}

$student = new Student(120, '山田');
echo "学籍番号" . $student->studentId . "番の生徒は" . $student->studentName . "です。";


// Q4 オブジェクト-2
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($class)
    {
        echo $this->studentName . "は" . $class . "の授業に参加しました。学籍番号:" . $this->studentId;
    }
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP');

// Q5 定義済みクラス
// 課題1
$date = new DateTime();
echo $date->modify('-1 month')->format('Y-m-d');

// 課題2
$today = new DateTime();
$oneday = new DateTime('1992-04-25');
$diffday = $oneday->diff($today)->format('%a');
echo 'あの日から' . $diffday . '日経過しました。';
?>