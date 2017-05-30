(function($)){//即時関数
	$(document).on{
		ready: function(){//準備ができたら
			$('#books').akBooklog({
				booklog_id: 'sinasi',
				booklog_category: 0,
				booklog_status: 0,
				booklog_count: 2
			});
		}
	}
}(jQuery);//jQuery動かす