<?php
namespace Craft;

class QboxShortcodesPlugin extends BasePlugin
{
  public function getName()
  {
    return Craft::t('Qbox Shortcodes');
  }

  public function getVersion()
  {
    return '0.1';
  }

  public function getDeveloper()
  {
    return 'Brian Sage';
  }

  public function getDeveloperUrl()
  {
    return 'https://qbox.io';
  }

  /**
   * Use this method in any plugin to register shortcodes.
   *
   * You may register a single callback:
   *
   *    return array($this, 'myTag');
   *
   * Or you may register an array of callbacks:
   *
   *     return array(
   *         array($this, 'myTag'),
   *         array($this, 'myOtherTag'),
   *         array($that_object, 'thatTag'),
   *     );
   *
   * The shortcode tag name will match the method name.
   *
   *     eg. `[doubleRainbow]` will render the output of the `doubleRainbow()`
   *     method on this class if registered as `array($this, 'doubleRainbow')`
   *
   * @return array A single array representation of a callable method, or an array of them.
   */
  public function registerShortcodes()
  {
    return array(
      array($this, 'slideshare'),
    );
  }

  public function slideshare($attributes, $content, $tag)
  {
    $attrs = array(
      'id'     => '',
      'width'  => '100%',
      'height' => '448'
    );

    $attrs = array_merge($attrs, $attributes);

    $output = '<div class="videoContainer slideshare"><iframe src="https://www.slideshare.net/slideshow/embed_code/' . $attrs['id'] . '" width="' . $attrs['width'] . '" height="' . $attrs['height'] . '" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe></div>';

    return $output;
  }
}
