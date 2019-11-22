<?php /*a:5:{s:59:"E:\project\tpshop\app\admin\view\article\article\create.php";i:1567990147;s:53:"E:\project\tpshop\app\admin\view\public\container.php";i:1567990147;s:54:"E:\project\tpshop\app\admin\view\public\frame_head.php";i:1567990147;s:49:"E:\project\tpshop\app\admin\view\public\style.php";i:1568192923;s:56:"E:\project\tpshop\app\admin\view\public\frame_footer.php";i:1567990147;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if(empty($is_layui) || (($is_layui instanceof \think\Collection || $is_layui instanceof \think\Paginator ) && $is_layui->isEmpty())): ?>
    <link href="/system/frame/css/bootstrap.min.css?v=3.4.0" rel="stylesheet">
    <?php endif; ?>
    <link href="/static/plug/layui/css/layui.css" rel="stylesheet">
    <link href="/system/css/layui-admin.css" rel="stylesheet">
    <link href="/system/frame/css/font-awesome.min.css?v=4.3.0" rel="stylesheet">
    <link href="/system/frame/css/animate.min.css" rel="stylesheet">
    <link href="/system/frame/css/style.min.css?v=3.0.0" rel="stylesheet">
    <script src="/system/frame/js/jquery.min.js"></script>
    <script src="/system/frame/js/bootstrap.min.js"></script>
    <script src="/static/plug/layui/layui.all.js"></script>
    <script>
        $eb = parent._mpApi;
        window.controlle="<?php echo strtolower(trim(preg_replace("/[A-Z]/", "_\\0", app('request')->controller()), "_"));?>";
        window.module="<?php echo app('request')->app();?>";
    </script>



    <title></title>
    
<link href="/system/plug/umeditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
<link href="/system/module/wechat/news/css/style.css" type="text/css" rel="stylesheet">
<link href="/system/frame/css/plugins/chosen/chosen.css" rel="stylesheet">
<script type="text/javascript" src="/system/plug/umeditor/third-party/jquery.min.js"></script>
<script type="text/javascript" src="/system/plug/umeditor/third-party/template.min.js"></script>
<script type="text/javascript" charset="utf-8" src="/system/plug/umeditor/umeditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/system/plug/umeditor/umeditor.js"></script>
<script src="/system/frame/js/ajaxfileupload.js"></script>
<script src="/system/plug/validate/jquery.validate.js"></script>
<script src="/system/frame/js/plugins/chosen/chosen.jquery.js"></script>
<style>
    .wrapper-content {
        padding: 0 !important;
    }
</style>

    <!--<script type="text/javascript" src="/static/plug/basket.js"></script>-->
<script type="text/javascript" src="/static/plug/requirejs/require.js"></script>
<?php /*  <script type="text/javascript" src="/static/plug/requirejs/require-basket-load.js"></script>  */ ?>
<script>
    var hostname = location.hostname;
    if(location.port) hostname += ':' + location.port;
    requirejs.config({
        map: {
            '*': {
                'css': '/static/plug/requirejs/require-css.js'
            }
        },
        shim:{
            'iview':{
                deps:['css!iviewcss']
            },
            'layer':{
                deps:['css!layercss']
            }
        },
        baseUrl:'//'+hostname+'/',
        paths: {
            'static':'static',
            'system':'system',
            'vue':'static/plug/vue/dist/vue.min',
            'axios':'static/plug/axios.min',
            'iview':'static/plug/iview/dist/iview.min',
            'iviewcss':'static/plug/iview/dist/styles/iview',
            'lodash':'static/plug/lodash',
            'layer':'static/plug/layer/layer',
            'layercss':'static/plug/layer/theme/default/layer',
            'jquery':'static/plug/jquery/jquery.min',
            'moment':'static/plug/moment',
            'sweetalert':'static/plug/sweetalert2/sweetalert2.all.min',
            'formCreate':'/static/plug/form-create/form-create.min',
        },
        basket: {
            excludes:['system/js/index','system/util/mpVueComponent','system/util/mpVuePackage']
//            excludes:['system/util/mpFormBuilder','system/js/index','system/util/mpVueComponent','system/util/mpVuePackage']
        }
    });
