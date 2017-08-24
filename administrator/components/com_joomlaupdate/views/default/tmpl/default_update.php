<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_joomlaupdate
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/** @var JoomlaupdateViewDefault $this */
?>

<style>
	fieldset.col {
		display: inline-block;
		width: 40%;
		vertical-align: top;
		margin-right: 20pt;
	}
</style>

<fieldset>
	<legend>
		<?php echo JText::_('COM_JOOMLAUPDATE_VIEW_DEFAULT_UPDATEFOUND'); ?>
	</legend>
	<p>
		<?php echo JText::sprintf($this->langKey, $this->updateSourceKey); ?>
	</p>

	<table class="table table-striped">
		<tbody>
		<tr>
			<td>
				<?php echo JText::_('COM_JOOMLAUPDATE_VIEW_DEFAULT_INSTALLED'); ?>
			</td>
			<td>
				<?php echo $this->updateInfo['installed']; ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo JText::_('COM_JOOMLAUPDATE_VIEW_DEFAULT_LATEST'); ?>
			</td>
			<td>
				<?php echo $this->updateInfo['latest']; ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo JText::_('COM_JOOMLAUPDATE_VIEW_DEFAULT_PACKAGE'); ?>
			</td>
			<td>
				<a href="<?php echo $this->updateInfo['object']->downloadurl->_data; ?>">
					<?php echo $this->updateInfo['object']->downloadurl->_data; ?>
				</a>
			</td>
		</tr>
		<?php if (isset($this->updateInfo['object']->get('infourl')->_data)
			&& isset($this->updateInfo['object']->get('infourl')->title)) : ?>
			<tr>
				<td>
					<?php echo JText::_('COM_JOOMLAUPDATE_VIEW_DEFAULT_INFOURL'); ?>
				</td>
				<td>
					<a href="<?php echo $this->updateInfo['object']->get('infourl')->_data; ?>">
						<?php echo $this->updateInfo['object']->get('infourl')->title; ?>
					</a>
				</td>
			</tr>
		<?php endif; ?>
		<tr>
			<td>
				<?php echo JText::_('COM_JOOMLAUPDATE_VIEW_DEFAULT_METHOD'); ?>
			</td>
			<td>
				<?php echo $this->methodSelect; ?>
			</td>
		</tr>
		<tr id="row_ftp_hostname" <?php echo $this->ftpFieldsDisplay; ?>>
			<td>
				<?php echo JText::_('COM_JOOMLAUPDATE_VIEW_DEFAULT_FTP_HOSTNAME'); ?>
			</td>
			<td>
				<input type="text" name="ftp_host" value="<?php echo $this->ftp['host']; ?>" />
			</td>
		</tr>
		<tr id="row_ftp_port" <?php echo $this->ftpFieldsDisplay; ?>>
			<td>
				<?php echo JText::_('COM_JOOMLAUPDATE_VIEW_DEFAULT_FTP_PORT'); ?>
			</td>
			<td>
				<input type="text" name="ftp_port" value="<?php echo $this->ftp['port']; ?>" />
			</td>
		</tr>
		<tr id="row_ftp_username" <?php echo $this->ftpFieldsDisplay; ?>>
			<td>
				<?php echo JText::_('COM_JOOMLAUPDATE_VIEW_DEFAULT_FTP_USERNAME'); ?>
			</td>
			<td>
				<input type="text" name="ftp_user" value="<?php echo $this->ftp['username']; ?>" />
			</td>
		</tr>
		<tr id="row_ftp_password" <?php echo $this->ftpFieldsDisplay; ?>>
			<td>
				<?php echo JText::_('COM_JOOMLAUPDATE_VIEW_DEFAULT_FTP_PASSWORD'); ?>
			</td>
			<td>
				<input type="password" name="ftp_pass" value="<?php echo $this->ftp['password']; ?>" />
			</td>
		</tr>
		<tr id="row_ftp_directory" <?php echo $this->ftpFieldsDisplay; ?>>
			<td>
				<?php echo JText::_('COM_JOOMLAUPDATE_VIEW_DEFAULT_FTP_DIRECTORY'); ?>
			</td>
			<td>
				<input type="text" name="ftp_root" value="<?php echo $this->ftp['directory']; ?>" />
			</td>
		</tr>
		</tbody>
		<tfoot>
		<tr>
			<td>
				&nbsp;
			</td>
			<td>
				<button class="btn btn-primary" type="submit">
					<?php echo JText::_('COM_JOOMLAUPDATE_VIEW_DEFAULT_INSTALLUPDATE'); ?>
				</button>
			</td>
		</tr>
		</tfoot>
	</table>
</fieldset>

<h2>
	Joomla!
	<?php echo $this->updateInfo['latest']; ?>
	<?php echo JText::_('COM_JOOMLAUPDATE_VIEW_DEFAULT_COMPATIBILITY_CHECK'); ?>
</h2>

