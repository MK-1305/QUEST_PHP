<?php

function main() {
    $pikachu = 'ピカチュウ';
    $hitokage = 'ヒトカゲ';
    $hpPikachu = 20;
    $hpHitokage = 18;

    echo "{$pikachu}があらわれた。{$pikachu}のHPは{$hpPikachu}だ。\n";
    echo "{$hitokage}があらわれた。{$hitokage}のHPは{$hpHitokage}だ。\n";

    while (true) {
        $hpHitokage = attackPikachu($hitokage, $hpHitokage);
        if (checkFainted($hpHitokage)) {
            echo "{$hitokage}はたおれた。{$pikachu}のかち！\n";
            break;
        }

        $hpPikachu = attackHitokage($pikachu, $hpPikachu);
        if (checkFainted($hpPikachu)) {
            echo "{$pikachu}はたおれた。{$hitokage}のかち！\n";
            break;
        }
    }
}

function attackPikachu($pokemon, $hp) {
    $damage = 10;
    $hp = $hp - $damage > 0 ? $hp - $damage : 0;

    echo "ピカチュウのこうげき！10万ボルト！{$pokemon}は{$damage}ダメージをもらった。{$pokemon}のHPは{$hp}だ。\n";
    return $hp;
}

function attackHitokage($pokemon, $hp) {
    $damage = 5;
    $hp = $hp - $damage > 0 ? $hp - $damage : 0;

    echo "ヒトカゲのこうげき！ひのこ！{$pokemon}は{$damage}ダメージをもらった。{$pokemon}のHPは{$hp}だ。\n";
    return $hp;
}

function checkFainted($hp) {
    return $hp <= 0;
}

main();

?>