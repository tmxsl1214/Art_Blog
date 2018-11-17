<?php
if ( post_password_required() )
    return;
?>
<div id="comments" class="responsesWrapper">
    <!-- <meta content="UserComments:<?php echo number_format_i18n( get_comments_number() );?>" itemprop="interactionCount"> -->
    <h3 class="comments-title">共有 <span class="commentCount"><?php echo number_format_i18n( get_comments_number() );?></span> 条评论</h3>
    <nav class="navigation comment-navigation u-textAlignCenter" data-fuck="<?php the_ID();?>">
    <?php paginate_comments_links(array('prev_next'=>true)); ?>
    </nav>
    <?php if(comments_open()) : ?>
        <div id="respond" class="respond" role="form">
            <h2 id="reply-title" class="comments-title">
                <?php comment_form_title( '', '回复给 %s' ); ?> 
                <small><?php cancel_comment_reply_link(); ?></small>
            </h2>
            <?php if ( get_option('comment_registration') && !$user_ID ) : ?>
                <p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
            <?php else : ?>
                <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" class="commentform" id="commentform">
                    <?php if ( $user_ID ) : ?>
                        <p class="warning-text" style="margin-bottom:10px">以<a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>身份登录&nbsp;|&nbsp;<a class="link-logout" href="<?php echo wp_logout_url(get_permalink()); ?>">注销 &raquo;</a></p>
                        <textarea class="form-control" rows="3" id="comment" onkeydown="if(event.ctrlKey&&event.keyCode==13){document.getElementById('submit').click();return false};" placeholder="<?php comment_form_title( '请保持正确的价值观，否则留言会被删除！', '给他回复'); ?>"></textarea>
                    <?php else : ?>
                        <textarea class="form-control" rows="3" id="comment" onkeydown="if(event.ctrlKey&&event.keyCode==13){document.getElementById('submit').click();return false};" placeholder="<?php comment_form_title( '请保持正确的价值观，否则留言会被删除！', '给他回复' ); ?>"></textarea>
                        <div class="commentform-info">
                            <label id="author_name" for="author">
                                <input class="form-control" id="author" type="text" tabindex="2" value="<?php echo $comment_author; ?>" name="author" placeholder="昵称[必填]" required>
                            </label>
                            <label id="author_email" for="email">
                                <input class="form-control" id="email" type="text" tabindex="3" value="<?php echo $comment_author_email; ?>" name="email" placeholder="邮箱[必填]" required>
                            </label>
                            <label id="author_website" for="url">
                                <input class="form-control" id="url" type="text" tabindex="4" value="<?php echo $comment_author_url; ?>" name="url" placeholder="网址(可不填)">
                            </label>
                        </div>
                    <?php endif; ?>
                    <div class="btn-group commentBtn" role="group">
                        <input name="submit" type="submit" id="submit" class="btn btn-sm btn-danger btn-block" tabindex="5" value="发表评论" /></div>
                    <?php comment_id_fields(); ?>
                </form>
            <?php endif; ?>
        </div>
    <?php endif; ?>
    <ol class="commentlist">
        <?php
        wp_list_comments( array(
            'style'       => 'ol',
            'short_ping'  => true,
            'type'        =>'comment',
            'callback'    =>'simple_comment',
            'avatar_size' => 50,
        ) );
        ?>
    </ol>
</div>