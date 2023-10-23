$(document).ready(function(){
    //게시물 입력 공간의 게시글 입력 폼
    var meContent = $('#meContent');
    //게시물 입력 공간의 게시 버튼
    var mePostBtn = $('#mePostBtn');
    //게시 버튼 클릭 이벤트
    mePostBtn.click(function(){
        if(meContent.val() == ''){
            alert('내용을 입력하세요.');
            meContent.focus();
            return false;
        }
        //백엔드 프로젝트에서 게시물 등록 기능 구현
        $.ajax({
            type:'post', //post 전송 방식으로 전달
            dataType:'json', //json 언어로 전달
            url:'./database/contents.php',
            data:{mode:'save', meContent:$('#meContent').val()}, //전달할 데이터
            async:false, // 값을 전달 받은 후 실행
            success:function(data){
                console.log(data.result);
                if(data.result == true){
                    //새로 고침
                    location.reload();
                }else{
                    alert('게시글 등록이 실패하였습니다.');
                }
            },
            error:function (request, status, error) {
                console.log('request '+request);
                console.log('status '+status);
                console.log('error '+error);
            }
        });
    });

    //로그아웃 페이지 이동 기능 구현

    // 로그아웃 버튼
    var logoutBtn = $('#logoutBtn');

    //로그아웃 버튼 클릭 이벤트
    logoutBtn.click(function(){
        location.href = '/myservice/logout.php';
    });

    //스크롤이 80% 도달 시 게시물 더 불러오기 기능 구현.
    //스크롤이 80% 도달 시 게시물 더 불러오기 기능 구현.
    //스크롤 이벤트
    $(window).scroll(function(){
        console.log('in scroll');

        //페이지가 0이면 스크롤 이벤트 실행하지 않음
        if($('#page').val() == 0){
            return false;
        }

        //현재 스크롤 값
        var nowScrollVar = $(document).scrollTop();

        //백분율 값 구하기
        var nowPercent = nowScrollVar / $(document).height() * 100;

        //스크롤이 화면의 80%가 넘어가면 게시물 더 불러오기 기능 실행
        if(nowPercent >= 80){
            $.ajax({
                type : 'post',
                dataType : 'json',
                url : './database/contents.php',
                data : {mode : 'loadMore', contentsLoadType : 'me', page : $('#page').val()},
                async : false,
                success: function (data){
                    console.log(data);
                    //게시물 더 불러오기 기능의 컨트롤러와 모델을 구현 후 코드작성

                    //데이터 불러오기 성공 시
                    if(data.result == true){
                        //게시물을 변수에 대입
                        var content = data.content;
                        console.log('content is ' + JSON.stringify(content));

                        //가져온 게시물의 수가 20개 미만이면 page의 값을 0으로 변경
                        if(content.length < 20){
                            //페이지 값 0
                            $('#page').val(0);
                            //게시물이 없음을 알리는 문구 노출
                            $('#noContents').show();
                        }
                        //게시물이 20개 이상이면 현재 페이지 갱신
                        else{
                            pageUpdate = parseInt($('#page').val()) + 1;
                            $('#page').val(pageUpdate);
                        }

                        //게시물 데이터 id가 center인 엘리먼트에 넣기 위해
                        //게시물의 HTML 태그를 만듦

                        //생성할 HTML 코드를 대입할 변수 선언
                        var inputHtml = '';

                        //for( in )은 php의 foreach와 같은 기능
                        for(var contents in content){
                            inputHtml += "<div class='reading'>";
                            inputHtml += "<div class='writerArea'>";
                            inputHtml += "<img src='"+content[contents]['profilePhoto']+"' />";
                            inputHtml += "<div class='writingInfo'>";
                            inputHtml += "<p>"+content[contents]['userName']+"</p>";

                            //타임스탬프 시간을 사람이 이해할 수 있는 시간으로 변경
                            var d = new Date(content[contents]['regTime'] * 1000);
                            //월은 0부터 시작하므로 +1을 더해야 함, 11월은 10으로 보여주므로 +1
                            var month = d.getMonth()+1;
                            //시간 만들기
                            var regTime = d.getFullYear()+'년 '+month +'월 '+d.getDate()+'일 '+d.getHours()+'시 '+ d.getMinutes()+'분';
                            //태그 입력 시를 대비해서 특수기호를 HTML 코드로 변경
                            bbs = content[contents]['content'];
                            bbs = bbs.replace(/</g,'&lt;');
                            bbs = bbs.replace(/>/g,'&gt;');

                            inputHtml += "<div class='writingDate'>"+regTime+"</div>";
                            inputHtml += "</div></div>";
                            inputHtml += "<span class='content'>"+ bbs +"</span>";
                            inputHtml += "<div class='likeArea'>";
                            inputHtml += "<div class='likeNum likes"+861225+"' style='background:#fff'> 공감 수: "+250+"</div>";
                            inputHtml += "<div class='likeBtn' id='likes"+861225+"'>공감"+'하기'+"</div>";
                            inputHtml += "<div class='contentsID'>콘텐츠 번호: "+861225+"</div>";
                            inputHtml += "</div>";

                            //댓글 영역 나중에 프로그래밍 필요
                            inputHtml += "<div class='myCommentArea myCommentArea"+ 861225 +"'>";

                            inputHtml += "<div class='commentBox'>";
                            inputHtml += "<img src='./images/me/happyCat.png' />";
                            inputHtml += "<p class='commentRegTime'>2030년 12월 25일</p>";
                            inputHtml += "<p class='commentPoster'>김태영</p>";
                            inputHtml += "<p class='writtenComment'>정말 반갑습니다. </p>";
                            inputHtml += "</div>";
                            //댓글 영역 끝

                            inputHtml += "</div>";

                            inputHtml += "<div class='inputBox'>";
                            inputHtml += "<img src='"+content[contents]['profilePhoto']+"' />";
                            inputHtml += "<input type='text' class='inputComment comments"+content[contents]['contentsID']+"' placeholder='코멘트 입력' />";
                            inputHtml += "<div class='regCommentBox'>";
                            inputHtml += "<input type='button' class='regCommentBtn' id='comments"+content[contents]['contentsID']+"' value='게시' />";
                            inputHtml += "</div></div></div></div>";
                        }

                        //위에서 완성된 HTML 코드를 id가 center인 엘리먼트에 넣음
                        $('#center').append(inputHtml);
                    }
                },
                error: function (request, status, error){
                    console.log('request' + request);
                    console.log('status' + status);
                    console.log('error' + error);
                }

            });
        }

    });

});