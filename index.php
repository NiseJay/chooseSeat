<!DOCTYPE html>
<html>
<head>
    <title>电影票选择demo</title>
    <meta http-equiv="content-type"content="text/html;charset=utf-8"/>
    <link rel="stylesheet"href="css/reset.css"type="text/css"/>
    <link rel="stylesheet"href="css/chooseSit.css"type="text/css"/>
</head>
<!--测试数据-->
<?php

    $seats = array (
        array(
                "LocNo" => "01",
                "HallNo" =>"HM10121006601",
                "HallName" =>"1号厅",
                "RowNo" =>"1",
                "SeatImgRow" =>"1",
                "ColumnNo" =>"ZL,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,ZL",
                "SeatType" =>"3,1,1,1,1,1,1,2,2,1,1,1,1,1,1,1,1,3",
                "SeatNo" =>",01010102,01010103,01010104,01010105,01010106,01010107,01010108,01010109,01010110,01010111,01010112,01010113,01010114,01010115,01010116,01010117,",
                "SeatStatus" =>"0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,"
            ),
        array
        (
            "LocNo" =>"01",
            "HallNo" =>"HM10121006601",
            "HallName" =>"1号厅",
            "RowNo" =>"2",
            "SeatImgRow" =>"2",
            "ColumnNo" =>"ZL,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,ZL",
            "SeatType" =>"3,1,1,1,1,1,1,1,1,1,1,1,1,2,2,1,1,3",
            "SeatNo" =>",01010202,01010203,01010204,01010205,01010206,01010207,01010208,01010209,01010210,01010211,01010212,01010213,01010214,01010215,01010216,01010217,",
            "SeatStatus" =>"0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,",
        ),

        array(
            "LocNo" =>"01",
            "HallNo" =>"HM10121006601",
            "HallName" =>"1号厅",
            "RowNo" =>"3",
            "SeatImgRow" =>"3",
            "ColumnNo" =>"ZL,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,ZL",
            "SeatType" =>"3,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,3",
            "SeatNo" =>",01010302,01010303,01010304,01010305,01010306,01010307,01010308,01010309,01010310,01010311,01010312,01010313,01010314,01010315,01010316,01010317,",
            "SeatStatus" =>"0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,",
        ),

        array(
            "LocNo" =>"01",
            "HallNo" =>"HM10121006601",
            "HallName" =>"1号厅",
            "RowNo" =>"4",
            "SeatImgRow" =>"4",
            "ColumnNo" =>"ZL,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,ZL",
            "SeatType" =>"3,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,3",
            "SeatNo" =>",01010402,01010403,01010404,01010405,01010406,01010407,01010408,01010409,01010410,01010411,01010412,01010413,01010414,01010415,01010416,01010417,",
            "SeatStatus" =>"0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,"
        ),

         array (
            "LocNo" =>"01",
            "HallNo" =>"HM10121006601",
            "HallName" =>"1号厅",
            "RowNo" =>"5",
            "SeatImgRow" =>"5",
            "ColumnNo" =>"ZL,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,ZL",
            "SeatType" =>"3,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,3",
            "SeatNo" =>",01010502,01010503,01010504,01010505,01010506,01010507,01010508,01010509,01010510,01010511,01010512,01010513,01010514,01010515,01010516,01010517,",
            "SeatStatus" =>"0,0,0,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,"
        ),

        array (
            "LocNo" =>"01",
            "HallNo" =>"HM10121006601",
            "HallName" =>"1号厅",
            "RowNo" =>"6",
            "SeatImgRow" =>"6",
            "ColumnNo" =>"ZL,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,ZL",
            "SeatType" =>"3,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,3",
            "SeatNo" =>",01010602,01010603,01010604,01010605,01010606,01010607,01010608,01010609,01010610,01010611,01010612,01010613,01010614,01010615,01010616,01010617,",
            "SeatStatus" =>"0,0,0,0,0,0,0,1,1,1,1,0,0,0,0,0,0,0,"
        ),

        array (
            "LocNo" =>"01",
            "HallNo" =>"HM10121006601",
            "HallName" =>"1号厅",
            "RowNo" =>"7",
            "SeatImgRow" =>"7",
            "ColumnNo" =>"ZL,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,ZL",
            "SeatType" =>"3,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,3",
            "SeatNo" =>",01010702,01010703,01010704,01010705,01010706,01010707,01010708,01010709,01010710,01010711,01010712,01010713,01010714,01010715,01010716,01010717,",
            "SeatStatus" =>"0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,",
        ),

        array (
            "LocNo" =>"01",
            "HallNo" =>"HM10121006601",
            "HallName" =>"1号厅",
            "RowNo" =>"8",
            "SeatImgRow" =>"8",
            "ColumnNo" =>"ZL,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,ZL",
            "SeatType" =>"3,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,3",
            "SeatNo" =>",01010802,01010803,01010804,01010805,01010806,01010807,01010808,01010809,01010810,01010811,01010812,01010813,01010814,01010815,01010816,01010817,",
            "SeatStatus" =>"0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,"
        ),

         array(
            "LocNo" =>"01",
            "HallNo" =>"HM10121006601",
            "HallName" =>"1号厅",
            "RowNo" =>"9",
            "SeatImgRow" =>"9",
            "ColumnNo" =>"ZL,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,ZL",
            "SeatType" =>"3,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,3",
            "SeatNo" =>",01010902,01010903,01010904,01010905,01010906,01010907,01010908,01010909,01010910,01010911,01010912,01010913,01010914,01010915,01010916,01010917,",
            "SeatStatus" =>"0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,"
        ),

        array (
        "LocNo" =>"01",
        "HallNo" =>"HM10121006601",
        "HallName" =>"1号厅",
        "RowNo" =>"10",
        "SeatImgRow" =>"10",
        "ColumnNo" =>"1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18",
        "SeatType" =>"1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1",
        "SeatNo" =>"01011001,01011002,01011003,01011004,01011005,01011006,01011007,01011008,01011009,01011010,01011011,01011012,01011013,01011014,01011015,01011016,01011017,01011018",
        "SeatStatus" =>"0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,"
        )
    );
