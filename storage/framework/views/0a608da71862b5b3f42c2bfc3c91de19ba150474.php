<?php $__env->startSection('title'); ?>
    <?php echo e("Nguyễn Mạnh"); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-xs-12 col-sm-8 col-md-8">
        <?php if(isset($posts)): ?>
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <article class="row article">
                    <div class="col-xs-12">
                        <div class="block-postMeta postMeta-previewHeader">
                            <div class="u-floatLeft">
                                <div class="postMetaInline-avatar">
                                    <a class="link avatar u-color--link" href="#">
                                        <img class="img-responsive avatar-image u-xs-size32x32 u-sm-size36x36" src="https://scontent.fhan2-3.fna.fbcdn.net/v/t1.0-9/23032754_1319030634909161_8414838974445845780_n.jpg?oh=ff67e0299b2a3e30c556bac49c904748&oe=5A69004F">
                                    </a>
                                </div>
                                <div class="postMetaInline-feedSummary">
                                    <a class="link link--darken link--accent u-accentColor--textNormal u-accentColor--textDarken u-color--link user-link" href="<?php echo e(route('blog.author',[$post->user_id ])); ?>">
                                        <?php echo e($post->author); ?>

                                    </a>
                                    <span class="POSTMETAINLINE postMetaInline--supplemental">
                                        <?php echo e($post->created_at->diffForHumans()); ?>

                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="embed-responsive embed-responsive-16by9">
                            <img src="<?php echo e($post->thumbnail); ?>" style="min-width: 100%; max-width: 100%;" alt="<?php echo e($post->title); ?>">
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <a href="<?php echo e(route('blog.post',[$post->id,$post->slug])); ?>">
                            <h3 class="title"><?php echo e($post->title); ?></h3>
                        </a>
                        <span>
                            <?php echo e(\Illuminate\Support\Str::words($post->description , 30, ' ...')); ?>

                            <a class="see-more" href="<?php echo e(route('blog.post',[$post->id,$post->slug])); ?>"> Xem thêm</a>
                        </span>
                    </div>
                </article>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="text-center">
                <?php echo e($posts->links()); ?>

            </div>
        <?php endif; ?>
    </div>
    <div class="col-xs-12 col-sm-4 col-md-4">
        
        <div class="panel panel-custome">
            <div class="panel-body panel-body-custome panel-body-facebook">
                <div class="fb-page" data-href="https://www.facebook.com/tailieucntt/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/tailieucntt/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/tailieucntt/">Tài liệu chuyên nghành Công Nghệ Thông Tin</a></blockquote></div>
            </div>
        </div>
        
        
         <?php if(isset($categories)): ?>
            <div class="panel panel-custome">
                <div class="panel-heading bg-success">
                    <h3 class="panel-title text-center" style="line-height: 30px; font-weight: bold;">
                        DANH MỤC
                    </h3>
                </div>
                <div class="panel-body panel-body-custome panel-body-facebook">
                    <ul class="list list--withIcon list--withTitleSubtitle">
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="list-item">
                                <button class="button button--circle u-disablePointerEvents">
                                    <span class="list-index">
                                        <img src="https://giaphiep.com/images/laravel.png">
                                    </span>
                                </button>
                                <div class="list-itemInfo">
                                    <h4 class="list-itemTitle">
                                        <a href="<?php echo e(url('blog/category/'.$category->id.'/'.$category->slug)); ?>" class="link  link-custome link--primary u-accentColor--textNormal"> 
                                            <?php echo e($category->name); ?>

                                        </a>
                                    </h4>
                                </div>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
        <?php endif; ?>
        

        
        <?php if(isset($tags)): ?> 
            <div class="panel panel-custome">
                <div class="panel-heading bg-info">
                    <h3 class="panel-title text-center" style="line-height: 30px; font-weight: bold;">
                        Tags
                    </h3>
                </div>
                <div class="panel-body panel-body-custome panel-body-facebook">
                    <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(url('blog/tag/'.$tag->id.'/'.$tag->slug)); ?>" class="tag"><?php echo e($tag->name); ?></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        <?php endif; ?>
         
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('blog.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>