<?php get_header() ?>
<div id="main-content-wp" class="add-cat-page">
    <div class="wrap clearfix">
        <?php require 'inc/sidebar.php'; ?>
            <div id="content" class="fl-right">
                <div class="section" id="title-page">
                    <div class="clearfix">
                        <h3 id="index" class="fl-left">Thêm mới danh mục bài viết</h3>
                    </div>
                </div>
                <div class="section" id="detail-page">
                    <div class="section-detail">
                        <form method="POST" action="?mod=lib&act=add_category">
                            <label for="title">Tên danh mục</label>
                            <input type="text" name="title" id="title">
                            <label for="title">Thứ Tự</label>
                            <input type="text" name="order" id="title">
                                   
                        
                            <button type="submit" name="btn-submit" id="btn-submit">Thêm mới</button>
                        </form>
                    </div>
                </div>
            </div>
    </div>
</div>