?>
<script>
    var seatArr = <?php echo json_encode($seats)?> || [];
    for(var i in seatArr){
        //将字符串转换成数组
        seatArr[i]["ColumnNoArr"] = seatArr[i]["ColumnNo"].split(",");
        seatArr[i]["SeatNoArr"] = seatArr[i]["SeatNo"].split(",");
        seatArr[i]["SeatStatusArr"] = seatArr[i]["SeatStatus"].split(",");
        seatArr[i]["SeatTypeArr"] = seatArr[i]["SeatType"].split(",");

        //将一个座位的信息存在一个数组中
        seatArr[i]["SeatsInfo"] = [];
        for(var j in seatArr[i]["ColumnNoArr"]){
            seatArr[i]["SeatsInfo"][j] = {};
            seatArr[i]["SeatsInfo"][j].rowNo = seatArr[i]["RowNo"];
            seatArr[i]["SeatsInfo"][j].columnNo = seatArr[i]["ColumnNoArr"][j];
            seatArr[i]["SeatsInfo"][j].seatNo = seatArr[i]["SeatNoArr"][j];
            seatArr[i]["SeatsInfo"][j].status = seatArr[i]["SeatStatusArr"][j];
            seatArr[i]["SeatsInfo"][j].type = seatArr[i]["SeatTypeArr"][j];
        }
    }
    console.log(seatArr);
