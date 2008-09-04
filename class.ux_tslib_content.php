<?php
	/***************************************************************
	*  Copyright notice
	*
	*  (c) 200µ8 Remi Touja (remi.touja@gmail.com)
	*  All rights reserved
	*
	*  This script is part of the TYPO3 project. The TYPO3 project is
	*  free software; you can redistribute it and/or modify
	*  it under the terms of the GNU General Public License as published by
	*  the Free Software Foundation; either version 2 of the License, or
	*  (at your option) any later version.
	*
	*  The GNU General Public License can be found at
	*  http://www.gnu.org/copyleft/gpl.html.
	*
	*  This script is distributed in the hope that it will be useful,
	*  but WITHOUT ANY WARRANTY; without even the implied warranty of
	*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	*  GNU General Public License for more details.
	*
	*  This copyright notice MUST APPEAR in all copies of the script!
	***************************************************************/
	/**
	* Nova ShadowBox
	*
	* @author Remi Touja <remi.touja@gmail.com>
	*/
	class ux_tslib_cObj extends tslib_cObj {
		/**
		* Returns a <img> tag with the image file defined by $file and processed according to the properties in the TypoScript array.
		* Mostly this function is a sub-function to the IMAGE function which renders the IMAGE cObject in TypoScript. This function is called by "$this->cImage($conf['file'],$conf);" from IMAGE().
		*
		* @param string  File TypoScript resource
		* @param array  TypoScript configuration properties
		* @return string  <img> tag, (possibly wrapped in links and other HTML) if any image found.
		* @access private
		* @see IMAGE()
		*/
		function cImage($file, $conf) {
			$info = $this->getImgResource($file, $conf['file.']);
			$GLOBALS['TSFE']->lastImageInfo = $info;
			if (is_array($info)) {
				$info[3] = t3lib_div::png_to_gif_by_imagemagick($info[3]);
				$GLOBALS['TSFE']->imagesOnPage[] = $info[3];
				// This array is used to collect the image-refs on the page...

				if (!strlen($conf['altText']) && !is_array($conf['altText.'])) {
					// Backwards compatible:
					$conf['altText'] = $conf['alttext'];
					$conf['altText.'] = $conf['alttext.'];
				}
				$altParam = $this->getAltParam($conf);
				/**
				* Nova ShadowBox begin
				*/
				$theValue = '<img src="'.htmlspecialchars($GLOBALS['TSFE']->absRefPrefix.t3lib_div::rawUrlEncodeFP($info[3])).'" width="'.$info[0].'" height="'.$info[1].'"'.$this->getBorderAttr(' border="'.intval($conf['border']).'"').(($conf['params'] || is_array($conf['params.']))?' '.$this->stdwrap($conf['params'], $conf['params.']):'').($altParam).' />';
				if ($conf['file.']['novashadowbox']) {
					$extConf = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['novashadowbox']);
					//inscrustation du javascript
					$lConf = $conf['file.']['novashadowbox.'];
					//définition des options globales
					$options = 'var options={%s}';
					if(is_array($lConf['options.'])) {
						foreach($lConf['options.'] as $var => $value) {
							if ($value)$entries[] = $var.':\''.$value.'\'';
						}
						$options = sprintf($options, implode(',', $entries));
					} else {
						$options = sprintf($options, '');
					}
					($extConf['frameworkPath']) ? $GLOBALS['TSFE']->additionalHeaderData['frameworkPath'] = '<script src="'.$extConf['frameworkPath'].'" type="text/javascript"></script>':
					 '';
					($extConf['adapterPath']) ? $GLOBALS['TSFE']->additionalHeaderData['adapterPath'] = '<script src="'.$extConf['adapterPath'].'" type="text/javascript"></script>':
					 '';
					($extConf['shadowboxPath']) ? $GLOBALS['TSFE']->additionalHeaderData['shadowboxPath'] = '<script src="'.$extConf['shadowboxPath'].'" type="text/javascript"></script>':
					 '';
					if (!$GLOBALS['TSFE']->additionalHeaderData['shadowboxJs']) {
						$GLOBALS['TSFE']->additionalHeaderData['shadowboxJs'] = '
							<script type="text/javascript">
							Shadowbox.loadSkin("'.$extConf['setSkin'].'", "'.$extConf['skinFolder'].'");
							Shadowbox.loadLanguage("'.$extConf['setLang'].'", "'.$extConf['langFolder'].'");
							Shadowbox.loadPlayer('.$extConf['setPlayer'].', "'.$extConf['playerFolder'].'");

							window.onload = function(){
							'.$options.'
							Shadowbox.init(options);
							}
							</script>
							';
					}
					//on définit si l'image appartient à un groupe
					$imgSetNumber = (intval($lConf['imageset']) > 0)?intval($lConf['imageLightbox2.']['imageset']):
					$this->data['uid'];
					$imgSet = (intval($lConf['imageset']) > 0)?'['.$imgSetNumber.']':
					'';
					//si on définit "file", on crée une nouvelle image
					if ($lConf['file.']) {
						$newinfo = $this->getImgResource($file, $lConf['file.']);
						if (is_array($newinfo)) {
							$newinfo[3] = t3lib_div::png_to_gif_by_imagemagick($newinfo[3]);
						}
						$typolinkConf = array (
						'parameter' => $newinfo[3],
							'ATagParams' => 'rel="shadowbox'.$imgSet.'"',
							);
					} else {
						$typolinkConf = array(
						'parameter' => $info['origFile'],
							'ATagParams' => 'rel="shadowbox'.$imgSet.'"',
							);
					}
					if (!$this->data['image_link']) {
						$theValue = $this->typoLink($theValue, $typolinkConf);
					}
				}
				/**
				* Nova ShadowBox end
				*/
				if ($conf['linkWrap']) {
					$theValue = $this->linkWrap($theValue, $conf['linkWrap']);
				} elseif ($conf['imageLinkWrap']) {
					$theValue = $this->imageLinkWrap($theValue, $info['origFile'], $conf['imageLinkWrap.']);
				}
				return $this->wrap($theValue, $conf['wrap']);
			}
		}
	}
?>
