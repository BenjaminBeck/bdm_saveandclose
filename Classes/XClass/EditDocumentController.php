<?php
namespace BDM\BdmSaveandclose\XClass;

use TYPO3\CMS\Backend\Template\Components\ButtonBar;
use TYPO3\CMS\Core\Imaging\Icon;

/**
 * Created by PhpStorm.
 * User: benjamin
 * Date: 23.01.2019
 * Time: 20:12
 */

class EditDocumentController extends \TYPO3\CMS\Backend\Controller\EditDocumentController
{
	/**
	 * Register the save button to the button bar
	 *
	 * @param ButtonBar $buttonBar
	 * @param string $position
	 * @param int $group
	 */
	protected function registerSaveButtonToButtonBar(ButtonBar $buttonBar, string $position, int $group)
	{
		parent::registerSaveButtonToButtonBar($buttonBar, $position, $group);
		$saveButton = $buttonBar->makeInputButton()
			->setForm('EditDocumentController')
			->setIcon($this->moduleTemplate->getIconFactory()->getIcon('actions-document-save-close', Icon::SIZE_SMALL))
			->setName('_saveandclosedok')
			->setShowLabelText(false)
			->setTitle($this->getLanguageService()->sL(
				'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:rm.saveCloseDoc'
			))
			->setValue('1');

		$buttonBar->addButton($saveButton, $position, $group);
	}
}
