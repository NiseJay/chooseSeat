/**
 * @description 电影票选择组件Js
 * @author zhouj
 * @data 2014-04-03
 */

;(function($, window, undefined){
    var pluginName = "CinemaSeats",         //组件名称
        version = "1.0",                    //组件版本
        defaults = {
            templateId:"TemplateSeats",     //座位标签模板ID
            templateData:[],                //座位数据
            id:"J_selectSeats",             //座位容器ID
            space:1,                        //空闲座位间隔(未实现)
            maxNum:4,                       //最多选择多少个座位
            booked:undefined,                    //预订座位回调
            unbooked:undefined                   //取消预订座位回调
        };

    function Plugin (options){
        this.options = $.extend({},defaults,options);
        this.init();
    }

    Plugin.prototype.init = function(){
        var options = this.options;

        //给容器设置模板，并绑定数据
        $("#"+options.id).setTemplateElement(options.templateId).processTemplate(options.templateData);

        //绑定选座事件
        $(".bb_selectSit_row_col .seat").on("click",function(){
            var _this = $(this),
                row = _this.attr("data-row"),                           //当前元素所在行
                col = _this.attr("data-col"),                           //当前元素所在列
                seatNo = _this.attr("data-seatNo"),                     //当前元素座位号
                $front2Seat = $("#seat_"+row+"_"+(parseInt(col)-2)),    //当前元素前左边第2个位子
                $front1Seat = $("#seat_"+row+"_"+(parseInt(col)-1)),    //当前元素前左边第1个位子
                $back2Seat = $("#seat_"+row+"_"+(parseInt(col)+2)),     //当前元素前右边第2个位子
                $back1Seat = $("#seat_"+row+"_"+(parseInt(col)+1)),     //当前元素前右边第1个位子
                bookedNum = $(".bb_selectSit .booked").length;          //预订座位数

            if (_this.hasClass("unbooked")){//可选座位
                //检测已选座位数
                if(bookedNum >= options.maxNum){
                    alert("最多预订"+options.maxNum+"个座位");
                    return false;
                }

                //(向左边检测)边缘区空闲一个座位或者与已选座位间隔一个
                if( $front1Seat.length
                    && !$front1Seat.is(":hidden")
                    && $front1Seat.hasClass("unbooked")
                    && (!$front2Seat.length || $front2Seat.is(":hidden") || $front2Seat.hasClass("disabled") || $front2Seat.hasClass("booked") || ($front2Seat.hasClass("love") && !$front1Seat.hasClass("love")))
                    ){
                    if(bookedNum >= (options.maxNum-1)){
                        alert("不能留下单个空闲位置");
                        return false;
                    }
                    $front1Seat.removeClass("unbooked").addClass("booked");
                    if(options.booked){
                        options.booked($front1Seat.attr("data-row"),$front1Seat.attr("data-col"),$front1Seat.attr("data-seatNo"));
                    }
                }

                //(向右边检测)边缘区空闲一个座位或者与已选座位间隔一个
                if( $back1Seat.length
                    && !$back1Seat.is(":hidden")
                    && $back1Seat.hasClass("unbooked")
                    && (!$back2Seat.length || $back2Seat.is(":hidden") || $back2Seat.hasClass("disabled") || $back2Seat.hasClass("booked")  || ($back2Seat.hasClass("love") && !$back1Seat.hasClass("love")))){
                    if(bookedNum >= (options.maxNum-1)){
                        alert("不能留下单个空闲位置");
                        return false;
                    }
                    $back1Seat.removeClass("unbooked").addClass("booked");
                    if(options.booked){
                        options.booked($back1Seat.attr("data-row"),$back1Seat.attr("data-col"),$back1Seat.attr("data-seatNo"));
                    }
                }
                _this.removeClass("unbooked").addClass("booked");
                if(options.booked){
                    options.booked(row,col,seatNo);
                }
            }else if(_this.hasClass("booked") && !_this.hasClass("love")){//已选座位

                //(左边)边缘区空闲一个座位或者与已选座位间隔一个
                if( $front1Seat.length
                    && !$front1Seat.is(":hidden")
                    && $front1Seat.hasClass("booked")
                    && (!$front2Seat.length || $front2Seat.is(":hidden") || $front2Seat.hasClass("disabled")  || $front2Seat.hasClass("booked") || ($front2Seat.hasClass("love") && !$front1Seat.hasClass("love")))){
                    $front1Seat.removeClass("booked").addClass("unbooked");
                    if(options.unbooked){
                        options.unbooked($front1Seat.attr("data-row"),$front1Seat.attr("data-col"),$front1Seat.attr("data-seatNo"));
                    }
                }
                //最左边元素
                if((!$front1Seat.length || $front1Seat.is(":hidden")  || ($front1Seat.length && !$front1Seat.is(":hidden") && !$front1Seat.hasClass("unbooked"))) && $back1Seat.hasClass("booked")){
                    $back1Seat.removeClass("booked").addClass("unbooked");
                    if(options.unbooked){
                        options.unbooked($back1Seat.attr("data-row"),$back1Seat.attr("data-col"),$back1Seat.attr("data-seatNo"));
                    }
                }

                //(右边)边缘区空闲一个座位或者与已选座位间隔一个
                if( $back1Seat.length
                    && !$back1Seat.is(":hidden")
                    && $back1Seat.hasClass("booked")
                    && (!$back2Seat.length || $back2Seat.is(":hidden") || $back2Seat.hasClass("disabled")  || $back2Seat.hasClass("booked") || ($back2Seat.hasClass("love") && !$back1Seat.hasClass("love")))){
                    $back1Seat.removeClass("booked").addClass("unbooked");
                    if(options.unbooked){
                        options.unbooked($back1Seat.attr("data-row"),$back1Seat.attr("data-col"),$back1Seat.attr("data-seatNo"));
                    }
                }

                //最右边元素
                if((!$back1Seat.length || $back1Seat.is(":hidden") || ($back1Seat.length && !$back1Seat.is(":hidden") && !$back1Seat.hasClass("unbooked"))) && $front1Seat.hasClass("booked")){
                    $front1Seat.removeClass("booked").addClass("unbooked");
                    if(options.unbooked){
                        options.unbooked($front1Seat.attr("data-row"),$front1Seat.attr("data-col"),$front1Seat.attr("data-seatNo"));
                    }
                }

                _this.removeClass("booked").addClass("unbooked");
                if(options.unbooked){
                    options.unbooked(row,col,seatNo);
                }
            }else if(_this.hasClass("disabled")){//不可选座位
                alert("该座位已被预订");
            }else if(_this.hasClass("love")){//情侣座位
                if(!_this.hasClass("booked")){
                    if(bookedNum >= (options.maxNum-1)){
                        alert("最多预订"+options.maxNum+"个座位");
                        return false;
                    }
                    if($front1Seat.hasClass("love")){
                        $front1Seat.addClass("booked");
                        if(options.booked){
                            options.booked($front1Seat.attr("data-row"),$front1Seat.attr("data-col"),$front1Seat.attr("data-seatNo"));
                        }
                    }else if($back1Seat.hasClass("love")){
                        $back1Seat.addClass("booked");
                        if(options.booked){
                            options.booked($back1Seat.attr("data-row"),$back1Seat.attr("data-col"),$back1Seat.attr("data-seatNo"));
                        }
                    }
                    _this.addClass("booked");
                    if(options.booked){
                        options.booked(row,col,seatNo);
                    }
                }else{
                    if($front1Seat.hasClass("love")){
                        $front1Seat.removeClass("booked");
                        if(options.unbooked){
                            options.unbooked($front1Seat.attr("data-row"),$front1Seat.attr("data-col"),$front1Seat.attr("data-seatNo"));
                        }
                    }else if($back1Seat.hasClass("love")){
                        $back1Seat.removeClass("booked");
                        if(options.unbooked){
                            options.unbooked($back1Seat.attr("data-row"),$back1Seat.attr("data-col"),$back1Seat.attr("data-seatNo"));
                        }
                    }
                    _this.removeClass("booked");
                    if(options.unbooked){
                        options.unbooked(row,col,seatNo);
                    }
                }
            }
        });
    };

    window.Berbon = window.Berbon || {};
    Berbon[pluginName] = function(options) {
        return new Plugin( options );
    };

})(jQuery, window);