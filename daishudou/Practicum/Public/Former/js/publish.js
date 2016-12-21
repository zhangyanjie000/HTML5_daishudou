mui.init();
		//表情包
	// 	hljs.initHighlightingOnLoad();
	// $("#btnLoad1").click(function () {
 //        $("#content").emoji({
 //            showTab: false,
 //            animation: 'fade',
 //            icons: [{
 //                name: "贴吧表情",
 //                path: "__PUBLIC__/Former/images/tieba/",
 //                maxNum: 50,
 //                file: ".jpg",
 //                placeholder: ":{alias}:",
 //                alias: {
 //                    1: "hehe",
 //                    2: "haha",
 //                    3: "tushe",
 //                    4: "a",
 //                    5: "ku",
 //                    6: "lu",
 //                    7: "kaixin",
 //                    8: "han",
 //                    9: "lei",
 //                    10: "heixian",
 //                    11: "bishi",
 //                    12: "bugaoxing",
 //                    13: "zhenbang",
 //                    14: "qian",
 //                    15: "yiwen",
 //                    16: "yinxian",
 //                    17: "tu",
 //                    18: "yi",
 //                    19: "weiqu",
 //                    20: "huaxin",
 //                    21: "hu",
 //                    22: "xiaonian",
 //                    23: "neng",
 //                    24: "taikaixin",
 //                    25: "huaji",
 //                    26: "mianqiang",
 //                    27: "kuanghan",
 //                    28: "guai",
 //                    29: "shuijiao",
 //                    30: "jinku",
 //                    31: "shengqi",
 //                    32: "jinya",
 //                    33: "pen",
 //                    34: "aixin",
 //                    35: "xinsui",
 //                    36: "meigui",
 //                    37: "liwu",
 //                    38: "caihong",
 //                    39: "xxyl",
 //                    40: "taiyang",
 //                    41: "qianbi",
 //                    42: "dnegpao",
 //                    43: "chabei",
 //                    44: "dangao",
 //                    45: "yinyue",
 //                    46: "haha2",
 //                    47: "shenli",
 //                    48: "damuzhi",
 //                    49: "ruo",
 //                    50: "OK"
 //                },
 //                title: {
 //                    1: "呵呵",
 //                    2: "哈哈",
 //                    3: "吐舌",
 //                    4: "啊",
 //                    5: "酷",
 //                    6: "怒",
 //                    7: "开心",
 //                    8: "汗",
 //                    9: "泪",
 //                    10: "黑线",
 //                    11: "鄙视",
 //                    12: "不高兴",
 //                    13: "真棒",
 //                    14: "钱",
 //                    15: "疑问",
 //                    16: "阴脸",
 //                    17: "吐",
 //                    18: "咦",
 //                    19: "委屈",
 //                    20: "花心",
 //                    21: "呼~",
 //                    22: "笑脸",
 //                    23: "冷",
 //                    24: "太开心",
 //                    25: "滑稽",
 //                    26: "勉强",
 //                    27: "狂汗",
 //                    28: "乖",
 //                    29: "睡觉",
 //                    30: "惊哭",
 //                    31: "生气",
 //                    32: "惊讶",
 //                    33: "喷",
 //                    34: "爱心",
 //                    35: "心碎",
 //                    36: "玫瑰",
 //                    37: "礼物",
 //                    38: "彩虹",
 //                    39: "星星月亮",
 //                    40: "太阳",
 //                    41: "钱币",
 //                    42: "灯泡",
 //                    43: "茶杯",
 //                    44: "蛋糕",
 //                    45: "音乐",
 //                    46: "haha",
 //                    47: "胜利",
 //                    48: "大拇指",
 //                    49: "弱",
 //                    50: "OK"
 //                }
 //            },]
 //        });
 //    });
function fileSelect() {
            document.getElementById("file").click(); 
        }
window.onload = function() {
    //文本域限字数
		document.getElementById('content').onkeydown = function() 
		{    
		    if(this.value.length >= 140) 
		      event.returnValue = false; 
		} 
	
}
var params = {
                    fileInput: $("#fileImage").get(0),
                    filter: function(files) {
                        var arrFiles = [];
                        for (var i = 0, file; file = files[i]; i++) {
                            if (file.type.indexOf("image") == 0) {
                                arrFiles.push(file);                
                            } 
                            else {
                                mui.toast('文件"' + file.name + '"不是图片。');    
                            }
                        }
                        return arrFiles;
                    },
                    onSelect: function(files) {
                        var html = '', i = 0;
                        $("#preview").html('<div class="upload_loading"></div>');
                        var funAppendImage = function() {
                            file = files[i];
                            if (file) {
                                var reader = new FileReader()
                                reader.onload = function(e) {
                                    html = html + '<div id="uploadList_'+ i +'" class="upload_append_list mui-col-sm-4 mui-text-center"><p>'+ 
                                        '<a href="javascript:" class="upload_delete" title="删除" data-index="'+ i +'">删除</a><br />' +
                                        '<img id="uploadImage_' + i + '" src="' + e.target.result + '" class="upload_image" /></p>'+ 
                                        '<span id="uploadProgress_' + i + '" class="upload_progress"></span>' +
                                    '</div>';                               
                                    i++;
                                    funAppendImage();
                                }
                                reader.readAsDataURL(file);
                            } else {
                                $("#preview").html(html);
                                if (html) {
                                    //删除方法
                                    $(".upload_delete").click(function() {
                                        ZXXFILE.funDeleteFile(files[parseInt($(this).attr("data-index"))]);
                                        return false;   
                                    });
                                }
                            }
                        };
                        funAppendImage();       
                    },
                    onDelete: function(file) {
                        $("#uploadList_" + file.index).fadeOut();
                    },
                    onSuccess: function(file, response) {
                        $("#uploadInf").append("<p>上传成功，图片地址是：" + response + "</p>");
                    },
                    onFailure: function(file) {
                        $("#uploadInf").append("<p>图片" + file.name + "上传失败！</p>");  
                        $("#uploadImage_" + file.index).css("opacity", 0.2);
                    },
                };
                ZXXFILE = $.extend(ZXXFILE, params);
                ZXXFILE.init();

// $(function() {
//     //uploadify
//     $("#file").uploadify({
//         'swf':  PUBLIC+"/Former/uploadify/uploadify.swf",//引入uploadify核心Flash文件 
//         'uploader': PUBLIC+'/Former/uploadify/uploadify.php',
//         // uploader: uploadUrl,//PHP处理脚本地址
//         fileTypeDesc: 'Image File',//选择文件提示文字
//         fileTypeExts: '*.jpg; *.jpeg; *.png; *.gif',//允许选择的文件类型
//         formData: {'session_id':uid},
//         //上传成功后的回调函数
//         onUploadSuccess: function(file,data,response) {
//             alert(data);
//         }

//     });
//})