</script>
<body>

    <div class="warp">
        <div class="">
            <span class="seat unbooked"></span>
            <span class="">可选座位</span>
            <span class="seat disabled"></span>
            <span class="">不可选座位</span>
            <span class="seat booked"></span>
            <span class="">已选座位</span>
            <span class="seat love"></span>
            <span class="">情侣座位</span>
        </div>
        <!-- demo1 start--->
        <ul class="bb_selectSit none">
            <li class="bb_selectSit_row">
                <ul>
                    <li class="bb_selectSit_row_col"><span class="num">1</span></li>
                    <li class="bb_selectSit_row_col"><a id="seat_11_1"  data-row="11"data-col="1" class="seat unbooked none"title="1排2座">1-2</a></li>
                    <li class="bb_selectSit_row_col"><a id="seat_11_2"  data-row="11"data-col="2" class="seat unbooked  none">1-3</a></li>
                    <li class="bb_selectSit_row_col"><a id="seat_11_3"  data-row="11"data-col="3" class="seat unbooked  none">1-4</a></li>
                    <li class="bb_selectSit_row_col"><a id="seat_11_4"  data-row="11"data-col="4" class="seat unbooked">1-5</a></li>
                    <li class="bb_selectSit_row_col"><a id="seat_11_5"  data-row="11"data-col="5" class="seat unbooked">1-6</a></li>
                    <li class="bb_selectSit_row_col"><a id="seat_11_6"  data-row="11"data-col="6" class="seat unbooked">1-7</a></li>
                    <li class="bb_selectSit_row_col"><a id="seat_11_7"  data-row="11"data-col="7" class="seat unbooked">1-8</a></li>
                    <li class="bb_selectSit_row_col"><a id="seat_11_8"  data-row="11"data-col="8" class="seat unbooked">1-9</a></li>
                    <li class="bb_selectSit_row_col"><a id="seat_11_9"  data-row="11"data-col="9" class="seat unbooked none">1-10</a></li>
                    <li class="bb_selectSit_row_col"><a id="seat_11_10" data-row="11"data-col="10"class="seat unbooked none">1-11</a></li>
                    <li class="bb_selectSit_row_col"><a id="seat_11_11" data-row="11"data-col="11"class="seat unbooked">1-12</a></li>
                    <li class="bb_selectSit_row_col"><a id="seat_11_12" data-row="11"data-col="12"class="seat unbooked">1-13</a></li>
                    <li class="bb_selectSit_row_col"><a id="seat_11_13" data-row="11"data-col="13"class="seat disabled">1-14</a></li>
                    <li class="bb_selectSit_row_col"><a id="seat_11_14" data-row="11"data-col="14"class="seat disabled">1-15</a></li>
                    <li class="bb_selectSit_row_col"><a id="seat_11_15" data-row="11"data-col="15"class="seat unbooked">1-1</a></li>
                    <li class="bb_selectSit_row_col"><a id="seat_11_16" data-row="11"data-col="16"class="seat unbooked">1-2</a></li>
                    <li class="bb_selectSit_row_col"><a id="seat_11_17" data-row="11"data-col="17"class="seat unbooked">1-3</a></li>
                    <li class="bb_selectSit_row_col"><a id="seat_11_18" data-row="11"data-col="18"class="seat unbooked">1-4</a></li>
                    <li class="bb_selectSit_row_col"><a id="seat_11_19" data-row="11"data-col="19"class="seat unbooked">1-5</a></li>
                    <li class="bb_selectSit_row_col"><a id="seat_11_20" data-row="11"data-col="20"class="seat unbooked">1-6</a></li>
                    <li class="bb_selectSit_row_col"><a id="seat_11_21" data-row="11"data-col="21"class="seat unbooked">1-7</a></li>
                    <li class="bb_selectSit_row_col"><a id="seat_11_22" data-row="11"data-col="22"class="seat unbooked">1-8</a></li>
                    <li class="bb_selectSit_row_col"><a id="seat_11_23" data-row="11"data-col="23"class="seat unbooked">1-9</a></li>
                    <li class="bb_selectSit_row_col"><a id="seat_11_24" data-row="11"data-col="24"class="seat unbooked">1-10</a></li>
                    <li class="bb_selectSit_row_col"><a id="seat_11_25" data-row="11"data-col="25"class="seat unbooked  none">1-11</a></li>
                    <li class="bb_selectSit_row_col"><a id="seat_11_26" data-row="11"data-col="26"class="seat unbooked  none">1-12</a></li>
                </ul>
            </li>
            <li class="bb_selectSit_row">
                <ul>
                    <li class="bb_selectSit_row_col"><span class="num">2</span></li>
                    <li class="bb_selectSit_row_col"><a id="seat_22_1" data-row="22"data-col="1" class="seat unbooked">2-2</a></li>
                    <li class="bb_selectSit_row_col"><a id="seat_22_2" data-row="22"data-col="2" class="seat unbooked">2-3</a></li>
                    <li class="bb_selectSit_row_col"><a id="seat_22_3" data-row="22"data-col="3" class="seat unbooked">2-4</a></li>
                    <li class="bb_selectSit_row_col"><a id="seat_22_4" data-row="22"data-col="4" class="seat disabled">2-5</a></li>
                    <li class="bb_selectSit_row_col"><a id="seat_22_5" data-row="22"data-col="5" class="seat disabled">2-6</a></li>
                    <li class="bb_selectSit_row_col"><a id="seat_22_6" data-row="22"data-col="6" class="seat unbooked">2-7</a></li>
                    <li class="bb_selectSit_row_col"><a id="seat_22_7" data-row="22"data-col="7" class="seat unbooked">2-8</a></li>
                    <li class="bb_selectSit_row_col"><a id="seat_22_8" data-row="22"data-col="8" class="seat unbooked">2-9</a></li>
                    <li class="bb_selectSit_row_col"><a id="seat_22_9" data-row="22"data-col="9" class="seat unbooked none">2-10</a></li>
                    <li class="bb_selectSit_row_col"><a id="seat_22_10"data-row="22"data-col="10"class="seat unbooked none">2-11</a></li>
                    <li class="bb_selectSit_row_col"><a id="seat_22_11"data-row="22"data-col="11"class="seat unbooked">2-12</a></li>
                    <li class="bb_selectSit_row_col"><a id="seat_22_12"data-row="22"data-col="12"class="seat unbooked">2-13</a></li>
                    <li class="bb_selectSit_row_col"><a id="seat_22_13"data-row="22"data-col="13"class="seat unbooked">2-14</a></li>
                    <li class="bb_selectSit_row_col"><a id="seat_22_14"data-row="22"data-col="14"class="seat unbooked">2-15</a></li>
                    <li class="bb_selectSit_row_col"><a id="seat_22_15"data-row="22"data-col="15"class="seat unbooked">2-1</a></li>
                    <li class="bb_selectSit_row_col"><a id="seat_22_16"data-row="22"data-col="16"class="seat unbooked">2-2</a></li>
                    <li class="bb_selectSit_row_col"><a id="seat_22_17"data-row="22"data-col="17"class="seat love">2-3</a></li>
                    <li class="bb_selectSit_row_col"><a id="seat_22_18"data-row="22"data-col="18"class="seat love">2-4</a></li>
                    <li class="bb_selectSit_row_col"><a id="seat_22_19"data-row="22"data-col="19"class="seat unbooked">2-5</a></li>
                    <li class="bb_selectSit_row_col"><a id="seat_22_20"data-row="22"data-col="20"class="seat unbooked">2-6</a></li>
                    <li class="bb_selectSit_row_col"><a id="seat_22_21"data-row="22"data-col="21"class="seat unbooked">2-7</a></li>
                    <li class="bb_selectSit_row_col"><a id="seat_22_22"data-row="22"data-col="22"class="seat unbooked">2-8</a></li>
                    <li class="bb_selectSit_row_col"><a id="seat_22_23"data-row="22"data-col="23"class="seat unbooked">2-9</a></li>
                    <li class="bb_selectSit_row_col"><a id="seat_22_24"data-row="22"data-col="24"class="seat unbooked">2-10</a></li>
                    <li class="bb_selectSit_row_col"><a id="seat_22_25"data-row="22"data-col="25"class="seat love">2-11</a></li>
                    <li class="bb_selectSit_row_col"><a id="seat_22_26"data-row="22"data-col="26"class="seat love">2-12</a></li>
                </ul>
            </li>
        </ul>
        <!-- demo1 end--->

        <!-- demo2 start--->
        <!-- Templates -->
        <p style="display:none">
            <textarea id="TemplateSeats" rows="0" cols="0"><!--
            {#template MAIN}
            <ul class="bb_selectSit">
                {#foreach $T as Item}
                    <li class="bb_selectSit_row">
                    <ul>
                        <li class="bb_selectSit_row_col"><span class="num">{$T.Item.RowNo}</span></li>
                        {#include SUB root=$T.Item.SeatsInfo}
                    </ul>
                </li>
                {#/for}
            </ul>
            {#/template MAIN}
            {#template SUB}
                {#foreach $T as Item}
                    <li class="bb_selectSit_row_col">
                        {#if $T.Item.type == 3}{*走廊*}
                            <a id="seat_{$T.Item.rowNo}_{$T.Item.columnNo}" data-row="{$T.Item.rowNo}" data-col="{$T.Item.columnNo}" data-seatNo="{$T.Item.seatNo}" class="seat unbooked none" title="{$T.Item.rowNo}排{$T.Item.columnNo}座">{$T.Item.rowNo}-{$T.Item.columnNo}</a>
                        {#elseif $T.Item.type == 2}{*情侣座位*}
                            <a id="seat_{$T.Item.rowNo}_{$T.Item.columnNo}" data-row="{$T.Item.rowNo}" data-col="{$T.Item.columnNo}" data-seatNo="{$T.Item.seatNo}" class="seat love {#if $T.Item.status == "0"}{#elseif $T.Item.status == "1"}disabled{#else}disabled maintain{#/if}" title="{$T.Item.rowNo}排{$T.Item.columnNo}座">{$T.Item.rowNo}-{$T.Item.columnNo}</a>
                        {#elseif $T.Item.type == 1}{*普通座位*}
                            <a id="seat_{$T.Item.rowNo}_{$T.Item.columnNo}" data-row="{$T.Item.rowNo}" data-col="{$T.Item.columnNo}" data-seatNo="{$T.Item.seatNo}" class="seat {#if $T.Item.status == "0"}unbooked{#elseif $T.Item.status == "1"}disabled{#else}disabled maintain{#/if}" title="{$T.Item.rowNo}排{$T.Item.columnNo}座">{$T.Item.rowNo}-{$T.Item.columnNo}</a>
                        {#/if}
                    </li>
                {#/for}
            {#/template SUB}
          -->
            </textarea>
        </p>

        <!-- Output elements -->
        <div id="J_selectSeats"></div>

        <div class="J_selectedSeats">
            <ul class="">
                <li class="">1</li>
                <li class="">2</li>
                <li class="">3</li>
                <li class="">4</li>
                <li class="">5</li>
                <li class="">6</li>
            </ul>
        </div>
        <!-- demo2 end--->
    </div>

    <script src="js/jquery-1.9.1.min.js"type="text/javascript"></script>
    <script src="js/jquery-jtemplates.js"type="text/javascript"></script>
    <script src="js/seat.js"type="text/javascript"></script>
    <script>
        $(document).ready(function(){

            //绑定座位数据
            Berbon.CinemaSeats({
                templateData:seatArr,
                maxNum:6,
                booked:function(row, col, seatNo){
                    var $selectedList = $(".J_selectedSeats"),
                        $curSelected = $selectedList.find("li").not(".select").eq(0);
                    $curSelected.addClass("select").html(row+"排"+col+"座").attr("data-id",seatNo).attr("id","seat_"+seatNo);
                },
                unbooked:function(row, col, seatNo){
                    $("#seat_"+seatNo).removeClass("select").removeAttr("id").removeAttr("data-id").appendTo($(".J_selectedSeats ul"));

                    var $J_selectList = $(".J_selectedSeats");
                    var $unSelect = $J_selectList.find("li").not(".select");
                    var selectNum = $J_selectList.find("li.select").length;
                    $unSelect.each(function(k){
                        $(this).html(selectNum+k+1);
                    });
                }
            });
        });
    </script>

</body>
</html>