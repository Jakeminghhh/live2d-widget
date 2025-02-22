<div class="waifu">
    
    <!-- 提示框 -->
    <div class="waifu-tips"></div>
    
    <!-- 看板娘画布 -->
    <canvas id="live2d" class="live2d"></canvas>
    
    <!-- 工具栏 -->
    <div class="waifu-tool">
        <span class="fui-home"></span>
        <span class="fui-chat"></span>
        <span class="fui-eye"></span>
        <span class="fui-user"></span>
        <span class="fui-photo"></span>
        <span class="fui-info-circle"></span>
        <span class="fui-cross"></span>
    </div>
    
</div>

<script src="path/to/waifu-tips.js"></script>
<script src="path/to/live2d.js"></script>

<!-- 初始化看板娘，加载 waifu-tips.json -->
<script type="text/javascript">
	/* 可直接修改部分参数 */
    live2d_settings['modelId'] = 5;                  // 默认模型 ID
    live2d_settings['modelTexturesId'] = 1;          // 默认材质 ID
	/* 在 initModel 前添加 */
	initModel("https://www.example.com/path/to/waifu-tips.json")
</script>
<script src="https://www.example.com/path/to/autoload.js" type="text/javascript"></script>
