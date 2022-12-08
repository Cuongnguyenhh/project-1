
<?php
    $conn = condb();
    if(isset($_POST['post_cmt'])){
        $content = $_POST['content'];
        try {
            
            $sql = "INSERT INTO comment (commet, prd_id , user_id)
            VALUES ('$content', '$prd_id', '$id_user')";
            // use exec() because no results are returned
            $conn->exec($sql);
            header("Refresh:0");
          } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
          }
    }
?>
<div id="Reviews" class="tab-pane">
    <div class="tab-product-review">
            <div class="spr-container">
                <div class="spr-header">
                        <h2 class="spr-header-title">
                            Phản hồi khách hàng
                        </h2>
                        <span class="spr-rating">
                            <i class="fa-solid fa-star" id="star1"></i>
                            <i class="fa-solid fa-star" id="star2"></i>
                            <i class="fa-solid fa-star" id="star3"></i>
                            <i class="fa-solid fa-star" id="star4"></i>
                            <i class="fa-solid fa-star" id="star5"></i>
                        </span>
                        <span class="spr-review-count">
                            Dựa trên 4 nhận xét
                        </span>
                        <span class="spr-action">
                            <a id="toggle">Viết nhận xét</a>
                        </span>
                </div>
                <div class="spr-content">
                        <div id="spr-form" class="spr-form">
                        <form action="" method="POST">
                                    <input type="hidden" name="">
                                    <input type="hidden" name="">
                                    <h3 class="spr-form-title">Write a review</h3>
                                
                                    <fieldset class="spr-form-review">
                                        <div class="spr-form-review-rating">
                                                <label class="spr-form-label" for="">Rating</label>
                                                <div class="spr-form-input spr-starrating ">
                                                    <a href="#!"><i class="fa-solid fa-star"></i></a>
                                                    <a href="#!"><i class="fa-solid fa-star"></i></a>
                                                    <a href="#!"><i class="fa-solid fa-star"></i></a>
                                                    <a href="#!"><i class="fa-solid fa-star"></i></a>
                                                    <a href="#!"><i class="fa-solid fa-star"></i></a>
                                                </div>
                                        </div>
                                            
                                            <div class="spr-form-review-body">
                                                <label class="spr-form-label" for="">Body of
                                                    Review
                                                    <span>
                                                            <span>(1500)</span>
                                                            <span></span>
                                                    </span>
                                                </label>
                                                <div class="spr-form-input">
                                                    <textarea class="spr-form-input spr-form-input-textarea " name="content" id="" rows="10" placeholder="Write your comments here"></textarea>
                                                </div>
                                                <button type="submit" class="func-admin__ban" name="post_cmt" >Post Comment</button>
                                            
                                            
                                    </fieldset>
                            </form>
                                    <fieldset class="spr-form-actions"></fieldset>
                            

                        </div>
                        <div class="spr-reviews">
                            <div class="spr-review">
                                    <div class="spr-review-header">
                                        <div class="spr-review__rating">
                                                <span class="spr-review-header-star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </span>
                                        </div>
                                        
                                        
                                    </div>
                                    <?php
                                   
                                    
                                    foreach($comment as $cmt){
                                        $user = get_username($cmt['user_id']);
                                    foreach($user as $user);
                                        echo '
                                       

                                        <span class="spr-review-header-byline">
                                        <strong>'.$user['display_name'].'</strong>
                                        on
                                        <strong>'.$cmt['create'].'</strong>
                                </span>
                            <div class="spr-review-content">
                                <p class="spr-review-content-body">
                                        '.$cmt['commet'].'
                                </p>
                                <hr>
                            </div>
                                        ';
                                    }
                                    ?>
                                   
                                    <div class="spr-review-footer">
                                        <a href="#" class="spr-review-reportreview">Report as
                                                Inappropriate</a>
                                    </div>
                            </div>
                        </div>
                </div>
            </div>
    </div>
</div>