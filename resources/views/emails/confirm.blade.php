<html>
	<head>
		<meta charset="UTF-8">
		<title>注册确认链接</title>
	</head>
	<body>
		<h1>感谢您在我这里进行注册</h1>
		
		<p>
			请点击下面的链接完成注册：
			<a href="{{ route('confirm_email',$user->activation_token) }}">
			{{ route('confirm_email',$user->activation_token) }}
			</a>
		</p>

		<p>
			
			如果这不是您本人的操作，请勿忽略虐此邮件
		</p>

	</body>
</html>