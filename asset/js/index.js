$(function(){
	
	$("#loginForm").on("submit", function(){
		var data = $(this).serialize()
		if(data) {
			$.post('index.php/user/login',data, function(data){
				if(data.no == 0) {
					//跳转
					window.location.href = data.data.url
				}else{
					alert(data.data)
				}
			}, 'json');
		}else{
			alert("请输入用户名密码！")
		}
		return false
	})
})