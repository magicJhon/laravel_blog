@include('admin.common._meta')

<title>新增文章 - 资讯管理 - H-ui.admin v3.0</title>
<meta name="keywords" content="H-ui.admin v3.0,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.0，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<article class="page-container">
    <form action="" method="post" class="form form-horizontal" id="my-form-submit">
        {{csrf_field()}}
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>网站类型：</label>
            <div class="formControls col-xs-8 col-sm-9"> <span class="select-box">
					<select name="link_web_type_id" id="link_web_type_id" class="select">
						<option value="0">默认类型</option>
                        @foreach($data as $k=>$d)
                            @if($d->type_pid == 0)
                                <option value="{{$d->type_id}}" disabled>{{$d->_type_name}}</option>
                            @else
                                <option value="{{$d->type_id}}">{{$d->_type_name}}</option>
                            @endif
                        @endforeach
					</select>
				</span>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"></label>
            <div class="formControls col-xs-8 col-sm-9 skin-minimal" id="resText">
                {{--<div class="check-box">--}}
                    {{--<input type="checkbox" id="checkbox-pinglun">jerry的编程之路--}}
                    {{--<label for="checkbox-pinglun">&nbsp;</label>--}}
                {{--</div>--}}
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>共计费用：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <span style="color: red">100元</span>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>链接名称：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="" placeholder="" id="link_name" name="link_name">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">链接标题：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="" placeholder="" id="link_title" name="link_title">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">链接URL：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="" placeholder="" id="link_url" name="link_url">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">有效开始日期：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" name="link_start_time" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss',maxDate:'#F{$dp.$D(\'datemax\')||\'%y-%M-%d\'}'})" id="datemin" class="input-text Wdate">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">有效结束日期：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" name="link_end_time" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss',minDate:'#F{$dp.$D(\'datemin\')}'})" id="datemax" class="input-text Wdate">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">排序：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="0" placeholder="" id="link_order" name="link_order">
            </div>
        </div>
        <div class="row cl">
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
            </div>
            {{--<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">--}}
            {{--<button onClick="article_save_submit();" class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 保存并提交审核</button>--}}
            {{--<button onClick="article_save();" class="btn btn-secondary radius" type="button"><i class="Hui-iconfont">&#xe632;</i> 保存草稿</button>--}}
            {{--<button onClick="removeIframe();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>--}}
            {{--</div>--}}
        </div>
    </form>
</article>

@include('admin.common._footer')

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="{{asset('resources/views/admin/lib/My97DatePicker/4.8/WdatePicker.js')}}"></script>
<script type="text/javascript" src="{{asset('resources/views/admin/lib/jquery.validation/1.14.0/jquery.validate.js')}}"></script>
<script type="text/javascript" src="{{asset('resources/views/admin/lib/jquery.validation/1.14.0/validate-methods.js')}}"></script>
<script type="text/javascript" src="{{asset('resources/views/admin/lib/jquery.validation/1.14.0/messages_zh.js')}}"></script>
<script type="text/javascript" src="{{asset('resources/views/admin/lib/webuploader/0.1.5/webuploader.min.js')}}"></script>
{{--<script type="text/javascript" src="{{asset('resources/views/admin/lib/ueditor/1.4.3/ueditor.config.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{asset('resources/views/admin/lib/ueditor/1.4.3/ueditor.all.min.js')}}"> </script>--}}
{{--<script type="text/javascript" src="{{asset('resources/views/admin/lib/ueditor/1.4.3/lang/zh-cn/zh-cn.js')}}"></script>--}}
<script type="text/javascript" charset="utf-8" src="{{asset('resources/org/ueditor/ueditor.config.js')}}"></script>
<script type="text/javascript" charset="utf-8" src="{{asset('resources/org/ueditor/ueditor.all.min.js')}}"> </script>
<script type="text/javascript" charset="utf-8" src="{{asset('resources/org/ueditor/ueditor.all.js')}}"></script>
<!-- 建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败,这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script type="text/javascript" charset="utf-8" src="{{asset('resources/org/ueditor/lang/zh-cn/zh-cn.js')}}"></script>
<script type="text/javascript">
    $(function(){
        $('.skin-minimal input').iCheck({
            checkboxClass: 'icheckbox-blue',
            radioClass: 'iradio-blue',
            increaseArea: '20%'
        });

        $('#link_web_type_id').change(function () {
            var webTypeId = $(this).val();
            $.ajax({
                type: "get",
                url: "{{url('admin/links/getWebListByWebTypeId')}}"+'/'+webTypeId,
                dataType: "json",
                success: function(data){
                    $('#resText').empty();   //清空resText里面的所有内容
                    var html = '';
                    $.each(data, function(commentIndex, comment){
                        html += '<div class="check-box">\n' +
                            '<input type="checkbox" name="link_web_id[]" id="checkbox-pinglun" value="'+comment['web_id']+'">'+comment['web_name']+'\n' +
                            '<label for="checkbox-pinglun">&nbsp;</label>\n' +
                            '</div>';
                    });
                    $('#resText').html(html);
                    $('#resText input').iCheck({
                        checkboxClass: 'icheckbox-blue',
                        radioClass: 'iradio-blue',
                        increaseArea: '20%'
                    });
                }
            });
        });

        $("#my-form-submit").validate({
            rules:{
                link_name:{
                    required:true,
                },
                link_title:{
                    required:true,
                },
                link_url:{
                    required:true,
                },
                link_order:{
                    required:true,
                },
                link_start_time:{
                    required:true,
                },
                link_end_time:{
                    required:true,
                },
                link_web_type_id:{
                    required:true,
                },
            },
            onkeyup:false,
            focusCleanup:true,
            success:"valid",
            submitHandler:function(form){
                $(form).ajaxSubmit({
                    url:"{{url('admin/links/create')}}",//form提交数据的地址  data数据不用带了自动加上了
                    type:'post',　　　  //form提交的方式(method:post/get)
                    beforeSerialize:function(){}, //序列化提交数据之前的回调函数
                    beforeSubmit:function(){},　　//提交前执行的回调函数
                    success:function(responseData){
                        console.log(responseData.statusText);
                        if(responseData.code == 1){
                            //添加成功
                            layer.msg(responseData.msg,{icon:"6",time:responseData.wait*1000});
                            setTimeout(function(){
                                var index = parent.layer.getFrameIndex(window.name);//获取子页面元素
                                parent.location.reload();//刷新父页面
                                parent.layer.close(index);//关闭子页面元素
                            },1000);//定时器关闭子页面
                        }else{
                            //添加失败
                            layer.msg(responseData.msg,{icon:"5",time:responseData.wait*1000});
                        }
                    },//提交成功后执行的回调函数
                    error:function(responseData){
                        layer.msg('提交失败',{icon:"5",time:3*1000});
                    },//提交失败执行的函数
                    dataType:'json',　　　　　　　//服务器返回数据类型
                    clearForm:true,　　　　　　 //提交成功后是否清空表单中的字段值
                    restForm:true,　　　　　　  //提交成功后是否重置表单中的字段值，即恢复到页面加载时的状态
                    timeout:6000 　　　　　 　 //设置请求时间，超过该时间后，自动退出请求，单位(毫秒).
                });

                return false;
            }
        });

    });
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>