</script>
<script type="text/javascript" src="/system/util/mpFrame.js"></script>
    
</head>
<body class="gray-bg">
<div class="wrapper wrapper-content">

<div class="row">
   <div class="col-sm-12 panel panel-default" >
       <div class="panel-body">
           <form class="form-horizontal" id="signupForm">
               <div class="form-group">
                   <div class="col-md-12">
                       <div class="input-group">
                           <span class="input-group-addon">标题</span>
                           <input maxlength="64" placeholder="请在这里输入标题" name="title" class="layui-input" id="title" value="<?php echo htmlentities($news['title']); ?>">
                           <input type="hidden"  id="id" value="<?php echo htmlentities($news['id']); ?>">
                       </div>
                   </div>
               </div>
               <div class="form-group">
                   <div class="col-md-12">
                       <div class="input-group">
                           <span class="input-group-addon">作者</span>
                           <input maxlength="8" placeholder="请输入作者" name="author" class="layui-input" id="author" value="<?php echo htmlentities($news['author']); ?>">
                       </div>
                   </div>
               </div>
               <div class="form-group">
                   <div class="col-md-12">
                       <div class="input-group">
                           <span class="input-group-addon">文章分类</span>
                           <?php if(empty($all)){?>
                           <select data-placeholder="请先添加文章分类" class="chosen-select"  style="width:100%;" tabindex="4" name="type_id">
                               <?php }else{ ?>
                                   <select data-placeholder="选择文章分类" class="chosen-select"  style="width:100%;" tabindex="4" name="type_id" <?php if($select == '1'): ?>disabled="disabled"<?php endif; ?>>
                               <?php }if(is_array($all) || $all instanceof \think\Collection || $all instanceof \think\Paginator): $k = 0; $__LIST__ = $all;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;if($key == $cid): ?>
                               <option value="<?php echo htmlentities($key); ?>" selected hassubinfo="true" ><?php echo htmlentities($vo); ?></option>
                               <?php elseif(in_array($key,$news['cid'])): ?>
                               <option value="<?php echo htmlentities($key); ?>" selected hassubinfo="true" ><?php echo htmlentities($vo); ?></option>
                               <?php else: ?>
                               <option value="<?php echo htmlentities($key); ?>" hassubinfo="true" ><?php echo htmlentities($vo); ?></option>
                               <?php endif; ?>
                               <?php endforeach; endif; else: echo "" ;endif; ?>
                           </select></div>
                   </div>
               </div>
               <div class="form-group">
                   <div class="col-md-12">
                       <div class="form-control" style="height:auto">
                           <label style="color:#ccc">图文封面大图片设置</label>
                           <div class="row nowrap">
                               <div class="col-xs-3" style="width:160px">
                                   <?php if($news['image_input']): ?>
                                   <div class="upload-image-box transition image_img" style="height: 80px;background-repeat:no-repeat;background-size:contain;background-image:url(<?php echo htmlentities($news['image_input']); ?>)">
                                       <input value="" type="hidden" name="local_url">
                                   </div>
                                   <?php else: ?>
                                   <div class="upload-image-box transition image_img" style="height: 80px;background-repeat:no-repeat;background-size:contain;background-image:url('/system/module/wechat/news/images/image.png')">
                                       <input value="" type="hidden" name="local_url">
                                   </div>
                                   <?php endif; ?>
                               </div>
                               <div class="col-xs-6">
                                   <input type="file" class="upload" name="image" style="display: none;" id="image" />
                                   <br>
                                   <a class="btn btn-sm add_image upload_span">上传图片</a>
                                   <br>
                                   <br>
                               </div>
                           </div>
                           <input type="hidden" name="image" id="image_input" value="<?php echo htmlentities($news['image_input']); ?>"/>
                           <p class="help-block" style="margin-top:10px;color:#ccc">封面大图片建议尺寸：900像素 * 500像素</p>
                       </div>
                   </div>
               </div>
               <div class="form-group">
                   <div class="col-md-12">
                       <label style="color:#aaa">文章简介</label>
                       <textarea  id="synopsis" name="synopsis" class="layui-input" style="height:80px;resize:none;line-height:20px;color:#333;"><?php echo htmlentities($news['synopsis']); ?></textarea>
                   </div>
               </div>
               <div class="form-group">
                   <div class="col-md-12">
                       <label style="color:#aaa">文章内容</label>
                       <textarea type="text/plain" id="myEditor" style="width:100%;"><?php echo htmlentities($news['content']); ?></textarea>
                   </div>
               </div>
               <div class="form-group">
                   <div class="col-md-12">
                       <div class="col-md-6">
                           <label style="color:#aaa">是否显示banner</label>
                           <br/>
                           <input type="radio" name="is_banner" class="layui-radio" value="0" <?php if($news['is_banner'] == '0'): ?>checked<?php endif; ?>>否
                           <input type="radio" name="is_banner" class="layui-radio" value="1" <?php if($news['is_banner'] == '1'): ?>checked<?php endif; ?>>是
                       </div>
                       <div class="col-md-6">
                           <label style="color:#aaa">是否显示热门</label>
                           <br/>
                           <input type="radio" name="is_hot" class="layui-radio" value="0" <?php if($news['is_hot'] == '0'): ?>checked<?php endif; ?>>否
                           <input type="radio" name="is_hot" class="layui-radio" value="1" <?php if($news['is_hot'] == '1'): ?>checked<?php endif; ?>>是
                       </div>
                   </div>
               </div>

               <div class="form-group">
                   <div class="col-md-12">
                       <label style="display:block"><span style="color:#aaa;">原文链接<b>选填</b>，填写之后在图文左下方会出现此链接</span>
                           <input maxlength="200" name="url" class="layui-input" id="url" value="<?php echo htmlentities($news['url']); ?>">
                       </label>
                   </div>
               </div>
               <div class="form-actions">
                   <div class="row">
                       <div class="col-md-offset-4 col-md-9">
                           <button type="button" class="btn btn-w-m btn-info save_news">保存</button>
                       </div>
                   </div>
               </div>
           </form>
       </div>
   </div>
