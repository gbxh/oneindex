<?php view::layout('install/layout')?>

<?php view::begin('content');?>
	
<div class="mdui-container-fluid">
	<div class="mdui-typo">
	  <h1>程序安装 <small>设置应用ID和机密</small></h1>
	</div>

	<div class="mdui-typo">
      <h4 class="doc-article-title">
	    填入<code>client_id</code>和<code>client_secret</code>,
      	<span>根据你的Onedrive供应商选择：</span>
      </h4>
    </div>

	<form action="" method="post">

		<div class="mdui-textfield mdui-textfield-floating-label">
			<label class="mdui-radio">
				<input type="radio" name="area" value="us" checked/>
				<i class="mdui-radio-icon"></i>
				国际版
			</label>
			
			<label class="mdui-radio">
				<input type="radio" name="area" value="cn"/>
				<i class="mdui-radio-icon"></i>
				世纪互联版
			</label>
		</div>
		<div class="mdui-textfield mdui-textfield-floating-label">
			<i class="mdui-icon material-icons">https</i>
			<label class="mdui-textfield-label">应用机密(client secret)</label>
			<input type="text" type="text" class="mdui-textfield-input" name="client_secret" required value="<?php echo config('client_secret');?>"/>
			<div class="mdui-textfield-error">应用机密不能为空</div>
		</div>
		<br>
		<div class="mdui-textfield mdui-textfield-floating-label">
		  	<i class="mdui-icon material-icons">&#xe5c3;</i>
		  	<label class="mdui-textfield-label">应用 ID(client_id)</label>
		  	<input type="text" class="mdui-textfield-input" name="client_id" required value="<?php echo config('client_id');?>"/>
		  	<div class="mdui-textfield-error">应用 ID不能为空</div>
		</div>
		<br>

		<div class="mdui-textfield mdui-textfield-floating-label">
		   <i class="mdui-icon material-icons">&#xe41a;</i>
		   <?php if($redirect_uri == 'https://ju.tn/'):?>
		   <label class="mdui-textfield-label">由于你的网站不是<b>http://localhost/</b>。将通过ju.tn进行中转</label>
		   <?php endif;?>
		   <label class="mdui-textfield-label"><?php echo $redirect_uri;?></label>
		   <input type="text" class="mdui-textfield-input" disabled  value="<?php echo $redirect_uri;?>"/>
		   <input type="hidden" class="mdui-textfield-input" name="redirect_uri" value="<?php echo $redirect_uri;?>"/>
		   <div class="mdui-textfield-error">重定向URL不能为空</div>
		</div>
		<br>
	 <a class="mdui-btn mdui-btn-raised mdui-float-left" href="?step=0">上一步</a>
	 <button class="mdui-btn mdui-color-theme-accent mdui-ripple mdui-float-right" type="submit">下一步</button>
	</form>

	
</div>

<?php view::end('content');?>