<?php
namespace Instagram_Sales\Includes\Functions;

class Utility {

    /**
     * Method load_template in Utility Class
     *
     * This method calls to render Admin or Front HTML templates from templates/admin
     * or templates/front directories. You can use from dot (.) to separate nested
     * directories and this method will include your desire file for your plugin.
     *
     * @access  public
     * @static
     *
     * @param string $template Path of template file which  is separated by dot.
     * @param array  $params   Related parameters that must be extracted to use inside your template.
     * @param string $type     To detect admin or front directory to use related constant path.
     */
    public static function load_template ( $template, $params = array(), $type = 'admin' ) {
        $template       = str_replace( '.', '/', $template );
        $base_path      = 'admin' === $type ? INSTAGRAM_SALES_TPL_ADMIN : INSTAGRAM_SALES_TPL_FRONT;
        $view_file_path = $base_path . $template . '.php';
        if ( file_exists( $view_file_path ) && is_readable( $view_file_path ) ) {
            ! empty( $params ) ? extract( $params ) : null;
            include $view_file_path;
        } else {
            echo '<h1>' . __('فایل مورد نظر یافت نشد!',INSTAGRAM_SALES) . '</h1>';
            exit;
        }

    }

    /**
     * Method is_admin in Utility Class
     *
     * You can check with this method that user is admin and logged in.
     *
     * @access  public
     * @static
     */
    public static function is_admin() {
        return is_user_logged_in() && current_user_can( 'manage_options' );
    }

    /**
     * Method convert_to_persian_number in Utility Class
     *
     * This method converts English number to Persian number in a string
     *
     * @access  public
     * @static
     * @see     http://php.net/manual/en/function.number-format.php
     *
     * @param string $number The number which is passed to method.
     *
     * @return string A formatted version of number.
     */
    public static function convert_to_persian_number( $number ) {
        $persian_numbers = [ '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹', '۰' ];
        $english_numbers = [ '1', '2', '3', '4', '5', '6', '7', '8', '9', '0' ];

        return str_replace( $english_numbers, $persian_numbers, $number );
    }
}