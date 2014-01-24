

<form action="<?php echo JRoute::_('index.php?option=com_helpmio&view=settings'); ?>" method="post" name="adminForm" id="adminForm">
<input type="hidden" value="com_helpmio" name="option">
<input type="hidden" value="configs" name="view">
<input type="hidden" value="create" name="task">
Make all items with language id: <input type="text" value="" name="langid1" width="3" /> available to language id: <input type="text" value="" name="langid2" width="4"/><br />
Include:<br />
<input type="checkbox" value="1" name="products" />Products<br />
<input type="checkbox" value="1" name="categorys" />Categorys<br />
<input type="checkbox" value="1" name="options" />Options<br />
<input type="checkbox" value="1" name="attributes" />Attributes<br />
<input type="checkbox" value="1" name="banners" />Banners<br />
<input type="checkbox" value="1" name="information" />Information<br /><br />
<input type="submit" value="Create language items" id="backup-start" class="btn btn-primary" >
</form>