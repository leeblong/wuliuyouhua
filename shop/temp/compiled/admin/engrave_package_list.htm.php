<!-- $Id: package_list.htm 17126 2010-04-23 10:30:26Z liuhui $ -->
    foreach ($_from AS $this->_var['package']):
?>
if ($this->_foreach['name_service']['total'] > 0):
    foreach ($_from AS $this->_var['service']):
        $this->_foreach['name_service']['iteration']++;
?>
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>