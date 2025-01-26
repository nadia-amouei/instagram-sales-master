
<?php
if (isset($_POST['save_option'])){
    if (isset($_POST['enable_create_user_order'])){
        $enable = $_POST['enable_create_user_order'];
        if ($enable == 'on'){
            update_option( 'enable_create_user_order', true);
            $selected_user = $_POST['selected_user'];
            update_option( 'selected_user_ID', $selected_user);
        }else{
            update_option( 'enable_create_user_order', false);
            delete_option( 'selected_user_ID');
        }
    }else{
        update_option( 'enable_create_user_order', false);
        delete_option( 'selected_user_ID');
    }
}
$enable_user_order = get_option( 'enable_create_user_order' , false);
$user_order = get_option( 'selected_user_ID' , 0);
?>

<div class="wrap">
    <hr class="wp-header-end">
    <h1 class="wp-heading-inline "><?php _e('لینک فروش اینستاگرام',INSTAGRAM_SALES);?></h1>
</div>

<form action="" method="post">
    <div class="section">
        <input type="checkbox" name="enable_create_user_order"
        <?php echo ($enable_user_order)? "checked" : ""; ?>
        >
        <label for="enable_create_user_order"><?php _e('فعال سازی ایجاد سفارش برای کاربر',INSTAGRAM_SALES)?></label>
    </div>
    <div class="section">
        <label for="user" > <?php _e('انتخاب کاربر',INSTAGRAM_SALES); ?> </label>
        <select class="products-names-selectbox" name="selected_user">
            <option value="0"  <?php echo ($user_order == 0)?  "selected":"" ?> >
                <?php _e('کاربر مهمان',INSTAGRAM_SALES)?>
            </option>
            <?php foreach ($users as $user){ ?>
                <option value="<?php echo $user->ID?>"
                <?php
                echo ($user_order == $user->ID)? "selected":"";
                ?>
                >
                    <?php echo $user->user_login?>
                </option>
            <?php } ?>
        </select>
    </div>
    <div class="section">
        <button name="save_option" class = "button button-primary"><?php _e('ذخیره',INSTAGRAM_SALES)?></button>
    </div>
</form>
<div class="redirect-btn">
    <?php
    if ($enable_user_order){
        $shop_page_url = get_permalink( woocommerce_get_page_id( 'shop' ) );
        ?>
        <a href="<?php echo $shop_page_url;?>" target="_blank" class="button button-secondary">
            <?php _e('شروع ساخت سفارش',INSTAGRAM_SALES);?>
        </a>
        <?php
    }
    ?>
</div>