<fieldset class="col">
	<legend>
		<?php echo JText::_('COM_JOOMLAUPDATE_VIEW_DEFAULT_PREUPDATE_CHECK'); ?>
	</legend>
	<table class="table">
		<tbody>
		<?php foreach ($this->phpOptions as $option): ?>
			<tr>
				<td>
					<?php echo $option->label; ?>
				</td>
				<td>
					<?php if ($option->state == true): ?>
						<p class="label label-success">
							<?php echo JText::_('COM_JOOMLAUPDATE_VIEW_DEFAULT_PREUPDATE_CHECK_YES'); ?>
						</p>
					<?php else: ?>
						<p class="label label-important">
							<?php echo JText::_('COM_JOOMLAUPDATE_VIEW_DEFAULT_PREUPDATE_CHECK_NO'); ?>
						</p>
					<?php endif; ?>
				</td>
				<td>
					<p class=""><?php echo $option->notice ?></p>
				</td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</fieldset>

<fieldset class="col">
	<legend>
		<?php echo JText::_('COM_JOOMLAUPDATE_VIEW_DEFAULT_RECOMMENDED_SETTINGS'); ?>
	</legend>
	<p>
		<?php echo JText::_('COM_JOOMLAUPDATE_VIEW_DEFAULT_RECOMMENDED_SETTINGS_DESC'); ?>
	</p>

	<table class="table">
		<thead>
		<tr>
			<td>
				<?php echo JText::_('COM_JOOMLAUPDATE_VIEW_DEFAULT_DIRECTIVE'); ?>
			</td>
			<td>
				<?php echo JText::_('COM_JOOMLAUPDATE_VIEW_DEFAULT_RECOMMENDED'); ?>
			</td>
			<td>
				<?php echo JText::_('COM_JOOMLAUPDATE_VIEW_DEFAULT_ACTUAL'); ?>
			</td>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($this->phpSettings as $setting): ?>
			<tr>
				<td>
					<?php echo $setting->label; ?>
				</td>
				<td>
					<?php if ($setting->recommended == true): ?>
						<p class="label label-success">
							<?php echo JText::_('COM_JOOMLAUPDATE_VIEW_DEFAULT_PREUPDATE_CHECK_ON'); ?>
						</p>
					<?php else: ?>
						<p class="label">
							<?php echo JText::_('COM_JOOMLAUPDATE_VIEW_DEFAULT_PREUPDATE_CHECK_OFF'); ?>
						</p>
					<?php endif; ?>
				</td>
				<td>
					<?php if ($setting->state == $setting->recommended): ?>
					<p class="label label-success">
					<?php else: ?>
					<p class="label label-important">
					<?php endif; ?>
					<?php if ($setting->state == true): ?>
							<?php echo JText::_('COM_JOOMLAUPDATE_VIEW_DEFAULT_PREUPDATE_CHECK_ON'); ?>
						</p>
					<?php else: ?>
							<?php echo JText::_('COM_JOOMLAUPDATE_VIEW_DEFAULT_PREUPDATE_CHECK_OFF'); ?>
						</p>
					<?php endif; ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</fieldset>

<fieldset class="col">
	<legend>
		<?php echo JText::_('COM_JOOMLAUPDATE_VIEW_DEFAULT_EXTENSIONS'); ?>
	</legend>

	<table class="table">
		<thead>
		<tr>
			<td>
				<?php echo JText::_('COM_JOOMLAUPDATE_VIEW_DEFAULT_EXTENSION_NAME'); ?>
			</td>
			<td>
				<?php echo JText::_('COM_JOOMLAUPDATE_VIEW_DEFAULT_EXTENSION_COMPATIBLE'); ?>
			</td>
		</tr>
		</thead>
		<tbody>
		<?php foreach (array((object)array("label" => "com_thmusers", "state" => 1), (object)array("label" => "plg_thmusers", "state" => 0), (object)array("label" => "mod_thmusers", "state" => 2), (object)array("label" => "com_mycomp", "state" => 3)) as $extension): ?>
			<tr>
				<td>
					<?php echo $extension->label; ?>
				</td>
				<td id="versionresult_<?php echo $extension->label; ?>">
					<img src="../media/system/images/mootree_loader.gif">
					<?php if ($extension->state == 0): ?>
						<p class="label label-important">
							<?php echo JText::_('COM_JOOMLAUPDATE_VIEW_DEFAULT_PREUPDATE_CHECK_NO'); ?>
						</p>
					<?php elseif ($extension->state == 1): ?>
						<p class="label label-success">
							<?php echo JText::_('COM_JOOMLAUPDATE_VIEW_DEFAULT_PREUPDATE_CHECK_YES'); ?>
						</p>
					<?php elseif ($extension->state == 2): ?>
						<p class="label label-warning">
							<?php echo JText::_('COM_JOOMLAUPDATE_VIEW_DEFAULT_EXTENSION_VERSION_MISSING'); ?>
						</p>
					<?php else: ?>
						<p class="label">
							<?php echo JText::_('COM_JOOMLAUPDATE_VIEW_DEFAULT_EXTENSION_WARNING_UNKNOWN'); ?>
						</p>
					<?php endif; ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</fieldset>