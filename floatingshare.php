<?php
/**
* Plugin Name: Floating Share
* Plugin URI: http://www.shoutmeloud.com/
* Description: Floating Social Buttons Provide an easy way to add floating social sharing button.
* Version: 1.0
* Author: Harsh Agrawal		
* Author URI: http://www.shoutmeloud.com/about
* License: GPL2
*/

add_action('admin_menu', 'floating_social_buttons_menu');

function floating_social_buttons_menu() {
$hook_suffix = add_options_page('Floating Social Buttons Options', 'Floating Share', 'manage_options', 'floating-social-buttons', 'floating_social_buttons_option');
}

/*** Register Settings*/
function plugin_settings_init(){register_setting( 'plugin_settings', 'plugin_settings' );}

/*** Add Actions*/
add_action( 'admin_init', 'plugin_settings_init' );



if($_POST['plugin_settings'])
{
update_option('plugin_settings', $_POST['plugin_settings']);
}

function floating_social_buttons_option()
{
?>

<div class="wrap">
  <div id="icon-options-general" class="icon32"></div>
  <h2>Floating Share</h2>
  <div id="poststuff">
    <div id="post-body" class="metabox-holder columns-2">
      <div id="post-body-content">
        <div class="meta-box-sortables ui-sortable">
          <div class="postbox">
            <h3><span>Floating Share</span></h3>
            <div class="inside">
              <form name="social_buttons" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
                <!--<input type="hidden" name="social_buttons_hidden" value="Y">-->
                <?php settings_fields( 'plugin_settings' ); ?>
                <?php $options = get_option( 'plugin_settings' ); ?>
                <ul class="list-group">
                  <li class="list-group-item list-group-item-info"><strong>Select the Social Share</strong></li>
                  <li class="list-group-item">
                    <input id="plugin_settings[facebook]" name="plugin_settings[facebook]" type="checkbox" value="1" <?php checked( '1', ($options['facebook']) ? $options['facebook'] : '' ); ?> />
                    Facebook</li>
                  <li class="list-group-item">
                    <input id="plugin_settings[tweet]" name="plugin_settings[tweet]" type="checkbox" value="1" <?php checked( '1', ($options['tweet']) ? $options['tweet'] : '' ); ?> />
                    Twitter</li>
                  <li class="list-group-item">
                    <input id="plugin_settings[gplus]" name="plugin_settings[gplus]" type="checkbox" value="1" <?php checked( '1', ($options['gplus']) ? $options['gplus'] : '' ); ?> />
                    Google Plus</li>
                  <li class="list-group-item">
                    <input id="plugin_settings[stumbleupon]" name="plugin_settings[stumbleupon]" type="checkbox" value="1" <?php checked( '1', ($options['stumbleupon']) ? $options['stumbleupon'] : '' ); ?> />
                    Stumbleuppon</li>
                  <li class="list-group-item">
                    <input id="plugin_settings[pinterest]" name="plugin_settings[pinterest]" type="checkbox" value="1" <?php checked( '1', ($options['pinterest']) ? $options['pinterest'] : '' ); ?> />
                    Pinterest</li>
                  <li class="list-group-item">
                    <input id="plugin_settings[reddit]" name="plugin_settings[reddit]" type="checkbox" value="1" <?php checked( '1', ($options['reddit']) ? $options['reddit'] : '' ); ?> />
                    Reddit</li>
                  <li class="list-group-item">
                    <input id="plugin_settings[buffer]" name="plugin_settings[buffer]" type="checkbox" value="1" <?php checked( '1', ($options['buffer']) ? $options['buffer'] : '' ); ?> />
                    Buffer</li>
                  <li class="list-group-item">
                    <input id="plugin_settings[pocket]" name="plugin_settings[pocket]" type="checkbox" value="1" <?php checked( '1', ($options['pocket']) ? $options['pocket'] : '' ); ?> />
                    Pocket</li>
                     <li class="list-group-item list-group-item-info"><strong>Twitter ID:</strong></li>
                  <li class="list-group-item">
                    <input id="plugin_settings[twitter_name]" name="plugin_settings[twitter_name]" type="text" value="<?php echo ($options['twitter_name']) ? $options['twitter_name'] : "";?>" /> <br /><br />Note: Paste the ID Without ' @ ' Symbol
                    </li>  
                </ul>
                <ul class="list-group">
                  <li class="list-group-item list-group-item-info"><strong>Display Setting :</strong></li>
                  <li class="list-group-item">Position From Top :
                    <input id="plugin_settings[position_top]" name="plugin_settings[position_top]" type="text" value="<?php echo ($options['position_top']) ? $options['position_top'] : '240'; ?>" />
                    px</li>
                  <li class="list-group-item">Position From Left or Right :
                    <input id="plugin_settings[position_left]" name="plugin_settings[position_left]" type="text" value="<?php echo ($options['position_left']) ? $options['position_left'] : '100'; ?>" />
                    px</li>
                  <li>NOTE : Dont add px in display settings</li>
                </ul>
                <input type="submit" name="savesetting" class="btn btn-primary" value="Save Setting"/>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div id="postbox-container-1" class="postbox-container">
        <div class="meta-box-sortables">
          <div class="postbox">
            <h3><span>About us</span></h3>
            <div class="inside"> Welcome to ShoutMeloud (SML) – a blog where you will learn about making a business out of a blog . Infact, it is a community of bloggers, and members are popularly referred as “Shouter”.<br/>
              <a href="http://www.shoutmeloud.com/about" title="floating share"
class="btn btn-primary" target="_blank">Read more</a> </div>
          </div>
          <div class="postbox">
            <h3><span>Follow on Social Network</span></h3>
            <div class="inside">
<div class="socialicons"> 
<a href="http://www.facebook.com/Shoutmeloudpro" class="social_icon facebook" target="_blank"><i style="padding: 8px 15px;" class="animatesocialicon1 fadeInLeft fa fa-facebook" id="animated-example"></i></a> 
<a href="https://twitter.com/shoutmeloud" class="social_icon twitter" target="_blank"><i  class="animatesocialicon2 fadeInLeft fa fa-twitter" id="animated-example"></i></a> 
<a href="https://plus.google.com/+Shoutmeloud/posts
" class="social_icon google" target="_blank"><i  class="animatesocialicon3 fadeInLeft fa fa-google-plus" id="animated-example"></i></a> 
<a href="https://www.youtube.com/user/denharsh" class="social_icon youtube" target="_blank"><i  class="animatesocialicon5 fadeInLeft fa fa-youtube" id="animated-example"></i></a> 
<a href="http://www.slideshare.net/denharsh" class="social_icon slideshare" target="_blank"><i  class="animatesocialicon6 fadeInLeft fa fa-slideshare" id="animated-example"></i></a><a href="http://in.linkedin.com/in/denharsh" class="social_icon linkedin" target="_blank"><i  class="animatesocialicon6 fadeInLeft fa fa-linkedin" id="animated-example"></i></a> 
 
</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <style>
	.socialicons a i {
   
    color: #000;
    font-size: 21px;
    padding: 8px;
    transition: transform 0.1s ease-out 0s, background 0.2s ease 0s;
}

.social_icon {
    display: inline-block;
    transform: translateZ(0px);
    box-shadow: 0px 0px 1px transparent;
}

.socialicons .fa-facebook:hover {
    background: none repeat scroll 0% 0% #3B5998;
}

.socialicons .fa-twitter:hover {
    background: none repeat scroll 0% 0% #00ABF0;
}

.socialicons .fa-youtube:hover {
    background: none repeat scroll 0% 0% #C3181E;
}

.socialicons .fa-google-plus:hover {
    background: none repeat scroll 0% 0% #D95232;
}

.socialicons .fa-slideshare:hover {
	background-color:#CD2B0E!important;
}
.socialicons .fa-linkedin:hover {background: #52a2cc;}


    </style>
    
    <br class="clear">
  </div>
</div>
<?php
}

function floating_social_buttons_admin_enqueue_scripts(){

wp_register_style('floatingshare', plugins_url("/css/floatingshare.css", __FILE__), false,filemtime( plugin_dir_path( __FILE__ ) . "/css/floatingshare.css" ) );
wp_enqueue_style('floatingshare');

wp_enqueue_script( 'jquery' );
wp_register_script( 'floaticons', plugins_url("/js/floaticons.js", __FILE__), array('jquery', ),filemtime( plugin_dir_path( __FILE__ ) . "/js/floaticons.js" ) );
wp_enqueue_script( 'floaticons' );

}

add_action('wp_head','floating_social_buttons_admin_enqueue_scripts');
add_action("wp_footer", "floatsharingpost");


function floatsharingpost()
{
$options = get_option( 'plugin_settings' );	
if(is_single()){
?>
<div id="floaticons" style="top: <?php echo ($options['position_top']) ? $options['position_top'] : ''; ?>px;left: <?php echo ($options['position_left']) ? $options['position_left'] : ''; ?>px;">
  <div class="sharing group sharing_social_count">
    <ul class="post-social social_share_count">
      <?php if($options['facebook'] == '1'){  ?>
      <li class="share_fb"> <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&amp;t=<?php echo htmlspecialchars(urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8'); ?>" target="_blank"> <i class="icon-fb icon"></i> <span>
        <?php 
$obj=new shoutme_floatingshare(get_permalink( $post->ID ));  
echo $obj->get_fb();
?>
        </span> </a> </li>
      <?php } 
if($options['gplus'] == '1'){  ?>
      <li class="share_plus"> <a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" target="_blank" title="Click to share"> <i class="icon-plus icon"></i> <span>
        <?php 
$obj=new shoutme_floatingshare(get_permalink( $post->ID ));  
echo $obj->get_plusones();
?>
        </span> </a> </li>
      <?php } 
if($options['stumbleupon'] == '1'){  ?>
      <li class="share_stumble"> <a target="_blank" href="http://www.stumbleupon.com/submit?url=<?php the_permalink(); ?>"> <i class="icon icon-stumble"></i> <span>
        <?php 
$obj = new shoutme_floatingshare(get_permalink( $post->ID ));  
echo $obj->get_stumble();
?>
        </span> </a> </li>
      <?php } 
if($options['reddit'] == '1'){  ?>
      <li class="share_reddit"> <a target="_blank" href="http://www.reddit.com/submit?url=<?php the_permalink(); ?>&amp;title=<?php echo htmlspecialchars(urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8'); ?>"> <i class="icon-reddit icon"></i> <span>
        <?php 
@$obj=new shoutme_floatingshare(get_permalink( @$post->ID ));  
echo @$obj->get_reddit();
?>
        </span> </a> </li>
      <?php }
if($options['tweet'] == '1'){  ?>
      <li class="share_tweet"> 
      <a target="_blank" href="http://twitter.com/share?text=<?php echo htmlspecialchars(urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8'); ?>&amp;url=<?php the_permalink(); ?>&amp;via=<?php echo ($options['twitter_name']) ? $options['twitter_name'] : ""; ?>"> <i class="icon-tweet icon"></i> <span>
        <?php 
$obj = new shoutme_floatingshare(get_permalink( $post->ID ));  
echo $obj->get_tweets();
?>
        </span> </a> </li>
      <?php }
if($options['buffer'] == '1'){  ?>
      <li class="share_buffer"> 
      
      <a target="_blank" href="http://bufferapp.com/add?url=<?php the_permalink(); ?>&amp;text=<?php echo htmlspecialchars(urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8'); ?>&amp;utm_source=<?php the_permalink(); ?>&amp;utm_medium=<?php the_permalink(); ?>&amp;utm_campaign=buffer&amp;source=button">
      <!--<a href="http://bufferapp.com/add" target="_blank" class="buffer-add-button" data-count="horizontal" >-->
   <span>
        <?php 
$obj = new shoutme_floatingshare(get_permalink( $post->ID ));  
echo $obj->get_buffer();
?>
        </span> </a>
    </li>
      <?php }
if($options['pocket'] == '1'){  ?>
      <li class="share_pocket"> 
      
      <a target="_blank" href="https://getpocket.com/save?title=<?php echo get_the_title(); ?>&amp;url=<?php the_permalink(); ?>">
      <!--<a href="http://bufferapp.com/add" target="_blank" class="buffer-add-button" data-count="horizontal" >-->
   <span>
        <?php 
$obj = new shoutme_floatingshare(get_permalink( $post->ID ));  
echo $obj->get_pocket();
?>
        </span> </a>
     
    </li>
      <?php }

if($options['pinterest'] == '1'){  ?>
      <li class="share_pintrest">
        <?php 
if ( '' != get_the_post_thumbnail( $post->ID ) ) {
		$pinterestimage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
		$pinImage = $pinterestimage[0];
} else {
		$pinImage = plugins_url( '/default/default.png' , __FILE__ );
}?>
        <a target="_blank" href="http://pinterest.com/pin/create/bookmarklet/?url=<?php echo urlencode(get_permalink( $post->ID )).'&amp;media='. $pinImage .'&amp;description='. htmlspecialchars(urlencode(html_entity_decode(get_the_title( $post->ID ), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8');?>"> <i class="icon-pintrest icon"></i> <span>
        <?php 
		$obj=new shoutme_floatingshare(get_permalink( $post->ID )); 
		echo $obj->get_pinterest(); ?>
        </span> </a> </li>
      <?php } ?>
    </ul>
  </div>
</div>
<?php
}
}


class shoutme_floatingshare
{
	
private $url,$timeout;
function __construct($url,$timeout=10) {
$this->url=rawurlencode($url);
$this->timeout=$timeout;
}

function get_tweets() { 
@$json_string = @$this->file_get_contents_curl('http://urls.api.twitter.com/1/urls/count.json?url=' . @$this->url);
$json = @json_decode(@$json_string, true);
return isset($json['count'])?intval(@$json['count']):0;
}

function get_reddit() {    
@$json_string = @file_get_contents('http://buttons.reddit.com/button_info.json?url='.$this->url);
$json = json_decode(@$json_string, true);
return isset($json['data']['children']['0']['data']['ups'])?intval( @$json['data']['children']['0']['data']['ups'] ):0;
}

function get_fb() {
$json_string = $this->file_get_contents_curl('http://api.facebook.com/restserver.php?method=links.getStats&format=json&urls='.$this->url);
$json = json_decode($json_string, true);
return isset($json[0]['total_count'])?intval($json[0]['total_count']):0;
}



function get_pocket() {
	$query = 'http://widgets.getpocket.com/v1/button?v=1&count=horizontal&url=' . $this->url;
	$html = file_get_contents($query);
	$dom = new DOMDocument('1.0', 'UTF-8');
	$dom->preserveWhiteSpace = false;
	$dom->loadHTML($html);
	$xpath = new DOMXPath($dom);
	$result = $xpath->query('//em[@id = "cnt"]')->item(0);
	return isset($result->nodeValue) ? intval($result->nodeValue) : 0;
}

function get_plusones()  {
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://clients6.google.com/rpc");
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_POSTFIELDS, '[{"method":"pos.plusones.get","id":"p","params":{"nolog":true,"id":"'.rawurldecode($this->url).'","source":"widget","userId":"@viewer","groupId":"@self"},"jsonrpc":"2.0","key":"p","apiVersion":"v1"}]');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
$curl_results = curl_exec ($curl);
curl_close ($curl);
$json = json_decode($curl_results, true);
return isset($json[0]['result']['metadata']['globalCounts']['count'])?intval( $json[0]['result']['metadata']['globalCounts']['count'] ):0;
}

function get_stumble() {
$json_string = $this->file_get_contents_curl('http://www.stumbleupon.com/services/1.01/badge.getinfo?url='.$this->url);
$json = json_decode($json_string, true);
return isset($json['result']['views'])?intval($json['result']['views']):0;
}
/*function get_delicious() {
$json_string = $this->file_get_contents_curl('http://feeds.delicious.com/v2/json/urlinfo/data?url='.$this->url);
$json = json_decode($json_string, true);
return isset($json[0]['total_posts'])?intval($json[0]['total_posts']):0;
}
*/

function get_buffer()
{
$count = 0; // Initial Value
$request_url = sprintf( 'https://api.bufferapp.com/1/links/shares.json?url=%s', $this->url );
$response = wp_remote_get( $request_url );
if ( 200 == wp_remote_retrieve_response_code( $response ) ) {
$response = json_decode( wp_remote_retrieve_body( $response ), true );
if ( isset( $response['shares'] ) )
$count = $response['shares'];
} else {
$count = false;
}
return absint( $count );
 
}


function get_pinterest() {
$return_data = $this->file_get_contents_curl('http://api.pinterest.com/v1/urls/count.json?url='.$this->url);
$json_string = preg_replace('/^receiveCount\((.*)\)$/', "\\1", $return_data);
$json = json_decode($json_string, true);
return isset($json['count'])?intval($json['count']):0;
}


private function file_get_contents_curl($url){
$ch=curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FAILONERROR, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_TIMEOUT, $this->timeout);
$cont = curl_exec($ch);
if(curl_error($ch))
{
die(curl_error($ch));
}
return $cont;
}
} 

?>
