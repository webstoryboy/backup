<?php
    include_once $_SERVER['DOCUMENT_ROOT'].'/myservice/common/session.php';
    include_once $_SERVER['DOCUMENT_ROOT'].'/myservice/database/contents.php';
 $myContents = $contents->contentsLoad('me');
    // echo "<pre>";
    // var_dump($myContents);
    // echo "</pre>";
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width" />
<meta charset="utf-8" />
<title>My First Web Service</title>
<link rel="stylesheet" href="./css/cssReset.css" />
<link rel="stylesheet" href="./css/header.css" />
<link rel="stylesheet" href="./css/footer.css" />
<script type="text/javascript" src="./js/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="./js/me.js"></script>
<link rel="stylesheet" href="./css/me.css" />
<style>
/*./images/me/happyCat.png는 백엔드 프로젝트에서 프로그래밍으로 처리할 예정 */
#myWallPhoto{background:url('<?=$_SESSION['myMemberSes']['coverPhoto']?>');background-size:cover; background-repeat:no-repeat;background-position:50% 50%;border-bottom:1px solid #ccc}
</style>
</head>
<body>
<?php
    include_once $_SERVER['DOCUMENT_ROOT'].'/myservice/include/header.php';
?>
    <div id="container">
        <div id="center">
            <div id="myWallPhoto"></div>
            <div id="myProfilePhoto">
                <img src="<?=$_SESSION['myMemberSes']['profilePhoto']?>" />
            </div>
            <p id="name"><?=$_SESSION['myMemberSes']['userName']?></p>
            <div class="myButtonBox">
                <a href="./log/memberLogs/myLog_1111.txt" download>나의 로그 다운로드</a>
            </div>
            <div class="myButtonBox">
                <form name="photo" method="post" action="/myservice/database/myMember.php" enctype="multipart/form-data">
                    <div class="photoBox">
                        <input type="file" name="myProfilePhoto" class="photoSelectorBtn"/>
                    </div>

                    <input type="hidden" name="mode" value="photo" />

                    <div class="photoBox">
                        <input type="submit" id="myProfilePhotoUploadBtn" value="프로필 사진 변경" />
                    </div>
                </form>
            </div>
            <div class="myButtonBox">
                <form name="photo" method="post" action="/myservice/database/myMember.php" enctype="multipart/form-data">
                    <div class="photoBox">
                        <input type="file" name="myCoverPhoto" class="photoSelectorBtn" />
                    </div>
                    <input type="hidden" name="mode" value="photo" />
                    <div class="photoBox">
                        <input type="submit" id="myCoverPhotoUploadBtn" value="커버 사진 변경" />
                    </div>
                </form>
            </div>
            <div id="myContent">
                <!-- timeline -->
                <div id="writing">
                    <div class="me">
                        <img src="./images/me/happyCat.png" />
                        <p>김태영</p>
                    </div>
                    <textarea maxlength="500" id="meContent"></textarea>
                    <div id="inputBox">
                        <input type="button" id="mePostBtn" value="게시" />
                    </div>
                </div>
            <?php
                foreach($myContents as $mc){
            ?>
                <div class="reading">
                    <div  class="writerArea">
                        <img src="<?=$mc['profilePhoto']?>" />
                        <div class="writingInfo">
                            <p><?=$mc['userName']?></p>
                            <div class="writingDate">
            <?=date('Y년 m월 d일 H시 i분', $mc['regTime'])?>
                            </div>
                        </div>
                    </div>
                    <span class="content"><?=nl2br(htmlspecialchars($mc['content']))?></span>

                    <div class="likeArea">
                        <div class="likeNum likes<?=$mc['contentsID']?>" style="background:#fff">공감 수: 250</div>
                        <div class="likeBtn" id="likes<?=$mc['contentsID']?>">공감하기</div>
                        <div class="contentsID">콘텐츠 번호: <?=$mc['contentsID']?> </div>
                    </div>
                    <div class="myCommentArea myCommentArea861225">
                        <div class="commentBox">
                            <img src="./images/me/happyCat.png" />
                            <p class="commentRegTime">2013년 12월 25일</p>
                            <p class="commentPoster">김태영</p>
                            <p class="writtenComment">정말 반갑습니다. </p>
                        </div>
                    </div>
                    <div class="inputBox">
                        <img src="<?=$_SESSION['myMemberSes']['profilePhoto']?>" />
                        <input type="text" class="inputComment comments861225" placeholder="코멘트 입력"/>
                        <div class="regCommentBox">
                            <input type="button" class="regCommentBtn" id="comments861225" value="게시" />
                        </div>
                    </div>
                </div>
            <?php
                }
            ?>
            <!-- end of timeline -->
            </div>
            <input type="hidden" name="page" id="page" value="<?=((count($myContents) >= 20) ? 1: 0);?>" />
        </div>
        <div id="noContents">
            더 이상 콘텐츠가 없습니다.
        </div>
    </div>
<?php
    include_once $_SERVER['DOCUMENT_ROOT'].'/myservice/include/footer.php';
?>
</body>
</html>