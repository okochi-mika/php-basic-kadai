<?php
$score1 = 80;
$score2 = 60;
$score3 = 55;
$score4 = 40;
$score5 = 100;
$score6 = 25;
$score7 = 80;
$score8 = 95;
$score9 = 30;
$score10 = 60;

// 合計点の計算
$totalScore = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;

// 平均点の計算
$averageScore = $totalScore / 10;

// 結果をブラウザに表示
echo "合計点: " . $totalScore . "<br>";
echo "平均点: " . $averageScore;

?>