<?php namespace Kamaln7\Toastr;

class Toastr {

    /**
     * Added notifications
     *
     * @var array
     */
    protected $notifications = array();

    /**
     * Render the notifications' script tag
     *
     * @param bool $flashed Whether to get the 
     *
     * @return string
     */
    public function render() {
        $output = '<script type="text/javascript">';
        foreach($this->notifications as $notification) {
            $output .= 'toastr.' . $notification['type'] . "('" . str_replace("'", "\\'", htmlentities($notification['message'])) . "'" . (isset($notification['title']) ? ", '" . str_replace("'", "\\'", htmlentities($notification['title'])) . "'" : null) . ');';
        }
        $output .= '</script>';

        return $output;
    }

    /**
     * Add a notification
     *
     * @param string $type Could be error, info, success, or warning.
     * @param string $message The notification's message
     * @param string $title The notification's title
     *
     * @return bool Returns whether the notification was successfully added or 
     * not.
     */
    public function add($type, $message, $title = null) {
        $allowedTypes = array('error', 'info', 'success', 'warning');
        if(!in_array($type, $allowedTypes)) return false;

        $this->notifications[] = array(
            'type' => $type,
            'title' => $title,
            'message' => $message
        );
    }

    /**
     * Shortcut for adding an info notification
     *
     * @param string $message The notification's message
     * @param string $title The notification's title
     */
    public function info($message, $title = null) {
        $this->add('info', $message, $title);
    }

    /**
     * Shortcut for adding an error notification
     *
     * @param string $message The notification's message
     * @param string $title The notification's title
     */
    public function error($message, $title = null) {
        $this->add('error', $message, $title);
    }

    /**
     * Shortcut for adding a warning notification
     *
     * @param string $message The notification's message
     * @param string $title The notification's title
     */
    public function warning($message, $title = null) {
        $this->add('warning', $message, $title);
    }

    /**
     * Shortcut for adding a success notification
     *
     * @param string $message The notification's message
     * @param string $title The notification's title
     */
    public function success($message, $title = null) {
        $this->add('success', $message, $title);
    }

    /**
     * Clear all notifications
     */
    public function clear() {
        $this->notifications = array();
    }

}
