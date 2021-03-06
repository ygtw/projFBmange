<!DOCTYPE html>
<html lang="zh_TW">
   
<head>
    <meta charset="utf-8">
    <title>我的塗鴉牆管家 My Facebook Wall Manager</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="My Facebook Wall Manager, Facebook Search">

    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="expires" content="0">
    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/datepicker.css" rel="stylesheet">


    <style type="text/css">
        #detail_results {
            white-space: pre-wrap;
            word-break: break-all;
        }
        h4 {
            color: black;
            font-weight: normal;
        }
        input[type="text"] {
            text-align: center;
        }
        .Dposts:hover {
            background: rgb(231, 248, 195);
            -webkit-tap-highlight-color: rgb(231, 248, 195);
        }
        .Dposts {
            padding: 5px;
            border-radius: 10px;
        }
        body {
            padding-top: 20px;
            padding-bottom: 40px;
        }
        /* Custom container */
        .container-narrow {
            margin: 0 auto;
            max-width: 700px;
        }
        .container-narrow > hr {
            margin: 30px 0;
        }
        /* Main marketing message and sign up button */
        .jumbotron {
            margin: 0px 0;
            text-align: center;
        }
        .jumbotron h1 {
            font-size: 72px;
            line-height: 1;
        }
        .jumbotron .btn {
            font-size: 21px;
            padding: 14px 24px;
        }
        /* Supporting marketing content */
        .marketing {
            margin: 60px 0;
        }
        .marketing p + h4 {
            margin-top: 28px;
        }
        a:hover {
            text-decoration: none;
        }
        .time {
            color: lightgray;
        }
        #tips {
            text-align: right;
            color: blue;
            font-weight: bolder;
            bottom: 0px;
            font-size: medium;
        }
        .pic {
            border: 1px solid black;
        }
        #sum_likes,
        #sum_comments {} #sysmsg {
            color: gray;
            font-size: smaller;
        }
    </style>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="assets/ico/favicon.png">
</head>

<body>

    <div class="navbar navbar-fixed-bottom" style="bottom:0px; position:fixed; ">
        <div class="navbar-inner">

            <div id="tips" style="padding:10px;">


                <span id="sysmsg">

</span>
                &nbsp; &nbsp; &nbsp;

                <span id="sum_likes">0</span>
                <img style="width:25px" width="25px" src="like.png" />&nbsp;
                <span id="sum_comments">0</span>
                <img src="comment.png" width="25px" />&nbsp;
                <!--
<img src="share.png" width="50px" />  
-->



            </div>
        </div>


    </div>



    <div class="container-narrow">

        <div class="masthead">



            <h3 class="muted" style="font-size:20px"><span id="text_title">我的塗鴉牆管家</span>

<!-- Button to trigger modal -->
<span class="pull-right">
<a href="#myModal" role="button" class="btn btn-small" data-toggle="modal">About</a>
 <br>
  <div class="fb-like" data-href="http://apps.facebook.com/mywallmanager/" data-send="false" data-layout="button_count" data-width="50" data-show-faces="true"></div>
</span>
         </h3>


            <!-- Modal -->
            <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel">需要特殊服務嗎?</h3>
                </div>
                <div class="modal-body">
                    <p>Facebook很好用，我們每天都在用，但是當有一天我們想要找很久以前發過的一則訊息，卻出乎意料的麻煩！[我的塗鴉牆管家] 是一個Facebook塗鴉牆管理APP，能讓我們快速找到宇整理以前發過的訊息。目前還在測試中，歡迎給予建議，謝謝！
                    </p>
                    Email: jjlf23015888 [at] gmail.com
                    <br>
                    <a href="https://www.facebook.com/appcenter/mywallmanager">FB APP</a> /
                    <a href="https://play.google.com/store/apps/details?id=ygtw.projfbmange">Android APP</a> /
                    <a href="https://github.com/ygtw/projFBmange">Source Code</a>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" onclick="$('#myModal').modal('hide')
">OK</button>
                </div>
            </div>


            <hr>





            <div class="jumbotron">



                <img id="face" width="100" src="face.png" />
                <p>
                    <span id="text_hello1">主人您好，我是您的塗鴉牆管家</span>
                    <br>
                    <span id="text_hello2">
