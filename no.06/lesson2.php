<?php
// 下記のようにlesson1のファイルをインポートしてください。
// (他のファイルを参照する関数はいくつかあるので調べてください。)
// (lesson1の文字列がそのまま出力されてしまっていても大丈夫とします。)

require('lesson1.php');


// 下記のクラスを作成してください。

// Patient 
// lesson1からPersonを継承

class Patient extends Person{
  private float $height;

  private float $weight;

  public function __construct($name, $age, $gender, $height, $weight){
    $this->name = $name;
    $this->age = $age;
    $this->gender = $gender;
    $this->height = $height;
    $this->weight = $weight;
  }

  public function getHeight(){
    $this->height = $height;
  }

  public function getWeight(){
    $this->weight = $weight;
  }


  //calculateStandardWeight内の変数$averageWeightを　selfIntroduction内で表示できなかったので
  //selfIntroduction内でもう一度平均体重を算出しました。

  public function calculateStandardWeight(){
    $average = $this->height / 100;
    $averageWeight = round($average,1) * round($average,1) * 22;
  }

  public function selfIntroduction(){
   $average = $this->height / 100;
   $averageWeight = round($average,1) * round($average,1) * 22;

    echo "{$this->name}さんの身長は{$this->height}なので平均体重は{$averageWeight}kgです。現在の体重は{$this->weight}です。";
    echo "<br>";
  }
}

echo '<br>';

$patient = new Patient("伊藤", 29, "女性", 165.2, 55.5);
$patient -> selfIntroduction();


// height: float 身長（ｍ）private
// weight: float 体重 (kg) private

// __construct(name: string, age:int, gender: string, height: float, weight: float)
// 名前、年齢、性別、身長、体重を受け取り初期化する。

// calculateStandardWeight() :float
// 平均体重を返す （身長 × 身長 × 22)

// getHeight()
// 身長を返す

// getWeight()
// 体重を返す

// クラスが完成したら適当なインスタンスを生成し、
// それぞれの関数を使用して下記のフォーマットで出力してください。

// 〇〇さんの身長は〇〇mなので平均体重は〇〇kgです。 現在の体重は〇〇kgです。