</div>
<script src="/system/js/layuiList.js"></script>



<script>
            var editor = document.getElementById('myEditor');
            editor.style.height = '300px';
            window.UMEDITOR_CONFIG.toolbar = [
                // 加入一个 test
                'source | undo redo | bold italic underline strikethrough | superscript subscript | forecolor backcolor | removeformat |',
                'insertorderedlist insertunorderedlist | selectall cleardoc paragraph | fontfamily fontsize' ,
                '| justifyleft justifycenter justifyright justifyjustify |',
                'link unlink | emotion selectimgs video  | map',
                '| horizontal print preview fullscreen', 'drafts', 'formula'
            ];
            UM.registerUI('selectimgs',function(name){
                    var me = this;
                    var $btn = $.eduibutton({
                        icon : 'image',
                        click : function(){
                            createFrame('选择图片','<?php echo Url('widget.images/index'); ?>?fodder=editor');
                        },
                        title: '选择图片'
                    });

                    this.addListener('selectionchange',function(){
                        //切换为不可编辑时，把自己变灰
                        var state = this.queryCommandState(name);
                        $btn.edui().disabled(state == -1).active(state == 1)
                    });
                    return $btn;

            });
            //实例化编辑器
            var um = UM.getEditor('myEditor');

            /**
            * 获取编辑器内的内容
            * */
            function getContent() {
                return (UM.getEditor('myEditor').getContent());
            }
            function hasContent() {
                return (UM.getEditor('myEditor').hasContents());
            }
            function createFrame(title,src,opt){
                opt === undefined && (opt = {});
                return layer.open({
                    type: 2,
                    title:title,
                    area: [(opt.w || 800)+'px', (opt.h || 550)+'px'],
                    fixed: false, //不固定
                    maxmin: true,
                    moveOut:false,//true  可以拖出窗外  false 只能在窗内拖
                    anim:5,//出场动画 isOutAnim bool 关闭动画
                    offset:'auto',//['100px','100px'],//'auto',//初始位置  ['100px','100px'] t[ 上 左]
                    shade:0,//遮罩
                    resize:true,//是否允许拉伸
                    content: src,//内容
                    move:'.layui-layer-title'
                });
            }
            //选择图片
            function changeIMG(index,pic){
                $(".image_img").css('background-image',"url("+pic+")");
                $(".active").css('background-image',"url("+pic+")");
                $('#image_input').val(pic);
            }
            //选择图片插入到编辑器中
            function insertEditor(list){
                console.log(list);
                um.execCommand('insertimage', list);
            }
            /**
             * 上传图片
             * */
            $('.upload_span').on('click',function (e) {
//                $('.upload').trigger('click');
                createFrame('选择图片','<?php echo Url('widget.images/index'); ?>?fodder=image');
            })

            /**
             * 编辑器上传图片
             * */
            $('.edui-icon-image').on('click',function (e) {
//                $('.upload').trigger('click');
                createFrame('选择图片','<?php echo Url('widget.images/index'); ?>?fodder=image');
            })

            /**
            * 提交图文
            * */
            $('.save_news').on('click',function(){
                var list = {};
                list.title = $('#title').val();/* 标题 */
                list.author = $('#author').val();/* 作者 */
                list.image_input = $('#image_input').val();/* 图片 */
                list.content = getContent();/* 内容 */
                list.synopsis = $('#synopsis').val();/* 简介 */
                list.url = $('#url').val();/* 原文链接 */
                list.id = $('#id').val();/* 原文链接 */
                list.cid = $('.chosen-select').val();
                list.is_hot = $("input[name='is_hot']:checked").val();
                list.is_banner = $("input[name='is_banner']:checked").val();
                var Expression = /http(s)?:\/\/([\w-]+\.)+[\w-]+(\/[\w- .\/?%&=]*)?/;
                var objExp=new RegExp(Expression);
                if(list.title == ''){
                    $eb.message('error','请输入标题');
                    return false;
                }
                if(list.author == ''){
                    $eb.message('error','请输入作者');
                    return false;
                }
                if(list.image_input == ''){
                    $eb.message('error','请添加图片');
                    return false;
                }
                if(list.content == ''){
                    $eb.message('error','请输入内容');
                    return false;
                }
                if(list.synopsis == ''){
                    $eb.message('error','请输入简介');
                    return false;
                }if(list.url != ''){
                    if(objExp.test(list.url) != true){
                        $eb.message('error','网址格式不正确！请重新输入');
                        return false;
                    }
                }
                var data = {};
                var index = layList.layer.load(1, {
                    shade: [0.5,'#fff'] //0.1透明度的白色背景
                });;
                $.ajax({
                    url:"<?php echo Url('add_new'); ?>",
                    data:list,
                    type:'post',
                    dataType:'json',
                    success:function(re){
                        layer.close(index);
                        if(re.code == 200){
                            data[re.data] = list;
                            $('.type-all>.active>.new-id').val(re.data);
                            $eb.message('success',re.msg);
                            location.reload();
                            setTimeout(function (e) {
                                parent.$(".J_iframe:visible")[0].contentWindow.location.reload();

//                                parent.layer.close(parent.layer.getFrameIndex(window.name));
                            },600)
                        }else{
                            $eb.message('error',re.msg);
                        }
                    },
                    error:function () {
                        layer.close(index);
                    }
                })
            });
            $('.article-add ').on('click',function (e) {
                var num_div = $('.type-all').children('div').length;
                if(num_div > 7){
                  $eb.message('error','一组图文消息最多可以添加8个');
                  return false;
                }
                var url = "/public/system/module/wechat/news/images/image.png";
                html = '';
                html += '<div class="news-item transition active news-image" style=" margin-bottom: 20px;background-image:url('+url+')">'
                    html += '<input type="hidden" name="new_id" value="" class="new-id">';
                    html += '<span class="news-title del-news">x</span>';
                html += '</div>';
                $(this).siblings().removeClass("active");
                $(this).before(html);
            })
            $(document).on("click",".del-news",function(){
                $(this).parent().remove();
            })
            $(document).ready(function() {
                var config = {
                    ".chosen-select": {},
                    ".chosen-select-deselect": {allow_single_deselect: true},
                    ".chosen-select-no-single": {disable_search_threshold: 10},
                    ".chosen-select-no-results": {no_results_text: "沒有找到你要搜索的分类"},
                    ".chosen-select-width": {width: "95%"}
                };
                for (var selector in config) {
                    $(selector).chosen(config[selector])
                }
            })
        </script>


</div>
</body>
</html>