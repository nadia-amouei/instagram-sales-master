<?php
namespace Instagram_Sales\Includes\Admin;

use Instagram_Sales\Includes\Interfaces\Action_Hook_Interface;

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
class Admin_Order_Meta_Box  implements Action_Hook_Interface{
    public function __construct()
    {
        $this->register_add_action();
    }

    public function register_add_action()
    {
        add_action( 'add_meta_boxes', array( $this , 'admin_metaboxes' ));
        add_action( 'save_post', array( $this , 'save_metaboxes' ), 10, 2 );
    }

    public function admin_metaboxes()
    {
        add_meta_box(
            'order_payment_box',
            __( 'لینک پرداخت سفارش', INSTAGRAM_SALES ),
            array( $this , 'order_payment_method' ),
            'shop_order',
            'side', // side , normal , advanced
            'high' // high , core , default , low
        );
    }

    public function order_payment_method($post)
    {
        $order_created_link = get_post_meta( $post->ID, 'order_created_link', true );
        ?>
        <p>
            <label for="order_created_link">
                <?php _e( "لینک پرداخت", INSTAGRAM_SALES ); ?>
            </label>
            <br/>
            <div id="copied"><?php _e('در کلیپ بورد کپی شد',INSTAGRAM_SALES);?></div>
            <input class="widefat" type="url"
                   name="order_created_link"
                   id="order_created_link"
                   readonly
                   <?php echo (empty($order_created_link))? "disabled":""; ?>
                   value="<?php echo esc_attr( $order_created_link); ?>"
            />
        </p>
        <?php
    }

    public function save_metaboxes($post_id, $post)
    {
        $order_key = get_post_meta( $post_id, '_order_key', true );
        if (!empty($order_key)){
            $post_link = get_site_url() . '/checkout/order-pay/' . $post_id . '/?pay_for_order=true&key=' . $order_key;
            update_post_meta( $post_id, 'order_created_link', $post_link );
        }
    }
}