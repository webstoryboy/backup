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
        location.href = '/phptest/logout.php';
    });

    //스크롤이 80% 도달 시 게시물 더 불러오기 기능 구현.

});