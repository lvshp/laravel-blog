@extends('Home/public')
@section('content')

    <div id="main" class="content">
        <div style="position: relative;height: 500px;">
        <!--<&#45;&#45;设置id为oriContent，如果想实现实时更新，使用onkeyup方法&#45;&#45;!>-->
        <span style="position: relative;display: block;left: 500px;top: 40px;">Markdown 编辑器</span>
        <textarea id="oriContent" style="height:400px;width:600px;box-shadow: 0px 0px 3px #000;margin-left:300px;margin-top:50px;float: left;" onkeyup="convert()"></textarea>
        <span style="position: relative;left: -350px;top: 20px;">效果预览</span>
        <!--<-&#45;&#45;设置展示的div添加id-!>-->
        <div id="result" style="box-shadow: 0px 0px 3px #000;height: 400px;width: 600px;float: left;margin-left:60px;margin-top: 50px;"></div>
        </div>
        <a class="gaz-btn primary" style="position: relative;left: 46%;" href="javascript:void(0)">保存文章</a>
    </div>
@endsection

@section('js')
        <!--<&#45;&#45;写转化函数&#45;&#45;!>-->
    <script type="text/javascript">
        function convert(){
            var text = document.getElementById("oriContent").value;
            var converter = new showdown.Converter();
            var html = converter.makeHtml(text);
            document.getElementById("result").innerHTML = html;
        }
    </script>
@endsection