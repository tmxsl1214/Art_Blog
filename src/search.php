<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="Author" content="" />
    <meta name="description" content="<?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 200," ... "); ?>" />
    <meta name="keywords" content="个人博客,唯品秀个人博客,个人博客网站,唯品秀，web前端博客，网页制作，博客，HTML5/CSS3，Javascript" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <?php 
			if (get_option('switch_https')['text_pic'] == 'on'){
			?>
					<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
			<?php
			}
	?>
    <title><?php the_title(); ?>&nbsp;|&nbsp;关注WEB前端开发技术&nbsp;-&nbsp;唯品秀博客</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />
    <link rel="stylesheet" type="text/css" media="screen and (max-width:767px)" href="<?php bloginfo('template_url'); ?>/css/style-ios.css">
    <link rel="stylesheet" type="text/css" media="screen and (min-width:768px) and (max-width:1199px)" href="<?php bloginfo('template_url'); ?>/css/style-ipd.css">
    <link rel="stylesheet" type="text/css" media="screen and (min-width:1200px)" href="<?php bloginfo('template_url'); ?>/style.css">
    <?php wp_head(); ?>
    <style>
        .bdcs-container .bdcs-search {
            width: 100%
        }

        .bdcs-container .bdcs-search-form-input {
            float: left;
            color: #999;
            border: solid 1px transparent;
            width: 748px;
            height: 50px;
            padding: 0px 12px;
            border-right: none;
            font-size: 16px;
            border-radius: 2px 0 0 2px;
            outline: none;
            box-sizing: border-box;
            font-family: "微软雅黑";
        }

        .bdcs-container .bdcs-search-form-submit {
            color: #fff;
            border: none;
            background: #1890ff;
            font-size: 16px;
            padding: 0 12px;
            border-radius: 0 2px 2px 0;
            float: right;
            height: 43px;
            line-height: 43px;
            font-family: "微软雅黑";
        }

        .bdcs-container .bdcs-search {
            height: 43px;
            line-height: 43px;
            font-family: "微软雅黑";
        }
    </style>
</head>

<body id="ajax_centent">
    <!--头部文件引用开始-->
    <?php get_header();?>
    <!--头部文件引用结束-->

    <!-- 正文区域start -->

    <div class="continar">

        <div class="continar-left" id="details" style="border:0; padding:0; float:none; margin:0 auto; background: transparent;">
            <script type="text/javascript">
                ( function() {
                    document.write( unescape( '%3Cdiv id="bdcs"%3E%3C/div%3E' ) );
                    var bdcs = document.createElement( 'script' );
                    bdcs.type = 'text/javascript';
                    bdcs.async = true;
                    bdcs.src = 'https://znsv.baidu.com/customer_search/api/js?sid=16243462616234269555' + '&plate_url=' + encodeURIComponent( window.location.href ) + '&t=' + Math.ceil( new Date() / 3600000 );
                    var s = document.getElementsByTagName( 'script' )[ 0 ];
                    s.parentNode.insertBefore( bdcs, s );
                } )();
            </script>

            <?php//这里是搜索功能 ?>

                <?php if ( have_posts() ) : ?>

                <?php while ( have_posts() ) : the_post(); ?>

                <div class="text">
                    <!-- <div class="mod-category__article-time">
                        <span>2018/10</span>
                        <span>23&nbsp;&nbsp;周二</span>
                    </div> -->
                    <div class="img-left">
                        <a class="read-more" href="<?php the_permalink(); ?>" target="_blank">
                            <?php
                                if ( has_post_thumbnail() )
                                    the_post_thumbnail();
                                else
                                    echo '<img src="./images/default.png" width="220" height="140" alt="" />';
                            ?>
                        </a>
                    </div>
                    <div class="text_right">
                        <h2>
                            <span>
                                <?php the_category() ?><i></i></span>
                            <a href="<?php the_permalink(); ?>" target="_blank" title="<?php the_title(); ?>">
                                <?php the_title(); ?></a>
                        </h2>
                        <div class="entry-meta">
                            <a href="<?php echo home_url(); ?>">唯品秀</a>
                            <i class="space">•</i>
                            <a href="javascript:;">
                            前端开发资讯
                            </a>
                            <i class="space">•</i>
                            <?php the_author(); ?>
                        </div>
                        <?php
                                if ( has_post_thumbnail() )
                                    the_post_thumbnail();
                                else
                                    echo '<img src="/wp-content/uploads/2019/03/jsonp.png" alt="" />';
                        ?>
                        <h3>
                            <?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 200,"..."); ?>
                            <!--文章内容-->
                        </h3>
                        <a class="read-more read_url" href="<?php the_permalink(); ?>" target="_blank">阅读全文<i class="iconfont icon-jiantou-you-cuxiantiao-fill"></i></a>
                        <p class="l">
                            <!-- <span>
                                <a href="<?php /*the_permalink(); */?> ">
                                    <i class="">&nbsp;</i><?php /*echo '发表于 '.timeago( get_gmt_from_date(get_the_time('Y-m-d G:i:s')) ); */?>
                                </a>
                            </span> -->
                            <span><i class="iconfont icon-rili1" aria-hidden="true"></i><?php the_time('Y年m月d日') ?></span>
                                <a href="<?php the_permalink(); ?> ">
                                    <i class="iconfont icon-liulan"></i><?php echo getPostViews(get_the_ID()); ?>℃
                                </a>
                            </span>
                            <span class="comm">
                                <a href="<?php the_permalink(); ?> "><i class="iconfont icon-pinglun2"></i><?php echo number_format_i18n( get_comments_number() );?>条评论
                                </a>
                            </span>
                            <span class="post-like">
                                <a href="javascript:;" data-action="ding" data-id="<?php the_ID(); ?>" class="favorite<?php if (isset($_COOKIE['bigfa_ding_' . $post->ID])) echo ' done'; ?>"><i class="iconfont icon-damuzhi"></i><span class="count"><?php if (get_post_meta($post->ID, 'bigfa_ding', true)) {echo get_post_meta($post->ID, 'bigfa_ding', true);} else {echo '0';
                                } ?></span>喜欢
                                </a>
                            </span>
                            <span class="r"></span>
                        </p>
                        <?php if( is_sticky() ) echo '<em><a href="">顶</a></em>'; ?>
                        <!-- <span class="new-icon">NEW</span> -->
                    </div>
                    <!-- <font class="s_bar"></font> -->
                    <!--竖条-->
                </div>

                <?php endwhile; ?>

                <?php else : ?>

                <h1 class="entry-title">
                    <?php _e( '没有找到您搜索的内容', 'leizi' ); ?>
                </h1>

                <?php endif; ?>

                <?php wp_pagenavi(); ?>
                <!--分页插件调用-->
        </div>
        <!-- 左侧区域结束 -->
    </div>
    <!-- 正文区域end -->

    <!-- 底部引用区域开始 -->
    <?php get_footer()?>
    <!-- 底部引用区域结束 -->

</body>
<script>
    $( "html" ).css( "overflow", "visible" );
</script>

</html>