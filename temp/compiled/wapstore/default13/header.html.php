
<script type="text/javascript">
    $(function() {
        $('nav#menu-left').mmenu({
            searchfield: true,
            counters: true
        });
    });
</script> 
  <div id="header">
        <a href="#menu-left" class="ico_menu"><img src="<?php echo $this->res_base . "/" . 'images/nav_2.png'; ?>"></a>
        <a href="<?php echo url('app=store&id=' . $this->_var['store']['store_id']. ''); ?>" class="logo"><img src="<?php echo $this->_var['store']['store_logo']; ?>"></a>
        <a href="<?php echo url('app=cart'); ?>" class="car"><img src="<?php echo $this->res_base . "/" . 'images/nav_4.png'; ?>"></a>
        <a href="<?php if ($this->_var['visitor']['user_id']): ?><?php echo url('app=buyer_order'); ?><?php else: ?><?php echo url('app=member&act=login&ret_url=' . $this->_var['ret_url']. ''); ?><?php endif; ?>" class="user"><img src="<?php echo $this->res_base . "/" . 'images/nav_3.png'; ?>"></a>
    </div>