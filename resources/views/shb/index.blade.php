@extends('basic.basic')
<style type="text/css">
    .left{
    /*position: fixed !important;*/
    /*min-height: 100% !important;*/
    left: 0;
    padding-bottom: 40px;
}
.personal-info,.contact-info{
    color: #cac6c6;
}
.personal-info p,.contact-info p{
    margin: 0;
}
.personal-kill{
    color: #cac6c6;
}
.skill-label{
    padding: 0 !important;
    background-color: #1d2936
}
.skill-label-name{
    color: #cac6c6;
    padding: 0 !important;
    margin: 5px 0 5px;
}
.skill-label-num{
    background-color: #7ab7a2;
}
.skill{
    overflow: hidden;
}
.skill div{
    height: 15px;
}
body{
    /*background-color: #e7e7e7 !important;*/

    background-color: #283a46 !important;
}
.right{
    padding-top: 10px;
    background-color: #e7e7e7 !important;
}
.personal-experience{
    padding: 10px;
    width: 100%;
    border-bottom: 1px solid #c5c4c4;
    overflow: hidden;
}
.personal-experience-name{
    margin-top: 10px !important;
    color: #685b5b;
}
.experience-title{
    font-weight: bolder;
    margin-top: 20px;
}
.experience-position{
    margin-top: 10px;
    color: #2cad75;
}
.experience-content{
    color: #727171;
}
.experience-time{
    color: #a59c9c;
}
body p,body a{
    word-wrap : break-word ;
    word-break:break-all;
}
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 col-sm-4 left white">
            <h1 class="mt20" size="3em">
                Hello
            </h1>
            <h5>
                我的简历地址：
                <a href="http://www.qq582302894.com/sunhaobo">
                    www.qq582302894.com/sunhaobo
                </a>
            </h5>
            <div style="height: 50px">
            </div>
            <h4>
                个人
            </h4>
            <div class="personal-info">
                <p>
                    孙浩波
                </p>
                <p>
                    男，汉族
                </p>
                <p>
                    生于1994年,四川泸州省叙永县
                </p>
                <p>
                    父母在新疆，小学至高中就读于新疆，大学在湖南湘潭大学
                </p>
            </div>
            <h4 class="mt20">
                会点什么
            </h4>
            <div class="personal-kill row">
                <div class="skill">
                    <p class="skill-label-name">
                        php
                    </p>
                    <div class="col-md-12 col-sm-12 skill-label">
                        <div class="skill-label-num" style="width: 90%">
                        </div>
                    </div>
                </div>
                <div class="skill">
                    <p class="skill-label-name">
                        linux,ubuntu
                    </p>
                    <div class="col-md-12 col-sm-12 skill-label">
                        <div class="skill-label-num" style="width: 50%">
                        </div>
                    </div>
                </div>
                <div class="skill">
                    <p class="skill-label-name">
                        laravel
                    </p>
                    <div class="col-md-12 col-sm-12 skill-label">
                        <div class="skill-label-num" style="width: 50%">
                        </div>
                    </div>
                </div>
                <div class="skill">
                    <p class="skill-label-name">
                        thinkphp
                    </p>
                    <div class="col-md-12 col-sm-12 skill-label">
                        <div class="skill-label-num" style="width: 50%">
                        </div>
                    </div>
                </div>
                <div class="skill">
                    <p class="skill-label-name">
                        lnmp
                    </p>
                    <div class="col-md-12 col-sm-12 skill-label">
                        <div class="skill-label-num" style="width: 50%">
                        </div>
                    </div>
                </div>
                <div class="skill">
                    <p class="skill-label-name">
                        html,div,css
                    </p>
                    <div class="col-md-12 col-sm-12 skill-label">
                        <div class="skill-label-num" style="width: 70%">
                        </div>
                    </div>
                </div>
                <div class="skill">
                    <p class="skill-label-name">
                        javascript,jquery
                    </p>
                    <div class="col-md-12 col-sm-12 skill-label">
                        <div class="skill-label-num" style="width: 70%">
                        </div>
                    </div>
                </div>
                <div class="skill">
                    <p class="skill-label-name">
                        c,java
                    </p>
                    <div class="col-md-12 col-sm-12 skill-label">
                        <div class="skill-label-num" style="width: 50%">
                        </div>
                    </div>
                </div>
                <!-- <div class="skill">
                    <p class="skill-label-name">
                        c,java
                    </p>
                    <div class="col-md-12 col-sm-12 skill-label">
                        <div class="skill-label-num" style="width: 50%">
                        </div>
                    </div>
                </div> -->
                <div class="skill">
                    <p class="skill-label-name">
                        sql,mysql
                    </p>
                    <div class="col-md-12 col-sm-12 skill-label">
                        <div class="skill-label-num" style="width: 80%">
                        </div>
                    </div>
                </div>
                <div class="skill">
                    <p class="skill-label-name">
                        git
                    </p>
                    <div class="col-md-12 col-sm-12 skill-label">
                        <div class="skill-label-num" style="width: 80%">
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact">
                <h4 class="mt20">
                    联系我
                </h4>
                <div class="contact-info">
                    <p>
                        QQ:582302894
                    </p>
                    <p>
                        mail:582302894@qq.com
                    </p>
                    <p>
                        phone:18373250360
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-9 col-sm-8 right">
            <h4 class="experience-title">
                学历
            </h4>
            <div class="personal-experience">
                <h5 class="personal-experience-name col-md-3 col-sm-3 m0 p0">
                    湘潭大学 · 本科
                </h5>
                <div class="col-md-9 col-sm-9">
                    <p class="experience-position">
                        2012-9 - 2016-7
                    </p>
                    <p class="experience-position">
                        信息管理与信息系统
                    </p>
                </div>
            </div>
            <h4 class="experience-title">
                学习经历
            </h4>
            <div class="personal-experience">
                <h5 class="personal-experience-name col-md-3 col-sm-3 m0 p0">
                    湘潭大学
                </h5>
                <div class="col-md-9 col-sm-9">
                    <p class="experience-position">
                        学习php，html，div+css，js，jquery
                    </p>
                    <p class="experience-time">
                        大二 - 大四
                    </p>
                    <p class="experience-content">
                        计算机学科学习了c，java，数据结构，计算机操作系统，计算机网络原理，数据库设计
                    </p>
                    <p class="experience-content">
                        大四下学期自学了yii2框架，使用yii2框架编写了毕业设计实验室管理系统，主要是对实验室物品详细的添加删除操作以及实验室物品使用时期的管理
                    </p>
                </div>
            </div>
            <h4 class="experience-title">
                工作经历
            </h4>
            <div class="personal-experience">
                <h5 class="personal-experience-name col-md-3 col-sm-3 m0 p0">
                    广州
                </h5>
                <div class="col-md-9 col-sm-9">
                    <p class="experience-position">
                        php实习生
                    </p>
                    <p class="experience-time">
                        2015-7 - 2015-12
                    </p>
                    <p class="experience-content">
                        在广州首辅科技有限公司担任php实习生
                    </p>
                    <p class="experience-content">
                        使用thinkphp开发电商网站,windows平台，phpstudy集成环境
                    </p>
                    <p class="experience-content">
                        个人编写网站前端html、css、js代码与后端逻辑代码，期间使用jquery的ajax实现前后端交互数据以实现适应手机端的无刷新加载，点赞评论等功能
                    </p>
                </div>
            </div>
            <div class="personal-experience">
                <h5 class="personal-experience-name col-md-3 col-sm-3 m0 p0">
                    上海-上海爱推网络技术有限公司
                </h5>
                <div class="col-md-9 col-sm-9">
                    <p class="experience-position">
                        php程序员
                    </p>
                    <p class="experience-time">
                        2016-7 - 2017-6
                    </p>
                    <p class="experience-content">
                        在上海内推网（www.neitui.me）担任php后台开发人员，使用老大自己编写的框架，网站为sae云空间，开发环境为windows环境，sae模拟服务器
                    </p>
                    <p class="experience-content">
                        在内推网工作期间参与过推+项目、简历导师项目、网站改版、网站搜索优化，促成svn代码管理改为git管理
                    </p>
                    <p class="experience-content">
                        期间使用过angularjs，微信公众平台扫码关注，微信场景二维码触发，微信消息触发，使用了缓存+elasticsearch优化搜索结果，优化了搜索逻辑
                    </p>
                    <p class="experience-content">
                        本人只负责网站后端代码编写，网站大部分页面基本都是我写的
                    </p>
                </div>
            </div>
            <h4 class="experience-title">
                我的网站
            </h4>
            <div class="personal-experience">
                <h5 class="personal-experience-name col-md-3 col-sm-3 m0 p0">
                    <a href="http://www.qq582302894.com" target="_blank">
                        www.qq582302894.com
                    </a>
                </h5>
                <div class="col-md-9 col-sm-9">
                    <p class="experience-position">
                        ubuntu服务器+lnmp+laravel
                    </p>
                    <p class="experience-time">
                        2017-6 - 2016-7
                    </p>
                    <p class="experience-content">
                        阿里云香港服务器
                    </p>
                    <p class="experience-content">
                        个人网站实在不知道做点什么好，从今日头条爬了一点数据，增加了注册功能，个人头像文件上传，邮件在阿里云服务器暂时还发不出去
                    </p>
                    <p class="experience-content">
                        网站是bootstrap自适应的
                    </p>
                </div>
            </div>
            <h4 class="experience-title">
                <a href="http://www.qq582302894.com/self/a.html" target="_blank">
                    面试
                </a>
            </h4>
        </div>
    </div>
</div>