主人要找什麼樣的文章?</span>
                </p>

                <div id="nologin" style="display:none">
                    <a id="aLogInButton" href="javascript:">
                        <span id="text_help1">開始使用前，請先</span>
                        <input id="btn_permi" type="button" class="btn btn-primary" value="點我" />
                        <span id="text_help2">授權給管家，才能繼續使用</span> 
                    </a>
                </div>

                <div id="divlogin" style="display:none">
                    <br>
                    <span id="text_keyword">關鍵字包含</span>
                    <input type="text" width="50px" class="span2" size="10" id="input_keyword" value="" />
                    <br>
                    <span id="text_likes">按讚數大於</span>
                    <input type="text" width="50px" class="span2" size="1" id="input_Flike" value="0" />
                    <br>
                    <span id="text_comments">留言數大於</span>
                    <input type="text" width="50px" class="span2" size="1" id="input_comments" value="0" />
                    <br>
                    <span id="text_time_from">時間範圍從</span>
                    <input type="text" class="span2" value="" id="dp1">
                    <span id="text_time_to">到
</span>
                    <input type="text" value="" id="dp2" class="span2">

                    <br>
                    <input id="btn_search" type="button" class="btn  btn-success" value="請幫我找找" onclick="search()" />
                    <br>

                    <br>
                    <br>

                </div>

                <hr>

                <div id="fb-root"></div>



            </div>


            <div id="detail_results" class="row-fluid">


            </div>


            <div class="footer pull-right">
                <input id="btn_reset" type="button" onclick="location.reload()" class="btn" style="display:none" value="重新搜尋" />
                <br>
                <br>
                <p id="text_bottom">
                    <br>&copy;我的塗鴉牆管家v0.91 , 2013</p>
            </div>

        </div>
        <!-- /container -->
        <br>
        <br>
        <br>
        <br>

        <!-- Le javascript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/cordova-2.4.0.js"></script>
        <script src="assets/js/bootstrap-datepicker.js"></script>
        <script src="assets/js/i18n.js"></script>


        <script>
            var sum_likes = 0;
            var sum_comments = 0;
            var DONE = 0;

            $(function () {
                // This will initialize the plugin 
                // and show two dialog boxes: one with the text "Olá World"
                // and other with the text "Good morning John!" 
                jQuery.i18n.properties({
                    name: 'Messages',
                    path: 'i18n/',
                    mode: 'both',
                    callback: function () {
                        // We specified mode: 'both' so translated values will be
                        // available as JS vars/functions and as a map

                        // Accessing a simple value through the map
                        //   jQuery.i18n.prop('msg_hello');
                        // Accessing a value with placeholders through the map
                        // jQuery.i18n.prop('msg_complex', 'John');

                        //  alert(msg_keyword);

                        // Accessing a simple value through a JS variable
                        //       alert(msg_hello +' '+ msg_world);
                        // Accessing a value with placeholders through a JS function
                        //     alert(msg_complex('John'));

                        $("#text_keyword").text(msg_keyword);
                        $("#text_likes").text(msg_like);
                        $("#text_comments").text(msg_comment);
                        $("#text_time_from").text(msg_time_from);
                        $("#text_time_to").text(msg_to);
                        $("#text_title").text(msg_ProgTitle);
                        $("#text_bottom").text(msg_bottom);
                        $("#text_bottom").append(", v0.91");
                        $("#btn_search").val(msg_search);
                        $("#btn_permi").val(msg_permi);
                        $("#btn_reset").val(msg_reset);
                        $("#text_help1").text(msg_help1);
                        $("#text_help2").text(msg_help2);
                        $("#text_hello1").text(msg_Hello1);
                        $("#text_hello2").text(msg_Hello2);

                    }
                });

                $('#dp1').datepicker({
                    format: 'yyyy-mm-dd'
                });
                $('#dp2').datepicker({
                    format: 'yyyy-mm-dd'
                });


            })
             var lang = window.navigator.userLanguage || window.navigator.language;

            var uid, username;
            var Flike = 10;
            var step = 0;
            var Fcomments = 0;
            var count_posts = 0;
            var posts_like = new Array();
            window.fbAsyncInit = function () {
                FB.init({
                    appId: '233574123367349', // App ID
                    //  channelURL : 'channel.html', // Channel File
                    status: true, // check login status
                    cookie: true, // enable cookies to allow the server to access the session
                    oauth: true, // enable OAuth 2.0
                    xfbml: true, // parse XFBML

                });

                // Additional initialization code here



                document.getElementById("aLogInButton").onclick = function () {
                    doLoginApp2()
                    /*
           FB.login(function(response) {
           if (response.authResponse) {
           
                         
            $("#nologin").hide();
         　$("#divlogin").show();

           
           
           console.log('Welcome!  Fetching your information.... ');
           
           
           
            FB.api('/me', function(response) {
          //   console.log(response);
          //   console.log( FBquery( response.id ) );
            uid = response['id'];
            username = response['username'];
           });

           
           } else {
           console.log('User cancelled login or did not fully authorize.');
           }
         }, {scope: 'user_status,read_stream,publish_stream'});
           
     */




                };




                FB.getLoginStatus(function (response) {
                    if (response.authResponse) {
                        // logged in and connected user, someone you know
                        　
                        $("#divlogin").fadeIn("1000");




                        FB.api('/me', function (response) {
                            // console.log(response);
                            //   console.log( FBquery( response.id ) );
                            uid = response['id'];
                            username = response['username'];
                        });


                    } else {

                        $("#nologin").fadeIn("1000");　
                        $("#divlogin").hide();

                        　　 //alert( document.getElementById("divlogin").setAttribute("display","none") );
                        //alert('oh 管家尚未取得塗鴉牆權限'); 


                    }



                });




            };

             // Load the SDK Asynchronously
            (function (d) {
                var js, id = 'facebook-jssdk';
                if (d.getElementById(id)) {
                    return;
                }
                js = d.createElement('script');
                js.id = id;
                js.async = true;
                js.src = "//connect.facebook.net/" + lang + "/all.js";
                d.getElementsByTagName('head')[0].appendChild(js);
            }(document));

            function doLoginApp2() {
                var appID = '233574123367349';
                var scopes = '&scope=user_status,read_stream,publish_stream,user_photos,status_update';
                var path = 'https://www.facebook.com/dialog/oauth?';
                //on moblie, display=touch
                var queryParams = ['client_id=' + appID, 'redirect_uri=' + window.location, 'response_type=token', 'display=touch' + scopes];
                //on PC web
                var queryParams = ['client_id=' + appID, 'redirect_uri=' + window.location, 'response_type=token' + scopes];
                var query = queryParams.join('&');
                var url = path + query;

                window.location = url;
            }

            function postToFB() {
                $("#btn_share").attr("disabled", "disabled");

                var FromTo = "";
                if ($("#dp1").val()) {
                    FromTo = '從 ' + $("#dp1").val();

                    if ($("#dp2").val()) {
                        FromTo = FromTo + ' 到 ' + $("#dp2").val()
                    } else {
                        FromTo = FromTo + ' 到現在 ';
                    }
                }



                console.log(FromTo)
                var params = {};
                params['message'] = '我的塗鴉牆' + FromTo + '共有 ' + sum_likes + ' 個讚' + ' 和 ' + sum_comments + ' 個留言!!';
                params['name'] = '我使用塗鴉牆管家 ';
                params['description'] = '你的Facebook好幫手';
                http: //i.imgur.com/cEjithU.png
                params['link'] = 'https://www.facebook.com/appcenter/mywallmanager';
                params['picture'] = 'http://i.imgur.com/cEjithU.png';
                //params['caption'] = 'Caption';

                FB.api('/me/feed/', 'post', params, function (response) {
                    if (!response || response.error) {
                        //  alert('Error occured');
                        console.log(response)
                    } else {
                        alert('OK!');
                    }
                });
            }

            function search() {

                // postToFB()
                $("input").attr("disabled", "disabled");


                $("#btn_reset").show("fade");
                $("#btn_search").val("請稍待")
                $("#btn_reset").removeAttr('disabled');

                Flike = document.getElementById('input_Flike').value;
                document.getElementById('sysmsg').innerHTML = msg_running;
                document.getElementById('detail_results').innerHTML = '';
                //document.getElementById('sample_Div2').innerHTML='';

                step = 0;
                Fcomments = document.getElementById('input_comments').value;
                keyword = document.getElementById('input_keyword').value;


                getwall();
            }

            function getwall(until, temp_step) {

                var Tstep = step;
                var API;


                var since = $("#dp1").val() // $("#dp1").val();
                //console.log(since);
                var now = $("#dp2").val() //$("#dp2").val();
                //console.log(now);

                if (temp_step) {
                    Tstep = temp_step;
                    API = '/me/feed?summary=true&limit=200&since=' + since + '&' + until;

                } else {
                    API = '/me/feed?summary=true&limit=200&since=' + since + '&until=' + now;

                }
                //    FB.api( '/me/feed?limit=200&since=&'+until , function(response2) {




                FB.api(API, function (response2) {

                    //  console.log(response2);
                    //   console.log( FBquery( response.id ) );
                    //  console.log( Tstep +  ' ' + step);
                    if (Tstep != step) return;

                    parser(response2);
                    if (typeof response2['paging'] != 'undefined') {
                        document.getElementById('sysmsg').innerHTML = msg_running + msg_step + (step++) + msg_step2;

                        getwall(
                            response2['paging']['next'].substring(
                                response2['paging']['next'].indexOf('until'), response2['paging']['next'].length), step
                        )
                    } else {
                        DONE = 1;
                        //done
                        document.getElementById('sysmsg').innerHTML = '<input id="btn_share" type="button" onclick="postToFB()"  class="btn btn-success "  value="分享到FB"   />';


                    }

                    //  else keep=0;  console.log(response2['paging']['previous'].substring( response2['paging']['previous'].indexOf('since') , response2['paging']['previous'].length ));
                });

            }
            function parselike (response) {
                // body...
                //FB.api()
                        // console.log( response['data'][key]['message'].indexOf( keyword )  );





            }

            function parser(response) {
                // console.log(response);
                //   console.log( FBquery( response.id ) );

                for (var key in response['data']) {

                  //  console.log(response['data'][key]);
                    if (!response['data'][key]['message'] ||
                        response['data'][key]['message'].indexOf(keyword) == -1 ||

                        !response['data'][key]['comments'] ||
                        response['data'][key]['comments']['count'] < Fcomments ||

                        response['data'][key]['from']['id'].indexOf(uid)==-1

                        /*        ! response['data'][key]['likes']  || 
            response['data'][key]['likes']['count']<Flike 
*/

                    ) continue;




            
                    //parselike(response)

                    var start = response['data'][key]['id'].indexOf('_') + 1;
                    var pid = response['data'][key]['id'].substring(start, response['data'][key]['id'].length);


                    var object_id = response['data'][key]['object_id'];

                    if (response['data'][key]['object_id'] && response['data'][key]['status_type'] === "added_photos")
                        var object_id = response['data'][key]['object_id'];
                    else
                        var object_id = '';




                    if (response['data'][key]['picture'])
                        var pic = response['data'][key]['picture'];
                    else
                        var pic = '';

                    var comments = response['data'][key]['comments']['data'].length;
                    var comments_people_list = "";

                    //console.log(pic);
                    if (comments > 0) {
                        sum_comments = sum_comments + parseInt(comments);
                        $({
                            countNum: $('#sum_comments').text()
                        }).animate({
                            countNum: sum_comments + 1
                        }, {
                            duration: 8000,
                            easing: 'linear',
                            step: function () {
                                $('#sum_comments').text(Math.floor(this.countNum));
                            },
                            complete: function () {



                            }
                        });



                        var comments_people = response['data'][key]['comments']['data'];
                        //console.log(likes_people);
                        for (var i = 0, len = comments_people.length; i < len; i++) {
                            //        console.log(likes_people[i]['name']);
                            var url = "http://facebook.com/" + comments_people[i]['from']['id'];
                            var name = comments_people[i]['from']['name'];
                            comments_people_list = comments_people_list + "<a href='" + url + "' >" + name + "</a>, "
                        };
                        comments_people_list = comments_people_list.substr(0, comments_people_list.length - 2); //最後一個逗點
                    }




                    var likes = 0;



                    if (true) {




                        var likes_people;
                        //       console.log(uid);
                        
                        var temp_count_posts = count_posts;
                        likes = getLikeList(pid, uid, object_id,temp_count_posts);
//                        console.log(likes);

                    }



                    ////////////////////////////
                    count_posts++;
                    var upd_time = response['data'][key]['updated_time'];
                    var mdate = new Date(upd_time);
                    upd_time = dateToYMD(mdate)


                    var temp = "";
                    //       if(count_posts%2==1)
                    //      var temp = document.getElementById('sample_Div2');

                    var msg = response['data'][key]['message']
                    if (msg == null) msg = "管家：主人沒有留文字訊息";

                    var link = "http://www.facebook.com/" + uid + "/posts/" + pid;

                    temp =
                        '<div id="p_' + pid + '" class="Dposts" style="display: none;" ><img   style="width:20px"  src="like.png" width="20" /> <span id="like_' + pid + '" > '  + likes +  '</span>  &nbsp;&nbsp;' + '<span id="' + pid + '" ></span> <br>' +
                        '<br><img src="comment.png" width="20" /> ' + comments + '&nbsp;&nbsp;' + comments_people_list + '<br><br>' +
                        '<a href=' + link + '  target="_blank">' +
                        '<div class=""><div class="row-fluid"> ' +
                        '<div class="span4"> <img width="152px" class="pic" src="' + pic + '"  /> </div>' +


                    '<div class="span8"> ' + '<h4>' + msg + '</h4>   </div> </div>   ' +
                        ' </div> </a><span class="pull-right time" >' + upd_time + '</span> ' +
                        ' </div> ';


                    $("#detail_results").append(temp);
                    $("#p_" + pid).fadeIn(1000);
                    //////////////////////////// 




                }

            }

            function getLikeList(pid, uid, object_id,my_count_posts) {
                if (object_id != "")
                    api_text = '/' + object_id + '/likes?summary=true&limit=1000&locale=zh_TW';
                else
                    api_text = '/' + uid + '_' + pid + '/likes?summary=true&limit=1000&locale=zh_TW';

                var likes_people_list = "";
//                console.log('/likes?id='+uid+'_'+pid+'&limit=1000');


                FB.api(api_text, function (response3) {

                    //console.log(response3);
                    if (response3['error']) {

                        //                 console.log(pid); 
                        //                      console.log(response3); 

                    }
                    likes_people = response3['data'];
                    likes_total_count = response3['summary']['total_count'];
                    posts_like[my_count_posts] = likes_total_count;
                   // console.log(likes_total_count)
                    $("#like_"+pid).html(likes_total_count);

                    if(likes_total_count < Flike) $("#p_"+pid).html("");


                    ////// show sum likes animate
                        sum_likes = sum_likes + parseInt(likes_total_count);

                        $({
                            countNum: $('#sum_likes').text()
                        }).animate({
                            countNum: sum_likes + 1
                        }, {
                            duration: 8000,
                            easing: 'linear',
                            step: function () {
                                $('#sum_likes').text(Math.floor(this.countNum));
                            },
                            complete: function () {
                                //  alert('finished');
                            }
                        });



                    //////// --->

                   // console.log(response3)

                    for (var i = 0, len = likes_people.length; i < len; i++) {
                        var url = "http://facebook.com/" + likes_people[i]['id'];
                        var name = likes_people[i]['name'];

                        likes_people_list = likes_people_list + "<a href='" + url + "' >" + name + "</a>,&nbsp"


                    };
                    likes_people_list = likes_people_list.substr(0, likes_people_list.length - 6);
                    //            console.log(likes_people.length);
                    $("#" + pid).html(likes_people_list);
                    //  console.log($("#"+pid));

                   

                });




            }

            function dateToYMD(d) {
                return d.getFullYear() + "/" + ("00" + (d.getMonth() + 1)).slice(-2) + "/" +
                    ("00" + d.getDate()).slice(-2) + " " +
                    ("00" + d.getHours()).slice(-2) + ":" +
                    ("00" + d.getMinutes()).slice(-2) + ":" +
                    ("00" + d.getSeconds()).slice(-2)

            }
        </script>



</body>

</html>