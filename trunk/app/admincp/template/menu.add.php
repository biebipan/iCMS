<?php /**
 * @package iCMS
 * @copyright 2007-2010, iDreamSoft
 * @license http://www.idreamsoft.com iDreamSoft
 * @author coolmoo <idreamsoft@qq.com>
 * @$Id: menu.add.php 2070 2013-09-09 15:34:49Z coolmoo $
 */
defined('iCMS') OR exit('What are you doing?'); 
iACP::head();
?>
<script type="text/javascript">
$(function(){
	iCMS.select('target',"<?php echo $rs['target'] ; ?>");
	iCMS.select('data-toggle',"<?php echo $rs['data-toggle'] ; ?>");
});
</script>

<div class="iCMS-container">
  <div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="fa fa-plus-square"></i> </span>
      <h5><?php echo empty($id)?'添加':'修改' ; ?>菜单</h5>
    </div>
    <div class="widget-content nopadding">
      <form action="<?php echo APP_FURI; ?>&do=save" method="post" class="form-inline" id="iCMS-menu" target="iPHP_FRAME">
        <input name="id" type="hidden" value="<?php echo $rs['id']  ; ?>" />
        <div id="menu-add" class="tab-content">
          <div class="input-prepend"> <span class="add-on">上级菜单</span>
            <select name="rootid" class="chosen-select span3">
              <option value="0">========顶级菜单=======</option>
              <?php echo $this->select($rootid,0,1);?>
            </select>
          </div>
          <span class="help-inline">本菜单的上级菜单或分类</span>
          <div class="clearfloat mb10"></div>
          <div class="input-prepend"> <span class="add-on">应用名称</span>
            <input type="text" name="app" class="span3" id="app" value="<?php echo $rs['app'] ; ?>"/>
          </div>
          <div class="clearfloat mb10"></div>
          <div class="input-prepend"> <span class="add-on">菜单名称</span>
            <input type="text" name="name" class="span3" id="name" value="<?php echo $rs['name'] ; ?>"/>
          </div>
          <div class="clearfloat mb10"></div>
          <div class="input-prepend"> <span class="add-on">标题</span>
            <input type="text" name="title" class="span3" id="title" value="<?php echo $rs['title'] ; ?>"/>
          </div>
          <div class="clearfloat mb10"></div>
          <div class="input-prepend"> <span class="add-on">菜单链接</span>
            <input type="text" name="href" class="span3" id="href" value="<?php echo $rs['href'] ; ?>"/>
          </div>
          <div class="clearfloat mb10"></div>
          <div class="input-prepend"> <span class="add-on">菜单图标</span>
            <input type="text" name="icon" class="span3" id="icon" value="<?php echo $rs['icon'] ; ?>"/>
          </div>
          <div class="clearfloat mb10"></div>
          <div class="input-prepend"> <span class="add-on">打开方式</span>
            <select name="target" id="target" class="chosen-select" data-placeholder="正常">
              <option value="">正常</option>
              <option value="iPHP_FRAME">AJAX</option>
              <option value="_blank">新窗口</option>
            </select>
          </div>
          <div class="clearfloat mb10"></div>
          <div class="input-prepend"> <span class="add-on">菜单模式</span>
            <select name="data-toggle" id="data-toggle" class="chosen-select" data-placeholder="正常">
              <option value="">正常</option>
              <option value="dropdown">下拉菜单</option>
              <option value="modal">对话框</option>
            </select>
          </div>
          <div class="clearfloat mb10"></div>
          <div class="input-prepend"> <span class="add-on">对话框配置</span>
            <input type="text" name="data-meta" class="span3" id="data-meta" value='<?php echo $rs['data-meta'] ; ?>' />
          </div>
          <span class="help-inline">菜单模式:对话框 才填写相关配置</span>
          <div class="clearfloat mb10"></div>
          <div class="input-prepend"> <span class="add-on">菜单排序</span>
            <input id="orderNum" class="span1" value="<?php echo $rs['orderNum'] ; ?>" name="orderNum" type="text"/>
          </div>
        </div>
        <div class="form-actions">
          <button class="btn btn-primary" type="submit"><i class="fa fa-check"></i> 提交</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php iACP::foot();?>