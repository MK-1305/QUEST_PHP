<?php
class Item {
    private $name;
    private $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }
}

class Beverage extends Item {
    public function __construct($name) {
        parent::__construct($name, 100);
    }
}

class CupCoffee extends Beverage {
    private $temperature;

    public function __construct($temperature) {
        parent::__construct("cup coffee");
        $this->temperature = $temperature;
    }

    public function getName() {
        return $this->temperature . " " . parent::getName();
    }
}

class Snack extends Item {
    public function __construct($name) {
        parent::__construct($name, 150);
    }
}

class VendingMachine {
    // 動的プロパティが非推奨なので明示的に宣言しておく
    private $manufacturer;
    // 自動販売機の内部に保持される金額
    private $balance = 0;
    private $cupStock = 0;

    // コンストラクタメソッド(初期化をして常に正しい値が入っている)
    public function __construct($manufacturerName) {
        $this->manufacturer = $manufacturerName;
    }

    // コインを入れるメソッド
    public function depositCoin($amount) {
        // 100円だけ入れられる
        if ($amount === 100) {
            $this->balance += $amount;
        }
    }

    // カップの管理メソッド
    public function addCup($count) {
        // 在庫は最大100個まで
        $this->cupStock = min(100, $this->cupStock + $count);
    }

    // ボタンを押すメソッド
    public function pressButton(Item $item) {
        if ($this->balance >= $item->getPrice()) {
            if ($item instanceof CupCoffee && $this->cupStock <= 0) {
                return 'カップコーヒーの在庫がありません';
            }

            $this->balance -= $item->getPrice();
            if ($item instanceof CupCoffee) {
                // カップコーヒーの場合はカップの在庫を減らす
                $this->cupStock--;
            }
            return $item->getName();
        }
        return '金額が足りません';
    }
    // メーカー名を返すメソッド
    private function pressManufacturerName() {
        return $this->manufacturer;
    }
}

?>