<form action="dealpage.php" method="post" style="margin:10px 0 0 50px;">
	<span>分类</span><input type="text" name="topic" value="">
    <span>时间</span><input type="text" name="time" value="">
    <span>标题</span><input type="text" name="title" value="">
    <span>图片链接</span><input type="text" name="image" value="">
    <span>80字简介</span><input type="text" name="short" value="">
	<script id="container" name="content" type="text/plain" style="width:900px;height:400px;">
	
	</script>
	<input type="hidden" name="table" value="pages"><br>
	<input type="submit" name="" value="提交">
</form>

<script type="text/javascript" src="utf8-php/ueditor.config.js"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="utf8-php/ueditor.all.js"></script>
<!-- 实例化编辑器 -->
<script type="text/javascript">
	var ue = UE.getEditor('container');
</script>