<?php
function thisMonth($now){
    date_default_timezone_set('Asia/Tokyo');
    if (isset($now)) {
        $ym = $now;
        return $ym;
    } else {
        // 今月の年月を表示
        $ym = date('Y-m');
        return $ym;
    }
}
function make($day_count,$youbi,$ym,$today,$week,$weeks) {
    for ( $day = 1; $day <= $day_count; $day++, $youbi++) {

        // 2017-07-3
        $date = $ym . '-' . $day;
    
        if ($today == $date) {
            // 今日の日付の場合は、class="today"をつける
            $week .= '<td class="today">' . $day;
        } elseif($today <= $date) {
            $week .= '<td>' . $day . "<a href='a.php?reservation=$date'>飛ぶ</a>"; 
        } else {
            $week .= '<td>' . $day;
        }
        $week .= '</td>';
    
        // 週終わり、または、月終わりの場合
        if ($youbi % 7 == 6 || $day == $day_count) {
    
            if ($day == $day_count) {
                // 月の最終日の場合、空セルを追加
                // 例）最終日が木曜日の場合、金・土曜日の空セルを追加
                $week .= str_repeat('<td></td>', 6 - ($youbi % 7));
            }
    
            // weeks配列にtrと$weekを追加する
            $weeks[] = '<tr>' . $week . '</tr>';
    
            // weekをリセット
            $week = '';
        }
    }
    return $weeks;
}
?>