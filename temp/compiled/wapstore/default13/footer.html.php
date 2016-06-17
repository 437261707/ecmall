
 
<nav id="menu-left">
    <div class="mmenu-search">
        <form   id="" name="" method="get" action="index.php">  
            <input type="hidden" name="app" value="store" />
            <input type="hidden" name="act" value="search" />
            <input type="hidden" name="id" value="<?php echo $this->_var['store']['store_id']; ?>" />
            <input type="text" name="keyword" autocomplete="off" placeholder="搜搜看吧" class="search_text">
            <div class="search_btn_img"><img src="<?php echo $this->res_base . "/" . 'images/search_btn.png'; ?>" style="width:30px;"></div>
            <input type="submit" value="" class="search_btn">
        </form>
    </div>
    <ul>
        <?php if ($this->_var['store']['radio_new'] == '1'): ?>
        <li>
            <a href="index.php?app=store&act=search&id=<?php echo $this->_var['store']['store_id']; ?>&order=add_time"><span>最新商品</span></a>
        </li>
        <?php endif; ?>
        <?php if ($this->_var['store']['radio_recommend'] == '1'): ?>
        <li>
            <a href="index.php?app=store&act=search&id=<?php echo $this->_var['store']['store_id']; ?>&recommended=1"><span>推荐商品</span></a>
        </li>
        <?php endif; ?>
        <?php if ($this->_var['store']['radio_hot'] == '1'): ?>   
        <li>
            <a href="index.php?app=store&act=search&id=<?php echo $this->_var['store']['store_id']; ?>&order=views"><span>热门商品</span></a>
        </li>
        <?php endif; ?>
        <?php $_from = $this->_var['store']['store_gcates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'gcategory');if (count($_from)):
    foreach ($_from AS $this->_var['gcategory']):
?>
        <li>
            <?php if ($this->_var['gcategory']['children']): ?>
            <a href="#"><span><?php echo htmlspecialchars($this->_var['gcategory']['value']); ?></span></a> 
            <ul>
                <?php $_from = $this->_var['gcategory']['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child_gcategory');if (count($_from)):
    foreach ($_from AS $this->_var['child_gcategory']):
?>
                <li><a href="<?php echo url('app=store&id=' . $this->_var['store']['store_id']. '&act=search&cate_id=' . $this->_var['child_gcategory']['id']. ''); ?>"><?php echo htmlspecialchars($this->_var['child_gcategory']['value']); ?></a></li>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
            <?php else: ?>
            <a href="<?php echo url('app=store&id=' . $this->_var['store']['store_id']. '&act=search&cate_id=' . $this->_var['gcategory']['id']. ''); ?>"><span><?php echo htmlspecialchars($this->_var['gcategory']['value']); ?></span></a>
            <?php endif; ?>
        </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>


        <li>
            <a href="javascript:;" class="code"><img src="<?php echo $this->res_base . "/" . 'images/code.png'; ?>"/>店铺介绍</a>
            <ul>
                <li><a href="javascript:;" >店铺ID：<?php echo htmlspecialchars($this->_var['store']['store_name']); ?></a></li>
                <li><a href="javascript:;" >信用度：<?php if ($this->_var['store']['credit_value'] >= 0): ?><img src="<?php echo $this->_var['store']['credit_image']; ?>" alt="" /><?php endif; ?></a></li>
                <li><a href="javascript:;" >商品数量：<?php echo $this->_var['store']['goods_count']; ?></a></li>
            </ul>
        </li>
        <li><a href="javascript:collect_store(<?php echo $this->_var['store']['store_id']; ?>);" class="fav"><img src="<?php echo $this->res_base . "/" . 'images/favorite.png'; ?>"/>收藏本店</a></li>
    </ul>
</nav>

<div class="fav_msg">
    <img src="<?php echo $this->res_base . "/" . 'images/favorite.png'; ?>" />
    <span id="collect">收藏成功！</span>
</div>



<div class="footer">
    <p>
        <a href="<?php echo url('app=default'); ?>">商城首页</a>|
        <a href="<?php echo url('app=store&id=' . $this->_var['store']['store_id']. ''); ?>">商铺首页</a>|
        <a href="<?php echo url('app=member'); ?>">会员中心</a>
    </p>
    <a href="#" class="top">top</a>
    <p><?php if ($this->_var['store']['functions']['copyright']): ?><?php echo htmlspecialchars($this->_var['store']['copyright']); ?><?php else: ?> Copyright &copy;2014 <?php echo $this->_var['site_title']; ?><?php endif; ?></p>
</div> 
<script>
//返回顶部	
    $(function() {
        $('.top').click(function() {
            $('html,body').animate({scrollTop: '0px'}, 800);
        });
    })

</script>

<?php if ($this->_var['kmenus']['status'] == 0 || $this->_var['kmenus']['status'] == ''): ?>
<link type="text/css" rel="stylesheet" href="<?php echo $this->res_base . "/" . 'css/kmenus.css'; ?>">
<div class="flo_btn_<?php if ($this->_var['kmenus']['stypeinfo'] == ''): ?>1<?php else: ?><?php echo $this->_var['kmenus']['stypeinfo']; ?><?php endif; ?>">
    <ul>
        <?php $_from = $this->_var['kmenusinfo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'info');if (count($_from)):
    foreach ($_from AS $this->_var['info']):
?>
        <li>
            <a style="background-color:#<?php echo $this->_var['info']['color']; ?>;" href="<?php if ($this->_var['info']['title'] == '导航'): ?>http://map.baidu.com/?newmap=1&ie=utf-8&s=s%26wd%3D<?php echo $this->_var['info']['loadurl']; ?><?php else: ?><?php echo $this->_var['info']['loadurl']; ?><?php endif; ?>"><span style="background:url('<?php echo $this->_var['info']['imgurl']; ?>') scroll no-repeat center center transparent;background-size:60%; bottom:0; left:0;"></span></a>
        </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
</div>
<?php endif; ?>