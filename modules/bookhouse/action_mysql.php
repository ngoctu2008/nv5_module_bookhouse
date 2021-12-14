<?php

/**
 * @Project NUKEVIET 4.x
* @Author mynukeviet (contact@mynukeviet.net)
* @Copyright (C) 2017 mynukeviet. All rights reserved
* @Createdate Sat, 07 Jan 2017 03:50:56 GMT
*/

if ( ! defined( 'NV_IS_FILE_MODULES' ) ) die( 'Stop!!!' );

$sql_drop_module = array();
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_admins";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_block";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_block_cat";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_categories";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_contract";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_images";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_legal";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_order";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_projects";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_queue_logs";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_queue_reason";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_refresh";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_rooms";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_rooms_detail";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_saved";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_tags";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_tags_id";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_way";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_type";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_type_catid";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_users_groups";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_mail_queue";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_econtent";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_pricetype";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_pricetype_typeid";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_country";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_district";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_province";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_ward";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_furniture";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_convenient";

$sql_create_module = $sql_drop_module;
$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "(
  id int(11) unsigned NOT NULL AUTO_INCREMENT,
  title varchar(255) NOT NULL,
  alias varchar(255) NOT NULL,
  catid int(11) NOT NULL DEFAULT '0',
  group_id int(11) NOT NULL DEFAULT '0',
  hometext mediumtext NOT NULL,
  bodytext text NOT NULL,
  admin_id mediumint(8) NOT NULL DEFAULT '0',
  addtime int(11) unsigned NOT NULL DEFAULT '0',
  edittime int(11) unsigned NOT NULL DEFAULT '0',
  exptime int(11) unsigned NOT NULL DEFAULT '0',
  code varchar(255) NOT NULL DEFAULT '',
  area double NOT NULL DEFAULT '0',
  size_v double unsigned NOT NULL DEFAULT '0',
  size_h double unsigned NOT NULL DEFAULT '0',
  price double NOT NULL DEFAULT '0',
  price_time tinyint(1) unsigned NOT NULL DEFAULT '0',
  money_unit char(3) NOT NULL,
  typeid smallint(4) unsigned NOT NULL DEFAULT '0',
  projectid mediumint(8) unsigned NOT NULL DEFAULT '0',
  way_id smallint(4) unsigned NOT NULL DEFAULT '0',
  legal_id smallint(4) unsigned NOT NULL DEFAULT '0',
  homeimgfile varchar(255) NOT NULL DEFAULT '',
  homeimgthumb tinyint(4) NOT NULL DEFAULT '0',
  homeimgalt varchar(255) NOT NULL,
  front double unsigned NOT NULL DEFAULT '0',
  road double unsigned NOT NULL DEFAULT '0',
  structure tinytext NOT NULL,
  type tinytext NOT NULL,
  provinceid mediumint(4) unsigned NOT NULL DEFAULT '0',
  districtid mediumint(8) unsigned NOT NULL DEFAULT '0',
  wardid mediumint(8) unsigned NOT NULL DEFAULT '0',
  address varchar(255) NOT NULL,
  maps tinytext NOT NULL,
  floor int(11) unsigned NOT NULL DEFAULT '1',
  num_room int(11) unsigned NOT NULL DEFAULT '1',
  inhome tinyint(1) unsigned NOT NULL DEFAULT '0',
  allowed_comm tinyint(1) unsigned NOT NULL DEFAULT '0',
  hitstotal mediumint(8) unsigned NOT NULL DEFAULT '0',
  hits_phone mediumint(8) unsigned NOT NULL DEFAULT '0',
  showprice tinyint(2) NOT NULL DEFAULT '0',
  contact_fullname varchar(150) NOT NULL,
  contact_email varchar(100) NOT NULL,
  contact_phone varchar(20) NOT NULL,
  contact_address varchar(255) NOT NULL,
  prior int(11) unsigned NOT NULL DEFAULT '0' COMMENT 'Ưu tiên',
  ordertime int(11) unsigned NOT NULL DEFAULT '0',
  is_queue tinyint(1) unsigned NOT NULL DEFAULT '0',
  status_admin tinyint(1) unsigned NOT NULL DEFAULT '1',
  status tinyint(1) NOT NULL DEFAULT '1',
  admin_duyet tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (id),
  KEY catid (catid),
  KEY admin_id (admin_id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_admins(
  userid mediumint(8) unsigned NOT NULL DEFAULT '0',
  provinceid mediumint(4) NOT NULL DEFAULT '0',
  admin tinyint(4) NOT NULL DEFAULT '0',
  add_item tinyint(4) NOT NULL DEFAULT '0',
  pub_item tinyint(4) NOT NULL DEFAULT '0',
  edit_item tinyint(4) NOT NULL DEFAULT '0',
  del_item tinyint(4) NOT NULL DEFAULT '0',
  app_item tinyint(4) NOT NULL DEFAULT '0',
  UNIQUE KEY userid (userid,provinceid)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_block(
  bid smallint(5) unsigned NOT NULL,
  id int(11) unsigned NOT NULL,
  exptime int(11) unsigned NOT NULL DEFAULT '0',
  weight int(11) unsigned NOT NULL,
  UNIQUE KEY bid (bid,id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_block_cat(
  bid smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  useradd tinyint(1) unsigned NOT NULL DEFAULT '0',
  prior smallint(5) unsigned NOT NULL DEFAULT '0',
  adddefault tinyint(4) NOT NULL DEFAULT '0',
  numbers smallint(5) NOT NULL DEFAULT '10',
  title varchar(250) NOT NULL DEFAULT '',
  alias varchar(250) NOT NULL DEFAULT '',
  image varchar(255) DEFAULT '',
  description varchar(255) DEFAULT '',
  color varchar(10) NOT NULL,
  groups smallint(5) NOT NULL,
  weight smallint(5) NOT NULL DEFAULT '0',
  keywords text,
  add_time int(11) NOT NULL DEFAULT '0',
  edit_time int(11) NOT NULL DEFAULT '0',
  cron_time int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (bid),
  UNIQUE KEY title (title),
  UNIQUE KEY alias (alias)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_categories(
  id smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  parentid smallint(5) unsigned NOT NULL,
  title varchar(250) NOT NULL,
  alias varchar(250) NOT NULL,
  description text ,
  groups_view varchar(255) DEFAULT '',
  lev smallint(4) unsigned NOT NULL DEFAULT '0',
  sort smallint(4) unsigned NOT NULL DEFAULT '0',
  numsub smallint(4) unsigned NOT NULL DEFAULT '0',
  subid varchar(255) NOT NULL,
  weight smallint(4) unsigned NOT NULL DEFAULT '0',
  status tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (id),
  UNIQUE KEY alias (alias)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config(
  config_name varchar(30) NOT NULL,
  config_value varchar(255) NOT NULL,
  UNIQUE KEY config_name (config_name)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_contract(
  cid smallint(5) NOT NULL AUTO_INCREMENT,
  title varchar(255) NOT NULL,
  cus_id smallint(4) NOT NULL,
  item_id smallint(4) NOT NULL,
  fullname varchar(100) NOT NULL,
  sex tinyint(1) NOT NULL,
  address varchar(255) NOT NULL,
  email varchar(100) NOT NULL,
  phone varchar(255) NOT NULL,
  start_time int(11) NOT NULL,
  end_time int(11) NOT NULL,
  status int(1) NOT NULL,
  PRIMARY KEY (cid)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_images(
  id mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  rows_id int(11) unsigned NOT NULL,
  title varchar(255) NOT NULL,
  description text NOT NULL,
  homeimgfile varchar(255) NOT NULL,
  weight smallint(4) unsigned NOT NULL DEFAULT '0',
  status tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_legal(
  id smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  title varchar(250) NOT NULL COMMENT 'Tên gọi loại pháp lý',
  alias varchar(250) NOT NULL,
  note tinytext NOT NULL COMMENT 'Ghi chú',
  weight smallint(4) unsigned NOT NULL DEFAULT '0',
  status tinyint(1) NOT NULL COMMENT 'Trạng thái',
  PRIMARY KEY (id),
  UNIQUE KEY title (title)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_order(
  id smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  user_id mediumint(8) NOT NULL DEFAULT '0',
  iid smallint(5) unsigned NOT NULL,
  fullname varchar(255) NOT NULL,
  address varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  phone varchar(255) NOT NULL,
  note text NOT NULL,
  sendtime int(11) unsigned NOT NULL DEFAULT '0',
  status tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_projects(
  id smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  title varchar(250) NOT NULL,
  alias varchar(250) NOT NULL,
  description text NOT NULL,
  descriptionhtml text NOT NULL,
  status tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (id),
  UNIQUE KEY alias (alias)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_queue_logs(
  id int(11) unsigned NOT NULL AUTO_INCREMENT,
  itemid int(11) unsigned NOT NULL,
  queue tinyint(1) unsigned NOT NULL DEFAULT '1',
  reason text NOT NULL,
  reasonid tinyint(2) unsigned NOT NULL DEFAULT '0',
  addtime int(11) unsigned NOT NULL,
  userid int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_queue_reason(
  id smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  title varchar(255) NOT NULL,
  note tinytext NOT NULL COMMENT 'Ghi chú',
  weight smallint(4) unsigned NOT NULL DEFAULT '0',
  status tinyint(1) NOT NULL COMMENT 'Trạng thái',
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_refresh(
  userid int(11) unsigned NOT NULL,
  count int(11) unsigned NOT NULL DEFAULT '0',
  free smallint(4) unsigned NOT NULL DEFAULT '0',
  free_time int(11) unsigned NOT NULL DEFAULT '0',
  UNIQUE KEY userid (userid)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_rooms(
  id smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  parentid smallint(5) unsigned NOT NULL,
  title varchar(250) NOT NULL,
  alias varchar(250) NOT NULL,
  description text ,
  weight smallint(4) unsigned NOT NULL DEFAULT '0',
  status tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (id),
  UNIQUE KEY alias (alias)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_rooms_detail(
  id smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  iid smallint(5) unsigned NOT NULL,
  rid smallint(5) unsigned NOT NULL,
  num mediumint(8) NOT NULL DEFAULT '0',
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_saved(
  userid int(11) unsigned NOT NULL,
  itemid int(11) unsigned NOT NULL,
  UNIQUE KEY userid (userid,itemid),
  KEY userid_2 (userid,itemid)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_tags(
  tid mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  numnews mediumint(8) NOT NULL DEFAULT '0',
  alias varchar(250) NOT NULL DEFAULT '',
  image varchar(255) DEFAULT '',
  description text ,
  keywords varchar(255) DEFAULT '',
  PRIMARY KEY (tid),
  UNIQUE KEY alias (alias)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_tags_id(
  id int(11) NOT NULL,
  tid mediumint(9) NOT NULL,
  keyword varchar(65) NOT NULL,
  UNIQUE KEY sid (id,tid),
  KEY tid (tid)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_way(
  id smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  title varchar(250) NOT NULL COMMENT 'Tên gọi loại nhà đất',
  alias varchar(250) NOT NULL,
  note tinytext NOT NULL COMMENT 'Ghi chú',
  weight smallint(4) unsigned NOT NULL DEFAULT '0',
  status tinyint(1) NOT NULL COMMENT 'Trạng thái',
  PRIMARY KEY (id),
  UNIQUE KEY title (title)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_type(
  id smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  title varchar(255) NOT NULL,
  note text NOT NULL,
  weight smallint(4) unsigned NOT NULL DEFAULT '0',
  status tinyint(1) NOT NULL DEFAULT '1' COMMENT 'Trạng thái',
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_type_catid(
  typeid smallint(4) unsigned NOT NULL,
  catid smallint(4) unsigned NOT NULL,
  UNIQUE KEY typeid (typeid, catid)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_users_groups(
  userid int(11) unsigned NOT NULL,
  groupid smallint(4) unsigned NOT NULL DEFAULT '0',
  exptime int(11) unsigned NOT NULL DEFAULT '0',
  UNIQUE KEY userid (userid)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_mail_queue(
  id smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  tomail varchar(100) NOT NULL,
  subject varchar(255) NOT NULL,
  message text NOT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_econtent(
  action varchar(100) NOT NULL,
  econtent text NOT NULL,
  PRIMARY KEY (action)
) ENGINE=MyISAM";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_econtent (action, econtent) VALUES('upgrade_group', '')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_econtent (action, econtent) VALUES('group', '')";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_pricetype(
  id smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  title varchar(255) NOT NULL,
  note text NOT NULL,
  weight smallint(4) unsigned NOT NULL DEFAULT '0',
  status tinyint(1) NOT NULL DEFAULT '1' COMMENT 'Trạng thái',
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_pricetype_typeid(
  pricetypeid smallint(4) unsigned NOT NULL,
  typeid smallint(4) unsigned NOT NULL,
  UNIQUE KEY pricetypeid (pricetypeid, typeid)
) ENGINE=MyISAM";

$array_config = array(
    'display_data' => 0,
    'display_type' => 'viewgrid',
    'num_item_page' => 15,
    'thumb_width' => 150,
    'thumb_height' => 120,
    'socialbutton' => 1,
    'facebookappid' => '',
    'allow_maps' => 1,
    'maps_appid' => '',
    'post_groups' => 4,
    'post_queue' => 1,
    'maxfilesize' => 1342177,
    'post_user_limit' => 10,
    'image_upload_size' => '0x1000',
    'post_image_limit' => 10,
    'structure_upload' => 'Ym',
    'structure_upload_user' => 'username_Y',
    'sizetype' => 0,
    'priceformat' => 0,
    'view_on_main' => 0,
    'dec_point' => ',',
    'thousands_sep' => '.',
    'othertype' => 0, // 0: cung loai, 1: cung quan
    'pricetype' => 0,
    'refresh_allow' => 0,
    'refresh_config' => '',
    'refresh_auto_config' => '',
    'refresh_default' => 0,
    'refresh_free' => 0,
    'allow_contact_info' => 0,
    'itemsave' => 1,
    'payport' => 0,
    'specialgroup_config' => '',
    'upgrade_group_config' => '',
    'upgrade_group_percent' => 0,
    'code_auto' => 0,
    'code_format' => 'T%06s',
    'payment_style' => 0,
    'similar_content' => 80,
    'similar_time' => 5,
'money_unit' => 'đ',
    'project_type' => 0,
    'project_module_name' => '',
    'project_table' => '',
    'project_id_field' => '',
    'project_title_field' => '',
    'project_provinceid_field' => '',
    'project_districtid_field' => '',
    'project_wardid_field' => '',
    'auto_resize' => ''
);
foreach ($array_config as $config_name => $config_value) {
    $sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config (config_name, config_value) VALUES (" . $db->quote($config_name) . ", " . $db->quote($config_value) . ")";
}

$sql_create_module[] = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . "(lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $module_name . "', 'time_reloadpage', 10)";
$sql_create_module[] = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . "(lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $module_name . "', 'refresh_next_time', " . NV_CURRENTTIME . ")";

$sql_create_module[] = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . "(lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $module_name . "', 'emailcomm', '0')";
$sql_create_module[] = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . "(lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $module_name . "', 'auto_postcomm', '1')";
$sql_create_module[] = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . "(lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $module_name . "', 'setcomm', '4')";
$sql_create_module[] = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . "(lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $module_name . "', 'allowed_comm', '-1')";
$sql_create_module[] = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . "(lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $module_name . "', 'view_comm', '6')";
$sql_create_module[] = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . "(lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $module_name . "', 'tags_alias', '0')";
$sql_create_module[] = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . "(lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $module_name . "', 'auto_tags', '0')";
$sql_create_module[] = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . "(lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $module_name . "', 'adminscomm', '')";
$sql_create_module[] = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . "(lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $module_name . "', 'sortcomm', '0')";
$sql_create_module[] = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . "(lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $module_name . "', 'activecomm', '1')";
$sql_create_module[] = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . "(lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $module_name . "', 'tags_remind', '1')";
$sql_create_module[] = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . "(lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $module_name . "', 'captcha', '1')";
$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_country(
  countryid smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  code varchar(10) NOT NULL,
  title varchar(255) NOT NULL,
  alias varchar(255) NOT NULL,
  weight smallint(4) unsigned NOT NULL DEFAULT '0',
  status tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (countryid),
  UNIQUE KEY countryid (code)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_district(
  districtid mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  code varchar(5) NOT NULL,
  provinceid varchar(5) NOT NULL,
  title varchar(100) NOT NULL,
  alias varchar(100) NOT NULL,
  type varchar(30) NOT NULL,
  location varchar(30) NOT NULL,
  weight mediumint(8) unsigned NOT NULL DEFAULT '0',
  status tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (districtid),
  KEY provinceid (provinceid)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_province(
  provinceid mediumint(4) unsigned NOT NULL AUTO_INCREMENT,
  code varchar(5) NOT NULL,
  countryid varchar(10) NOT NULL,
  title varchar(100) NOT NULL,
  alias varchar(100) NOT NULL,
  type varchar(30) NOT NULL,
  weight smallint(4) unsigned NOT NULL DEFAULT '0',
  status tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (provinceid)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_ward(
  wardid mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  districtid varchar(5) NOT NULL,
  title varchar(100) NOT NULL,
  alias varchar(100) NOT NULL,
  code varchar(5) NOT NULL,
  type varchar(30) NOT NULL,
  location varchar(30) NOT NULL,
  status tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (wardid),
  UNIQUE KEY alias (alias),
  UNIQUE KEY code (code),
  KEY districtid (districtid)
) ENGINE=MyISAM";
$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_furniture (
  id smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  title varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên',
  gia_tri varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Giá trị',
  weight smallint(4) unsigned NOT NULL DEFAULT '0',
  status tinyint(1) NOT NULL DEFAULT '1' COMMENT 'Trạng thái',
  PRIMARY KEY (id),
  UNIQUE KEY title (title)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_convenient (
  id smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  title varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên',
  weight smallint(4) unsigned NOT NULL DEFAULT '0',
  status tinyint(1) NOT NULL DEFAULT '1' COMMENT 'Trạng thái',
  PRIMARY KEY (id),
  UNIQUE KEY title (title)
) ENGINE=MyISAM";

$data = array();
$data['allow_type'] = 1;

foreach ($data as $config_name => $config_value) {
    $sql_create_module[] = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('" . $lang . "', " . $db->quote($module_name) . ", " . $db->quote($config_name) . ", " . $db->quote($config_value) . ")";
}

$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_furniture (id, title, gia_tri, weight, status) VALUES
(4, 'Máy Lạnh', '', 4, 1),
(1, 'Tivi', '', 1, 1),
(2, 'Sofa', '', 2, 1),
(3, 'Ban Công', '', 3, 1),
(5, 'Microwave', '', 5, 1),
(6, 'Tủ Lạnh', '', 6, 1),
(7, 'Máy Giặt', '', 7, 1),
(8, 'Giường Ngủ', '', 8, 1),
(9, 'Tủ Quần Áo', '', 9, 1),
(10, 'Intercom', '', 10, 1),
(11, 'Bàn Ăn', '', 11, 1),
(12, 'Internet', '', 12, 1),
(13, 'Truyền Hình Cáp', '', 13, 1)";

$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_convenient (id, title, weight, status) VALUES
(1, 'Ngân hàng', 3, 1),
(2, 'Chợ', 2, 1),
(14, 'Phòng xông hơi', 8, 1),
(10, 'Trường học', 4, 1),
(11, 'Siêu thị', 5, 1),
(12, 'Bảo vệ', 6, 1),
(13, 'Phòng tập Gym', 7, 1),
(17, 'Khu vui chơi', 9, 1),
(18, 'Sân tennis', 10, 1),
(19, 'Nhà Hàng', 11, 1),
(20, 'Coffee', 12, 1),
(21, 'Thang Máy', 13, 1),
(22, 'Yoga', 14, 1),
(23, 'Hồ Bơi', 1, 1)";