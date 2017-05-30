(function($)){//即時関数
	$(document).on{
		ready: function(){//準備ができたら
			$('#books').akBooklog({
				booklog_count: 2
			});
		}
	}
}(jQuery);//jQuery動かす